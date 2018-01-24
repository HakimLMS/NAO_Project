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

namespace Doctrine\ORM\Query;

/**
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> contactmanager
 */
class TreeWalkerChainIterator implements \Iterator, \ArrayAccess
{
    /**
     * @var TreeWalker[]
     */
<<<<<<< HEAD
    private $walkers = [];
=======
    private $walkers = array();
>>>>>>> contactmanager
    /**
     * @var TreeWalkerChain
     */
    private $treeWalkerChain;
    /**
     * @var
     */
    private $query;
    /**
     * @var
     */
    private $parserResult;

    public function __construct(TreeWalkerChain $treeWalkerChain, $query, $parserResult)
    {
        $this->treeWalkerChain = $treeWalkerChain;
        $this->query = $query;
        $this->parserResult = $parserResult;
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function rewind()
=======
    function rewind()
>>>>>>> contactmanager
    {
        return reset($this->walkers);
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function current()
=======
    function current()
>>>>>>> contactmanager
    {
        return $this->offsetGet(key($this->walkers));
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function key()
=======
    function key()
>>>>>>> contactmanager
    {
        return key($this->walkers);
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function next()
=======
    function next()
>>>>>>> contactmanager
    {
        next($this->walkers);

        return $this->offsetGet(key($this->walkers));
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function valid()
=======
    function valid()
>>>>>>> contactmanager
    {
        return key($this->walkers) !== null;
    }

<<<<<<< HEAD
=======

>>>>>>> contactmanager
    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        return isset($this->walkers[$offset]);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        if ($this->offsetExists($offset)) {
            return new $this->walkers[$offset](
                $this->query,
                $this->parserResult,
                $this->treeWalkerChain->getQueryComponents()
            );
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
<<<<<<< HEAD
        if (null === $offset) {
=======
        if (is_null($offset)) {
>>>>>>> contactmanager
            $this->walkers[] = $value;
        } else {
            $this->walkers[$offset] = $value;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        if ($this->offsetExists($offset)) {
            unset($this->walkers[$offset]);
        }
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> contactmanager
