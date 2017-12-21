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
        $__internal_7114f30bd8b64e0c4ee65724b4001adab684e961743f8dda7c44e4da064d3e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7114f30bd8b64e0c4ee65724b4001adab684e961743f8dda7c44e4da064d3e7e->enter($__internal_7114f30bd8b64e0c4ee65724b4001adab684e961743f8dda7c44e4da064d3e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_e291d3ec0bb7da0dd05a63d655ac85e66e67acae616d6e0470bd6311e2c4a8c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e291d3ec0bb7da0dd05a63d655ac85e66e67acae616d6e0470bd6311e2c4a8c1->enter($__internal_e291d3ec0bb7da0dd05a63d655ac85e66e67acae616d6e0470bd6311e2c4a8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7114f30bd8b64e0c4ee65724b4001adab684e961743f8dda7c44e4da064d3e7e->leave($__internal_7114f30bd8b64e0c4ee65724b4001adab684e961743f8dda7c44e4da064d3e7e_prof);

        
        $__internal_e291d3ec0bb7da0dd05a63d655ac85e66e67acae616d6e0470bd6311e2c4a8c1->leave($__internal_e291d3ec0bb7da0dd05a63d655ac85e66e67acae616d6e0470bd6311e2c4a8c1_prof);

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
