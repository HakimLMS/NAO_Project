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
        $__internal_915ed43abe5256ec8beb5c2a61b0b0bd5f69537cb9c061e2c6e576cf018f21ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915ed43abe5256ec8beb5c2a61b0b0bd5f69537cb9c061e2c6e576cf018f21ec->enter($__internal_915ed43abe5256ec8beb5c2a61b0b0bd5f69537cb9c061e2c6e576cf018f21ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_cfe7add09da2a548a590325040670f9a978b50472e414776570cfef0f0925d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe7add09da2a548a590325040670f9a978b50472e414776570cfef0f0925d32->enter($__internal_cfe7add09da2a548a590325040670f9a978b50472e414776570cfef0f0925d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_915ed43abe5256ec8beb5c2a61b0b0bd5f69537cb9c061e2c6e576cf018f21ec->leave($__internal_915ed43abe5256ec8beb5c2a61b0b0bd5f69537cb9c061e2c6e576cf018f21ec_prof);

        
        $__internal_cfe7add09da2a548a590325040670f9a978b50472e414776570cfef0f0925d32->leave($__internal_cfe7add09da2a548a590325040670f9a978b50472e414776570cfef0f0925d32_prof);

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
