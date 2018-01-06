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
        $__internal_f91bd158c9a609b33717b28cc444c38d99a69302607f2ada88bab878a8cbe9ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f91bd158c9a609b33717b28cc444c38d99a69302607f2ada88bab878a8cbe9ce->enter($__internal_f91bd158c9a609b33717b28cc444c38d99a69302607f2ada88bab878a8cbe9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_a2b478cb169230638048d612850dad5ed8bae4f0e62ef725bbae0398fb3b74cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b478cb169230638048d612850dad5ed8bae4f0e62ef725bbae0398fb3b74cc->enter($__internal_a2b478cb169230638048d612850dad5ed8bae4f0e62ef725bbae0398fb3b74cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f91bd158c9a609b33717b28cc444c38d99a69302607f2ada88bab878a8cbe9ce->leave($__internal_f91bd158c9a609b33717b28cc444c38d99a69302607f2ada88bab878a8cbe9ce_prof);

        
        $__internal_a2b478cb169230638048d612850dad5ed8bae4f0e62ef725bbae0398fb3b74cc->leave($__internal_a2b478cb169230638048d612850dad5ed8bae4f0e62ef725bbae0398fb3b74cc_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e174ae24e7657928826614b667b91c4df47916878c52118dfd1622bc173075ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e174ae24e7657928826614b667b91c4df47916878c52118dfd1622bc173075ed->enter($__internal_e174ae24e7657928826614b667b91c4df47916878c52118dfd1622bc173075ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_bc50ae99a10fe96ed55bd20bd4bdf6347961853a0fbf5a39b7f97798b4be3d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc50ae99a10fe96ed55bd20bd4bdf6347961853a0fbf5a39b7f97798b4be3d49->enter($__internal_bc50ae99a10fe96ed55bd20bd4bdf6347961853a0fbf5a39b7f97798b4be3d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_bc50ae99a10fe96ed55bd20bd4bdf6347961853a0fbf5a39b7f97798b4be3d49->leave($__internal_bc50ae99a10fe96ed55bd20bd4bdf6347961853a0fbf5a39b7f97798b4be3d49_prof);

        
        $__internal_e174ae24e7657928826614b667b91c4df47916878c52118dfd1622bc173075ed->leave($__internal_e174ae24e7657928826614b667b91c4df47916878c52118dfd1622bc173075ed_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b83b05e5462d4600db9b7d7045c587dbf5bed5c89a15c12706ed0a391bae45a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b83b05e5462d4600db9b7d7045c587dbf5bed5c89a15c12706ed0a391bae45a9->enter($__internal_b83b05e5462d4600db9b7d7045c587dbf5bed5c89a15c12706ed0a391bae45a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_404170bf20f57d755e81d7542df1f80cb03654065114558953b8121669debe32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404170bf20f57d755e81d7542df1f80cb03654065114558953b8121669debe32->enter($__internal_404170bf20f57d755e81d7542df1f80cb03654065114558953b8121669debe32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_404170bf20f57d755e81d7542df1f80cb03654065114558953b8121669debe32->leave($__internal_404170bf20f57d755e81d7542df1f80cb03654065114558953b8121669debe32_prof);

        
        $__internal_b83b05e5462d4600db9b7d7045c587dbf5bed5c89a15c12706ed0a391bae45a9->leave($__internal_b83b05e5462d4600db9b7d7045c587dbf5bed5c89a15c12706ed0a391bae45a9_prof);

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
