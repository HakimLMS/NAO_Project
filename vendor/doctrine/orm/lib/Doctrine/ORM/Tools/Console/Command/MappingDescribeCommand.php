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

namespace Doctrine\ORM\Tools\Console\Command;

use Doctrine\Common\Persistence\Mapping\MappingException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
<<<<<<< HEAD
<<<<<<< HEAD
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
=======
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
>>>>>>> contactmanager
=======
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
>>>>>>> donmanager

/**
 * Show information about mapped entities.
 *
 * @link    www.doctrine-project.org
 * @since   2.4
 * @author  Daniel Leech <daniel@dantleech.com>
 */
final class MappingDescribeCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager
        $this->setName('orm:mapping:describe')
             ->addArgument('entityName', InputArgument::REQUIRED, 'Full or partial name of entity')
             ->setDescription('Display information about mapped objects')
             ->setHelp(<<<EOT
<<<<<<< HEAD
=======
        $this
            ->setName('orm:mapping:describe')
            ->addArgument('entityName', InputArgument::REQUIRED, 'Full or partial name of entity')
            ->setDescription('Display information about mapped objects')
            ->setHelp(<<<EOT
>>>>>>> contactmanager
=======
>>>>>>> donmanager
The %command.full_name% command describes the metadata for the given full or partial entity class name.

    <info>%command.full_name%</info> My\Namespace\Entity\MyEntity

Or:

    <info>%command.full_name%</info> MyEntity
EOT
<<<<<<< HEAD
<<<<<<< HEAD
             );
=======
            );
>>>>>>> contactmanager
=======
             );
>>>>>>> donmanager
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $ui = new SymfonyStyle($input, $output);

        /* @var $entityManager \Doctrine\ORM\EntityManagerInterface */
        $entityManager = $this->getHelper('em')->getEntityManager();

        $this->displayEntity($input->getArgument('entityName'), $entityManager, $ui);
=======
        /* @var $entityManager \Doctrine\ORM\EntityManagerInterface */
        $entityManager = $this->getHelper('em')->getEntityManager();

        $this->displayEntity($input->getArgument('entityName'), $entityManager, $output);
>>>>>>> contactmanager
=======
        $ui = new SymfonyStyle($input, $output);

        /* @var $entityManager \Doctrine\ORM\EntityManagerInterface */
        $entityManager = $this->getHelper('em')->getEntityManager();

        $this->displayEntity($input->getArgument('entityName'), $entityManager, $ui);
