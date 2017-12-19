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
        $__internal_d5fb30f4b1590bfbb56fd0c4f8c41cebf088e8f69a6b584a5ca3f78658643c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5fb30f4b1590bfbb56fd0c4f8c41cebf088e8f69a6b584a5ca3f78658643c1b->enter($__internal_d5fb30f4b1590bfbb56fd0c4f8c41cebf088e8f69a6b584a5ca3f78658643c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_8626391a3cfccf291b587ee93bf5fd327ec168ffb1ba9c6960f9191ac8e654b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8626391a3cfccf291b587ee93bf5fd327ec168ffb1ba9c6960f9191ac8e654b7->enter($__internal_8626391a3cfccf291b587ee93bf5fd327ec168ffb1ba9c6960f9191ac8e654b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d5fb30f4b1590bfbb56fd0c4f8c41cebf088e8f69a6b584a5ca3f78658643c1b->leave($__internal_d5fb30f4b1590bfbb56fd0c4f8c41cebf088e8f69a6b584a5ca3f78658643c1b_prof);

        
        $__internal_8626391a3cfccf291b587ee93bf5fd327ec168ffb1ba9c6960f9191ac8e654b7->leave($__internal_8626391a3cfccf291b587ee93bf5fd327ec168ffb1ba9c6960f9191ac8e654b7_prof);

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
