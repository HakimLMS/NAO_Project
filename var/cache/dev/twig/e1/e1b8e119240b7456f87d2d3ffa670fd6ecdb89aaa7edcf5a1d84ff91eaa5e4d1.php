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
        $__internal_b705be31d30a8893ade63e5b933428b7302dd7f6fcb92098026de65acf174d75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b705be31d30a8893ade63e5b933428b7302dd7f6fcb92098026de65acf174d75->enter($__internal_b705be31d30a8893ade63e5b933428b7302dd7f6fcb92098026de65acf174d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_3908f90d83b888120627d5687c123b28aab74c570f192f6c9d9bb92b9119f577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3908f90d83b888120627d5687c123b28aab74c570f192f6c9d9bb92b9119f577->enter($__internal_3908f90d83b888120627d5687c123b28aab74c570f192f6c9d9bb92b9119f577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b705be31d30a8893ade63e5b933428b7302dd7f6fcb92098026de65acf174d75->leave($__internal_b705be31d30a8893ade63e5b933428b7302dd7f6fcb92098026de65acf174d75_prof);

        
        $__internal_3908f90d83b888120627d5687c123b28aab74c570f192f6c9d9bb92b9119f577->leave($__internal_3908f90d83b888120627d5687c123b28aab74c570f192f6c9d9bb92b9119f577_prof);

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
