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
        $__internal_8f58fbf4372b2552a3c1eca0079643110c0d3d0aad0127d4d21058b338148ad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f58fbf4372b2552a3c1eca0079643110c0d3d0aad0127d4d21058b338148ad4->enter($__internal_8f58fbf4372b2552a3c1eca0079643110c0d3d0aad0127d4d21058b338148ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_2523b5b19e79e38e96ba962cea766ba18cd90f3b81938ba89742278d3c09dd78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2523b5b19e79e38e96ba962cea766ba18cd90f3b81938ba89742278d3c09dd78->enter($__internal_2523b5b19e79e38e96ba962cea766ba18cd90f3b81938ba89742278d3c09dd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8f58fbf4372b2552a3c1eca0079643110c0d3d0aad0127d4d21058b338148ad4->leave($__internal_8f58fbf4372b2552a3c1eca0079643110c0d3d0aad0127d4d21058b338148ad4_prof);

        
        $__internal_2523b5b19e79e38e96ba962cea766ba18cd90f3b81938ba89742278d3c09dd78->leave($__internal_2523b5b19e79e38e96ba962cea766ba18cd90f3b81938ba89742278d3c09dd78_prof);

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
