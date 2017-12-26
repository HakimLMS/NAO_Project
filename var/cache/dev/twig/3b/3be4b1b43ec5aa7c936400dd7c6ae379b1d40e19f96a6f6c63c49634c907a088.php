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
        $__internal_1fbbe2d2a52e72dc51d46ab8de56daaaecbc6ccc7709a9dadfdfa7e730df4679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fbbe2d2a52e72dc51d46ab8de56daaaecbc6ccc7709a9dadfdfa7e730df4679->enter($__internal_1fbbe2d2a52e72dc51d46ab8de56daaaecbc6ccc7709a9dadfdfa7e730df4679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_602cc495e3fb1c49039e9dc9d3220831485dffcbd0be00de38ffcf058cf3473b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602cc495e3fb1c49039e9dc9d3220831485dffcbd0be00de38ffcf058cf3473b->enter($__internal_602cc495e3fb1c49039e9dc9d3220831485dffcbd0be00de38ffcf058cf3473b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fbbe2d2a52e72dc51d46ab8de56daaaecbc6ccc7709a9dadfdfa7e730df4679->leave($__internal_1fbbe2d2a52e72dc51d46ab8de56daaaecbc6ccc7709a9dadfdfa7e730df4679_prof);

        
        $__internal_602cc495e3fb1c49039e9dc9d3220831485dffcbd0be00de38ffcf058cf3473b->leave($__internal_602cc495e3fb1c49039e9dc9d3220831485dffcbd0be00de38ffcf058cf3473b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_400bf28f2b75d081b90982cd4f8296037722cd65d55887bd61d532ebc6e67b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_400bf28f2b75d081b90982cd4f8296037722cd65d55887bd61d532ebc6e67b2b->enter($__internal_400bf28f2b75d081b90982cd4f8296037722cd65d55887bd61d532ebc6e67b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ffd909db1524e0e9b0f306568c20a477d43e47cafa0b601bd12ba08ff27b8fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd909db1524e0e9b0f306568c20a477d43e47cafa0b601bd12ba08ff27b8fde->enter($__internal_ffd909db1524e0e9b0f306568c20a477d43e47cafa0b601bd12ba08ff27b8fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ffd909db1524e0e9b0f306568c20a477d43e47cafa0b601bd12ba08ff27b8fde->leave($__internal_ffd909db1524e0e9b0f306568c20a477d43e47cafa0b601bd12ba08ff27b8fde_prof);

        
        $__internal_400bf28f2b75d081b90982cd4f8296037722cd65d55887bd61d532ebc6e67b2b->leave($__internal_400bf28f2b75d081b90982cd4f8296037722cd65d55887bd61d532ebc6e67b2b_prof);

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
