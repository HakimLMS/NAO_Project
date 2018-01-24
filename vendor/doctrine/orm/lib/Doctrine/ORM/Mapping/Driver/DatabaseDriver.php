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

namespace Doctrine\ORM\Mapping\Driver;

use Doctrine\Common\Persistence\Mapping\Driver\MappingDriver;
use Doctrine\Common\Persistence\Mapping\ClassMetadata;
use Doctrine\Common\Util\Inflector;
use Doctrine\DBAL\Schema\AbstractSchemaManager;
use Doctrine\DBAL\Schema\SchemaException;
use Doctrine\DBAL\Schema\Table;
use Doctrine\DBAL\Schema\Column;
use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\Mapping\ClassMetadataInfo;
use Doctrine\ORM\Mapping\MappingException;

/**
 * The DatabaseDriver reverse engineers the mapping metadata from a database.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 */
class DatabaseDriver implements MappingDriver
{
    /**
     * @var AbstractSchemaManager
     */
    private $_sm;

    /**
     * @var array|null
     */
    private $tables = null;

    /**
     * @var array
     */
<<<<<<< HEAD
<<<<<<< HEAD
    private $classToTableNames = [];
=======
    private $classToTableNames = array();
>>>>>>> contactmanager
=======
    private $classToTableNames = [];
>>>>>>> donmanager

    /**
     * @var array
     */
<<<<<<< HEAD
<<<<<<< HEAD
    private $manyToManyTables = [];
=======
    private $manyToManyTables = array();
>>>>>>> contactmanager
=======
    private $manyToManyTables = [];
>>>>>>> donmanager

    /**
     * @var array
     */
<<<<<<< HEAD
<<<<<<< HEAD
    private $classNamesForTables = [];
=======
    private $classNamesForTables = array();
>>>>>>> contactmanager
=======
    private $classNamesForTables = [];
>>>>>>> donmanager

    /**
     * @var array
     */
<<<<<<< HEAD
<<<<<<< HEAD
    private $fieldNamesForColumns = [];
=======
    private $fieldNamesForColumns = array();
>>>>>>> contactmanager
=======
    private $fieldNamesForColumns = [];
>>>>>>> donmanager

    /**
     * The namespace for the generated entities.
     *
     * @var string|null
     */
    private $namespace;

    /**
     * @param AbstractSchemaManager $schemaManager
     */
    public function __construct(AbstractSchemaManager $schemaManager)
    {
        $this->_sm = $schemaManager;
    }

    /**
     * Set the namespace for the generated entities.
     *
     * @param string $namespace
     *
     * @return void
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
    }

    /**
     * {@inheritDoc}
     */
    public function isTransient($className)
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function getAllClassNames()
    {
        $this->reverseEngineerMappingFromDatabase();

        return array_keys($this->classToTableNames);
    }

    /**
     * Sets class name for a table.
     *
     * @param string $tableName
     * @param string $className
     *
     * @return void
     */
    public function setClassNameForTable($tableName, $className)
    {
        $this->classNamesForTables[$tableName] = $className;
    }

    /**
     * Sets field name for a column on a specific table.
     *
     * @param string $tableName
     * @param string $columnName
     * @param string $fieldName
     *
     * @return void
     */
    public function setFieldNameForColumn($tableName, $columnName, $fieldName)
    {
        $this->fieldNamesForColumns[$tableName][$columnName] = $fieldName;
    }

    /**
     * Sets tables manually instead of relying on the reverse engineering capabilities of SchemaManager.
     *
     * @param array $entityTables
     * @param array $manyToManyTables
     *
     * @return void
     */
    public function setTables($entityTables, $manyToManyTables)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->tables = $this->manyToManyTables = $this->classToTableNames = [];
=======
        $this->tables = $this->manyToManyTables = $this->classToTableNames = array();
>>>>>>> contactmanager
=======
        $this->tables = $this->manyToManyTables = $this->classToTableNames = [];
>>>>>>> donmanager

        foreach ($entityTables as $table) {
            $className = $this->getClassNameForTable($table->getName());

            $this->classToTableNames[$className] = $table->getName();
            $this->tables[$table->getName()] = $table;
        }

