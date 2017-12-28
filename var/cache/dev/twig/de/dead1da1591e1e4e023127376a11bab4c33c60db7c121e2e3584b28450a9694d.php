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
        $__internal_dfff9d3e2e40c5394d5bacc2056413891206464d6078b73954ce2534a631ba1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfff9d3e2e40c5394d5bacc2056413891206464d6078b73954ce2534a631ba1d->enter($__internal_dfff9d3e2e40c5394d5bacc2056413891206464d6078b73954ce2534a631ba1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b007275465f1b7b92518289b814ab9029c2ca9fca4f3aa13d71757dd3af1c864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b007275465f1b7b92518289b814ab9029c2ca9fca4f3aa13d71757dd3af1c864->enter($__internal_b007275465f1b7b92518289b814ab9029c2ca9fca4f3aa13d71757dd3af1c864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfff9d3e2e40c5394d5bacc2056413891206464d6078b73954ce2534a631ba1d->leave($__internal_dfff9d3e2e40c5394d5bacc2056413891206464d6078b73954ce2534a631ba1d_prof);

        
        $__internal_b007275465f1b7b92518289b814ab9029c2ca9fca4f3aa13d71757dd3af1c864->leave($__internal_b007275465f1b7b92518289b814ab9029c2ca9fca4f3aa13d71757dd3af1c864_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_af7acdf2dca7904ea6a8b3ffd68cb91032c0ff35532945c2188e92aabbc63613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af7acdf2dca7904ea6a8b3ffd68cb91032c0ff35532945c2188e92aabbc63613->enter($__internal_af7acdf2dca7904ea6a8b3ffd68cb91032c0ff35532945c2188e92aabbc63613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b85a6cfce89a64acdf68ed9630d89a46f38739c5853c34cafb9014643d743098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85a6cfce89a64acdf68ed9630d89a46f38739c5853c34cafb9014643d743098->enter($__internal_b85a6cfce89a64acdf68ed9630d89a46f38739c5853c34cafb9014643d743098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b85a6cfce89a64acdf68ed9630d89a46f38739c5853c34cafb9014643d743098->leave($__internal_b85a6cfce89a64acdf68ed9630d89a46f38739c5853c34cafb9014643d743098_prof);

        
        $__internal_af7acdf2dca7904ea6a8b3ffd68cb91032c0ff35532945c2188e92aabbc63613->leave($__internal_af7acdf2dca7904ea6a8b3ffd68cb91032c0ff35532945c2188e92aabbc63613_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fcb8b6df31e26f27b6cc79b3a1cfb55f183048f5d31b7b289159d58efe25ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fcb8b6df31e26f27b6cc79b3a1cfb55f183048f5d31b7b289159d58efe25ba7->enter($__internal_3fcb8b6df31e26f27b6cc79b3a1cfb55f183048f5d31b7b289159d58efe25ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e5b5214473869e7207fb5ad992e90d15b1b4c00f877538d3d5aec42816c88902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b5214473869e7207fb5ad992e90d15b1b4c00f877538d3d5aec42816c88902->enter($__internal_e5b5214473869e7207fb5ad992e90d15b1b4c00f877538d3d5aec42816c88902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_e5b5214473869e7207fb5ad992e90d15b1b4c00f877538d3d5aec42816c88902->leave($__internal_e5b5214473869e7207fb5ad992e90d15b1b4c00f877538d3d5aec42816c88902_prof);

        
        $__internal_3fcb8b6df31e26f27b6cc79b3a1cfb55f183048f5d31b7b289159d58efe25ba7->leave($__internal_3fcb8b6df31e26f27b6cc79b3a1cfb55f183048f5d31b7b289159d58efe25ba7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2818df6dd4f861e375473bd055792e3e54415e7cdf231617777ae03535191109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2818df6dd4f861e375473bd055792e3e54415e7cdf231617777ae03535191109->enter($__internal_2818df6dd4f861e375473bd055792e3e54415e7cdf231617777ae03535191109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab9726c1b434430180d0fff707ea7c901991e6651096be63b7be8e4f46097309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab9726c1b434430180d0fff707ea7c901991e6651096be63b7be8e4f46097309->enter($__internal_ab9726c1b434430180d0fff707ea7c901991e6651096be63b7be8e4f46097309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ab9726c1b434430180d0fff707ea7c901991e6651096be63b7be8e4f46097309->leave($__internal_ab9726c1b434430180d0fff707ea7c901991e6651096be63b7be8e4f46097309_prof);

        
        $__internal_2818df6dd4f861e375473bd055792e3e54415e7cdf231617777ae03535191109->leave($__internal_2818df6dd4f861e375473bd055792e3e54415e7cdf231617777ae03535191109_prof);

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
