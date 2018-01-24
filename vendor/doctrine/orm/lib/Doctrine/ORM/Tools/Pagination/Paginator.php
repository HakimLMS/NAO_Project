<?php
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
 */

namespace Doctrine\ORM\Tools\Pagination;

use Doctrine\ORM\Query\Parser;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Query;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\NoResultException;

/**
 * The paginator can handle various complex scenarios with DQL.
 *
 * @author Pablo Díez <pablodip@gmail.com>
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @license New BSD
 */
class Paginator implements \Countable, \IteratorAggregate
{
    /**
     * @var Query
     */
    private $query;

    /**
     * @var bool
     */
    private $fetchJoinCollection;

    /**
     * @var bool|null
     */
    private $useOutputWalkers;

    /**
     * @var int
     */
    private $count;

    /**
     * Constructor.
     *
     * @param Query|QueryBuilder $query               A Doctrine ORM query or query builder.
     * @param boolean            $fetchJoinCollection Whether the query joins a collection (true by default).
     */
    public function __construct($query, $fetchJoinCollection = true)
    {
        if ($query instanceof QueryBuilder) {
            $query = $query->getQuery();
        }

        $this->query = $query;
<<<<<<< HEAD
<<<<<<< HEAD
        $this->fetchJoinCollection = (bool) $fetchJoinCollection;
=======
        $this->fetchJoinCollection = (Boolean) $fetchJoinCollection;
>>>>>>> contactmanager
=======
        $this->fetchJoinCollection = (bool) $fetchJoinCollection;
>>>>>>> donmanager
    }

    /**
     * Returns the query.
     *
     * @return Query
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Returns whether the query joins a collection.
     *
     * @return boolean Whether the query joins a collection.
     */
    public function getFetchJoinCollection()
    {
        return $this->fetchJoinCollection;
    }

    /**
     * Returns whether the paginator will use an output walker.
     *
     * @return bool|null
     */
    public function getUseOutputWalkers()
    {
        return $this->useOutputWalkers;
    }

    /**
     * Sets whether the paginator will use an output walker.
     *
     * @param bool|null $useOutputWalkers
     *
     * @return $this
     */
    public function setUseOutputWalkers($useOutputWalkers)
    {
        $this->useOutputWalkers = $useOutputWalkers;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> contactmanager
=======

>>>>>>> donmanager
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function count()
    {
        if ($this->count === null) {
            try {
                $this->count = array_sum(array_map('current', $this->getCountQuery()->getScalarResult()));
<<<<<<< HEAD
<<<<<<< HEAD
            } catch (NoResultException $e) {
=======
            } catch(NoResultException $e) {
>>>>>>> contactmanager
=======
            } catch (NoResultException $e) {
>>>>>>> donmanager
                $this->count = 0;
            }
        }

        return $this->count;
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        $offset = $this->query->getFirstResult();
        $length = $this->query->getMaxResults();

        if ($this->fetchJoinCollection) {
            $subQuery = $this->cloneQuery($this->query);

            if ($this->useOutputWalker($subQuery)) {
<<<<<<< HEAD
<<<<<<< HEAD
                $subQuery->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, LimitSubqueryOutputWalker::class);
            } else {
                $this->appendTreeWalker($subQuery, LimitSubqueryWalker::class);
=======
                $subQuery->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, 'Doctrine\ORM\Tools\Pagination\LimitSubqueryOutputWalker');
            } else {
                $this->appendTreeWalker($subQuery, 'Doctrine\ORM\Tools\Pagination\LimitSubqueryWalker');
>>>>>>> contactmanager
=======
                $subQuery->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, LimitSubqueryOutputWalker::class);
            } else {
                $this->appendTreeWalker($subQuery, LimitSubqueryWalker::class);
>>>>>>> donmanager
            }

            $subQuery->setFirstResult($offset)->setMaxResults($length);

            $ids = array_map('current', $subQuery->getScalarResult());

            $whereInQuery = $this->cloneQuery($this->query);
            // don't do this for an empty id array
<<<<<<< HEAD
<<<<<<< HEAD
            if (count($ids) === 0) {
                return new \ArrayIterator([]);
            }

            $this->appendTreeWalker($whereInQuery, WhereInWalker::class);
=======
            if (count($ids) == 0) {
                return new \ArrayIterator(array());
            }

            $this->appendTreeWalker($whereInQuery, 'Doctrine\ORM\Tools\Pagination\WhereInWalker');
>>>>>>> contactmanager
=======
            if (count($ids) === 0) {
                return new \ArrayIterator([]);
            }

            $this->appendTreeWalker($whereInQuery, WhereInWalker::class);
>>>>>>> donmanager
            $whereInQuery->setHint(WhereInWalker::HINT_PAGINATOR_ID_COUNT, count($ids));
            $whereInQuery->setFirstResult(null)->setMaxResults(null);
            $whereInQuery->setParameter(WhereInWalker::PAGINATOR_ID_ALIAS, $ids);
            $whereInQuery->setCacheable($this->query->isCacheable());

