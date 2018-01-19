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
        $__internal_b8520a7abb67b80a93b00673c8b12b1eb09c849e55d58d5a0431f9406af9f3bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8520a7abb67b80a93b00673c8b12b1eb09c849e55d58d5a0431f9406af9f3bf->enter($__internal_b8520a7abb67b80a93b00673c8b12b1eb09c849e55d58d5a0431f9406af9f3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f2fe566315de56966bf0c316100451a12e155fc2053570e5f55cbd833b868c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2fe566315de56966bf0c316100451a12e155fc2053570e5f55cbd833b868c55->enter($__internal_f2fe566315de56966bf0c316100451a12e155fc2053570e5f55cbd833b868c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8520a7abb67b80a93b00673c8b12b1eb09c849e55d58d5a0431f9406af9f3bf->leave($__internal_b8520a7abb67b80a93b00673c8b12b1eb09c849e55d58d5a0431f9406af9f3bf_prof);

        
        $__internal_f2fe566315de56966bf0c316100451a12e155fc2053570e5f55cbd833b868c55->leave($__internal_f2fe566315de56966bf0c316100451a12e155fc2053570e5f55cbd833b868c55_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_364525d3b365ae4fcba217c75db06b70463e1d52e4f1c5a1d5fecea583bff12b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364525d3b365ae4fcba217c75db06b70463e1d52e4f1c5a1d5fecea583bff12b->enter($__internal_364525d3b365ae4fcba217c75db06b70463e1d52e4f1c5a1d5fecea583bff12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b04a692b4af4895bc4ab077aa7a74ac88079bf9fe4df36093d67f58b6be3d735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b04a692b4af4895bc4ab077aa7a74ac88079bf9fe4df36093d67f58b6be3d735->enter($__internal_b04a692b4af4895bc4ab077aa7a74ac88079bf9fe4df36093d67f58b6be3d735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b04a692b4af4895bc4ab077aa7a74ac88079bf9fe4df36093d67f58b6be3d735->leave($__internal_b04a692b4af4895bc4ab077aa7a74ac88079bf9fe4df36093d67f58b6be3d735_prof);

        
        $__internal_364525d3b365ae4fcba217c75db06b70463e1d52e4f1c5a1d5fecea583bff12b->leave($__internal_364525d3b365ae4fcba217c75db06b70463e1d52e4f1c5a1d5fecea583bff12b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9066ac71954f43e08ed56c25e4a4bdb16bc90faa9a18aff5db724b30e13e935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9066ac71954f43e08ed56c25e4a4bdb16bc90faa9a18aff5db724b30e13e935->enter($__internal_c9066ac71954f43e08ed56c25e4a4bdb16bc90faa9a18aff5db724b30e13e935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e19c0c18c47c9b4f020862602c37f81db68234f1e2cb58dbaeac0fd01864741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e19c0c18c47c9b4f020862602c37f81db68234f1e2cb58dbaeac0fd01864741->enter($__internal_8e19c0c18c47c9b4f020862602c37f81db68234f1e2cb58dbaeac0fd01864741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_8e19c0c18c47c9b4f020862602c37f81db68234f1e2cb58dbaeac0fd01864741->leave($__internal_8e19c0c18c47c9b4f020862602c37f81db68234f1e2cb58dbaeac0fd01864741_prof);

        
        $__internal_c9066ac71954f43e08ed56c25e4a4bdb16bc90faa9a18aff5db724b30e13e935->leave($__internal_c9066ac71954f43e08ed56c25e4a4bdb16bc90faa9a18aff5db724b30e13e935_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_915792695717931a48e9e79bc7d5acd332dce42219e68ea34fa2115729c850ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915792695717931a48e9e79bc7d5acd332dce42219e68ea34fa2115729c850ab->enter($__internal_915792695717931a48e9e79bc7d5acd332dce42219e68ea34fa2115729c850ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5b243430fe6d50cee0feb2a19f863e8a60f9e8c05cc1c67af3e8fa2a26626a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b243430fe6d50cee0feb2a19f863e8a60f9e8c05cc1c67af3e8fa2a26626a6->enter($__internal_d5b243430fe6d50cee0feb2a19f863e8a60f9e8c05cc1c67af3e8fa2a26626a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d5b243430fe6d50cee0feb2a19f863e8a60f9e8c05cc1c67af3e8fa2a26626a6->leave($__internal_d5b243430fe6d50cee0feb2a19f863e8a60f9e8c05cc1c67af3e8fa2a26626a6_prof);

        
        $__internal_915792695717931a48e9e79bc7d5acd332dce42219e68ea34fa2115729c850ab->leave($__internal_915792695717931a48e9e79bc7d5acd332dce42219e68ea34fa2115729c850ab_prof);

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
