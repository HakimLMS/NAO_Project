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
        $__internal_b1812b0dbc2ec765af4c04084ef7ea0b205f1c9a0d8989e2050812bb9730a306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1812b0dbc2ec765af4c04084ef7ea0b205f1c9a0d8989e2050812bb9730a306->enter($__internal_b1812b0dbc2ec765af4c04084ef7ea0b205f1c9a0d8989e2050812bb9730a306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_d014ba60a73fbc0f962c646827449add39c717ff8e69d1442a577f8f40f80090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d014ba60a73fbc0f962c646827449add39c717ff8e69d1442a577f8f40f80090->enter($__internal_d014ba60a73fbc0f962c646827449add39c717ff8e69d1442a577f8f40f80090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b1812b0dbc2ec765af4c04084ef7ea0b205f1c9a0d8989e2050812bb9730a306->leave($__internal_b1812b0dbc2ec765af4c04084ef7ea0b205f1c9a0d8989e2050812bb9730a306_prof);

        
        $__internal_d014ba60a73fbc0f962c646827449add39c717ff8e69d1442a577f8f40f80090->leave($__internal_d014ba60a73fbc0f962c646827449add39c717ff8e69d1442a577f8f40f80090_prof);

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
