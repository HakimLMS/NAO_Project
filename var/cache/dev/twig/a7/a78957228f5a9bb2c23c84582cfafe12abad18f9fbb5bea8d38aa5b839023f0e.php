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
        $__internal_9be49c94ea0a3cd1a45e998a66e093583e068b5bd6e2cbf92fb6177755fc9cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9be49c94ea0a3cd1a45e998a66e093583e068b5bd6e2cbf92fb6177755fc9cd2->enter($__internal_9be49c94ea0a3cd1a45e998a66e093583e068b5bd6e2cbf92fb6177755fc9cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_31407f22c0848b7c2a37432b0156c24d20781ed0c4a9edad1e2b0a89afd818da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31407f22c0848b7c2a37432b0156c24d20781ed0c4a9edad1e2b0a89afd818da->enter($__internal_31407f22c0848b7c2a37432b0156c24d20781ed0c4a9edad1e2b0a89afd818da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9be49c94ea0a3cd1a45e998a66e093583e068b5bd6e2cbf92fb6177755fc9cd2->leave($__internal_9be49c94ea0a3cd1a45e998a66e093583e068b5bd6e2cbf92fb6177755fc9cd2_prof);

        
        $__internal_31407f22c0848b7c2a37432b0156c24d20781ed0c4a9edad1e2b0a89afd818da->leave($__internal_31407f22c0848b7c2a37432b0156c24d20781ed0c4a9edad1e2b0a89afd818da_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8937a7699409ea58f7fa46e4f720022201a0b8077110ebbbe807f77427b391a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8937a7699409ea58f7fa46e4f720022201a0b8077110ebbbe807f77427b391a5->enter($__internal_8937a7699409ea58f7fa46e4f720022201a0b8077110ebbbe807f77427b391a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_04d6d292d501427321fac02e6ec6a63c031a74a6cc2524b18678efcd0c72248a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d6d292d501427321fac02e6ec6a63c031a74a6cc2524b18678efcd0c72248a->enter($__internal_04d6d292d501427321fac02e6ec6a63c031a74a6cc2524b18678efcd0c72248a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_04d6d292d501427321fac02e6ec6a63c031a74a6cc2524b18678efcd0c72248a->leave($__internal_04d6d292d501427321fac02e6ec6a63c031a74a6cc2524b18678efcd0c72248a_prof);

        
        $__internal_8937a7699409ea58f7fa46e4f720022201a0b8077110ebbbe807f77427b391a5->leave($__internal_8937a7699409ea58f7fa46e4f720022201a0b8077110ebbbe807f77427b391a5_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dd226e54196792c5ede8d8b046ed589895b5dc641174cb28a81d018dd4e97b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd226e54196792c5ede8d8b046ed589895b5dc641174cb28a81d018dd4e97b34->enter($__internal_dd226e54196792c5ede8d8b046ed589895b5dc641174cb28a81d018dd4e97b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_931e1b373359a09fafa6f552119180964848c99c81e9002074a9e12a82975919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931e1b373359a09fafa6f552119180964848c99c81e9002074a9e12a82975919->enter($__internal_931e1b373359a09fafa6f552119180964848c99c81e9002074a9e12a82975919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_931e1b373359a09fafa6f552119180964848c99c81e9002074a9e12a82975919->leave($__internal_931e1b373359a09fafa6f552119180964848c99c81e9002074a9e12a82975919_prof);

        
        $__internal_dd226e54196792c5ede8d8b046ed589895b5dc641174cb28a81d018dd4e97b34->leave($__internal_dd226e54196792c5ede8d8b046ed589895b5dc641174cb28a81d018dd4e97b34_prof);

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
