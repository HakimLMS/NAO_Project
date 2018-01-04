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
        $__internal_66caa6aaf21837f48bfc9a2c7316a8ac127116d3ffcdf65ee3dfd4604b35adc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66caa6aaf21837f48bfc9a2c7316a8ac127116d3ffcdf65ee3dfd4604b35adc8->enter($__internal_66caa6aaf21837f48bfc9a2c7316a8ac127116d3ffcdf65ee3dfd4604b35adc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_019e959c0a541039f89c64b2e146c23b10cc0a9fb098a53ef98585e10e76caee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019e959c0a541039f89c64b2e146c23b10cc0a9fb098a53ef98585e10e76caee->enter($__internal_019e959c0a541039f89c64b2e146c23b10cc0a9fb098a53ef98585e10e76caee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_66caa6aaf21837f48bfc9a2c7316a8ac127116d3ffcdf65ee3dfd4604b35adc8->leave($__internal_66caa6aaf21837f48bfc9a2c7316a8ac127116d3ffcdf65ee3dfd4604b35adc8_prof);

        
        $__internal_019e959c0a541039f89c64b2e146c23b10cc0a9fb098a53ef98585e10e76caee->leave($__internal_019e959c0a541039f89c64b2e146c23b10cc0a9fb098a53ef98585e10e76caee_prof);

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
