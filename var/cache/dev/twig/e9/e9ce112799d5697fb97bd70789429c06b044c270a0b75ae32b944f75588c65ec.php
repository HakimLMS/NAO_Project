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
        $__internal_68c0492e44ad94b19e36a8601bb61159f84961ca707cf46f07c62953d63eabb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c0492e44ad94b19e36a8601bb61159f84961ca707cf46f07c62953d63eabb6->enter($__internal_68c0492e44ad94b19e36a8601bb61159f84961ca707cf46f07c62953d63eabb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0a779943b968a1d732fa19012b91b0ce54f915c9da9fd7a600cfa8c0c4b1fc7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a779943b968a1d732fa19012b91b0ce54f915c9da9fd7a600cfa8c0c4b1fc7e->enter($__internal_0a779943b968a1d732fa19012b91b0ce54f915c9da9fd7a600cfa8c0c4b1fc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68c0492e44ad94b19e36a8601bb61159f84961ca707cf46f07c62953d63eabb6->leave($__internal_68c0492e44ad94b19e36a8601bb61159f84961ca707cf46f07c62953d63eabb6_prof);

        
        $__internal_0a779943b968a1d732fa19012b91b0ce54f915c9da9fd7a600cfa8c0c4b1fc7e->leave($__internal_0a779943b968a1d732fa19012b91b0ce54f915c9da9fd7a600cfa8c0c4b1fc7e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_70674f38750e8e4c4d0b0c930e37b12d3533b83574636c5173cb450e46951e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70674f38750e8e4c4d0b0c930e37b12d3533b83574636c5173cb450e46951e15->enter($__internal_70674f38750e8e4c4d0b0c930e37b12d3533b83574636c5173cb450e46951e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ef5c2a357316734c283fde70fd8af286322f4983bcc54a43643db03c301e4704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5c2a357316734c283fde70fd8af286322f4983bcc54a43643db03c301e4704->enter($__internal_ef5c2a357316734c283fde70fd8af286322f4983bcc54a43643db03c301e4704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ef5c2a357316734c283fde70fd8af286322f4983bcc54a43643db03c301e4704->leave($__internal_ef5c2a357316734c283fde70fd8af286322f4983bcc54a43643db03c301e4704_prof);

        
        $__internal_70674f38750e8e4c4d0b0c930e37b12d3533b83574636c5173cb450e46951e15->leave($__internal_70674f38750e8e4c4d0b0c930e37b12d3533b83574636c5173cb450e46951e15_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9565137fa42a705146b931b358da7e5859f75900d0b287a3dcfcf6a1c46a72a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9565137fa42a705146b931b358da7e5859f75900d0b287a3dcfcf6a1c46a72a3->enter($__internal_9565137fa42a705146b931b358da7e5859f75900d0b287a3dcfcf6a1c46a72a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_472fe5578d982e711ce19700a10e2aa277724b624d6f2d5ebbe36aa3d7ade06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472fe5578d982e711ce19700a10e2aa277724b624d6f2d5ebbe36aa3d7ade06b->enter($__internal_472fe5578d982e711ce19700a10e2aa277724b624d6f2d5ebbe36aa3d7ade06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_472fe5578d982e711ce19700a10e2aa277724b624d6f2d5ebbe36aa3d7ade06b->leave($__internal_472fe5578d982e711ce19700a10e2aa277724b624d6f2d5ebbe36aa3d7ade06b_prof);

        
        $__internal_9565137fa42a705146b931b358da7e5859f75900d0b287a3dcfcf6a1c46a72a3->leave($__internal_9565137fa42a705146b931b358da7e5859f75900d0b287a3dcfcf6a1c46a72a3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f54a58797dc3ddc71c8ee5956c32c8a6ce07af7475a87df29c9e5596e027f876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f54a58797dc3ddc71c8ee5956c32c8a6ce07af7475a87df29c9e5596e027f876->enter($__internal_f54a58797dc3ddc71c8ee5956c32c8a6ce07af7475a87df29c9e5596e027f876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68030a2b82c307aa5523cedb2f53fe65cf1637b59e31aa359a6c672b85ede358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68030a2b82c307aa5523cedb2f53fe65cf1637b59e31aa359a6c672b85ede358->enter($__internal_68030a2b82c307aa5523cedb2f53fe65cf1637b59e31aa359a6c672b85ede358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_68030a2b82c307aa5523cedb2f53fe65cf1637b59e31aa359a6c672b85ede358->leave($__internal_68030a2b82c307aa5523cedb2f53fe65cf1637b59e31aa359a6c672b85ede358_prof);

        
        $__internal_f54a58797dc3ddc71c8ee5956c32c8a6ce07af7475a87df29c9e5596e027f876->leave($__internal_f54a58797dc3ddc71c8ee5956c32c8a6ce07af7475a87df29c9e5596e027f876_prof);

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
