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
        $__internal_ebaea0c7350eec5966cca976727a3ef87de9d799b173134f803387349b1bed67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebaea0c7350eec5966cca976727a3ef87de9d799b173134f803387349b1bed67->enter($__internal_ebaea0c7350eec5966cca976727a3ef87de9d799b173134f803387349b1bed67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_19480f5a70761ca53ef60a3a81507adc024fb25d0f14f5c8ec025e882403cc90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19480f5a70761ca53ef60a3a81507adc024fb25d0f14f5c8ec025e882403cc90->enter($__internal_19480f5a70761ca53ef60a3a81507adc024fb25d0f14f5c8ec025e882403cc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebaea0c7350eec5966cca976727a3ef87de9d799b173134f803387349b1bed67->leave($__internal_ebaea0c7350eec5966cca976727a3ef87de9d799b173134f803387349b1bed67_prof);

        
        $__internal_19480f5a70761ca53ef60a3a81507adc024fb25d0f14f5c8ec025e882403cc90->leave($__internal_19480f5a70761ca53ef60a3a81507adc024fb25d0f14f5c8ec025e882403cc90_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fa9488f22c6a35493207424b46e9b132e57ac8832e5b965a0c95dce30194b7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9488f22c6a35493207424b46e9b132e57ac8832e5b965a0c95dce30194b7d1->enter($__internal_fa9488f22c6a35493207424b46e9b132e57ac8832e5b965a0c95dce30194b7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f6e4c2b4b8c0776bf201d9e8d846e2f26ff7b933fe8d43af582528ac97357b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e4c2b4b8c0776bf201d9e8d846e2f26ff7b933fe8d43af582528ac97357b1c->enter($__internal_f6e4c2b4b8c0776bf201d9e8d846e2f26ff7b933fe8d43af582528ac97357b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_f6e4c2b4b8c0776bf201d9e8d846e2f26ff7b933fe8d43af582528ac97357b1c->leave($__internal_f6e4c2b4b8c0776bf201d9e8d846e2f26ff7b933fe8d43af582528ac97357b1c_prof);

        
        $__internal_fa9488f22c6a35493207424b46e9b132e57ac8832e5b965a0c95dce30194b7d1->leave($__internal_fa9488f22c6a35493207424b46e9b132e57ac8832e5b965a0c95dce30194b7d1_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
