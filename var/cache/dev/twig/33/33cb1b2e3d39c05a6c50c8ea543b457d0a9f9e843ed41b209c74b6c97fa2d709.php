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
        $__internal_f7eb02b815263d5653da21d283e1d453e667a9e41caa1c7b14b432fffb6c1e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7eb02b815263d5653da21d283e1d453e667a9e41caa1c7b14b432fffb6c1e77->enter($__internal_f7eb02b815263d5653da21d283e1d453e667a9e41caa1c7b14b432fffb6c1e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_2d5b3b7e6ba8b2f3e8ee51640a3a8c942bece02aae9723cf72882e01b8e208df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5b3b7e6ba8b2f3e8ee51640a3a8c942bece02aae9723cf72882e01b8e208df->enter($__internal_2d5b3b7e6ba8b2f3e8ee51640a3a8c942bece02aae9723cf72882e01b8e208df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7eb02b815263d5653da21d283e1d453e667a9e41caa1c7b14b432fffb6c1e77->leave($__internal_f7eb02b815263d5653da21d283e1d453e667a9e41caa1c7b14b432fffb6c1e77_prof);

        
        $__internal_2d5b3b7e6ba8b2f3e8ee51640a3a8c942bece02aae9723cf72882e01b8e208df->leave($__internal_2d5b3b7e6ba8b2f3e8ee51640a3a8c942bece02aae9723cf72882e01b8e208df_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_631c0d23f6d4f74a8ecd5955729fd4663285263778b3112f95005b82e5cfea43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_631c0d23f6d4f74a8ecd5955729fd4663285263778b3112f95005b82e5cfea43->enter($__internal_631c0d23f6d4f74a8ecd5955729fd4663285263778b3112f95005b82e5cfea43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_13e4733fd987d24f5b96b2afba724dd9c3082d787ad281aa0de91a5306bb9839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e4733fd987d24f5b96b2afba724dd9c3082d787ad281aa0de91a5306bb9839->enter($__internal_13e4733fd987d24f5b96b2afba724dd9c3082d787ad281aa0de91a5306bb9839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_13e4733fd987d24f5b96b2afba724dd9c3082d787ad281aa0de91a5306bb9839->leave($__internal_13e4733fd987d24f5b96b2afba724dd9c3082d787ad281aa0de91a5306bb9839_prof);

        
        $__internal_631c0d23f6d4f74a8ecd5955729fd4663285263778b3112f95005b82e5cfea43->leave($__internal_631c0d23f6d4f74a8ecd5955729fd4663285263778b3112f95005b82e5cfea43_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ac2f9b6213a430f003238eb8f2aa37d1d126c4e944bcc2888532f5f6cab862c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac2f9b6213a430f003238eb8f2aa37d1d126c4e944bcc2888532f5f6cab862c9->enter($__internal_ac2f9b6213a430f003238eb8f2aa37d1d126c4e944bcc2888532f5f6cab862c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2a8bd7bf7cd9dbf147be956cee3c6d6b4ba0f97dce354d92ee029397b6758ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8bd7bf7cd9dbf147be956cee3c6d6b4ba0f97dce354d92ee029397b6758ef5->enter($__internal_2a8bd7bf7cd9dbf147be956cee3c6d6b4ba0f97dce354d92ee029397b6758ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_2a8bd7bf7cd9dbf147be956cee3c6d6b4ba0f97dce354d92ee029397b6758ef5->leave($__internal_2a8bd7bf7cd9dbf147be956cee3c6d6b4ba0f97dce354d92ee029397b6758ef5_prof);

        
        $__internal_ac2f9b6213a430f003238eb8f2aa37d1d126c4e944bcc2888532f5f6cab862c9->leave($__internal_ac2f9b6213a430f003238eb8f2aa37d1d126c4e944bcc2888532f5f6cab862c9_prof);

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
