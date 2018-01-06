<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2a5fd5b3999a6a6e53295c30a0c6dc369156bcbecd87308d6be069aa3069a3b2 extends Twig_Template
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
        $__internal_bb49a9f7e3869cf6106cbb5ef34177d9462a7a691bff62ee133e8c181634bd57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb49a9f7e3869cf6106cbb5ef34177d9462a7a691bff62ee133e8c181634bd57->enter($__internal_bb49a9f7e3869cf6106cbb5ef34177d9462a7a691bff62ee133e8c181634bd57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_52a044d551eb3c567c9383f094a3a82f40cdbfca5c0e0862d49734466529c002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a044d551eb3c567c9383f094a3a82f40cdbfca5c0e0862d49734466529c002->enter($__internal_52a044d551eb3c567c9383f094a3a82f40cdbfca5c0e0862d49734466529c002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_bb49a9f7e3869cf6106cbb5ef34177d9462a7a691bff62ee133e8c181634bd57->leave($__internal_bb49a9f7e3869cf6106cbb5ef34177d9462a7a691bff62ee133e8c181634bd57_prof);

        
        $__internal_52a044d551eb3c567c9383f094a3a82f40cdbfca5c0e0862d49734466529c002->leave($__internal_52a044d551eb3c567c9383f094a3a82f40cdbfca5c0e0862d49734466529c002_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
