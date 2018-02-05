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
        $__internal_4d198ef90a49fdc76dba17f4186b3cb181f4bdd071a2fd2f9cb8da5811f0e1a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d198ef90a49fdc76dba17f4186b3cb181f4bdd071a2fd2f9cb8da5811f0e1a7->enter($__internal_4d198ef90a49fdc76dba17f4186b3cb181f4bdd071a2fd2f9cb8da5811f0e1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_e4ca41e79661cb7a7b94624b2345cb8bfcc3988d03d7f52c342f9f56a756d1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ca41e79661cb7a7b94624b2345cb8bfcc3988d03d7f52c342f9f56a756d1db->enter($__internal_e4ca41e79661cb7a7b94624b2345cb8bfcc3988d03d7f52c342f9f56a756d1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d198ef90a49fdc76dba17f4186b3cb181f4bdd071a2fd2f9cb8da5811f0e1a7->leave($__internal_4d198ef90a49fdc76dba17f4186b3cb181f4bdd071a2fd2f9cb8da5811f0e1a7_prof);

        
        $__internal_e4ca41e79661cb7a7b94624b2345cb8bfcc3988d03d7f52c342f9f56a756d1db->leave($__internal_e4ca41e79661cb7a7b94624b2345cb8bfcc3988d03d7f52c342f9f56a756d1db_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a24eea13332fb5728f73a27e900eb45a49e9800e46c55e989e295be061358dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a24eea13332fb5728f73a27e900eb45a49e9800e46c55e989e295be061358dc7->enter($__internal_a24eea13332fb5728f73a27e900eb45a49e9800e46c55e989e295be061358dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ae9c6b6a83e55cbaf9162e390105c5a4b91df7f282ded612da6acfae7b520149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9c6b6a83e55cbaf9162e390105c5a4b91df7f282ded612da6acfae7b520149->enter($__internal_ae9c6b6a83e55cbaf9162e390105c5a4b91df7f282ded612da6acfae7b520149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_ae9c6b6a83e55cbaf9162e390105c5a4b91df7f282ded612da6acfae7b520149->leave($__internal_ae9c6b6a83e55cbaf9162e390105c5a4b91df7f282ded612da6acfae7b520149_prof);

        
        $__internal_a24eea13332fb5728f73a27e900eb45a49e9800e46c55e989e295be061358dc7->leave($__internal_a24eea13332fb5728f73a27e900eb45a49e9800e46c55e989e295be061358dc7_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9894aff89e083cf8c731e46460fed45794b309082f422fd0352a3b9399d7c1a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9894aff89e083cf8c731e46460fed45794b309082f422fd0352a3b9399d7c1a0->enter($__internal_9894aff89e083cf8c731e46460fed45794b309082f422fd0352a3b9399d7c1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ff278563ae358f0cc5712bac2e2c8c6ba798aa6a3ec6a7229125e16d82379b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff278563ae358f0cc5712bac2e2c8c6ba798aa6a3ec6a7229125e16d82379b4a->enter($__internal_ff278563ae358f0cc5712bac2e2c8c6ba798aa6a3ec6a7229125e16d82379b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_ff278563ae358f0cc5712bac2e2c8c6ba798aa6a3ec6a7229125e16d82379b4a->leave($__internal_ff278563ae358f0cc5712bac2e2c8c6ba798aa6a3ec6a7229125e16d82379b4a_prof);

        
        $__internal_9894aff89e083cf8c731e46460fed45794b309082f422fd0352a3b9399d7c1a0->leave($__internal_9894aff89e083cf8c731e46460fed45794b309082f422fd0352a3b9399d7c1a0_prof);

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
