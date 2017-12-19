<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_b377d2a1408e9189259098b73507e007f8237d2b9183e8a493fab371f9ab0aa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d6e1750c218b33f5e1a2bd3ea2706e0aff435190d745f717246a88becfd3edc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d6e1750c218b33f5e1a2bd3ea2706e0aff435190d745f717246a88becfd3edc->enter($__internal_9d6e1750c218b33f5e1a2bd3ea2706e0aff435190d745f717246a88becfd3edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_cc8fd655f353cdc9ea0bedd84ee3fc08d6a39f23bb3016b0a41963cbfa0186b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8fd655f353cdc9ea0bedd84ee3fc08d6a39f23bb3016b0a41963cbfa0186b3->enter($__internal_cc8fd655f353cdc9ea0bedd84ee3fc08d6a39f23bb3016b0a41963cbfa0186b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d6e1750c218b33f5e1a2bd3ea2706e0aff435190d745f717246a88becfd3edc->leave($__internal_9d6e1750c218b33f5e1a2bd3ea2706e0aff435190d745f717246a88becfd3edc_prof);

        
        $__internal_cc8fd655f353cdc9ea0bedd84ee3fc08d6a39f23bb3016b0a41963cbfa0186b3->leave($__internal_cc8fd655f353cdc9ea0bedd84ee3fc08d6a39f23bb3016b0a41963cbfa0186b3_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b69e30ff49108d0800d53f68159413c8810891349fb9f3bd5d8cf77bb7dc1673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b69e30ff49108d0800d53f68159413c8810891349fb9f3bd5d8cf77bb7dc1673->enter($__internal_b69e30ff49108d0800d53f68159413c8810891349fb9f3bd5d8cf77bb7dc1673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_dc9c744653f909bb190890e95071c2b0dd6de91526582fd381d9ca4785da46ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9c744653f909bb190890e95071c2b0dd6de91526582fd381d9ca4785da46ad->enter($__internal_dc9c744653f909bb190890e95071c2b0dd6de91526582fd381d9ca4785da46ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_dc9c744653f909bb190890e95071c2b0dd6de91526582fd381d9ca4785da46ad->leave($__internal_dc9c744653f909bb190890e95071c2b0dd6de91526582fd381d9ca4785da46ad_prof);

        
        $__internal_b69e30ff49108d0800d53f68159413c8810891349fb9f3bd5d8cf77bb7dc1673->leave($__internal_b69e30ff49108d0800d53f68159413c8810891349fb9f3bd5d8cf77bb7dc1673_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fcfed8455cce66de280e5783371e4fc168d829b9d9fa542d5b444dcc6195d64d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcfed8455cce66de280e5783371e4fc168d829b9d9fa542d5b444dcc6195d64d->enter($__internal_fcfed8455cce66de280e5783371e4fc168d829b9d9fa542d5b444dcc6195d64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_be4bebc756b635c6d7534134ffa9d60be0e137225cb2395f6a32f33100496747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4bebc756b635c6d7534134ffa9d60be0e137225cb2395f6a32f33100496747->enter($__internal_be4bebc756b635c6d7534134ffa9d60be0e137225cb2395f6a32f33100496747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_be4bebc756b635c6d7534134ffa9d60be0e137225cb2395f6a32f33100496747->leave($__internal_be4bebc756b635c6d7534134ffa9d60be0e137225cb2395f6a32f33100496747_prof);

        
        $__internal_fcfed8455cce66de280e5783371e4fc168d829b9d9fa542d5b444dcc6195d64d->leave($__internal_fcfed8455cce66de280e5783371e4fc168d829b9d9fa542d5b444dcc6195d64d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
