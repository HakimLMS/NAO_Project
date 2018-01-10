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
        $__internal_41e6d928f81fd5f623737885e76d76076864e0c1a06e5344d4fa891daa4b0639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41e6d928f81fd5f623737885e76d76076864e0c1a06e5344d4fa891daa4b0639->enter($__internal_41e6d928f81fd5f623737885e76d76076864e0c1a06e5344d4fa891daa4b0639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_0360d1a4a9f14ebdbf72b8e59f9c14ebb115fd84465ff17231c08e5fa3268f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0360d1a4a9f14ebdbf72b8e59f9c14ebb115fd84465ff17231c08e5fa3268f40->enter($__internal_0360d1a4a9f14ebdbf72b8e59f9c14ebb115fd84465ff17231c08e5fa3268f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41e6d928f81fd5f623737885e76d76076864e0c1a06e5344d4fa891daa4b0639->leave($__internal_41e6d928f81fd5f623737885e76d76076864e0c1a06e5344d4fa891daa4b0639_prof);

        
        $__internal_0360d1a4a9f14ebdbf72b8e59f9c14ebb115fd84465ff17231c08e5fa3268f40->leave($__internal_0360d1a4a9f14ebdbf72b8e59f9c14ebb115fd84465ff17231c08e5fa3268f40_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a44c288d15940a06c6b88227ced6b6fd3968ce6013e2f0ac4c465a1a09570978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a44c288d15940a06c6b88227ced6b6fd3968ce6013e2f0ac4c465a1a09570978->enter($__internal_a44c288d15940a06c6b88227ced6b6fd3968ce6013e2f0ac4c465a1a09570978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c6861107a0598b24190e53b8a48d6623abf72d4a765a1b25d7bf583c029cd34f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6861107a0598b24190e53b8a48d6623abf72d4a765a1b25d7bf583c029cd34f->enter($__internal_c6861107a0598b24190e53b8a48d6623abf72d4a765a1b25d7bf583c029cd34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_c6861107a0598b24190e53b8a48d6623abf72d4a765a1b25d7bf583c029cd34f->leave($__internal_c6861107a0598b24190e53b8a48d6623abf72d4a765a1b25d7bf583c029cd34f_prof);

        
        $__internal_a44c288d15940a06c6b88227ced6b6fd3968ce6013e2f0ac4c465a1a09570978->leave($__internal_a44c288d15940a06c6b88227ced6b6fd3968ce6013e2f0ac4c465a1a09570978_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4af5729d5efcd4d6519521a7733b6a3a9bc0337044db13443b890cec77943550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4af5729d5efcd4d6519521a7733b6a3a9bc0337044db13443b890cec77943550->enter($__internal_4af5729d5efcd4d6519521a7733b6a3a9bc0337044db13443b890cec77943550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b8e6caf21e8131a32239de3787a8e63d9de91dd45aab803b34fe932822ebb405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e6caf21e8131a32239de3787a8e63d9de91dd45aab803b34fe932822ebb405->enter($__internal_b8e6caf21e8131a32239de3787a8e63d9de91dd45aab803b34fe932822ebb405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b8e6caf21e8131a32239de3787a8e63d9de91dd45aab803b34fe932822ebb405->leave($__internal_b8e6caf21e8131a32239de3787a8e63d9de91dd45aab803b34fe932822ebb405_prof);

        
        $__internal_4af5729d5efcd4d6519521a7733b6a3a9bc0337044db13443b890cec77943550->leave($__internal_4af5729d5efcd4d6519521a7733b6a3a9bc0337044db13443b890cec77943550_prof);

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
