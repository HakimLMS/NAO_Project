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
        $__internal_5007ff2d01762ebc4f341a84ef40667628a2ae570d60676ac46cb128309940ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5007ff2d01762ebc4f341a84ef40667628a2ae570d60676ac46cb128309940ed->enter($__internal_5007ff2d01762ebc4f341a84ef40667628a2ae570d60676ac46cb128309940ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_10aa932137e1d79769c9ac737e485bdc44d80f79ac5d5513b0a98885b787a92c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10aa932137e1d79769c9ac737e485bdc44d80f79ac5d5513b0a98885b787a92c->enter($__internal_10aa932137e1d79769c9ac737e485bdc44d80f79ac5d5513b0a98885b787a92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_5007ff2d01762ebc4f341a84ef40667628a2ae570d60676ac46cb128309940ed->leave($__internal_5007ff2d01762ebc4f341a84ef40667628a2ae570d60676ac46cb128309940ed_prof);

        
        $__internal_10aa932137e1d79769c9ac737e485bdc44d80f79ac5d5513b0a98885b787a92c->leave($__internal_10aa932137e1d79769c9ac737e485bdc44d80f79ac5d5513b0a98885b787a92c_prof);

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
