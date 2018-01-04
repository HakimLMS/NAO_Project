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
        $__internal_538428a8661e6c14dd53cbc5ebe09a8d273630711230a3a1e4a06e5bf1d92653 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_538428a8661e6c14dd53cbc5ebe09a8d273630711230a3a1e4a06e5bf1d92653->enter($__internal_538428a8661e6c14dd53cbc5ebe09a8d273630711230a3a1e4a06e5bf1d92653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_5ddc0749295633c085c1aa9acee831e7859f64218ae1f41599e0d5b11abb6d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ddc0749295633c085c1aa9acee831e7859f64218ae1f41599e0d5b11abb6d80->enter($__internal_5ddc0749295633c085c1aa9acee831e7859f64218ae1f41599e0d5b11abb6d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_538428a8661e6c14dd53cbc5ebe09a8d273630711230a3a1e4a06e5bf1d92653->leave($__internal_538428a8661e6c14dd53cbc5ebe09a8d273630711230a3a1e4a06e5bf1d92653_prof);

        
        $__internal_5ddc0749295633c085c1aa9acee831e7859f64218ae1f41599e0d5b11abb6d80->leave($__internal_5ddc0749295633c085c1aa9acee831e7859f64218ae1f41599e0d5b11abb6d80_prof);

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
