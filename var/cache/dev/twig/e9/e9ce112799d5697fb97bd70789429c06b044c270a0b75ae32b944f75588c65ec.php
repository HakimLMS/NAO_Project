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
        $__internal_61150073a673bb4ee641f7aab272db009ace050f641a22aeba7e2d7908d8fd4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61150073a673bb4ee641f7aab272db009ace050f641a22aeba7e2d7908d8fd4f->enter($__internal_61150073a673bb4ee641f7aab272db009ace050f641a22aeba7e2d7908d8fd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_324a259a4562770803393d8e832431209f7829bf892184bb076ba3a697aa0e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324a259a4562770803393d8e832431209f7829bf892184bb076ba3a697aa0e0b->enter($__internal_324a259a4562770803393d8e832431209f7829bf892184bb076ba3a697aa0e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61150073a673bb4ee641f7aab272db009ace050f641a22aeba7e2d7908d8fd4f->leave($__internal_61150073a673bb4ee641f7aab272db009ace050f641a22aeba7e2d7908d8fd4f_prof);

        
        $__internal_324a259a4562770803393d8e832431209f7829bf892184bb076ba3a697aa0e0b->leave($__internal_324a259a4562770803393d8e832431209f7829bf892184bb076ba3a697aa0e0b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_68d905841406333edc2796f8a6408c7a78a3bb2edf04cc7f0c9efa2121f365e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d905841406333edc2796f8a6408c7a78a3bb2edf04cc7f0c9efa2121f365e3->enter($__internal_68d905841406333edc2796f8a6408c7a78a3bb2edf04cc7f0c9efa2121f365e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bfba562939a58cbbad726e1e33b6ea5d00d6cb74de5ab7642744536c76f627d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfba562939a58cbbad726e1e33b6ea5d00d6cb74de5ab7642744536c76f627d3->enter($__internal_bfba562939a58cbbad726e1e33b6ea5d00d6cb74de5ab7642744536c76f627d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bfba562939a58cbbad726e1e33b6ea5d00d6cb74de5ab7642744536c76f627d3->leave($__internal_bfba562939a58cbbad726e1e33b6ea5d00d6cb74de5ab7642744536c76f627d3_prof);

        
        $__internal_68d905841406333edc2796f8a6408c7a78a3bb2edf04cc7f0c9efa2121f365e3->leave($__internal_68d905841406333edc2796f8a6408c7a78a3bb2edf04cc7f0c9efa2121f365e3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5b3d5666ad650b04769e1274a6c9111bd6e0afefc4714e650799753bc21dbee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b3d5666ad650b04769e1274a6c9111bd6e0afefc4714e650799753bc21dbee->enter($__internal_e5b3d5666ad650b04769e1274a6c9111bd6e0afefc4714e650799753bc21dbee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_654a6511ff84fbd51881722a0eb6d582ab444db822b478f3ecb6b68d41a379d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654a6511ff84fbd51881722a0eb6d582ab444db822b478f3ecb6b68d41a379d9->enter($__internal_654a6511ff84fbd51881722a0eb6d582ab444db822b478f3ecb6b68d41a379d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_654a6511ff84fbd51881722a0eb6d582ab444db822b478f3ecb6b68d41a379d9->leave($__internal_654a6511ff84fbd51881722a0eb6d582ab444db822b478f3ecb6b68d41a379d9_prof);

        
        $__internal_e5b3d5666ad650b04769e1274a6c9111bd6e0afefc4714e650799753bc21dbee->leave($__internal_e5b3d5666ad650b04769e1274a6c9111bd6e0afefc4714e650799753bc21dbee_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_31a7ea100f26efc0c3661218c8d55ef7a38605756b94ea35fedefd3125b35f09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31a7ea100f26efc0c3661218c8d55ef7a38605756b94ea35fedefd3125b35f09->enter($__internal_31a7ea100f26efc0c3661218c8d55ef7a38605756b94ea35fedefd3125b35f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f02f4d91e51b748a583268a733d90f6f01f758e50149acef9e5334ba7308b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f02f4d91e51b748a583268a733d90f6f01f758e50149acef9e5334ba7308b7c->enter($__internal_9f02f4d91e51b748a583268a733d90f6f01f758e50149acef9e5334ba7308b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9f02f4d91e51b748a583268a733d90f6f01f758e50149acef9e5334ba7308b7c->leave($__internal_9f02f4d91e51b748a583268a733d90f6f01f758e50149acef9e5334ba7308b7c_prof);

        
        $__internal_31a7ea100f26efc0c3661218c8d55ef7a38605756b94ea35fedefd3125b35f09->leave($__internal_31a7ea100f26efc0c3661218c8d55ef7a38605756b94ea35fedefd3125b35f09_prof);

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
