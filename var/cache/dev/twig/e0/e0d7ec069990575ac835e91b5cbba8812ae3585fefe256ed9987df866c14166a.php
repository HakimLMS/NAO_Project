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
        $__internal_5a9c96a99e3db3db2b54299fba5af8e3920bd0ce9807bf9ac3c339a309d8269a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a9c96a99e3db3db2b54299fba5af8e3920bd0ce9807bf9ac3c339a309d8269a->enter($__internal_5a9c96a99e3db3db2b54299fba5af8e3920bd0ce9807bf9ac3c339a309d8269a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/research.html.twig"));

        $__internal_a61071004d55b584e5b4e32cdb2323ae62e871822bc65290984a6f27ca2b1087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61071004d55b584e5b4e32cdb2323ae62e871822bc65290984a6f27ca2b1087->enter($__internal_a61071004d55b584e5b4e32cdb2323ae62e871822bc65290984a6f27ca2b1087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/research.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a9c96a99e3db3db2b54299fba5af8e3920bd0ce9807bf9ac3c339a309d8269a->leave($__internal_5a9c96a99e3db3db2b54299fba5af8e3920bd0ce9807bf9ac3c339a309d8269a_prof);

        
        $__internal_a61071004d55b584e5b4e32cdb2323ae62e871822bc65290984a6f27ca2b1087->leave($__internal_a61071004d55b584e5b4e32cdb2323ae62e871822bc65290984a6f27ca2b1087_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b39713d08048fa667908de6e40cd54fda07bae4ec2f638361f4047109caa9c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b39713d08048fa667908de6e40cd54fda07bae4ec2f638361f4047109caa9c44->enter($__internal_b39713d08048fa667908de6e40cd54fda07bae4ec2f638361f4047109caa9c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2bdcdae7ff702d29d687740fa88573e36b5b690ffe4598759b11e9636cfbb830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bdcdae7ff702d29d687740fa88573e36b5b690ffe4598759b11e9636cfbb830->enter($__internal_2bdcdae7ff702d29d687740fa88573e36b5b690ffe4598759b11e9636cfbb830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Recherche";
        
        $__internal_2bdcdae7ff702d29d687740fa88573e36b5b690ffe4598759b11e9636cfbb830->leave($__internal_2bdcdae7ff702d29d687740fa88573e36b5b690ffe4598759b11e9636cfbb830_prof);

        
        $__internal_b39713d08048fa667908de6e40cd54fda07bae4ec2f638361f4047109caa9c44->leave($__internal_b39713d08048fa667908de6e40cd54fda07bae4ec2f638361f4047109caa9c44_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ca5adb665c9b88cbaf94a33260543f530bb8d98de9d8181a5f3e32e87acae9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca5adb665c9b88cbaf94a33260543f530bb8d98de9d8181a5f3e32e87acae9b->enter($__internal_2ca5adb665c9b88cbaf94a33260543f530bb8d98de9d8181a5f3e32e87acae9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fdcf2ec8df9b01f7deaff005b8ee03cf9a961ab6ebfab40d23cb5de392841bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdcf2ec8df9b01f7deaff005b8ee03cf9a961ab6ebfab40d23cb5de392841bca->enter($__internal_fdcf2ec8df9b01f7deaff005b8ee03cf9a961ab6ebfab40d23cb5de392841bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fdcf2ec8df9b01f7deaff005b8ee03cf9a961ab6ebfab40d23cb5de392841bca->leave($__internal_fdcf2ec8df9b01f7deaff005b8ee03cf9a961ab6ebfab40d23cb5de392841bca_prof);

        
        $__internal_2ca5adb665c9b88cbaf94a33260543f530bb8d98de9d8181a5f3e32e87acae9b->leave($__internal_2ca5adb665c9b88cbaf94a33260543f530bb8d98de9d8181a5f3e32e87acae9b_prof);

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

{% endblock %}", "research/research.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\research\\research.html.twig");
    }
}
