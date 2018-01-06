<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_2e9b50132fcef10bd1c6eb4088873cb63b1d299fb927082f3c441bd0a6f22b37 extends Twig_Template
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
        $__internal_8e75be62c20dfa7a2d78488289b074d3c3a702e2c76ba8d04b9d3bb4ded27b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e75be62c20dfa7a2d78488289b074d3c3a702e2c76ba8d04b9d3bb4ded27b52->enter($__internal_8e75be62c20dfa7a2d78488289b074d3c3a702e2c76ba8d04b9d3bb4ded27b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_cdb562a278fd7f6c6cf50b606662a9a947752bdcecb071d8e64f82ea5c03555b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb562a278fd7f6c6cf50b606662a9a947752bdcecb071d8e64f82ea5c03555b->enter($__internal_cdb562a278fd7f6c6cf50b606662a9a947752bdcecb071d8e64f82ea5c03555b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8e75be62c20dfa7a2d78488289b074d3c3a702e2c76ba8d04b9d3bb4ded27b52->leave($__internal_8e75be62c20dfa7a2d78488289b074d3c3a702e2c76ba8d04b9d3bb4ded27b52_prof);

        
        $__internal_cdb562a278fd7f6c6cf50b606662a9a947752bdcecb071d8e64f82ea5c03555b->leave($__internal_cdb562a278fd7f6c6cf50b606662a9a947752bdcecb071d8e64f82ea5c03555b_prof);

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
