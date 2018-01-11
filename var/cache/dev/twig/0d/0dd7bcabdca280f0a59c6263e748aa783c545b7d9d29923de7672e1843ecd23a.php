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
        $__internal_80bcbe638f3928ec8d6db15c57a0fedf5c99b55cec24148de1894c472b73f673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80bcbe638f3928ec8d6db15c57a0fedf5c99b55cec24148de1894c472b73f673->enter($__internal_80bcbe638f3928ec8d6db15c57a0fedf5c99b55cec24148de1894c472b73f673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_3f49cf908e69b0b5ea7c109dc36c8f5d6eace206d502e37c15bd4a85ca1600c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f49cf908e69b0b5ea7c109dc36c8f5d6eace206d502e37c15bd4a85ca1600c1->enter($__internal_3f49cf908e69b0b5ea7c109dc36c8f5d6eace206d502e37c15bd4a85ca1600c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_80bcbe638f3928ec8d6db15c57a0fedf5c99b55cec24148de1894c472b73f673->leave($__internal_80bcbe638f3928ec8d6db15c57a0fedf5c99b55cec24148de1894c472b73f673_prof);

        
        $__internal_3f49cf908e69b0b5ea7c109dc36c8f5d6eace206d502e37c15bd4a85ca1600c1->leave($__internal_3f49cf908e69b0b5ea7c109dc36c8f5d6eace206d502e37c15bd4a85ca1600c1_prof);

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
