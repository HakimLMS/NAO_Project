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
        $__internal_3a97c7a66f37c45980be8ce55db11591f2fd9c5f9fa559b46d360def3008cffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a97c7a66f37c45980be8ce55db11591f2fd9c5f9fa559b46d360def3008cffd->enter($__internal_3a97c7a66f37c45980be8ce55db11591f2fd9c5f9fa559b46d360def3008cffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_84d3cc6bdf172f204be98716c4f11bc0230d629f8a590c32ed7dd0b7ba4e8500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d3cc6bdf172f204be98716c4f11bc0230d629f8a590c32ed7dd0b7ba4e8500->enter($__internal_84d3cc6bdf172f204be98716c4f11bc0230d629f8a590c32ed7dd0b7ba4e8500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3a97c7a66f37c45980be8ce55db11591f2fd9c5f9fa559b46d360def3008cffd->leave($__internal_3a97c7a66f37c45980be8ce55db11591f2fd9c5f9fa559b46d360def3008cffd_prof);

        
        $__internal_84d3cc6bdf172f204be98716c4f11bc0230d629f8a590c32ed7dd0b7ba4e8500->leave($__internal_84d3cc6bdf172f204be98716c4f11bc0230d629f8a590c32ed7dd0b7ba4e8500_prof);

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
