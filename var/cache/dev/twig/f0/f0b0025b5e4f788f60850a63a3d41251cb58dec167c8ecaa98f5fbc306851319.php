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
        $__internal_fadb6ab789f8b2d908c9494b285aad14c98bac0bd2fc98d600b5b9d311cb7186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fadb6ab789f8b2d908c9494b285aad14c98bac0bd2fc98d600b5b9d311cb7186->enter($__internal_fadb6ab789f8b2d908c9494b285aad14c98bac0bd2fc98d600b5b9d311cb7186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_08d8d5ff48f6144d90624a0de2653b7cc511d3c17246daa32fe22f4f99958192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d8d5ff48f6144d90624a0de2653b7cc511d3c17246daa32fe22f4f99958192->enter($__internal_08d8d5ff48f6144d90624a0de2653b7cc511d3c17246daa32fe22f4f99958192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_fadb6ab789f8b2d908c9494b285aad14c98bac0bd2fc98d600b5b9d311cb7186->leave($__internal_fadb6ab789f8b2d908c9494b285aad14c98bac0bd2fc98d600b5b9d311cb7186_prof);

        
        $__internal_08d8d5ff48f6144d90624a0de2653b7cc511d3c17246daa32fe22f4f99958192->leave($__internal_08d8d5ff48f6144d90624a0de2653b7cc511d3c17246daa32fe22f4f99958192_prof);

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
