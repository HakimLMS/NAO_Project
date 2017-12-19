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
        $__internal_c57d5cf2c8157834f4618828c6787785c20d88ef2ec811005908104a4a42bdbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c57d5cf2c8157834f4618828c6787785c20d88ef2ec811005908104a4a42bdbe->enter($__internal_c57d5cf2c8157834f4618828c6787785c20d88ef2ec811005908104a4a42bdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_6dbd1175dee303d5fb8b621e8136a7be1175e6f21046589b5cbd24c20c0dd19f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dbd1175dee303d5fb8b621e8136a7be1175e6f21046589b5cbd24c20c0dd19f->enter($__internal_6dbd1175dee303d5fb8b621e8136a7be1175e6f21046589b5cbd24c20c0dd19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c57d5cf2c8157834f4618828c6787785c20d88ef2ec811005908104a4a42bdbe->leave($__internal_c57d5cf2c8157834f4618828c6787785c20d88ef2ec811005908104a4a42bdbe_prof);

        
        $__internal_6dbd1175dee303d5fb8b621e8136a7be1175e6f21046589b5cbd24c20c0dd19f->leave($__internal_6dbd1175dee303d5fb8b621e8136a7be1175e6f21046589b5cbd24c20c0dd19f_prof);

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
