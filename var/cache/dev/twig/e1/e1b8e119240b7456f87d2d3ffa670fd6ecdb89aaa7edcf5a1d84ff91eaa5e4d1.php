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
        $__internal_be97cf36791618de3f46c64807d374cc66e178bc2bfc9ced540b0eedba823df7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be97cf36791618de3f46c64807d374cc66e178bc2bfc9ced540b0eedba823df7->enter($__internal_be97cf36791618de3f46c64807d374cc66e178bc2bfc9ced540b0eedba823df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_02b7efa809a0f23370b18277f9c5124e90ab1210e56f4d707b6b69aa1c9482b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b7efa809a0f23370b18277f9c5124e90ab1210e56f4d707b6b69aa1c9482b5->enter($__internal_02b7efa809a0f23370b18277f9c5124e90ab1210e56f4d707b6b69aa1c9482b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_be97cf36791618de3f46c64807d374cc66e178bc2bfc9ced540b0eedba823df7->leave($__internal_be97cf36791618de3f46c64807d374cc66e178bc2bfc9ced540b0eedba823df7_prof);

        
        $__internal_02b7efa809a0f23370b18277f9c5124e90ab1210e56f4d707b6b69aa1c9482b5->leave($__internal_02b7efa809a0f23370b18277f9c5124e90ab1210e56f4d707b6b69aa1c9482b5_prof);

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
