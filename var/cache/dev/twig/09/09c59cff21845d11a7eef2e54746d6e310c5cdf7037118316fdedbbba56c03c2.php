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
        $__internal_4833b81b98c3200627f383aee233de2816edbd03056d2a358ea0ce174d8966dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4833b81b98c3200627f383aee233de2816edbd03056d2a358ea0ce174d8966dc->enter($__internal_4833b81b98c3200627f383aee233de2816edbd03056d2a358ea0ce174d8966dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_6df57419ade591260dc95707ec27f9fd69e401cc49028c32fe7f93eb86a988df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df57419ade591260dc95707ec27f9fd69e401cc49028c32fe7f93eb86a988df->enter($__internal_6df57419ade591260dc95707ec27f9fd69e401cc49028c32fe7f93eb86a988df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4833b81b98c3200627f383aee233de2816edbd03056d2a358ea0ce174d8966dc->leave($__internal_4833b81b98c3200627f383aee233de2816edbd03056d2a358ea0ce174d8966dc_prof);

        
        $__internal_6df57419ade591260dc95707ec27f9fd69e401cc49028c32fe7f93eb86a988df->leave($__internal_6df57419ade591260dc95707ec27f9fd69e401cc49028c32fe7f93eb86a988df_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b70f56c962bfc9984ef3d46609a35b90fec3d604742a8c1d834ff1ed46b3010b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b70f56c962bfc9984ef3d46609a35b90fec3d604742a8c1d834ff1ed46b3010b->enter($__internal_b70f56c962bfc9984ef3d46609a35b90fec3d604742a8c1d834ff1ed46b3010b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b77daca9bd9f69e246cf69607f6fcd60e0b555ed3030dabfd65f7f46fa7ba337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77daca9bd9f69e246cf69607f6fcd60e0b555ed3030dabfd65f7f46fa7ba337->enter($__internal_b77daca9bd9f69e246cf69607f6fcd60e0b555ed3030dabfd65f7f46fa7ba337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b77daca9bd9f69e246cf69607f6fcd60e0b555ed3030dabfd65f7f46fa7ba337->leave($__internal_b77daca9bd9f69e246cf69607f6fcd60e0b555ed3030dabfd65f7f46fa7ba337_prof);

        
        $__internal_b70f56c962bfc9984ef3d46609a35b90fec3d604742a8c1d834ff1ed46b3010b->leave($__internal_b70f56c962bfc9984ef3d46609a35b90fec3d604742a8c1d834ff1ed46b3010b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_94d168802b1f8015811ebd3bb868034ffee824577030270b1bde3c6d524aeca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94d168802b1f8015811ebd3bb868034ffee824577030270b1bde3c6d524aeca4->enter($__internal_94d168802b1f8015811ebd3bb868034ffee824577030270b1bde3c6d524aeca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b60a010a19e9e4151112330ae1187b298fd4ede1c7e810b3c74ef1d9855b25eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60a010a19e9e4151112330ae1187b298fd4ede1c7e810b3c74ef1d9855b25eb->enter($__internal_b60a010a19e9e4151112330ae1187b298fd4ede1c7e810b3c74ef1d9855b25eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b60a010a19e9e4151112330ae1187b298fd4ede1c7e810b3c74ef1d9855b25eb->leave($__internal_b60a010a19e9e4151112330ae1187b298fd4ede1c7e810b3c74ef1d9855b25eb_prof);

        
        $__internal_94d168802b1f8015811ebd3bb868034ffee824577030270b1bde3c6d524aeca4->leave($__internal_94d168802b1f8015811ebd3bb868034ffee824577030270b1bde3c6d524aeca4_prof);

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