>>>>>>> donmanager

        return 0;
    }

    /**
     * Display all the mapping information for a single Entity.
     *
     * @param string                 $entityName    Full or partial entity class name
     * @param EntityManagerInterface $entityManager
<<<<<<< HEAD
<<<<<<< HEAD
     * @param SymfonyStyle           $ui
     */
    private function displayEntity($entityName, EntityManagerInterface $entityManager, SymfonyStyle $ui)
    {
        $metadata = $this->getClassMetadata($entityName, $entityManager);

        $ui->table(
            ['Field', 'Value'],
            array_merge(
                [
=======
     * @param OutputInterface        $output
=======
     * @param SymfonyStyle           $ui
>>>>>>> donmanager
     */
    private function displayEntity($entityName, EntityManagerInterface $entityManager, SymfonyStyle $ui)
    {
        $metadata = $this->getClassMetadata($entityName, $entityManager);

        $ui->table(
            ['Field', 'Value'],
            array_merge(
<<<<<<< HEAD
                array(
>>>>>>> contactmanager
=======
                [
>>>>>>> donmanager
                    $this->formatField('Name', $metadata->name),
                    $this->formatField('Root entity name', $metadata->rootEntityName),
                    $this->formatField('Custom generator definition', $metadata->customGeneratorDefinition),
                    $this->formatField('Custom repository class', $metadata->customRepositoryClassName),
                    $this->formatField('Mapped super class?', $metadata->isMappedSuperclass),
                    $this->formatField('Embedded class?', $metadata->isEmbeddedClass),
                    $this->formatField('Parent classes', $metadata->parentClasses),
                    $this->formatField('Sub classes', $metadata->subClasses),
                    $this->formatField('Embedded classes', $metadata->subClasses),
                    $this->formatField('Named queries', $metadata->namedQueries),
                    $this->formatField('Named native queries', $metadata->namedNativeQueries),
                    $this->formatField('SQL result set mappings', $metadata->sqlResultSetMappings),
                    $this->formatField('Identifier', $metadata->identifier),
                    $this->formatField('Inheritance type', $metadata->inheritanceType),
                    $this->formatField('Discriminator column', $metadata->discriminatorColumn),
                    $this->formatField('Discriminator value', $metadata->discriminatorValue),
                    $this->formatField('Discriminator map', $metadata->discriminatorMap),
                    $this->formatField('Generator type', $metadata->generatorType),
                    $this->formatField('Table', $metadata->table),
                    $this->formatField('Composite identifier?', $metadata->isIdentifierComposite),
                    $this->formatField('Foreign identifier?', $metadata->containsForeignIdentifier),
                    $this->formatField('Sequence generator definition', $metadata->sequenceGeneratorDefinition),
                    $this->formatField('Table generator definition', $metadata->tableGeneratorDefinition),
                    $this->formatField('Change tracking policy', $metadata->changeTrackingPolicy),
                    $this->formatField('Versioned?', $metadata->isVersioned),
                    $this->formatField('Version field', $metadata->versionField),
                    $this->formatField('Read only?', $metadata->isReadOnly),

                    $this->formatEntityListeners($metadata->entityListeners),
<<<<<<< HEAD
<<<<<<< HEAD
                ],
                [$this->formatField('Association mappings:', '')],
                $this->formatMappings($metadata->associationMappings),
                [$this->formatField('Field mappings:', '')],
                $this->formatMappings($metadata->fieldMappings)
            )
        );
=======
                ),
                array($this->formatField('Association mappings:', '')),
=======
                ],
                [$this->formatField('Association mappings:', '')],
>>>>>>> donmanager
                $this->formatMappings($metadata->associationMappings),
                [$this->formatField('Field mappings:', '')],
                $this->formatMappings($metadata->fieldMappings)
            )
        );
<<<<<<< HEAD

        $table->render();
>>>>>>> contactmanager
=======
>>>>>>> donmanager
    }

    /**
     * Return all mapped entity class names
     *
     * @param EntityManagerInterface $entityManager
     *
     * @return string[]
     */
    private function getMappedEntities(EntityManagerInterface $entityManager)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $entityClassNames = $entityManager->getConfiguration()
                                          ->getMetadataDriverImpl()
                                          ->getAllClassNames();
=======
        $entityClassNames = $entityManager
            ->getConfiguration()
            ->getMetadataDriverImpl()
            ->getAllClassNames();
>>>>>>> contactmanager
=======
        $entityClassNames = $entityManager->getConfiguration()
                                          ->getMetadataDriverImpl()
                                          ->getAllClassNames();
>>>>>>> donmanager

        if ( ! $entityClassNames) {
            throw new \InvalidArgumentException(
                'You do not have any mapped Doctrine ORM entities according to the current configuration. '.
                'If you have entities or mapping files you should check your mapping configuration for errors.'
            );
        }

        return $entityClassNames;
    }

    /**
     * Return the class metadata for the given entity
     * name
     *
     * @param string                 $entityName    Full or partial entity name
     * @param EntityManagerInterface $entityManager
     *
     * @return \Doctrine\ORM\Mapping\ClassMetadata
     */
    private function getClassMetadata($entityName, EntityManagerInterface $entityManager)
    {
        try {
            return $entityManager->getClassMetadata($entityName);
        } catch (MappingException $e) {
        }

        $matches = array_filter(
            $this->getMappedEntities($entityManager),
            function ($mappedEntity) use ($entityName) {
                return preg_match('{' . preg_quote($entityName) . '}', $mappedEntity);
            }
        );

        if ( ! $matches) {
            throw new \InvalidArgumentException(sprintf(
                'Could not find any mapped Entity classes matching "%s"',
                $entityName
            ));
        }

        if (count($matches) > 1) {
            throw new \InvalidArgumentException(sprintf(
<<<<<<< HEAD
<<<<<<< HEAD
                'Entity name "%s" is ambiguous, possible matches: "%s"',
=======
                'Entity name "%s" is ambigous, possible matches: "%s"',
>>>>>>> contactmanager
=======
                'Entity name "%s" is ambiguous, possible matches: "%s"',
>>>>>>> donmanager
                $entityName, implode(', ', $matches)
            ));
        }

        return $entityManager->getClassMetadata(current($matches));
    }

    /**
     * Format the given value for console output
     *
     * @param mixed $value
     *
     * @return string
     */
    private function formatValue($value)
    {
        if ('' === $value) {
            return '';
        }

        if (null === $value) {
            return '<comment>Null</comment>';
        }

        if (is_bool($value)) {
            return '<comment>' . ($value ? 'True' : 'False') . '</comment>';
        }

        if (empty($value)) {
            return '<comment>Empty</comment>';
        }

        if (is_array($value)) {
<<<<<<< HEAD
<<<<<<< HEAD
            return json_encode($value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
=======
            if (defined('JSON_UNESCAPED_UNICODE') && defined('JSON_UNESCAPED_SLASHES')) {
                return json_encode($value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
            }

            return json_encode($value);
>>>>>>> contactmanager
=======
            return json_encode($value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
>>>>>>> donmanager
        }

        if (is_object($value)) {
            return sprintf('<%s>', get_class($value));
        }

        if (is_scalar($value)) {
            return $value;
        }

        throw new \InvalidArgumentException(sprintf('Do not know how to format value "%s"', print_r($value, true)));
    }

    /**
     * Add the given label and value to the two column table output
     *
     * @param string $label Label for the value
     * @param mixed  $value A Value to show
     *
     * @return array
     */
    private function formatField($label, $value)
    {
        if (null === $value) {
            $value = '<comment>None</comment>';
        }

<<<<<<< HEAD
<<<<<<< HEAD
        return [sprintf('<info>%s</info>', $label), $this->formatValue($value)];
=======
        return array(sprintf('<info>%s</info>', $label), $this->formatValue($value));
>>>>>>> contactmanager
=======
        return [sprintf('<info>%s</info>', $label), $this->formatValue($value)];
>>>>>>> donmanager
    }

    /**
     * Format the association mappings
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array $propertyMappings
=======
     * @param array
>>>>>>> contactmanager
=======
     * @param array $propertyMappings
>>>>>>> donmanager
     *
     * @return array
     */
    private function formatMappings(array $propertyMappings)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $output = [];
=======
        $output = array();
>>>>>>> contactmanager
=======
        $output = [];
>>>>>>> donmanager

        foreach ($propertyMappings as $propertyName => $mapping) {
            $output[] = $this->formatField(sprintf('  %s', $propertyName), '');

            foreach ($mapping as $field => $value) {
                $output[] = $this->formatField(sprintf('    %s', $field), $this->formatValue($value));
            }
        }

        return $output;
    }

    /**
     * Format the entity listeners
     *
     * @param array $entityListeners
     *
     * @return array
     */
    private function formatEntityListeners(array $entityListeners)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->formatField('Entity listeners', array_map('get_class', $entityListeners));
=======
        return $this->formatField(
            'Entity listeners',
            array_map(
                function ($entityListener) {
                    return get_class($entityListener);
                },
                $entityListeners
            )
        );
>>>>>>> contactmanager
=======
        return $this->formatField('Entity listeners', array_map('get_class', $entityListeners));
>>>>>>> donmanager
    }
}
