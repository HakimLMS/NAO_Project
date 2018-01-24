<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

<<<<<<< HEAD
<<<<<<< HEAD
namespace Symfony\Component\Config\Tests\Fixtures\Builder;
=======
namespace Symfony\Component\Config\Tests\Definition\Builder;
>>>>>>> contactmanager
=======
namespace Symfony\Component\Config\Tests\Fixtures\Builder;
>>>>>>> donmanager

use Symfony\Component\Config\Definition\Builder\NodeDefinition;
use Symfony\Component\Config\Tests\Fixtures\BarNode;

class BarNodeDefinition extends NodeDefinition
{
    protected function createNode()
    {
        return new BarNode($this->name);
    }
}
