<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Flex\Configurator;

<<<<<<< HEAD
<<<<<<< HEAD
use LogicException;
=======
>>>>>>> contactmanager
=======
use LogicException;
>>>>>>> donmanager
use Symfony\Flex\Recipe;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class CopyFromPackageConfigurator extends AbstractConfigurator
{
    public function configure(Recipe $recipe, $config)
    {
        $this->write('Setting configuration and copying files');
        $packageDir = $this->composer->getInstallationManager()->getInstallPath($recipe->getPackage());
        $this->copyFiles($config, $packageDir, getcwd());
    }

    public function unconfigure(Recipe $recipe, $config)
    {
        $this->write('Removing configuration and files');
        $packageDir = $this->composer->getInstallationManager()->getInstallPath($recipe->getPackage());
        $this->removeFiles($config, $packageDir, getcwd());
    }

    private function copyFiles(array $manifest, string $from, string $to)
    {
        foreach ($manifest as $source => $target) {
            $target = $this->options->expandTargetDir($target);
            if ('/' === substr($source, -1)) {
<<<<<<< HEAD
<<<<<<< HEAD
                $this->copyDir($this->path->concatenate([$from, $source]), $this->path->concatenate([$to, $target]));
            } else {
                $targetPath = $this->path->concatenate([$to, $target]);
                if (!is_dir(dirname($targetPath))) {
                    mkdir(dirname($targetPath), 0777, true);
                    $this->write(sprintf('Created <fg=green>"%s"</>', $this->path->relativize(dirname($targetPath))));
                }

                if (!file_exists($targetPath)) {
                    $this->copyFile($this->path->concatenate([$from, $source]), $targetPath);
=======
                $this->copyDir($from.'/'.$source, $to.'/'.$target);
=======
                $this->copyDir($this->path->concatenate([$from, $source]), $this->path->concatenate([$to, $target]));
>>>>>>> donmanager
            } else {
                $targetPath = $this->path->concatenate([$to, $target]);
                if (!is_dir(dirname($targetPath))) {
                    mkdir(dirname($targetPath), 0777, true);
                    $this->write(sprintf('Created <fg=green>"%s"</>', $this->path->relativize(dirname($targetPath))));
                }

<<<<<<< HEAD
                if (!file_exists($to.'/'.$target)) {
                    $this->copyFile($from.'/'.$source, $to.'/'.$target);
>>>>>>> contactmanager
=======
                if (!file_exists($targetPath)) {
                    $this->copyFile($this->path->concatenate([$from, $source]), $targetPath);
>>>>>>> donmanager
                }
            }
        }
    }

    private function removeFiles(array $manifest, string $from, string $to)
    {
        foreach ($manifest as $source => $target) {
<<<<<<< HEAD
<<<<<<< HEAD
            $targetPath = $this->path->concatenate([$to, $target]);
            if ('/' === substr($source, -1)) {
                $this->removeFilesFromDir($this->path->concatenate([$from, $source]), $this->path->concatenate([$to, $target]));
            } elseif (file_exists($targetPath)) {
                @unlink($targetPath);
                $this->write(sprintf('Removed <fg=green>"%s"</>', $this->path->relativize($targetPath)));
=======
            $target = $this->options->expandTargetDir($target);
            if ('/' === substr($source, -1)) {
                $this->removeFilesFromDir($from.'/'.$source, $to.'/'.$target);
            } else {
                @unlink($to.'/'.$target);
>>>>>>> contactmanager
=======
            $targetPath = $this->path->concatenate([$to, $target]);
            if ('/' === substr($source, -1)) {
                $this->removeFilesFromDir($this->path->concatenate([$from, $source]), $this->path->concatenate([$to, $target]));
            } elseif (file_exists($targetPath)) {
                @unlink($targetPath);
                $this->write(sprintf('Removed <fg=green>"%s"</>', $this->path->relativize($targetPath)));
>>>>>>> donmanager
            }
        }
    }

    private function copyDir(string $source, string $target)
    {
        if (!is_dir($target)) {
            mkdir($target, 0777, true);
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $iterator = $this->createSourceIterator($source, \RecursiveIteratorIterator::SELF_FIRST);
        foreach ($iterator as $item) {
            $targetPath = $this->path->concatenate([$target, $iterator->getSubPathName()]);
            if ($item->isDir()) {
                if (!is_dir($targetPath)) {
                    mkdir($targetPath);
                    $this->write(sprintf('Created <fg=green>"%s"</>', $this->path->relativize($targetPath)));
                }
            } elseif (!file_exists($targetPath)) {
                $this->copyFile($item, $targetPath);
=======
        $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($source, \RecursiveDirectoryIterator::SKIP_DOTS), \RecursiveIteratorIterator::SELF_FIRST);
=======
        $iterator = $this->createSourceIterator($source, \RecursiveIteratorIterator::SELF_FIRST);
>>>>>>> donmanager
        foreach ($iterator as $item) {
            $targetPath = $this->path->concatenate([$target, $iterator->getSubPathName()]);
            if ($item->isDir()) {
                if (!is_dir($targetPath)) {
                    mkdir($targetPath);
                    $this->write(sprintf('Created <fg=green>"%s"</>', $this->path->relativize($targetPath)));
                }
<<<<<<< HEAD
            } elseif (!file_exists($target.'/'.$iterator->getSubPathName())) {
                $this->copyFile($item, $target.'/'.$iterator->getSubPathName());
>>>>>>> contactmanager
=======
            } elseif (!file_exists($targetPath)) {
                $this->copyFile($item, $targetPath);
>>>>>>> donmanager
            }
        }
    }

    public function copyFile(string $source, string $target)
    {
        if (file_exists($target)) {
            return;
        }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager

        if (!file_exists($source)) {
            throw new LogicException(sprintf('File "%s" does not exist!', $source));
        }

<<<<<<< HEAD
        copy($source, $target);
        @chmod($target, fileperms($target) | (fileperms($source) & 0111));
        $this->write(sprintf('Created <fg=green>"%s"</>', $this->path->relativize($target)));
=======
        copy($source, $target);
        @chmod($target, fileperms($target) | (fileperms($source) & 0111));
>>>>>>> contactmanager
=======
        copy($source, $target);
        @chmod($target, fileperms($target) | (fileperms($source) & 0111));
        $this->write(sprintf('Created <fg=green>"%s"</>', $this->path->relativize($target)));
>>>>>>> donmanager
    }

    private function removeFilesFromDir(string $source, string $target)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $iterator = $this->createSourceIterator($source, \RecursiveIteratorIterator::CHILD_FIRST);
        foreach ($iterator as $item) {
            $targetPath = $this->path->concatenate([$target, $iterator->getSubPathName()]);
            if ($item->isDir()) {
                // that removes the dir only if it is empty
                @rmdir($targetPath);
                $this->write(sprintf('Removed directory <fg=green>"%s"</>', $this->path->relativize($targetPath)));
            } else {
                @unlink($targetPath);
                $this->write(sprintf('Removed <fg=green>"%s"</>', $this->path->relativize($targetPath)));
            }
        }
    }

    private function createSourceIterator(string $source, int $mode): RecursiveIteratorIterator
    {
        return new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($source, \RecursiveDirectoryIterator::SKIP_DOTS), $mode);
    }
=======
        $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($source, \RecursiveDirectoryIterator::SKIP_DOTS), \RecursiveIteratorIterator::CHILD_FIRST);
=======
        $iterator = $this->createSourceIterator($source, \RecursiveIteratorIterator::CHILD_FIRST);
>>>>>>> donmanager
        foreach ($iterator as $item) {
            $targetPath = $this->path->concatenate([$target, $iterator->getSubPathName()]);
            if ($item->isDir()) {
                // that removes the dir only if it is empty
                @rmdir($targetPath);
                $this->write(sprintf('Removed directory <fg=green>"%s"</>', $this->path->relativize($targetPath)));
            } else {
                @unlink($targetPath);
                $this->write(sprintf('Removed <fg=green>"%s"</>', $this->path->relativize($targetPath)));
            }
        }
    }
<<<<<<< HEAD
>>>>>>> contactmanager
=======

    private function createSourceIterator(string $source, int $mode): RecursiveIteratorIterator
    {
        return new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($source, \RecursiveDirectoryIterator::SKIP_DOTS), $mode);
    }
>>>>>>> donmanager
}
