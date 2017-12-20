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
        $__internal_392ab578c27322995578919e2f7c4dc5acd22176064b5644105524c9ce8ac6eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392ab578c27322995578919e2f7c4dc5acd22176064b5644105524c9ce8ac6eb->enter($__internal_392ab578c27322995578919e2f7c4dc5acd22176064b5644105524c9ce8ac6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_8c4d5e5ab3665cf689a073b20ea2312314a673aa034f4e7a91b0a05d8194d6e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c4d5e5ab3665cf689a073b20ea2312314a673aa034f4e7a91b0a05d8194d6e4->enter($__internal_8c4d5e5ab3665cf689a073b20ea2312314a673aa034f4e7a91b0a05d8194d6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_392ab578c27322995578919e2f7c4dc5acd22176064b5644105524c9ce8ac6eb->leave($__internal_392ab578c27322995578919e2f7c4dc5acd22176064b5644105524c9ce8ac6eb_prof);

        
        $__internal_8c4d5e5ab3665cf689a073b20ea2312314a673aa034f4e7a91b0a05d8194d6e4->leave($__internal_8c4d5e5ab3665cf689a073b20ea2312314a673aa034f4e7a91b0a05d8194d6e4_prof);

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
