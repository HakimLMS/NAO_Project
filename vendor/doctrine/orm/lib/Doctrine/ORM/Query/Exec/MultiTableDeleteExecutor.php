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

namespace Doctrine\ORM\Query\Exec;

use Doctrine\DBAL\Connection;
<<<<<<< HEAD
use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\Query\AST;
use Doctrine\ORM\Utility\PersisterHelper;
use Throwable;
=======
use Doctrine\ORM\Query\AST;
>>>>>>> contactmanager

/**
 * Executes the SQL statements for bulk DQL DELETE statements on classes in
 * Class Table Inheritance (JOINED).
 *
 * @author      Roman Borschel <roman@code-factory.org>
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://www.doctrine-project.org
 * @since       2.0
 */
class MultiTableDeleteExecutor extends AbstractSqlExecutor
{
    /**
     * @var string
     */
    private $_createTempTableSql;

    /**
     * @var string
     */
    private $_dropTempTableSql;

    /**
     * @var string
     */
    private $_insertSql;

    /**
     * Initializes a new <tt>MultiTableDeleteExecutor</tt>.
     *
     * Internal note: Any SQL construction and preparation takes place in the constructor for
     *                best performance. With a query cache the executor will be cached.
     *
     * @param \Doctrine\ORM\Query\AST\Node  $AST       The root AST node of the DQL query.
     * @param \Doctrine\ORM\Query\SqlWalker $sqlWalker The walker used for SQL generation from the AST.
     */
    public function __construct(AST\Node $AST, $sqlWalker)
    {
        $em             = $sqlWalker->getEntityManager();
        $conn           = $em->getConnection();
        $platform       = $conn->getDatabasePlatform();
        $quoteStrategy  = $em->getConfiguration()->getQuoteStrategy();

        $primaryClass       = $em->getClassMetadata($AST->deleteClause->abstractSchemaName);
        $primaryDqlAlias    = $AST->deleteClause->aliasIdentificationVariable;
        $rootClass          = $em->getClassMetadata($primaryClass->rootEntityName);

        $tempTable      = $platform->getTemporaryTableName($rootClass->getTemporaryIdTableName());
        $idColumnNames  = $rootClass->getIdentifierColumnNames();
        $idColumnList   = implode(', ', $idColumnNames);

        // 1. Create an INSERT INTO temptable ... SELECT identifiers WHERE $AST->getWhereClause()
        $sqlWalker->setSQLTableAlias($primaryClass->getTableName(), 't0', $primaryDqlAlias);

        $this->_insertSql = 'INSERT INTO ' . $tempTable . ' (' . $idColumnList . ')'
                . ' SELECT t0.' . implode(', t0.', $idColumnNames);

        $rangeDecl = new AST\RangeVariableDeclaration($primaryClass->name, $primaryDqlAlias);
<<<<<<< HEAD
        $fromClause = new AST\FromClause([new AST\IdentificationVariableDeclaration($rangeDecl, null, [])]);
=======
        $fromClause = new AST\FromClause(array(new AST\IdentificationVariableDeclaration($rangeDecl, null, array())));
>>>>>>> contactmanager
        $this->_insertSql .= $sqlWalker->walkFromClause($fromClause);

        // Append WHERE clause, if there is one.
        if ($AST->whereClause) {
            $this->_insertSql .= $sqlWalker->walkWhereClause($AST->whereClause);
        }

        // 2. Create ID subselect statement used in DELETE ... WHERE ... IN (subselect)
        $idSubselect = 'SELECT ' . $idColumnList . ' FROM ' . $tempTable;

        // 3. Create and store DELETE statements
<<<<<<< HEAD
        $classNames = array_merge($primaryClass->parentClasses, [$primaryClass->name], $primaryClass->subClasses);
=======
        $classNames = array_merge($primaryClass->parentClasses, array($primaryClass->name), $primaryClass->subClasses);
>>>>>>> contactmanager
        foreach (array_reverse($classNames) as $className) {
            $tableName = $quoteStrategy->getTableName($em->getClassMetadata($className), $platform);
            $this->_sqlStatements[] = 'DELETE FROM ' . $tableName
                    . ' WHERE (' . $idColumnList . ') IN (' . $idSubselect . ')';
        }

        // 4. Store DDL for temporary identifier table.
<<<<<<< HEAD
        $columnDefinitions = [];
        foreach ($idColumnNames as $idColumnName) {
            $columnDefinitions[$idColumnName] = [
                'notnull' => true,
                'type'    => Type::getType(PersisterHelper::getTypeOfColumn($idColumnName, $rootClass, $em)),
            ];
=======
        $columnDefinitions = array();
        foreach ($idColumnNames as $idColumnName) {
            $columnDefinitions[$idColumnName] = array(
                'notnull' => true,
                'type' => \Doctrine\DBAL\Types\Type::getType($rootClass->getTypeOfColumn($idColumnName))
            );
>>>>>>> contactmanager
        }
        $this->_createTempTableSql = $platform->getCreateTemporaryTableSnippetSQL() . ' ' . $tempTable . ' ('
                . $platform->getColumnDeclarationListSQL($columnDefinitions) . ')';
        $this->_dropTempTableSql = $platform->getDropTemporaryTableSQL($tempTable);
    }

    /**
     * {@inheritDoc}
     */
    public function execute(Connection $conn, array $params, array $types)
    {
<<<<<<< HEAD
=======
        $numDeleted = 0;

>>>>>>> contactmanager
        // Create temporary id table
        $conn->executeUpdate($this->_createTempTableSql);

        try {
            // Insert identifiers
            $numDeleted = $conn->executeUpdate($this->_insertSql, $params, $types);

            // Execute DELETE statements
            foreach ($this->_sqlStatements as $sql) {
                $conn->executeUpdate($sql);
            }
<<<<<<< HEAD
        } catch (Throwable $exception) {
=======
        } catch (\Exception $exception) {
>>>>>>> contactmanager
            // FAILURE! Drop temporary table to avoid possible collisions
            $conn->executeUpdate($this->_dropTempTableSql);

            // Re-throw exception
            throw $exception;
        }

        // Drop temporary table
        $conn->executeUpdate($this->_dropTempTableSql);

        return $numDeleted;
    }
}
