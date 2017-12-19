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
        $__internal_63103d12b0d8b7370c3720e807e0e0aa4d6847c862a99304aa87e2b43e6b8fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63103d12b0d8b7370c3720e807e0e0aa4d6847c862a99304aa87e2b43e6b8fab->enter($__internal_63103d12b0d8b7370c3720e807e0e0aa4d6847c862a99304aa87e2b43e6b8fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_beacc93ed0a92203d81461944aee3f0dd87aca0c504741685301adf093d5ffee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beacc93ed0a92203d81461944aee3f0dd87aca0c504741685301adf093d5ffee->enter($__internal_beacc93ed0a92203d81461944aee3f0dd87aca0c504741685301adf093d5ffee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_63103d12b0d8b7370c3720e807e0e0aa4d6847c862a99304aa87e2b43e6b8fab->leave($__internal_63103d12b0d8b7370c3720e807e0e0aa4d6847c862a99304aa87e2b43e6b8fab_prof);

        
        $__internal_beacc93ed0a92203d81461944aee3f0dd87aca0c504741685301adf093d5ffee->leave($__internal_beacc93ed0a92203d81461944aee3f0dd87aca0c504741685301adf093d5ffee_prof);

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
