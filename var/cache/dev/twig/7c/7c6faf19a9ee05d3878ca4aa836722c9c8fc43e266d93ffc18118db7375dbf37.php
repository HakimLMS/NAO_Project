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
        $__internal_c96b16b68ace12a49d8d0a216e5100882adc8027681ae71536367d9ecc79b04c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c96b16b68ace12a49d8d0a216e5100882adc8027681ae71536367d9ecc79b04c->enter($__internal_c96b16b68ace12a49d8d0a216e5100882adc8027681ae71536367d9ecc79b04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e24f9835c6444bc2cfc52789b13fa333f2232cf172c88c4308f3959d369dc72c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e24f9835c6444bc2cfc52789b13fa333f2232cf172c88c4308f3959d369dc72c->enter($__internal_e24f9835c6444bc2cfc52789b13fa333f2232cf172c88c4308f3959d369dc72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c96b16b68ace12a49d8d0a216e5100882adc8027681ae71536367d9ecc79b04c->leave($__internal_c96b16b68ace12a49d8d0a216e5100882adc8027681ae71536367d9ecc79b04c_prof);

        
        $__internal_e24f9835c6444bc2cfc52789b13fa333f2232cf172c88c4308f3959d369dc72c->leave($__internal_e24f9835c6444bc2cfc52789b13fa333f2232cf172c88c4308f3959d369dc72c_prof);

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
