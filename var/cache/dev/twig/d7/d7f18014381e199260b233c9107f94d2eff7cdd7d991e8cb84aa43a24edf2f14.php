<?php

/* Administration/modifyUser.html.twig */
class __TwigTemplate_8a33966796aac74b38105bccb9d1fad348643fac5e5ca66f7d23fe5a94f3396d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "Administration/modifyUser.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_736350ef3ffd6b3fd659b56cb43632a828b980c7901b292d1e0a6bf55fe2d642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_736350ef3ffd6b3fd659b56cb43632a828b980c7901b292d1e0a6bf55fe2d642->enter($__internal_736350ef3ffd6b3fd659b56cb43632a828b980c7901b292d1e0a6bf55fe2d642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/modifyUser.html.twig"));

        $__internal_e8421b5da0d2c775230ecde54758aede49e14487ec2b1b6126601e54ecd85f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8421b5da0d2c775230ecde54758aede49e14487ec2b1b6126601e54ecd85f60->enter($__internal_e8421b5da0d2c775230ecde54758aede49e14487ec2b1b6126601e54ecd85f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/modifyUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_736350ef3ffd6b3fd659b56cb43632a828b980c7901b292d1e0a6bf55fe2d642->leave($__internal_736350ef3ffd6b3fd659b56cb43632a828b980c7901b292d1e0a6bf55fe2d642_prof);

        
        $__internal_e8421b5da0d2c775230ecde54758aede49e14487ec2b1b6126601e54ecd85f60->leave($__internal_e8421b5da0d2c775230ecde54758aede49e14487ec2b1b6126601e54ecd85f60_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4ddda827d7405473d27c1c45319d715563072c90c2e985196d78a5ceead0633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ddda827d7405473d27c1c45319d715563072c90c2e985196d78a5ceead0633->enter($__internal_e4ddda827d7405473d27c1c45319d715563072c90c2e985196d78a5ceead0633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06a88860d5bdfe4f5e636a72712ae336cc8bfb54d72ee5b47cba37bd71b7d0ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a88860d5bdfe4f5e636a72712ae336cc8bfb54d72ee5b47cba37bd71b7d0ef->enter($__internal_06a88860d5bdfe4f5e636a72712ae336cc8bfb54d72ee5b47cba37bd71b7d0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_06a88860d5bdfe4f5e636a72712ae336cc8bfb54d72ee5b47cba37bd71b7d0ef->leave($__internal_06a88860d5bdfe4f5e636a72712ae336cc8bfb54d72ee5b47cba37bd71b7d0ef_prof);

        
        $__internal_e4ddda827d7405473d27c1c45319d715563072c90c2e985196d78a5ceead0633->leave($__internal_e4ddda827d7405473d27c1c45319d715563072c90c2e985196d78a5ceead0633_prof);

    }

    public function getTemplateName()
    {
        return "Administration/modifyUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}
{{ form_start(form) }}
{{ form_end(form) }}
{% endblock %}
", "Administration/modifyUser.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Administration\\modifyUser.html.twig");
    }
}
