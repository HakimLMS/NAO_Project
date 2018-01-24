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

use SimpleXMLElement;
use Doctrine\Common\Persistence\Mapping\Driver\FileDriver;
use Doctrine\ORM\Mapping\Builder\EntityListenerBuilder;
use Doctrine\Common\Persistence\Mapping\ClassMetadata;
use Doctrine\ORM\Mapping\MappingException;
<<<<<<< HEAD
<<<<<<< HEAD
use Doctrine\ORM\Mapping\ClassMetadata as Metadata;
=======
>>>>>>> contactmanager
=======
use Doctrine\ORM\Mapping\ClassMetadata as Metadata;
>>>>>>> donmanager

/**
 * XmlDriver is a metadata driver that enables mapping through XML files.
 *
 * @license 	http://www.opensource.org/licenses/mit-license.php MIT
 * @link    	www.doctrine-project.org
 * @since   	2.0
 * @author		Benjamin Eberlei <kontakt@beberlei.de>
 * @author		Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author      Jonathan H. Wage <jonwage@gmail.com>
 * @author      Roman Borschel <roman@code-factory.org>
 */
class XmlDriver extends FileDriver
{
    const DEFAULT_FILE_EXTENSION = '.dcm.xml';

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
        /* @var $xmlRoot SimpleXMLElement */
        $xmlRoot = $this->getElement($className);

        if ($xmlRoot->getName() == 'entity') {
            if (isset($xmlRoot['repository-class'])) {
<<<<<<< HEAD
<<<<<<< HEAD
                $metadata->setCustomRepositoryClass((string) $xmlRoot['repository-class']);
=======
                $metadata->setCustomRepositoryClass((string)$xmlRoot['repository-class']);
>>>>>>> contactmanager
=======
                $metadata->setCustomRepositoryClass((string) $xmlRoot['repository-class']);
>>>>>>> donmanager
            }
            if (isset($xmlRoot['read-only']) && $this->evaluateBoolean($xmlRoot['read-only'])) {
                $metadata->markReadOnly();
            }
        } else if ($xmlRoot->getName() == 'mapped-superclass') {
            $metadata->setCustomRepositoryClass(
<<<<<<< HEAD
<<<<<<< HEAD
                isset($xmlRoot['repository-class']) ? (string) $xmlRoot['repository-class'] : null
=======
                isset($xmlRoot['repository-class']) ? (string)$xmlRoot['repository-class'] : null
>>>>>>> contactmanager
=======
                isset($xmlRoot['repository-class']) ? (string) $xmlRoot['repository-class'] : null
>>>>>>> donmanager
            );
            $metadata->isMappedSuperclass = true;
        } else if ($xmlRoot->getName() == 'embeddable') {
            $metadata->isEmbeddedClass = true;
        } else {
            throw MappingException::classIsNotAValidEntityOrMappedSuperClass($className);
        }

        // Evaluate <entity...> attributes
<<<<<<< HEAD
<<<<<<< HEAD
        $primaryTable = [];
=======
        $primaryTable = array();
>>>>>>> contactmanager
=======
        $primaryTable = [];
>>>>>>> donmanager

        if (isset($xmlRoot['table'])) {
            $primaryTable['name'] = (string) $xmlRoot['table'];
        }

        if (isset($xmlRoot['schema'])) {
            $primaryTable['schema'] = (string) $xmlRoot['schema'];
        }

        $metadata->setPrimaryTable($primaryTable);

        // Evaluate second level cache
        if (isset($xmlRoot->cache)) {
            $metadata->enableCache($this->cacheToArray($xmlRoot->cache));
        }

