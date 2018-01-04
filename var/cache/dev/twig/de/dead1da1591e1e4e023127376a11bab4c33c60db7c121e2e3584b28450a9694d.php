<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bc8385b46777fe572d80c2cb0180be6a22f53c4bc0627a3cf23acec4dfbc7b55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f181482d10a14ba8ac6b92d80e35dfb9c584b3a9cdaf7156dc2997a4eb910b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f181482d10a14ba8ac6b92d80e35dfb9c584b3a9cdaf7156dc2997a4eb910b5->enter($__internal_6f181482d10a14ba8ac6b92d80e35dfb9c584b3a9cdaf7156dc2997a4eb910b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_afd86ad57b17e88d5077b0aad3304a118cc6ac0f54b48a534321dccfec587fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd86ad57b17e88d5077b0aad3304a118cc6ac0f54b48a534321dccfec587fd1->enter($__internal_afd86ad57b17e88d5077b0aad3304a118cc6ac0f54b48a534321dccfec587fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f181482d10a14ba8ac6b92d80e35dfb9c584b3a9cdaf7156dc2997a4eb910b5->leave($__internal_6f181482d10a14ba8ac6b92d80e35dfb9c584b3a9cdaf7156dc2997a4eb910b5_prof);

        
        $__internal_afd86ad57b17e88d5077b0aad3304a118cc6ac0f54b48a534321dccfec587fd1->leave($__internal_afd86ad57b17e88d5077b0aad3304a118cc6ac0f54b48a534321dccfec587fd1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9bad53caec9c9984d3fe8fd716cb2d15e12ca9906337fbaece7f3acfa17c8810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bad53caec9c9984d3fe8fd716cb2d15e12ca9906337fbaece7f3acfa17c8810->enter($__internal_9bad53caec9c9984d3fe8fd716cb2d15e12ca9906337fbaece7f3acfa17c8810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_90c2db0e32867b0bd5d551c07b71775b488914cdec3013b6aee49c263b0224e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c2db0e32867b0bd5d551c07b71775b488914cdec3013b6aee49c263b0224e3->enter($__internal_90c2db0e32867b0bd5d551c07b71775b488914cdec3013b6aee49c263b0224e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_90c2db0e32867b0bd5d551c07b71775b488914cdec3013b6aee49c263b0224e3->leave($__internal_90c2db0e32867b0bd5d551c07b71775b488914cdec3013b6aee49c263b0224e3_prof);

        
        $__internal_9bad53caec9c9984d3fe8fd716cb2d15e12ca9906337fbaece7f3acfa17c8810->leave($__internal_9bad53caec9c9984d3fe8fd716cb2d15e12ca9906337fbaece7f3acfa17c8810_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_53fe7f5b68a79315c998db59f137967169a8b2ac9253f7e442abf38d14009b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53fe7f5b68a79315c998db59f137967169a8b2ac9253f7e442abf38d14009b06->enter($__internal_53fe7f5b68a79315c998db59f137967169a8b2ac9253f7e442abf38d14009b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_161e9d4c14f748eced8ff574ef74757d48c780d11624f15bc585f35da4230563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161e9d4c14f748eced8ff574ef74757d48c780d11624f15bc585f35da4230563->enter($__internal_161e9d4c14f748eced8ff574ef74757d48c780d11624f15bc585f35da4230563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_161e9d4c14f748eced8ff574ef74757d48c780d11624f15bc585f35da4230563->leave($__internal_161e9d4c14f748eced8ff574ef74757d48c780d11624f15bc585f35da4230563_prof);

        
        $__internal_53fe7f5b68a79315c998db59f137967169a8b2ac9253f7e442abf38d14009b06->leave($__internal_53fe7f5b68a79315c998db59f137967169a8b2ac9253f7e442abf38d14009b06_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7736aa796629e7df6bdebd9a8e5dd0b47464c6d5418886c1be2555824d3974f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7736aa796629e7df6bdebd9a8e5dd0b47464c6d5418886c1be2555824d3974f->enter($__internal_c7736aa796629e7df6bdebd9a8e5dd0b47464c6d5418886c1be2555824d3974f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79278c0b32825dedae1cf6cd64c88f115f615bd3cee3355dc43c2aa16667e4bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79278c0b32825dedae1cf6cd64c88f115f615bd3cee3355dc43c2aa16667e4bf->enter($__internal_79278c0b32825dedae1cf6cd64c88f115f615bd3cee3355dc43c2aa16667e4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_79278c0b32825dedae1cf6cd64c88f115f615bd3cee3355dc43c2aa16667e4bf->leave($__internal_79278c0b32825dedae1cf6cd64c88f115f615bd3cee3355dc43c2aa16667e4bf_prof);

        
        $__internal_c7736aa796629e7df6bdebd9a8e5dd0b47464c6d5418886c1be2555824d3974f->leave($__internal_c7736aa796629e7df6bdebd9a8e5dd0b47464c6d5418886c1be2555824d3974f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
