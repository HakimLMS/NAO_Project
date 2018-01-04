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
        $__internal_f26ffa0f020466422d51d67789b9d850996517e557b1ae1fd6fba8d54e9d305c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f26ffa0f020466422d51d67789b9d850996517e557b1ae1fd6fba8d54e9d305c->enter($__internal_f26ffa0f020466422d51d67789b9d850996517e557b1ae1fd6fba8d54e9d305c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ca218acf7e17c41e51713db5a01f6c2d64d3da638710518d167d9f84be41d68c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca218acf7e17c41e51713db5a01f6c2d64d3da638710518d167d9f84be41d68c->enter($__internal_ca218acf7e17c41e51713db5a01f6c2d64d3da638710518d167d9f84be41d68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f26ffa0f020466422d51d67789b9d850996517e557b1ae1fd6fba8d54e9d305c->leave($__internal_f26ffa0f020466422d51d67789b9d850996517e557b1ae1fd6fba8d54e9d305c_prof);

        
        $__internal_ca218acf7e17c41e51713db5a01f6c2d64d3da638710518d167d9f84be41d68c->leave($__internal_ca218acf7e17c41e51713db5a01f6c2d64d3da638710518d167d9f84be41d68c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a15e5e4d333f2152b2c9fdd7bf75b14a840131e36130d43c7113f1b4b3c7d1fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a15e5e4d333f2152b2c9fdd7bf75b14a840131e36130d43c7113f1b4b3c7d1fd->enter($__internal_a15e5e4d333f2152b2c9fdd7bf75b14a840131e36130d43c7113f1b4b3c7d1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_70c5b7e92a8d9608e221929da136174a66c484510158882a34b230e6b320fdcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c5b7e92a8d9608e221929da136174a66c484510158882a34b230e6b320fdcf->enter($__internal_70c5b7e92a8d9608e221929da136174a66c484510158882a34b230e6b320fdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_70c5b7e92a8d9608e221929da136174a66c484510158882a34b230e6b320fdcf->leave($__internal_70c5b7e92a8d9608e221929da136174a66c484510158882a34b230e6b320fdcf_prof);

        
        $__internal_a15e5e4d333f2152b2c9fdd7bf75b14a840131e36130d43c7113f1b4b3c7d1fd->leave($__internal_a15e5e4d333f2152b2c9fdd7bf75b14a840131e36130d43c7113f1b4b3c7d1fd_prof);

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
