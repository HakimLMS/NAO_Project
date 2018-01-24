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
use LogicException;
=======
>>>>>>> contactmanager
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
            } else {
                if (!is_dir(dirname($to.'/'.$target))) {
                    mkdir(dirname($to.'/'.$target), 0777, true);
                }

                if (!file_exists($to.'/'.$target)) {
                    $this->copyFile($from.'/'.$source, $to.'/'.$target);
>>>>>>> contactmanager
                }
            }
        }
    }

    private function removeFiles(array $manifest, string $from, string $to)
    {
        foreach ($manifest as $source => $target) {
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
            }
        }
    }

    private function copyDir(string $source, string $target)
    {
        if (!is_dir($target)) {
            mkdir($target, 0777, true);
        }

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
        foreach ($iterator as $item) {
            if ($item->isDir()) {
                if (!is_dir($new = $target.'/'.$iterator->getSubPathName())) {
                    mkdir($new);
                }
            } elseif (!file_exists($target.'/'.$iterator->getSubPathName())) {
                $this->copyFile($item, $target.'/'.$iterator->getSubPathName());
>>>>>>> contactmanager
            }
        }
    }

    public function copyFile(string $source, string $target)
    {
        if (file_exists($target)) {
            return;
        }
<<<<<<< HEAD

        if (!file_exists($source)) {
            throw new LogicException(sprintf('File "%s" does not exist!', $source));
        }

        copy($source, $target);
        @chmod($target, fileperms($target) | (fileperms($source) & 0111));
        $this->write(sprintf('Created <fg=green>"%s"</>', $this->path->relativize($target)));
=======
        copy($source, $target);
        @chmod($target, fileperms($target) | (fileperms($source) & 0111));
>>>>>>> contactmanager
    }

    private function removeFilesFromDir(string $source, string $target)
    {
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
        foreach ($iterator as $item) {
            if ($item->isDir()) {
                // that removes the dir only if it is empty
                @rmdir($target.'/'.$iterator->getSubPathName());
            } else {
                @unlink($target.'/'.$iterator->getSubPathName());
            }
        }
    }
>>>>>>> contactmanager
}
