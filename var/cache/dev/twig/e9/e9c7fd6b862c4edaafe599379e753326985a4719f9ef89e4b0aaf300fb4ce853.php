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
        $__internal_0118fd09dfb00aa0071f1d5393cc321ccee5884869596d5129d10b86f6bb6f95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0118fd09dfb00aa0071f1d5393cc321ccee5884869596d5129d10b86f6bb6f95->enter($__internal_0118fd09dfb00aa0071f1d5393cc321ccee5884869596d5129d10b86f6bb6f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_e03c5a60e5ed7c251307ed0a5ec2183c63a968a41d7cd527cca5ac952a6120d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e03c5a60e5ed7c251307ed0a5ec2183c63a968a41d7cd527cca5ac952a6120d7->enter($__internal_e03c5a60e5ed7c251307ed0a5ec2183c63a968a41d7cd527cca5ac952a6120d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0118fd09dfb00aa0071f1d5393cc321ccee5884869596d5129d10b86f6bb6f95->leave($__internal_0118fd09dfb00aa0071f1d5393cc321ccee5884869596d5129d10b86f6bb6f95_prof);

        
        $__internal_e03c5a60e5ed7c251307ed0a5ec2183c63a968a41d7cd527cca5ac952a6120d7->leave($__internal_e03c5a60e5ed7c251307ed0a5ec2183c63a968a41d7cd527cca5ac952a6120d7_prof);

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
