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
        $__internal_cfe920af5ed5431b946f56d315d9c9abf3f048020bffc96d432df89ec35f3eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfe920af5ed5431b946f56d315d9c9abf3f048020bffc96d432df89ec35f3eaa->enter($__internal_cfe920af5ed5431b946f56d315d9c9abf3f048020bffc96d432df89ec35f3eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_346ea3968f22e28abe7d3d0a642a44d9f7c6fdfc7c215ad9fd073e003ab90965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_346ea3968f22e28abe7d3d0a642a44d9f7c6fdfc7c215ad9fd073e003ab90965->enter($__internal_346ea3968f22e28abe7d3d0a642a44d9f7c6fdfc7c215ad9fd073e003ab90965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfe920af5ed5431b946f56d315d9c9abf3f048020bffc96d432df89ec35f3eaa->leave($__internal_cfe920af5ed5431b946f56d315d9c9abf3f048020bffc96d432df89ec35f3eaa_prof);

        
        $__internal_346ea3968f22e28abe7d3d0a642a44d9f7c6fdfc7c215ad9fd073e003ab90965->leave($__internal_346ea3968f22e28abe7d3d0a642a44d9f7c6fdfc7c215ad9fd073e003ab90965_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01ac97c14a4659cc27a84300ebf423b20d3cc9af7d4a34cef6c7aefd35028555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ac97c14a4659cc27a84300ebf423b20d3cc9af7d4a34cef6c7aefd35028555->enter($__internal_01ac97c14a4659cc27a84300ebf423b20d3cc9af7d4a34cef6c7aefd35028555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_661f0f4bf2f29583addb5043e3d9f59712027bef2adce5ed75d4eed1aede4f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661f0f4bf2f29583addb5043e3d9f59712027bef2adce5ed75d4eed1aede4f62->enter($__internal_661f0f4bf2f29583addb5043e3d9f59712027bef2adce5ed75d4eed1aede4f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_661f0f4bf2f29583addb5043e3d9f59712027bef2adce5ed75d4eed1aede4f62->leave($__internal_661f0f4bf2f29583addb5043e3d9f59712027bef2adce5ed75d4eed1aede4f62_prof);

        
        $__internal_01ac97c14a4659cc27a84300ebf423b20d3cc9af7d4a34cef6c7aefd35028555->leave($__internal_01ac97c14a4659cc27a84300ebf423b20d3cc9af7d4a34cef6c7aefd35028555_prof);

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
