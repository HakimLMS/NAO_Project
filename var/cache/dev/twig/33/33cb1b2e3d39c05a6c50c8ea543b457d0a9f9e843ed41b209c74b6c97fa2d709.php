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
        $__internal_f02d2bc6dc8a4efb19215f7fbd8562cc9059c7b61df18bd177b819cd1c53e332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02d2bc6dc8a4efb19215f7fbd8562cc9059c7b61df18bd177b819cd1c53e332->enter($__internal_f02d2bc6dc8a4efb19215f7fbd8562cc9059c7b61df18bd177b819cd1c53e332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_b12e5ca71b0da4a4830178042a6fa1edd6987922669780c4e5681e0c59237b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b12e5ca71b0da4a4830178042a6fa1edd6987922669780c4e5681e0c59237b1f->enter($__internal_b12e5ca71b0da4a4830178042a6fa1edd6987922669780c4e5681e0c59237b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f02d2bc6dc8a4efb19215f7fbd8562cc9059c7b61df18bd177b819cd1c53e332->leave($__internal_f02d2bc6dc8a4efb19215f7fbd8562cc9059c7b61df18bd177b819cd1c53e332_prof);

        
        $__internal_b12e5ca71b0da4a4830178042a6fa1edd6987922669780c4e5681e0c59237b1f->leave($__internal_b12e5ca71b0da4a4830178042a6fa1edd6987922669780c4e5681e0c59237b1f_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b1ee5ca20968ace2601b096d506cc4cbc3cbc399334d40f5b917b42e725e4580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ee5ca20968ace2601b096d506cc4cbc3cbc399334d40f5b917b42e725e4580->enter($__internal_b1ee5ca20968ace2601b096d506cc4cbc3cbc399334d40f5b917b42e725e4580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_dcd9a06cabc2c06f6a74b9c593062ce59bb786ff4c1d3f7dfb282e2c6055dbb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd9a06cabc2c06f6a74b9c593062ce59bb786ff4c1d3f7dfb282e2c6055dbb2->enter($__internal_dcd9a06cabc2c06f6a74b9c593062ce59bb786ff4c1d3f7dfb282e2c6055dbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_dcd9a06cabc2c06f6a74b9c593062ce59bb786ff4c1d3f7dfb282e2c6055dbb2->leave($__internal_dcd9a06cabc2c06f6a74b9c593062ce59bb786ff4c1d3f7dfb282e2c6055dbb2_prof);

        
        $__internal_b1ee5ca20968ace2601b096d506cc4cbc3cbc399334d40f5b917b42e725e4580->leave($__internal_b1ee5ca20968ace2601b096d506cc4cbc3cbc399334d40f5b917b42e725e4580_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_240845e0ad3f8594125a2a62b58a5e445838ac904e95caf8d0947f25290e4161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_240845e0ad3f8594125a2a62b58a5e445838ac904e95caf8d0947f25290e4161->enter($__internal_240845e0ad3f8594125a2a62b58a5e445838ac904e95caf8d0947f25290e4161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_61bdc54546b0c4f16dd1c089a5e5f3e91bbf0bff2d66721f32429f22dba948f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61bdc54546b0c4f16dd1c089a5e5f3e91bbf0bff2d66721f32429f22dba948f4->enter($__internal_61bdc54546b0c4f16dd1c089a5e5f3e91bbf0bff2d66721f32429f22dba948f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_61bdc54546b0c4f16dd1c089a5e5f3e91bbf0bff2d66721f32429f22dba948f4->leave($__internal_61bdc54546b0c4f16dd1c089a5e5f3e91bbf0bff2d66721f32429f22dba948f4_prof);

        
        $__internal_240845e0ad3f8594125a2a62b58a5e445838ac904e95caf8d0947f25290e4161->leave($__internal_240845e0ad3f8594125a2a62b58a5e445838ac904e95caf8d0947f25290e4161_prof);

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
