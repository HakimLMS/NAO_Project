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
        $__internal_111c201695989d4c600272e00d18908c284a4e39a8b99db1d13e8ab5cdff286f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_111c201695989d4c600272e00d18908c284a4e39a8b99db1d13e8ab5cdff286f->enter($__internal_111c201695989d4c600272e00d18908c284a4e39a8b99db1d13e8ab5cdff286f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_da6b1384f3d00d9a7f0cb9b8a460e194489a71f2e7ee1373c7cc4c427d878e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da6b1384f3d00d9a7f0cb9b8a460e194489a71f2e7ee1373c7cc4c427d878e70->enter($__internal_da6b1384f3d00d9a7f0cb9b8a460e194489a71f2e7ee1373c7cc4c427d878e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_111c201695989d4c600272e00d18908c284a4e39a8b99db1d13e8ab5cdff286f->leave($__internal_111c201695989d4c600272e00d18908c284a4e39a8b99db1d13e8ab5cdff286f_prof);

        
        $__internal_da6b1384f3d00d9a7f0cb9b8a460e194489a71f2e7ee1373c7cc4c427d878e70->leave($__internal_da6b1384f3d00d9a7f0cb9b8a460e194489a71f2e7ee1373c7cc4c427d878e70_prof);

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
