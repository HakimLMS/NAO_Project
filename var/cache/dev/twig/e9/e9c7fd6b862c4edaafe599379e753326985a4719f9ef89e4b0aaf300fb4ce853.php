<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9f86a4cad2d7db3a2126e9c8acee6464133d68dbcc647dccadfa5a401a06268e extends Twig_Template
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
        $__internal_99b1b5054aa742b5cc776c11f1648928a1979815f6e92992f497b58a72769022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b1b5054aa742b5cc776c11f1648928a1979815f6e92992f497b58a72769022->enter($__internal_99b1b5054aa742b5cc776c11f1648928a1979815f6e92992f497b58a72769022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_3bd10bb141cbb695cd56fb813452af6f19c7807410803f1d85641a541476e3d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd10bb141cbb695cd56fb813452af6f19c7807410803f1d85641a541476e3d7->enter($__internal_3bd10bb141cbb695cd56fb813452af6f19c7807410803f1d85641a541476e3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_99b1b5054aa742b5cc776c11f1648928a1979815f6e92992f497b58a72769022->leave($__internal_99b1b5054aa742b5cc776c11f1648928a1979815f6e92992f497b58a72769022_prof);

        
        $__internal_3bd10bb141cbb695cd56fb813452af6f19c7807410803f1d85641a541476e3d7->leave($__internal_3bd10bb141cbb695cd56fb813452af6f19c7807410803f1d85641a541476e3d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
