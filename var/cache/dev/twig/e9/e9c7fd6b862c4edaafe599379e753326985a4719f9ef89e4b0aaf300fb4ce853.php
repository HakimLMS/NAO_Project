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
        $__internal_6e99f720f1010a1db62284237744587f5509f0f9a6612a90cfc7e8e43ca86737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e99f720f1010a1db62284237744587f5509f0f9a6612a90cfc7e8e43ca86737->enter($__internal_6e99f720f1010a1db62284237744587f5509f0f9a6612a90cfc7e8e43ca86737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_b2138d25a74c81670ccb8bdfcb9b1b42ce76401bf9e725ddac07c403377263d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2138d25a74c81670ccb8bdfcb9b1b42ce76401bf9e725ddac07c403377263d2->enter($__internal_b2138d25a74c81670ccb8bdfcb9b1b42ce76401bf9e725ddac07c403377263d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6e99f720f1010a1db62284237744587f5509f0f9a6612a90cfc7e8e43ca86737->leave($__internal_6e99f720f1010a1db62284237744587f5509f0f9a6612a90cfc7e8e43ca86737_prof);

        
        $__internal_b2138d25a74c81670ccb8bdfcb9b1b42ce76401bf9e725ddac07c403377263d2->leave($__internal_b2138d25a74c81670ccb8bdfcb9b1b42ce76401bf9e725ddac07c403377263d2_prof);

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
