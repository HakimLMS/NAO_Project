<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_03542dd852a14eeac2a98c532413aa3aacb127b004014dd4869b3022d1959e0d extends Twig_Template
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
        $__internal_889a3c1af5270f75557f16476343cdabfca7a248877a7e82d35189464b998336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_889a3c1af5270f75557f16476343cdabfca7a248877a7e82d35189464b998336->enter($__internal_889a3c1af5270f75557f16476343cdabfca7a248877a7e82d35189464b998336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_06c58bc6efd574f8ce7aa6281b0695035f6f1aa31b04fa7ae2810f6cbe5811a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c58bc6efd574f8ce7aa6281b0695035f6f1aa31b04fa7ae2810f6cbe5811a4->enter($__internal_06c58bc6efd574f8ce7aa6281b0695035f6f1aa31b04fa7ae2810f6cbe5811a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_889a3c1af5270f75557f16476343cdabfca7a248877a7e82d35189464b998336->leave($__internal_889a3c1af5270f75557f16476343cdabfca7a248877a7e82d35189464b998336_prof);

        
        $__internal_06c58bc6efd574f8ce7aa6281b0695035f6f1aa31b04fa7ae2810f6cbe5811a4->leave($__internal_06c58bc6efd574f8ce7aa6281b0695035f6f1aa31b04fa7ae2810f6cbe5811a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
