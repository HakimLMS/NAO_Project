<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_fa859260f8f33e61847520b60dbe5a544f725e3ceaccc48ae3d7b73b367b318a extends Twig_Template
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
        $__internal_6f3f53093c130d833a5c02523d25c8c1cd8e46fbe3c7318f38be10cc1517e026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f3f53093c130d833a5c02523d25c8c1cd8e46fbe3c7318f38be10cc1517e026->enter($__internal_6f3f53093c130d833a5c02523d25c8c1cd8e46fbe3c7318f38be10cc1517e026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_c0fd12249ca5a246d19dd38d16e2802871e607887fd8851c38dcbed2a86ab7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0fd12249ca5a246d19dd38d16e2802871e607887fd8851c38dcbed2a86ab7e7->enter($__internal_c0fd12249ca5a246d19dd38d16e2802871e607887fd8851c38dcbed2a86ab7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6f3f53093c130d833a5c02523d25c8c1cd8e46fbe3c7318f38be10cc1517e026->leave($__internal_6f3f53093c130d833a5c02523d25c8c1cd8e46fbe3c7318f38be10cc1517e026_prof);

        
        $__internal_c0fd12249ca5a246d19dd38d16e2802871e607887fd8851c38dcbed2a86ab7e7->leave($__internal_c0fd12249ca5a246d19dd38d16e2802871e607887fd8851c38dcbed2a86ab7e7_prof);

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
", "@Framework/Form/widget_attributes.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
