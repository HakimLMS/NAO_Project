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
        $__internal_e469420180984979e69102aef16cde7863750d42be02ce4f02ef5bf019d01a55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e469420180984979e69102aef16cde7863750d42be02ce4f02ef5bf019d01a55->enter($__internal_e469420180984979e69102aef16cde7863750d42be02ce4f02ef5bf019d01a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d7f42ec24c8e625e8be233ed68f702e2a757d6ab1910cc61021e00727c20b2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f42ec24c8e625e8be233ed68f702e2a757d6ab1910cc61021e00727c20b2fe->enter($__internal_d7f42ec24c8e625e8be233ed68f702e2a757d6ab1910cc61021e00727c20b2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e469420180984979e69102aef16cde7863750d42be02ce4f02ef5bf019d01a55->leave($__internal_e469420180984979e69102aef16cde7863750d42be02ce4f02ef5bf019d01a55_prof);

        
        $__internal_d7f42ec24c8e625e8be233ed68f702e2a757d6ab1910cc61021e00727c20b2fe->leave($__internal_d7f42ec24c8e625e8be233ed68f702e2a757d6ab1910cc61021e00727c20b2fe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f7922cd02e6a3443004946f97dee03a145fa72d4c2154315a7ab43b81dd1bd91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7922cd02e6a3443004946f97dee03a145fa72d4c2154315a7ab43b81dd1bd91->enter($__internal_f7922cd02e6a3443004946f97dee03a145fa72d4c2154315a7ab43b81dd1bd91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_91c556bcd8537a6c8dd8108b33d20a4610ec70c2f58e4d789f2b5c751e5e3883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c556bcd8537a6c8dd8108b33d20a4610ec70c2f58e4d789f2b5c751e5e3883->enter($__internal_91c556bcd8537a6c8dd8108b33d20a4610ec70c2f58e4d789f2b5c751e5e3883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_91c556bcd8537a6c8dd8108b33d20a4610ec70c2f58e4d789f2b5c751e5e3883->leave($__internal_91c556bcd8537a6c8dd8108b33d20a4610ec70c2f58e4d789f2b5c751e5e3883_prof);

        
        $__internal_f7922cd02e6a3443004946f97dee03a145fa72d4c2154315a7ab43b81dd1bd91->leave($__internal_f7922cd02e6a3443004946f97dee03a145fa72d4c2154315a7ab43b81dd1bd91_prof);

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
