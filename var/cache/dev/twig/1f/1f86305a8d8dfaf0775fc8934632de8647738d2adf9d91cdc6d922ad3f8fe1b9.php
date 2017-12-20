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
        $__internal_80f86a19df89edae314fa6235aee28ddbe1a327dd676639836dc4a810bb11610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f86a19df89edae314fa6235aee28ddbe1a327dd676639836dc4a810bb11610->enter($__internal_80f86a19df89edae314fa6235aee28ddbe1a327dd676639836dc4a810bb11610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_cbde702f71c5e95861fe5ccf3e9cf7812b9e0120c94c91df9a1262e5990df2da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbde702f71c5e95861fe5ccf3e9cf7812b9e0120c94c91df9a1262e5990df2da->enter($__internal_cbde702f71c5e95861fe5ccf3e9cf7812b9e0120c94c91df9a1262e5990df2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_80f86a19df89edae314fa6235aee28ddbe1a327dd676639836dc4a810bb11610->leave($__internal_80f86a19df89edae314fa6235aee28ddbe1a327dd676639836dc4a810bb11610_prof);

        
        $__internal_cbde702f71c5e95861fe5ccf3e9cf7812b9e0120c94c91df9a1262e5990df2da->leave($__internal_cbde702f71c5e95861fe5ccf3e9cf7812b9e0120c94c91df9a1262e5990df2da_prof);

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
