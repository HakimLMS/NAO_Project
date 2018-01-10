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
        $__internal_99b3c120324b25747b1ad4c7a403016a180d26c03dabfb6c122e5a0295b26a7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b3c120324b25747b1ad4c7a403016a180d26c03dabfb6c122e5a0295b26a7d->enter($__internal_99b3c120324b25747b1ad4c7a403016a180d26c03dabfb6c122e5a0295b26a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_788621f23f9a5794d15458d62d08e8116ce0b1c08806f07eb87365740be248ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_788621f23f9a5794d15458d62d08e8116ce0b1c08806f07eb87365740be248ca->enter($__internal_788621f23f9a5794d15458d62d08e8116ce0b1c08806f07eb87365740be248ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_99b3c120324b25747b1ad4c7a403016a180d26c03dabfb6c122e5a0295b26a7d->leave($__internal_99b3c120324b25747b1ad4c7a403016a180d26c03dabfb6c122e5a0295b26a7d_prof);

        
        $__internal_788621f23f9a5794d15458d62d08e8116ce0b1c08806f07eb87365740be248ca->leave($__internal_788621f23f9a5794d15458d62d08e8116ce0b1c08806f07eb87365740be248ca_prof);

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
