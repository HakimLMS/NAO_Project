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

use Symfony\Flex\Recipe;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class GitignoreConfigurator extends AbstractConfigurator
{
    public function configure(Recipe $recipe, $vars)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->write('Added entries to .gitignore');
=======
        $this->write('Adding entries to .gitignore');
>>>>>>> contactmanager
=======
        $this->write('Added entries to .gitignore');
>>>>>>> donmanager

        $gitignore = getcwd().'/.gitignore';
        if ($this->isFileMarked($recipe, $gitignore)) {
            return;
        }

        $data = '';
        foreach ($vars as $value) {
            $data .= "$value\n";
        }
        file_put_contents($gitignore, "\n".ltrim($this->markData($recipe, $data), "\r\n"), FILE_APPEND);
    }

    public function unconfigure(Recipe $recipe, $vars)
    {
        $file = getcwd().'/.gitignore';
        if (!file_exists($file)) {
            return;
        }

        $contents = preg_replace(sprintf('{%s*###> %s ###.*###< %s ###%s+}s', "\n", $recipe->getName(), $recipe->getName(), "\n"), "\n", file_get_contents($file), -1, $count);
        if (!$count) {
            return;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $this->write('Removed entries in .gitignore');
=======
        $this->write('Removing entries in .gitignore');
>>>>>>> contactmanager
=======
        $this->write('Removed entries in .gitignore');
>>>>>>> donmanager
        file_put_contents($file, ltrim($contents, "\r\n"));
    }
}
