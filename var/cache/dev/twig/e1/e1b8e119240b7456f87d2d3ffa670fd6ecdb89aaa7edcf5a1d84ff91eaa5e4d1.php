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
        $__internal_23c71819573db6d3110e253fcb38344f5dd307ed9d60ef5ccbae1d0fabef49bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23c71819573db6d3110e253fcb38344f5dd307ed9d60ef5ccbae1d0fabef49bd->enter($__internal_23c71819573db6d3110e253fcb38344f5dd307ed9d60ef5ccbae1d0fabef49bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_5d7614fb81ab4e5e2c98245ca6f1fd4d78ddad627451df52088adcd1e9eaaa30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7614fb81ab4e5e2c98245ca6f1fd4d78ddad627451df52088adcd1e9eaaa30->enter($__internal_5d7614fb81ab4e5e2c98245ca6f1fd4d78ddad627451df52088adcd1e9eaaa30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_23c71819573db6d3110e253fcb38344f5dd307ed9d60ef5ccbae1d0fabef49bd->leave($__internal_23c71819573db6d3110e253fcb38344f5dd307ed9d60ef5ccbae1d0fabef49bd_prof);

        
        $__internal_5d7614fb81ab4e5e2c98245ca6f1fd4d78ddad627451df52088adcd1e9eaaa30->leave($__internal_5d7614fb81ab4e5e2c98245ca6f1fd4d78ddad627451df52088adcd1e9eaaa30_prof);

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
