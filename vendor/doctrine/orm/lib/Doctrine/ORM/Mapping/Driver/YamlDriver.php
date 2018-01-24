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

use Doctrine\Common\Persistence\Mapping\ClassMetadata;
use Doctrine\ORM\Mapping\Builder\EntityListenerBuilder;
use Doctrine\Common\Persistence\Mapping\Driver\FileDriver;
<<<<<<< HEAD
<<<<<<< HEAD
use Doctrine\ORM\Mapping\ClassMetadata as Metadata;
=======
>>>>>>> contactmanager
=======
use Doctrine\ORM\Mapping\ClassMetadata as Metadata;
>>>>>>> donmanager
use Doctrine\ORM\Mapping\MappingException;
use Symfony\Component\Yaml\Yaml;

/**
 * The YamlDriver reads the mapping metadata from yaml schema files.
 *
 * @since 2.0
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Jonathan H. Wage <jonwage@gmail.com>
 * @author Roman Borschel <roman@code-factory.org>
 */
class YamlDriver extends FileDriver
{
    const DEFAULT_FILE_EXTENSION = '.dcm.yml';

    /**
     * {@inheritDoc}
     */
    public function __construct($locator, $fileExtension = self::DEFAULT_FILE_EXTENSION)
    {
        parent::__construct($locator, $fileExtension);
    }

