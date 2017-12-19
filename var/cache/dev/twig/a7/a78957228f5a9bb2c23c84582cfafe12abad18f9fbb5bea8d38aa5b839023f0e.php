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
        $__internal_72ec3aa674971944b9d1a6016a25c9e15d100430ecd80dc3c3b5e60f2dbd5a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ec3aa674971944b9d1a6016a25c9e15d100430ecd80dc3c3b5e60f2dbd5a8c->enter($__internal_72ec3aa674971944b9d1a6016a25c9e15d100430ecd80dc3c3b5e60f2dbd5a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_ed7371236702f9741c04c9b7e1aa82ed6af4587e9467b3569fb3c4229c587b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed7371236702f9741c04c9b7e1aa82ed6af4587e9467b3569fb3c4229c587b61->enter($__internal_ed7371236702f9741c04c9b7e1aa82ed6af4587e9467b3569fb3c4229c587b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72ec3aa674971944b9d1a6016a25c9e15d100430ecd80dc3c3b5e60f2dbd5a8c->leave($__internal_72ec3aa674971944b9d1a6016a25c9e15d100430ecd80dc3c3b5e60f2dbd5a8c_prof);

        
        $__internal_ed7371236702f9741c04c9b7e1aa82ed6af4587e9467b3569fb3c4229c587b61->leave($__internal_ed7371236702f9741c04c9b7e1aa82ed6af4587e9467b3569fb3c4229c587b61_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_4cc0856825baaa8e9763f0920f6f9640f2215a12defb0cda467908351d0e6630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cc0856825baaa8e9763f0920f6f9640f2215a12defb0cda467908351d0e6630->enter($__internal_4cc0856825baaa8e9763f0920f6f9640f2215a12defb0cda467908351d0e6630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7270d7d9f6e055a4a0911dc9d235fe430c2baf67af431abfd34a70c530a08351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7270d7d9f6e055a4a0911dc9d235fe430c2baf67af431abfd34a70c530a08351->enter($__internal_7270d7d9f6e055a4a0911dc9d235fe430c2baf67af431abfd34a70c530a08351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_7270d7d9f6e055a4a0911dc9d235fe430c2baf67af431abfd34a70c530a08351->leave($__internal_7270d7d9f6e055a4a0911dc9d235fe430c2baf67af431abfd34a70c530a08351_prof);

        
        $__internal_4cc0856825baaa8e9763f0920f6f9640f2215a12defb0cda467908351d0e6630->leave($__internal_4cc0856825baaa8e9763f0920f6f9640f2215a12defb0cda467908351d0e6630_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_46f91a43dcdc98d9736b973a156de780dd6fb0fdf2fbe7bcb2033cd0295966d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f91a43dcdc98d9736b973a156de780dd6fb0fdf2fbe7bcb2033cd0295966d7->enter($__internal_46f91a43dcdc98d9736b973a156de780dd6fb0fdf2fbe7bcb2033cd0295966d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7518f4ceb65e91f9fdbb09fb9b89ccc58bb0258202061a6c2cf451df42266023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7518f4ceb65e91f9fdbb09fb9b89ccc58bb0258202061a6c2cf451df42266023->enter($__internal_7518f4ceb65e91f9fdbb09fb9b89ccc58bb0258202061a6c2cf451df42266023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7518f4ceb65e91f9fdbb09fb9b89ccc58bb0258202061a6c2cf451df42266023->leave($__internal_7518f4ceb65e91f9fdbb09fb9b89ccc58bb0258202061a6c2cf451df42266023_prof);

        
        $__internal_46f91a43dcdc98d9736b973a156de780dd6fb0fdf2fbe7bcb2033cd0295966d7->leave($__internal_46f91a43dcdc98d9736b973a156de780dd6fb0fdf2fbe7bcb2033cd0295966d7_prof);

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
