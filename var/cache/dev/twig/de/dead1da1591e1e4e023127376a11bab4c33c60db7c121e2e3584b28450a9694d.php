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
        $__internal_33a40c45f57fdd0167e203f649e90cd70151a9619f8447666c34364b067bfcda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a40c45f57fdd0167e203f649e90cd70151a9619f8447666c34364b067bfcda->enter($__internal_33a40c45f57fdd0167e203f649e90cd70151a9619f8447666c34364b067bfcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e0b38a5ffb53e7dbfd238821c912d46d763ddc8a9ed5e523e4a3cb910f7daad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b38a5ffb53e7dbfd238821c912d46d763ddc8a9ed5e523e4a3cb910f7daad0->enter($__internal_e0b38a5ffb53e7dbfd238821c912d46d763ddc8a9ed5e523e4a3cb910f7daad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33a40c45f57fdd0167e203f649e90cd70151a9619f8447666c34364b067bfcda->leave($__internal_33a40c45f57fdd0167e203f649e90cd70151a9619f8447666c34364b067bfcda_prof);

        
        $__internal_e0b38a5ffb53e7dbfd238821c912d46d763ddc8a9ed5e523e4a3cb910f7daad0->leave($__internal_e0b38a5ffb53e7dbfd238821c912d46d763ddc8a9ed5e523e4a3cb910f7daad0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_04ba03434fe95adecfa4b5c8af019da4894bdc324b5c26890cc136069a47bc18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04ba03434fe95adecfa4b5c8af019da4894bdc324b5c26890cc136069a47bc18->enter($__internal_04ba03434fe95adecfa4b5c8af019da4894bdc324b5c26890cc136069a47bc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_255a787937adae31b9d6c3b6b7e9c2da079beb5b233497c318940e4325ffc91a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_255a787937adae31b9d6c3b6b7e9c2da079beb5b233497c318940e4325ffc91a->enter($__internal_255a787937adae31b9d6c3b6b7e9c2da079beb5b233497c318940e4325ffc91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_255a787937adae31b9d6c3b6b7e9c2da079beb5b233497c318940e4325ffc91a->leave($__internal_255a787937adae31b9d6c3b6b7e9c2da079beb5b233497c318940e4325ffc91a_prof);

        
        $__internal_04ba03434fe95adecfa4b5c8af019da4894bdc324b5c26890cc136069a47bc18->leave($__internal_04ba03434fe95adecfa4b5c8af019da4894bdc324b5c26890cc136069a47bc18_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee93314d167f96608f10ccd1144e219734c8ae25089cc80332686d1e0e5fe940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee93314d167f96608f10ccd1144e219734c8ae25089cc80332686d1e0e5fe940->enter($__internal_ee93314d167f96608f10ccd1144e219734c8ae25089cc80332686d1e0e5fe940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e0e898769ab4b95380a769241d47123fc7b68ae361a8b9aa86ee08a3d74b1990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e898769ab4b95380a769241d47123fc7b68ae361a8b9aa86ee08a3d74b1990->enter($__internal_e0e898769ab4b95380a769241d47123fc7b68ae361a8b9aa86ee08a3d74b1990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_e0e898769ab4b95380a769241d47123fc7b68ae361a8b9aa86ee08a3d74b1990->leave($__internal_e0e898769ab4b95380a769241d47123fc7b68ae361a8b9aa86ee08a3d74b1990_prof);

        
        $__internal_ee93314d167f96608f10ccd1144e219734c8ae25089cc80332686d1e0e5fe940->leave($__internal_ee93314d167f96608f10ccd1144e219734c8ae25089cc80332686d1e0e5fe940_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6cf50b97b76a65767b6a90bdcfe15aa5acf2966c3deed97b39acef0ac0d2a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6cf50b97b76a65767b6a90bdcfe15aa5acf2966c3deed97b39acef0ac0d2a78->enter($__internal_f6cf50b97b76a65767b6a90bdcfe15aa5acf2966c3deed97b39acef0ac0d2a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_806c916d16aa814aea3648458f7fde86bc056aa78dc4998c5deb7e273fee3f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806c916d16aa814aea3648458f7fde86bc056aa78dc4998c5deb7e273fee3f77->enter($__internal_806c916d16aa814aea3648458f7fde86bc056aa78dc4998c5deb7e273fee3f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_806c916d16aa814aea3648458f7fde86bc056aa78dc4998c5deb7e273fee3f77->leave($__internal_806c916d16aa814aea3648458f7fde86bc056aa78dc4998c5deb7e273fee3f77_prof);

        
        $__internal_f6cf50b97b76a65767b6a90bdcfe15aa5acf2966c3deed97b39acef0ac0d2a78->leave($__internal_f6cf50b97b76a65767b6a90bdcfe15aa5acf2966c3deed97b39acef0ac0d2a78_prof);

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