    /**
     * {@inheritDoc}
     */
    public function loadMetadataForClass($className, ClassMetadata $metadata)
    {
        /* @var $metadata \Doctrine\ORM\Mapping\ClassMetadataInfo */
        $element = $this->getElement($className);

        if ($element['type'] == 'entity') {
            if (isset($element['repositoryClass'])) {
                $metadata->setCustomRepositoryClass($element['repositoryClass']);
            }
            if (isset($element['readOnly']) && $element['readOnly'] == true) {
                $metadata->markReadOnly();
            }
        } else if ($element['type'] == 'mappedSuperclass') {
            $metadata->setCustomRepositoryClass(
<<<<<<< HEAD
<<<<<<< HEAD
                $element['repositoryClass'] ?? null
=======
                isset($element['repositoryClass']) ? $element['repositoryClass'] : null
>>>>>>> contactmanager
=======
                $element['repositoryClass'] ?? null
>>>>>>> donmanager
            );
            $metadata->isMappedSuperclass = true;
        } else if ($element['type'] == 'embeddable') {
            $metadata->isEmbeddedClass = true;
        } else {
            throw MappingException::classIsNotAValidEntityOrMappedSuperClass($className);
        }

        // Evaluate root level properties
<<<<<<< HEAD
<<<<<<< HEAD
        $primaryTable = [];
=======
        $primaryTable = array();
>>>>>>> contactmanager
=======
        $primaryTable = [];
>>>>>>> donmanager

        if (isset($element['table'])) {
            $primaryTable['name'] = $element['table'];
        }

        if (isset($element['schema'])) {
            $primaryTable['schema'] = $element['schema'];
        }

        // Evaluate second level cache
        if (isset($element['cache'])) {
            $metadata->enableCache($this->cacheToArray($element['cache']));
        }

        $metadata->setPrimaryTable($primaryTable);

        // Evaluate named queries
        if (isset($element['namedQueries'])) {
            foreach ($element['namedQueries'] as $name => $queryMapping) {
                if (is_string($queryMapping)) {
<<<<<<< HEAD
<<<<<<< HEAD
                    $queryMapping = ['query' => $queryMapping];
=======
                    $queryMapping = array('query' => $queryMapping);
>>>>>>> contactmanager
=======
                    $queryMapping = ['query' => $queryMapping];
>>>>>>> donmanager
                }

                if ( ! isset($queryMapping['name'])) {
                    $queryMapping['name'] = $name;
                }

                $metadata->addNamedQuery($queryMapping);
            }
        }

        // Evaluate named native queries
        if (isset($element['namedNativeQueries'])) {
            foreach ($element['namedNativeQueries'] as $name => $mappingElement) {
                if (!isset($mappingElement['name'])) {
                    $mappingElement['name'] = $name;
                }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager
                $metadata->addNamedNativeQuery(
                    [
                        'name'              => $mappingElement['name'],
                        'query'             => $mappingElement['query'] ?? null,
                        'resultClass'       => $mappingElement['resultClass'] ?? null,
                        'resultSetMapping'  => $mappingElement['resultSetMapping'] ?? null,
                    ]
                );
<<<<<<< HEAD
=======
                $metadata->addNamedNativeQuery(array(
                    'name'              => $mappingElement['name'],
                    'query'             => isset($mappingElement['query']) ? $mappingElement['query'] : null,
                    'resultClass'       => isset($mappingElement['resultClass']) ? $mappingElement['resultClass'] : null,
                    'resultSetMapping'  => isset($mappingElement['resultSetMapping']) ? $mappingElement['resultSetMapping'] : null,
                ));
>>>>>>> contactmanager
=======
>>>>>>> donmanager
            }
        }

        // Evaluate sql result set mappings
        if (isset($element['sqlResultSetMappings'])) {
            foreach ($element['sqlResultSetMappings'] as $name => $resultSetMapping) {
                if (!isset($resultSetMapping['name'])) {
                    $resultSetMapping['name'] = $name;
                }

<<<<<<< HEAD
<<<<<<< HEAD
                $entities = [];
                $columns  = [];
                if (isset($resultSetMapping['entityResult'])) {
                    foreach ($resultSetMapping['entityResult'] as $entityResultElement) {
                        $entityResult = [
                            'fields'                => [],
                            'entityClass'           => $entityResultElement['entityClass'] ?? null,
                            'discriminatorColumn'   => $entityResultElement['discriminatorColumn'] ?? null,
                        ];

                        if (isset($entityResultElement['fieldResult'])) {
                            foreach ($entityResultElement['fieldResult'] as $fieldResultElement) {
                                $entityResult['fields'][] = [
                                    'name'      => $fieldResultElement['name'] ?? null,
                                    'column'    => $fieldResultElement['column'] ?? null,
                                ];
=======
                $entities = array();
                $columns  = array();
=======
                $entities = [];
                $columns  = [];
>>>>>>> donmanager
                if (isset($resultSetMapping['entityResult'])) {
                    foreach ($resultSetMapping['entityResult'] as $entityResultElement) {
                        $entityResult = [
                            'fields'                => [],
                            'entityClass'           => $entityResultElement['entityClass'] ?? null,
                            'discriminatorColumn'   => $entityResultElement['discriminatorColumn'] ?? null,
                        ];

                        if (isset($entityResultElement['fieldResult'])) {
                            foreach ($entityResultElement['fieldResult'] as $fieldResultElement) {
<<<<<<< HEAD
                                $entityResult['fields'][] = array(
                                    'name'      => isset($fieldResultElement['name']) ? $fieldResultElement['name'] : null,
                                    'column'    => isset($fieldResultElement['column']) ? $fieldResultElement['column'] : null,
                                );
>>>>>>> contactmanager
=======
                                $entityResult['fields'][] = [
                                    'name'      => $fieldResultElement['name'] ?? null,
                                    'column'    => $fieldResultElement['column'] ?? null,
                                ];
>>>>>>> donmanager
                            }
                        }

                        $entities[] = $entityResult;
                    }
                }


                if (isset($resultSetMapping['columnResult'])) {
                    foreach ($resultSetMapping['columnResult'] as $columnResultAnnot) {
<<<<<<< HEAD
<<<<<<< HEAD
                        $columns[] = [
                            'name' => $columnResultAnnot['name'] ?? null,
                        ];
                    }
                }

                $metadata->addSqlResultSetMapping(
                    [
                        'name'          => $resultSetMapping['name'],
                        'entities'      => $entities,
                        'columns'       => $columns
                    ]
                );
=======
                        $columns[] = array(
                            'name' => isset($columnResultAnnot['name']) ? $columnResultAnnot['name'] : null,
                        );
                    }
                }

                $metadata->addSqlResultSetMapping(array(
                    'name'          => $resultSetMapping['name'],
                    'entities'      => $entities,
                    'columns'       => $columns
                ));
>>>>>>> contactmanager
=======
                        $columns[] = [
                            'name' => $columnResultAnnot['name'] ?? null,
                        ];
                    }
                }

                $metadata->addSqlResultSetMapping(
                    [
                        'name'          => $resultSetMapping['name'],
                        'entities'      => $entities,
                        'columns'       => $columns
                    ]
                );
>>>>>>> donmanager
            }
        }

        if (isset($element['inheritanceType'])) {
            $metadata->setInheritanceType(constant('Doctrine\ORM\Mapping\ClassMetadata::INHERITANCE_TYPE_' . strtoupper($element['inheritanceType'])));

<<<<<<< HEAD
<<<<<<< HEAD
            if ($metadata->inheritanceType != Metadata::INHERITANCE_TYPE_NONE) {
                // Evaluate discriminatorColumn
                if (isset($element['discriminatorColumn'])) {
                    $discrColumn = $element['discriminatorColumn'];
                    $metadata->setDiscriminatorColumn(
                        [
                            'name' => isset($discrColumn['name']) ? (string) $discrColumn['name'] : null,
                            'type' => isset($discrColumn['type']) ? (string) $discrColumn['type'] : 'string',
                            'length' => isset($discrColumn['length']) ? (string) $discrColumn['length'] : 255,
                            'columnDefinition' => isset($discrColumn['columnDefinition']) ? (string) $discrColumn['columnDefinition'] : null
                        ]
                    );
                } else {
                    $metadata->setDiscriminatorColumn(['name' => 'dtype', 'type' => 'string', 'length' => 255]);
=======
            if ($metadata->inheritanceType != \Doctrine\ORM\Mapping\ClassMetadata::INHERITANCE_TYPE_NONE) {
=======
            if ($metadata->inheritanceType != Metadata::INHERITANCE_TYPE_NONE) {
>>>>>>> donmanager
                // Evaluate discriminatorColumn
                if (isset($element['discriminatorColumn'])) {
                    $discrColumn = $element['discriminatorColumn'];
                    $metadata->setDiscriminatorColumn(
                        [
                            'name' => isset($discrColumn['name']) ? (string) $discrColumn['name'] : null,
                            'type' => isset($discrColumn['type']) ? (string) $discrColumn['type'] : 'string',
                            'length' => isset($discrColumn['length']) ? (string) $discrColumn['length'] : 255,
                            'columnDefinition' => isset($discrColumn['columnDefinition']) ? (string) $discrColumn['columnDefinition'] : null
                        ]
                    );
                } else {
<<<<<<< HEAD
                    $metadata->setDiscriminatorColumn(array('name' => 'dtype', 'type' => 'string', 'length' => 255));
>>>>>>> contactmanager
=======
                    $metadata->setDiscriminatorColumn(['name' => 'dtype', 'type' => 'string', 'length' => 255]);
>>>>>>> donmanager
                }

                // Evaluate discriminatorMap
                if (isset($element['discriminatorMap'])) {
                    $metadata->setDiscriminatorMap($element['discriminatorMap']);
                }
            }
        }


        // Evaluate changeTrackingPolicy
        if (isset($element['changeTrackingPolicy'])) {
            $metadata->setChangeTrackingPolicy(constant('Doctrine\ORM\Mapping\ClassMetadata::CHANGETRACKING_'
<<<<<<< HEAD
<<<<<<< HEAD
                . strtoupper($element['changeTrackingPolicy'])));
=======
                    . strtoupper($element['changeTrackingPolicy'])));
>>>>>>> contactmanager
=======
                . strtoupper($element['changeTrackingPolicy'])));
>>>>>>> donmanager
        }

