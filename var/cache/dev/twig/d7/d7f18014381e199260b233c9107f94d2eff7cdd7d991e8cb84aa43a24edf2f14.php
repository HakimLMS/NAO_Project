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
        $__internal_db58abbc112a6e83d8aa9b0751e78235cf0a0c17511f07f7559f6d80f5acf4c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db58abbc112a6e83d8aa9b0751e78235cf0a0c17511f07f7559f6d80f5acf4c2->enter($__internal_db58abbc112a6e83d8aa9b0751e78235cf0a0c17511f07f7559f6d80f5acf4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/modifyUser.html.twig"));

        $__internal_e94cb00c1727f480205ad2dc217af794d246fd0b47095880ef019bfb4464041e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94cb00c1727f480205ad2dc217af794d246fd0b47095880ef019bfb4464041e->enter($__internal_e94cb00c1727f480205ad2dc217af794d246fd0b47095880ef019bfb4464041e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/modifyUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db58abbc112a6e83d8aa9b0751e78235cf0a0c17511f07f7559f6d80f5acf4c2->leave($__internal_db58abbc112a6e83d8aa9b0751e78235cf0a0c17511f07f7559f6d80f5acf4c2_prof);

        
        $__internal_e94cb00c1727f480205ad2dc217af794d246fd0b47095880ef019bfb4464041e->leave($__internal_e94cb00c1727f480205ad2dc217af794d246fd0b47095880ef019bfb4464041e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bc3c8fb8d00e63bea2b693d392a6df625fb799c026d2d28a81cd73f455f90a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc3c8fb8d00e63bea2b693d392a6df625fb799c026d2d28a81cd73f455f90a1->enter($__internal_1bc3c8fb8d00e63bea2b693d392a6df625fb799c026d2d28a81cd73f455f90a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0293dadd626444013e9137b9395aac42c4cc1522d780f11b7eb24e70d5a6693d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0293dadd626444013e9137b9395aac42c4cc1522d780f11b7eb24e70d5a6693d->enter($__internal_0293dadd626444013e9137b9395aac42c4cc1522d780f11b7eb24e70d5a6693d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_0293dadd626444013e9137b9395aac42c4cc1522d780f11b7eb24e70d5a6693d->leave($__internal_0293dadd626444013e9137b9395aac42c4cc1522d780f11b7eb24e70d5a6693d_prof);

        
        $__internal_1bc3c8fb8d00e63bea2b693d392a6df625fb799c026d2d28a81cd73f455f90a1->leave($__internal_1bc3c8fb8d00e63bea2b693d392a6df625fb799c026d2d28a81cd73f455f90a1_prof);

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
