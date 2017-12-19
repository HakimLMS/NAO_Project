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
        $__internal_53e061a6c10733dfb654ddaa4a468e1e546c70f50e7a6fb5ffd6fc3daf48622e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e061a6c10733dfb654ddaa4a468e1e546c70f50e7a6fb5ffd6fc3daf48622e->enter($__internal_53e061a6c10733dfb654ddaa4a468e1e546c70f50e7a6fb5ffd6fc3daf48622e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_610901cba99fc22cedde7328b5eea03c737b7cc63fb56bd9a2132cb0b40325e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610901cba99fc22cedde7328b5eea03c737b7cc63fb56bd9a2132cb0b40325e7->enter($__internal_610901cba99fc22cedde7328b5eea03c737b7cc63fb56bd9a2132cb0b40325e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_53e061a6c10733dfb654ddaa4a468e1e546c70f50e7a6fb5ffd6fc3daf48622e->leave($__internal_53e061a6c10733dfb654ddaa4a468e1e546c70f50e7a6fb5ffd6fc3daf48622e_prof);

        
        $__internal_610901cba99fc22cedde7328b5eea03c737b7cc63fb56bd9a2132cb0b40325e7->leave($__internal_610901cba99fc22cedde7328b5eea03c737b7cc63fb56bd9a2132cb0b40325e7_prof);

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
