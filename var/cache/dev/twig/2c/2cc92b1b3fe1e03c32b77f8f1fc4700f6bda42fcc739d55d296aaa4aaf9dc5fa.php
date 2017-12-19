<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_1e9217906ec7095356c4aa31220c32ff59fd14d03491bb9b175bb8922da15a7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0cd68dc4a1b9f15ea0bc92d456dff25988e03c72fb770d189ebc697472f9170b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd68dc4a1b9f15ea0bc92d456dff25988e03c72fb770d189ebc697472f9170b->enter($__internal_0cd68dc4a1b9f15ea0bc92d456dff25988e03c72fb770d189ebc697472f9170b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_71850be2f7d75a424a14d072c9b57658eaaa114a1d2f0811e7c6ecbd7d187952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71850be2f7d75a424a14d072c9b57658eaaa114a1d2f0811e7c6ecbd7d187952->enter($__internal_71850be2f7d75a424a14d072c9b57658eaaa114a1d2f0811e7c6ecbd7d187952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cd68dc4a1b9f15ea0bc92d456dff25988e03c72fb770d189ebc697472f9170b->leave($__internal_0cd68dc4a1b9f15ea0bc92d456dff25988e03c72fb770d189ebc697472f9170b_prof);

        
        $__internal_71850be2f7d75a424a14d072c9b57658eaaa114a1d2f0811e7c6ecbd7d187952->leave($__internal_71850be2f7d75a424a14d072c9b57658eaaa114a1d2f0811e7c6ecbd7d187952_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e9214fdbefdf4ebed77ce973a9197f701019faa9d428a5a8f04455a405735820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9214fdbefdf4ebed77ce973a9197f701019faa9d428a5a8f04455a405735820->enter($__internal_e9214fdbefdf4ebed77ce973a9197f701019faa9d428a5a8f04455a405735820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fe6c724dc8fac16054abf1ddca2a87c702de938d609af3b1ed678f78e88c47f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6c724dc8fac16054abf1ddca2a87c702de938d609af3b1ed678f78e88c47f5->enter($__internal_fe6c724dc8fac16054abf1ddca2a87c702de938d609af3b1ed678f78e88c47f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_fe6c724dc8fac16054abf1ddca2a87c702de938d609af3b1ed678f78e88c47f5->leave($__internal_fe6c724dc8fac16054abf1ddca2a87c702de938d609af3b1ed678f78e88c47f5_prof);

        
        $__internal_e9214fdbefdf4ebed77ce973a9197f701019faa9d428a5a8f04455a405735820->leave($__internal_e9214fdbefdf4ebed77ce973a9197f701019faa9d428a5a8f04455a405735820_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