        // Evaluate indexes
        if (isset($element['indexes'])) {
            foreach ($element['indexes'] as $name => $indexYml) {
                if ( ! isset($indexYml['name'])) {
                    $indexYml['name'] = $name;
                }

                if (is_string($indexYml['columns'])) {
<<<<<<< HEAD
<<<<<<< HEAD
                    $index = ['columns' => array_map('trim', explode(',', $indexYml['columns']))];
                } else {
                    $index = ['columns' => $indexYml['columns']];
=======
                    $index = array('columns' => array_map('trim', explode(',', $indexYml['columns'])));
                } else {
                    $index = array('columns' => $indexYml['columns']);
>>>>>>> contactmanager
=======
                    $index = ['columns' => array_map('trim', explode(',', $indexYml['columns']))];
                } else {
                    $index = ['columns' => $indexYml['columns']];
>>>>>>> donmanager
                }

                if (isset($indexYml['flags'])) {
                    if (is_string($indexYml['flags'])) {
                        $index['flags'] = array_map('trim', explode(',', $indexYml['flags']));
                    } else {
                        $index['flags'] = $indexYml['flags'];
                    }
                }

                if (isset($indexYml['options'])) {
                    $index['options'] = $indexYml['options'];
                }

                $metadata->table['indexes'][$indexYml['name']] = $index;
            }
        }

        // Evaluate uniqueConstraints
        if (isset($element['uniqueConstraints'])) {
            foreach ($element['uniqueConstraints'] as $name => $uniqueYml) {
                if ( ! isset($uniqueYml['name'])) {
                    $uniqueYml['name'] = $name;
                }

                if (is_string($uniqueYml['columns'])) {
<<<<<<< HEAD
<<<<<<< HEAD
                    $unique = ['columns' => array_map('trim', explode(',', $uniqueYml['columns']))];
                } else {
                    $unique = ['columns' => $uniqueYml['columns']];
=======
                    $unique = array('columns' => array_map('trim', explode(',', $uniqueYml['columns'])));
                } else {
                    $unique = array('columns' => $uniqueYml['columns']);
>>>>>>> contactmanager
=======
                    $unique = ['columns' => array_map('trim', explode(',', $uniqueYml['columns']))];
                } else {
                    $unique = ['columns' => $uniqueYml['columns']];
>>>>>>> donmanager
                }

                if (isset($uniqueYml['options'])) {
                    $unique['options'] = $uniqueYml['options'];
                }

                $metadata->table['uniqueConstraints'][$uniqueYml['name']] = $unique;
            }
        }

