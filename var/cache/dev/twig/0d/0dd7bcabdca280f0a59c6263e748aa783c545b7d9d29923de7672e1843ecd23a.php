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
        $__internal_f7c3de693be5859e1e69760c3eb9cad8798fe3060b2c6608d2ba809b53116c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7c3de693be5859e1e69760c3eb9cad8798fe3060b2c6608d2ba809b53116c3e->enter($__internal_f7c3de693be5859e1e69760c3eb9cad8798fe3060b2c6608d2ba809b53116c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_20dd3faf50f74fdf03d738d9c8102e364df69625b457a5f99658ef9e31719301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20dd3faf50f74fdf03d738d9c8102e364df69625b457a5f99658ef9e31719301->enter($__internal_20dd3faf50f74fdf03d738d9c8102e364df69625b457a5f99658ef9e31719301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f7c3de693be5859e1e69760c3eb9cad8798fe3060b2c6608d2ba809b53116c3e->leave($__internal_f7c3de693be5859e1e69760c3eb9cad8798fe3060b2c6608d2ba809b53116c3e_prof);

        
        $__internal_20dd3faf50f74fdf03d738d9c8102e364df69625b457a5f99658ef9e31719301->leave($__internal_20dd3faf50f74fdf03d738d9c8102e364df69625b457a5f99658ef9e31719301_prof);

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
