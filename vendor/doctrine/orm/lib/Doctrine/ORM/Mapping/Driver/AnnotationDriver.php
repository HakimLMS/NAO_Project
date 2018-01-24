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

use Doctrine\Common\Annotations\AnnotationReader;
<<<<<<< HEAD
<<<<<<< HEAD
use Doctrine\Common\Persistence\Mapping\ClassMetadata;
use Doctrine\Common\Persistence\Mapping\Driver\AnnotationDriver as AbstractAnnotationDriver;
use Doctrine\ORM\Events;
use Doctrine\ORM\Mapping;
use Doctrine\ORM\Mapping\Builder\EntityListenerBuilder;
use Doctrine\ORM\Mapping\MappingException;
=======
use Doctrine\ORM\Mapping\MappingException;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Builder\EntityListenerBuilder;
use Doctrine\Common\Persistence\Mapping\ClassMetadata;
use Doctrine\Common\Persistence\Mapping\Driver\AnnotationDriver as AbstractAnnotationDriver;
use Doctrine\ORM\Events;
>>>>>>> contactmanager
=======
use Doctrine\Common\Persistence\Mapping\ClassMetadata;
use Doctrine\Common\Persistence\Mapping\Driver\AnnotationDriver as AbstractAnnotationDriver;
use Doctrine\ORM\Events;
use Doctrine\ORM\Mapping;
use Doctrine\ORM\Mapping\Builder\EntityListenerBuilder;
use Doctrine\ORM\Mapping\MappingException;
>>>>>>> donmanager

/**
 * The AnnotationDriver reads the mapping metadata from docblock annotations.
 *
 * @since 2.0
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Jonathan H. Wage <jonwage@gmail.com>
 * @author Roman Borschel <roman@code-factory.org>
 */