            $result = $whereInQuery->getResult($this->query->getHydrationMode());
        } else {
            $result = $this->cloneQuery($this->query)
                ->setMaxResults($length)
                ->setFirstResult($offset)
                ->setCacheable($this->query->isCacheable())
                ->getResult($this->query->getHydrationMode())
            ;
        }

        return new \ArrayIterator($result);
    }

    /**
     * Clones a query.
     *
     * @param Query $query The query.
     *
     * @return Query The cloned query.
     */
    private function cloneQuery(Query $query)
    {
        /* @var $cloneQuery Query */
        $cloneQuery = clone $query;

        $cloneQuery->setParameters(clone $query->getParameters());
        $cloneQuery->setCacheable(false);

        foreach ($query->getHints() as $name => $value) {
            $cloneQuery->setHint($name, $value);
        }

        return $cloneQuery;
    }

    /**
     * Determines whether to use an output walker for the query.
     *
     * @param Query $query The query.
     *
     * @return bool
     */
    private function useOutputWalker(Query $query)
    {
        if ($this->useOutputWalkers === null) {
<<<<<<< HEAD
<<<<<<< HEAD
            return (bool) $query->getHint(Query::HINT_CUSTOM_OUTPUT_WALKER) === false;
=======
            return (Boolean) $query->getHint(Query::HINT_CUSTOM_OUTPUT_WALKER) == false;
>>>>>>> contactmanager
=======
            return (bool) $query->getHint(Query::HINT_CUSTOM_OUTPUT_WALKER) === false;
>>>>>>> donmanager
        }

        return $this->useOutputWalkers;
    }

    /**
     * Appends a custom tree walker to the tree walkers hint.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Query  $query
=======
     * @param Query $query
>>>>>>> contactmanager
=======
     * @param Query  $query
>>>>>>> donmanager
     * @param string $walkerClass
     */
    private function appendTreeWalker(Query $query, $walkerClass)
    {
        $hints = $query->getHint(Query::HINT_CUSTOM_TREE_WALKERS);

        if ($hints === false) {
<<<<<<< HEAD
<<<<<<< HEAD
            $hints = [];
=======
            $hints = array();
>>>>>>> contactmanager
=======
            $hints = [];
>>>>>>> donmanager
        }

        $hints[] = $walkerClass;
        $query->setHint(Query::HINT_CUSTOM_TREE_WALKERS, $hints);
    }

    /**
     * Returns Query prepared to count.
     *
     * @return Query
     */
    private function getCountQuery()
    {
        /* @var $countQuery Query */
        $countQuery = $this->cloneQuery($this->query);

        if ( ! $countQuery->hasHint(CountWalker::HINT_DISTINCT)) {
            $countQuery->setHint(CountWalker::HINT_DISTINCT, true);
        }

        if ($this->useOutputWalker($countQuery)) {
            $platform = $countQuery->getEntityManager()->getConnection()->getDatabasePlatform(); // law of demeter win

            $rsm = new ResultSetMapping();
            $rsm->addScalarResult($platform->getSQLResultCasing('dctrn_count'), 'count');

<<<<<<< HEAD
<<<<<<< HEAD
            $countQuery->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, CountOutputWalker::class);
            $countQuery->setResultSetMapping($rsm);
        } else {
            $this->appendTreeWalker($countQuery, CountWalker::class);
=======
            $countQuery->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, 'Doctrine\ORM\Tools\Pagination\CountOutputWalker');
            $countQuery->setResultSetMapping($rsm);
        } else {
            $this->appendTreeWalker($countQuery, 'Doctrine\ORM\Tools\Pagination\CountWalker');
>>>>>>> contactmanager
=======
            $countQuery->setHint(Query::HINT_CUSTOM_OUTPUT_WALKER, CountOutputWalker::class);
            $countQuery->setResultSetMapping($rsm);
        } else {
            $this->appendTreeWalker($countQuery, CountWalker::class);
>>>>>>> donmanager
        }

        $countQuery->setFirstResult(null)->setMaxResults(null);

        $parser            = new Parser($countQuery);
        $parameterMappings = $parser->parse()->getParameterMappings();
        /* @var $parameters \Doctrine\Common\Collections\Collection|\Doctrine\ORM\Query\Parameter[] */
        $parameters        = $countQuery->getParameters();

        foreach ($parameters as $key => $parameter) {
            $parameterName = $parameter->getName();

<<<<<<< HEAD
<<<<<<< HEAD
            if ( ! (isset($parameterMappings[$parameterName]) || array_key_exists($parameterName, $parameterMappings))) {
=======
            if( ! (isset($parameterMappings[$parameterName]) || array_key_exists($parameterName, $parameterMappings))) {
>>>>>>> contactmanager
=======
            if ( ! (isset($parameterMappings[$parameterName]) || array_key_exists($parameterName, $parameterMappings))) {
>>>>>>> donmanager
                unset($parameters[$key]);
            }
        }

        $countQuery->setParameters($parameters);

        return $countQuery;
    }
}
