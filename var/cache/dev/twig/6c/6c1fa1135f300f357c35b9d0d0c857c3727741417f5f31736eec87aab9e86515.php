<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_9954d744faf13849b7b6bd1d163b7fda1a8a362e2072b7ae5ef50f906f3934a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e548c55ba10d816cd6bca27cb7f0675e51291e628f7e3b9f428f340699276a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e548c55ba10d816cd6bca27cb7f0675e51291e628f7e3b9f428f340699276a21->enter($__internal_e548c55ba10d816cd6bca27cb7f0675e51291e628f7e3b9f428f340699276a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_eecf6ab48b3b85d17bf50cba956b2740079b5c3426439cad4012ccafe80bd451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eecf6ab48b3b85d17bf50cba956b2740079b5c3426439cad4012ccafe80bd451->enter($__internal_eecf6ab48b3b85d17bf50cba956b2740079b5c3426439cad4012ccafe80bd451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e548c55ba10d816cd6bca27cb7f0675e51291e628f7e3b9f428f340699276a21->leave($__internal_e548c55ba10d816cd6bca27cb7f0675e51291e628f7e3b9f428f340699276a21_prof);

        
        $__internal_eecf6ab48b3b85d17bf50cba956b2740079b5c3426439cad4012ccafe80bd451->leave($__internal_eecf6ab48b3b85d17bf50cba956b2740079b5c3426439cad4012ccafe80bd451_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b1d4348d94f95ca29d9561d63e062b059dda518a71786172221365c3474d2206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d4348d94f95ca29d9561d63e062b059dda518a71786172221365c3474d2206->enter($__internal_b1d4348d94f95ca29d9561d63e062b059dda518a71786172221365c3474d2206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_af98ec215840177c3a40d0b109a9605e70a12eba54463f4567c5aeb78ebbd28f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af98ec215840177c3a40d0b109a9605e70a12eba54463f4567c5aeb78ebbd28f->enter($__internal_af98ec215840177c3a40d0b109a9605e70a12eba54463f4567c5aeb78ebbd28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_af98ec215840177c3a40d0b109a9605e70a12eba54463f4567c5aeb78ebbd28f->leave($__internal_af98ec215840177c3a40d0b109a9605e70a12eba54463f4567c5aeb78ebbd28f_prof);

        
        $__internal_b1d4348d94f95ca29d9561d63e062b059dda518a71786172221365c3474d2206->leave($__internal_b1d4348d94f95ca29d9561d63e062b059dda518a71786172221365c3474d2206_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1edf08ebfabc9a7cfd32fcf1751688c827ee7e78baa013140629c60f9cd68a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1edf08ebfabc9a7cfd32fcf1751688c827ee7e78baa013140629c60f9cd68a6->enter($__internal_d1edf08ebfabc9a7cfd32fcf1751688c827ee7e78baa013140629c60f9cd68a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a8c2b626bf0f59b1e610d4c58d4de67bb43e45a7274ab75c8838a6532c14e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8c2b626bf0f59b1e610d4c58d4de67bb43e45a7274ab75c8838a6532c14e3e->enter($__internal_9a8c2b626bf0f59b1e610d4c58d4de67bb43e45a7274ab75c8838a6532c14e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_9a8c2b626bf0f59b1e610d4c58d4de67bb43e45a7274ab75c8838a6532c14e3e->leave($__internal_9a8c2b626bf0f59b1e610d4c58d4de67bb43e45a7274ab75c8838a6532c14e3e_prof);

        
        $__internal_d1edf08ebfabc9a7cfd32fcf1751688c827ee7e78baa013140629c60f9cd68a6->leave($__internal_d1edf08ebfabc9a7cfd32fcf1751688c827ee7e78baa013140629c60f9cd68a6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
