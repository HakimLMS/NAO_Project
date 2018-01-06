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
        $__internal_11fe9b01ca34dff06e1c6126892270b320b1bd835f8be56e88cd8ce2883da578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11fe9b01ca34dff06e1c6126892270b320b1bd835f8be56e88cd8ce2883da578->enter($__internal_11fe9b01ca34dff06e1c6126892270b320b1bd835f8be56e88cd8ce2883da578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_d4c49a8520026abbdf54b3fa0545d4ea8a4fdf0838ead2559de372ed61060d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c49a8520026abbdf54b3fa0545d4ea8a4fdf0838ead2559de372ed61060d30->enter($__internal_d4c49a8520026abbdf54b3fa0545d4ea8a4fdf0838ead2559de372ed61060d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_11fe9b01ca34dff06e1c6126892270b320b1bd835f8be56e88cd8ce2883da578->leave($__internal_11fe9b01ca34dff06e1c6126892270b320b1bd835f8be56e88cd8ce2883da578_prof);

        
        $__internal_d4c49a8520026abbdf54b3fa0545d4ea8a4fdf0838ead2559de372ed61060d30->leave($__internal_d4c49a8520026abbdf54b3fa0545d4ea8a4fdf0838ead2559de372ed61060d30_prof);

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
", "@Framework/Form/form_widget_simple.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
