<?php

/* research/research.html.twig */
class __TwigTemplate_9b3bf040c3be46edf0979c44b36f3e55b837a52fbe064e6b9e876489eb738e98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "research/research.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71516b7c6729a384ba8246633b9977925551e0a1c5d053b0c45d6063fbf51024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71516b7c6729a384ba8246633b9977925551e0a1c5d053b0c45d6063fbf51024->enter($__internal_71516b7c6729a384ba8246633b9977925551e0a1c5d053b0c45d6063fbf51024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/research.html.twig"));

        $__internal_ddc41019c12533b9150fe47180065b43a80619d35a95023ddf609115fa8180b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc41019c12533b9150fe47180065b43a80619d35a95023ddf609115fa8180b5->enter($__internal_ddc41019c12533b9150fe47180065b43a80619d35a95023ddf609115fa8180b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/research.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71516b7c6729a384ba8246633b9977925551e0a1c5d053b0c45d6063fbf51024->leave($__internal_71516b7c6729a384ba8246633b9977925551e0a1c5d053b0c45d6063fbf51024_prof);

        
        $__internal_ddc41019c12533b9150fe47180065b43a80619d35a95023ddf609115fa8180b5->leave($__internal_ddc41019c12533b9150fe47180065b43a80619d35a95023ddf609115fa8180b5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_433da4b8068fe75776f28a0b6ed33bab222e296bbfd327f25964ba2e4d3c4738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_433da4b8068fe75776f28a0b6ed33bab222e296bbfd327f25964ba2e4d3c4738->enter($__internal_433da4b8068fe75776f28a0b6ed33bab222e296bbfd327f25964ba2e4d3c4738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c846b67f052eb2d45d736ac901bdc8d33dd9152bd88832e9672960a276b132f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c846b67f052eb2d45d736ac901bdc8d33dd9152bd88832e9672960a276b132f3->enter($__internal_c846b67f052eb2d45d736ac901bdc8d33dd9152bd88832e9672960a276b132f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Recherche";
        
        $__internal_c846b67f052eb2d45d736ac901bdc8d33dd9152bd88832e9672960a276b132f3->leave($__internal_c846b67f052eb2d45d736ac901bdc8d33dd9152bd88832e9672960a276b132f3_prof);

        
        $__internal_433da4b8068fe75776f28a0b6ed33bab222e296bbfd327f25964ba2e4d3c4738->leave($__internal_433da4b8068fe75776f28a0b6ed33bab222e296bbfd327f25964ba2e4d3c4738_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e38349acf6e1a3eb6f6675d86af236f5d4b7ae87d02c599f209b251cf4437d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e38349acf6e1a3eb6f6675d86af236f5d4b7ae87d02c599f209b251cf4437d4->enter($__internal_9e38349acf6e1a3eb6f6675d86af236f5d4b7ae87d02c599f209b251cf4437d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec5ace1b4bc072b72fec6f36278b3d13ebb3f5442dad0140f9d64105f395c092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5ace1b4bc072b72fec6f36278b3d13ebb3f5442dad0140f9d64105f395c092->enter($__internal_ec5ace1b4bc072b72fec6f36278b3d13ebb3f5442dad0140f9d64105f395c092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start');
        echo "

\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        echo "

\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "vern_name", array()), 'row');
        echo "

\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "Rechercher", array()), 'row');
        echo "

\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'rest');
        echo "

\t";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), 'form_end');
        echo "

\t<div id=\"resultats-recherche\">
\t\t
\t</div>

";
        
        $__internal_ec5ace1b4bc072b72fec6f36278b3d13ebb3f5442dad0140f9d64105f395c092->leave($__internal_ec5ace1b4bc072b72fec6f36278b3d13ebb3f5442dad0140f9d64105f395c092_prof);

        
        $__internal_9e38349acf6e1a3eb6f6675d86af236f5d4b7ae87d02c599f209b251cf4437d4->leave($__internal_9e38349acf6e1a3eb6f6675d86af236f5d4b7ae87d02c599f209b251cf4437d4_prof);

    }

    public function getTemplateName()
    {
        return "research/research.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 17,  91 => 15,  86 => 13,  81 => 11,  76 => 9,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Recherche{% endblock %} 

{% block body %}

\t{{ form_start(form) }}

\t{{ form_errors(form) }}

\t{{ form_row(form.vern_name) }}

\t{{ form_row(form.Rechercher) }}

\t{{ form_rest(form) }}

\t{{ form_end(form) }}

\t<div id=\"resultats-recherche\">
\t\t
\t</div>

{% endblock %}", "research/research.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\research\\research.html.twig");
    }
}
