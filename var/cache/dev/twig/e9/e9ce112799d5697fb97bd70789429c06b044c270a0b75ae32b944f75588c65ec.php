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
        $__internal_c00cb92563ffdf82c00cfc27a6d9b19629de9282b0c0b4f3eb363f9f04168360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c00cb92563ffdf82c00cfc27a6d9b19629de9282b0c0b4f3eb363f9f04168360->enter($__internal_c00cb92563ffdf82c00cfc27a6d9b19629de9282b0c0b4f3eb363f9f04168360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_592083aac2f0e6ee523da1853e1da75c32b2578d155e0e5f986564eae8e9611f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592083aac2f0e6ee523da1853e1da75c32b2578d155e0e5f986564eae8e9611f->enter($__internal_592083aac2f0e6ee523da1853e1da75c32b2578d155e0e5f986564eae8e9611f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c00cb92563ffdf82c00cfc27a6d9b19629de9282b0c0b4f3eb363f9f04168360->leave($__internal_c00cb92563ffdf82c00cfc27a6d9b19629de9282b0c0b4f3eb363f9f04168360_prof);

        
        $__internal_592083aac2f0e6ee523da1853e1da75c32b2578d155e0e5f986564eae8e9611f->leave($__internal_592083aac2f0e6ee523da1853e1da75c32b2578d155e0e5f986564eae8e9611f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4eec55bc9aca3c44209258a5fcb362341521fd45fc4a357110fa1699aedc88da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eec55bc9aca3c44209258a5fcb362341521fd45fc4a357110fa1699aedc88da->enter($__internal_4eec55bc9aca3c44209258a5fcb362341521fd45fc4a357110fa1699aedc88da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f2e0746b7a174177fec691b545bd1e503f8a6b9fb285f1a60345b80fc086bf40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e0746b7a174177fec691b545bd1e503f8a6b9fb285f1a60345b80fc086bf40->enter($__internal_f2e0746b7a174177fec691b545bd1e503f8a6b9fb285f1a60345b80fc086bf40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f2e0746b7a174177fec691b545bd1e503f8a6b9fb285f1a60345b80fc086bf40->leave($__internal_f2e0746b7a174177fec691b545bd1e503f8a6b9fb285f1a60345b80fc086bf40_prof);

        
        $__internal_4eec55bc9aca3c44209258a5fcb362341521fd45fc4a357110fa1699aedc88da->leave($__internal_4eec55bc9aca3c44209258a5fcb362341521fd45fc4a357110fa1699aedc88da_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_682cdde59d29dcdf5146e6ba6f2cf3f71fd23ae87b48939d140c8c22948b8883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682cdde59d29dcdf5146e6ba6f2cf3f71fd23ae87b48939d140c8c22948b8883->enter($__internal_682cdde59d29dcdf5146e6ba6f2cf3f71fd23ae87b48939d140c8c22948b8883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ae081ffc873a1ce556b885d7bb151a66e6a24378a4634eac0c88fd9572df50b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae081ffc873a1ce556b885d7bb151a66e6a24378a4634eac0c88fd9572df50b7->enter($__internal_ae081ffc873a1ce556b885d7bb151a66e6a24378a4634eac0c88fd9572df50b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_ae081ffc873a1ce556b885d7bb151a66e6a24378a4634eac0c88fd9572df50b7->leave($__internal_ae081ffc873a1ce556b885d7bb151a66e6a24378a4634eac0c88fd9572df50b7_prof);

        
        $__internal_682cdde59d29dcdf5146e6ba6f2cf3f71fd23ae87b48939d140c8c22948b8883->leave($__internal_682cdde59d29dcdf5146e6ba6f2cf3f71fd23ae87b48939d140c8c22948b8883_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f322b08e85b30c1ea55a92ceb3ba774a8d7b97b5368e041b55061a24f77f401f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f322b08e85b30c1ea55a92ceb3ba774a8d7b97b5368e041b55061a24f77f401f->enter($__internal_f322b08e85b30c1ea55a92ceb3ba774a8d7b97b5368e041b55061a24f77f401f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df39060d081967eda8cf49e3f1e88e9b091b1d58896d95750e0d573b92b39752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df39060d081967eda8cf49e3f1e88e9b091b1d58896d95750e0d573b92b39752->enter($__internal_df39060d081967eda8cf49e3f1e88e9b091b1d58896d95750e0d573b92b39752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_df39060d081967eda8cf49e3f1e88e9b091b1d58896d95750e0d573b92b39752->leave($__internal_df39060d081967eda8cf49e3f1e88e9b091b1d58896d95750e0d573b92b39752_prof);

        
        $__internal_f322b08e85b30c1ea55a92ceb3ba774a8d7b97b5368e041b55061a24f77f401f->leave($__internal_f322b08e85b30c1ea55a92ceb3ba774a8d7b97b5368e041b55061a24f77f401f_prof);

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
