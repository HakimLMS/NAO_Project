<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_3741b9de6cd1e4bc7140b3204a4b0d242ad6843666c9367c068344487fc3574a extends Twig_Template
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
        $__internal_744ecb8ac09c65cf3e63d8b5a44d48ff728c9f5e62782bc116c886908525bbdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_744ecb8ac09c65cf3e63d8b5a44d48ff728c9f5e62782bc116c886908525bbdb->enter($__internal_744ecb8ac09c65cf3e63d8b5a44d48ff728c9f5e62782bc116c886908525bbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_07bed3fcad9275cd0dad365e05e0a8e7b7eb302b3d1c0ad1cea26f9c0cf0b021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bed3fcad9275cd0dad365e05e0a8e7b7eb302b3d1c0ad1cea26f9c0cf0b021->enter($__internal_07bed3fcad9275cd0dad365e05e0a8e7b7eb302b3d1c0ad1cea26f9c0cf0b021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_744ecb8ac09c65cf3e63d8b5a44d48ff728c9f5e62782bc116c886908525bbdb->leave($__internal_744ecb8ac09c65cf3e63d8b5a44d48ff728c9f5e62782bc116c886908525bbdb_prof);

        
        $__internal_07bed3fcad9275cd0dad365e05e0a8e7b7eb302b3d1c0ad1cea26f9c0cf0b021->leave($__internal_07bed3fcad9275cd0dad365e05e0a8e7b7eb302b3d1c0ad1cea26f9c0cf0b021_prof);

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
