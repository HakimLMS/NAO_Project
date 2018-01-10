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
        $__internal_1fa1efeae7c202a4a32c36ff58f57eb22b7c9e47eb810b7ec9157193174ca01d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa1efeae7c202a4a32c36ff58f57eb22b7c9e47eb810b7ec9157193174ca01d->enter($__internal_1fa1efeae7c202a4a32c36ff58f57eb22b7c9e47eb810b7ec9157193174ca01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/research.html.twig"));

        $__internal_186e8e285e410a353c7a2e6a5458f55835708ea392422cfb9f43d7c855cfe05c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186e8e285e410a353c7a2e6a5458f55835708ea392422cfb9f43d7c855cfe05c->enter($__internal_186e8e285e410a353c7a2e6a5458f55835708ea392422cfb9f43d7c855cfe05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/research.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fa1efeae7c202a4a32c36ff58f57eb22b7c9e47eb810b7ec9157193174ca01d->leave($__internal_1fa1efeae7c202a4a32c36ff58f57eb22b7c9e47eb810b7ec9157193174ca01d_prof);

        
        $__internal_186e8e285e410a353c7a2e6a5458f55835708ea392422cfb9f43d7c855cfe05c->leave($__internal_186e8e285e410a353c7a2e6a5458f55835708ea392422cfb9f43d7c855cfe05c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f55eb5a296d67786be9c4b71bfea7197f66ddec77026d135f0514ebc9b61781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f55eb5a296d67786be9c4b71bfea7197f66ddec77026d135f0514ebc9b61781->enter($__internal_1f55eb5a296d67786be9c4b71bfea7197f66ddec77026d135f0514ebc9b61781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_be615d0d99cb76229c03542548a0e51dae4f9d446da3e2dc97432afcf8c0b7fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be615d0d99cb76229c03542548a0e51dae4f9d446da3e2dc97432afcf8c0b7fe->enter($__internal_be615d0d99cb76229c03542548a0e51dae4f9d446da3e2dc97432afcf8c0b7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Recherche";
        
        $__internal_be615d0d99cb76229c03542548a0e51dae4f9d446da3e2dc97432afcf8c0b7fe->leave($__internal_be615d0d99cb76229c03542548a0e51dae4f9d446da3e2dc97432afcf8c0b7fe_prof);

        
        $__internal_1f55eb5a296d67786be9c4b71bfea7197f66ddec77026d135f0514ebc9b61781->leave($__internal_1f55eb5a296d67786be9c4b71bfea7197f66ddec77026d135f0514ebc9b61781_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_830f24a58cc97f5a2decaa94db9413033554e7861a832e7679c08eb4efd62ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_830f24a58cc97f5a2decaa94db9413033554e7861a832e7679c08eb4efd62ffa->enter($__internal_830f24a58cc97f5a2decaa94db9413033554e7861a832e7679c08eb4efd62ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48faaaaa85312a82c18118a3296523464caac206c6d44984d42c03f94c854608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48faaaaa85312a82c18118a3296523464caac206c6d44984d42c03f94c854608->enter($__internal_48faaaaa85312a82c18118a3296523464caac206c6d44984d42c03f94c854608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

";
        
        $__internal_48faaaaa85312a82c18118a3296523464caac206c6d44984d42c03f94c854608->leave($__internal_48faaaaa85312a82c18118a3296523464caac206c6d44984d42c03f94c854608_prof);

        
        $__internal_830f24a58cc97f5a2decaa94db9413033554e7861a832e7679c08eb4efd62ffa->leave($__internal_830f24a58cc97f5a2decaa94db9413033554e7861a832e7679c08eb4efd62ffa_prof);

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

{% endblock %}", "research/research.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\research\\research.html.twig");
    }
}
