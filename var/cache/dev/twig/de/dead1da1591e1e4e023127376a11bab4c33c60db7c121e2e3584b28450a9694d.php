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
        $__internal_eb37cc853210e1be699e7698e07dfed96686f0921bb2d6dd53300befac556fc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb37cc853210e1be699e7698e07dfed96686f0921bb2d6dd53300befac556fc3->enter($__internal_eb37cc853210e1be699e7698e07dfed96686f0921bb2d6dd53300befac556fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6286e710a497e35277f2279bdd7d22ee9aeb5188438e5944dfc006d024cd8837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6286e710a497e35277f2279bdd7d22ee9aeb5188438e5944dfc006d024cd8837->enter($__internal_6286e710a497e35277f2279bdd7d22ee9aeb5188438e5944dfc006d024cd8837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb37cc853210e1be699e7698e07dfed96686f0921bb2d6dd53300befac556fc3->leave($__internal_eb37cc853210e1be699e7698e07dfed96686f0921bb2d6dd53300befac556fc3_prof);

        
        $__internal_6286e710a497e35277f2279bdd7d22ee9aeb5188438e5944dfc006d024cd8837->leave($__internal_6286e710a497e35277f2279bdd7d22ee9aeb5188438e5944dfc006d024cd8837_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a5484a0b2054feb49a0afc8f288b1b7a00700c3ba2ede99f7f4ddf2a2d07b100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5484a0b2054feb49a0afc8f288b1b7a00700c3ba2ede99f7f4ddf2a2d07b100->enter($__internal_a5484a0b2054feb49a0afc8f288b1b7a00700c3ba2ede99f7f4ddf2a2d07b100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_289df2166a057a6e17354bae80e67d79e491d2167b4b9a81da8807532ac6af46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289df2166a057a6e17354bae80e67d79e491d2167b4b9a81da8807532ac6af46->enter($__internal_289df2166a057a6e17354bae80e67d79e491d2167b4b9a81da8807532ac6af46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_289df2166a057a6e17354bae80e67d79e491d2167b4b9a81da8807532ac6af46->leave($__internal_289df2166a057a6e17354bae80e67d79e491d2167b4b9a81da8807532ac6af46_prof);

        
        $__internal_a5484a0b2054feb49a0afc8f288b1b7a00700c3ba2ede99f7f4ddf2a2d07b100->leave($__internal_a5484a0b2054feb49a0afc8f288b1b7a00700c3ba2ede99f7f4ddf2a2d07b100_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_02b927de3509249820e479720acf076b0db2426d03f8a9269d58c3d3c39ef8c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02b927de3509249820e479720acf076b0db2426d03f8a9269d58c3d3c39ef8c9->enter($__internal_02b927de3509249820e479720acf076b0db2426d03f8a9269d58c3d3c39ef8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe5a0021fcca1c33e1ec3231a5a0b61abcefad72f368c70e5c3a037d1cfc9060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5a0021fcca1c33e1ec3231a5a0b61abcefad72f368c70e5c3a037d1cfc9060->enter($__internal_fe5a0021fcca1c33e1ec3231a5a0b61abcefad72f368c70e5c3a037d1cfc9060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_fe5a0021fcca1c33e1ec3231a5a0b61abcefad72f368c70e5c3a037d1cfc9060->leave($__internal_fe5a0021fcca1c33e1ec3231a5a0b61abcefad72f368c70e5c3a037d1cfc9060_prof);

        
        $__internal_02b927de3509249820e479720acf076b0db2426d03f8a9269d58c3d3c39ef8c9->leave($__internal_02b927de3509249820e479720acf076b0db2426d03f8a9269d58c3d3c39ef8c9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_879fa3713678bfcac85abea6ea1b72e9c2de227108a785d6f627f9520e82b2bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879fa3713678bfcac85abea6ea1b72e9c2de227108a785d6f627f9520e82b2bc->enter($__internal_879fa3713678bfcac85abea6ea1b72e9c2de227108a785d6f627f9520e82b2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8468fe84555c4413c375b641e9775eba89d4339ebc933d355fbf641714ddf407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8468fe84555c4413c375b641e9775eba89d4339ebc933d355fbf641714ddf407->enter($__internal_8468fe84555c4413c375b641e9775eba89d4339ebc933d355fbf641714ddf407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8468fe84555c4413c375b641e9775eba89d4339ebc933d355fbf641714ddf407->leave($__internal_8468fe84555c4413c375b641e9775eba89d4339ebc933d355fbf641714ddf407_prof);

        
        $__internal_879fa3713678bfcac85abea6ea1b72e9c2de227108a785d6f627f9520e82b2bc->leave($__internal_879fa3713678bfcac85abea6ea1b72e9c2de227108a785d6f627f9520e82b2bc_prof);

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