class AnnotationDriver extends AbstractAnnotationDriver
{
    /**
     * {@inheritDoc}
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager
    protected $entityAnnotationClasses = [
        Mapping\Entity::class => 1,
        Mapping\MappedSuperclass::class => 2,
    ];
<<<<<<< HEAD
=======
    protected $entityAnnotationClasses = array(
        'Doctrine\ORM\Mapping\Entity' => 1,
        'Doctrine\ORM\Mapping\MappedSuperclass' => 2,
    );
>>>>>>> contactmanager
=======
>>>>>>> donmanager

    /**
     * {@inheritDoc}
     */
    public function loadMetadataForClass($className, ClassMetadata $metadata)
    {
        /* @var $metadata \Doctrine\ORM\Mapping\ClassMetadataInfo */
        $class = $metadata->getReflectionClass();
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> contactmanager
=======

>>>>>>> donmanager
        if ( ! $class) {
            // this happens when running annotation driver in combination with
            // static reflection services. This is not the nicest fix
            $class = new \ReflectionClass($metadata->name);
        }

        $classAnnotations = $this->reader->getClassAnnotations($class);

        if ($classAnnotations) {
            foreach ($classAnnotations as $key => $annot) {
                if ( ! is_numeric($key)) {
                    continue;
                }

                $classAnnotations[get_class($annot)] = $annot;
            }
        }

        // Evaluate Entity annotation
<<<<<<< HEAD
<<<<<<< HEAD
        if (isset($classAnnotations[Mapping\Entity::class])) {
            $entityAnnot = $classAnnotations[Mapping\Entity::class];
            if ($entityAnnot->repositoryClass !== null) {
                $metadata->setCustomRepositoryClass($entityAnnot->repositoryClass);
            }

            if ($entityAnnot->readOnly) {
                $metadata->markReadOnly();
            }
        } else if (isset($classAnnotations[Mapping\MappedSuperclass::class])) {
            $mappedSuperclassAnnot = $classAnnotations[Mapping\MappedSuperclass::class];

            $metadata->setCustomRepositoryClass($mappedSuperclassAnnot->repositoryClass);
            $metadata->isMappedSuperclass = true;
        } else if (isset($classAnnotations[Mapping\Embeddable::class])) {
=======
        if (isset($classAnnotations['Doctrine\ORM\Mapping\Entity'])) {
            $entityAnnot = $classAnnotations['Doctrine\ORM\Mapping\Entity'];
=======
        if (isset($classAnnotations[Mapping\Entity::class])) {
            $entityAnnot = $classAnnotations[Mapping\Entity::class];
>>>>>>> donmanager
            if ($entityAnnot->repositoryClass !== null) {
                $metadata->setCustomRepositoryClass($entityAnnot->repositoryClass);
            }

            if ($entityAnnot->readOnly) {
                $metadata->markReadOnly();
            }
        } else if (isset($classAnnotations[Mapping\MappedSuperclass::class])) {
            $mappedSuperclassAnnot = $classAnnotations[Mapping\MappedSuperclass::class];

            $metadata->setCustomRepositoryClass($mappedSuperclassAnnot->repositoryClass);
            $metadata->isMappedSuperclass = true;
<<<<<<< HEAD
        } else if (isset($classAnnotations['Doctrine\ORM\Mapping\Embeddable'])) {
>>>>>>> contactmanager
=======
        } else if (isset($classAnnotations[Mapping\Embeddable::class])) {
>>>>>>> donmanager
            $metadata->isEmbeddedClass = true;
        } else {
            throw MappingException::classIsNotAValidEntityOrMappedSuperClass($className);
        }

        // Evaluate Table annotation
<<<<<<< HEAD
<<<<<<< HEAD
        if (isset($classAnnotations[Mapping\Table::class])) {
            $tableAnnot   = $classAnnotations[Mapping\Table::class];
            $primaryTable = [
                'name'   => $tableAnnot->name,
                'schema' => $tableAnnot->schema
            ];

            if ($tableAnnot->indexes !== null) {
                foreach ($tableAnnot->indexes as $indexAnnot) {
                    $index = ['columns' => $indexAnnot->columns];
=======
        if (isset($classAnnotations['Doctrine\ORM\Mapping\Table'])) {
            $tableAnnot   = $classAnnotations['Doctrine\ORM\Mapping\Table'];
            $primaryTable = array(
=======
        if (isset($classAnnotations[Mapping\Table::class])) {
            $tableAnnot   = $classAnnotations[Mapping\Table::class];
            $primaryTable = [
>>>>>>> donmanager
                'name'   => $tableAnnot->name,
                'schema' => $tableAnnot->schema
            ];

            if ($tableAnnot->indexes !== null) {
                foreach ($tableAnnot->indexes as $indexAnnot) {
<<<<<<< HEAD
                    $index = array('columns' => $indexAnnot->columns);
>>>>>>> contactmanager
=======
                    $index = ['columns' => $indexAnnot->columns];
>>>>>>> donmanager

                    if ( ! empty($indexAnnot->flags)) {
                        $index['flags'] = $indexAnnot->flags;
                    }

                    if ( ! empty($indexAnnot->options)) {
                        $index['options'] = $indexAnnot->options;
                    }

                    if ( ! empty($indexAnnot->name)) {
                        $primaryTable['indexes'][$indexAnnot->name] = $index;
                    } else {
                        $primaryTable['indexes'][] = $index;
                    }
                }
            }

            if ($tableAnnot->uniqueConstraints !== null) {
                foreach ($tableAnnot->uniqueConstraints as $uniqueConstraintAnnot) {
<<<<<<< HEAD
<<<<<<< HEAD
                    $uniqueConstraint = ['columns' => $uniqueConstraintAnnot->columns];
=======
                    $uniqueConstraint = array('columns' => $uniqueConstraintAnnot->columns);
>>>>>>> contactmanager
=======
                    $uniqueConstraint = ['columns' => $uniqueConstraintAnnot->columns];
>>>>>>> donmanager

                    if ( ! empty($uniqueConstraintAnnot->options)) {
                        $uniqueConstraint['options'] = $uniqueConstraintAnnot->options;
                    }

                    if ( ! empty($uniqueConstraintAnnot->name)) {
                        $primaryTable['uniqueConstraints'][$uniqueConstraintAnnot->name] = $uniqueConstraint;
                    } else {
                        $primaryTable['uniqueConstraints'][] = $uniqueConstraint;
                    }
                }
            }

            if ($tableAnnot->options) {
                $primaryTable['options'] = $tableAnnot->options;
            }

            $metadata->setPrimaryTable($primaryTable);
        }

        // Evaluate @Cache annotation
<<<<<<< HEAD
<<<<<<< HEAD
        if (isset($classAnnotations[Mapping\Cache::class])) {
            $cacheAnnot = $classAnnotations[Mapping\Cache::class];
            $cacheMap   = [
                'region' => $cacheAnnot->region,
                'usage'  => constant('Doctrine\ORM\Mapping\ClassMetadata::CACHE_USAGE_' . $cacheAnnot->usage),
            ];
=======
        if (isset($classAnnotations['Doctrine\ORM\Mapping\Cache'])) {
            $cacheAnnot = $classAnnotations['Doctrine\ORM\Mapping\Cache'];
            $cacheMap   = array(
                'region' => $cacheAnnot->region,
                'usage'  => constant('Doctrine\ORM\Mapping\ClassMetadata::CACHE_USAGE_' . $cacheAnnot->usage),
            );
>>>>>>> contactmanager
=======
        if (isset($classAnnotations[Mapping\Cache::class])) {
            $cacheAnnot = $classAnnotations[Mapping\Cache::class];
            $cacheMap   = [
                'region' => $cacheAnnot->region,
                'usage'  => constant('Doctrine\ORM\Mapping\ClassMetadata::CACHE_USAGE_' . $cacheAnnot->usage),
            ];
>>>>>>> donmanager

            $metadata->enableCache($cacheMap);
        }

        // Evaluate NamedNativeQueries annotation
<<<<<<< HEAD
<<<<<<< HEAD
        if (isset($classAnnotations[Mapping\NamedNativeQueries::class])) {
            $namedNativeQueriesAnnot = $classAnnotations[Mapping\NamedNativeQueries::class];

            foreach ($namedNativeQueriesAnnot->value as $namedNativeQuery) {
                $metadata->addNamedNativeQuery(
                    [
                        'name'              => $namedNativeQuery->name,
                        'query'             => $namedNativeQuery->query,
                        'resultClass'       => $namedNativeQuery->resultClass,
                        'resultSetMapping'  => $namedNativeQuery->resultSetMapping,
                    ]
                );
=======
        if (isset($classAnnotations['Doctrine\ORM\Mapping\NamedNativeQueries'])) {
            $namedNativeQueriesAnnot = $classAnnotations['Doctrine\ORM\Mapping\NamedNativeQueries'];

            foreach ($namedNativeQueriesAnnot->value as $namedNativeQuery) {
                $metadata->addNamedNativeQuery(array(
                    'name'              => $namedNativeQuery->name,
                    'query'             => $namedNativeQuery->query,
                    'resultClass'       => $namedNativeQuery->resultClass,
                    'resultSetMapping'  => $namedNativeQuery->resultSetMapping,
                ));
>>>>>>> contactmanager
=======
        if (isset($classAnnotations[Mapping\NamedNativeQueries::class])) {
            $namedNativeQueriesAnnot = $classAnnotations[Mapping\NamedNativeQueries::class];

            foreach ($namedNativeQueriesAnnot->value as $namedNativeQuery) {
                $metadata->addNamedNativeQuery(
                    [
                        'name'              => $namedNativeQuery->name,
                        'query'             => $namedNativeQuery->query,
                        'resultClass'       => $namedNativeQuery->resultClass,
                        'resultSetMapping'  => $namedNativeQuery->resultSetMapping,
                    ]
                );
>>>>>>> donmanager
            }
        }

        // Evaluate SqlResultSetMappings annotation
<<<<<<< HEAD
<<<<<<< HEAD
        if (isset($classAnnotations[Mapping\SqlResultSetMappings::class])) {
            $sqlResultSetMappingsAnnot = $classAnnotations[Mapping\SqlResultSetMappings::class];

            foreach ($sqlResultSetMappingsAnnot->value as $resultSetMapping) {
                $entities = [];
                $columns  = [];
                foreach ($resultSetMapping->entities as $entityResultAnnot) {
                    $entityResult = [
                        'fields'                => [],
                        'entityClass'           => $entityResultAnnot->entityClass,
                        'discriminatorColumn'   => $entityResultAnnot->discriminatorColumn,
                    ];

                    foreach ($entityResultAnnot->fields as $fieldResultAnnot) {
                        $entityResult['fields'][] = [
                            'name'      => $fieldResultAnnot->name,
                            'column'    => $fieldResultAnnot->column
                        ];
=======
        if (isset($classAnnotations['Doctrine\ORM\Mapping\SqlResultSetMappings'])) {
            $sqlResultSetMappingsAnnot = $classAnnotations['Doctrine\ORM\Mapping\SqlResultSetMappings'];
=======
        if (isset($classAnnotations[Mapping\SqlResultSetMappings::class])) {
            $sqlResultSetMappingsAnnot = $classAnnotations[Mapping\SqlResultSetMappings::class];
>>>>>>> donmanager

            foreach ($sqlResultSetMappingsAnnot->value as $resultSetMapping) {
                $entities = [];
                $columns  = [];
                foreach ($resultSetMapping->entities as $entityResultAnnot) {
                    $entityResult = [
                        'fields'                => [],
                        'entityClass'           => $entityResultAnnot->entityClass,
                        'discriminatorColumn'   => $entityResultAnnot->discriminatorColumn,
                    ];

                    foreach ($entityResultAnnot->fields as $fieldResultAnnot) {
                        $entityResult['fields'][] = [
                            'name'      => $fieldResultAnnot->name,
                            'column'    => $fieldResultAnnot->column
<<<<<<< HEAD
                        );
>>>>>>> contactmanager
=======
                        ];
>>>>>>> donmanager
                    }

                    $entities[] = $entityResult;
                }

                foreach ($resultSetMapping->columns as $columnResultAnnot) {
<<<<<<< HEAD
<<<<<<< HEAD
                    $columns[] = [
                        'name' => $columnResultAnnot->name,
                    ];
                }

                $metadata->addSqlResultSetMapping(
                    [
                        'name'          => $resultSetMapping->name,
                        'entities'      => $entities,
                        'columns'       => $columns
                    ]
                );
=======
                    $columns[] = array(
=======
                    $columns[] = [
>>>>>>> donmanager
                        'name' => $columnResultAnnot->name,
                    ];
                }

<<<<<<< HEAD
                $metadata->addSqlResultSetMapping(array(
                    'name'          => $resultSetMapping->name,
                    'entities'      => $entities,
                    'columns'       => $columns
                ));
>>>>>>> contactmanager
=======
                $metadata->addSqlResultSetMapping(
                    [
                        'name'          => $resultSetMapping->name,
                        'entities'      => $entities,
                        'columns'       => $columns
                    ]
                );
>>>>>>> donmanager
            }
        }

        // Evaluate NamedQueries annotation
<<<<<<< HEAD
<<<<<<< HEAD
        if (isset($classAnnotations[Mapping\NamedQueries::class])) {
            $namedQueriesAnnot = $classAnnotations[Mapping\NamedQueries::class];
=======
        if (isset($classAnnotations['Doctrine\ORM\Mapping\NamedQueries'])) {
            $namedQueriesAnnot = $classAnnotations['Doctrine\ORM\Mapping\NamedQueries'];
>>>>>>> contactmanager
=======
        if (isset($classAnnotations[Mapping\NamedQueries::class])) {
            $namedQueriesAnnot = $classAnnotations[Mapping\NamedQueries::class];
>>>>>>> donmanager

            if ( ! is_array($namedQueriesAnnot->value)) {
                throw new \UnexpectedValueException("@NamedQueries should contain an array of @NamedQuery annotations.");
            }

            foreach ($namedQueriesAnnot->value as $namedQuery) {
<<<<<<< HEAD
<<<<<<< HEAD
                if ( ! ($namedQuery instanceof Mapping\NamedQuery)) {
                    throw new \UnexpectedValueException("@NamedQueries should contain an array of @NamedQuery annotations.");
                }
                $metadata->addNamedQuery(
                    [
                        'name'  => $namedQuery->name,
                        'query' => $namedQuery->query
                    ]
                );
=======
                if ( ! ($namedQuery instanceof \Doctrine\ORM\Mapping\NamedQuery)) {
                    throw new \UnexpectedValueException("@NamedQueries should contain an array of @NamedQuery annotations.");
                }
                $metadata->addNamedQuery(array(
                    'name'  => $namedQuery->name,
                    'query' => $namedQuery->query
                ));
>>>>>>> contactmanager
=======
                if ( ! ($namedQuery instanceof Mapping\NamedQuery)) {
                    throw new \UnexpectedValueException("@NamedQueries should contain an array of @NamedQuery annotations.");
                }
                $metadata->addNamedQuery(
                    [
                        'name'  => $namedQuery->name,
                        'query' => $namedQuery->query
                    ]
                );
>>>>>>> donmanager
            }
        }

        // Evaluate InheritanceType annotation
<<<<<<< HEAD
<<<<<<< HEAD
        if (isset($classAnnotations[Mapping\InheritanceType::class])) {
            $inheritanceTypeAnnot = $classAnnotations[Mapping\InheritanceType::class];

            $metadata->setInheritanceType(
                constant('Doctrine\ORM\Mapping\ClassMetadata::INHERITANCE_TYPE_' . $inheritanceTypeAnnot->value)
            );

            if ($metadata->inheritanceType != Mapping\ClassMetadata::INHERITANCE_TYPE_NONE) {
                // Evaluate DiscriminatorColumn annotation
                if (isset($classAnnotations[Mapping\DiscriminatorColumn::class])) {
                    $discrColumnAnnot = $classAnnotations[Mapping\DiscriminatorColumn::class];

                    $metadata->setDiscriminatorColumn(
                        [
                            'name'             => $discrColumnAnnot->name,
                            'type'             => $discrColumnAnnot->type ?: 'string',
                            'length'           => $discrColumnAnnot->length ?: 255,
                            'columnDefinition' => $discrColumnAnnot->columnDefinition,
                        ]
                    );
                } else {
                    $metadata->setDiscriminatorColumn(['name' => 'dtype', 'type' => 'string', 'length' => 255]);
                }

                // Evaluate DiscriminatorMap annotation
                if (isset($classAnnotations[Mapping\DiscriminatorMap::class])) {
                    $discrMapAnnot = $classAnnotations[Mapping\DiscriminatorMap::class];
=======
        if (isset($classAnnotations['Doctrine\ORM\Mapping\InheritanceType'])) {
            $inheritanceTypeAnnot = $classAnnotations['Doctrine\ORM\Mapping\InheritanceType'];
            $metadata->setInheritanceType(constant('Doctrine\ORM\Mapping\ClassMetadata::INHERITANCE_TYPE_' . $inheritanceTypeAnnot->value));
=======
        if (isset($classAnnotations[Mapping\InheritanceType::class])) {
            $inheritanceTypeAnnot = $classAnnotations[Mapping\InheritanceType::class];
>>>>>>> donmanager

            $metadata->setInheritanceType(
                constant('Doctrine\ORM\Mapping\ClassMetadata::INHERITANCE_TYPE_' . $inheritanceTypeAnnot->value)
            );

            if ($metadata->inheritanceType != Mapping\ClassMetadata::INHERITANCE_TYPE_NONE) {
                // Evaluate DiscriminatorColumn annotation
                if (isset($classAnnotations[Mapping\DiscriminatorColumn::class])) {
                    $discrColumnAnnot = $classAnnotations[Mapping\DiscriminatorColumn::class];

                    $metadata->setDiscriminatorColumn(
                        [
                            'name'             => $discrColumnAnnot->name,
                            'type'             => $discrColumnAnnot->type ?: 'string',
                            'length'           => $discrColumnAnnot->length ?: 255,
                            'columnDefinition' => $discrColumnAnnot->columnDefinition,
                        ]
                    );
                } else {
                    $metadata->setDiscriminatorColumn(['name' => 'dtype', 'type' => 'string', 'length' => 255]);
                }

                // Evaluate DiscriminatorMap annotation
<<<<<<< HEAD
                if (isset($classAnnotations['Doctrine\ORM\Mapping\DiscriminatorMap'])) {
                    $discrMapAnnot = $classAnnotations['Doctrine\ORM\Mapping\DiscriminatorMap'];
>>>>>>> contactmanager
=======
                if (isset($classAnnotations[Mapping\DiscriminatorMap::class])) {
                    $discrMapAnnot = $classAnnotations[Mapping\DiscriminatorMap::class];
>>>>>>> donmanager
                    $metadata->setDiscriminatorMap($discrMapAnnot->value);
                }
            }
        }


        // Evaluate DoctrineChangeTrackingPolicy annotation
<<<<<<< HEAD
<<<<<<< HEAD
        if (isset($classAnnotations[Mapping\ChangeTrackingPolicy::class])) {
            $changeTrackingAnnot = $classAnnotations[Mapping\ChangeTrackingPolicy::class];
=======
        if (isset($classAnnotations['Doctrine\ORM\Mapping\ChangeTrackingPolicy'])) {
            $changeTrackingAnnot = $classAnnotations['Doctrine\ORM\Mapping\ChangeTrackingPolicy'];
>>>>>>> contactmanager
=======
        if (isset($classAnnotations[Mapping\ChangeTrackingPolicy::class])) {
            $changeTrackingAnnot = $classAnnotations[Mapping\ChangeTrackingPolicy::class];
>>>>>>> donmanager
            $metadata->setChangeTrackingPolicy(constant('Doctrine\ORM\Mapping\ClassMetadata::CHANGETRACKING_' . $changeTrackingAnnot->value));
        }

        // Evaluate annotations on properties/fields
        /* @var $property \ReflectionProperty */
        foreach ($class->getProperties() as $property) {
            if ($metadata->isMappedSuperclass && ! $property->isPrivate()
                ||
                $metadata->isInheritedField($property->name)
                ||
                $metadata->isInheritedAssociation($property->name)
                ||
                $metadata->isInheritedEmbeddedClass($property->name)) {
                continue;
            }

<<<<<<< HEAD
<<<<<<< HEAD
            $mapping = [];
            $mapping['fieldName'] = $property->getName();

            // Evaluate @Cache annotation
            if (($cacheAnnot = $this->reader->getPropertyAnnotation($property, Mapping\Cache::class)) !== null) {
                $mapping['cache'] = $metadata->getAssociationCacheDefaults(
                    $mapping['fieldName'],
                    [
                        'usage'  => constant('Doctrine\ORM\Mapping\ClassMetadata::CACHE_USAGE_' . $cacheAnnot->usage),
                        'region' => $cacheAnnot->region,
                    ]
                );
            }
            // Check for JoinColumn/JoinColumns annotations
            $joinColumns = [];

            if ($joinColumnAnnot = $this->reader->getPropertyAnnotation($property, Mapping\JoinColumn::class)) {
                $joinColumns[] = $this->joinColumnToArray($joinColumnAnnot);
            } else if ($joinColumnsAnnot = $this->reader->getPropertyAnnotation($property, Mapping\JoinColumns::class)) {
=======
            $mapping = array();
=======
            $mapping = [];
>>>>>>> donmanager
            $mapping['fieldName'] = $property->getName();

            // Evaluate @Cache annotation
            if (($cacheAnnot = $this->reader->getPropertyAnnotation($property, Mapping\Cache::class)) !== null) {
                $mapping['cache'] = $metadata->getAssociationCacheDefaults(
                    $mapping['fieldName'],
                    [
                        'usage'  => constant('Doctrine\ORM\Mapping\ClassMetadata::CACHE_USAGE_' . $cacheAnnot->usage),
                        'region' => $cacheAnnot->region,
                    ]
                );
            }
            // Check for JoinColumn/JoinColumns annotations
            $joinColumns = [];

            if ($joinColumnAnnot = $this->reader->getPropertyAnnotation($property, Mapping\JoinColumn::class)) {
                $joinColumns[] = $this->joinColumnToArray($joinColumnAnnot);
<<<<<<< HEAD
            } else if ($joinColumnsAnnot = $this->reader->getPropertyAnnotation($property, 'Doctrine\ORM\Mapping\JoinColumns')) {
>>>>>>> contactmanager
=======
            } else if ($joinColumnsAnnot = $this->reader->getPropertyAnnotation($property, Mapping\JoinColumns::class)) {
>>>>>>> donmanager
                foreach ($joinColumnsAnnot->value as $joinColumn) {
                    $joinColumns[] = $this->joinColumnToArray($joinColumn);
                }
            }

            // Field can only be annotated with one of:
            // @Column, @OneToOne, @OneToMany, @ManyToOne, @ManyToMany
<<<<<<< HEAD
<<<<<<< HEAD
            if ($columnAnnot = $this->reader->getPropertyAnnotation($property, Mapping\Column::class)) {
=======
            if ($columnAnnot = $this->reader->getPropertyAnnotation($property, 'Doctrine\ORM\Mapping\Column')) {
>>>>>>> contactmanager
=======
            if ($columnAnnot = $this->reader->getPropertyAnnotation($property, Mapping\Column::class)) {
>>>>>>> donmanager
                if ($columnAnnot->type == null) {
                    throw MappingException::propertyTypeIsRequired($className, $property->getName());
                }

                $mapping = $this->columnToArray($property->getName(), $columnAnnot);

<<<<<<< HEAD
<<<<<<< HEAD
                if ($idAnnot = $this->reader->getPropertyAnnotation($property, Mapping\Id::class)) {
                    $mapping['id'] = true;
                }

                if ($generatedValueAnnot = $this->reader->getPropertyAnnotation($property, Mapping\GeneratedValue::class)) {
                    $metadata->setIdGeneratorType(constant('Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_' . $generatedValueAnnot->strategy));
                }

                if ($this->reader->getPropertyAnnotation($property, Mapping\Version::class)) {
=======
                if ($idAnnot = $this->reader->getPropertyAnnotation($property, 'Doctrine\ORM\Mapping\Id')) {
=======
                if ($idAnnot = $this->reader->getPropertyAnnotation($property, Mapping\Id::class)) {
>>>>>>> donmanager
                    $mapping['id'] = true;
                }

                if ($generatedValueAnnot = $this->reader->getPropertyAnnotation($property, Mapping\GeneratedValue::class)) {
                    $metadata->setIdGeneratorType(constant('Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_' . $generatedValueAnnot->strategy));
                }

<<<<<<< HEAD
                if ($this->reader->getPropertyAnnotation($property, 'Doctrine\ORM\Mapping\Version')) {
>>>>>>> contactmanager
=======
                if ($this->reader->getPropertyAnnotation($property, Mapping\Version::class)) {
>>>>>>> donmanager
                    $metadata->setVersionMapping($mapping);
                }

                $metadata->mapField($mapping);

                // Check for SequenceGenerator/TableGenerator definition
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager
                if ($seqGeneratorAnnot = $this->reader->getPropertyAnnotation($property, Mapping\SequenceGenerator::class)) {
                    $metadata->setSequenceGeneratorDefinition(
                        [
                            'sequenceName' => $seqGeneratorAnnot->sequenceName,
                            'allocationSize' => $seqGeneratorAnnot->allocationSize,
                            'initialValue' => $seqGeneratorAnnot->initialValue
                        ]
                    );
<<<<<<< HEAD
                } else if ($this->reader->getPropertyAnnotation($property, 'Doctrine\ORM\Mapping\TableGenerator')) {
                    throw MappingException::tableIdGeneratorNotImplemented($className);
                } else if ($customGeneratorAnnot = $this->reader->getPropertyAnnotation($property, Mapping\CustomIdGenerator::class)) {
                    $metadata->setCustomGeneratorDefinition(
                        [
                            'class' => $customGeneratorAnnot->class
                        ]
                    );
                }
            } else if ($oneToOneAnnot = $this->reader->getPropertyAnnotation($property, Mapping\OneToOne::class)) {
                if ($idAnnot = $this->reader->getPropertyAnnotation($property, Mapping\Id::class)) {
=======
                if ($seqGeneratorAnnot = $this->reader->getPropertyAnnotation($property, 'Doctrine\ORM\Mapping\SequenceGenerator')) {
                    $metadata->setSequenceGeneratorDefinition(array(
                        'sequenceName' => $seqGeneratorAnnot->sequenceName,
                        'allocationSize' => $seqGeneratorAnnot->allocationSize,
                        'initialValue' => $seqGeneratorAnnot->initialValue
                    ));
=======
>>>>>>> donmanager
                } else if ($this->reader->getPropertyAnnotation($property, 'Doctrine\ORM\Mapping\TableGenerator')) {
                    throw MappingException::tableIdGeneratorNotImplemented($className);
                } else if ($customGeneratorAnnot = $this->reader->getPropertyAnnotation($property, Mapping\CustomIdGenerator::class)) {
                    $metadata->setCustomGeneratorDefinition(
                        [
                            'class' => $customGeneratorAnnot->class
                        ]
                    );
                }
<<<<<<< HEAD
            } else if ($oneToOneAnnot = $this->reader->getPropertyAnnotation($property, 'Doctrine\ORM\Mapping\OneToOne')) {
                if ($idAnnot = $this->reader->getPropertyAnnotation($property, 'Doctrine\ORM\Mapping\Id')) {
>>>>>>> contactmanager
=======
            } else if ($oneToOneAnnot = $this->reader->getPropertyAnnotation($property, Mapping\OneToOne::class)) {
                if ($idAnnot = $this->reader->getPropertyAnnotation($property, Mapping\Id::class)) {
>>>>>>> donmanager
                    $mapping['id'] = true;
                }

                $mapping['targetEntity'] = $oneToOneAnnot->targetEntity;
                $mapping['joinColumns'] = $joinColumns;
                $mapping['mappedBy'] = $oneToOneAnnot->mappedBy;
                $mapping['inversedBy'] = $oneToOneAnnot->inversedBy;
                $mapping['cascade'] = $oneToOneAnnot->cascade;
                $mapping['orphanRemoval'] = $oneToOneAnnot->orphanRemoval;
                $mapping['fetch'] = $this->getFetchMode($className, $oneToOneAnnot->fetch);
                $metadata->mapOneToOne($mapping);
<<<<<<< HEAD
<<<<<<< HEAD
            } else if ($oneToManyAnnot = $this->reader->getPropertyAnnotation($property, Mapping\OneToMany::class)) {
=======
            } else if ($oneToManyAnnot = $this->reader->getPropertyAnnotation($property, 'Doctrine\ORM\Mapping\OneToMany')) {
>>>>>>> contactmanager
=======
            } else if ($oneToManyAnnot = $this->reader->getPropertyAnnotation($property, Mapping\OneToMany::class)) {
>>>>>>> donmanager
                $mapping['mappedBy'] = $oneToManyAnnot->mappedBy;
                $mapping['targetEntity'] = $oneToManyAnnot->targetEntity;
                $mapping['cascade'] = $oneToManyAnnot->cascade;
                $mapping['indexBy'] = $oneToManyAnnot->indexBy;
                $mapping['orphanRemoval'] = $oneToManyAnnot->orphanRemoval;
                $mapping['fetch'] = $this->getFetchMode($className, $oneToManyAnnot->fetch);

<<<<<<< HEAD
<<<<<<< HEAD
                if ($orderByAnnot = $this->reader->getPropertyAnnotation($property, Mapping\OrderBy::class)) {
=======
                if ($orderByAnnot = $this->reader->getPropertyAnnotation($property, 'Doctrine\ORM\Mapping\OrderBy')) {
>>>>>>> contactmanager
=======
                if ($orderByAnnot = $this->reader->getPropertyAnnotation($property, Mapping\OrderBy::class)) {
>>>>>>> donmanager
                    $mapping['orderBy'] = $orderByAnnot->value;
                }

                $metadata->mapOneToMany($mapping);
<<<<<<< HEAD
<<<<<<< HEAD
            } else if ($manyToOneAnnot = $this->reader->getPropertyAnnotation($property, Mapping\ManyToOne::class)) {
                if ($idAnnot = $this->reader->getPropertyAnnotation($property, Mapping\Id::class)) {
=======
            } else if ($manyToOneAnnot = $this->reader->getPropertyAnnotation($property, 'Doctrine\ORM\Mapping\ManyToOne')) {
                if ($idAnnot = $this->reader->getPropertyAnnotation($property, 'Doctrine\ORM\Mapping\Id')) {
>>>>>>> contactmanager
=======
            } else if ($manyToOneAnnot = $this->reader->getPropertyAnnotation($property, Mapping\ManyToOne::class)) {
                if ($idAnnot = $this->reader->getPropertyAnnotation($property, Mapping\Id::class)) {
>>>>>>> donmanager
                    $mapping['id'] = true;
                }

                $mapping['joinColumns'] = $joinColumns;
                $mapping['cascade'] = $manyToOneAnnot->cascade;
                $mapping['inversedBy'] = $manyToOneAnnot->inversedBy;
                $mapping['targetEntity'] = $manyToOneAnnot->targetEntity;
                $mapping['fetch'] = $this->getFetchMode($className, $manyToOneAnnot->fetch);
                $metadata->mapManyToOne($mapping);
<<<<<<< HEAD
<<<<<<< HEAD
            } else if ($manyToManyAnnot = $this->reader->getPropertyAnnotation($property, Mapping\ManyToMany::class)) {
                $joinTable = [];

                if ($joinTableAnnot = $this->reader->getPropertyAnnotation($property, Mapping\JoinTable::class)) {
                    $joinTable = [
                        'name' => $joinTableAnnot->name,
                        'schema' => $joinTableAnnot->schema
                    ];
=======
            } else if ($manyToManyAnnot = $this->reader->getPropertyAnnotation($property, 'Doctrine\ORM\Mapping\ManyToMany')) {
                $joinTable = array();
=======
            } else if ($manyToManyAnnot = $this->reader->getPropertyAnnotation($property, Mapping\ManyToMany::class)) {
                $joinTable = [];
>>>>>>> donmanager

                if ($joinTableAnnot = $this->reader->getPropertyAnnotation($property, Mapping\JoinTable::class)) {
                    $joinTable = [
                        'name' => $joinTableAnnot->name,
                        'schema' => $joinTableAnnot->schema
<<<<<<< HEAD
                    );
>>>>>>> contactmanager
=======
                    ];
>>>>>>> donmanager

                    foreach ($joinTableAnnot->joinColumns as $joinColumn) {
                        $joinTable['joinColumns'][] = $this->joinColumnToArray($joinColumn);
                    }

                    foreach ($joinTableAnnot->inverseJoinColumns as $joinColumn) {
                        $joinTable['inverseJoinColumns'][] = $this->joinColumnToArray($joinColumn);
                    }
                }

                $mapping['joinTable'] = $joinTable;
                $mapping['targetEntity'] = $manyToManyAnnot->targetEntity;
                $mapping['mappedBy'] = $manyToManyAnnot->mappedBy;
                $mapping['inversedBy'] = $manyToManyAnnot->inversedBy;
                $mapping['cascade'] = $manyToManyAnnot->cascade;
                $mapping['indexBy'] = $manyToManyAnnot->indexBy;
                $mapping['orphanRemoval'] = $manyToManyAnnot->orphanRemoval;
                $mapping['fetch'] = $this->getFetchMode($className, $manyToManyAnnot->fetch);

<<<<<<< HEAD
<<<<<<< HEAD
                if ($orderByAnnot = $this->reader->getPropertyAnnotation($property, Mapping\OrderBy::class)) {
=======
                if ($orderByAnnot = $this->reader->getPropertyAnnotation($property, 'Doctrine\ORM\Mapping\OrderBy')) {
>>>>>>> contactmanager
=======
                if ($orderByAnnot = $this->reader->getPropertyAnnotation($property, Mapping\OrderBy::class)) {
>>>>>>> donmanager
                    $mapping['orderBy'] = $orderByAnnot->value;
                }

                $metadata->mapManyToMany($mapping);
<<<<<<< HEAD
<<<<<<< HEAD
            } else if ($embeddedAnnot = $this->reader->getPropertyAnnotation($property, Mapping\Embedded::class)) {
                $mapping['class'] = $embeddedAnnot->class;
                $mapping['columnPrefix'] = $embeddedAnnot->columnPrefix;

                $metadata->mapEmbedded($mapping);
            }
        }

        // Evaluate AssociationOverrides annotation
        if (isset($classAnnotations[Mapping\AssociationOverrides::class])) {
            $associationOverridesAnnot = $classAnnotations[Mapping\AssociationOverrides::class];

            foreach ($associationOverridesAnnot->value as $associationOverride) {
                $override   = [];
=======
            } else if ($embeddedAnnot = $this->reader->getPropertyAnnotation($property, 'Doctrine\ORM\Mapping\Embedded')) {
=======
            } else if ($embeddedAnnot = $this->reader->getPropertyAnnotation($property, Mapping\Embedded::class)) {
>>>>>>> donmanager
                $mapping['class'] = $embeddedAnnot->class;
                $mapping['columnPrefix'] = $embeddedAnnot->columnPrefix;

                $metadata->mapEmbedded($mapping);
            }
        }

        // Evaluate AssociationOverrides annotation
        if (isset($classAnnotations[Mapping\AssociationOverrides::class])) {
            $associationOverridesAnnot = $classAnnotations[Mapping\AssociationOverrides::class];

            foreach ($associationOverridesAnnot->value as $associationOverride) {
<<<<<<< HEAD
                $override   = array();
>>>>>>> contactmanager
=======
                $override   = [];
>>>>>>> donmanager
                $fieldName  = $associationOverride->name;

                // Check for JoinColumn/JoinColumns annotations
                if ($associationOverride->joinColumns) {
<<<<<<< HEAD
<<<<<<< HEAD
                    $joinColumns = [];

                    foreach ($associationOverride->joinColumns as $joinColumn) {
                        $joinColumns[] = $this->joinColumnToArray($joinColumn);
                    }

=======
                    $joinColumns = array();
                    foreach ($associationOverride->joinColumns as $joinColumn) {
                        $joinColumns[] = $this->joinColumnToArray($joinColumn);
                    }
>>>>>>> contactmanager
=======
                    $joinColumns = [];

                    foreach ($associationOverride->joinColumns as $joinColumn) {
                        $joinColumns[] = $this->joinColumnToArray($joinColumn);
                    }

>>>>>>> donmanager
                    $override['joinColumns'] = $joinColumns;
                }

                // Check for JoinTable annotations
                if ($associationOverride->joinTable) {
                    $joinTableAnnot = $associationOverride->joinTable;
<<<<<<< HEAD
<<<<<<< HEAD
                    $joinTable      = [
                        'name'      => $joinTableAnnot->name,
                        'schema'    => $joinTableAnnot->schema
                    ];
=======
                    $joinTable      = array(
                        'name'      => $joinTableAnnot->name,
                        'schema'    => $joinTableAnnot->schema
                    );
>>>>>>> contactmanager
=======
                    $joinTable      = [
                        'name'      => $joinTableAnnot->name,
                        'schema'    => $joinTableAnnot->schema
                    ];
>>>>>>> donmanager

                    foreach ($joinTableAnnot->joinColumns as $joinColumn) {
                        $joinTable['joinColumns'][] = $this->joinColumnToArray($joinColumn);
                    }

                    foreach ($joinTableAnnot->inverseJoinColumns as $joinColumn) {
                        $joinTable['inverseJoinColumns'][] = $this->joinColumnToArray($joinColumn);
                    }

                    $override['joinTable'] = $joinTable;
                }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager
                // Check for inversedBy
                if ($associationOverride->inversedBy) {
                    $override['inversedBy'] = $associationOverride->inversedBy;
                }

                // Check for `fetch`
                if ($associationOverride->fetch) {
                    $override['fetch'] = constant(Mapping\ClassMetadata::class . '::FETCH_' . $associationOverride->fetch);
                }

<<<<<<< HEAD
=======
>>>>>>> contactmanager
=======
>>>>>>> donmanager
                $metadata->setAssociationOverride($fieldName, $override);
            }
        }

        // Evaluate AttributeOverrides annotation
<<<<<<< HEAD
<<<<<<< HEAD
        if (isset($classAnnotations[Mapping\AttributeOverrides::class])) {
            $attributeOverridesAnnot = $classAnnotations[Mapping\AttributeOverrides::class];

            foreach ($attributeOverridesAnnot->value as $attributeOverrideAnnot) {
                $attributeOverride = $this->columnToArray($attributeOverrideAnnot->name, $attributeOverrideAnnot->column);

=======
        if (isset($classAnnotations['Doctrine\ORM\Mapping\AttributeOverrides'])) {
            $attributeOverridesAnnot = $classAnnotations['Doctrine\ORM\Mapping\AttributeOverrides'];
            foreach ($attributeOverridesAnnot->value as $attributeOverrideAnnot) {
                $attributeOverride = $this->columnToArray($attributeOverrideAnnot->name, $attributeOverrideAnnot->column);
>>>>>>> contactmanager
=======
        if (isset($classAnnotations[Mapping\AttributeOverrides::class])) {
            $attributeOverridesAnnot = $classAnnotations[Mapping\AttributeOverrides::class];

            foreach ($attributeOverridesAnnot->value as $attributeOverrideAnnot) {
                $attributeOverride = $this->columnToArray($attributeOverrideAnnot->name, $attributeOverrideAnnot->column);

>>>>>>> donmanager
                $metadata->setAttributeOverride($attributeOverrideAnnot->name, $attributeOverride);
            }
        }

        // Evaluate EntityListeners annotation
<<<<<<< HEAD
<<<<<<< HEAD
        if (isset($classAnnotations[Mapping\EntityListeners::class])) {
            $entityListenersAnnot = $classAnnotations[Mapping\EntityListeners::class];
=======
        if (isset($classAnnotations['Doctrine\ORM\Mapping\EntityListeners'])) {
            $entityListenersAnnot = $classAnnotations['Doctrine\ORM\Mapping\EntityListeners'];
>>>>>>> contactmanager
=======
        if (isset($classAnnotations[Mapping\EntityListeners::class])) {
            $entityListenersAnnot = $classAnnotations[Mapping\EntityListeners::class];
>>>>>>> donmanager

            foreach ($entityListenersAnnot->value as $item) {
                $listenerClassName = $metadata->fullyQualifiedClassName($item);

                if ( ! class_exists($listenerClassName)) {
                    throw MappingException::entityListenerClassNotFound($listenerClassName, $className);
                }

                $hasMapping     = false;
                $listenerClass  = new \ReflectionClass($listenerClassName);
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> contactmanager
=======

>>>>>>> donmanager
                /* @var $method \ReflectionMethod */
                foreach ($listenerClass->getMethods(\ReflectionMethod::IS_PUBLIC) as $method) {
                    // find method callbacks.
                    $callbacks  = $this->getMethodCallbacks($method);
                    $hasMapping = $hasMapping ?: ( ! empty($callbacks));

                    foreach ($callbacks as $value) {
                        $metadata->addEntityListener($value[1], $listenerClassName, $value[0]);
                    }
                }
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> contactmanager
=======

>>>>>>> donmanager
                // Evaluate the listener using naming convention.
                if ( ! $hasMapping ) {
                    EntityListenerBuilder::bindEntityListener($metadata, $listenerClassName);
                }
            }
        }

        // Evaluate @HasLifecycleCallbacks annotation
<<<<<<< HEAD
<<<<<<< HEAD
        if (isset($classAnnotations[Mapping\HasLifecycleCallbacks::class])) {
            /* @var $method \ReflectionMethod */
            foreach ($class->getMethods(\ReflectionMethod::IS_PUBLIC) as $method) {
                foreach ($this->getMethodCallbacks($method) as $value) {
=======
        if (isset($classAnnotations['Doctrine\ORM\Mapping\HasLifecycleCallbacks'])) {
=======
        if (isset($classAnnotations[Mapping\HasLifecycleCallbacks::class])) {
>>>>>>> donmanager
            /* @var $method \ReflectionMethod */
            foreach ($class->getMethods(\ReflectionMethod::IS_PUBLIC) as $method) {
                foreach ($this->getMethodCallbacks($method) as $value) {
<<<<<<< HEAD

>>>>>>> contactmanager
=======
>>>>>>> donmanager
                    $metadata->addLifecycleCallback($value[0], $value[1]);
                }
            }
        }
    }

    /**
     * Attempts to resolve the fetch mode.
     *
     * @param string $className The class name.
     * @param string $fetchMode The fetch mode.
     *
     * @return integer The fetch mode as defined in ClassMetadata.
     *
     * @throws MappingException If the fetch mode is not valid.
     */
    private function getFetchMode($className, $fetchMode)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if ( ! defined('Doctrine\ORM\Mapping\ClassMetadata::FETCH_' . $fetchMode)) {
            throw MappingException::invalidFetchMode($className, $fetchMode);
=======
        if( ! defined('Doctrine\ORM\Mapping\ClassMetadata::FETCH_' . $fetchMode)) {
            throw MappingException::invalidFetchMode($className,  $fetchMode);
>>>>>>> contactmanager
=======
        if ( ! defined('Doctrine\ORM\Mapping\ClassMetadata::FETCH_' . $fetchMode)) {
            throw MappingException::invalidFetchMode($className, $fetchMode);
>>>>>>> donmanager
        }

        return constant('Doctrine\ORM\Mapping\ClassMetadata::FETCH_' . $fetchMode);
    }

    /**
     * Parses the given method.
     *
     * @param \ReflectionMethod $method
     *
     * @return array
     */
    private function getMethodCallbacks(\ReflectionMethod $method)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $callbacks   = [];
        $annotations = $this->reader->getMethodAnnotations($method);

        foreach ($annotations as $annot) {
            if ($annot instanceof Mapping\PrePersist) {
                $callbacks[] = [$method->name, Events::prePersist];
            }

            if ($annot instanceof Mapping\PostPersist) {
                $callbacks[] = [$method->name, Events::postPersist];
            }

            if ($annot instanceof Mapping\PreUpdate) {
                $callbacks[] = [$method->name, Events::preUpdate];
            }

            if ($annot instanceof Mapping\PostUpdate) {
                $callbacks[] = [$method->name, Events::postUpdate];
            }

            if ($annot instanceof Mapping\PreRemove) {
                $callbacks[] = [$method->name, Events::preRemove];
            }

            if ($annot instanceof Mapping\PostRemove) {
                $callbacks[] = [$method->name, Events::postRemove];
            }

            if ($annot instanceof Mapping\PostLoad) {
                $callbacks[] = [$method->name, Events::postLoad];
            }

            if ($annot instanceof Mapping\PreFlush) {
                $callbacks[] = [$method->name, Events::preFlush];
=======
        $callbacks   = array();
=======
        $callbacks   = [];
>>>>>>> donmanager
        $annotations = $this->reader->getMethodAnnotations($method);

        foreach ($annotations as $annot) {
            if ($annot instanceof Mapping\PrePersist) {
                $callbacks[] = [$method->name, Events::prePersist];
            }

            if ($annot instanceof Mapping\PostPersist) {
                $callbacks[] = [$method->name, Events::postPersist];
            }

            if ($annot instanceof Mapping\PreUpdate) {
                $callbacks[] = [$method->name, Events::preUpdate];
            }

            if ($annot instanceof Mapping\PostUpdate) {
                $callbacks[] = [$method->name, Events::postUpdate];
            }

            if ($annot instanceof Mapping\PreRemove) {
                $callbacks[] = [$method->name, Events::preRemove];
            }

            if ($annot instanceof Mapping\PostRemove) {
                $callbacks[] = [$method->name, Events::postRemove];
            }

            if ($annot instanceof Mapping\PostLoad) {
                $callbacks[] = [$method->name, Events::postLoad];
            }

<<<<<<< HEAD
            if ($annot instanceof \Doctrine\ORM\Mapping\PreFlush) {
                $callbacks[] = array($method->name, Events::preFlush);
>>>>>>> contactmanager
=======
            if ($annot instanceof Mapping\PreFlush) {
                $callbacks[] = [$method->name, Events::preFlush];
>>>>>>> donmanager
            }
        }

        return $callbacks;
    }

    /**
     * Parse the given JoinColumn as array
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Mapping\JoinColumn $joinColumn
     * @return array
     */
    private function joinColumnToArray(Mapping\JoinColumn $joinColumn)
    {
        return [
=======
     * @param JoinColumn $joinColumn
=======
     * @param Mapping\JoinColumn $joinColumn
>>>>>>> donmanager
     * @return array
     */
    private function joinColumnToArray(Mapping\JoinColumn $joinColumn)
    {
<<<<<<< HEAD
        return array(
>>>>>>> contactmanager
=======
        return [
>>>>>>> donmanager
            'name' => $joinColumn->name,
            'unique' => $joinColumn->unique,
            'nullable' => $joinColumn->nullable,
            'onDelete' => $joinColumn->onDelete,
            'columnDefinition' => $joinColumn->columnDefinition,
            'referencedColumnName' => $joinColumn->referencedColumnName,
<<<<<<< HEAD
<<<<<<< HEAD
        ];
=======
        );
>>>>>>> contactmanager
=======
        ];
>>>>>>> donmanager
    }

    /**
     * Parse the given Column as array
     *
     * @param string $fieldName
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Mapping\Column $column
     *
     * @return array
     */
    private function columnToArray($fieldName, Mapping\Column $column)
    {
        $mapping = [
=======
     * @param Column $column
=======
     * @param Mapping\Column $column
>>>>>>> donmanager
     *
     * @return array
     */
    private function columnToArray($fieldName, Mapping\Column $column)
    {
<<<<<<< HEAD
        $mapping = array(
>>>>>>> contactmanager
=======
        $mapping = [
>>>>>>> donmanager
            'fieldName' => $fieldName,
            'type'      => $column->type,
            'scale'     => $column->scale,
            'length'    => $column->length,
            'unique'    => $column->unique,
            'nullable'  => $column->nullable,
            'precision' => $column->precision
<<<<<<< HEAD
<<<<<<< HEAD
        ];
=======
        );
>>>>>>> contactmanager
=======
        ];
>>>>>>> donmanager

        if ($column->options) {
            $mapping['options'] = $column->options;
        }

        if (isset($column->name)) {
            $mapping['columnName'] = $column->name;
        }

        if (isset($column->columnDefinition)) {
            $mapping['columnDefinition'] = $column->columnDefinition;
        }

        return $mapping;
    }

    /**
     * Factory method for the Annotation Driver.
     *
     * @param array|string          $paths
     * @param AnnotationReader|null $reader
     *
     * @return AnnotationDriver
     */
<<<<<<< HEAD
<<<<<<< HEAD
    static public function create($paths = [], AnnotationReader $reader = null)
=======
    static public function create($paths = array(), AnnotationReader $reader = null)
>>>>>>> contactmanager
=======
    static public function create($paths = [], AnnotationReader $reader = null)
>>>>>>> donmanager
    {
        if ($reader == null) {
            $reader = new AnnotationReader();
        }

        return new self($reader, $paths);
    }
}
