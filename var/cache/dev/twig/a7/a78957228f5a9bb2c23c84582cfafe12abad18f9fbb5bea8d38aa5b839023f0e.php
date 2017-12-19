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
        $__internal_c6d3cb4daa4e1cf81860a7cc8f4416a63e86febb8ebd7dc9d210d995fe2b88e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d3cb4daa4e1cf81860a7cc8f4416a63e86febb8ebd7dc9d210d995fe2b88e0->enter($__internal_c6d3cb4daa4e1cf81860a7cc8f4416a63e86febb8ebd7dc9d210d995fe2b88e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_f4c6a14cece15610d93541b324aec94689cd9e9ad4f61f1236df1f6a971c8cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c6a14cece15610d93541b324aec94689cd9e9ad4f61f1236df1f6a971c8cdd->enter($__internal_f4c6a14cece15610d93541b324aec94689cd9e9ad4f61f1236df1f6a971c8cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6d3cb4daa4e1cf81860a7cc8f4416a63e86febb8ebd7dc9d210d995fe2b88e0->leave($__internal_c6d3cb4daa4e1cf81860a7cc8f4416a63e86febb8ebd7dc9d210d995fe2b88e0_prof);

        
        $__internal_f4c6a14cece15610d93541b324aec94689cd9e9ad4f61f1236df1f6a971c8cdd->leave($__internal_f4c6a14cece15610d93541b324aec94689cd9e9ad4f61f1236df1f6a971c8cdd_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7cda6271678bffc5c37c1845cef97dacb4478827940b5b2c4e37889b5bc9d0bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cda6271678bffc5c37c1845cef97dacb4478827940b5b2c4e37889b5bc9d0bf->enter($__internal_7cda6271678bffc5c37c1845cef97dacb4478827940b5b2c4e37889b5bc9d0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7d896fd9e9099378fc8b1804f67a1d9fb382ae583db62b08d654e6f7cc36b19b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d896fd9e9099378fc8b1804f67a1d9fb382ae583db62b08d654e6f7cc36b19b->enter($__internal_7d896fd9e9099378fc8b1804f67a1d9fb382ae583db62b08d654e6f7cc36b19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_7d896fd9e9099378fc8b1804f67a1d9fb382ae583db62b08d654e6f7cc36b19b->leave($__internal_7d896fd9e9099378fc8b1804f67a1d9fb382ae583db62b08d654e6f7cc36b19b_prof);

        
        $__internal_7cda6271678bffc5c37c1845cef97dacb4478827940b5b2c4e37889b5bc9d0bf->leave($__internal_7cda6271678bffc5c37c1845cef97dacb4478827940b5b2c4e37889b5bc9d0bf_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66e59e4dab65c26629e0b4043f5b10cd5f584b7e4cb9115758b1b394ea8266f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e59e4dab65c26629e0b4043f5b10cd5f584b7e4cb9115758b1b394ea8266f2->enter($__internal_66e59e4dab65c26629e0b4043f5b10cd5f584b7e4cb9115758b1b394ea8266f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_791d1191d262cc5ad9d9f64c34460b0991c4915d4bf1515ba73e2ee20213045b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_791d1191d262cc5ad9d9f64c34460b0991c4915d4bf1515ba73e2ee20213045b->enter($__internal_791d1191d262cc5ad9d9f64c34460b0991c4915d4bf1515ba73e2ee20213045b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_791d1191d262cc5ad9d9f64c34460b0991c4915d4bf1515ba73e2ee20213045b->leave($__internal_791d1191d262cc5ad9d9f64c34460b0991c4915d4bf1515ba73e2ee20213045b_prof);

        
        $__internal_66e59e4dab65c26629e0b4043f5b10cd5f584b7e4cb9115758b1b394ea8266f2->leave($__internal_66e59e4dab65c26629e0b4043f5b10cd5f584b7e4cb9115758b1b394ea8266f2_prof);

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
