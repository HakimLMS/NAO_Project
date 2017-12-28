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
        $__internal_4be94e0a6f1219df478ef5a7992677bf194881292a24aa259b2b29be0a740702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be94e0a6f1219df478ef5a7992677bf194881292a24aa259b2b29be0a740702->enter($__internal_4be94e0a6f1219df478ef5a7992677bf194881292a24aa259b2b29be0a740702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_084f255afe3ea97b869c57103e23ae8c274aced1a47bbcca0772fb682970344f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084f255afe3ea97b869c57103e23ae8c274aced1a47bbcca0772fb682970344f->enter($__internal_084f255afe3ea97b869c57103e23ae8c274aced1a47bbcca0772fb682970344f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4be94e0a6f1219df478ef5a7992677bf194881292a24aa259b2b29be0a740702->leave($__internal_4be94e0a6f1219df478ef5a7992677bf194881292a24aa259b2b29be0a740702_prof);

        
        $__internal_084f255afe3ea97b869c57103e23ae8c274aced1a47bbcca0772fb682970344f->leave($__internal_084f255afe3ea97b869c57103e23ae8c274aced1a47bbcca0772fb682970344f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_45210aef57caa087b9d40985b522d94a06db7c0a344c6f523fb550ba9ec469e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45210aef57caa087b9d40985b522d94a06db7c0a344c6f523fb550ba9ec469e1->enter($__internal_45210aef57caa087b9d40985b522d94a06db7c0a344c6f523fb550ba9ec469e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bdcdc8dc91883101eea9033e28c2d355e0f4a0bcc94461622697304a3bd32c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdcdc8dc91883101eea9033e28c2d355e0f4a0bcc94461622697304a3bd32c22->enter($__internal_bdcdc8dc91883101eea9033e28c2d355e0f4a0bcc94461622697304a3bd32c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_bdcdc8dc91883101eea9033e28c2d355e0f4a0bcc94461622697304a3bd32c22->leave($__internal_bdcdc8dc91883101eea9033e28c2d355e0f4a0bcc94461622697304a3bd32c22_prof);

        
        $__internal_45210aef57caa087b9d40985b522d94a06db7c0a344c6f523fb550ba9ec469e1->leave($__internal_45210aef57caa087b9d40985b522d94a06db7c0a344c6f523fb550ba9ec469e1_prof);

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
