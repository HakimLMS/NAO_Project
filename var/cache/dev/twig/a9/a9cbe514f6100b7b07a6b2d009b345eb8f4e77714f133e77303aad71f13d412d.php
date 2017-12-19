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
        $__internal_51b21e5ebd4c494eeb00759530b4be4f5e043c702ec8d5a3b2bfec28a5578f3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51b21e5ebd4c494eeb00759530b4be4f5e043c702ec8d5a3b2bfec28a5578f3f->enter($__internal_51b21e5ebd4c494eeb00759530b4be4f5e043c702ec8d5a3b2bfec28a5578f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_b0e1b228bb04952647cde5ddc656970d05577fa2da92ba3c3776b746e13c4d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e1b228bb04952647cde5ddc656970d05577fa2da92ba3c3776b746e13c4d07->enter($__internal_b0e1b228bb04952647cde5ddc656970d05577fa2da92ba3c3776b746e13c4d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_51b21e5ebd4c494eeb00759530b4be4f5e043c702ec8d5a3b2bfec28a5578f3f->leave($__internal_51b21e5ebd4c494eeb00759530b4be4f5e043c702ec8d5a3b2bfec28a5578f3f_prof);

        
        $__internal_b0e1b228bb04952647cde5ddc656970d05577fa2da92ba3c3776b746e13c4d07->leave($__internal_b0e1b228bb04952647cde5ddc656970d05577fa2da92ba3c3776b746e13c4d07_prof);

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
", "@Framework/Form/textarea_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
