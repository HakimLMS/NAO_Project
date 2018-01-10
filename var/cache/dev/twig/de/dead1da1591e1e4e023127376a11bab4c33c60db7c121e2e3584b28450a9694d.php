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
        $__internal_a9b5aae2d3016b54206db4c92cfcdb3676196078627eb6d93db03ec3a4c59cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b5aae2d3016b54206db4c92cfcdb3676196078627eb6d93db03ec3a4c59cd3->enter($__internal_a9b5aae2d3016b54206db4c92cfcdb3676196078627eb6d93db03ec3a4c59cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5857f28840013bae8a5b6a3df68802802aa557c7d70fa886b363cbe70a690abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5857f28840013bae8a5b6a3df68802802aa557c7d70fa886b363cbe70a690abb->enter($__internal_5857f28840013bae8a5b6a3df68802802aa557c7d70fa886b363cbe70a690abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9b5aae2d3016b54206db4c92cfcdb3676196078627eb6d93db03ec3a4c59cd3->leave($__internal_a9b5aae2d3016b54206db4c92cfcdb3676196078627eb6d93db03ec3a4c59cd3_prof);

        
        $__internal_5857f28840013bae8a5b6a3df68802802aa557c7d70fa886b363cbe70a690abb->leave($__internal_5857f28840013bae8a5b6a3df68802802aa557c7d70fa886b363cbe70a690abb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_87fa9d2bbff2bf18c8f97a95da1c8017f2e425d1b210ce4c2355c1f4d06935c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87fa9d2bbff2bf18c8f97a95da1c8017f2e425d1b210ce4c2355c1f4d06935c4->enter($__internal_87fa9d2bbff2bf18c8f97a95da1c8017f2e425d1b210ce4c2355c1f4d06935c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_00ebad6140bf87d971c6beb1983d54ed7f6a4578ce8f6b779bf3f0bed5ffd576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ebad6140bf87d971c6beb1983d54ed7f6a4578ce8f6b779bf3f0bed5ffd576->enter($__internal_00ebad6140bf87d971c6beb1983d54ed7f6a4578ce8f6b779bf3f0bed5ffd576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_00ebad6140bf87d971c6beb1983d54ed7f6a4578ce8f6b779bf3f0bed5ffd576->leave($__internal_00ebad6140bf87d971c6beb1983d54ed7f6a4578ce8f6b779bf3f0bed5ffd576_prof);

        
        $__internal_87fa9d2bbff2bf18c8f97a95da1c8017f2e425d1b210ce4c2355c1f4d06935c4->leave($__internal_87fa9d2bbff2bf18c8f97a95da1c8017f2e425d1b210ce4c2355c1f4d06935c4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_09f89cf07a8a9362290e09992c626e3e544b8835ca062bb46bd20f8bc3e82f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f89cf07a8a9362290e09992c626e3e544b8835ca062bb46bd20f8bc3e82f9a->enter($__internal_09f89cf07a8a9362290e09992c626e3e544b8835ca062bb46bd20f8bc3e82f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_25edfd8a6363d9139cdc95c45be4ba856fc80941b970f4554b09757ba24aa3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25edfd8a6363d9139cdc95c45be4ba856fc80941b970f4554b09757ba24aa3fa->enter($__internal_25edfd8a6363d9139cdc95c45be4ba856fc80941b970f4554b09757ba24aa3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_25edfd8a6363d9139cdc95c45be4ba856fc80941b970f4554b09757ba24aa3fa->leave($__internal_25edfd8a6363d9139cdc95c45be4ba856fc80941b970f4554b09757ba24aa3fa_prof);

        
        $__internal_09f89cf07a8a9362290e09992c626e3e544b8835ca062bb46bd20f8bc3e82f9a->leave($__internal_09f89cf07a8a9362290e09992c626e3e544b8835ca062bb46bd20f8bc3e82f9a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_13c382baacbd87f082f92ae585ba12ff9d263a2ced9789bb81f2b853dad005f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13c382baacbd87f082f92ae585ba12ff9d263a2ced9789bb81f2b853dad005f9->enter($__internal_13c382baacbd87f082f92ae585ba12ff9d263a2ced9789bb81f2b853dad005f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ad1eccdbb701a03df9b6589982994d99ccdfc819f12288f5aa1e9e602f95520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad1eccdbb701a03df9b6589982994d99ccdfc819f12288f5aa1e9e602f95520->enter($__internal_3ad1eccdbb701a03df9b6589982994d99ccdfc819f12288f5aa1e9e602f95520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3ad1eccdbb701a03df9b6589982994d99ccdfc819f12288f5aa1e9e602f95520->leave($__internal_3ad1eccdbb701a03df9b6589982994d99ccdfc819f12288f5aa1e9e602f95520_prof);

        
        $__internal_13c382baacbd87f082f92ae585ba12ff9d263a2ced9789bb81f2b853dad005f9->leave($__internal_13c382baacbd87f082f92ae585ba12ff9d263a2ced9789bb81f2b853dad005f9_prof);

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
