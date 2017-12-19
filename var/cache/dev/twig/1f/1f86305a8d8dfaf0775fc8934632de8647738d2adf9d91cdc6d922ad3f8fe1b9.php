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
        $__internal_7eef0615cec8a49981e81ff4ba67e70d3c9ec3479f41676f296fafd935f51fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eef0615cec8a49981e81ff4ba67e70d3c9ec3479f41676f296fafd935f51fd8->enter($__internal_7eef0615cec8a49981e81ff4ba67e70d3c9ec3479f41676f296fafd935f51fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_f97a2a0aa683585c20175479e03d1252cdc11c8909ac9bce658d5cb4b09bb9b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97a2a0aa683585c20175479e03d1252cdc11c8909ac9bce658d5cb4b09bb9b7->enter($__internal_f97a2a0aa683585c20175479e03d1252cdc11c8909ac9bce658d5cb4b09bb9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7eef0615cec8a49981e81ff4ba67e70d3c9ec3479f41676f296fafd935f51fd8->leave($__internal_7eef0615cec8a49981e81ff4ba67e70d3c9ec3479f41676f296fafd935f51fd8_prof);

        
        $__internal_f97a2a0aa683585c20175479e03d1252cdc11c8909ac9bce658d5cb4b09bb9b7->leave($__internal_f97a2a0aa683585c20175479e03d1252cdc11c8909ac9bce658d5cb4b09bb9b7_prof);

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
", "@Framework/Form/button_attributes.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
