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
        $__internal_ecf10a439ec7a3fb3393955cd4ae442545ac07d4597359d0ee8162e2d8f652f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf10a439ec7a3fb3393955cd4ae442545ac07d4597359d0ee8162e2d8f652f9->enter($__internal_ecf10a439ec7a3fb3393955cd4ae442545ac07d4597359d0ee8162e2d8f652f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_50402ea0843250d7f87bdad2c43cd5d2a7c9c4d5c74f4c7a4beefc4827a0378d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50402ea0843250d7f87bdad2c43cd5d2a7c9c4d5c74f4c7a4beefc4827a0378d->enter($__internal_50402ea0843250d7f87bdad2c43cd5d2a7c9c4d5c74f4c7a4beefc4827a0378d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecf10a439ec7a3fb3393955cd4ae442545ac07d4597359d0ee8162e2d8f652f9->leave($__internal_ecf10a439ec7a3fb3393955cd4ae442545ac07d4597359d0ee8162e2d8f652f9_prof);

        
        $__internal_50402ea0843250d7f87bdad2c43cd5d2a7c9c4d5c74f4c7a4beefc4827a0378d->leave($__internal_50402ea0843250d7f87bdad2c43cd5d2a7c9c4d5c74f4c7a4beefc4827a0378d_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f5817e088536c5f6684219ffbc5934bb585f2e9f3e644e035eeeac8b4ee347f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5817e088536c5f6684219ffbc5934bb585f2e9f3e644e035eeeac8b4ee347f0->enter($__internal_f5817e088536c5f6684219ffbc5934bb585f2e9f3e644e035eeeac8b4ee347f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e8b8fbaff71669c6ae3344c1bb7af9a5332ac507ca49d46019fdbf7245e52090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b8fbaff71669c6ae3344c1bb7af9a5332ac507ca49d46019fdbf7245e52090->enter($__internal_e8b8fbaff71669c6ae3344c1bb7af9a5332ac507ca49d46019fdbf7245e52090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_e8b8fbaff71669c6ae3344c1bb7af9a5332ac507ca49d46019fdbf7245e52090->leave($__internal_e8b8fbaff71669c6ae3344c1bb7af9a5332ac507ca49d46019fdbf7245e52090_prof);

        
        $__internal_f5817e088536c5f6684219ffbc5934bb585f2e9f3e644e035eeeac8b4ee347f0->leave($__internal_f5817e088536c5f6684219ffbc5934bb585f2e9f3e644e035eeeac8b4ee347f0_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2af972706b0facc8d98df30f899ea4dbe7a6579a901325c1f6efb4d3e3e26d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af972706b0facc8d98df30f899ea4dbe7a6579a901325c1f6efb4d3e3e26d83->enter($__internal_2af972706b0facc8d98df30f899ea4dbe7a6579a901325c1f6efb4d3e3e26d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_064cb3f85f9d2e3b4699d7076ead219f7a59aadb43270c4634aec3fb2ab1c579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064cb3f85f9d2e3b4699d7076ead219f7a59aadb43270c4634aec3fb2ab1c579->enter($__internal_064cb3f85f9d2e3b4699d7076ead219f7a59aadb43270c4634aec3fb2ab1c579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_064cb3f85f9d2e3b4699d7076ead219f7a59aadb43270c4634aec3fb2ab1c579->leave($__internal_064cb3f85f9d2e3b4699d7076ead219f7a59aadb43270c4634aec3fb2ab1c579_prof);

        
        $__internal_2af972706b0facc8d98df30f899ea4dbe7a6579a901325c1f6efb4d3e3e26d83->leave($__internal_2af972706b0facc8d98df30f899ea4dbe7a6579a901325c1f6efb4d3e3e26d83_prof);

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
