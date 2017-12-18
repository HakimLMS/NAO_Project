<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e4f549a6da753ec84f9f491277260a77eb295a88bf2ca7d7340c0c62a4ba67dc extends Twig_Template
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
        $__internal_14f9e94d448f20e2e6120c35c61fd89fee25f0ca67bfbc5dc016300288ff7db0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14f9e94d448f20e2e6120c35c61fd89fee25f0ca67bfbc5dc016300288ff7db0->enter($__internal_14f9e94d448f20e2e6120c35c61fd89fee25f0ca67bfbc5dc016300288ff7db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_37c7dfc0a05bf2dde037216d171701aef1d40c07e77a4d28230497fe38b7bab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c7dfc0a05bf2dde037216d171701aef1d40c07e77a4d28230497fe38b7bab2->enter($__internal_37c7dfc0a05bf2dde037216d171701aef1d40c07e77a4d28230497fe38b7bab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_14f9e94d448f20e2e6120c35c61fd89fee25f0ca67bfbc5dc016300288ff7db0->leave($__internal_14f9e94d448f20e2e6120c35c61fd89fee25f0ca67bfbc5dc016300288ff7db0_prof);

        
        $__internal_37c7dfc0a05bf2dde037216d171701aef1d40c07e77a4d28230497fe38b7bab2->leave($__internal_37c7dfc0a05bf2dde037216d171701aef1d40c07e77a4d28230497fe38b7bab2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
