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
        $__internal_d707ee1cbbaf2ce49fe5a862b1e64cb68db7ff860028b78ea63ae76afd63f5fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d707ee1cbbaf2ce49fe5a862b1e64cb68db7ff860028b78ea63ae76afd63f5fd->enter($__internal_d707ee1cbbaf2ce49fe5a862b1e64cb68db7ff860028b78ea63ae76afd63f5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_61d2e81f3a8158e093ae4d43e04a50926e33d6a32fa79994505a6dfe1d4bedc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d2e81f3a8158e093ae4d43e04a50926e33d6a32fa79994505a6dfe1d4bedc6->enter($__internal_61d2e81f3a8158e093ae4d43e04a50926e33d6a32fa79994505a6dfe1d4bedc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d707ee1cbbaf2ce49fe5a862b1e64cb68db7ff860028b78ea63ae76afd63f5fd->leave($__internal_d707ee1cbbaf2ce49fe5a862b1e64cb68db7ff860028b78ea63ae76afd63f5fd_prof);

        
        $__internal_61d2e81f3a8158e093ae4d43e04a50926e33d6a32fa79994505a6dfe1d4bedc6->leave($__internal_61d2e81f3a8158e093ae4d43e04a50926e33d6a32fa79994505a6dfe1d4bedc6_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_4adb30a2376f056d56f3872099b3e492be71c2e5294b326e73bc6bb2e07d0601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4adb30a2376f056d56f3872099b3e492be71c2e5294b326e73bc6bb2e07d0601->enter($__internal_4adb30a2376f056d56f3872099b3e492be71c2e5294b326e73bc6bb2e07d0601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7c80d9a7b69d9ed6a1392ea55ab48cd6c1e6ec6134d508a44e4f2abf46790eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c80d9a7b69d9ed6a1392ea55ab48cd6c1e6ec6134d508a44e4f2abf46790eaa->enter($__internal_7c80d9a7b69d9ed6a1392ea55ab48cd6c1e6ec6134d508a44e4f2abf46790eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_7c80d9a7b69d9ed6a1392ea55ab48cd6c1e6ec6134d508a44e4f2abf46790eaa->leave($__internal_7c80d9a7b69d9ed6a1392ea55ab48cd6c1e6ec6134d508a44e4f2abf46790eaa_prof);

        
        $__internal_4adb30a2376f056d56f3872099b3e492be71c2e5294b326e73bc6bb2e07d0601->leave($__internal_4adb30a2376f056d56f3872099b3e492be71c2e5294b326e73bc6bb2e07d0601_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f546d360967f7cd983ec6fd0e9da30b3a22dddef09637b1c1530f2186343ad28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f546d360967f7cd983ec6fd0e9da30b3a22dddef09637b1c1530f2186343ad28->enter($__internal_f546d360967f7cd983ec6fd0e9da30b3a22dddef09637b1c1530f2186343ad28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a36d67a1e2ee2b86354905fbe4dd5d7bdfa4c63aae91a0d2f74f8d7f606af308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a36d67a1e2ee2b86354905fbe4dd5d7bdfa4c63aae91a0d2f74f8d7f606af308->enter($__internal_a36d67a1e2ee2b86354905fbe4dd5d7bdfa4c63aae91a0d2f74f8d7f606af308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a36d67a1e2ee2b86354905fbe4dd5d7bdfa4c63aae91a0d2f74f8d7f606af308->leave($__internal_a36d67a1e2ee2b86354905fbe4dd5d7bdfa4c63aae91a0d2f74f8d7f606af308_prof);

        
        $__internal_f546d360967f7cd983ec6fd0e9da30b3a22dddef09637b1c1530f2186343ad28->leave($__internal_f546d360967f7cd983ec6fd0e9da30b3a22dddef09637b1c1530f2186343ad28_prof);

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
