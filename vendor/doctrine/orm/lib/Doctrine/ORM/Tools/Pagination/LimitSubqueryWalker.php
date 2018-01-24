<?php
<<<<<<< HEAD
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
=======

/**
 * Doctrine ORM
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE. This license can also be viewed
 * at http://hobodave.com/license.txt
 *
 * @category    DoctrineExtensions
 * @package     DoctrineExtensions\Paginate
 * @author      David Abdemoulaie <dave@hobodave.com>
 * @copyright   Copyright (c) 2010 David Abdemoulaie (http://hobodave.com/)
 * @license     http://hobodave.com/license.txt New BSD License
>>>>>>> contactmanager
 */

namespace Doctrine\ORM\Tools\Pagination;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\Mapping\ClassMetadataInfo;
<<<<<<< HEAD
=======
use Doctrine\ORM\ORMException;
>>>>>>> contactmanager
use Doctrine\ORM\Query;
use Doctrine\ORM\Query\TreeWalkerAdapter;
use Doctrine\ORM\Query\AST\Functions\IdentityFunction;
use Doctrine\ORM\Query\AST\PathExpression;
use Doctrine\ORM\Query\AST\SelectExpression;
use Doctrine\ORM\Query\AST\SelectStatement;

/**
 * Replaces the selectClause of the AST with a SELECT DISTINCT root.id equivalent.
 *
 * @category    DoctrineExtensions
 * @package     DoctrineExtensions\Paginate
 * @author      David Abdemoulaie <dave@hobodave.com>
 * @copyright   Copyright (c) 2010 David Abdemoulaie (http://hobodave.com/)
 * @license     http://hobodave.com/license.txt New BSD License
 */
class LimitSubqueryWalker extends TreeWalkerAdapter
{
    /**
     * ID type hint.
     */
    const IDENTIFIER_TYPE = 'doctrine_paginator.id.type';

    /**
     * Counter for generating unique order column aliases.
     *
     * @var int
     */
    private $_aliasCounter = 0;

    /**
     * Walks down a SelectStatement AST node, modifying it to retrieve DISTINCT ids
     * of the root Entity.
     *
     * @param SelectStatement $AST
     *
     * @return void
     *
     * @throws \RuntimeException
     */
    public function walkSelectStatement(SelectStatement $AST)
    {
        $queryComponents = $this->_getQueryComponents();
        // Get the root entity and alias from the AST fromClause
        $from      = $AST->fromClause->identificationVariableDeclarations;
        $fromRoot  = reset($from);
        $rootAlias = $fromRoot->rangeVariableDeclaration->aliasIdentificationVariable;
        $rootClass = $queryComponents[$rootAlias]['metadata'];
<<<<<<< HEAD

        $this->validate($AST);
        $identifier = $rootClass->getSingleIdentifierFieldName();

=======
        $selectExpressions = array();

        $this->validate($AST);

        foreach ($queryComponents as $dqlAlias => $qComp) {
            // Preserve mixed data in query for ordering.
            if (isset($qComp['resultVariable'])) {
                $selectExpressions[] = new SelectExpression($qComp['resultVariable'], $dqlAlias);
                continue;
            }
        }
        
        $identifier = $rootClass->getSingleIdentifierFieldName();
        
>>>>>>> contactmanager
        if (isset($rootClass->associationMappings[$identifier])) {
            throw new \RuntimeException("Paginating an entity with foreign key as identifier only works when using the Output Walkers. Call Paginator#setUseOutputWalkers(true) before iterating the paginator.");
        }

        $this->_getQuery()->setHint(
            self::IDENTIFIER_TYPE,
<<<<<<< HEAD
            Type::getType($rootClass->fieldMappings[$identifier]['type'])
=======
            Type::getType($rootClass->getTypeOfField($identifier))
>>>>>>> contactmanager
        );

        $pathExpression = new PathExpression(
            PathExpression::TYPE_STATE_FIELD | PathExpression::TYPE_SINGLE_VALUED_ASSOCIATION,
            $rootAlias,
            $identifier
        );
<<<<<<< HEAD

        $pathExpression->type = PathExpression::TYPE_STATE_FIELD;

        $AST->selectClause->selectExpressions = [new SelectExpression($pathExpression, '_dctrn_id')];
        $AST->selectClause->isDistinct        = true;

        if ( ! isset($AST->orderByClause)) {
            return;
        }

        foreach ($AST->orderByClause->orderByItems as $item) {
            if ($item->expression instanceof PathExpression) {
                $AST->selectClause->selectExpressions[] = new SelectExpression(
                    $this->createSelectExpressionItem($item->expression), '_dctrn_ord' . $this->_aliasCounter++
                );

                continue;
            }

            if (is_string($item->expression) && isset($queryComponents[$item->expression])) {
                $qComp = $queryComponents[$item->expression];

                if (isset($qComp['resultVariable'])) {
                    $AST->selectClause->selectExpressions[] = new SelectExpression(
                        $qComp['resultVariable'],
                        $item->expression
                    );
                }
            }
        }
=======
        $pathExpression->type = PathExpression::TYPE_STATE_FIELD;

        array_unshift($selectExpressions, new SelectExpression($pathExpression, '_dctrn_id'));
        $AST->selectClause->selectExpressions = $selectExpressions;

        if (isset($AST->orderByClause)) {
            foreach ($AST->orderByClause->orderByItems as $item) {
                if ( ! $item->expression instanceof PathExpression) {
                    continue;
                }
                
                $AST->selectClause->selectExpressions[] = new SelectExpression(
                    $this->createSelectExpressionItem($item->expression),
                    '_dctrn_ord' . $this->_aliasCounter++
                );
            }
        }

        $AST->selectClause->isDistinct = true;
>>>>>>> contactmanager
    }

