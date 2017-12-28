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
        $__internal_9296fb8656f8ac67601639e21a28cceaf334955ba0366a22ea262ee1ffad515f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9296fb8656f8ac67601639e21a28cceaf334955ba0366a22ea262ee1ffad515f->enter($__internal_9296fb8656f8ac67601639e21a28cceaf334955ba0366a22ea262ee1ffad515f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_3f59fc8473795307d9f7fdc5329a3e3a92576f49786b90d6370b5c791fb42e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f59fc8473795307d9f7fdc5329a3e3a92576f49786b90d6370b5c791fb42e67->enter($__internal_3f59fc8473795307d9f7fdc5329a3e3a92576f49786b90d6370b5c791fb42e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9296fb8656f8ac67601639e21a28cceaf334955ba0366a22ea262ee1ffad515f->leave($__internal_9296fb8656f8ac67601639e21a28cceaf334955ba0366a22ea262ee1ffad515f_prof);

        
        $__internal_3f59fc8473795307d9f7fdc5329a3e3a92576f49786b90d6370b5c791fb42e67->leave($__internal_3f59fc8473795307d9f7fdc5329a3e3a92576f49786b90d6370b5c791fb42e67_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a14cf32e2141f696f43eda37b3e678193818b022ecd5df4ffca315292e84b9c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a14cf32e2141f696f43eda37b3e678193818b022ecd5df4ffca315292e84b9c0->enter($__internal_a14cf32e2141f696f43eda37b3e678193818b022ecd5df4ffca315292e84b9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e15d3171535a43d2c948ecc93970429f369ced127aa72c58d1cb9122909e8bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15d3171535a43d2c948ecc93970429f369ced127aa72c58d1cb9122909e8bb9->enter($__internal_e15d3171535a43d2c948ecc93970429f369ced127aa72c58d1cb9122909e8bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e15d3171535a43d2c948ecc93970429f369ced127aa72c58d1cb9122909e8bb9->leave($__internal_e15d3171535a43d2c948ecc93970429f369ced127aa72c58d1cb9122909e8bb9_prof);

        
        $__internal_a14cf32e2141f696f43eda37b3e678193818b022ecd5df4ffca315292e84b9c0->leave($__internal_a14cf32e2141f696f43eda37b3e678193818b022ecd5df4ffca315292e84b9c0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e97798db2661863223b70d2ae391afdb5da8820841200be7eb1534aaeb35d695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e97798db2661863223b70d2ae391afdb5da8820841200be7eb1534aaeb35d695->enter($__internal_e97798db2661863223b70d2ae391afdb5da8820841200be7eb1534aaeb35d695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8451b61734d2e3bac1599a20f4f4964eff0d92d808c4d7d528715e0decc90764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8451b61734d2e3bac1599a20f4f4964eff0d92d808c4d7d528715e0decc90764->enter($__internal_8451b61734d2e3bac1599a20f4f4964eff0d92d808c4d7d528715e0decc90764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8451b61734d2e3bac1599a20f4f4964eff0d92d808c4d7d528715e0decc90764->leave($__internal_8451b61734d2e3bac1599a20f4f4964eff0d92d808c4d7d528715e0decc90764_prof);

        
        $__internal_e97798db2661863223b70d2ae391afdb5da8820841200be7eb1534aaeb35d695->leave($__internal_e97798db2661863223b70d2ae391afdb5da8820841200be7eb1534aaeb35d695_prof);

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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
