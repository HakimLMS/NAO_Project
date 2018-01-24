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

namespace Doctrine\ORM\Persisters;

use Doctrine\Common\Collections\Expr\ExpressionVisitor;
use Doctrine\Common\Collections\Expr\Comparison;
use Doctrine\Common\Collections\Expr\Value;
use Doctrine\Common\Collections\Expr\CompositeExpression;

/**
 * Extract the values from a criteria/expression
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class SqlValueVisitor extends ExpressionVisitor
{
    /**
     * @var array
     */
<<<<<<< HEAD
<<<<<<< HEAD
    private $values = [];
=======
    private $values = array();
>>>>>>> contactmanager
=======
    private $values = [];
>>>>>>> donmanager

    /**
     * @var array
     */
<<<<<<< HEAD
<<<<<<< HEAD
    private $types  = [];
=======
    private $types  = array();
>>>>>>> contactmanager
=======
    private $types  = [];
>>>>>>> donmanager

    /**
     * Converts a comparison expression into the target query language output.
     *
     * @param \Doctrine\Common\Collections\Expr\Comparison $comparison
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return void
     */
    public function walkComparison(Comparison $comparison)
    {
        $value    = $this->getValueFromComparison($comparison);
        $field    = $comparison->getField();
        $operator = $comparison->getOperator();
=======
     * @return mixed
     */
    public function walkComparison(Comparison $comparison)
    {
        $value          = $this->getValueFromComparison($comparison);
        $field          = $comparison->getField();
        $operator       = $comparison->getOperator();
>>>>>>> contactmanager
=======
     * @return void
     */
    public function walkComparison(Comparison $comparison)
    {
        $value    = $this->getValueFromComparison($comparison);
        $field    = $comparison->getField();
        $operator = $comparison->getOperator();
>>>>>>> donmanager

        if (($operator === Comparison::EQ || $operator === Comparison::IS) && $value === null) {
            return;
        } else if ($operator === Comparison::NEQ && $value === null) {
            return;
        }

        $this->values[] = $value;
<<<<<<< HEAD
<<<<<<< HEAD
        $this->types[]  = [$field, $value, $operator];
=======
        $this->types[]  = array($field, $value, $operator);
>>>>>>> contactmanager
=======
        $this->types[]  = [$field, $value, $operator];
>>>>>>> donmanager
    }

    /**
     * Converts a composite expression into the target query language output.
     *
     * @param \Doctrine\Common\Collections\Expr\CompositeExpression $expr
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return void
=======
     * @return mixed
>>>>>>> contactmanager
=======
     * @return void
>>>>>>> donmanager
     */
    public function walkCompositeExpression(CompositeExpression $expr)
    {
        foreach ($expr->getExpressionList() as $child) {
            $this->dispatch($child);
        }
    }

    /**
     * Converts a value expression into the target query language part.
     *
     * @param \Doctrine\Common\Collections\Expr\Value $value
     *
     * @return mixed
     */
    public function walkValue(Value $value)
    {
        return;
    }

    /**
     * Returns the Parameters and Types necessary for matching the last visited expression.
     *
     * @return array
     */
    public function getParamsAndTypes()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return [$this->values, $this->types];
=======
        return array($this->values, $this->types);
>>>>>>> contactmanager
=======
        return [$this->values, $this->types];
>>>>>>> donmanager
    }

    /**
     * Returns the value from a Comparison. In case of a CONTAINS comparison,
     * the value is wrapped in %-signs, because it will be used in a LIKE clause.
     *
     * @param \Doctrine\Common\Collections\Expr\Comparison $comparison
     * @return mixed
     */
    protected function getValueFromComparison(Comparison $comparison)
    {
        $value = $comparison->getValue()->getValue();

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> donmanager
        switch ($comparison->getOperator()) {
            case Comparison::CONTAINS:
                return "%{$value}%";

            case Comparison::STARTS_WITH:
                return "{$value}%";

            case Comparison::ENDS_WITH:
                return "%{$value}";

            default:
                return $value;
        }
<<<<<<< HEAD
=======
        return $comparison->getOperator() == Comparison::CONTAINS
            ? "%{$value}%"
            : $value;
>>>>>>> contactmanager
=======
>>>>>>> donmanager
    }
}
