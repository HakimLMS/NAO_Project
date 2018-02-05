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
        $__internal_e37c474fa5ccca70d1e96ea3dcbee2aded6460f47f21cefb7dac6d97e0412d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e37c474fa5ccca70d1e96ea3dcbee2aded6460f47f21cefb7dac6d97e0412d9e->enter($__internal_e37c474fa5ccca70d1e96ea3dcbee2aded6460f47f21cefb7dac6d97e0412d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6598b00e42c4a92e04e428b887cdfa51032729aef204b6bb2e5cd8c4b4a7f82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6598b00e42c4a92e04e428b887cdfa51032729aef204b6bb2e5cd8c4b4a7f82f->enter($__internal_6598b00e42c4a92e04e428b887cdfa51032729aef204b6bb2e5cd8c4b4a7f82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e37c474fa5ccca70d1e96ea3dcbee2aded6460f47f21cefb7dac6d97e0412d9e->leave($__internal_e37c474fa5ccca70d1e96ea3dcbee2aded6460f47f21cefb7dac6d97e0412d9e_prof);

        
        $__internal_6598b00e42c4a92e04e428b887cdfa51032729aef204b6bb2e5cd8c4b4a7f82f->leave($__internal_6598b00e42c4a92e04e428b887cdfa51032729aef204b6bb2e5cd8c4b4a7f82f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9a269c1fe04582469de534a4567fc24370ab1f953c4e3ea08288950f1e28c9e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a269c1fe04582469de534a4567fc24370ab1f953c4e3ea08288950f1e28c9e9->enter($__internal_9a269c1fe04582469de534a4567fc24370ab1f953c4e3ea08288950f1e28c9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0d4d26680f245dbe91bb915aec736bc98b6ed90dfca30b97aefc3a45bf0dda9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d4d26680f245dbe91bb915aec736bc98b6ed90dfca30b97aefc3a45bf0dda9b->enter($__internal_0d4d26680f245dbe91bb915aec736bc98b6ed90dfca30b97aefc3a45bf0dda9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0d4d26680f245dbe91bb915aec736bc98b6ed90dfca30b97aefc3a45bf0dda9b->leave($__internal_0d4d26680f245dbe91bb915aec736bc98b6ed90dfca30b97aefc3a45bf0dda9b_prof);

        
        $__internal_9a269c1fe04582469de534a4567fc24370ab1f953c4e3ea08288950f1e28c9e9->leave($__internal_9a269c1fe04582469de534a4567fc24370ab1f953c4e3ea08288950f1e28c9e9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5dbb37274c4bb3af8d4a689fbe5dab79ad0dd61d505b0a7eb4cb0f79fd1636dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dbb37274c4bb3af8d4a689fbe5dab79ad0dd61d505b0a7eb4cb0f79fd1636dd->enter($__internal_5dbb37274c4bb3af8d4a689fbe5dab79ad0dd61d505b0a7eb4cb0f79fd1636dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c607c0a52108a8d2ea05542295960ff36ac07c379704963395d580dab643b15d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c607c0a52108a8d2ea05542295960ff36ac07c379704963395d580dab643b15d->enter($__internal_c607c0a52108a8d2ea05542295960ff36ac07c379704963395d580dab643b15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_c607c0a52108a8d2ea05542295960ff36ac07c379704963395d580dab643b15d->leave($__internal_c607c0a52108a8d2ea05542295960ff36ac07c379704963395d580dab643b15d_prof);

        
        $__internal_5dbb37274c4bb3af8d4a689fbe5dab79ad0dd61d505b0a7eb4cb0f79fd1636dd->leave($__internal_5dbb37274c4bb3af8d4a689fbe5dab79ad0dd61d505b0a7eb4cb0f79fd1636dd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1471d890c4f97b5cbe7eca91ced08a26c1369ae36efd582b881c28ce8273824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1471d890c4f97b5cbe7eca91ced08a26c1369ae36efd582b881c28ce8273824->enter($__internal_b1471d890c4f97b5cbe7eca91ced08a26c1369ae36efd582b881c28ce8273824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30472ca04285318a400d202fce3394b4592782e70c2d2f444fefcea4d4420c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30472ca04285318a400d202fce3394b4592782e70c2d2f444fefcea4d4420c6e->enter($__internal_30472ca04285318a400d202fce3394b4592782e70c2d2f444fefcea4d4420c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_30472ca04285318a400d202fce3394b4592782e70c2d2f444fefcea4d4420c6e->leave($__internal_30472ca04285318a400d202fce3394b4592782e70c2d2f444fefcea4d4420c6e_prof);

        
        $__internal_b1471d890c4f97b5cbe7eca91ced08a26c1369ae36efd582b881c28ce8273824->leave($__internal_b1471d890c4f97b5cbe7eca91ced08a26c1369ae36efd582b881c28ce8273824_prof);

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
