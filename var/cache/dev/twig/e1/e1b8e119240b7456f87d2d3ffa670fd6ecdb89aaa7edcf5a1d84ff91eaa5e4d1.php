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
        $__internal_90c61d5a1bbde0a1ed3ce5dae42ec91fb289bdacca7d1d07ef8f9bc8ed43e4b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90c61d5a1bbde0a1ed3ce5dae42ec91fb289bdacca7d1d07ef8f9bc8ed43e4b0->enter($__internal_90c61d5a1bbde0a1ed3ce5dae42ec91fb289bdacca7d1d07ef8f9bc8ed43e4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_4687a4720e224d7ed13b82cf31440eada4481b5783aac542b7d1e5ed8a878c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4687a4720e224d7ed13b82cf31440eada4481b5783aac542b7d1e5ed8a878c03->enter($__internal_4687a4720e224d7ed13b82cf31440eada4481b5783aac542b7d1e5ed8a878c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_90c61d5a1bbde0a1ed3ce5dae42ec91fb289bdacca7d1d07ef8f9bc8ed43e4b0->leave($__internal_90c61d5a1bbde0a1ed3ce5dae42ec91fb289bdacca7d1d07ef8f9bc8ed43e4b0_prof);

        
        $__internal_4687a4720e224d7ed13b82cf31440eada4481b5783aac542b7d1e5ed8a878c03->leave($__internal_4687a4720e224d7ed13b82cf31440eada4481b5783aac542b7d1e5ed8a878c03_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
