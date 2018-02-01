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
        $__internal_3a28bb7262777eb97370f38244b130f576f0373424d7247106dcfd006dec7215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a28bb7262777eb97370f38244b130f576f0373424d7247106dcfd006dec7215->enter($__internal_3a28bb7262777eb97370f38244b130f576f0373424d7247106dcfd006dec7215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_af9e743aa230b3a367593de162f1d014e44b367eef3df33e75c97b8fa2df7dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af9e743aa230b3a367593de162f1d014e44b367eef3df33e75c97b8fa2df7dd4->enter($__internal_af9e743aa230b3a367593de162f1d014e44b367eef3df33e75c97b8fa2df7dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_3a28bb7262777eb97370f38244b130f576f0373424d7247106dcfd006dec7215->leave($__internal_3a28bb7262777eb97370f38244b130f576f0373424d7247106dcfd006dec7215_prof);

        
        $__internal_af9e743aa230b3a367593de162f1d014e44b367eef3df33e75c97b8fa2df7dd4->leave($__internal_af9e743aa230b3a367593de162f1d014e44b367eef3df33e75c97b8fa2df7dd4_prof);

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