        // Evaluate named queries
        if (isset($xmlRoot->{'named-queries'})) {
            foreach ($xmlRoot->{'named-queries'}->{'named-query'} as $namedQueryElement) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager
                $metadata->addNamedQuery(
                    [
                        'name'  => (string) $namedQueryElement['name'],
                        'query' => (string) $namedQueryElement['query']
                    ]
                );
<<<<<<< HEAD
=======
                $metadata->addNamedQuery(array(
                    'name'  => (string)$namedQueryElement['name'],
                    'query' => (string)$namedQueryElement['query']
                ));
>>>>>>> contactmanager
=======
>>>>>>> donmanager
            }
        }

        // Evaluate native named queries
        if (isset($xmlRoot->{'named-native-queries'})) {
            foreach ($xmlRoot->{'named-native-queries'}->{'named-native-query'} as $nativeQueryElement) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager
                $metadata->addNamedNativeQuery(
                    [
                        'name'              => isset($nativeQueryElement['name']) ? (string) $nativeQueryElement['name'] : null,
                        'query'             => isset($nativeQueryElement->query) ? (string) $nativeQueryElement->query : null,
                        'resultClass'       => isset($nativeQueryElement['result-class']) ? (string) $nativeQueryElement['result-class'] : null,
                        'resultSetMapping'  => isset($nativeQueryElement['result-set-mapping']) ? (string) $nativeQueryElement['result-set-mapping'] : null,
                    ]
                );
<<<<<<< HEAD
=======
                $metadata->addNamedNativeQuery(array(
                    'name'              => isset($nativeQueryElement['name']) ? (string)$nativeQueryElement['name'] : null,
                    'query'             => isset($nativeQueryElement->query) ? (string)$nativeQueryElement->query : null,
                    'resultClass'       => isset($nativeQueryElement['result-class']) ? (string)$nativeQueryElement['result-class'] : null,
                    'resultSetMapping'  => isset($nativeQueryElement['result-set-mapping']) ? (string)$nativeQueryElement['result-set-mapping'] : null,
                ));
>>>>>>> contactmanager
=======
>>>>>>> donmanager
            }
        }

        // Evaluate sql result set mapping
        if (isset($xmlRoot->{'sql-result-set-mappings'})) {
            foreach ($xmlRoot->{'sql-result-set-mappings'}->{'sql-result-set-mapping'} as $rsmElement) {
<<<<<<< HEAD
<<<<<<< HEAD
                $entities   = [];
                $columns    = [];
                foreach ($rsmElement as $entityElement) {
                    //<entity-result/>
                    if (isset($entityElement['entity-class'])) {
                        $entityResult = [
                            'fields'                => [],
                            'entityClass'           => (string) $entityElement['entity-class'],
                            'discriminatorColumn'   => isset($entityElement['discriminator-column']) ? (string) $entityElement['discriminator-column'] : null,
                        ];

                        foreach ($entityElement as $fieldElement) {
                            $entityResult['fields'][] = [
                                'name'      => isset($fieldElement['name']) ? (string) $fieldElement['name'] : null,
                                'column'    => isset($fieldElement['column']) ? (string) $fieldElement['column'] : null,
                            ];
=======
                $entities   = array();
                $columns    = array();
=======
                $entities   = [];
                $columns    = [];
>>>>>>> donmanager
                foreach ($rsmElement as $entityElement) {
                    //<entity-result/>
                    if (isset($entityElement['entity-class'])) {
                        $entityResult = [
                            'fields'                => [],
                            'entityClass'           => (string) $entityElement['entity-class'],
                            'discriminatorColumn'   => isset($entityElement['discriminator-column']) ? (string) $entityElement['discriminator-column'] : null,
                        ];

                        foreach ($entityElement as $fieldElement) {
<<<<<<< HEAD
                            $entityResult['fields'][] = array(
                                'name'      => isset($fieldElement['name']) ? (string)$fieldElement['name'] : null,
                                'column'    => isset($fieldElement['column']) ? (string)$fieldElement['column'] : null,
                            );
>>>>>>> contactmanager
=======
                            $entityResult['fields'][] = [
                                'name'      => isset($fieldElement['name']) ? (string) $fieldElement['name'] : null,
                                'column'    => isset($fieldElement['column']) ? (string) $fieldElement['column'] : null,
                            ];
>>>>>>> donmanager
                        }

                        $entities[] = $entityResult;
                    }

                    //<column-result/>
                    if (isset($entityElement['name'])) {
<<<<<<< HEAD
<<<<<<< HEAD
                        $columns[] = [
                            'name' => (string) $entityElement['name'],
                        ];
                    }
                }

                $metadata->addSqlResultSetMapping(
                    [
                        'name'          => (string) $rsmElement['name'],
                        'entities'      => $entities,
                        'columns'       => $columns
                    ]
                );
=======
                        $columns[] = array(
                            'name' => (string)$entityElement['name'],
                        );
                    }
                }

                $metadata->addSqlResultSetMapping(array(
                    'name'          => (string)$rsmElement['name'],
                    'entities'      => $entities,
                    'columns'       => $columns
                ));
>>>>>>> contactmanager
=======
                        $columns[] = [
                            'name' => (string) $entityElement['name'],
                        ];
                    }
                }

                $metadata->addSqlResultSetMapping(
                    [
                        'name'          => (string) $rsmElement['name'],
                        'entities'      => $entities,
                        'columns'       => $columns
                    ]
                );
>>>>>>> donmanager
            }
        }

        if (isset($xmlRoot['inheritance-type'])) {
<<<<<<< HEAD
<<<<<<< HEAD
            $inheritanceType = (string) $xmlRoot['inheritance-type'];
            $metadata->setInheritanceType(constant('Doctrine\ORM\Mapping\ClassMetadata::INHERITANCE_TYPE_' . $inheritanceType));

            if ($metadata->inheritanceType != Metadata::INHERITANCE_TYPE_NONE) {
                // Evaluate <discriminator-column...>
                if (isset($xmlRoot->{'discriminator-column'})) {
                    $discrColumn = $xmlRoot->{'discriminator-column'};
                    $metadata->setDiscriminatorColumn(
                        [
                            'name' => isset($discrColumn['name']) ? (string) $discrColumn['name'] : null,
                            'type' => isset($discrColumn['type']) ? (string) $discrColumn['type'] : 'string',
                            'length' => isset($discrColumn['length']) ? (string) $discrColumn['length'] : 255,
                            'columnDefinition' => isset($discrColumn['column-definition']) ? (string) $discrColumn['column-definition'] : null
                        ]
                    );
                } else {
                    $metadata->setDiscriminatorColumn(['name' => 'dtype', 'type' => 'string', 'length' => 255]);
=======
            $inheritanceType = (string)$xmlRoot['inheritance-type'];
=======
            $inheritanceType = (string) $xmlRoot['inheritance-type'];
>>>>>>> donmanager
            $metadata->setInheritanceType(constant('Doctrine\ORM\Mapping\ClassMetadata::INHERITANCE_TYPE_' . $inheritanceType));

            if ($metadata->inheritanceType != Metadata::INHERITANCE_TYPE_NONE) {
                // Evaluate <discriminator-column...>
                if (isset($xmlRoot->{'discriminator-column'})) {
                    $discrColumn = $xmlRoot->{'discriminator-column'};
                    $metadata->setDiscriminatorColumn(
                        [
                            'name' => isset($discrColumn['name']) ? (string) $discrColumn['name'] : null,
                            'type' => isset($discrColumn['type']) ? (string) $discrColumn['type'] : 'string',
                            'length' => isset($discrColumn['length']) ? (string) $discrColumn['length'] : 255,
                            'columnDefinition' => isset($discrColumn['column-definition']) ? (string) $discrColumn['column-definition'] : null
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

                // Evaluate <discriminator-map...>
                if (isset($xmlRoot->{'discriminator-map'})) {
<<<<<<< HEAD
<<<<<<< HEAD
                    $map = [];
                    foreach ($xmlRoot->{'discriminator-map'}->{'discriminator-mapping'} as $discrMapElement) {
                        $map[(string) $discrMapElement['value']] = (string) $discrMapElement['class'];
=======
                    $map = array();
                    foreach ($xmlRoot->{'discriminator-map'}->{'discriminator-mapping'} as $discrMapElement) {
                        $map[(string)$discrMapElement['value']] = (string)$discrMapElement['class'];
>>>>>>> contactmanager
=======
                    $map = [];
                    foreach ($xmlRoot->{'discriminator-map'}->{'discriminator-mapping'} as $discrMapElement) {
                        $map[(string) $discrMapElement['value']] = (string) $discrMapElement['class'];
>>>>>>> donmanager
                    }
                    $metadata->setDiscriminatorMap($map);
                }
            }
        }


        // Evaluate <change-tracking-policy...>
        if (isset($xmlRoot['change-tracking-policy'])) {
            $metadata->setChangeTrackingPolicy(constant('Doctrine\ORM\Mapping\ClassMetadata::CHANGETRACKING_'
<<<<<<< HEAD
<<<<<<< HEAD
                . strtoupper((string) $xmlRoot['change-tracking-policy'])));
=======
                    . strtoupper((string)$xmlRoot['change-tracking-policy'])));
>>>>>>> contactmanager
=======
                . strtoupper((string) $xmlRoot['change-tracking-policy'])));
>>>>>>> donmanager
        }

        // Evaluate <indexes...>
        if (isset($xmlRoot->indexes)) {
<<<<<<< HEAD
<<<<<<< HEAD
            $metadata->table['indexes'] = [];
            foreach ($xmlRoot->indexes->index as $indexXml) {
                $index = ['columns' => explode(',', (string) $indexXml['columns'])];
=======
            $metadata->table['indexes'] = array();
            foreach ($xmlRoot->indexes->index as $indexXml) {
                $index = array('columns' => explode(',', (string) $indexXml['columns']));
>>>>>>> contactmanager
=======
            $metadata->table['indexes'] = [];
            foreach ($xmlRoot->indexes->index as $indexXml) {
                $index = ['columns' => explode(',', (string) $indexXml['columns'])];
>>>>>>> donmanager

                if (isset($indexXml['flags'])) {
                    $index['flags'] = explode(',', (string) $indexXml['flags']);
                }

                if (isset($indexXml->options)) {
                    $index['options'] = $this->_parseOptions($indexXml->options->children());
                }

                if (isset($indexXml['name'])) {
                    $metadata->table['indexes'][(string) $indexXml['name']] = $index;
                } else {
                    $metadata->table['indexes'][] = $index;
                }
            }
        }

        // Evaluate <unique-constraints..>
        if (isset($xmlRoot->{'unique-constraints'})) {
<<<<<<< HEAD
<<<<<<< HEAD
            $metadata->table['uniqueConstraints'] = [];
            foreach ($xmlRoot->{'unique-constraints'}->{'unique-constraint'} as $uniqueXml) {
                $unique = ['columns' => explode(',', (string) $uniqueXml['columns'])];
=======
            $metadata->table['uniqueConstraints'] = array();
            foreach ($xmlRoot->{'unique-constraints'}->{'unique-constraint'} as $uniqueXml) {
                $unique = array('columns' => explode(',', (string) $uniqueXml['columns']));

>>>>>>> contactmanager
=======
            $metadata->table['uniqueConstraints'] = [];
            foreach ($xmlRoot->{'unique-constraints'}->{'unique-constraint'} as $uniqueXml) {
                $unique = ['columns' => explode(',', (string) $uniqueXml['columns'])];
>>>>>>> donmanager

                if (isset($uniqueXml->options)) {
                    $unique['options'] = $this->_parseOptions($uniqueXml->options->children());
                }

                if (isset($uniqueXml['name'])) {
<<<<<<< HEAD
<<<<<<< HEAD
                    $metadata->table['uniqueConstraints'][(string) $uniqueXml['name']] = $unique;
=======
                    $metadata->table['uniqueConstraints'][(string)$uniqueXml['name']] = $unique;
>>>>>>> contactmanager
=======
                    $metadata->table['uniqueConstraints'][(string) $uniqueXml['name']] = $unique;
>>>>>>> donmanager
                } else {
                    $metadata->table['uniqueConstraints'][] = $unique;
                }
            }
        }

        if (isset($xmlRoot->options)) {
            $metadata->table['options'] = $this->_parseOptions($xmlRoot->options->children());
        }

        // The mapping assignment is done in 2 times as a bug might occurs on some php/xml lib versions
        // The internal SimpleXmlIterator get resetted, to this generate a duplicate field exception
<<<<<<< HEAD
<<<<<<< HEAD
        $mappings = [];
=======
        $mappings = array();
>>>>>>> contactmanager
=======
        $mappings = [];
>>>>>>> donmanager
        // Evaluate <field ...> mappings
        if (isset($xmlRoot->field)) {
            foreach ($xmlRoot->field as $fieldMapping) {
                $mapping = $this->columnToArray($fieldMapping);

                if (isset($mapping['version'])) {
                    $metadata->setVersionMapping($mapping);
                    unset($mapping['version']);
                }

                $metadata->mapField($mapping);
            }
        }

        if (isset($xmlRoot->embedded)) {
            foreach ($xmlRoot->embedded as $embeddedMapping) {
                $columnPrefix = isset($embeddedMapping['column-prefix'])
                    ? (string) $embeddedMapping['column-prefix']
                    : null;

                $useColumnPrefix = isset($embeddedMapping['use-column-prefix'])
                    ? $this->evaluateBoolean($embeddedMapping['use-column-prefix'])
                    : true;

<<<<<<< HEAD
<<<<<<< HEAD
                $mapping = [
                    'fieldName' => (string) $embeddedMapping['name'],
                    'class' => (string) $embeddedMapping['class'],
                    'columnPrefix' => $useColumnPrefix ? $columnPrefix : false
                ];
=======
                $mapping = array(
                    'fieldName' => (string) $embeddedMapping['name'],
                    'class' => (string) $embeddedMapping['class'],
                    'columnPrefix' => $useColumnPrefix ? $columnPrefix : false
                );
>>>>>>> contactmanager
=======
                $mapping = [
                    'fieldName' => (string) $embeddedMapping['name'],
                    'class' => (string) $embeddedMapping['class'],
                    'columnPrefix' => $useColumnPrefix ? $columnPrefix : false
                ];
>>>>>>> donmanager

                $metadata->mapEmbedded($mapping);
            }
        }

        foreach ($mappings as $mapping) {
            if (isset($mapping['version'])) {
                $metadata->setVersionMapping($mapping);
            }

            $metadata->mapField($mapping);
        }

        // Evaluate <id ...> mappings
<<<<<<< HEAD
<<<<<<< HEAD
        $associationIds = [];
        foreach ($xmlRoot->id as $idElement) {
            if (isset($idElement['association-key']) && $this->evaluateBoolean($idElement['association-key'])) {
                $associationIds[(string) $idElement['name']] = true;
                continue;
            }

            $mapping = [
                'id' => true,
                'fieldName' => (string) $idElement['name']
            ];

            if (isset($idElement['type'])) {
                $mapping['type'] = (string) $idElement['type'];
            }

            if (isset($idElement['length'])) {
                $mapping['length'] = (string) $idElement['length'];
            }

            if (isset($idElement['column'])) {
                $mapping['columnName'] = (string) $idElement['column'];
            }

            if (isset($idElement['column-definition'])) {
                $mapping['columnDefinition'] = (string) $idElement['column-definition'];
=======
        $associationIds = array();
=======
        $associationIds = [];
>>>>>>> donmanager
        foreach ($xmlRoot->id as $idElement) {
            if (isset($idElement['association-key']) && $this->evaluateBoolean($idElement['association-key'])) {
                $associationIds[(string) $idElement['name']] = true;
                continue;
            }

            $mapping = [
                'id' => true,
                'fieldName' => (string) $idElement['name']
            ];

            if (isset($idElement['type'])) {
                $mapping['type'] = (string) $idElement['type'];
            }

            if (isset($idElement['length'])) {
                $mapping['length'] = (string) $idElement['length'];
            }

            if (isset($idElement['column'])) {
                $mapping['columnName'] = (string) $idElement['column'];
            }

            if (isset($idElement['column-definition'])) {
<<<<<<< HEAD
                $mapping['columnDefinition'] = (string)$idElement['column-definition'];
>>>>>>> contactmanager
=======
                $mapping['columnDefinition'] = (string) $idElement['column-definition'];
>>>>>>> donmanager
            }

            if (isset($idElement->options)) {
                $mapping['options'] = $this->_parseOptions($idElement->options->children());
            }

            $metadata->mapField($mapping);

            if (isset($idElement->generator)) {
                $strategy = isset($idElement->generator['strategy']) ?
<<<<<<< HEAD
<<<<<<< HEAD
                        (string) $idElement->generator['strategy'] : 'AUTO';
                $metadata->setIdGeneratorType(constant('Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_'
                    . $strategy));
=======
                        (string)$idElement->generator['strategy'] : 'AUTO';
                $metadata->setIdGeneratorType(constant('Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_'
                        . $strategy));
>>>>>>> contactmanager
=======
                        (string) $idElement->generator['strategy'] : 'AUTO';
                $metadata->setIdGeneratorType(constant('Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_'
                    . $strategy));
>>>>>>> donmanager
            }

            // Check for SequenceGenerator/TableGenerator definition
            if (isset($idElement->{'sequence-generator'})) {
                $seqGenerator = $idElement->{'sequence-generator'};
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager
                $metadata->setSequenceGeneratorDefinition(
                    [
                        'sequenceName' => (string) $seqGenerator['sequence-name'],
                        'allocationSize' => (string) $seqGenerator['allocation-size'],
                        'initialValue' => (string) $seqGenerator['initial-value']
                    ]
                );
<<<<<<< HEAD
            } else if (isset($idElement->{'custom-id-generator'})) {
                $customGenerator = $idElement->{'custom-id-generator'};
                $metadata->setCustomGeneratorDefinition(
                    [
                        'class' => (string) $customGenerator['class']
                    ]
                );
=======
                $metadata->setSequenceGeneratorDefinition(array(
                    'sequenceName' => (string)$seqGenerator['sequence-name'],
                    'allocationSize' => (string)$seqGenerator['allocation-size'],
                    'initialValue' => (string)$seqGenerator['initial-value']
                ));
            } else if (isset($idElement->{'custom-id-generator'})) {
                $customGenerator = $idElement->{'custom-id-generator'};
                $metadata->setCustomGeneratorDefinition(array(
                    'class' => (string) $customGenerator['class']
                ));
>>>>>>> contactmanager
=======
            } else if (isset($idElement->{'custom-id-generator'})) {
                $customGenerator = $idElement->{'custom-id-generator'};
                $metadata->setCustomGeneratorDefinition(
                    [
                        'class' => (string) $customGenerator['class']
                    ]
                );
>>>>>>> donmanager
            } else if (isset($idElement->{'table-generator'})) {
                throw MappingException::tableIdGeneratorNotImplemented($className);
            }
        }

        // Evaluate <one-to-one ...> mappings
        if (isset($xmlRoot->{'one-to-one'})) {
            foreach ($xmlRoot->{'one-to-one'} as $oneToOneElement) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager
                $mapping = [
                    'fieldName' => (string) $oneToOneElement['field'],
                    'targetEntity' => (string) $oneToOneElement['target-entity']
                ];
<<<<<<< HEAD
=======
                $mapping = array(
                    'fieldName' => (string)$oneToOneElement['field'],
                    'targetEntity' => (string)$oneToOneElement['target-entity']
                );
>>>>>>> contactmanager
=======
>>>>>>> donmanager

                if (isset($associationIds[$mapping['fieldName']])) {
                    $mapping['id'] = true;
                }

                if (isset($oneToOneElement['fetch'])) {
<<<<<<< HEAD
<<<<<<< HEAD
                    $mapping['fetch'] = constant('Doctrine\ORM\Mapping\ClassMetadata::FETCH_' . (string) $oneToOneElement['fetch']);
                }

                if (isset($oneToOneElement['mapped-by'])) {
                    $mapping['mappedBy'] = (string) $oneToOneElement['mapped-by'];
                } else {
                    if (isset($oneToOneElement['inversed-by'])) {
                        $mapping['inversedBy'] = (string) $oneToOneElement['inversed-by'];
                    }
                    $joinColumns = [];
=======
                    $mapping['fetch'] = constant('Doctrine\ORM\Mapping\ClassMetadata::FETCH_' . (string)$oneToOneElement['fetch']);
=======
                    $mapping['fetch'] = constant('Doctrine\ORM\Mapping\ClassMetadata::FETCH_' . (string) $oneToOneElement['fetch']);
>>>>>>> donmanager
                }

                if (isset($oneToOneElement['mapped-by'])) {
                    $mapping['mappedBy'] = (string) $oneToOneElement['mapped-by'];
                } else {
                    if (isset($oneToOneElement['inversed-by'])) {
                        $mapping['inversedBy'] = (string) $oneToOneElement['inversed-by'];
                    }
<<<<<<< HEAD
                    $joinColumns = array();
>>>>>>> contactmanager
=======
                    $joinColumns = [];
>>>>>>> donmanager

                    if (isset($oneToOneElement->{'join-column'})) {
                        $joinColumns[] = $this->joinColumnToArray($oneToOneElement->{'join-column'});
                    } else if (isset($oneToOneElement->{'join-columns'})) {
                        foreach ($oneToOneElement->{'join-columns'}->{'join-column'} as $joinColumnElement) {
                            $joinColumns[] = $this->joinColumnToArray($joinColumnElement);
                        }
                    }

                    $mapping['joinColumns'] = $joinColumns;
                }

                if (isset($oneToOneElement->cascade)) {
                    $mapping['cascade'] = $this->_getCascadeMappings($oneToOneElement->cascade);
                }

                if (isset($oneToOneElement['orphan-removal'])) {
                    $mapping['orphanRemoval'] = $this->evaluateBoolean($oneToOneElement['orphan-removal']);
                }

<<<<<<< HEAD
<<<<<<< HEAD
                // Evaluate second level cache
                if (isset($oneToOneElement->cache)) {
                    $mapping['cache'] = $metadata->getAssociationCacheDefaults($mapping['fieldName'], $this->cacheToArray($oneToOneElement->cache));
                }

                $metadata->mapOneToOne($mapping);
=======
                $metadata->mapOneToOne($mapping);

=======
>>>>>>> donmanager
                // Evaluate second level cache
                if (isset($oneToOneElement->cache)) {
                    $mapping['cache'] = $metadata->getAssociationCacheDefaults($mapping['fieldName'], $this->cacheToArray($oneToOneElement->cache));
                }
<<<<<<< HEAD
>>>>>>> contactmanager
=======

                $metadata->mapOneToOne($mapping);
>>>>>>> donmanager
            }
        }

        // Evaluate <one-to-many ...> mappings
        if (isset($xmlRoot->{'one-to-many'})) {
            foreach ($xmlRoot->{'one-to-many'} as $oneToManyElement) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager
                $mapping = [
                    'fieldName' => (string) $oneToManyElement['field'],
                    'targetEntity' => (string) $oneToManyElement['target-entity'],
                    'mappedBy' => (string) $oneToManyElement['mapped-by']
                ];
<<<<<<< HEAD

                if (isset($oneToManyElement['fetch'])) {
                    $mapping['fetch'] = constant('Doctrine\ORM\Mapping\ClassMetadata::FETCH_' . (string) $oneToManyElement['fetch']);
=======
                $mapping = array(
                    'fieldName' => (string)$oneToManyElement['field'],
                    'targetEntity' => (string)$oneToManyElement['target-entity'],
                    'mappedBy' => (string)$oneToManyElement['mapped-by']
                );

                if (isset($oneToManyElement['fetch'])) {
                    $mapping['fetch'] = constant('Doctrine\ORM\Mapping\ClassMetadata::FETCH_' . (string)$oneToManyElement['fetch']);
>>>>>>> contactmanager
=======

                if (isset($oneToManyElement['fetch'])) {
                    $mapping['fetch'] = constant('Doctrine\ORM\Mapping\ClassMetadata::FETCH_' . (string) $oneToManyElement['fetch']);
>>>>>>> donmanager
                }

                if (isset($oneToManyElement->cascade)) {
                    $mapping['cascade'] = $this->_getCascadeMappings($oneToManyElement->cascade);
                }

                if (isset($oneToManyElement['orphan-removal'])) {
                    $mapping['orphanRemoval'] = $this->evaluateBoolean($oneToManyElement['orphan-removal']);
                }

                if (isset($oneToManyElement->{'order-by'})) {
<<<<<<< HEAD
<<<<<<< HEAD
                    $orderBy = [];
                    foreach ($oneToManyElement->{'order-by'}->{'order-by-field'} as $orderByField) {
                        $orderBy[(string) $orderByField['name']] = (string) $orderByField['direction'];
=======
                    $orderBy = array();
                    foreach ($oneToManyElement->{'order-by'}->{'order-by-field'} as $orderByField) {
                        $orderBy[(string)$orderByField['name']] = (string)$orderByField['direction'];
>>>>>>> contactmanager
=======
                    $orderBy = [];
                    foreach ($oneToManyElement->{'order-by'}->{'order-by-field'} as $orderByField) {
                        $orderBy[(string) $orderByField['name']] = (string) $orderByField['direction'];
>>>>>>> donmanager
                    }
                    $mapping['orderBy'] = $orderBy;
                }

                if (isset($oneToManyElement['index-by'])) {
<<<<<<< HEAD
<<<<<<< HEAD
                    $mapping['indexBy'] = (string) $oneToManyElement['index-by'];
=======
                    $mapping['indexBy'] = (string)$oneToManyElement['index-by'];
>>>>>>> contactmanager
=======
                    $mapping['indexBy'] = (string) $oneToManyElement['index-by'];
>>>>>>> donmanager
                } else if (isset($oneToManyElement->{'index-by'})) {
                    throw new \InvalidArgumentException("<index-by /> is not a valid tag");
                }

<<<<<<< HEAD
<<<<<<< HEAD
                // Evaluate second level cache
                if (isset($oneToManyElement->cache)) {
                    $mapping['cache'] = $metadata->getAssociationCacheDefaults($mapping['fieldName'], $this->cacheToArray($oneToManyElement->cache));
                }

                $metadata->mapOneToMany($mapping);
=======
                $metadata->mapOneToMany($mapping);

=======
>>>>>>> donmanager
                // Evaluate second level cache
                if (isset($oneToManyElement->cache)) {
                    $mapping['cache'] = $metadata->getAssociationCacheDefaults($mapping['fieldName'], $this->cacheToArray($oneToManyElement->cache));
                }
<<<<<<< HEAD
>>>>>>> contactmanager
=======

                $metadata->mapOneToMany($mapping);
>>>>>>> donmanager
            }
        }

        // Evaluate <many-to-one ...> mappings
        if (isset($xmlRoot->{'many-to-one'})) {
            foreach ($xmlRoot->{'many-to-one'} as $manyToOneElement) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager
                $mapping = [
                    'fieldName' => (string) $manyToOneElement['field'],
                    'targetEntity' => (string) $manyToOneElement['target-entity']
                ];
<<<<<<< HEAD
=======
                $mapping = array(
                    'fieldName' => (string)$manyToOneElement['field'],
                    'targetEntity' => (string)$manyToOneElement['target-entity']
                );
>>>>>>> contactmanager
=======
>>>>>>> donmanager

                if (isset($associationIds[$mapping['fieldName']])) {
                    $mapping['id'] = true;
                }

                if (isset($manyToOneElement['fetch'])) {
<<<<<<< HEAD
<<<<<<< HEAD
                    $mapping['fetch'] = constant('Doctrine\ORM\Mapping\ClassMetadata::FETCH_' . (string) $manyToOneElement['fetch']);
                }

                if (isset($manyToOneElement['inversed-by'])) {
                    $mapping['inversedBy'] = (string) $manyToOneElement['inversed-by'];
                }

                $joinColumns = [];
=======
                    $mapping['fetch'] = constant('Doctrine\ORM\Mapping\ClassMetadata::FETCH_' . (string)$manyToOneElement['fetch']);
=======
                    $mapping['fetch'] = constant('Doctrine\ORM\Mapping\ClassMetadata::FETCH_' . (string) $manyToOneElement['fetch']);
>>>>>>> donmanager
                }

                if (isset($manyToOneElement['inversed-by'])) {
                    $mapping['inversedBy'] = (string) $manyToOneElement['inversed-by'];
                }

<<<<<<< HEAD
                $joinColumns = array();
>>>>>>> contactmanager
=======
                $joinColumns = [];
>>>>>>> donmanager

                if (isset($manyToOneElement->{'join-column'})) {
                    $joinColumns[] = $this->joinColumnToArray($manyToOneElement->{'join-column'});
                } else if (isset($manyToOneElement->{'join-columns'})) {
                    foreach ($manyToOneElement->{'join-columns'}->{'join-column'} as $joinColumnElement) {
                        $joinColumns[] = $this->joinColumnToArray($joinColumnElement);
                    }
                }

                $mapping['joinColumns'] = $joinColumns;

                if (isset($manyToOneElement->cascade)) {
                    $mapping['cascade'] = $this->_getCascadeMappings($manyToOneElement->cascade);
                }

<<<<<<< HEAD
<<<<<<< HEAD
                // Evaluate second level cache
                if (isset($manyToOneElement->cache)) {
                    $mapping['cache'] = $metadata->getAssociationCacheDefaults($mapping['fieldName'], $this->cacheToArray($manyToOneElement->cache));
                }

                $metadata->mapManyToOne($mapping);

=======
                $metadata->mapManyToOne($mapping);

=======
>>>>>>> donmanager
                // Evaluate second level cache
                if (isset($manyToOneElement->cache)) {
                    $mapping['cache'] = $metadata->getAssociationCacheDefaults($mapping['fieldName'], $this->cacheToArray($manyToOneElement->cache));
                }
<<<<<<< HEAD
>>>>>>> contactmanager
=======

                $metadata->mapManyToOne($mapping);

>>>>>>> donmanager
            }
        }

        // Evaluate <many-to-many ...> mappings
        if (isset($xmlRoot->{'many-to-many'})) {
            foreach ($xmlRoot->{'many-to-many'} as $manyToManyElement) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager
                $mapping = [
                    'fieldName' => (string) $manyToManyElement['field'],
                    'targetEntity' => (string) $manyToManyElement['target-entity']
                ];
<<<<<<< HEAD

                if (isset($manyToManyElement['fetch'])) {
                    $mapping['fetch'] = constant('Doctrine\ORM\Mapping\ClassMetadata::FETCH_' . (string) $manyToManyElement['fetch']);
=======
                $mapping = array(
                    'fieldName' => (string)$manyToManyElement['field'],
                    'targetEntity' => (string)$manyToManyElement['target-entity']
                );

                if (isset($manyToManyElement['fetch'])) {
                    $mapping['fetch'] = constant('Doctrine\ORM\Mapping\ClassMetadata::FETCH_' . (string)$manyToManyElement['fetch']);
>>>>>>> contactmanager
=======

                if (isset($manyToManyElement['fetch'])) {
                    $mapping['fetch'] = constant('Doctrine\ORM\Mapping\ClassMetadata::FETCH_' . (string) $manyToManyElement['fetch']);
>>>>>>> donmanager
                }

                if (isset($manyToManyElement['orphan-removal'])) {
                    $mapping['orphanRemoval'] = $this->evaluateBoolean($manyToManyElement['orphan-removal']);
                }

                if (isset($manyToManyElement['mapped-by'])) {
<<<<<<< HEAD
<<<<<<< HEAD
                    $mapping['mappedBy'] = (string) $manyToManyElement['mapped-by'];
                } else if (isset($manyToManyElement->{'join-table'})) {
                    if (isset($manyToManyElement['inversed-by'])) {
                        $mapping['inversedBy'] = (string) $manyToManyElement['inversed-by'];
                    }

                    $joinTableElement = $manyToManyElement->{'join-table'};
                    $joinTable = [
                        'name' => (string) $joinTableElement['name']
                    ];

                    if (isset($joinTableElement['schema'])) {
                        $joinTable['schema'] = (string) $joinTableElement['schema'];
=======
                    $mapping['mappedBy'] = (string)$manyToManyElement['mapped-by'];
=======
                    $mapping['mappedBy'] = (string) $manyToManyElement['mapped-by'];
>>>>>>> donmanager
                } else if (isset($manyToManyElement->{'join-table'})) {
                    if (isset($manyToManyElement['inversed-by'])) {
                        $mapping['inversedBy'] = (string) $manyToManyElement['inversed-by'];
                    }

                    $joinTableElement = $manyToManyElement->{'join-table'};
                    $joinTable = [
                        'name' => (string) $joinTableElement['name']
                    ];

                    if (isset($joinTableElement['schema'])) {
<<<<<<< HEAD
                        $joinTable['schema'] = (string)$joinTableElement['schema'];
>>>>>>> contactmanager
=======
                        $joinTable['schema'] = (string) $joinTableElement['schema'];
>>>>>>> donmanager
                    }

                    foreach ($joinTableElement->{'join-columns'}->{'join-column'} as $joinColumnElement) {
                        $joinTable['joinColumns'][] = $this->joinColumnToArray($joinColumnElement);
                    }

                    foreach ($joinTableElement->{'inverse-join-columns'}->{'join-column'} as $joinColumnElement) {
                        $joinTable['inverseJoinColumns'][] = $this->joinColumnToArray($joinColumnElement);
                    }

                    $mapping['joinTable'] = $joinTable;
                }

                if (isset($manyToManyElement->cascade)) {
                    $mapping['cascade'] = $this->_getCascadeMappings($manyToManyElement->cascade);
                }

                if (isset($manyToManyElement->{'order-by'})) {
<<<<<<< HEAD
<<<<<<< HEAD
                    $orderBy = [];
                    foreach ($manyToManyElement->{'order-by'}->{'order-by-field'} as $orderByField) {
                        $orderBy[(string) $orderByField['name']] = (string) $orderByField['direction'];
=======
                    $orderBy = array();
                    foreach ($manyToManyElement->{'order-by'}->{'order-by-field'} as $orderByField) {
                        $orderBy[(string)$orderByField['name']] = (string)$orderByField['direction'];
>>>>>>> contactmanager
=======
                    $orderBy = [];
                    foreach ($manyToManyElement->{'order-by'}->{'order-by-field'} as $orderByField) {
                        $orderBy[(string) $orderByField['name']] = (string) $orderByField['direction'];
>>>>>>> donmanager
                    }
                    $mapping['orderBy'] = $orderBy;
                }

                if (isset($manyToManyElement['index-by'])) {
<<<<<<< HEAD
<<<<<<< HEAD
                    $mapping['indexBy'] = (string) $manyToManyElement['index-by'];
=======
                    $mapping['indexBy'] = (string)$manyToManyElement['index-by'];
>>>>>>> contactmanager
=======
                    $mapping['indexBy'] = (string) $manyToManyElement['index-by'];
>>>>>>> donmanager
                } else if (isset($manyToManyElement->{'index-by'})) {
                    throw new \InvalidArgumentException("<index-by /> is not a valid tag");
                }

<<<<<<< HEAD
<<<<<<< HEAD
                // Evaluate second level cache
                if (isset($manyToManyElement->cache)) {
                    $mapping['cache'] = $metadata->getAssociationCacheDefaults($mapping['fieldName'], $this->cacheToArray($manyToManyElement->cache));
                }

                $metadata->mapManyToMany($mapping);
=======
                $metadata->mapManyToMany($mapping);

=======
>>>>>>> donmanager
                // Evaluate second level cache
                if (isset($manyToManyElement->cache)) {
                    $mapping['cache'] = $metadata->getAssociationCacheDefaults($mapping['fieldName'], $this->cacheToArray($manyToManyElement->cache));
                }
<<<<<<< HEAD
>>>>>>> contactmanager
=======

                $metadata->mapManyToMany($mapping);
>>>>>>> donmanager
            }
        }

        // Evaluate association-overrides
        if (isset($xmlRoot->{'attribute-overrides'})) {
            foreach ($xmlRoot->{'attribute-overrides'}->{'attribute-override'} as $overrideElement) {
                $fieldName = (string) $overrideElement['name'];
                foreach ($overrideElement->field as $field) {
                    $mapping = $this->columnToArray($field);
                    $mapping['fieldName'] = $fieldName;
                    $metadata->setAttributeOverride($fieldName, $mapping);
                }
            }
        }

        // Evaluate association-overrides
        if (isset($xmlRoot->{'association-overrides'})) {
            foreach ($xmlRoot->{'association-overrides'}->{'association-override'} as $overrideElement) {
                $fieldName  = (string) $overrideElement['name'];
<<<<<<< HEAD
<<<<<<< HEAD
                $override   = [];

                // Check for join-columns
                if (isset($overrideElement->{'join-columns'})) {
                    $joinColumns = [];
=======
                $override   = array();

                // Check for join-columns
                if (isset($overrideElement->{'join-columns'})) {
                    $joinColumns = array();
>>>>>>> contactmanager
=======
                $override   = [];

                // Check for join-columns
                if (isset($overrideElement->{'join-columns'})) {
                    $joinColumns = [];
>>>>>>> donmanager
                    foreach ($overrideElement->{'join-columns'}->{'join-column'} as $joinColumnElement) {
                        $joinColumns[] = $this->joinColumnToArray($joinColumnElement);
                    }
                    $override['joinColumns'] = $joinColumns;
                }

                // Check for join-table
                if ($overrideElement->{'join-table'}) {
                    $joinTable          = null;
                    $joinTableElement   = $overrideElement->{'join-table'};

<<<<<<< HEAD
<<<<<<< HEAD
                    $joinTable = [
                        'name'      => (string) $joinTableElement['name'],
                        'schema'    => (string) $joinTableElement['schema']
                    ];
=======
                    $joinTable = array(
                        'name'      => (string) $joinTableElement['name'],
                        'schema'    => (string) $joinTableElement['schema']
                    );
>>>>>>> contactmanager
=======
                    $joinTable = [
                        'name'      => (string) $joinTableElement['name'],
                        'schema'    => (string) $joinTableElement['schema']
                    ];
>>>>>>> donmanager

                    if (isset($joinTableElement->{'join-columns'})) {
                        foreach ($joinTableElement->{'join-columns'}->{'join-column'} as $joinColumnElement) {
                            $joinTable['joinColumns'][] = $this->joinColumnToArray($joinColumnElement);
                        }
                    }

                    if (isset($joinTableElement->{'inverse-join-columns'})) {
                        foreach ($joinTableElement->{'inverse-join-columns'}->{'join-column'} as $joinColumnElement) {
                            $joinTable['inverseJoinColumns'][] = $this->joinColumnToArray($joinColumnElement);
                        }
                    }

                    $override['joinTable'] = $joinTable;
                }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager
                // Check for inversed-by
                if (isset($overrideElement->{'inversed-by'})) {
                    $override['inversedBy'] = (string) $overrideElement->{'inversed-by'}['name'];
                }

                // Check for `fetch`
                if (isset($overrideElement['fetch'])) {
                    $override['fetch'] = constant(Metadata::class . '::FETCH_' . (string) $overrideElement['fetch']);
                }

<<<<<<< HEAD
=======
>>>>>>> contactmanager
=======
>>>>>>> donmanager
                $metadata->setAssociationOverride($fieldName, $override);
            }
        }

        // Evaluate <lifecycle-callbacks...>
        if (isset($xmlRoot->{'lifecycle-callbacks'})) {
            foreach ($xmlRoot->{'lifecycle-callbacks'}->{'lifecycle-callback'} as $lifecycleCallback) {
<<<<<<< HEAD
<<<<<<< HEAD
                $metadata->addLifecycleCallback((string) $lifecycleCallback['method'], constant('Doctrine\ORM\Events::' . (string) $lifecycleCallback['type']));
=======
                $metadata->addLifecycleCallback((string)$lifecycleCallback['method'], constant('Doctrine\ORM\Events::' . (string)$lifecycleCallback['type']));
>>>>>>> contactmanager
=======
                $metadata->addLifecycleCallback((string) $lifecycleCallback['method'], constant('Doctrine\ORM\Events::' . (string) $lifecycleCallback['type']));
>>>>>>> donmanager
            }
        }

        // Evaluate entity listener
        if (isset($xmlRoot->{'entity-listeners'})) {
            foreach ($xmlRoot->{'entity-listeners'}->{'entity-listener'} as $listenerElement) {
                $className = (string) $listenerElement['class'];
                // Evaluate the listener using naming convention.
<<<<<<< HEAD
<<<<<<< HEAD
                if ($listenerElement->count() === 0) {
=======
                if($listenerElement->count() === 0) {
>>>>>>> contactmanager
=======
                if ($listenerElement->count() === 0) {
>>>>>>> donmanager
                    EntityListenerBuilder::bindEntityListener($metadata, $className);

                    continue;
                }

                foreach ($listenerElement as $callbackElement) {
                    $eventName   = (string) $callbackElement['type'];
                    $methodName  = (string) $callbackElement['method'];

                    $metadata->addEntityListener($eventName, $className, $methodName);
                }
            }
        }
    }

    /**
     * Parses (nested) option elements.
     *
     * @param SimpleXMLElement $options The XML element.
     *
     * @return array The options array.
     */
    private function _parseOptions(SimpleXMLElement $options)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $array = [];
=======
        $array = array();
>>>>>>> contactmanager
=======
        $array = [];
>>>>>>> donmanager

        /* @var $option SimpleXMLElement */
        foreach ($options as $option) {
            if ($option->count()) {
                $value = $this->_parseOptions($option->children());
            } else {
                $value = (string) $option;
            }

<<<<<<< HEAD
<<<<<<< HEAD
            $attributes = $option->attributes();

            if (isset($attributes->name)) {
                $nameAttribute = (string) $attributes->name;
                $array[$nameAttribute] = in_array($nameAttribute, ['unsigned', 'fixed'])
                    ? $this->evaluateBoolean($value)
                    : $value;
=======
            $attr = $option->attributes();

            if (isset($attr->name)) {
                $array[(string) $attr->name] = $value;
>>>>>>> contactmanager
=======
            $attributes = $option->attributes();

            if (isset($attributes->name)) {
                $nameAttribute = (string) $attributes->name;
                $array[$nameAttribute] = in_array($nameAttribute, ['unsigned', 'fixed'])
                    ? $this->evaluateBoolean($value)
                    : $value;
>>>>>>> donmanager
            } else {
                $array[] = $value;
            }
        }

        return $array;
    }

    /**
     * Constructs a joinColumn mapping array based on the information
     * found in the given SimpleXMLElement.
     *
     * @param SimpleXMLElement $joinColumnElement The XML element.
     *
     * @return array The mapping array.
     */
    private function joinColumnToArray(SimpleXMLElement $joinColumnElement)
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager
        $joinColumn = [
            'name' => (string) $joinColumnElement['name'],
            'referencedColumnName' => (string) $joinColumnElement['referenced-column-name']
        ];
<<<<<<< HEAD
=======
        $joinColumn = array(
            'name' => (string)$joinColumnElement['name'],
            'referencedColumnName' => (string)$joinColumnElement['referenced-column-name']
        );
>>>>>>> contactmanager
=======
>>>>>>> donmanager

        if (isset($joinColumnElement['unique'])) {
            $joinColumn['unique'] = $this->evaluateBoolean($joinColumnElement['unique']);
        }

        if (isset($joinColumnElement['nullable'])) {
            $joinColumn['nullable'] = $this->evaluateBoolean($joinColumnElement['nullable']);
        }

        if (isset($joinColumnElement['on-delete'])) {
<<<<<<< HEAD
<<<<<<< HEAD
            $joinColumn['onDelete'] = (string) $joinColumnElement['on-delete'];
        }

        if (isset($joinColumnElement['column-definition'])) {
            $joinColumn['columnDefinition'] = (string) $joinColumnElement['column-definition'];
=======
            $joinColumn['onDelete'] = (string)$joinColumnElement['on-delete'];
        }

        if (isset($joinColumnElement['column-definition'])) {
            $joinColumn['columnDefinition'] = (string)$joinColumnElement['column-definition'];
>>>>>>> contactmanager
=======
            $joinColumn['onDelete'] = (string) $joinColumnElement['on-delete'];
        }

        if (isset($joinColumnElement['column-definition'])) {
            $joinColumn['columnDefinition'] = (string) $joinColumnElement['column-definition'];
>>>>>>> donmanager
        }

        return $joinColumn;
    }

     /**
     * Parses the given field as array.
     *
     * @param SimpleXMLElement $fieldMapping
     *
     * @return array
     */
    private function columnToArray(SimpleXMLElement $fieldMapping)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $mapping = [
            'fieldName' => (string) $fieldMapping['name'],
        ];
=======
        $mapping = array(
            'fieldName' => (string) $fieldMapping['name'],
        );
>>>>>>> contactmanager
=======
        $mapping = [
            'fieldName' => (string) $fieldMapping['name'],
        ];
>>>>>>> donmanager

        if (isset($fieldMapping['type'])) {
            $mapping['type'] = (string) $fieldMapping['type'];
        }

        if (isset($fieldMapping['column'])) {
            $mapping['columnName'] = (string) $fieldMapping['column'];
        }

        if (isset($fieldMapping['length'])) {
            $mapping['length'] = (int) $fieldMapping['length'];
        }

        if (isset($fieldMapping['precision'])) {
            $mapping['precision'] = (int) $fieldMapping['precision'];
        }

        if (isset($fieldMapping['scale'])) {
            $mapping['scale'] = (int) $fieldMapping['scale'];
        }

        if (isset($fieldMapping['unique'])) {
            $mapping['unique'] = $this->evaluateBoolean($fieldMapping['unique']);
        }

        if (isset($fieldMapping['nullable'])) {
            $mapping['nullable'] = $this->evaluateBoolean($fieldMapping['nullable']);
        }

        if (isset($fieldMapping['version']) && $fieldMapping['version']) {
            $mapping['version'] = $this->evaluateBoolean($fieldMapping['version']);
        }

        if (isset($fieldMapping['column-definition'])) {
            $mapping['columnDefinition'] = (string) $fieldMapping['column-definition'];
        }

        if (isset($fieldMapping->options)) {
            $mapping['options'] = $this->_parseOptions($fieldMapping->options->children());
        }

        return $mapping;
    }

    /**
     * Parse / Normalize the cache configuration
     *
     * @param SimpleXMLElement $cacheMapping
     *
     * @return array
     */
    private function cacheToArray(SimpleXMLElement $cacheMapping)
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
     * Gathers a list of cascade options found in the given cascade element.
     *
     * @param SimpleXMLElement $cascadeElement The cascade element.
     *
     * @return array The list of cascade options.
     */
    private function _getCascadeMappings(SimpleXMLElement $cascadeElement)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $cascades = [];
=======
        $cascades = array();
>>>>>>> contactmanager
=======
        $cascades = [];
>>>>>>> donmanager
        /* @var $action SimpleXmlElement */
        foreach ($cascadeElement->children() as $action) {
            // According to the JPA specifications, XML uses "cascade-persist"
            // instead of "persist". Here, both variations
            // are supported because both YAML and Annotation use "persist"
            // and we want to make sure that this driver doesn't need to know
            // anything about the supported cascading actions
            $cascades[] = str_replace('cascade-', '', $action->getName());
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> contactmanager
=======

>>>>>>> donmanager
        return $cascades;
    }

    /**
     * {@inheritDoc}
     */
    protected function loadMappingFile($file)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $result = [];
=======
        $result = array();
>>>>>>> contactmanager
=======
        $result = [];
>>>>>>> donmanager
        // Note: we do not use `simplexml_load_file()` because of https://bugs.php.net/bug.php?id=62577
        $xmlElement = simplexml_load_string(file_get_contents($file));

        if (isset($xmlElement->entity)) {
            foreach ($xmlElement->entity as $entityElement) {
<<<<<<< HEAD
<<<<<<< HEAD
                $entityName = (string) $entityElement['name'];
=======
                $entityName = (string)$entityElement['name'];
>>>>>>> contactmanager
=======
                $entityName = (string) $entityElement['name'];
>>>>>>> donmanager
                $result[$entityName] = $entityElement;
            }
        } else if (isset($xmlElement->{'mapped-superclass'})) {
            foreach ($xmlElement->{'mapped-superclass'} as $mappedSuperClass) {
<<<<<<< HEAD
<<<<<<< HEAD
                $className = (string) $mappedSuperClass['name'];
=======
                $className = (string)$mappedSuperClass['name'];
>>>>>>> contactmanager
=======
                $className = (string) $mappedSuperClass['name'];
>>>>>>> donmanager
                $result[$className] = $mappedSuperClass;
            }
        } else if (isset($xmlElement->embeddable)) {
            foreach ($xmlElement->embeddable as $embeddableElement) {
                $embeddableName = (string) $embeddableElement['name'];
                $result[$embeddableName] = $embeddableElement;
            }
        }

        return $result;
    }

    /**
     * @param mixed $element
     *
     * @return bool
     */
    protected function evaluateBoolean($element)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $flag = (string) $element;
=======
        $flag = (string)$element;
>>>>>>> contactmanager
=======
        $flag = (string) $element;
>>>>>>> donmanager

        return ($flag == "true" || $flag == "1");
    }
}
