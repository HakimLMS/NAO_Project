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
        $__internal_3fcfaf37f8209687ba5ef09041970b98ffd680b94c617224e7d37f0e498269df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fcfaf37f8209687ba5ef09041970b98ffd680b94c617224e7d37f0e498269df->enter($__internal_3fcfaf37f8209687ba5ef09041970b98ffd680b94c617224e7d37f0e498269df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/modifyUser.html.twig"));

        $__internal_53b0551eaa47cf7ca6e358959c83b03f318549967bd1953fc4784f241b257c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b0551eaa47cf7ca6e358959c83b03f318549967bd1953fc4784f241b257c07->enter($__internal_53b0551eaa47cf7ca6e358959c83b03f318549967bd1953fc4784f241b257c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/modifyUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fcfaf37f8209687ba5ef09041970b98ffd680b94c617224e7d37f0e498269df->leave($__internal_3fcfaf37f8209687ba5ef09041970b98ffd680b94c617224e7d37f0e498269df_prof);

        
        $__internal_53b0551eaa47cf7ca6e358959c83b03f318549967bd1953fc4784f241b257c07->leave($__internal_53b0551eaa47cf7ca6e358959c83b03f318549967bd1953fc4784f241b257c07_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bb42da619b859b2a2b5d0e4d60cd5d4c2a40040914d91262010d2bfb751310e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bb42da619b859b2a2b5d0e4d60cd5d4c2a40040914d91262010d2bfb751310e->enter($__internal_0bb42da619b859b2a2b5d0e4d60cd5d4c2a40040914d91262010d2bfb751310e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_450ef09f9fef389dff4cf2fdf7d4be0f8449b042cf8a87d8aeaca8e69a5897c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450ef09f9fef389dff4cf2fdf7d4be0f8449b042cf8a87d8aeaca8e69a5897c4->enter($__internal_450ef09f9fef389dff4cf2fdf7d4be0f8449b042cf8a87d8aeaca8e69a5897c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_450ef09f9fef389dff4cf2fdf7d4be0f8449b042cf8a87d8aeaca8e69a5897c4->leave($__internal_450ef09f9fef389dff4cf2fdf7d4be0f8449b042cf8a87d8aeaca8e69a5897c4_prof);

        
        $__internal_0bb42da619b859b2a2b5d0e4d60cd5d4c2a40040914d91262010d2bfb751310e->leave($__internal_0bb42da619b859b2a2b5d0e4d60cd5d4c2a40040914d91262010d2bfb751310e_prof);

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
", "Administration/modifyUser.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\Administration\\modifyUser.html.twig");
    }
}
