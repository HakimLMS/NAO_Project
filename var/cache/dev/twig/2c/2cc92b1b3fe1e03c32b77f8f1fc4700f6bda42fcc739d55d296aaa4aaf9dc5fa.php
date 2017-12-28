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
        $__internal_ffa08065c77e9ed051fe79499c5f24eb166491fc63e6dbb14040a62dfe9dc393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa08065c77e9ed051fe79499c5f24eb166491fc63e6dbb14040a62dfe9dc393->enter($__internal_ffa08065c77e9ed051fe79499c5f24eb166491fc63e6dbb14040a62dfe9dc393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ead9511fd34ddf7bd7ac714173e1bf73a15e45e7c07a5569517dfbd738b55a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead9511fd34ddf7bd7ac714173e1bf73a15e45e7c07a5569517dfbd738b55a46->enter($__internal_ead9511fd34ddf7bd7ac714173e1bf73a15e45e7c07a5569517dfbd738b55a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffa08065c77e9ed051fe79499c5f24eb166491fc63e6dbb14040a62dfe9dc393->leave($__internal_ffa08065c77e9ed051fe79499c5f24eb166491fc63e6dbb14040a62dfe9dc393_prof);

        
        $__internal_ead9511fd34ddf7bd7ac714173e1bf73a15e45e7c07a5569517dfbd738b55a46->leave($__internal_ead9511fd34ddf7bd7ac714173e1bf73a15e45e7c07a5569517dfbd738b55a46_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3914d527ae9b57df2cac9f2d1910e14adb515f517cc7f134c2f2ba7c4bdfeac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3914d527ae9b57df2cac9f2d1910e14adb515f517cc7f134c2f2ba7c4bdfeac4->enter($__internal_3914d527ae9b57df2cac9f2d1910e14adb515f517cc7f134c2f2ba7c4bdfeac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2369e5baf1c6156ff043eaf57919a98f80e977a07eb91e4eb86a1807521e2673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2369e5baf1c6156ff043eaf57919a98f80e977a07eb91e4eb86a1807521e2673->enter($__internal_2369e5baf1c6156ff043eaf57919a98f80e977a07eb91e4eb86a1807521e2673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_2369e5baf1c6156ff043eaf57919a98f80e977a07eb91e4eb86a1807521e2673->leave($__internal_2369e5baf1c6156ff043eaf57919a98f80e977a07eb91e4eb86a1807521e2673_prof);

        
        $__internal_3914d527ae9b57df2cac9f2d1910e14adb515f517cc7f134c2f2ba7c4bdfeac4->leave($__internal_3914d527ae9b57df2cac9f2d1910e14adb515f517cc7f134c2f2ba7c4bdfeac4_prof);

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
