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
        $__internal_95d7594cf5b4927ce807644f309702e26f1e488bb2197a2e60bb4ded3d919c42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d7594cf5b4927ce807644f309702e26f1e488bb2197a2e60bb4ded3d919c42->enter($__internal_95d7594cf5b4927ce807644f309702e26f1e488bb2197a2e60bb4ded3d919c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b5ac6e378e21fcbf806a3bc64d31ccf4843b2d6c52849620d800135c113a683d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ac6e378e21fcbf806a3bc64d31ccf4843b2d6c52849620d800135c113a683d->enter($__internal_b5ac6e378e21fcbf806a3bc64d31ccf4843b2d6c52849620d800135c113a683d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95d7594cf5b4927ce807644f309702e26f1e488bb2197a2e60bb4ded3d919c42->leave($__internal_95d7594cf5b4927ce807644f309702e26f1e488bb2197a2e60bb4ded3d919c42_prof);

        
        $__internal_b5ac6e378e21fcbf806a3bc64d31ccf4843b2d6c52849620d800135c113a683d->leave($__internal_b5ac6e378e21fcbf806a3bc64d31ccf4843b2d6c52849620d800135c113a683d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f24e94fd795483d32bd3d9ab55cc387d8644e092044e8c1d7ab46e83b460bfe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f24e94fd795483d32bd3d9ab55cc387d8644e092044e8c1d7ab46e83b460bfe5->enter($__internal_f24e94fd795483d32bd3d9ab55cc387d8644e092044e8c1d7ab46e83b460bfe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_771e1d828558211fd3ca794fa24533fc839277a8f3d85660d30b5f8b59cfb205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771e1d828558211fd3ca794fa24533fc839277a8f3d85660d30b5f8b59cfb205->enter($__internal_771e1d828558211fd3ca794fa24533fc839277a8f3d85660d30b5f8b59cfb205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_771e1d828558211fd3ca794fa24533fc839277a8f3d85660d30b5f8b59cfb205->leave($__internal_771e1d828558211fd3ca794fa24533fc839277a8f3d85660d30b5f8b59cfb205_prof);

        
        $__internal_f24e94fd795483d32bd3d9ab55cc387d8644e092044e8c1d7ab46e83b460bfe5->leave($__internal_f24e94fd795483d32bd3d9ab55cc387d8644e092044e8c1d7ab46e83b460bfe5_prof);

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
