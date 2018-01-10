<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_66f18b639035c9410810d9e049a4467392e809d3808e8e580fb902545038337e extends Twig_Template
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
        $__internal_58f00c531f6d2fc3f111b9e861356c0eb46a6ae536f96af94048c0ede7719c6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58f00c531f6d2fc3f111b9e861356c0eb46a6ae536f96af94048c0ede7719c6e->enter($__internal_58f00c531f6d2fc3f111b9e861356c0eb46a6ae536f96af94048c0ede7719c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_eb6ce79a83ad0c13703d65e18652be4860f8e617df572f795a605fc9cb52600c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6ce79a83ad0c13703d65e18652be4860f8e617df572f795a605fc9cb52600c->enter($__internal_eb6ce79a83ad0c13703d65e18652be4860f8e617df572f795a605fc9cb52600c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58f00c531f6d2fc3f111b9e861356c0eb46a6ae536f96af94048c0ede7719c6e->leave($__internal_58f00c531f6d2fc3f111b9e861356c0eb46a6ae536f96af94048c0ede7719c6e_prof);

        
        $__internal_eb6ce79a83ad0c13703d65e18652be4860f8e617df572f795a605fc9cb52600c->leave($__internal_eb6ce79a83ad0c13703d65e18652be4860f8e617df572f795a605fc9cb52600c_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_21413cd4faf3a12b27a89b58830a4ce98baec6d83ddf65cdd6a5c30db3623843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21413cd4faf3a12b27a89b58830a4ce98baec6d83ddf65cdd6a5c30db3623843->enter($__internal_21413cd4faf3a12b27a89b58830a4ce98baec6d83ddf65cdd6a5c30db3623843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_4fa014e2f2b45c2e1478712bbeab49fd2037110c6045a5a26535e0e7820703e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa014e2f2b45c2e1478712bbeab49fd2037110c6045a5a26535e0e7820703e6->enter($__internal_4fa014e2f2b45c2e1478712bbeab49fd2037110c6045a5a26535e0e7820703e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_4fa014e2f2b45c2e1478712bbeab49fd2037110c6045a5a26535e0e7820703e6->leave($__internal_4fa014e2f2b45c2e1478712bbeab49fd2037110c6045a5a26535e0e7820703e6_prof);

        
        $__internal_21413cd4faf3a12b27a89b58830a4ce98baec6d83ddf65cdd6a5c30db3623843->leave($__internal_21413cd4faf3a12b27a89b58830a4ce98baec6d83ddf65cdd6a5c30db3623843_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6dfcd06a6b96d550ebd7195ecb1bf6d184f021e3010c2c6334236728a257292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6dfcd06a6b96d550ebd7195ecb1bf6d184f021e3010c2c6334236728a257292->enter($__internal_c6dfcd06a6b96d550ebd7195ecb1bf6d184f021e3010c2c6334236728a257292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a58cc4fa6fb684fcda7bd820f1b8720cf420ae13402abb4a4d6d37c393067c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58cc4fa6fb684fcda7bd820f1b8720cf420ae13402abb4a4d6d37c393067c3a->enter($__internal_a58cc4fa6fb684fcda7bd820f1b8720cf420ae13402abb4a4d6d37c393067c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a58cc4fa6fb684fcda7bd820f1b8720cf420ae13402abb4a4d6d37c393067c3a->leave($__internal_a58cc4fa6fb684fcda7bd820f1b8720cf420ae13402abb4a4d6d37c393067c3a_prof);

        
        $__internal_c6dfcd06a6b96d550ebd7195ecb1bf6d184f021e3010c2c6334236728a257292->leave($__internal_c6dfcd06a6b96d550ebd7195ecb1bf6d184f021e3010c2c6334236728a257292_prof);

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
