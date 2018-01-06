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
        $__internal_ec0af0ace6352ff8116a3a878a60aad0b4be1325c67b5aedca3d003e16b7f85c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec0af0ace6352ff8116a3a878a60aad0b4be1325c67b5aedca3d003e16b7f85c->enter($__internal_ec0af0ace6352ff8116a3a878a60aad0b4be1325c67b5aedca3d003e16b7f85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8adb1e3713219355525c1e1ee308541c2cab25c913aa503d5150219387fb5a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8adb1e3713219355525c1e1ee308541c2cab25c913aa503d5150219387fb5a31->enter($__internal_8adb1e3713219355525c1e1ee308541c2cab25c913aa503d5150219387fb5a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec0af0ace6352ff8116a3a878a60aad0b4be1325c67b5aedca3d003e16b7f85c->leave($__internal_ec0af0ace6352ff8116a3a878a60aad0b4be1325c67b5aedca3d003e16b7f85c_prof);

        
        $__internal_8adb1e3713219355525c1e1ee308541c2cab25c913aa503d5150219387fb5a31->leave($__internal_8adb1e3713219355525c1e1ee308541c2cab25c913aa503d5150219387fb5a31_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_be7216b2844854b2f9775e308d6aa15970e09b753376e6d34f0e62bbae3668c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be7216b2844854b2f9775e308d6aa15970e09b753376e6d34f0e62bbae3668c5->enter($__internal_be7216b2844854b2f9775e308d6aa15970e09b753376e6d34f0e62bbae3668c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6aec3e2fdf3702cfd02c4ba435b25b8fac1b11ec09fefe637fce74a04b82ef37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aec3e2fdf3702cfd02c4ba435b25b8fac1b11ec09fefe637fce74a04b82ef37->enter($__internal_6aec3e2fdf3702cfd02c4ba435b25b8fac1b11ec09fefe637fce74a04b82ef37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6aec3e2fdf3702cfd02c4ba435b25b8fac1b11ec09fefe637fce74a04b82ef37->leave($__internal_6aec3e2fdf3702cfd02c4ba435b25b8fac1b11ec09fefe637fce74a04b82ef37_prof);

        
        $__internal_be7216b2844854b2f9775e308d6aa15970e09b753376e6d34f0e62bbae3668c5->leave($__internal_be7216b2844854b2f9775e308d6aa15970e09b753376e6d34f0e62bbae3668c5_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f2bdd13cd3dfb6ba02123bb262525c43f13fdc96ca76381a805d8ad6c26d0f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f2bdd13cd3dfb6ba02123bb262525c43f13fdc96ca76381a805d8ad6c26d0f1->enter($__internal_2f2bdd13cd3dfb6ba02123bb262525c43f13fdc96ca76381a805d8ad6c26d0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_80b29c2db7d6a8685268410f3c8705957cba58ab8151a4a70adc55e27cd5f134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b29c2db7d6a8685268410f3c8705957cba58ab8151a4a70adc55e27cd5f134->enter($__internal_80b29c2db7d6a8685268410f3c8705957cba58ab8151a4a70adc55e27cd5f134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_80b29c2db7d6a8685268410f3c8705957cba58ab8151a4a70adc55e27cd5f134->leave($__internal_80b29c2db7d6a8685268410f3c8705957cba58ab8151a4a70adc55e27cd5f134_prof);

        
        $__internal_2f2bdd13cd3dfb6ba02123bb262525c43f13fdc96ca76381a805d8ad6c26d0f1->leave($__internal_2f2bdd13cd3dfb6ba02123bb262525c43f13fdc96ca76381a805d8ad6c26d0f1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d343e58e05051f8cec8aa0ae8b0cf1cfcc4f1786eb6e6d280f1d7f82ffb7384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d343e58e05051f8cec8aa0ae8b0cf1cfcc4f1786eb6e6d280f1d7f82ffb7384->enter($__internal_6d343e58e05051f8cec8aa0ae8b0cf1cfcc4f1786eb6e6d280f1d7f82ffb7384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_079f26fe3d36d16aa08b2a95a50ff57fbead5b3e78f19c50d3f9a3c470ba5970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_079f26fe3d36d16aa08b2a95a50ff57fbead5b3e78f19c50d3f9a3c470ba5970->enter($__internal_079f26fe3d36d16aa08b2a95a50ff57fbead5b3e78f19c50d3f9a3c470ba5970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_079f26fe3d36d16aa08b2a95a50ff57fbead5b3e78f19c50d3f9a3c470ba5970->leave($__internal_079f26fe3d36d16aa08b2a95a50ff57fbead5b3e78f19c50d3f9a3c470ba5970_prof);

        
        $__internal_6d343e58e05051f8cec8aa0ae8b0cf1cfcc4f1786eb6e6d280f1d7f82ffb7384->leave($__internal_6d343e58e05051f8cec8aa0ae8b0cf1cfcc4f1786eb6e6d280f1d7f82ffb7384_prof);

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
