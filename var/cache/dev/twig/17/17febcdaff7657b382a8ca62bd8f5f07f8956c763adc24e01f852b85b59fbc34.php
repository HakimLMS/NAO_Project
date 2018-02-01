<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_c7c5d7f4de059fb7823d4e1739d8e672d33df3617e8c3891e873173a9633452f extends Twig_Template
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
        $__internal_c470ce41ed6aea83d60e80f993845714110143d8b2332a8008b1bc13b56bede1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c470ce41ed6aea83d60e80f993845714110143d8b2332a8008b1bc13b56bede1->enter($__internal_c470ce41ed6aea83d60e80f993845714110143d8b2332a8008b1bc13b56bede1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_4282f3af50005cc09c0257f4d87e469108134e202636e893418cf8a604c48595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4282f3af50005cc09c0257f4d87e469108134e202636e893418cf8a604c48595->enter($__internal_4282f3af50005cc09c0257f4d87e469108134e202636e893418cf8a604c48595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c470ce41ed6aea83d60e80f993845714110143d8b2332a8008b1bc13b56bede1->leave($__internal_c470ce41ed6aea83d60e80f993845714110143d8b2332a8008b1bc13b56bede1_prof);

        
        $__internal_4282f3af50005cc09c0257f4d87e469108134e202636e893418cf8a604c48595->leave($__internal_4282f3af50005cc09c0257f4d87e469108134e202636e893418cf8a604c48595_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_51ba3ae7b8f67d3471b4e1209a487b32642a1dd303b57761d310e9a2902925a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51ba3ae7b8f67d3471b4e1209a487b32642a1dd303b57761d310e9a2902925a6->enter($__internal_51ba3ae7b8f67d3471b4e1209a487b32642a1dd303b57761d310e9a2902925a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_739a347d8932e56b71941ee939635db6cd3e7b74992d5894f82c6b4244ace343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739a347d8932e56b71941ee939635db6cd3e7b74992d5894f82c6b4244ace343->enter($__internal_739a347d8932e56b71941ee939635db6cd3e7b74992d5894f82c6b4244ace343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_739a347d8932e56b71941ee939635db6cd3e7b74992d5894f82c6b4244ace343->leave($__internal_739a347d8932e56b71941ee939635db6cd3e7b74992d5894f82c6b4244ace343_prof);

        
        $__internal_51ba3ae7b8f67d3471b4e1209a487b32642a1dd303b57761d310e9a2902925a6->leave($__internal_51ba3ae7b8f67d3471b4e1209a487b32642a1dd303b57761d310e9a2902925a6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8881bc51598b4d2eff6df0444556e4cca60da12f46e50b69e5e6232f7d191c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8881bc51598b4d2eff6df0444556e4cca60da12f46e50b69e5e6232f7d191c51->enter($__internal_8881bc51598b4d2eff6df0444556e4cca60da12f46e50b69e5e6232f7d191c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b36eaaf68bfb457504b9c6032fd86a2e5e559862ec47efa90c226c07e243c012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36eaaf68bfb457504b9c6032fd86a2e5e559862ec47efa90c226c07e243c012->enter($__internal_b36eaaf68bfb457504b9c6032fd86a2e5e559862ec47efa90c226c07e243c012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b36eaaf68bfb457504b9c6032fd86a2e5e559862ec47efa90c226c07e243c012->leave($__internal_b36eaaf68bfb457504b9c6032fd86a2e5e559862ec47efa90c226c07e243c012_prof);

        
        $__internal_8881bc51598b4d2eff6df0444556e4cca60da12f46e50b69e5e6232f7d191c51->leave($__internal_8881bc51598b4d2eff6df0444556e4cca60da12f46e50b69e5e6232f7d191c51_prof);

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
