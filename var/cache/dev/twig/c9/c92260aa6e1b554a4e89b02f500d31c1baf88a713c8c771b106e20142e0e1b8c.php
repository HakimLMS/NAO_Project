<?php

/* blog/modify.html.twig */
class __TwigTemplate_103d54cea413bf376ccbc8742700eeb35ced9969fc269686fff412e500ba2872 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "blog/modify.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14fb40c180ad37e416857cc92dc4cb092d0d4e25ac0d2794fae26bed787df768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14fb40c180ad37e416857cc92dc4cb092d0d4e25ac0d2794fae26bed787df768->enter($__internal_14fb40c180ad37e416857cc92dc4cb092d0d4e25ac0d2794fae26bed787df768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modify.html.twig"));

        $__internal_0aba6f635fd842630d80b40b1f1660ac14b6c8341592b866933b0c7b543f7db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aba6f635fd842630d80b40b1f1660ac14b6c8341592b866933b0c7b543f7db0->enter($__internal_0aba6f635fd842630d80b40b1f1660ac14b6c8341592b866933b0c7b543f7db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14fb40c180ad37e416857cc92dc4cb092d0d4e25ac0d2794fae26bed787df768->leave($__internal_14fb40c180ad37e416857cc92dc4cb092d0d4e25ac0d2794fae26bed787df768_prof);

        
        $__internal_0aba6f635fd842630d80b40b1f1660ac14b6c8341592b866933b0c7b543f7db0->leave($__internal_0aba6f635fd842630d80b40b1f1660ac14b6c8341592b866933b0c7b543f7db0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d866b7b20a74a322a147556f601ff1a339dec64c1e841268bbce4f0eed4e6998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d866b7b20a74a322a147556f601ff1a339dec64c1e841268bbce4f0eed4e6998->enter($__internal_d866b7b20a74a322a147556f601ff1a339dec64c1e841268bbce4f0eed4e6998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_76a1cef9250975422a2664168805d13512ccd7cb4a9f393b5918f178f5d0aa30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a1cef9250975422a2664168805d13512ccd7cb4a9f393b5918f178f5d0aa30->enter($__internal_76a1cef9250975422a2664168805d13512ccd7cb4a9f393b5918f178f5d0aa30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $this->displayBlock('script', $context, $blocks);
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_76a1cef9250975422a2664168805d13512ccd7cb4a9f393b5918f178f5d0aa30->leave($__internal_76a1cef9250975422a2664168805d13512ccd7cb4a9f393b5918f178f5d0aa30_prof);

        
        $__internal_d866b7b20a74a322a147556f601ff1a339dec64c1e841268bbce4f0eed4e6998->leave($__internal_d866b7b20a74a322a147556f601ff1a339dec64c1e841268bbce4f0eed4e6998_prof);

    }

    // line 5
    public function block_script($context, array $blocks = array())
    {
        $__internal_33476a18a6f9a8b3b8d669ac0c9259608f44c6030cb2d717a5bcd79f9a403dc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33476a18a6f9a8b3b8d669ac0c9259608f44c6030cb2d717a5bcd79f9a403dc1->enter($__internal_33476a18a6f9a8b3b8d669ac0c9259608f44c6030cb2d717a5bcd79f9a403dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_7649420f8613404695f1be2da1312afa29f9863b239ff8be2d6632c9ad615007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7649420f8613404695f1be2da1312afa29f9863b239ff8be2d6632c9ad615007->enter($__internal_7649420f8613404695f1be2da1312afa29f9863b239ff8be2d6632c9ad615007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 6
        echo "    <head>
        <script src=\"https://cloud.tinymce.com/stable/tinymce.min.js\"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
    </head>
    ";
        
        $__internal_7649420f8613404695f1be2da1312afa29f9863b239ff8be2d6632c9ad615007->leave($__internal_7649420f8613404695f1be2da1312afa29f9863b239ff8be2d6632c9ad615007_prof);

        
        $__internal_33476a18a6f9a8b3b8d669ac0c9259608f44c6030cb2d717a5bcd79f9a403dc1->leave($__internal_33476a18a6f9a8b3b8d669ac0c9259608f44c6030cb2d717a5bcd79f9a403dc1_prof);

    }

    public function getTemplateName()
    {
        return "blog/modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 6,  69 => 5,  57 => 12,  53 => 11,  50 => 5,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}
    {% block script %}
    <head>
        <script src=\"https://cloud.tinymce.com/stable/tinymce.min.js\"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
    </head>
    {% endblock %}
{{ form_start(form) }}
{{ form_end(form) }}
{% endblock %}
", "blog/modify.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\blog\\modify.html.twig");
    }
}
