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

<<<<<<< HEAD
use Doctrine\Common\Util\Debug;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
=======
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\Common\Util\Debug;
>>>>>>> contactmanager

/**
 * Command to execute DQL queries in a given EntityManager.
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
class RunDqlCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
<<<<<<< HEAD
        $this->setName('orm:run-dql')
             ->setDescription('Executes arbitrary DQL directly from the command line')
             ->addArgument('dql', InputArgument::REQUIRED, 'The DQL to execute.')
             ->addOption('hydrate', null, InputOption::VALUE_REQUIRED, 'Hydration mode of result set. Should be either: object, array, scalar or single-scalar.', 'object')
             ->addOption('first-result', null, InputOption::VALUE_REQUIRED, 'The first result in the result set.')
             ->addOption('max-result', null, InputOption::VALUE_REQUIRED, 'The maximum number of results in the result set.')
             ->addOption('depth', null, InputOption::VALUE_REQUIRED, 'Dumping depth of Entity graph.', 7)
             ->addOption('show-sql', null, InputOption::VALUE_NONE, 'Dump generated SQL instead of executing query')
             ->setHelp('Executes arbitrary DQL directly from the command line.');
=======
        $this
        ->setName('orm:run-dql')
        ->setDescription('Executes arbitrary DQL directly from the command line.')
        ->setDefinition(array(
            new InputArgument('dql', InputArgument::REQUIRED, 'The DQL to execute.'),
            new InputOption(
                'hydrate', null, InputOption::VALUE_REQUIRED,
                'Hydration mode of result set. Should be either: object, array, scalar or single-scalar.',
                'object'
            ),
            new InputOption(
                'first-result', null, InputOption::VALUE_REQUIRED,
                'The first result in the result set.'
            ),
            new InputOption(
                'max-result', null, InputOption::VALUE_REQUIRED,
                'The maximum number of results in the result set.'
            ),
            new InputOption(
                'depth', null, InputOption::VALUE_REQUIRED,
                'Dumping depth of Entity graph.', 7
            ),
            new InputOption(
                'show-sql', null, InputOption::VALUE_NONE,
                'Dump generated SQL instead of executing query'
            )
        ))
        ->setHelp(<<<EOT
Executes arbitrary DQL directly from the command line.
EOT
        );
>>>>>>> contactmanager
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
<<<<<<< HEAD
        $ui = new SymfonyStyle($input, $output);

=======
>>>>>>> contactmanager
        /* @var $em \Doctrine\ORM\EntityManagerInterface */
        $em = $this->getHelper('em')->getEntityManager();

        if (($dql = $input->getArgument('dql')) === null) {
<<<<<<< HEAD
            throw new \RuntimeException("Argument 'dql' is required in order to execute this command correctly.");
=======
            throw new \RuntimeException("Argument 'DQL' is required in order to execute this command correctly.");
>>>>>>> contactmanager
        }

        $depth = $input->getOption('depth');

        if ( ! is_numeric($depth)) {
<<<<<<< HEAD
            throw new \LogicException("Option 'depth' must contain an integer value");
=======
            throw new \LogicException("Option 'depth' must contains an integer value");
>>>>>>> contactmanager
        }

        $hydrationModeName = $input->getOption('hydrate');
        $hydrationMode = 'Doctrine\ORM\Query::HYDRATE_' . strtoupper(str_replace('-', '_', $hydrationModeName));

        if ( ! defined($hydrationMode)) {
            throw new \RuntimeException(
                "Hydration mode '$hydrationModeName' does not exist. It should be either: object. array, scalar or single-scalar."
            );
        }

        $query = $em->createQuery($dql);

        if (($firstResult = $input->getOption('first-result')) !== null) {
            if ( ! is_numeric($firstResult)) {
<<<<<<< HEAD
                throw new \LogicException("Option 'first-result' must contain an integer value");
=======
                throw new \LogicException("Option 'first-result' must contains an integer value");
>>>>>>> contactmanager
            }

            $query->setFirstResult((int) $firstResult);
        }

        if (($maxResult = $input->getOption('max-result')) !== null) {
            if ( ! is_numeric($maxResult)) {
<<<<<<< HEAD
                throw new \LogicException("Option 'max-result' must contain an integer value");
=======
                throw new \LogicException("Option 'max-result' must contains an integer value");
>>>>>>> contactmanager
            }

            $query->setMaxResults((int) $maxResult);
        }

        if ($input->getOption('show-sql')) {
<<<<<<< HEAD
            $ui->text($query->getSQL());
            return;
        }

        $resultSet = $query->execute([], constant($hydrationMode));

        $ui->text(Debug::dump($resultSet, $input->getOption('depth'), true, false));
=======
            $output->writeln(Debug::dump($query->getSQL(), 2, true, false));
            return;
        }

        $resultSet = $query->execute(array(), constant($hydrationMode));

        $output->writeln(Debug::dump($resultSet, $input->getOption('depth'), true, false));
>>>>>>> contactmanager
    }
}
