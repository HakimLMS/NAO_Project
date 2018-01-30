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
        $__internal_1cd5b376359d100e494069400b447b82ccd287c140ee94932b6a9c90a0d58cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cd5b376359d100e494069400b447b82ccd287c140ee94932b6a9c90a0d58cb5->enter($__internal_1cd5b376359d100e494069400b447b82ccd287c140ee94932b6a9c90a0d58cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0bbc8a73c62daf0cfbfd226b9f57c83d8ff630f33c74e052fa21cc896529527d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bbc8a73c62daf0cfbfd226b9f57c83d8ff630f33c74e052fa21cc896529527d->enter($__internal_0bbc8a73c62daf0cfbfd226b9f57c83d8ff630f33c74e052fa21cc896529527d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cd5b376359d100e494069400b447b82ccd287c140ee94932b6a9c90a0d58cb5->leave($__internal_1cd5b376359d100e494069400b447b82ccd287c140ee94932b6a9c90a0d58cb5_prof);

        
        $__internal_0bbc8a73c62daf0cfbfd226b9f57c83d8ff630f33c74e052fa21cc896529527d->leave($__internal_0bbc8a73c62daf0cfbfd226b9f57c83d8ff630f33c74e052fa21cc896529527d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_79e3334a0b0fca41d8ecd1a7a50c0bbffe61a3ee0bd2c2a76022a6b6140f2e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e3334a0b0fca41d8ecd1a7a50c0bbffe61a3ee0bd2c2a76022a6b6140f2e91->enter($__internal_79e3334a0b0fca41d8ecd1a7a50c0bbffe61a3ee0bd2c2a76022a6b6140f2e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_26f6b464359999d3b9d9e488ed8cd04a88ac1f9e2c48a59627473280c96f6755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f6b464359999d3b9d9e488ed8cd04a88ac1f9e2c48a59627473280c96f6755->enter($__internal_26f6b464359999d3b9d9e488ed8cd04a88ac1f9e2c48a59627473280c96f6755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_26f6b464359999d3b9d9e488ed8cd04a88ac1f9e2c48a59627473280c96f6755->leave($__internal_26f6b464359999d3b9d9e488ed8cd04a88ac1f9e2c48a59627473280c96f6755_prof);

        
        $__internal_79e3334a0b0fca41d8ecd1a7a50c0bbffe61a3ee0bd2c2a76022a6b6140f2e91->leave($__internal_79e3334a0b0fca41d8ecd1a7a50c0bbffe61a3ee0bd2c2a76022a6b6140f2e91_prof);

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
