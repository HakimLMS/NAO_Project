<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_80d02f63201924a459e27289518963361ddd8007a9bf00e607f14050e743b37a extends Twig_Template
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
        $__internal_03ef5d0605288f0cf4c8870200cf9d4401875badc883bf56817a413ee15fcad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ef5d0605288f0cf4c8870200cf9d4401875badc883bf56817a413ee15fcad2->enter($__internal_03ef5d0605288f0cf4c8870200cf9d4401875badc883bf56817a413ee15fcad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_ba370ecfc00a64762f4f13f4c3f06af66cdf8b5d97a7923b95a980c715a3a769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba370ecfc00a64762f4f13f4c3f06af66cdf8b5d97a7923b95a980c715a3a769->enter($__internal_ba370ecfc00a64762f4f13f4c3f06af66cdf8b5d97a7923b95a980c715a3a769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_03ef5d0605288f0cf4c8870200cf9d4401875badc883bf56817a413ee15fcad2->leave($__internal_03ef5d0605288f0cf4c8870200cf9d4401875badc883bf56817a413ee15fcad2_prof);

        
        $__internal_ba370ecfc00a64762f4f13f4c3f06af66cdf8b5d97a7923b95a980c715a3a769->leave($__internal_ba370ecfc00a64762f4f13f4c3f06af66cdf8b5d97a7923b95a980c715a3a769_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
