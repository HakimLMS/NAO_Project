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

namespace Doctrine\ORM\Query\AST\Functions;

use Doctrine\ORM\Query\Lexer;

/**
 * "CONCAT" "(" StringPrimary "," StringPrimary {"," StringPrimary }* ")"
 *
 *
 * @link    www.doctrine-project.org
 * @since   2.0
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 * @author  Benjamin Eberlei <kontakt@beberlei.de>
 */
class ConcatFunction extends FunctionNode
{
    public $firstStringPrimary;
<<<<<<< HEAD
<<<<<<< HEAD

    public $secondStringPrimary;

    public $concatExpressions = [];

    /**
     * @override
     * @inheritdoc
=======
    
=======

>>>>>>> donmanager
    public $secondStringPrimary;

    public $concatExpressions = [];

    /**
     * @override
<<<<<<< HEAD
>>>>>>> contactmanager
=======
     * @inheritdoc
>>>>>>> donmanager
     */
    public function getSql(\Doctrine\ORM\Query\SqlWalker $sqlWalker)
    {
        $platform = $sqlWalker->getConnection()->getDatabasePlatform();
<<<<<<< HEAD
<<<<<<< HEAD

        $args = [];

        foreach ($this->concatExpressions as $expression) {
            $args[] = $sqlWalker->walkStringPrimary($expression);
        }

        return call_user_func_array([$platform,'getConcatExpression'], $args);
=======
        
        $args = array();
        
        foreach ($this->concatExpressions as $expression) {
            $args[] = $sqlWalker->walkStringPrimary($expression);
        }
        
        return call_user_func_array(array($platform,'getConcatExpression'), $args);
>>>>>>> contactmanager
=======

        $args = [];

        foreach ($this->concatExpressions as $expression) {
            $args[] = $sqlWalker->walkStringPrimary($expression);
        }

        return call_user_func_array([$platform,'getConcatExpression'], $args);
>>>>>>> donmanager
    }

    /**
     * @override
<<<<<<< HEAD
<<<<<<< HEAD
     * @inheritdoc
=======
>>>>>>> contactmanager
=======
     * @inheritdoc
>>>>>>> donmanager
     */
    public function parse(\Doctrine\ORM\Query\Parser $parser)
    {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
<<<<<<< HEAD
<<<<<<< HEAD

        $this->firstStringPrimary = $parser->StringPrimary();
        $this->concatExpressions[] = $this->firstStringPrimary;

        $parser->match(Lexer::T_COMMA);

        $this->secondStringPrimary = $parser->StringPrimary();
        $this->concatExpressions[] = $this->secondStringPrimary;

        while ($parser->getLexer()->isNextToken(Lexer::T_COMMA)) {
            $parser->match(Lexer::T_COMMA);
            $this->concatExpressions[] = $parser->StringPrimary();
=======
        
=======

>>>>>>> donmanager
        $this->firstStringPrimary = $parser->StringPrimary();
        $this->concatExpressions[] = $this->firstStringPrimary;

        $parser->match(Lexer::T_COMMA);

        $this->secondStringPrimary = $parser->StringPrimary();
        $this->concatExpressions[] = $this->secondStringPrimary;

        while ($parser->getLexer()->isNextToken(Lexer::T_COMMA)) {
<<<<<<< HEAD
 		    $parser->match(Lexer::T_COMMA);
	        $this->concatExpressions[] = $parser->StringPrimary();
>>>>>>> contactmanager
=======
            $parser->match(Lexer::T_COMMA);
            $this->concatExpressions[] = $parser->StringPrimary();
>>>>>>> donmanager
        }

        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }
}

