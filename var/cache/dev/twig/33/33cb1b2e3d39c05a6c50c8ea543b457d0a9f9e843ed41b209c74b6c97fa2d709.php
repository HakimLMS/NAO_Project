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
        $__internal_40629b1a2e3581b6a2e9ed9e3f497ecf0bd43acf03fa040a198cffb1c12e1521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40629b1a2e3581b6a2e9ed9e3f497ecf0bd43acf03fa040a198cffb1c12e1521->enter($__internal_40629b1a2e3581b6a2e9ed9e3f497ecf0bd43acf03fa040a198cffb1c12e1521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_1a159ac67970a523cdaf0d3f6f2e67ec9e03701671fe08509369cec2f53b1aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a159ac67970a523cdaf0d3f6f2e67ec9e03701671fe08509369cec2f53b1aff->enter($__internal_1a159ac67970a523cdaf0d3f6f2e67ec9e03701671fe08509369cec2f53b1aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40629b1a2e3581b6a2e9ed9e3f497ecf0bd43acf03fa040a198cffb1c12e1521->leave($__internal_40629b1a2e3581b6a2e9ed9e3f497ecf0bd43acf03fa040a198cffb1c12e1521_prof);

        
        $__internal_1a159ac67970a523cdaf0d3f6f2e67ec9e03701671fe08509369cec2f53b1aff->leave($__internal_1a159ac67970a523cdaf0d3f6f2e67ec9e03701671fe08509369cec2f53b1aff_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a950cd5d1602b75b8a7467a3bcd070c689697993f7fd2aa9737aa57d98167fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a950cd5d1602b75b8a7467a3bcd070c689697993f7fd2aa9737aa57d98167fb8->enter($__internal_a950cd5d1602b75b8a7467a3bcd070c689697993f7fd2aa9737aa57d98167fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b1f1bf4f01a8517ab2b76e83b8734e39fb2eeee59f32ce005371e1b9d3ea8f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f1bf4f01a8517ab2b76e83b8734e39fb2eeee59f32ce005371e1b9d3ea8f83->enter($__internal_b1f1bf4f01a8517ab2b76e83b8734e39fb2eeee59f32ce005371e1b9d3ea8f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_b1f1bf4f01a8517ab2b76e83b8734e39fb2eeee59f32ce005371e1b9d3ea8f83->leave($__internal_b1f1bf4f01a8517ab2b76e83b8734e39fb2eeee59f32ce005371e1b9d3ea8f83_prof);

        
        $__internal_a950cd5d1602b75b8a7467a3bcd070c689697993f7fd2aa9737aa57d98167fb8->leave($__internal_a950cd5d1602b75b8a7467a3bcd070c689697993f7fd2aa9737aa57d98167fb8_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bac062ad417640e92dfab8e549de144bb40d17b18af183b33f2ac1ca424da48a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bac062ad417640e92dfab8e549de144bb40d17b18af183b33f2ac1ca424da48a->enter($__internal_bac062ad417640e92dfab8e549de144bb40d17b18af183b33f2ac1ca424da48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c3ff3aecf28c165944dcecb0165e48eedaeaf481157c75e8a3db9ece6dfa97bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ff3aecf28c165944dcecb0165e48eedaeaf481157c75e8a3db9ece6dfa97bc->enter($__internal_c3ff3aecf28c165944dcecb0165e48eedaeaf481157c75e8a3db9ece6dfa97bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c3ff3aecf28c165944dcecb0165e48eedaeaf481157c75e8a3db9ece6dfa97bc->leave($__internal_c3ff3aecf28c165944dcecb0165e48eedaeaf481157c75e8a3db9ece6dfa97bc_prof);

        
        $__internal_bac062ad417640e92dfab8e549de144bb40d17b18af183b33f2ac1ca424da48a->leave($__internal_bac062ad417640e92dfab8e549de144bb40d17b18af183b33f2ac1ca424da48a_prof);

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
