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
        $__internal_f12346040b70b9fd6f170107c5830ca1a533f1311e39015f56a21f7ca4577c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f12346040b70b9fd6f170107c5830ca1a533f1311e39015f56a21f7ca4577c82->enter($__internal_f12346040b70b9fd6f170107c5830ca1a533f1311e39015f56a21f7ca4577c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_6e69dd7e2c70f70828bf1464e51126036727be3f8752ad429f532ec67d98f5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e69dd7e2c70f70828bf1464e51126036727be3f8752ad429f532ec67d98f5a7->enter($__internal_6e69dd7e2c70f70828bf1464e51126036727be3f8752ad429f532ec67d98f5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f12346040b70b9fd6f170107c5830ca1a533f1311e39015f56a21f7ca4577c82->leave($__internal_f12346040b70b9fd6f170107c5830ca1a533f1311e39015f56a21f7ca4577c82_prof);

        
        $__internal_6e69dd7e2c70f70828bf1464e51126036727be3f8752ad429f532ec67d98f5a7->leave($__internal_6e69dd7e2c70f70828bf1464e51126036727be3f8752ad429f532ec67d98f5a7_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
