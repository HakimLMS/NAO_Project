<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_e4b3ae1c64899f7845e234bbf0396b68377ded4f49bc0fc844c6c736c78980e2 extends Twig_Template
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
        $__internal_3cb5e693ba2e331a986535a316a09e674eec195817741a6c1b6b0555e89caabd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cb5e693ba2e331a986535a316a09e674eec195817741a6c1b6b0555e89caabd->enter($__internal_3cb5e693ba2e331a986535a316a09e674eec195817741a6c1b6b0555e89caabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_0b5e3923081d8d7889c22ba6fa495abf6a529761f6abb93878333077d30f0347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5e3923081d8d7889c22ba6fa495abf6a529761f6abb93878333077d30f0347->enter($__internal_0b5e3923081d8d7889c22ba6fa495abf6a529761f6abb93878333077d30f0347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3cb5e693ba2e331a986535a316a09e674eec195817741a6c1b6b0555e89caabd->leave($__internal_3cb5e693ba2e331a986535a316a09e674eec195817741a6c1b6b0555e89caabd_prof);

        
        $__internal_0b5e3923081d8d7889c22ba6fa495abf6a529761f6abb93878333077d30f0347->leave($__internal_0b5e3923081d8d7889c22ba6fa495abf6a529761f6abb93878333077d30f0347_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
