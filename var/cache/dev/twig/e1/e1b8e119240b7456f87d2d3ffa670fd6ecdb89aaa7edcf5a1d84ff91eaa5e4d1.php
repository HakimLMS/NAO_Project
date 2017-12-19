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
        $__internal_45a6fb44ada191a22063bfea94565f0e334ec18523da20e15918e51d7f18e879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a6fb44ada191a22063bfea94565f0e334ec18523da20e15918e51d7f18e879->enter($__internal_45a6fb44ada191a22063bfea94565f0e334ec18523da20e15918e51d7f18e879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_9650d051682822628457019961ce6de8f6b6cbba796c479ccf603630cb05c6d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9650d051682822628457019961ce6de8f6b6cbba796c479ccf603630cb05c6d9->enter($__internal_9650d051682822628457019961ce6de8f6b6cbba796c479ccf603630cb05c6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_45a6fb44ada191a22063bfea94565f0e334ec18523da20e15918e51d7f18e879->leave($__internal_45a6fb44ada191a22063bfea94565f0e334ec18523da20e15918e51d7f18e879_prof);

        
        $__internal_9650d051682822628457019961ce6de8f6b6cbba796c479ccf603630cb05c6d9->leave($__internal_9650d051682822628457019961ce6de8f6b6cbba796c479ccf603630cb05c6d9_prof);

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
