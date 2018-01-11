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
        $__internal_ba47bb59a1ac9d2a2002a6907a25ffb514a3ed38df53ed8aeaea2292ff43d2d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba47bb59a1ac9d2a2002a6907a25ffb514a3ed38df53ed8aeaea2292ff43d2d8->enter($__internal_ba47bb59a1ac9d2a2002a6907a25ffb514a3ed38df53ed8aeaea2292ff43d2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_86735438b83bb96714cd5b63a9c7dd4a65045797fee4446a88cfe001b8d517bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86735438b83bb96714cd5b63a9c7dd4a65045797fee4446a88cfe001b8d517bd->enter($__internal_86735438b83bb96714cd5b63a9c7dd4a65045797fee4446a88cfe001b8d517bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba47bb59a1ac9d2a2002a6907a25ffb514a3ed38df53ed8aeaea2292ff43d2d8->leave($__internal_ba47bb59a1ac9d2a2002a6907a25ffb514a3ed38df53ed8aeaea2292ff43d2d8_prof);

        
        $__internal_86735438b83bb96714cd5b63a9c7dd4a65045797fee4446a88cfe001b8d517bd->leave($__internal_86735438b83bb96714cd5b63a9c7dd4a65045797fee4446a88cfe001b8d517bd_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_15ccf000011207e174d67b78fc17afeb0e005bd591215a951b01d6024df5e1df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15ccf000011207e174d67b78fc17afeb0e005bd591215a951b01d6024df5e1df->enter($__internal_15ccf000011207e174d67b78fc17afeb0e005bd591215a951b01d6024df5e1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a831d8c03d23d21ee0eb043384250c66f64deae3f237c1bec0403d3a97cafe96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a831d8c03d23d21ee0eb043384250c66f64deae3f237c1bec0403d3a97cafe96->enter($__internal_a831d8c03d23d21ee0eb043384250c66f64deae3f237c1bec0403d3a97cafe96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_a831d8c03d23d21ee0eb043384250c66f64deae3f237c1bec0403d3a97cafe96->leave($__internal_a831d8c03d23d21ee0eb043384250c66f64deae3f237c1bec0403d3a97cafe96_prof);

        
        $__internal_15ccf000011207e174d67b78fc17afeb0e005bd591215a951b01d6024df5e1df->leave($__internal_15ccf000011207e174d67b78fc17afeb0e005bd591215a951b01d6024df5e1df_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_55ce520a3a6c70dd5441896a252762e67eb0c86e0ae4cc0e7098bbc2b1861c6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ce520a3a6c70dd5441896a252762e67eb0c86e0ae4cc0e7098bbc2b1861c6b->enter($__internal_55ce520a3a6c70dd5441896a252762e67eb0c86e0ae4cc0e7098bbc2b1861c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_64fd007a5fc5e11642bb06199757fd2f88afc42ed7ecdc47b50018efa2f988ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64fd007a5fc5e11642bb06199757fd2f88afc42ed7ecdc47b50018efa2f988ab->enter($__internal_64fd007a5fc5e11642bb06199757fd2f88afc42ed7ecdc47b50018efa2f988ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_64fd007a5fc5e11642bb06199757fd2f88afc42ed7ecdc47b50018efa2f988ab->leave($__internal_64fd007a5fc5e11642bb06199757fd2f88afc42ed7ecdc47b50018efa2f988ab_prof);

        
        $__internal_55ce520a3a6c70dd5441896a252762e67eb0c86e0ae4cc0e7098bbc2b1861c6b->leave($__internal_55ce520a3a6c70dd5441896a252762e67eb0c86e0ae4cc0e7098bbc2b1861c6b_prof);

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
