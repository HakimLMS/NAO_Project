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
        $__internal_7ca4570c44df323ba10b3efd588c61753fcc97142b76ead6c876ecf0d46a345a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca4570c44df323ba10b3efd588c61753fcc97142b76ead6c876ecf0d46a345a->enter($__internal_7ca4570c44df323ba10b3efd588c61753fcc97142b76ead6c876ecf0d46a345a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_06132038524f8ec98371bec8209a8031e7f7db24641887c58420059e2f0b6e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06132038524f8ec98371bec8209a8031e7f7db24641887c58420059e2f0b6e3b->enter($__internal_06132038524f8ec98371bec8209a8031e7f7db24641887c58420059e2f0b6e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ca4570c44df323ba10b3efd588c61753fcc97142b76ead6c876ecf0d46a345a->leave($__internal_7ca4570c44df323ba10b3efd588c61753fcc97142b76ead6c876ecf0d46a345a_prof);

        
        $__internal_06132038524f8ec98371bec8209a8031e7f7db24641887c58420059e2f0b6e3b->leave($__internal_06132038524f8ec98371bec8209a8031e7f7db24641887c58420059e2f0b6e3b_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_755e0faa3a6202f335f2c3bb5537ef6ef4e6b07fac5910cb27bd8c3b352e59be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_755e0faa3a6202f335f2c3bb5537ef6ef4e6b07fac5910cb27bd8c3b352e59be->enter($__internal_755e0faa3a6202f335f2c3bb5537ef6ef4e6b07fac5910cb27bd8c3b352e59be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e9fdbf11d9d7aad5468e855f6c8cf4855b71ddaefbfc694c4b5847fd55e69503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9fdbf11d9d7aad5468e855f6c8cf4855b71ddaefbfc694c4b5847fd55e69503->enter($__internal_e9fdbf11d9d7aad5468e855f6c8cf4855b71ddaefbfc694c4b5847fd55e69503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_e9fdbf11d9d7aad5468e855f6c8cf4855b71ddaefbfc694c4b5847fd55e69503->leave($__internal_e9fdbf11d9d7aad5468e855f6c8cf4855b71ddaefbfc694c4b5847fd55e69503_prof);

        
        $__internal_755e0faa3a6202f335f2c3bb5537ef6ef4e6b07fac5910cb27bd8c3b352e59be->leave($__internal_755e0faa3a6202f335f2c3bb5537ef6ef4e6b07fac5910cb27bd8c3b352e59be_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e25dbf5492e3246d7860e74e92dc5fb66a275a530289ef40d3925fbbc4ca7548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e25dbf5492e3246d7860e74e92dc5fb66a275a530289ef40d3925fbbc4ca7548->enter($__internal_e25dbf5492e3246d7860e74e92dc5fb66a275a530289ef40d3925fbbc4ca7548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_060065fece48782108c095ebe823e04018cc0071823e5127365903a831431cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060065fece48782108c095ebe823e04018cc0071823e5127365903a831431cc9->enter($__internal_060065fece48782108c095ebe823e04018cc0071823e5127365903a831431cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_060065fece48782108c095ebe823e04018cc0071823e5127365903a831431cc9->leave($__internal_060065fece48782108c095ebe823e04018cc0071823e5127365903a831431cc9_prof);

        
        $__internal_e25dbf5492e3246d7860e74e92dc5fb66a275a530289ef40d3925fbbc4ca7548->leave($__internal_e25dbf5492e3246d7860e74e92dc5fb66a275a530289ef40d3925fbbc4ca7548_prof);

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