        if (isset($element['options'])) {
            $metadata->table['options'] = $element['options'];
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $associationIds = [];
=======
        $associationIds = array();
>>>>>>> contactmanager
=======
        $associationIds = [];
>>>>>>> donmanager
        if (isset($element['id'])) {
            // Evaluate identifier settings
            foreach ($element['id'] as $name => $idElement) {
                if (isset($idElement['associationKey']) && $idElement['associationKey'] == true) {
                    $associationIds[$name] = true;
                    continue;
                }

<<<<<<< HEAD
<<<<<<< HEAD
                $mapping = [
                    'id' => true,
                    'fieldName' => $name
                ];
=======
                $mapping = array(
                    'id' => true,
                    'fieldName' => $name
                );
>>>>>>> contactmanager
=======
                $mapping = [
                    'id' => true,
                    'fieldName' => $name
                ];
>>>>>>> donmanager

                if (isset($idElement['type'])) {
                    $mapping['type'] = $idElement['type'];
                }

                if (isset($idElement['column'])) {
                    $mapping['columnName'] = $idElement['column'];
                }

                if (isset($idElement['length'])) {
                    $mapping['length'] = $idElement['length'];
                }

                if (isset($idElement['columnDefinition'])) {
                    $mapping['columnDefinition'] = $idElement['columnDefinition'];
                }

                if (isset($idElement['options'])) {
                    $mapping['options'] = $idElement['options'];
                }

                $metadata->mapField($mapping);

                if (isset($idElement['generator'])) {
                    $metadata->setIdGeneratorType(constant('Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_'
<<<<<<< HEAD
<<<<<<< HEAD
                        . strtoupper($idElement['generator']['strategy'])));
=======
                            . strtoupper($idElement['generator']['strategy'])));
>>>>>>> contactmanager
=======
                        . strtoupper($idElement['generator']['strategy'])));
>>>>>>> donmanager
                }
                // Check for SequenceGenerator/TableGenerator definition
                if (isset($idElement['sequenceGenerator'])) {
                    $metadata->setSequenceGeneratorDefinition($idElement['sequenceGenerator']);
                } else if (isset($idElement['customIdGenerator'])) {
                    $customGenerator = $idElement['customIdGenerator'];
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager
                    $metadata->setCustomGeneratorDefinition(
                        [
                            'class' => (string) $customGenerator['class']
                        ]
                    );
<<<<<<< HEAD
=======
                    $metadata->setCustomGeneratorDefinition(array(
                        'class' => (string) $customGenerator['class']
                    ));
>>>>>>> contactmanager
=======
>>>>>>> donmanager
                } else if (isset($idElement['tableGenerator'])) {
                    throw MappingException::tableIdGeneratorNotImplemented($className);
                }
            }
        }

        // Evaluate fields
        if (isset($element['fields'])) {
            foreach ($element['fields'] as $name => $fieldMapping) {

                $mapping = $this->columnToArray($name, $fieldMapping);

                if (isset($fieldMapping['id'])) {
                    $mapping['id'] = true;
                    if (isset($fieldMapping['generator']['strategy'])) {
                        $metadata->setIdGeneratorType(constant('Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_'
<<<<<<< HEAD
<<<<<<< HEAD
                            . strtoupper($fieldMapping['generator']['strategy'])));
=======
                                . strtoupper($fieldMapping['generator']['strategy'])));
>>>>>>> contactmanager
=======
                            . strtoupper($fieldMapping['generator']['strategy'])));
