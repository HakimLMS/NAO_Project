<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_3bc09884a31fe565789c1d15cdc2d91a86bfe1b1acb7d7fcdb0f52722cb85fd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80e2ffb63524769d5838e3afb87760ce3fcf504b62a6268448c50c2986f490d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80e2ffb63524769d5838e3afb87760ce3fcf504b62a6268448c50c2986f490d7->enter($__internal_80e2ffb63524769d5838e3afb87760ce3fcf504b62a6268448c50c2986f490d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_129979515fb0df19678fef5a862339ddbadd1dc05ad4cffe346c28f2da99bf65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129979515fb0df19678fef5a862339ddbadd1dc05ad4cffe346c28f2da99bf65->enter($__internal_129979515fb0df19678fef5a862339ddbadd1dc05ad4cffe346c28f2da99bf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_80e2ffb63524769d5838e3afb87760ce3fcf504b62a6268448c50c2986f490d7->leave($__internal_80e2ffb63524769d5838e3afb87760ce3fcf504b62a6268448c50c2986f490d7_prof);

        
        $__internal_129979515fb0df19678fef5a862339ddbadd1dc05ad4cffe346c28f2da99bf65->leave($__internal_129979515fb0df19678fef5a862339ddbadd1dc05ad4cffe346c28f2da99bf65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
