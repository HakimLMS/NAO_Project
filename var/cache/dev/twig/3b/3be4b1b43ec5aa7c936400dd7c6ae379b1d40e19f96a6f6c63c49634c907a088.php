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
        $__internal_a0d3d45b9e072bd635efe51738f1b98189e8ef73d3f80d5c37e9fb450cc378c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d3d45b9e072bd635efe51738f1b98189e8ef73d3f80d5c37e9fb450cc378c8->enter($__internal_a0d3d45b9e072bd635efe51738f1b98189e8ef73d3f80d5c37e9fb450cc378c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1852e6449871de88e4cae2190fb1b22d8913e726e7d00f9d3f10ed12c0e242b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1852e6449871de88e4cae2190fb1b22d8913e726e7d00f9d3f10ed12c0e242b8->enter($__internal_1852e6449871de88e4cae2190fb1b22d8913e726e7d00f9d3f10ed12c0e242b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0d3d45b9e072bd635efe51738f1b98189e8ef73d3f80d5c37e9fb450cc378c8->leave($__internal_a0d3d45b9e072bd635efe51738f1b98189e8ef73d3f80d5c37e9fb450cc378c8_prof);

        
        $__internal_1852e6449871de88e4cae2190fb1b22d8913e726e7d00f9d3f10ed12c0e242b8->leave($__internal_1852e6449871de88e4cae2190fb1b22d8913e726e7d00f9d3f10ed12c0e242b8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01fa69413076e124d0f8df4973b2f83a93514b5984d6b610bffdae7a3e41cf6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01fa69413076e124d0f8df4973b2f83a93514b5984d6b610bffdae7a3e41cf6d->enter($__internal_01fa69413076e124d0f8df4973b2f83a93514b5984d6b610bffdae7a3e41cf6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8f448a95da67cc6476efb7310fc8be6d9adf2495f5fb6b262ad9eab7d8f02029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f448a95da67cc6476efb7310fc8be6d9adf2495f5fb6b262ad9eab7d8f02029->enter($__internal_8f448a95da67cc6476efb7310fc8be6d9adf2495f5fb6b262ad9eab7d8f02029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_8f448a95da67cc6476efb7310fc8be6d9adf2495f5fb6b262ad9eab7d8f02029->leave($__internal_8f448a95da67cc6476efb7310fc8be6d9adf2495f5fb6b262ad9eab7d8f02029_prof);

        
        $__internal_01fa69413076e124d0f8df4973b2f83a93514b5984d6b610bffdae7a3e41cf6d->leave($__internal_01fa69413076e124d0f8df4973b2f83a93514b5984d6b610bffdae7a3e41cf6d_prof);

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
