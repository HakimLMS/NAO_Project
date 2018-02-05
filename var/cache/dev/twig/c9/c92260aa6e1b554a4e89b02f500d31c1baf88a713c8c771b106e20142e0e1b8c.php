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
        $__internal_9702b5dd7015636e2d864554a731299223529377bf896a1b8bcda846956882f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9702b5dd7015636e2d864554a731299223529377bf896a1b8bcda846956882f9->enter($__internal_9702b5dd7015636e2d864554a731299223529377bf896a1b8bcda846956882f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modify.html.twig"));

        $__internal_77fd2b025482b44fd1079ed09f6b1308bb1d9a07a5bf5ea125f112afcb9f8212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fd2b025482b44fd1079ed09f6b1308bb1d9a07a5bf5ea125f112afcb9f8212->enter($__internal_77fd2b025482b44fd1079ed09f6b1308bb1d9a07a5bf5ea125f112afcb9f8212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9702b5dd7015636e2d864554a731299223529377bf896a1b8bcda846956882f9->leave($__internal_9702b5dd7015636e2d864554a731299223529377bf896a1b8bcda846956882f9_prof);

        
        $__internal_77fd2b025482b44fd1079ed09f6b1308bb1d9a07a5bf5ea125f112afcb9f8212->leave($__internal_77fd2b025482b44fd1079ed09f6b1308bb1d9a07a5bf5ea125f112afcb9f8212_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_94d775ca3d28f7cf772fa4e3b682d447521f378ec67b9112b76b092bdd509b79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94d775ca3d28f7cf772fa4e3b682d447521f378ec67b9112b76b092bdd509b79->enter($__internal_94d775ca3d28f7cf772fa4e3b682d447521f378ec67b9112b76b092bdd509b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c3150305e39d9b78678421866775a57a6ea1861d0bd1cb8063699f277bf6505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3150305e39d9b78678421866775a57a6ea1861d0bd1cb8063699f277bf6505->enter($__internal_0c3150305e39d9b78678421866775a57a6ea1861d0bd1cb8063699f277bf6505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0c3150305e39d9b78678421866775a57a6ea1861d0bd1cb8063699f277bf6505->leave($__internal_0c3150305e39d9b78678421866775a57a6ea1861d0bd1cb8063699f277bf6505_prof);

        
        $__internal_94d775ca3d28f7cf772fa4e3b682d447521f378ec67b9112b76b092bdd509b79->leave($__internal_94d775ca3d28f7cf772fa4e3b682d447521f378ec67b9112b76b092bdd509b79_prof);

    }

    // line 5
    public function block_script($context, array $blocks = array())
    {
        $__internal_6c9fa9cff2d8574963e32b25a6f79bfb6236a7d944c214308baf7848fde8f6a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c9fa9cff2d8574963e32b25a6f79bfb6236a7d944c214308baf7848fde8f6a8->enter($__internal_6c9fa9cff2d8574963e32b25a6f79bfb6236a7d944c214308baf7848fde8f6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_1c5f789accec73aa96f7ca69990f8c76ce559906128f8965637e3ba8e6d0eca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c5f789accec73aa96f7ca69990f8c76ce559906128f8965637e3ba8e6d0eca6->enter($__internal_1c5f789accec73aa96f7ca69990f8c76ce559906128f8965637e3ba8e6d0eca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 6
        echo "    <head>
        <script src=\"https://cloud.tinymce.com/stable/tinymce.min.js\"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
    </head>
    ";
        
        $__internal_1c5f789accec73aa96f7ca69990f8c76ce559906128f8965637e3ba8e6d0eca6->leave($__internal_1c5f789accec73aa96f7ca69990f8c76ce559906128f8965637e3ba8e6d0eca6_prof);

        
        $__internal_6c9fa9cff2d8574963e32b25a6f79bfb6236a7d944c214308baf7848fde8f6a8->leave($__internal_6c9fa9cff2d8574963e32b25a6f79bfb6236a7d944c214308baf7848fde8f6a8_prof);

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
