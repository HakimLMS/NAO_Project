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
        $__internal_69271287401a3e8225daf3c182b4371bed62a466cb9fb8d4a57d08f4047d4fa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69271287401a3e8225daf3c182b4371bed62a466cb9fb8d4a57d08f4047d4fa5->enter($__internal_69271287401a3e8225daf3c182b4371bed62a466cb9fb8d4a57d08f4047d4fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_42bbabd030483df3bb952ed3eb8d23aedbe6534e2405b5f7a045de67f154a052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42bbabd030483df3bb952ed3eb8d23aedbe6534e2405b5f7a045de67f154a052->enter($__internal_42bbabd030483df3bb952ed3eb8d23aedbe6534e2405b5f7a045de67f154a052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69271287401a3e8225daf3c182b4371bed62a466cb9fb8d4a57d08f4047d4fa5->leave($__internal_69271287401a3e8225daf3c182b4371bed62a466cb9fb8d4a57d08f4047d4fa5_prof);

        
        $__internal_42bbabd030483df3bb952ed3eb8d23aedbe6534e2405b5f7a045de67f154a052->leave($__internal_42bbabd030483df3bb952ed3eb8d23aedbe6534e2405b5f7a045de67f154a052_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_566530d620dd8ee98438259f0ee8ae31fa6d6dd01d4f705000db77984f2f3501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_566530d620dd8ee98438259f0ee8ae31fa6d6dd01d4f705000db77984f2f3501->enter($__internal_566530d620dd8ee98438259f0ee8ae31fa6d6dd01d4f705000db77984f2f3501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cedda45723e430e882d4e996c574c2e4727412bf17965161c0f882582f214785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cedda45723e430e882d4e996c574c2e4727412bf17965161c0f882582f214785->enter($__internal_cedda45723e430e882d4e996c574c2e4727412bf17965161c0f882582f214785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_cedda45723e430e882d4e996c574c2e4727412bf17965161c0f882582f214785->leave($__internal_cedda45723e430e882d4e996c574c2e4727412bf17965161c0f882582f214785_prof);

        
        $__internal_566530d620dd8ee98438259f0ee8ae31fa6d6dd01d4f705000db77984f2f3501->leave($__internal_566530d620dd8ee98438259f0ee8ae31fa6d6dd01d4f705000db77984f2f3501_prof);

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