        foreach ($manyToManyTables as $table) {
            $this->manyToManyTables[$table->getName()] = $table;
        }
    }

    /**
     * {@inheritDoc}
     */
    public function loadMetadataForClass($className, ClassMetadata $metadata)
    {
        $this->reverseEngineerMappingFromDatabase();

        if ( ! isset($this->classToTableNames[$className])) {
            throw new \InvalidArgumentException("Unknown class " . $className);
        }

        $tableName = $this->classToTableNames[$className];

        $metadata->name = $className;
        $metadata->table['name'] = $tableName;

        $this->buildIndexes($metadata);
        $this->buildFieldMappings($metadata);
        $this->buildToOneAssociationMappings($metadata);

        foreach ($this->manyToManyTables as $manyTable) {
            foreach ($manyTable->getForeignKeys() as $foreignKey) {
                // foreign key maps to the table of the current entity, many to many association probably exists
                if ( ! (strtolower($tableName) === strtolower($foreignKey->getForeignTableName()))) {
                    continue;
                }

                $myFk = $foreignKey;
                $otherFk = null;

                foreach ($manyTable->getForeignKeys() as $foreignKey) {
                    if ($foreignKey != $myFk) {
                        $otherFk = $foreignKey;
                        break;
                    }
                }

                if ( ! $otherFk) {
                    // the definition of this many to many table does not contain
                    // enough foreign key information to continue reverse engineering.
                    continue;
                }

                $localColumn = current($myFk->getColumns());

<<<<<<< HEAD
<<<<<<< HEAD
                $associationMapping = [];
=======
                $associationMapping = array();
>>>>>>> contactmanager
=======
                $associationMapping = [];
>>>>>>> donmanager
                $associationMapping['fieldName'] = $this->getFieldNameForColumn($manyTable->getName(), current($otherFk->getColumns()), true);
                $associationMapping['targetEntity'] = $this->getClassNameForTable($otherFk->getForeignTableName());

                if (current($manyTable->getColumns())->getName() == $localColumn) {
                    $associationMapping['inversedBy'] = $this->getFieldNameForColumn($manyTable->getName(), current($myFk->getColumns()), true);
<<<<<<< HEAD
<<<<<<< HEAD
                    $associationMapping['joinTable'] = [
                        'name' => strtolower($manyTable->getName()),
                        'joinColumns' => [],
                        'inverseJoinColumns' => [],
                    ];
=======
                    $associationMapping['joinTable'] = array(
                        'name' => strtolower($manyTable->getName()),
                        'joinColumns' => array(),
                        'inverseJoinColumns' => array(),
                    );
>>>>>>> contactmanager
=======
                    $associationMapping['joinTable'] = [
                        'name' => strtolower($manyTable->getName()),
                        'joinColumns' => [],
                        'inverseJoinColumns' => [],
                    ];
>>>>>>> donmanager

                    $fkCols = $myFk->getForeignColumns();
                    $cols = $myFk->getColumns();

<<<<<<< HEAD
<<<<<<< HEAD
                    for ($i = 0, $colsCount = count($cols); $i < $colsCount; $i++) {
                        $associationMapping['joinTable']['joinColumns'][] = [
                            'name' => $cols[$i],
                            'referencedColumnName' => $fkCols[$i],
                        ];
=======
                    for ($i = 0; $i < count($cols); $i++) {
                        $associationMapping['joinTable']['joinColumns'][] = array(
                            'name' => $cols[$i],
                            'referencedColumnName' => $fkCols[$i],
                        );
>>>>>>> contactmanager
=======
                    for ($i = 0, $colsCount = count($cols); $i < $colsCount; $i++) {
                        $associationMapping['joinTable']['joinColumns'][] = [
                            'name' => $cols[$i],
                            'referencedColumnName' => $fkCols[$i],
                        ];
>>>>>>> donmanager
                    }

                    $fkCols = $otherFk->getForeignColumns();
                    $cols = $otherFk->getColumns();

<<<<<<< HEAD
<<<<<<< HEAD
                    for ($i = 0, $colsCount = count($cols); $i < $colsCount; $i++) {
                        $associationMapping['joinTable']['inverseJoinColumns'][] = [
                            'name' => $cols[$i],
                            'referencedColumnName' => $fkCols[$i],
                        ];
=======
                    for ($i = 0; $i < count($cols); $i++) {
                        $associationMapping['joinTable']['inverseJoinColumns'][] = array(
                            'name' => $cols[$i],
                            'referencedColumnName' => $fkCols[$i],
                        );
>>>>>>> contactmanager
=======
                    for ($i = 0, $colsCount = count($cols); $i < $colsCount; $i++) {
                        $associationMapping['joinTable']['inverseJoinColumns'][] = [
                            'name' => $cols[$i],
                            'referencedColumnName' => $fkCols[$i],
                        ];
>>>>>>> donmanager
                    }
                } else {
                    $associationMapping['mappedBy'] = $this->getFieldNameForColumn($manyTable->getName(), current($myFk->getColumns()), true);
                }

                $metadata->mapManyToMany($associationMapping);
<<<<<<< HEAD
<<<<<<< HEAD

=======
                
>>>>>>> contactmanager
=======

>>>>>>> donmanager
                break;
            }
        }
    }

    /**
     * @return void
     *
     * @throws \Doctrine\ORM\Mapping\MappingException
     */
    private function reverseEngineerMappingFromDatabase()
    {
        if ($this->tables !== null) {
            return;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $tables = [];
=======
        $tables = array();
>>>>>>> contactmanager
=======
        $tables = [];
>>>>>>> donmanager

        foreach ($this->_sm->listTableNames() as $tableName) {
            $tables[$tableName] = $this->_sm->listTableDetails($tableName);
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $this->tables = $this->manyToManyTables = $this->classToTableNames = [];
=======
        $this->tables = $this->manyToManyTables = $this->classToTableNames = array();
>>>>>>> contactmanager
=======
        $this->tables = $this->manyToManyTables = $this->classToTableNames = [];
>>>>>>> donmanager

        foreach ($tables as $tableName => $table) {
            $foreignKeys = ($this->_sm->getDatabasePlatform()->supportsForeignKeyConstraints())
                ? $table->getForeignKeys()
<<<<<<< HEAD
<<<<<<< HEAD
                : [];

            $allForeignKeyColumns = [];
=======
                : array();

            $allForeignKeyColumns = array();
>>>>>>> contactmanager
=======
                : [];

            $allForeignKeyColumns = [];
>>>>>>> donmanager

            foreach ($foreignKeys as $foreignKey) {
                $allForeignKeyColumns = array_merge($allForeignKeyColumns, $foreignKey->getLocalColumns());
            }

            if ( ! $table->hasPrimaryKey()) {
                throw new MappingException(
                    "Table " . $table->getName() . " has no primary key. Doctrine does not ".
                    "support reverse engineering from tables that don't have a primary key."
                );
            }

            $pkColumns = $table->getPrimaryKey()->getColumns();

            sort($pkColumns);
            sort($allForeignKeyColumns);

            if ($pkColumns == $allForeignKeyColumns && count($foreignKeys) == 2) {
                $this->manyToManyTables[$tableName] = $table;
            } else {
                // lower-casing is necessary because of Oracle Uppercase Tablenames,
                // assumption is lower-case + underscore separated.
                $className = $this->getClassNameForTable($tableName);

                $this->tables[$tableName] = $table;
                $this->classToTableNames[$className] = $tableName;
            }
        }
    }

    /**
     * Build indexes from a class metadata.
     *
     * @param \Doctrine\ORM\Mapping\ClassMetadataInfo $metadata
     */
    private function buildIndexes(ClassMetadataInfo $metadata)
    {
        $tableName = $metadata->table['name'];
        $indexes   = $this->tables[$tableName]->getIndexes();

<<<<<<< HEAD
<<<<<<< HEAD
        foreach ($indexes as $index) {
=======
        foreach($indexes as $index){
>>>>>>> contactmanager
=======
        foreach ($indexes as $index) {
>>>>>>> donmanager
            if ($index->isPrimary()) {
                continue;
            }

            $indexName      = $index->getName();
            $indexColumns   = $index->getColumns();
            $constraintType = $index->isUnique()
                ? 'uniqueConstraints'
                : 'indexes';

            $metadata->table[$constraintType][$indexName]['columns'] = $indexColumns;
        }
    }

    /**
     * Build field mapping from class metadata.
     *
     * @param \Doctrine\ORM\Mapping\ClassMetadataInfo $metadata
     */
    private function buildFieldMappings(ClassMetadataInfo $metadata)
    {
        $tableName      = $metadata->table['name'];
        $columns        = $this->tables[$tableName]->getColumns();
        $primaryKeys    = $this->getTablePrimaryKeys($this->tables[$tableName]);
        $foreignKeys    = $this->getTableForeignKeys($this->tables[$tableName]);
<<<<<<< HEAD
<<<<<<< HEAD
        $allForeignKeys = [];
=======
        $allForeignKeys = array();
>>>>>>> contactmanager
=======
        $allForeignKeys = [];
>>>>>>> donmanager

        foreach ($foreignKeys as $foreignKey) {
            $allForeignKeys = array_merge($allForeignKeys, $foreignKey->getLocalColumns());
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $ids           = [];
        $fieldMappings = [];
=======
        $ids           = array();
        $fieldMappings = array();
>>>>>>> contactmanager
=======
        $ids           = [];
        $fieldMappings = [];
>>>>>>> donmanager

        foreach ($columns as $column) {
            if (in_array($column->getName(), $allForeignKeys)) {
                continue;
            }

            $fieldMapping = $this->buildFieldMapping($tableName, $column);

            if ($primaryKeys && in_array($column->getName(), $primaryKeys)) {
                $fieldMapping['id'] = true;
                $ids[] = $fieldMapping;
            }

            $fieldMappings[] = $fieldMapping;
        }

        // We need to check for the columns here, because we might have associations as id as well.
        if ($ids && count($primaryKeys) == 1) {
            $metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);
        }

        foreach ($fieldMappings as $fieldMapping) {
            $metadata->mapField($fieldMapping);
        }
    }

    /**
     * Build field mapping from a schema column definition
     *
     * @param string                       $tableName
     * @param \Doctrine\DBAL\Schema\Column $column
     *
     * @return array
     */
    private function buildFieldMapping($tableName, Column $column)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $fieldMapping = [
            'fieldName'  => $this->getFieldNameForColumn($tableName, $column->getName(), false),
            'columnName' => $column->getName(),
            'type'       => $column->getType()->getName(),
            'nullable'   => ( ! $column->getNotnull()),
        ];
=======
        $fieldMapping = array(
            'fieldName'  => $this->getFieldNameForColumn($tableName, $column->getName(), false),
            'columnName' => $column->getName(),
            'type'       => $column->getType()->getName(),
            'nullable'   => ( ! $column->getNotNull()),
        );
>>>>>>> contactmanager
=======
        $fieldMapping = [
            'fieldName'  => $this->getFieldNameForColumn($tableName, $column->getName(), false),
            'columnName' => $column->getName(),
            'type'       => $column->getType()->getName(),
            'nullable'   => ( ! $column->getNotnull()),
        ];
>>>>>>> donmanager

        // Type specific elements
        switch ($fieldMapping['type']) {
            case Type::TARRAY:
            case Type::BLOB:
            case Type::GUID:
            case Type::JSON_ARRAY:
            case Type::OBJECT:
            case Type::SIMPLE_ARRAY:
            case Type::STRING:
            case Type::TEXT:
                $fieldMapping['length'] = $column->getLength();
                $fieldMapping['options']['fixed']  = $column->getFixed();
                break;

            case Type::DECIMAL:
            case Type::FLOAT:
                $fieldMapping['precision'] = $column->getPrecision();
                $fieldMapping['scale']     = $column->getScale();
                break;

            case Type::INTEGER:
            case Type::BIGINT:
            case Type::SMALLINT:
                $fieldMapping['options']['unsigned'] = $column->getUnsigned();
                break;
        }

        // Comment
        if (($comment = $column->getComment()) !== null) {
            $fieldMapping['options']['comment'] = $comment;
        }

        // Default
        if (($default = $column->getDefault()) !== null) {
            $fieldMapping['options']['default'] = $default;
        }

        return $fieldMapping;
    }

    /**
     * Build to one (one to one, many to one) association mapping from class metadata.
     *
     * @param \Doctrine\ORM\Mapping\ClassMetadataInfo $metadata
     */
    private function buildToOneAssociationMappings(ClassMetadataInfo $metadata)
    {
        $tableName   = $metadata->table['name'];
        $primaryKeys = $this->getTablePrimaryKeys($this->tables[$tableName]);
        $foreignKeys = $this->getTableForeignKeys($this->tables[$tableName]);

        foreach ($foreignKeys as $foreignKey) {
            $foreignTableName   = $foreignKey->getForeignTableName();
            $fkColumns          = $foreignKey->getColumns();
            $fkForeignColumns   = $foreignKey->getForeignColumns();
            $localColumn        = current($fkColumns);
<<<<<<< HEAD
<<<<<<< HEAD
            $associationMapping = [
                'fieldName'    => $this->getFieldNameForColumn($tableName, $localColumn, true),
                'targetEntity' => $this->getClassNameForTable($foreignTableName),
            ];
=======
            $associationMapping = array(
                'fieldName'    => $this->getFieldNameForColumn($tableName, $localColumn, true),
                'targetEntity' => $this->getClassNameForTable($foreignTableName),
            );
>>>>>>> contactmanager
=======
            $associationMapping = [
                'fieldName'    => $this->getFieldNameForColumn($tableName, $localColumn, true),
                'targetEntity' => $this->getClassNameForTable($foreignTableName),
            ];
>>>>>>> donmanager

            if (isset($metadata->fieldMappings[$associationMapping['fieldName']])) {
                $associationMapping['fieldName'] .= '2'; // "foo" => "foo2"
            }

            if ($primaryKeys && in_array($localColumn, $primaryKeys)) {
                $associationMapping['id'] = true;
            }

<<<<<<< HEAD
<<<<<<< HEAD
            for ($i = 0, $fkColumnsCount = count($fkColumns); $i < $fkColumnsCount; $i++) {
                $associationMapping['joinColumns'][] = [
                    'name'                 => $fkColumns[$i],
                    'referencedColumnName' => $fkForeignColumns[$i],
                ];
=======
            for ($i = 0; $i < count($fkColumns); $i++) {
                $associationMapping['joinColumns'][] = array(
                    'name'                 => $fkColumns[$i],
                    'referencedColumnName' => $fkForeignColumns[$i],
                );
>>>>>>> contactmanager
=======
            for ($i = 0, $fkColumnsCount = count($fkColumns); $i < $fkColumnsCount; $i++) {
                $associationMapping['joinColumns'][] = [
                    'name'                 => $fkColumns[$i],
                    'referencedColumnName' => $fkForeignColumns[$i],
                ];
>>>>>>> donmanager
            }

            // Here we need to check if $fkColumns are the same as $primaryKeys
            if ( ! array_diff($fkColumns, $primaryKeys)) {
                $metadata->mapOneToOne($associationMapping);
            } else {
                $metadata->mapManyToOne($associationMapping);
            }
        }
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Retrieve schema table definition foreign keys.
=======
     * Retreive schema table definition foreign keys.
>>>>>>> contactmanager
=======
     * Retrieve schema table definition foreign keys.
>>>>>>> donmanager
     *
     * @param \Doctrine\DBAL\Schema\Table $table
     *
     * @return array
     */
    private function getTableForeignKeys(Table $table)
    {
        return ($this->_sm->getDatabasePlatform()->supportsForeignKeyConstraints())
            ? $table->getForeignKeys()
<<<<<<< HEAD
<<<<<<< HEAD
            : [];
    }

    /**
     * Retrieve schema table definition primary keys.
=======
            : array();
    }

    /**
     * Retreive schema table definition primary keys.
>>>>>>> contactmanager
=======
            : [];
    }

    /**
     * Retrieve schema table definition primary keys.
>>>>>>> donmanager
     *
     * @param \Doctrine\DBAL\Schema\Table $table
     *
     * @return array
     */
    private function getTablePrimaryKeys(Table $table)
    {
        try {
            return $table->getPrimaryKey()->getColumns();
<<<<<<< HEAD
<<<<<<< HEAD
        } catch (SchemaException $e) {
            // Do nothing
        }

        return [];
=======
        } catch(SchemaException $e) {
            // Do nothing
        }

        return array();
>>>>>>> contactmanager
=======
        } catch (SchemaException $e) {
            // Do nothing
        }

        return [];
>>>>>>> donmanager
    }

    /**
     * Returns the mapped class name for a table if it exists. Otherwise return "classified" version.
     *
     * @param string $tableName
     *
     * @return string
     */
    private function getClassNameForTable($tableName)
    {
        if (isset($this->classNamesForTables[$tableName])) {
            return $this->namespace . $this->classNamesForTables[$tableName];
        }

        return $this->namespace . Inflector::classify(strtolower($tableName));
    }

    /**
     * Return the mapped field name for a column, if it exists. Otherwise return camelized version.
     *
     * @param string  $tableName
     * @param string  $columnName
     * @param boolean $fk Whether the column is a foreignkey or not.
     *
     * @return string
     */
    private function getFieldNameForColumn($tableName, $columnName, $fk = false)
    {
        if (isset($this->fieldNamesForColumns[$tableName]) && isset($this->fieldNamesForColumns[$tableName][$columnName])) {
            return $this->fieldNamesForColumns[$tableName][$columnName];
        }

        $columnName = strtolower($columnName);

        // Replace _id if it is a foreignkey column
        if ($fk) {
            $columnName = str_replace('_id', '', $columnName);
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> contactmanager
=======

>>>>>>> donmanager
        return Inflector::camelize($columnName);
    }
}
