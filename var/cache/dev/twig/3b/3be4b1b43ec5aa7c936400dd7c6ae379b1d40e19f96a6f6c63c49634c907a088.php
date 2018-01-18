<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_4cece701e1522cfd32ecad7d0f59ff211ecedeae5e07c72dd84071bb318435c0 extends Twig_Template
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
        $__internal_83d813c7682e4c4af494cbed934377472b6921e778c9863ebe24bcfbe787c4bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83d813c7682e4c4af494cbed934377472b6921e778c9863ebe24bcfbe787c4bd->enter($__internal_83d813c7682e4c4af494cbed934377472b6921e778c9863ebe24bcfbe787c4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_5d88e4e9742be14aa19524975235710024d3c684b86439985ef26057f1e48671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d88e4e9742be14aa19524975235710024d3c684b86439985ef26057f1e48671->enter($__internal_5d88e4e9742be14aa19524975235710024d3c684b86439985ef26057f1e48671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83d813c7682e4c4af494cbed934377472b6921e778c9863ebe24bcfbe787c4bd->leave($__internal_83d813c7682e4c4af494cbed934377472b6921e778c9863ebe24bcfbe787c4bd_prof);

        
        $__internal_5d88e4e9742be14aa19524975235710024d3c684b86439985ef26057f1e48671->leave($__internal_5d88e4e9742be14aa19524975235710024d3c684b86439985ef26057f1e48671_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_00b69a5502ba4b62a6e2b05d9d8499a2bb65b57c12fbdc02fe9e25f6c6727926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b69a5502ba4b62a6e2b05d9d8499a2bb65b57c12fbdc02fe9e25f6c6727926->enter($__internal_00b69a5502ba4b62a6e2b05d9d8499a2bb65b57c12fbdc02fe9e25f6c6727926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b2d9d95caddb44e7cdd7b57fede9b7b76519ffb28510e5965a7a71dc53150aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d9d95caddb44e7cdd7b57fede9b7b76519ffb28510e5965a7a71dc53150aaf->enter($__internal_b2d9d95caddb44e7cdd7b57fede9b7b76519ffb28510e5965a7a71dc53150aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_b2d9d95caddb44e7cdd7b57fede9b7b76519ffb28510e5965a7a71dc53150aaf->leave($__internal_b2d9d95caddb44e7cdd7b57fede9b7b76519ffb28510e5965a7a71dc53150aaf_prof);

        
        $__internal_00b69a5502ba4b62a6e2b05d9d8499a2bb65b57c12fbdc02fe9e25f6c6727926->leave($__internal_00b69a5502ba4b62a6e2b05d9d8499a2bb65b57c12fbdc02fe9e25f6c6727926_prof);

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
