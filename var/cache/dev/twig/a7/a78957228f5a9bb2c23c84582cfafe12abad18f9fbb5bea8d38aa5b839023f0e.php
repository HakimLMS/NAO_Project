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
        $__internal_2c8da4e54d91ba21c6e2fbb6af35fdd9dc26e9e3938280b55e701db91ebe28c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8da4e54d91ba21c6e2fbb6af35fdd9dc26e9e3938280b55e701db91ebe28c3->enter($__internal_2c8da4e54d91ba21c6e2fbb6af35fdd9dc26e9e3938280b55e701db91ebe28c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_1c58aec8f732c977f1af2054c2ea8ffac27ead1973951c19cdf64f92607893a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c58aec8f732c977f1af2054c2ea8ffac27ead1973951c19cdf64f92607893a5->enter($__internal_1c58aec8f732c977f1af2054c2ea8ffac27ead1973951c19cdf64f92607893a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c8da4e54d91ba21c6e2fbb6af35fdd9dc26e9e3938280b55e701db91ebe28c3->leave($__internal_2c8da4e54d91ba21c6e2fbb6af35fdd9dc26e9e3938280b55e701db91ebe28c3_prof);

        
        $__internal_1c58aec8f732c977f1af2054c2ea8ffac27ead1973951c19cdf64f92607893a5->leave($__internal_1c58aec8f732c977f1af2054c2ea8ffac27ead1973951c19cdf64f92607893a5_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_c288cadda8425c1ea43a7f1cea8c5d569c9c9ac6b0adda54c2872873f9a0796f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c288cadda8425c1ea43a7f1cea8c5d569c9c9ac6b0adda54c2872873f9a0796f->enter($__internal_c288cadda8425c1ea43a7f1cea8c5d569c9c9ac6b0adda54c2872873f9a0796f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_3c7e120d66120799def9a6aca2875d4fdcb94044ccb60c4b09347510cf919a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7e120d66120799def9a6aca2875d4fdcb94044ccb60c4b09347510cf919a82->enter($__internal_3c7e120d66120799def9a6aca2875d4fdcb94044ccb60c4b09347510cf919a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_3c7e120d66120799def9a6aca2875d4fdcb94044ccb60c4b09347510cf919a82->leave($__internal_3c7e120d66120799def9a6aca2875d4fdcb94044ccb60c4b09347510cf919a82_prof);

        
        $__internal_c288cadda8425c1ea43a7f1cea8c5d569c9c9ac6b0adda54c2872873f9a0796f->leave($__internal_c288cadda8425c1ea43a7f1cea8c5d569c9c9ac6b0adda54c2872873f9a0796f_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce08784764b25001fdb6b601a175ce0dc5939b78cc4948b93e91848fce8c67b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce08784764b25001fdb6b601a175ce0dc5939b78cc4948b93e91848fce8c67b3->enter($__internal_ce08784764b25001fdb6b601a175ce0dc5939b78cc4948b93e91848fce8c67b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a8385bf68ef42d87997299ffb4f80c4d7593c9015a31230f96c226c8208faca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8385bf68ef42d87997299ffb4f80c4d7593c9015a31230f96c226c8208faca4->enter($__internal_a8385bf68ef42d87997299ffb4f80c4d7593c9015a31230f96c226c8208faca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a8385bf68ef42d87997299ffb4f80c4d7593c9015a31230f96c226c8208faca4->leave($__internal_a8385bf68ef42d87997299ffb4f80c4d7593c9015a31230f96c226c8208faca4_prof);

        
        $__internal_ce08784764b25001fdb6b601a175ce0dc5939b78cc4948b93e91848fce8c67b3->leave($__internal_ce08784764b25001fdb6b601a175ce0dc5939b78cc4948b93e91848fce8c67b3_prof);

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
