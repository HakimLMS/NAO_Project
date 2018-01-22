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
        $__internal_8f5cb273970be5e914a106e69e7528e3fc9d3a101fdbd3e6ffb6bcc3eb031498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f5cb273970be5e914a106e69e7528e3fc9d3a101fdbd3e6ffb6bcc3eb031498->enter($__internal_8f5cb273970be5e914a106e69e7528e3fc9d3a101fdbd3e6ffb6bcc3eb031498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6dc7256532532211abebebfc7dc5afa57409cfd5f3fb20a51d5f03c4f91994ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc7256532532211abebebfc7dc5afa57409cfd5f3fb20a51d5f03c4f91994ac->enter($__internal_6dc7256532532211abebebfc7dc5afa57409cfd5f3fb20a51d5f03c4f91994ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f5cb273970be5e914a106e69e7528e3fc9d3a101fdbd3e6ffb6bcc3eb031498->leave($__internal_8f5cb273970be5e914a106e69e7528e3fc9d3a101fdbd3e6ffb6bcc3eb031498_prof);

        
        $__internal_6dc7256532532211abebebfc7dc5afa57409cfd5f3fb20a51d5f03c4f91994ac->leave($__internal_6dc7256532532211abebebfc7dc5afa57409cfd5f3fb20a51d5f03c4f91994ac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e44fe6f49b04326ab1c561c358c241fddc89b4b0374d46774fb2a2addfc2bd0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e44fe6f49b04326ab1c561c358c241fddc89b4b0374d46774fb2a2addfc2bd0c->enter($__internal_e44fe6f49b04326ab1c561c358c241fddc89b4b0374d46774fb2a2addfc2bd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5dea1743d4bdec4f11fbc1bd57447e4d3801dd4221053c3fd427e6e8ff3b9b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dea1743d4bdec4f11fbc1bd57447e4d3801dd4221053c3fd427e6e8ff3b9b7b->enter($__internal_5dea1743d4bdec4f11fbc1bd57447e4d3801dd4221053c3fd427e6e8ff3b9b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_5dea1743d4bdec4f11fbc1bd57447e4d3801dd4221053c3fd427e6e8ff3b9b7b->leave($__internal_5dea1743d4bdec4f11fbc1bd57447e4d3801dd4221053c3fd427e6e8ff3b9b7b_prof);

        
        $__internal_e44fe6f49b04326ab1c561c358c241fddc89b4b0374d46774fb2a2addfc2bd0c->leave($__internal_e44fe6f49b04326ab1c561c358c241fddc89b4b0374d46774fb2a2addfc2bd0c_prof);

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
