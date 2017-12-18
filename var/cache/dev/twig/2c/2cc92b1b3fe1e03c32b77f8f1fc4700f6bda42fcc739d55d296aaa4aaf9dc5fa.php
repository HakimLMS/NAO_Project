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
        $__internal_8fe37679fdc0a1107f68d01f89d7da199b0363d3a2057695cd0e599f55f90160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fe37679fdc0a1107f68d01f89d7da199b0363d3a2057695cd0e599f55f90160->enter($__internal_8fe37679fdc0a1107f68d01f89d7da199b0363d3a2057695cd0e599f55f90160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_97ecc80d07b55a22f85878c5118f901b6f22343a6a20e1dd27f8a655c58cfcbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ecc80d07b55a22f85878c5118f901b6f22343a6a20e1dd27f8a655c58cfcbf->enter($__internal_97ecc80d07b55a22f85878c5118f901b6f22343a6a20e1dd27f8a655c58cfcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fe37679fdc0a1107f68d01f89d7da199b0363d3a2057695cd0e599f55f90160->leave($__internal_8fe37679fdc0a1107f68d01f89d7da199b0363d3a2057695cd0e599f55f90160_prof);

        
        $__internal_97ecc80d07b55a22f85878c5118f901b6f22343a6a20e1dd27f8a655c58cfcbf->leave($__internal_97ecc80d07b55a22f85878c5118f901b6f22343a6a20e1dd27f8a655c58cfcbf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_040cf7e5b642cceed0125967d84061601b8d2850e35f8022af54682ca2b3f274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040cf7e5b642cceed0125967d84061601b8d2850e35f8022af54682ca2b3f274->enter($__internal_040cf7e5b642cceed0125967d84061601b8d2850e35f8022af54682ca2b3f274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bc19315ae005389e115fc2415e2088f5d2317975ba03f3ae2d22dbfaf3b8bebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc19315ae005389e115fc2415e2088f5d2317975ba03f3ae2d22dbfaf3b8bebf->enter($__internal_bc19315ae005389e115fc2415e2088f5d2317975ba03f3ae2d22dbfaf3b8bebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_bc19315ae005389e115fc2415e2088f5d2317975ba03f3ae2d22dbfaf3b8bebf->leave($__internal_bc19315ae005389e115fc2415e2088f5d2317975ba03f3ae2d22dbfaf3b8bebf_prof);

        
        $__internal_040cf7e5b642cceed0125967d84061601b8d2850e35f8022af54682ca2b3f274->leave($__internal_040cf7e5b642cceed0125967d84061601b8d2850e35f8022af54682ca2b3f274_prof);

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
