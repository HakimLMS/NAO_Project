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
        $__internal_c90163e3101f8533e8e2c3d0039671114c2c3b08f531101867864491822122d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c90163e3101f8533e8e2c3d0039671114c2c3b08f531101867864491822122d2->enter($__internal_c90163e3101f8533e8e2c3d0039671114c2c3b08f531101867864491822122d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_398dda17ec727646fdff2faa434aa3796164f7e817d38c596853af000b5289be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398dda17ec727646fdff2faa434aa3796164f7e817d38c596853af000b5289be->enter($__internal_398dda17ec727646fdff2faa434aa3796164f7e817d38c596853af000b5289be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c90163e3101f8533e8e2c3d0039671114c2c3b08f531101867864491822122d2->leave($__internal_c90163e3101f8533e8e2c3d0039671114c2c3b08f531101867864491822122d2_prof);

        
        $__internal_398dda17ec727646fdff2faa434aa3796164f7e817d38c596853af000b5289be->leave($__internal_398dda17ec727646fdff2faa434aa3796164f7e817d38c596853af000b5289be_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2d4896579b67597d6b714df5d72bf57cc08ec31a370efb337e8a8aa15e7c2fe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d4896579b67597d6b714df5d72bf57cc08ec31a370efb337e8a8aa15e7c2fe3->enter($__internal_2d4896579b67597d6b714df5d72bf57cc08ec31a370efb337e8a8aa15e7c2fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_53459dca035f7ce3eb4a67c4221b324f1d99f3441fb4243c3c52d9056b3f0378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53459dca035f7ce3eb4a67c4221b324f1d99f3441fb4243c3c52d9056b3f0378->enter($__internal_53459dca035f7ce3eb4a67c4221b324f1d99f3441fb4243c3c52d9056b3f0378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_53459dca035f7ce3eb4a67c4221b324f1d99f3441fb4243c3c52d9056b3f0378->leave($__internal_53459dca035f7ce3eb4a67c4221b324f1d99f3441fb4243c3c52d9056b3f0378_prof);

        
        $__internal_2d4896579b67597d6b714df5d72bf57cc08ec31a370efb337e8a8aa15e7c2fe3->leave($__internal_2d4896579b67597d6b714df5d72bf57cc08ec31a370efb337e8a8aa15e7c2fe3_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8a0fdcf6ee3581d3fca7e8035d5709fcc6bcbc195d9f9ad8eb0dbb36620a2ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a0fdcf6ee3581d3fca7e8035d5709fcc6bcbc195d9f9ad8eb0dbb36620a2ec->enter($__internal_d8a0fdcf6ee3581d3fca7e8035d5709fcc6bcbc195d9f9ad8eb0dbb36620a2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fc83f1491f01e86ba91392110ceb8bc1193246fc5122a83971a7dd82c73ea462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc83f1491f01e86ba91392110ceb8bc1193246fc5122a83971a7dd82c73ea462->enter($__internal_fc83f1491f01e86ba91392110ceb8bc1193246fc5122a83971a7dd82c73ea462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_fc83f1491f01e86ba91392110ceb8bc1193246fc5122a83971a7dd82c73ea462->leave($__internal_fc83f1491f01e86ba91392110ceb8bc1193246fc5122a83971a7dd82c73ea462_prof);

        
        $__internal_d8a0fdcf6ee3581d3fca7e8035d5709fcc6bcbc195d9f9ad8eb0dbb36620a2ec->leave($__internal_d8a0fdcf6ee3581d3fca7e8035d5709fcc6bcbc195d9f9ad8eb0dbb36620a2ec_prof);

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
