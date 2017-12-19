<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9927e15d5e96a2afdf9bf86a760475c67d0b70de9f3d2f5ec17794a1401e62c1 extends Twig_Template
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
        $__internal_305d3e0918d6f2f6ffb4a6fc46d1ceefb3e175f173325159bf4e3bf8e3cc2b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305d3e0918d6f2f6ffb4a6fc46d1ceefb3e175f173325159bf4e3bf8e3cc2b15->enter($__internal_305d3e0918d6f2f6ffb4a6fc46d1ceefb3e175f173325159bf4e3bf8e3cc2b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_28d8933022e3a404add8290ec854c5dbcf2a4d7ee210b469359afb7f6c7548a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d8933022e3a404add8290ec854c5dbcf2a4d7ee210b469359afb7f6c7548a0->enter($__internal_28d8933022e3a404add8290ec854c5dbcf2a4d7ee210b469359afb7f6c7548a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_305d3e0918d6f2f6ffb4a6fc46d1ceefb3e175f173325159bf4e3bf8e3cc2b15->leave($__internal_305d3e0918d6f2f6ffb4a6fc46d1ceefb3e175f173325159bf4e3bf8e3cc2b15_prof);

        
        $__internal_28d8933022e3a404add8290ec854c5dbcf2a4d7ee210b469359afb7f6c7548a0->leave($__internal_28d8933022e3a404add8290ec854c5dbcf2a4d7ee210b469359afb7f6c7548a0_prof);

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