>>>>>>> donmanager
                    }
                }

                if (isset($mapping['version'])) {
                    $metadata->setVersionMapping($mapping);
                    unset($mapping['version']);
                }

                $metadata->mapField($mapping);
            }
        }

        if (isset($element['embedded'])) {
            foreach ($element['embedded'] as $name => $embeddedMapping) {
<<<<<<< HEAD
<<<<<<< HEAD
                $mapping = [
                    'fieldName' => $name,
                    'class' => $embeddedMapping['class'],
                    'columnPrefix' => $embeddedMapping['columnPrefix'] ?? null,
                ];
=======
                $mapping = array(
                    'fieldName' => $name,
                    'class' => $embeddedMapping['class'],
                    'columnPrefix' => isset($embeddedMapping['columnPrefix']) ? $embeddedMapping['columnPrefix'] : null,
                );
>>>>>>> contactmanager
=======
                $mapping = [
                    'fieldName' => $name,
                    'class' => $embeddedMapping['class'],
                    'columnPrefix' => $embeddedMapping['columnPrefix'] ?? null,
                ];
>>>>>>> donmanager
                $metadata->mapEmbedded($mapping);
            }
        }

        // Evaluate oneToOne relationships
        if (isset($element['oneToOne'])) {
            foreach ($element['oneToOne'] as $name => $oneToOneElement) {
<<<<<<< HEAD
<<<<<<< HEAD
                $mapping = [
                    'fieldName' => $name,
                    'targetEntity' => $oneToOneElement['targetEntity']
                ];
=======
                $mapping = array(
                    'fieldName' => $name,
                    'targetEntity' => $oneToOneElement['targetEntity']
                );
>>>>>>> contactmanager
=======
                $mapping = [
                    'fieldName' => $name,
                    'targetEntity' => $oneToOneElement['targetEntity']
                ];
>>>>>>> donmanager

                if (isset($associationIds[$mapping['fieldName']])) {
                    $mapping['id'] = true;
                }

                if (isset($oneToOneElement['fetch'])) {
                    $mapping['fetch'] = constant('Doctrine\ORM\Mapping\ClassMetadata::FETCH_' . $oneToOneElement['fetch']);
                }

                if (isset($oneToOneElement['mappedBy'])) {
                    $mapping['mappedBy'] = $oneToOneElement['mappedBy'];
                } else {
                    if (isset($oneToOneElement['inversedBy'])) {
                        $mapping['inversedBy'] = $oneToOneElement['inversedBy'];
                    }

<<<<<<< HEAD
<<<<<<< HEAD
                    $joinColumns = [];
=======
                    $joinColumns = array();
>>>>>>> contactmanager
=======
                    $joinColumns = [];
>>>>>>> donmanager

                    if (isset($oneToOneElement['joinColumn'])) {
                        $joinColumns[] = $this->joinColumnToArray($oneToOneElement['joinColumn']);
                    } else if (isset($oneToOneElement['joinColumns'])) {
                        foreach ($oneToOneElement['joinColumns'] as $joinColumnName => $joinColumnElement) {
                            if ( ! isset($joinColumnElement['name'])) {
                                $joinColumnElement['name'] = $joinColumnName;
                            }

                            $joinColumns[] = $this->joinColumnToArray($joinColumnElement);
                        }
                    }

                    $mapping['joinColumns'] = $joinColumns;
                }

                if (isset($oneToOneElement['cascade'])) {
                    $mapping['cascade'] = $oneToOneElement['cascade'];
                }

                if (isset($oneToOneElement['orphanRemoval'])) {
<<<<<<< HEAD
<<<<<<< HEAD
                    $mapping['orphanRemoval'] = (bool) $oneToOneElement['orphanRemoval'];
                }

                // Evaluate second level cache
                if (isset($oneToOneElement['cache'])) {
                    $mapping['cache'] = $metadata->getAssociationCacheDefaults($mapping['fieldName'], $this->cacheToArray($oneToOneElement['cache']));
                }

                $metadata->mapOneToOne($mapping);
=======
                    $mapping['orphanRemoval'] = (bool)$oneToOneElement['orphanRemoval'];
=======
                    $mapping['orphanRemoval'] = (bool) $oneToOneElement['orphanRemoval'];
>>>>>>> donmanager
                }

                // Evaluate second level cache
                if (isset($oneToOneElement['cache'])) {
                    $mapping['cache'] = $metadata->getAssociationCacheDefaults($mapping['fieldName'], $this->cacheToArray($oneToOneElement['cache']));
                }
<<<<<<< HEAD
>>>>>>> contactmanager
=======

                $metadata->mapOneToOne($mapping);
>>>>>>> donmanager
            }
        }

        // Evaluate oneToMany relationships
        if (isset($element['oneToMany'])) {
            foreach ($element['oneToMany'] as $name => $oneToManyElement) {
<<<<<<< HEAD
<<<<<<< HEAD
                $mapping = [
                    'fieldName' => $name,
                    'targetEntity' => $oneToManyElement['targetEntity'],
                    'mappedBy' => $oneToManyElement['mappedBy']
                ];
=======
                $mapping = array(
                    'fieldName' => $name,
                    'targetEntity' => $oneToManyElement['targetEntity'],
                    'mappedBy' => $oneToManyElement['mappedBy']
                );
>>>>>>> contactmanager
=======
                $mapping = [
                    'fieldName' => $name,
                    'targetEntity' => $oneToManyElement['targetEntity'],
                    'mappedBy' => $oneToManyElement['mappedBy']
                ];
>>>>>>> donmanager

                if (isset($oneToManyElement['fetch'])) {
                    $mapping['fetch'] = constant('Doctrine\ORM\Mapping\ClassMetadata::FETCH_' . $oneToManyElement['fetch']);
                }

                if (isset($oneToManyElement['cascade'])) {
                    $mapping['cascade'] = $oneToManyElement['cascade'];
                }

                if (isset($oneToManyElement['orphanRemoval'])) {
<<<<<<< HEAD
<<<<<<< HEAD
                    $mapping['orphanRemoval'] = (bool) $oneToManyElement['orphanRemoval'];
=======
                    $mapping['orphanRemoval'] = (bool)$oneToManyElement['orphanRemoval'];
>>>>>>> contactmanager
=======
                    $mapping['orphanRemoval'] = (bool) $oneToManyElement['orphanRemoval'];
>>>>>>> donmanager
                }

                if (isset($oneToManyElement['orderBy'])) {
                    $mapping['orderBy'] = $oneToManyElement['orderBy'];
                }

                if (isset($oneToManyElement['indexBy'])) {
                    $mapping['indexBy'] = $oneToManyElement['indexBy'];
                }

<<<<<<< HEAD
<<<<<<< HEAD

                // Evaluate second level cache
                if (isset($oneToManyElement['cache'])) {
                    $mapping['cache'] = $metadata->getAssociationCacheDefaults($mapping['fieldName'], $this->cacheToArray($oneToManyElement['cache']));
                }

                $metadata->mapOneToMany($mapping);
=======
                $metadata->mapOneToMany($mapping);
=======
>>>>>>> donmanager

                // Evaluate second level cache
                if (isset($oneToManyElement['cache'])) {
                    $mapping['cache'] = $metadata->getAssociationCacheDefaults($mapping['fieldName'], $this->cacheToArray($oneToManyElement['cache']));
                }
<<<<<<< HEAD
>>>>>>> contactmanager
=======

                $metadata->mapOneToMany($mapping);
>>>>>>> donmanager
            }
        }

        // Evaluate manyToOne relationships
        if (isset($element['manyToOne'])) {
            foreach ($element['manyToOne'] as $name => $manyToOneElement) {
<<<<<<< HEAD
<<<<<<< HEAD
                $mapping = [
                    'fieldName' => $name,
                    'targetEntity' => $manyToOneElement['targetEntity']
                ];
=======
                $mapping = array(
                    'fieldName' => $name,
                    'targetEntity' => $manyToOneElement['targetEntity']
                );
>>>>>>> contactmanager
=======
                $mapping = [
                    'fieldName' => $name,
                    'targetEntity' => $manyToOneElement['targetEntity']
                ];
>>>>>>> donmanager

                if (isset($associationIds[$mapping['fieldName']])) {
                    $mapping['id'] = true;
                }

                if (isset($manyToOneElement['fetch'])) {
                    $mapping['fetch'] = constant('Doctrine\ORM\Mapping\ClassMetadata::FETCH_' . $manyToOneElement['fetch']);
                }

                if (isset($manyToOneElement['inversedBy'])) {
                    $mapping['inversedBy'] = $manyToOneElement['inversedBy'];
                }

<<<<<<< HEAD
<<<<<<< HEAD
                $joinColumns = [];
=======
                $joinColumns = array();
>>>>>>> contactmanager
=======
                $joinColumns = [];
>>>>>>> donmanager

                if (isset($manyToOneElement['joinColumn'])) {
                    $joinColumns[] = $this->joinColumnToArray($manyToOneElement['joinColumn']);
                } else if (isset($manyToOneElement['joinColumns'])) {
                    foreach ($manyToOneElement['joinColumns'] as $joinColumnName => $joinColumnElement) {
                        if ( ! isset($joinColumnElement['name'])) {
                            $joinColumnElement['name'] = $joinColumnName;
                        }

                        $joinColumns[] = $this->joinColumnToArray($joinColumnElement);
                    }
                }

                $mapping['joinColumns'] = $joinColumns;

                if (isset($manyToOneElement['cascade'])) {
                    $mapping['cascade'] = $manyToOneElement['cascade'];
                }

<<<<<<< HEAD
<<<<<<< HEAD
                // Evaluate second level cache
                if (isset($manyToOneElement['cache'])) {
                    $mapping['cache'] = $metadata->getAssociationCacheDefaults($mapping['fieldName'], $this->cacheToArray($manyToOneElement['cache']));
                }

                $metadata->mapManyToOne($mapping);
=======
                $metadata->mapManyToOne($mapping);

=======
>>>>>>> donmanager
                // Evaluate second level cache
                if (isset($manyToOneElement['cache'])) {
                    $mapping['cache'] = $metadata->getAssociationCacheDefaults($mapping['fieldName'], $this->cacheToArray($manyToOneElement['cache']));
                }
<<<<<<< HEAD
>>>>>>> contactmanager
=======

                $metadata->mapManyToOne($mapping);
>>>>>>> donmanager
            }
        }

        // Evaluate manyToMany relationships
        if (isset($element['manyToMany'])) {
            foreach ($element['manyToMany'] as $name => $manyToManyElement) {
<<<<<<< HEAD
<<<<<<< HEAD
                $mapping = [
                    'fieldName' => $name,
                    'targetEntity' => $manyToManyElement['targetEntity']
                ];
=======
                $mapping = array(
                    'fieldName' => $name,
                    'targetEntity' => $manyToManyElement['targetEntity']
                );
>>>>>>> contactmanager
=======
                $mapping = [
                    'fieldName' => $name,
                    'targetEntity' => $manyToManyElement['targetEntity']
                ];
>>>>>>> donmanager

                if (isset($manyToManyElement['fetch'])) {
                    $mapping['fetch'] = constant('Doctrine\ORM\Mapping\ClassMetadata::FETCH_' . $manyToManyElement['fetch']);
                }

                if (isset($manyToManyElement['mappedBy'])) {
                    $mapping['mappedBy'] = $manyToManyElement['mappedBy'];
                } else if (isset($manyToManyElement['joinTable'])) {

                    $joinTableElement = $manyToManyElement['joinTable'];
<<<<<<< HEAD
<<<<<<< HEAD
                    $joinTable = [
                        'name' => $joinTableElement['name']
                    ];
=======
                    $joinTable = array(
                        'name' => $joinTableElement['name']
                    );
>>>>>>> contactmanager
=======
                    $joinTable = [
                        'name' => $joinTableElement['name']
                    ];
>>>>>>> donmanager

                    if (isset($joinTableElement['schema'])) {
                        $joinTable['schema'] = $joinTableElement['schema'];
                    }

                    if (isset($joinTableElement['joinColumns'])) {
                        foreach ($joinTableElement['joinColumns'] as $joinColumnName => $joinColumnElement) {
                            if ( ! isset($joinColumnElement['name'])) {
                                $joinColumnElement['name'] = $joinColumnName;
                            }
                            $joinTable['joinColumns'][] = $this->joinColumnToArray($joinColumnElement);
                        }
                    }

                    if (isset($joinTableElement['inverseJoinColumns'])) {
                        foreach ($joinTableElement['inverseJoinColumns'] as $joinColumnName => $joinColumnElement) {
                            if ( ! isset($joinColumnElement['name'])) {
                                $joinColumnElement['name'] = $joinColumnName;
                            }
                            $joinTable['inverseJoinColumns'][] = $this->joinColumnToArray($joinColumnElement);
                        }
                    }

                    $mapping['joinTable'] = $joinTable;
                }

                if (isset($manyToManyElement['inversedBy'])) {
                    $mapping['inversedBy'] = $manyToManyElement['inversedBy'];
                }

                if (isset($manyToManyElement['cascade'])) {
                    $mapping['cascade'] = $manyToManyElement['cascade'];
                }

                if (isset($manyToManyElement['orderBy'])) {
                    $mapping['orderBy'] = $manyToManyElement['orderBy'];
                }

                if (isset($manyToManyElement['indexBy'])) {
                    $mapping['indexBy'] = $manyToManyElement['indexBy'];
                }

                if (isset($manyToManyElement['orphanRemoval'])) {
<<<<<<< HEAD
<<<<<<< HEAD
                    $mapping['orphanRemoval'] = (bool) $manyToManyElement['orphanRemoval'];
                }

                // Evaluate second level cache
                if (isset($manyToManyElement['cache'])) {
                    $mapping['cache'] = $metadata->getAssociationCacheDefaults($mapping['fieldName'], $this->cacheToArray($manyToManyElement['cache']));
                }

                $metadata->mapManyToMany($mapping);
=======
                    $mapping['orphanRemoval'] = (bool)$manyToManyElement['orphanRemoval'];
=======
                    $mapping['orphanRemoval'] = (bool) $manyToManyElement['orphanRemoval'];
>>>>>>> donmanager
                }

                // Evaluate second level cache
                if (isset($manyToManyElement['cache'])) {
                    $mapping['cache'] = $metadata->getAssociationCacheDefaults($mapping['fieldName'], $this->cacheToArray($manyToManyElement['cache']));
                }
<<<<<<< HEAD
>>>>>>> contactmanager
=======

                $metadata->mapManyToMany($mapping);
>>>>>>> donmanager
            }
        }

        // Evaluate associationOverride
        if (isset($element['associationOverride']) && is_array($element['associationOverride'])) {

            foreach ($element['associationOverride'] as $fieldName => $associationOverrideElement) {
<<<<<<< HEAD
<<<<<<< HEAD
                $override   = [];

                // Check for joinColumn
                if (isset($associationOverrideElement['joinColumn'])) {
                    $joinColumns = [];
=======
                $override   = array();

                // Check for joinColumn
                if (isset($associationOverrideElement['joinColumn'])) {
                    $joinColumns = array();
>>>>>>> contactmanager
=======
                $override   = [];

                // Check for joinColumn
                if (isset($associationOverrideElement['joinColumn'])) {
                    $joinColumns = [];
>>>>>>> donmanager
                    foreach ($associationOverrideElement['joinColumn'] as $name => $joinColumnElement) {
                        if ( ! isset($joinColumnElement['name'])) {
                            $joinColumnElement['name'] = $name;
                        }
                        $joinColumns[] = $this->joinColumnToArray($joinColumnElement);
                    }
                    $override['joinColumns'] = $joinColumns;
                }

                // Check for joinTable
                if (isset($associationOverrideElement['joinTable'])) {

                    $joinTableElement   = $associationOverrideElement['joinTable'];
<<<<<<< HEAD
<<<<<<< HEAD
                    $joinTable          =  [
                        'name' => $joinTableElement['name']
                    ];
=======
                    $joinTable          =  array(
                        'name' => $joinTableElement['name']
                    );
>>>>>>> contactmanager
=======
                    $joinTable          =  [
                        'name' => $joinTableElement['name']
                    ];
>>>>>>> donmanager

                    if (isset($joinTableElement['schema'])) {
                        $joinTable['schema'] = $joinTableElement['schema'];
                    }

                    foreach ($joinTableElement['joinColumns'] as $name => $joinColumnElement) {
                        if ( ! isset($joinColumnElement['name'])) {
                            $joinColumnElement['name'] = $name;
                        }

                        $joinTable['joinColumns'][] = $this->joinColumnToArray($joinColumnElement);
                    }

                    foreach ($joinTableElement['inverseJoinColumns'] as $name => $joinColumnElement) {
                        if ( ! isset($joinColumnElement['name'])) {
                            $joinColumnElement['name'] = $name;
                        }

                        $joinTable['inverseJoinColumns'][] = $this->joinColumnToArray($joinColumnElement);
                    }

                    $override['joinTable'] = $joinTable;
                }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager
                // Check for inversedBy
                if (isset($associationOverrideElement['inversedBy'])) {
                    $override['inversedBy'] = (string) $associationOverrideElement['inversedBy'];
                }

                // Check for `fetch`
                if (isset($associationOverrideElement['fetch'])) {
                    $override['fetch'] = constant(Metadata::class . '::FETCH_' . $associationOverrideElement['fetch']);
                }

<<<<<<< HEAD
=======
>>>>>>> contactmanager
=======
>>>>>>> donmanager
                $metadata->setAssociationOverride($fieldName, $override);
            }
        }

        // Evaluate associationOverride
        if (isset($element['attributeOverride']) && is_array($element['attributeOverride'])) {

            foreach ($element['attributeOverride'] as $fieldName => $attributeOverrideElement) {
                $mapping = $this->columnToArray($fieldName, $attributeOverrideElement);
                $metadata->setAttributeOverride($fieldName, $mapping);
            }
        }

        // Evaluate lifeCycleCallbacks
        if (isset($element['lifecycleCallbacks'])) {
            foreach ($element['lifecycleCallbacks'] as $type => $methods) {
                foreach ($methods as $method) {
                    $metadata->addLifecycleCallback($method, constant('Doctrine\ORM\Events::' . $type));
                }
            }
        }

        // Evaluate entityListeners
        if (isset($element['entityListeners'])) {
            foreach ($element['entityListeners'] as $className => $entityListener) {
                // Evaluate the listener using naming convention.
                if (empty($entityListener)) {
                    EntityListenerBuilder::bindEntityListener($metadata, $className);

                    continue;
                }

<<<<<<< HEAD
<<<<<<< HEAD
                foreach ($entityListener as $eventName => $callbackElement) {
=======
                foreach ($entityListener as $eventName => $callbackElement){
>>>>>>> contactmanager
=======
                foreach ($entityListener as $eventName => $callbackElement) {
>>>>>>> donmanager
                    foreach ($callbackElement as $methodName) {
                        $metadata->addEntityListener($eventName, $className, $methodName);
                    }
                }
            }
        }
    }

    /**
     * Constructs a joinColumn mapping array based on the information
     * found in the given join column element.
     *
     * @param array $joinColumnElement The array join column element.
     *
     * @return array The mapping array.
     */
    private function joinColumnToArray($joinColumnElement)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $joinColumn = [];
=======
        $joinColumn = array();
>>>>>>> contactmanager
=======
        $joinColumn = [];
>>>>>>> donmanager
        if (isset($joinColumnElement['referencedColumnName'])) {
            $joinColumn['referencedColumnName'] = (string) $joinColumnElement['referencedColumnName'];
        }

        if (isset($joinColumnElement['name'])) {
            $joinColumn['name'] = (string) $joinColumnElement['name'];
        }

        if (isset($joinColumnElement['fieldName'])) {
            $joinColumn['fieldName'] = (string) $joinColumnElement['fieldName'];
        }

        if (isset($joinColumnElement['unique'])) {
            $joinColumn['unique'] = (bool) $joinColumnElement['unique'];
        }

        if (isset($joinColumnElement['nullable'])) {
            $joinColumn['nullable'] = (bool) $joinColumnElement['nullable'];
        }

        if (isset($joinColumnElement['onDelete'])) {
            $joinColumn['onDelete'] = $joinColumnElement['onDelete'];
        }

        if (isset($joinColumnElement['columnDefinition'])) {
            $joinColumn['columnDefinition'] = $joinColumnElement['columnDefinition'];
        }

        return $joinColumn;
    }

    /**
     * Parses the given column as array.
     *
     * @param string $fieldName
     * @param array  $column
     *
     * @return  array
     */
    private function columnToArray($fieldName, $column)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $mapping = [
            'fieldName' => $fieldName
        ];

        if (isset($column['type'])) {
            $params = explode('(', $column['type']);

=======
        $mapping = array(
=======
        $mapping = [
>>>>>>> donmanager
            'fieldName' => $fieldName
        ];

        if (isset($column['type'])) {
            $params = explode('(', $column['type']);
<<<<<<< HEAD
>>>>>>> contactmanager
=======

>>>>>>> donmanager
            $column['type']  = $params[0];
            $mapping['type'] = $column['type'];

            if (isset($params[1])) {
                $column['length'] = (integer) substr($params[1], 0, strlen($params[1]) - 1);
            }
        }

        if (isset($column['column'])) {
            $mapping['columnName'] = $column['column'];
        }

        if (isset($column['length'])) {
            $mapping['length'] = $column['length'];
        }

        if (isset($column['precision'])) {
            $mapping['precision'] = $column['precision'];
        }

        if (isset($column['scale'])) {
            $mapping['scale'] = $column['scale'];
        }

        if (isset($column['unique'])) {
<<<<<<< HEAD
<<<<<<< HEAD
            $mapping['unique'] = (bool) $column['unique'];
=======
            $mapping['unique'] = (bool)$column['unique'];
>>>>>>> contactmanager
=======
            $mapping['unique'] = (bool) $column['unique'];
>>>>>>> donmanager
        }

        if (isset($column['options'])) {
            $mapping['options'] = $column['options'];
        }

        if (isset($column['nullable'])) {
            $mapping['nullable'] = $column['nullable'];
        }

        if (isset($column['version']) && $column['version']) {
            $mapping['version'] = $column['version'];
        }

        if (isset($column['columnDefinition'])) {
            $mapping['columnDefinition'] = $column['columnDefinition'];
        }

        return $mapping;
    }

    /**
     * Parse / Normalize the cache configuration
     *
     * @param array $cacheMapping
     *
     * @return array
     */
    private function cacheToArray($cacheMapping)
    {
        $region = isset($cacheMapping['region']) ? (string) $cacheMapping['region'] : null;
        $usage  = isset($cacheMapping['usage']) ? strtoupper($cacheMapping['usage']) : null;

        if ($usage && ! defined('Doctrine\ORM\Mapping\ClassMetadata::CACHE_USAGE_' . $usage)) {
            throw new \InvalidArgumentException(sprintf('Invalid cache usage "%s"', $usage));
        }

        if ($usage) {
            $usage = constant('Doctrine\ORM\Mapping\ClassMetadata::CACHE_USAGE_' . $usage);
        }

<<<<<<< HEAD
<<<<<<< HEAD
        return [
            'usage'  => $usage,
            'region' => $region,
        ];
=======
        return array(
            'usage'  => $usage,
            'region' => $region,
        );
>>>>>>> contactmanager
=======
        return [
            'usage'  => $usage,
            'region' => $region,
        ];
>>>>>>> donmanager
    }

    /**
     * {@inheritDoc}
     */
    protected function loadMappingFile($file)
    {
        return Yaml::parse(file_get_contents($file));
    }
}
