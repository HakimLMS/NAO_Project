<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_981f165144c6d95f04a85bcffc48d074d392be93360b033429b843de7d6de2b8 extends Twig_Template
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
        $__internal_8175ea09ad4793e1c52f2e99e992748bdf742e1ca4d6b8a3a79fc0ab7384f96d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8175ea09ad4793e1c52f2e99e992748bdf742e1ca4d6b8a3a79fc0ab7384f96d->enter($__internal_8175ea09ad4793e1c52f2e99e992748bdf742e1ca4d6b8a3a79fc0ab7384f96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_81a2c0b1cd12f9f06bf91ef8f2c3cba29a08be20d3803f89c62fb01bdf93fbea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a2c0b1cd12f9f06bf91ef8f2c3cba29a08be20d3803f89c62fb01bdf93fbea->enter($__internal_81a2c0b1cd12f9f06bf91ef8f2c3cba29a08be20d3803f89c62fb01bdf93fbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8175ea09ad4793e1c52f2e99e992748bdf742e1ca4d6b8a3a79fc0ab7384f96d->leave($__internal_8175ea09ad4793e1c52f2e99e992748bdf742e1ca4d6b8a3a79fc0ab7384f96d_prof);

        
        $__internal_81a2c0b1cd12f9f06bf91ef8f2c3cba29a08be20d3803f89c62fb01bdf93fbea->leave($__internal_81a2c0b1cd12f9f06bf91ef8f2c3cba29a08be20d3803f89c62fb01bdf93fbea_prof);

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
