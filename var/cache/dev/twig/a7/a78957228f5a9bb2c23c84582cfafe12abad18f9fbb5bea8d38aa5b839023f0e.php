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
        $__internal_527ea82d6464b3e9ecd0c27d89722e62b5ba18a4149e29f7b9873e185cba2e56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_527ea82d6464b3e9ecd0c27d89722e62b5ba18a4149e29f7b9873e185cba2e56->enter($__internal_527ea82d6464b3e9ecd0c27d89722e62b5ba18a4149e29f7b9873e185cba2e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_1d80b722ea10b1fe81967c9f27f52542f58bdc38f6b0962af361214a31743124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d80b722ea10b1fe81967c9f27f52542f58bdc38f6b0962af361214a31743124->enter($__internal_1d80b722ea10b1fe81967c9f27f52542f58bdc38f6b0962af361214a31743124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_527ea82d6464b3e9ecd0c27d89722e62b5ba18a4149e29f7b9873e185cba2e56->leave($__internal_527ea82d6464b3e9ecd0c27d89722e62b5ba18a4149e29f7b9873e185cba2e56_prof);

        
        $__internal_1d80b722ea10b1fe81967c9f27f52542f58bdc38f6b0962af361214a31743124->leave($__internal_1d80b722ea10b1fe81967c9f27f52542f58bdc38f6b0962af361214a31743124_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ca7be375be535e031fd2de09deb20395ca2c7f254c7bb8495887a0fa2f270cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca7be375be535e031fd2de09deb20395ca2c7f254c7bb8495887a0fa2f270cac->enter($__internal_ca7be375be535e031fd2de09deb20395ca2c7f254c7bb8495887a0fa2f270cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_58a786605994861ec0aba47985606b8446bb7e5e74d2ef14bd475355693c4b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58a786605994861ec0aba47985606b8446bb7e5e74d2ef14bd475355693c4b4c->enter($__internal_58a786605994861ec0aba47985606b8446bb7e5e74d2ef14bd475355693c4b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_58a786605994861ec0aba47985606b8446bb7e5e74d2ef14bd475355693c4b4c->leave($__internal_58a786605994861ec0aba47985606b8446bb7e5e74d2ef14bd475355693c4b4c_prof);

        
        $__internal_ca7be375be535e031fd2de09deb20395ca2c7f254c7bb8495887a0fa2f270cac->leave($__internal_ca7be375be535e031fd2de09deb20395ca2c7f254c7bb8495887a0fa2f270cac_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ab53f78c5cd1c38a1c349862b6e6c91ef17c1fd5f2226bfb1e34b0a0485e684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ab53f78c5cd1c38a1c349862b6e6c91ef17c1fd5f2226bfb1e34b0a0485e684->enter($__internal_2ab53f78c5cd1c38a1c349862b6e6c91ef17c1fd5f2226bfb1e34b0a0485e684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6022869b1ce1c39e2ff87b9fdc65f0d2c718b39d6492d281463d7e2ec864f5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6022869b1ce1c39e2ff87b9fdc65f0d2c718b39d6492d281463d7e2ec864f5a0->enter($__internal_6022869b1ce1c39e2ff87b9fdc65f0d2c718b39d6492d281463d7e2ec864f5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6022869b1ce1c39e2ff87b9fdc65f0d2c718b39d6492d281463d7e2ec864f5a0->leave($__internal_6022869b1ce1c39e2ff87b9fdc65f0d2c718b39d6492d281463d7e2ec864f5a0_prof);

        
        $__internal_2ab53f78c5cd1c38a1c349862b6e6c91ef17c1fd5f2226bfb1e34b0a0485e684->leave($__internal_2ab53f78c5cd1c38a1c349862b6e6c91ef17c1fd5f2226bfb1e34b0a0485e684_prof);

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
