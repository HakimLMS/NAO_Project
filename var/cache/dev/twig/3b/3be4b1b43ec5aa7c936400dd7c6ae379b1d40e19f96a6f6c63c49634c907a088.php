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
        $__internal_98919b7d9297707a0ae70193376b0ded6aa066807a39ef3a8dda1fb246948e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98919b7d9297707a0ae70193376b0ded6aa066807a39ef3a8dda1fb246948e2a->enter($__internal_98919b7d9297707a0ae70193376b0ded6aa066807a39ef3a8dda1fb246948e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_dfa2643a51792c18a8b05d32c9787f507b0b5b3bac1d69fc7b70df5873112e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa2643a51792c18a8b05d32c9787f507b0b5b3bac1d69fc7b70df5873112e17->enter($__internal_dfa2643a51792c18a8b05d32c9787f507b0b5b3bac1d69fc7b70df5873112e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98919b7d9297707a0ae70193376b0ded6aa066807a39ef3a8dda1fb246948e2a->leave($__internal_98919b7d9297707a0ae70193376b0ded6aa066807a39ef3a8dda1fb246948e2a_prof);

        
        $__internal_dfa2643a51792c18a8b05d32c9787f507b0b5b3bac1d69fc7b70df5873112e17->leave($__internal_dfa2643a51792c18a8b05d32c9787f507b0b5b3bac1d69fc7b70df5873112e17_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_119d71ae4f2c23ca8aa7d8a2bb080fa90fc37acdccff3613af4c5200f48aa547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_119d71ae4f2c23ca8aa7d8a2bb080fa90fc37acdccff3613af4c5200f48aa547->enter($__internal_119d71ae4f2c23ca8aa7d8a2bb080fa90fc37acdccff3613af4c5200f48aa547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_71a50124a614e4b41990e893a72a0c68e794080f9461ca01e5c5c3b086b3f978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a50124a614e4b41990e893a72a0c68e794080f9461ca01e5c5c3b086b3f978->enter($__internal_71a50124a614e4b41990e893a72a0c68e794080f9461ca01e5c5c3b086b3f978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_71a50124a614e4b41990e893a72a0c68e794080f9461ca01e5c5c3b086b3f978->leave($__internal_71a50124a614e4b41990e893a72a0c68e794080f9461ca01e5c5c3b086b3f978_prof);

        
        $__internal_119d71ae4f2c23ca8aa7d8a2bb080fa90fc37acdccff3613af4c5200f48aa547->leave($__internal_119d71ae4f2c23ca8aa7d8a2bb080fa90fc37acdccff3613af4c5200f48aa547_prof);

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
