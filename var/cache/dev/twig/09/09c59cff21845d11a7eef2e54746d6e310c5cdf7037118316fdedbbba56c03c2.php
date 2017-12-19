<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_2ff7df758c387967a9e2c91ab63f86e8701320996d0af33cd0ef9328e90964ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd6d6b9c6c3cff9a19c4f34626828b94f08f072fa2c1a56d86ef6354dff79205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6d6b9c6c3cff9a19c4f34626828b94f08f072fa2c1a56d86ef6354dff79205->enter($__internal_fd6d6b9c6c3cff9a19c4f34626828b94f08f072fa2c1a56d86ef6354dff79205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_59e2a5795c925346eb2673b7379106b80040ffe27bd5cd4ac4e7ef57d7b20694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e2a5795c925346eb2673b7379106b80040ffe27bd5cd4ac4e7ef57d7b20694->enter($__internal_59e2a5795c925346eb2673b7379106b80040ffe27bd5cd4ac4e7ef57d7b20694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd6d6b9c6c3cff9a19c4f34626828b94f08f072fa2c1a56d86ef6354dff79205->leave($__internal_fd6d6b9c6c3cff9a19c4f34626828b94f08f072fa2c1a56d86ef6354dff79205_prof);

        
        $__internal_59e2a5795c925346eb2673b7379106b80040ffe27bd5cd4ac4e7ef57d7b20694->leave($__internal_59e2a5795c925346eb2673b7379106b80040ffe27bd5cd4ac4e7ef57d7b20694_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9a0c766d3aef63f86e15d5dc13d9950c9232b08ebba1d3dedf491e05f6983d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9a0c766d3aef63f86e15d5dc13d9950c9232b08ebba1d3dedf491e05f6983d5->enter($__internal_e9a0c766d3aef63f86e15d5dc13d9950c9232b08ebba1d3dedf491e05f6983d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c41d51638e6e954fedde8ad4dcf198a8797caf122982c94004846a4b35c48dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c41d51638e6e954fedde8ad4dcf198a8797caf122982c94004846a4b35c48dc->enter($__internal_5c41d51638e6e954fedde8ad4dcf198a8797caf122982c94004846a4b35c48dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5c41d51638e6e954fedde8ad4dcf198a8797caf122982c94004846a4b35c48dc->leave($__internal_5c41d51638e6e954fedde8ad4dcf198a8797caf122982c94004846a4b35c48dc_prof);

        
        $__internal_e9a0c766d3aef63f86e15d5dc13d9950c9232b08ebba1d3dedf491e05f6983d5->leave($__internal_e9a0c766d3aef63f86e15d5dc13d9950c9232b08ebba1d3dedf491e05f6983d5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7097c7a3c13305689e23bfa694447697e94a89a90e9c6690229a35c2d8395ecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7097c7a3c13305689e23bfa694447697e94a89a90e9c6690229a35c2d8395ecd->enter($__internal_7097c7a3c13305689e23bfa694447697e94a89a90e9c6690229a35c2d8395ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a30843486839132393abd3224d3bcf0031011b8043795e33e55b262c6b8b3f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30843486839132393abd3224d3bcf0031011b8043795e33e55b262c6b8b3f1c->enter($__internal_a30843486839132393abd3224d3bcf0031011b8043795e33e55b262c6b8b3f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a30843486839132393abd3224d3bcf0031011b8043795e33e55b262c6b8b3f1c->leave($__internal_a30843486839132393abd3224d3bcf0031011b8043795e33e55b262c6b8b3f1c_prof);

        
        $__internal_7097c7a3c13305689e23bfa694447697e94a89a90e9c6690229a35c2d8395ecd->leave($__internal_7097c7a3c13305689e23bfa694447697e94a89a90e9c6690229a35c2d8395ecd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
