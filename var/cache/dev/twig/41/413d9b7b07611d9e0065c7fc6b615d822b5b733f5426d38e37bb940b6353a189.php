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
        $__internal_420140a479903fa306fa9e37fd46c26f48b3233c4708d44bd5ff1d86fa3024e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_420140a479903fa306fa9e37fd46c26f48b3233c4708d44bd5ff1d86fa3024e9->enter($__internal_420140a479903fa306fa9e37fd46c26f48b3233c4708d44bd5ff1d86fa3024e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_fd6417bb95c6146eff17c7d7a0604cb35087f03c46fa340bd98df85c7e3a717a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd6417bb95c6146eff17c7d7a0604cb35087f03c46fa340bd98df85c7e3a717a->enter($__internal_fd6417bb95c6146eff17c7d7a0604cb35087f03c46fa340bd98df85c7e3a717a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_420140a479903fa306fa9e37fd46c26f48b3233c4708d44bd5ff1d86fa3024e9->leave($__internal_420140a479903fa306fa9e37fd46c26f48b3233c4708d44bd5ff1d86fa3024e9_prof);

        
        $__internal_fd6417bb95c6146eff17c7d7a0604cb35087f03c46fa340bd98df85c7e3a717a->leave($__internal_fd6417bb95c6146eff17c7d7a0604cb35087f03c46fa340bd98df85c7e3a717a_prof);

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
