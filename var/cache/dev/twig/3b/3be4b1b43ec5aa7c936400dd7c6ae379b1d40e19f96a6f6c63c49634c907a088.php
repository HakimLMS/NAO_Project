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
        $__internal_d0f7b387fd6b313dcb382b2ef48348d7a3fe003e8d4ed37b27a24b09bbc8998c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f7b387fd6b313dcb382b2ef48348d7a3fe003e8d4ed37b27a24b09bbc8998c->enter($__internal_d0f7b387fd6b313dcb382b2ef48348d7a3fe003e8d4ed37b27a24b09bbc8998c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_9d77312db3e678c3df1dd91e15beea31ae0e35070009b045d33369fafc420337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d77312db3e678c3df1dd91e15beea31ae0e35070009b045d33369fafc420337->enter($__internal_9d77312db3e678c3df1dd91e15beea31ae0e35070009b045d33369fafc420337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0f7b387fd6b313dcb382b2ef48348d7a3fe003e8d4ed37b27a24b09bbc8998c->leave($__internal_d0f7b387fd6b313dcb382b2ef48348d7a3fe003e8d4ed37b27a24b09bbc8998c_prof);

        
        $__internal_9d77312db3e678c3df1dd91e15beea31ae0e35070009b045d33369fafc420337->leave($__internal_9d77312db3e678c3df1dd91e15beea31ae0e35070009b045d33369fafc420337_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d631a30c1f64806a5de6d2437f6ce8202897b909afc48e9dc99630761838ad44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d631a30c1f64806a5de6d2437f6ce8202897b909afc48e9dc99630761838ad44->enter($__internal_d631a30c1f64806a5de6d2437f6ce8202897b909afc48e9dc99630761838ad44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c9fc1f5f5e0cf6c31655e5d2338feb3f48ace35f795a910a93b99be60fc65ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9fc1f5f5e0cf6c31655e5d2338feb3f48ace35f795a910a93b99be60fc65ac9->enter($__internal_c9fc1f5f5e0cf6c31655e5d2338feb3f48ace35f795a910a93b99be60fc65ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c9fc1f5f5e0cf6c31655e5d2338feb3f48ace35f795a910a93b99be60fc65ac9->leave($__internal_c9fc1f5f5e0cf6c31655e5d2338feb3f48ace35f795a910a93b99be60fc65ac9_prof);

        
        $__internal_d631a30c1f64806a5de6d2437f6ce8202897b909afc48e9dc99630761838ad44->leave($__internal_d631a30c1f64806a5de6d2437f6ce8202897b909afc48e9dc99630761838ad44_prof);

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
