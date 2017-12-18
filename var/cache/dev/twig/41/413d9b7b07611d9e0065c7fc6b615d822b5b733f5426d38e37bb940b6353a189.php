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
        $__internal_d64b8d7c88b26c7bde5bf603f69a880d22d253e21ec946d2f5c80f11a1410142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d64b8d7c88b26c7bde5bf603f69a880d22d253e21ec946d2f5c80f11a1410142->enter($__internal_d64b8d7c88b26c7bde5bf603f69a880d22d253e21ec946d2f5c80f11a1410142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_b273a8cf0d5a1af6046750c09e659c985a12261909c2a15acb41c6a82a5549d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b273a8cf0d5a1af6046750c09e659c985a12261909c2a15acb41c6a82a5549d6->enter($__internal_b273a8cf0d5a1af6046750c09e659c985a12261909c2a15acb41c6a82a5549d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d64b8d7c88b26c7bde5bf603f69a880d22d253e21ec946d2f5c80f11a1410142->leave($__internal_d64b8d7c88b26c7bde5bf603f69a880d22d253e21ec946d2f5c80f11a1410142_prof);

        
        $__internal_b273a8cf0d5a1af6046750c09e659c985a12261909c2a15acb41c6a82a5549d6->leave($__internal_b273a8cf0d5a1af6046750c09e659c985a12261909c2a15acb41c6a82a5549d6_prof);

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
