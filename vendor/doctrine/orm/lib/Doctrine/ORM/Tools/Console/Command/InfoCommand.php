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

use Doctrine\ORM\Mapping\MappingException;
<<<<<<< HEAD
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
=======
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;
>>>>>>> contactmanager

/**
 * Show information about mapped entities.
 *
 * @link    www.doctrine-project.org
 * @since   2.1
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 */
class InfoCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
<<<<<<< HEAD
        $this->setName('orm:info')
             ->setDescription('Show basic information about all mapped entities')
             ->setHelp(<<<EOT
=======
        $this
            ->setName('orm:info')
            ->setDescription('Show basic information about all mapped entities')
            ->setHelp(<<<EOT
>>>>>>> contactmanager
The <info>%command.name%</info> shows basic information about which
entities exist and possibly if their mapping information contains errors or
not.
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
    protected function execute(InputInterface $input, OutputInterface $output)
    {
<<<<<<< HEAD
        $ui = new SymfonyStyle($input, $output);

=======
>>>>>>> contactmanager
        /* @var $entityManager \Doctrine\ORM\EntityManager */
        $entityManager = $this->getHelper('em')->getEntityManager();

        $entityClassNames = $entityManager->getConfiguration()
                                          ->getMetadataDriverImpl()
                                          ->getAllClassNames();

<<<<<<< HEAD
        if ( ! $entityClassNames) {
            $ui->caution(
                [
                    'You do not have any mapped Doctrine ORM entities according to the current configuration.',
                    'If you have entities or mapping files you should check your mapping configuration for errors.'
                ]
            );

            return 1;
        }

        $ui->text(sprintf("Found <info>%d</info> mapped entities:", count($entityClassNames)));
        $ui->newLine();
=======
        if (!$entityClassNames) {
            throw new \Exception(
                'You do not have any mapped Doctrine ORM entities according to the current configuration. '.
                'If you have entities or mapping files you should check your mapping configuration for errors.'
            );
        }

        $output->writeln(sprintf("Found <info>%d</info> mapped entities:", count($entityClassNames)));
>>>>>>> contactmanager

        $failure = false;

        foreach ($entityClassNames as $entityClassName) {
            try {
                $entityManager->getClassMetadata($entityClassName);
<<<<<<< HEAD
                $ui->text(sprintf("<info>[OK]</info>   %s", $entityClassName));
            } catch (MappingException $e) {
                $ui->text(
                    [
                        sprintf("<error>[FAIL]</error> %s", $entityClassName),
                        sprintf("<comment>%s</comment>", $e->getMessage()),
                        ''
                    ]
                );
=======
                $output->writeln(sprintf("<info>[OK]</info>   %s", $entityClassName));
            } catch (MappingException $e) {
                $output->writeln("<error>[FAIL]</error> ".$entityClassName);
                $output->writeln(sprintf("<comment>%s</comment>", $e->getMessage()));
                $output->writeln('');
>>>>>>> contactmanager

                $failure = true;
            }
        }

        return $failure ? 1 : 0;
    }
}
