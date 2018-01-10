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
        $__internal_a9412614d40a4dd358049995f31ba94a4e9fe55a2ed88062249332c66919b13c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9412614d40a4dd358049995f31ba94a4e9fe55a2ed88062249332c66919b13c->enter($__internal_a9412614d40a4dd358049995f31ba94a4e9fe55a2ed88062249332c66919b13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_f6e5f4f62a6b6018bb55ac67324bd98736160545c90763c3766f52de5b9b57e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e5f4f62a6b6018bb55ac67324bd98736160545c90763c3766f52de5b9b57e7->enter($__internal_f6e5f4f62a6b6018bb55ac67324bd98736160545c90763c3766f52de5b9b57e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a9412614d40a4dd358049995f31ba94a4e9fe55a2ed88062249332c66919b13c->leave($__internal_a9412614d40a4dd358049995f31ba94a4e9fe55a2ed88062249332c66919b13c_prof);

        
        $__internal_f6e5f4f62a6b6018bb55ac67324bd98736160545c90763c3766f52de5b9b57e7->leave($__internal_f6e5f4f62a6b6018bb55ac67324bd98736160545c90763c3766f52de5b9b57e7_prof);

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
