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
        $__internal_66f82a0b62b9159564180de687b7ab72bd174e46a4b8e45ab587853906bf6a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66f82a0b62b9159564180de687b7ab72bd174e46a4b8e45ab587853906bf6a5c->enter($__internal_66f82a0b62b9159564180de687b7ab72bd174e46a4b8e45ab587853906bf6a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_437c569230df31c3e1ee9b6fa64bcaec867668ed1c02fe15190d8c95e8bd6101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437c569230df31c3e1ee9b6fa64bcaec867668ed1c02fe15190d8c95e8bd6101->enter($__internal_437c569230df31c3e1ee9b6fa64bcaec867668ed1c02fe15190d8c95e8bd6101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66f82a0b62b9159564180de687b7ab72bd174e46a4b8e45ab587853906bf6a5c->leave($__internal_66f82a0b62b9159564180de687b7ab72bd174e46a4b8e45ab587853906bf6a5c_prof);

        
        $__internal_437c569230df31c3e1ee9b6fa64bcaec867668ed1c02fe15190d8c95e8bd6101->leave($__internal_437c569230df31c3e1ee9b6fa64bcaec867668ed1c02fe15190d8c95e8bd6101_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9cfcd09496bbdeb1fc3c5b2643c18fab1b43232793422ebd0f77acd973990d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cfcd09496bbdeb1fc3c5b2643c18fab1b43232793422ebd0f77acd973990d59->enter($__internal_9cfcd09496bbdeb1fc3c5b2643c18fab1b43232793422ebd0f77acd973990d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_96d63275f7c865223ba16ce95cdcb91e700989bd69eb8a02e26a8a708d464bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d63275f7c865223ba16ce95cdcb91e700989bd69eb8a02e26a8a708d464bd2->enter($__internal_96d63275f7c865223ba16ce95cdcb91e700989bd69eb8a02e26a8a708d464bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_96d63275f7c865223ba16ce95cdcb91e700989bd69eb8a02e26a8a708d464bd2->leave($__internal_96d63275f7c865223ba16ce95cdcb91e700989bd69eb8a02e26a8a708d464bd2_prof);

        
        $__internal_9cfcd09496bbdeb1fc3c5b2643c18fab1b43232793422ebd0f77acd973990d59->leave($__internal_9cfcd09496bbdeb1fc3c5b2643c18fab1b43232793422ebd0f77acd973990d59_prof);

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
