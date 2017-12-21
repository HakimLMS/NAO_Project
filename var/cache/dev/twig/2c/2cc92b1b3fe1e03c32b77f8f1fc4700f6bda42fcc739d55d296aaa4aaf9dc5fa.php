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
        $__internal_7c142ca71d7e22a99603834992ae995fd514a8b0d5ded4ebe23f2c0b35260187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c142ca71d7e22a99603834992ae995fd514a8b0d5ded4ebe23f2c0b35260187->enter($__internal_7c142ca71d7e22a99603834992ae995fd514a8b0d5ded4ebe23f2c0b35260187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_5bcb634ab8f336240aa81d79fb382a8ffc2024c3c24c26be8d612e6a7cfe0445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bcb634ab8f336240aa81d79fb382a8ffc2024c3c24c26be8d612e6a7cfe0445->enter($__internal_5bcb634ab8f336240aa81d79fb382a8ffc2024c3c24c26be8d612e6a7cfe0445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c142ca71d7e22a99603834992ae995fd514a8b0d5ded4ebe23f2c0b35260187->leave($__internal_7c142ca71d7e22a99603834992ae995fd514a8b0d5ded4ebe23f2c0b35260187_prof);

        
        $__internal_5bcb634ab8f336240aa81d79fb382a8ffc2024c3c24c26be8d612e6a7cfe0445->leave($__internal_5bcb634ab8f336240aa81d79fb382a8ffc2024c3c24c26be8d612e6a7cfe0445_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_72d04942bd3a124e4a4d2cbd4203cca6ee4240fa4c371ba725d2bb8dae008028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72d04942bd3a124e4a4d2cbd4203cca6ee4240fa4c371ba725d2bb8dae008028->enter($__internal_72d04942bd3a124e4a4d2cbd4203cca6ee4240fa4c371ba725d2bb8dae008028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a160e5c46a7db294a99ed7e93f368478ad6c059a9eb8f0c8a9d9d9368cf1eb30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a160e5c46a7db294a99ed7e93f368478ad6c059a9eb8f0c8a9d9d9368cf1eb30->enter($__internal_a160e5c46a7db294a99ed7e93f368478ad6c059a9eb8f0c8a9d9d9368cf1eb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_a160e5c46a7db294a99ed7e93f368478ad6c059a9eb8f0c8a9d9d9368cf1eb30->leave($__internal_a160e5c46a7db294a99ed7e93f368478ad6c059a9eb8f0c8a9d9d9368cf1eb30_prof);

        
        $__internal_72d04942bd3a124e4a4d2cbd4203cca6ee4240fa4c371ba725d2bb8dae008028->leave($__internal_72d04942bd3a124e4a4d2cbd4203cca6ee4240fa4c371ba725d2bb8dae008028_prof);

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
