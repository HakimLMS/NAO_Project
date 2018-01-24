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

namespace Doctrine\ORM\Tools\Console\Command\SchemaTool;

<<<<<<< HEAD
use Doctrine\ORM\Tools\SchemaTool;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
=======
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\Tools\SchemaTool;
>>>>>>> contactmanager

/**
 * Command to drop the database schema for a set of classes based on their mappings.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
class DropCommand extends AbstractCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
<<<<<<< HEAD
        $this->setName('orm:schema-tool:drop')
             ->setDescription('Drop the complete database schema of EntityManager Storage Connection or generate the corresponding SQL output')
             ->addOption('dump-sql', null, InputOption::VALUE_NONE, 'Instead of trying to apply generated SQLs into EntityManager Storage Connection, output them.')
             ->addOption('force', 'f', InputOption::VALUE_NONE, "Don't ask for the deletion of the database, but force the operation to run.")
             ->addOption('full-database', null, InputOption::VALUE_NONE, 'Instead of using the Class Metadata to detect the database table schema, drop ALL assets that the database contains.')
             ->setHelp(<<<EOT
=======
        $this
        ->setName('orm:schema-tool:drop')
        ->setDescription(
            'Drop the complete database schema of EntityManager Storage Connection or generate the corresponding SQL output.'
        )
        ->setDefinition(array(
            new InputOption(
                'dump-sql', null, InputOption::VALUE_NONE,
                'Instead of trying to apply generated SQLs into EntityManager Storage Connection, output them.'
            ),
            new InputOption(
                'force', 'f', InputOption::VALUE_NONE,
                "Don't ask for the deletion of the database, but force the operation to run."
            ),
            new InputOption(
                'full-database', null, InputOption::VALUE_NONE,
                'Instead of using the Class Metadata to detect the database table schema, drop ALL assets that the database contains.'
            ),
        ))
        ->setHelp(<<<EOT
>>>>>>> contactmanager
Processes the schema and either drop the database schema of EntityManager Storage Connection or generate the SQL output.
Beware that the complete database is dropped by this command, even tables that are not relevant to your metadata model.

<comment>Hint:</comment> If you have a database with tables that should not be managed
by the ORM, you can use a DBAL functionality to filter the tables and sequences down
on a global level:

    \$config->setFilterSchemaAssetsExpression(\$regexp);
EOT
<<<<<<< HEAD
             );
=======
        );
>>>>>>> contactmanager
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    protected function executeSchemaCommand(InputInterface $input, OutputInterface $output, SchemaTool $schemaTool, array $metadatas, SymfonyStyle $ui)
    {
        $isFullDatabaseDrop = $input->getOption('full-database');
        $dumpSql = true === $input->getOption('dump-sql');
        $force   = true === $input->getOption('force');

        if ($dumpSql) {
=======
    protected function executeSchemaCommand(InputInterface $input, OutputInterface $output, SchemaTool $schemaTool, array $metadatas)
    {
        $isFullDatabaseDrop = $input->getOption('full-database');

        if ($input->getOption('dump-sql')) {
>>>>>>> contactmanager
            if ($isFullDatabaseDrop) {
                $sqls = $schemaTool->getDropDatabaseSQL();
            } else {
                $sqls = $schemaTool->getDropSchemaSQL($metadatas);
            }
<<<<<<< HEAD
            $ui->text('The following SQL statements will be executed:');
            $ui->newLine();

            foreach ($sqls as $sql) {
                $ui->text(sprintf('    %s;', $sql));
            }
=======
            $output->writeln(implode(';' . PHP_EOL, $sqls));
>>>>>>> contactmanager

            return 0;
        }

<<<<<<< HEAD
        if ($force) {
            $ui->text('Dropping database schema...');
            $ui->newLine();
=======
        if ($input->getOption('force')) {
            $output->writeln('Dropping database schema...');
>>>>>>> contactmanager

            if ($isFullDatabaseDrop) {
                $schemaTool->dropDatabase();
            } else {
                $schemaTool->dropSchema($metadatas);
            }

<<<<<<< HEAD
            $ui->success('Database schema dropped successfully!');
=======
            $output->writeln('Database schema dropped successfully!');
>>>>>>> contactmanager

            return 0;
        }

<<<<<<< HEAD
        $ui->caution('This operation should not be executed in a production environment!');
=======
        $output->writeln('<comment>ATTENTION</comment>: This operation should not be executed in a production environment.' . PHP_EOL);
>>>>>>> contactmanager

        if ($isFullDatabaseDrop) {
            $sqls = $schemaTool->getDropDatabaseSQL();
        } else {
            $sqls = $schemaTool->getDropSchemaSQL($metadatas);
        }

<<<<<<< HEAD
        if (empty($sqls)) {
            $ui->success('Nothing to drop. The database is empty!');

            return 0;
        }

        $ui->text(
            [
                sprintf('The Schema-Tool would execute <info>"%s"</info> queries to update the database.', count($sqls)),
                '',
                'Please run the operation by passing one - or both - of the following options:',
                '',
                sprintf('    <info>%s --force</info> to execute the command', $this->getName()),
                sprintf('    <info>%s --dump-sql</info> to dump the SQL statements to the screen', $this->getName()),
            ]
        );

        return 1;
=======
        if (count($sqls)) {
            $output->writeln(sprintf('The Schema-Tool would execute <info>"%s"</info> queries to update the database.', count($sqls)));
            $output->writeln('Please run the operation by passing one - or both - of the following options:');

            $output->writeln(sprintf('    <info>%s --force</info> to execute the command', $this->getName()));
            $output->writeln(sprintf('    <info>%s --dump-sql</info> to dump the SQL statements to the screen', $this->getName()));

            return 1;
        }

        $output->writeln('Nothing to drop. The database is empty!');

        return 0;
>>>>>>> contactmanager
    }
}
