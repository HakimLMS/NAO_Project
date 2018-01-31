<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b29d9d7b601760fcc34c421b1eb30042a7b2126d6dc2ce17aa70f9e5d1752695 extends Twig_Template
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
        $__internal_17eeab1faa7b9d62eef81da06b19b63308c707e5a9d4d0ca8dda31e8aee7d6b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17eeab1faa7b9d62eef81da06b19b63308c707e5a9d4d0ca8dda31e8aee7d6b6->enter($__internal_17eeab1faa7b9d62eef81da06b19b63308c707e5a9d4d0ca8dda31e8aee7d6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_9f70b9b2978a4a9057181eb0e4f78b26faed4b73fef1d0b76df4e9cd58e35871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f70b9b2978a4a9057181eb0e4f78b26faed4b73fef1d0b76df4e9cd58e35871->enter($__internal_9f70b9b2978a4a9057181eb0e4f78b26faed4b73fef1d0b76df4e9cd58e35871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_17eeab1faa7b9d62eef81da06b19b63308c707e5a9d4d0ca8dda31e8aee7d6b6->leave($__internal_17eeab1faa7b9d62eef81da06b19b63308c707e5a9d4d0ca8dda31e8aee7d6b6_prof);

        
        $__internal_9f70b9b2978a4a9057181eb0e4f78b26faed4b73fef1d0b76df4e9cd58e35871->leave($__internal_9f70b9b2978a4a9057181eb0e4f78b26faed4b73fef1d0b76df4e9cd58e35871_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
