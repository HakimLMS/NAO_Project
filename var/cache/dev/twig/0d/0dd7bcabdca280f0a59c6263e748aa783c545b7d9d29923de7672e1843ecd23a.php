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
        $__internal_1906077f56cc231f3524edb1fc7d4ddade3fb531c5fa278828a6232d6ee44833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1906077f56cc231f3524edb1fc7d4ddade3fb531c5fa278828a6232d6ee44833->enter($__internal_1906077f56cc231f3524edb1fc7d4ddade3fb531c5fa278828a6232d6ee44833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_037173a27dabb3806ea686888edde9cf08a2eaa16c0abed932645d72b6750f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037173a27dabb3806ea686888edde9cf08a2eaa16c0abed932645d72b6750f14->enter($__internal_037173a27dabb3806ea686888edde9cf08a2eaa16c0abed932645d72b6750f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1906077f56cc231f3524edb1fc7d4ddade3fb531c5fa278828a6232d6ee44833->leave($__internal_1906077f56cc231f3524edb1fc7d4ddade3fb531c5fa278828a6232d6ee44833_prof);

        
        $__internal_037173a27dabb3806ea686888edde9cf08a2eaa16c0abed932645d72b6750f14->leave($__internal_037173a27dabb3806ea686888edde9cf08a2eaa16c0abed932645d72b6750f14_prof);

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
