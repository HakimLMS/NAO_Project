<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_599cc9151178d7de631eeb82860c1db361f57fb89f0c7e642c123de470092a98 extends Twig_Template
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
        $__internal_8384abd32d1f9a33b90560f766d7629125ef35a94c62297d5e9abd6a5d3da535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8384abd32d1f9a33b90560f766d7629125ef35a94c62297d5e9abd6a5d3da535->enter($__internal_8384abd32d1f9a33b90560f766d7629125ef35a94c62297d5e9abd6a5d3da535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ab19b37e380654d9791b470741e5d29bc22ed81a1131f04ec1a67d8395bdfdeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab19b37e380654d9791b470741e5d29bc22ed81a1131f04ec1a67d8395bdfdeb->enter($__internal_ab19b37e380654d9791b470741e5d29bc22ed81a1131f04ec1a67d8395bdfdeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8384abd32d1f9a33b90560f766d7629125ef35a94c62297d5e9abd6a5d3da535->leave($__internal_8384abd32d1f9a33b90560f766d7629125ef35a94c62297d5e9abd6a5d3da535_prof);

        
        $__internal_ab19b37e380654d9791b470741e5d29bc22ed81a1131f04ec1a67d8395bdfdeb->leave($__internal_ab19b37e380654d9791b470741e5d29bc22ed81a1131f04ec1a67d8395bdfdeb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_052f1284b33f49268a57c90ffe637fe666a3f46664cc2aa18c60d331b57cee4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_052f1284b33f49268a57c90ffe637fe666a3f46664cc2aa18c60d331b57cee4b->enter($__internal_052f1284b33f49268a57c90ffe637fe666a3f46664cc2aa18c60d331b57cee4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a5bfac40fe3035130c23a80388fee04af89158b0615f9146403da68a33b6bc8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5bfac40fe3035130c23a80388fee04af89158b0615f9146403da68a33b6bc8d->enter($__internal_a5bfac40fe3035130c23a80388fee04af89158b0615f9146403da68a33b6bc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a5bfac40fe3035130c23a80388fee04af89158b0615f9146403da68a33b6bc8d->leave($__internal_a5bfac40fe3035130c23a80388fee04af89158b0615f9146403da68a33b6bc8d_prof);

        
        $__internal_052f1284b33f49268a57c90ffe637fe666a3f46664cc2aa18c60d331b57cee4b->leave($__internal_052f1284b33f49268a57c90ffe637fe666a3f46664cc2aa18c60d331b57cee4b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfe5a34195143b97bb75cf7207fd93ea6a68ef26bc3d40beca9ccdadc49d9bd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfe5a34195143b97bb75cf7207fd93ea6a68ef26bc3d40beca9ccdadc49d9bd9->enter($__internal_dfe5a34195143b97bb75cf7207fd93ea6a68ef26bc3d40beca9ccdadc49d9bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eb99f4c03398cfe0f643ce792bffc7f60bfff9213547951b3f7eaff1faa307dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb99f4c03398cfe0f643ce792bffc7f60bfff9213547951b3f7eaff1faa307dc->enter($__internal_eb99f4c03398cfe0f643ce792bffc7f60bfff9213547951b3f7eaff1faa307dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_eb99f4c03398cfe0f643ce792bffc7f60bfff9213547951b3f7eaff1faa307dc->leave($__internal_eb99f4c03398cfe0f643ce792bffc7f60bfff9213547951b3f7eaff1faa307dc_prof);

        
        $__internal_dfe5a34195143b97bb75cf7207fd93ea6a68ef26bc3d40beca9ccdadc49d9bd9->leave($__internal_dfe5a34195143b97bb75cf7207fd93ea6a68ef26bc3d40beca9ccdadc49d9bd9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7571a4bfb21933f23b9fc82c4f32c447b738cad749b8d8b77c5512fbe6fb639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7571a4bfb21933f23b9fc82c4f32c447b738cad749b8d8b77c5512fbe6fb639->enter($__internal_d7571a4bfb21933f23b9fc82c4f32c447b738cad749b8d8b77c5512fbe6fb639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc7c66c08ac9a7964ffd8e2fe8162cdd4a115265fb097cf0e020e79e059e41b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7c66c08ac9a7964ffd8e2fe8162cdd4a115265fb097cf0e020e79e059e41b1->enter($__internal_dc7c66c08ac9a7964ffd8e2fe8162cdd4a115265fb097cf0e020e79e059e41b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_dc7c66c08ac9a7964ffd8e2fe8162cdd4a115265fb097cf0e020e79e059e41b1->leave($__internal_dc7c66c08ac9a7964ffd8e2fe8162cdd4a115265fb097cf0e020e79e059e41b1_prof);

        
        $__internal_d7571a4bfb21933f23b9fc82c4f32c447b738cad749b8d8b77c5512fbe6fb639->leave($__internal_d7571a4bfb21933f23b9fc82c4f32c447b738cad749b8d8b77c5512fbe6fb639_prof);

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
", "@Twig/Exception/exception_full.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
