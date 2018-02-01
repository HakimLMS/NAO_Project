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
        $__internal_60d1a919c9718ec229149d31b412b6c19352f6e3c77a81b07750a1c3db21e162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d1a919c9718ec229149d31b412b6c19352f6e3c77a81b07750a1c3db21e162->enter($__internal_60d1a919c9718ec229149d31b412b6c19352f6e3c77a81b07750a1c3db21e162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_469b8ac38afb0c0695744ccd077a1362be0b7ca4ed7ca97cdfb6ded6490862e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469b8ac38afb0c0695744ccd077a1362be0b7ca4ed7ca97cdfb6ded6490862e8->enter($__internal_469b8ac38afb0c0695744ccd077a1362be0b7ca4ed7ca97cdfb6ded6490862e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60d1a919c9718ec229149d31b412b6c19352f6e3c77a81b07750a1c3db21e162->leave($__internal_60d1a919c9718ec229149d31b412b6c19352f6e3c77a81b07750a1c3db21e162_prof);

        
        $__internal_469b8ac38afb0c0695744ccd077a1362be0b7ca4ed7ca97cdfb6ded6490862e8->leave($__internal_469b8ac38afb0c0695744ccd077a1362be0b7ca4ed7ca97cdfb6ded6490862e8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8e78481b86f90a29f4db6677ba2f519d2fb4f8cbe7bd8967138d721f29a96f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e78481b86f90a29f4db6677ba2f519d2fb4f8cbe7bd8967138d721f29a96f3d->enter($__internal_8e78481b86f90a29f4db6677ba2f519d2fb4f8cbe7bd8967138d721f29a96f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c9901bc05174fd697f6593092fe13f7eeea6aed8d2347c76479095fcf436fd39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9901bc05174fd697f6593092fe13f7eeea6aed8d2347c76479095fcf436fd39->enter($__internal_c9901bc05174fd697f6593092fe13f7eeea6aed8d2347c76479095fcf436fd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c9901bc05174fd697f6593092fe13f7eeea6aed8d2347c76479095fcf436fd39->leave($__internal_c9901bc05174fd697f6593092fe13f7eeea6aed8d2347c76479095fcf436fd39_prof);

        
        $__internal_8e78481b86f90a29f4db6677ba2f519d2fb4f8cbe7bd8967138d721f29a96f3d->leave($__internal_8e78481b86f90a29f4db6677ba2f519d2fb4f8cbe7bd8967138d721f29a96f3d_prof);

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
