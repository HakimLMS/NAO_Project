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
        $__internal_0c7db532f7a8c69c6ab3c13d2478e78729125883be43adc8bec3ff6366cee03a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c7db532f7a8c69c6ab3c13d2478e78729125883be43adc8bec3ff6366cee03a->enter($__internal_0c7db532f7a8c69c6ab3c13d2478e78729125883be43adc8bec3ff6366cee03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_d19642b7bd9f8c701b18077c7c8508881fa2771e49f31dbcd9c0bcb4189fa251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19642b7bd9f8c701b18077c7c8508881fa2771e49f31dbcd9c0bcb4189fa251->enter($__internal_d19642b7bd9f8c701b18077c7c8508881fa2771e49f31dbcd9c0bcb4189fa251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c7db532f7a8c69c6ab3c13d2478e78729125883be43adc8bec3ff6366cee03a->leave($__internal_0c7db532f7a8c69c6ab3c13d2478e78729125883be43adc8bec3ff6366cee03a_prof);

        
        $__internal_d19642b7bd9f8c701b18077c7c8508881fa2771e49f31dbcd9c0bcb4189fa251->leave($__internal_d19642b7bd9f8c701b18077c7c8508881fa2771e49f31dbcd9c0bcb4189fa251_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_faaae3a193cf91102e33358ead934dbba1996d780aa940b4a5dd834dbaa9ffc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faaae3a193cf91102e33358ead934dbba1996d780aa940b4a5dd834dbaa9ffc0->enter($__internal_faaae3a193cf91102e33358ead934dbba1996d780aa940b4a5dd834dbaa9ffc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_836346d474dd0b2777aea505034bbcf4de214baa9bc620f90cc50f864f4e2af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836346d474dd0b2777aea505034bbcf4de214baa9bc620f90cc50f864f4e2af2->enter($__internal_836346d474dd0b2777aea505034bbcf4de214baa9bc620f90cc50f864f4e2af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_836346d474dd0b2777aea505034bbcf4de214baa9bc620f90cc50f864f4e2af2->leave($__internal_836346d474dd0b2777aea505034bbcf4de214baa9bc620f90cc50f864f4e2af2_prof);

        
        $__internal_faaae3a193cf91102e33358ead934dbba1996d780aa940b4a5dd834dbaa9ffc0->leave($__internal_faaae3a193cf91102e33358ead934dbba1996d780aa940b4a5dd834dbaa9ffc0_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_824121e739f5105f5aa5a202b47af3d5b21498232730f9da73d7a3e0256abfcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_824121e739f5105f5aa5a202b47af3d5b21498232730f9da73d7a3e0256abfcf->enter($__internal_824121e739f5105f5aa5a202b47af3d5b21498232730f9da73d7a3e0256abfcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1f3fa3a0370f8fbfe6d086a2fb466f4140e57d150d8c68aa27f55e230e6fc8a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f3fa3a0370f8fbfe6d086a2fb466f4140e57d150d8c68aa27f55e230e6fc8a4->enter($__internal_1f3fa3a0370f8fbfe6d086a2fb466f4140e57d150d8c68aa27f55e230e6fc8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1f3fa3a0370f8fbfe6d086a2fb466f4140e57d150d8c68aa27f55e230e6fc8a4->leave($__internal_1f3fa3a0370f8fbfe6d086a2fb466f4140e57d150d8c68aa27f55e230e6fc8a4_prof);

        
        $__internal_824121e739f5105f5aa5a202b47af3d5b21498232730f9da73d7a3e0256abfcf->leave($__internal_824121e739f5105f5aa5a202b47af3d5b21498232730f9da73d7a3e0256abfcf_prof);

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
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
