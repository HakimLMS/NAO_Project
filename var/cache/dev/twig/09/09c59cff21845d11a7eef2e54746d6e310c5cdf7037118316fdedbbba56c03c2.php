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
        $__internal_abbf6c56f2dde0c4403592c693c0cf470a570178350dec0caacd3edb122413b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abbf6c56f2dde0c4403592c693c0cf470a570178350dec0caacd3edb122413b2->enter($__internal_abbf6c56f2dde0c4403592c693c0cf470a570178350dec0caacd3edb122413b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_32c926f6db54b0e9c1c484ea6a96eae45517cba683376a7425ecec5fd5770c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c926f6db54b0e9c1c484ea6a96eae45517cba683376a7425ecec5fd5770c62->enter($__internal_32c926f6db54b0e9c1c484ea6a96eae45517cba683376a7425ecec5fd5770c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abbf6c56f2dde0c4403592c693c0cf470a570178350dec0caacd3edb122413b2->leave($__internal_abbf6c56f2dde0c4403592c693c0cf470a570178350dec0caacd3edb122413b2_prof);

        
        $__internal_32c926f6db54b0e9c1c484ea6a96eae45517cba683376a7425ecec5fd5770c62->leave($__internal_32c926f6db54b0e9c1c484ea6a96eae45517cba683376a7425ecec5fd5770c62_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4e78b3ee8eb681ead67e778ee2b35159e4e541c0adc542659651fa7c682ccc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e78b3ee8eb681ead67e778ee2b35159e4e541c0adc542659651fa7c682ccc7->enter($__internal_f4e78b3ee8eb681ead67e778ee2b35159e4e541c0adc542659651fa7c682ccc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4a3f14d9b7e715175c8c6fb96bc799b41c3b79e43521d1eefe7f969f90917ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3f14d9b7e715175c8c6fb96bc799b41c3b79e43521d1eefe7f969f90917ea3->enter($__internal_4a3f14d9b7e715175c8c6fb96bc799b41c3b79e43521d1eefe7f969f90917ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4a3f14d9b7e715175c8c6fb96bc799b41c3b79e43521d1eefe7f969f90917ea3->leave($__internal_4a3f14d9b7e715175c8c6fb96bc799b41c3b79e43521d1eefe7f969f90917ea3_prof);

        
        $__internal_f4e78b3ee8eb681ead67e778ee2b35159e4e541c0adc542659651fa7c682ccc7->leave($__internal_f4e78b3ee8eb681ead67e778ee2b35159e4e541c0adc542659651fa7c682ccc7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f25847e08ca9eb546788965e5ce7d8f59c4ff66dce57a862819d5b44dc2633bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f25847e08ca9eb546788965e5ce7d8f59c4ff66dce57a862819d5b44dc2633bc->enter($__internal_f25847e08ca9eb546788965e5ce7d8f59c4ff66dce57a862819d5b44dc2633bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52f19c077bf4c4f103417e6cf5bcbd8522739b7f41f918bb1cb1a7c4503391eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f19c077bf4c4f103417e6cf5bcbd8522739b7f41f918bb1cb1a7c4503391eb->enter($__internal_52f19c077bf4c4f103417e6cf5bcbd8522739b7f41f918bb1cb1a7c4503391eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_52f19c077bf4c4f103417e6cf5bcbd8522739b7f41f918bb1cb1a7c4503391eb->leave($__internal_52f19c077bf4c4f103417e6cf5bcbd8522739b7f41f918bb1cb1a7c4503391eb_prof);

        
        $__internal_f25847e08ca9eb546788965e5ce7d8f59c4ff66dce57a862819d5b44dc2633bc->leave($__internal_f25847e08ca9eb546788965e5ce7d8f59c4ff66dce57a862819d5b44dc2633bc_prof);

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
