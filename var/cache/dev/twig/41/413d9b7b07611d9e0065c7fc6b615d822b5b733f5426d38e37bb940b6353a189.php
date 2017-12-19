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
        $__internal_be65ba33e7c779e474cc55c0e6b2a281fcbbbaab95ed8bfc5ab5bcc70e141413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be65ba33e7c779e474cc55c0e6b2a281fcbbbaab95ed8bfc5ab5bcc70e141413->enter($__internal_be65ba33e7c779e474cc55c0e6b2a281fcbbbaab95ed8bfc5ab5bcc70e141413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_41c0200d7ec8a6c48810e69f392e5bdc337585180ccaabd40e2f8046323c2f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c0200d7ec8a6c48810e69f392e5bdc337585180ccaabd40e2f8046323c2f2f->enter($__internal_41c0200d7ec8a6c48810e69f392e5bdc337585180ccaabd40e2f8046323c2f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_be65ba33e7c779e474cc55c0e6b2a281fcbbbaab95ed8bfc5ab5bcc70e141413->leave($__internal_be65ba33e7c779e474cc55c0e6b2a281fcbbbaab95ed8bfc5ab5bcc70e141413_prof);

        
        $__internal_41c0200d7ec8a6c48810e69f392e5bdc337585180ccaabd40e2f8046323c2f2f->leave($__internal_41c0200d7ec8a6c48810e69f392e5bdc337585180ccaabd40e2f8046323c2f2f_prof);

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