    /**
     * Validate the AST to ensure that this walker is able to properly manipulate it.
     *
     * @param SelectStatement $AST
     */
    private function validate(SelectStatement $AST)
    {
        // Prevent LimitSubqueryWalker from being used with queries that include
        // a limit, a fetched to-many join, and an order by condition that
        // references a column from the fetch joined table.
        $queryComponents = $this->getQueryComponents();
        $query           = $this->_getQuery();
        $from            = $AST->fromClause->identificationVariableDeclarations;
        $fromRoot        = reset($from);

        if ($query instanceof Query
<<<<<<< HEAD
            && null !== $query->getMaxResults()
=======
            && $query->getMaxResults()
>>>>>>> contactmanager
            && $AST->orderByClause
            && count($fromRoot->joins)) {
            // Check each orderby item.
            // TODO: check complex orderby items too...
            foreach ($AST->orderByClause->orderByItems as $orderByItem) {
                $expression = $orderByItem->expression;
                if ($orderByItem->expression instanceof PathExpression
                    && isset($queryComponents[$expression->identificationVariable])) {
                    $queryComponent = $queryComponents[$expression->identificationVariable];
                    if (isset($queryComponent['parent'])
                        && $queryComponent['relation']['type'] & ClassMetadataInfo::TO_MANY) {
                        throw new \RuntimeException("Cannot select distinct identifiers from query with LIMIT and ORDER BY on a column from a fetch joined to-many association. Use output walkers.");
                    }
                }
            }
        }
    }
<<<<<<< HEAD

    /**
     * Retrieve either an IdentityFunction (IDENTITY(u.assoc)) or a state field (u.name).
     *
     * @param \Doctrine\ORM\Query\AST\PathExpression $pathExpression
     *
=======
    
    /**
     * Retrieve either an IdentityFunction (IDENTITY(u.assoc)) or a state field (u.name).
     * 
     * @param \Doctrine\ORM\Query\AST\PathExpression $pathExpression
     * 
>>>>>>> contactmanager
     * @return \Doctrine\ORM\Query\AST\Functions\IdentityFunction
     */
    private function createSelectExpressionItem(PathExpression $pathExpression)
    {
        if ($pathExpression->type === PathExpression::TYPE_SINGLE_VALUED_ASSOCIATION) {
            $identity = new IdentityFunction('identity');
<<<<<<< HEAD

            $identity->pathExpression = clone $pathExpression;

            return $identity;
        }

=======
            
            $identity->pathExpression = clone $pathExpression;
            
            return $identity;
        }
        
>>>>>>> contactmanager
        return clone $pathExpression;
    }
}
