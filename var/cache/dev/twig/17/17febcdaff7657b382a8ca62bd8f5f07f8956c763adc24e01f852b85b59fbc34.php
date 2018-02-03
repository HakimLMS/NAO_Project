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
        $__internal_414f6ea102ff3360824c801da4e6cf8ea0efa74ca8db2a801f7a0ad5f6c09550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414f6ea102ff3360824c801da4e6cf8ea0efa74ca8db2a801f7a0ad5f6c09550->enter($__internal_414f6ea102ff3360824c801da4e6cf8ea0efa74ca8db2a801f7a0ad5f6c09550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_b221537aeda114b1f00c117f9ee9e43552757db614b691297f13cfc72deec3b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b221537aeda114b1f00c117f9ee9e43552757db614b691297f13cfc72deec3b1->enter($__internal_b221537aeda114b1f00c117f9ee9e43552757db614b691297f13cfc72deec3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_414f6ea102ff3360824c801da4e6cf8ea0efa74ca8db2a801f7a0ad5f6c09550->leave($__internal_414f6ea102ff3360824c801da4e6cf8ea0efa74ca8db2a801f7a0ad5f6c09550_prof);

        
        $__internal_b221537aeda114b1f00c117f9ee9e43552757db614b691297f13cfc72deec3b1->leave($__internal_b221537aeda114b1f00c117f9ee9e43552757db614b691297f13cfc72deec3b1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_282b5c742e0a5b8e24bd131be33f8c828f504c603ef1b1ab555277201447a654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_282b5c742e0a5b8e24bd131be33f8c828f504c603ef1b1ab555277201447a654->enter($__internal_282b5c742e0a5b8e24bd131be33f8c828f504c603ef1b1ab555277201447a654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9430b6e6aeb8826b742defc7642e2140c82fa47be0de8a20376d743cecee44c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9430b6e6aeb8826b742defc7642e2140c82fa47be0de8a20376d743cecee44c0->enter($__internal_9430b6e6aeb8826b742defc7642e2140c82fa47be0de8a20376d743cecee44c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9430b6e6aeb8826b742defc7642e2140c82fa47be0de8a20376d743cecee44c0->leave($__internal_9430b6e6aeb8826b742defc7642e2140c82fa47be0de8a20376d743cecee44c0_prof);

        
        $__internal_282b5c742e0a5b8e24bd131be33f8c828f504c603ef1b1ab555277201447a654->leave($__internal_282b5c742e0a5b8e24bd131be33f8c828f504c603ef1b1ab555277201447a654_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_568d1d1093e8e4fb8df2137b667f3337d94ca616894b2c27a942eb6f963e1cbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_568d1d1093e8e4fb8df2137b667f3337d94ca616894b2c27a942eb6f963e1cbe->enter($__internal_568d1d1093e8e4fb8df2137b667f3337d94ca616894b2c27a942eb6f963e1cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f02ebbba24cc8eeb211ccae7e29b587b19aed7297e2b6941f5f478424ae6b1d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02ebbba24cc8eeb211ccae7e29b587b19aed7297e2b6941f5f478424ae6b1d0->enter($__internal_f02ebbba24cc8eeb211ccae7e29b587b19aed7297e2b6941f5f478424ae6b1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f02ebbba24cc8eeb211ccae7e29b587b19aed7297e2b6941f5f478424ae6b1d0->leave($__internal_f02ebbba24cc8eeb211ccae7e29b587b19aed7297e2b6941f5f478424ae6b1d0_prof);

        
        $__internal_568d1d1093e8e4fb8df2137b667f3337d94ca616894b2c27a942eb6f963e1cbe->leave($__internal_568d1d1093e8e4fb8df2137b667f3337d94ca616894b2c27a942eb6f963e1cbe_prof);

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
