<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_57a577e1f93a4c12f13d3b1d94d4ef3fb1f5c3dc5c5bc2e9091e277e3f565b66 extends Twig_Template
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
        $__internal_e5672cf85f1104ec171e6113b0a7b08927c88f223ebb630cacf600839393f7a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5672cf85f1104ec171e6113b0a7b08927c88f223ebb630cacf600839393f7a8->enter($__internal_e5672cf85f1104ec171e6113b0a7b08927c88f223ebb630cacf600839393f7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_49426549cdd85ac2eeec5c00f32f2d31d7bebed85035971775876afab1a5ea44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49426549cdd85ac2eeec5c00f32f2d31d7bebed85035971775876afab1a5ea44->enter($__internal_49426549cdd85ac2eeec5c00f32f2d31d7bebed85035971775876afab1a5ea44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_e5672cf85f1104ec171e6113b0a7b08927c88f223ebb630cacf600839393f7a8->leave($__internal_e5672cf85f1104ec171e6113b0a7b08927c88f223ebb630cacf600839393f7a8_prof);

        
        $__internal_49426549cdd85ac2eeec5c00f32f2d31d7bebed85035971775876afab1a5ea44->leave($__internal_49426549cdd85ac2eeec5c00f32f2d31d7bebed85035971775876afab1a5ea44_prof);

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
