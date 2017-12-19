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
        $__internal_c68b59f8b440ded1b7c00581d4b0427993c4d9c9d2fd0b872f7a1161190c3376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c68b59f8b440ded1b7c00581d4b0427993c4d9c9d2fd0b872f7a1161190c3376->enter($__internal_c68b59f8b440ded1b7c00581d4b0427993c4d9c9d2fd0b872f7a1161190c3376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_eb91219871abdee75eb431d47591a48a2e59d0c874ab5805b8778cc0babb3fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb91219871abdee75eb431d47591a48a2e59d0c874ab5805b8778cc0babb3fe2->enter($__internal_eb91219871abdee75eb431d47591a48a2e59d0c874ab5805b8778cc0babb3fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c68b59f8b440ded1b7c00581d4b0427993c4d9c9d2fd0b872f7a1161190c3376->leave($__internal_c68b59f8b440ded1b7c00581d4b0427993c4d9c9d2fd0b872f7a1161190c3376_prof);

        
        $__internal_eb91219871abdee75eb431d47591a48a2e59d0c874ab5805b8778cc0babb3fe2->leave($__internal_eb91219871abdee75eb431d47591a48a2e59d0c874ab5805b8778cc0babb3fe2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae82d82ad17126bc9fe887b73f2af995d7599dd2de7256aac4fea353fcb6faad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae82d82ad17126bc9fe887b73f2af995d7599dd2de7256aac4fea353fcb6faad->enter($__internal_ae82d82ad17126bc9fe887b73f2af995d7599dd2de7256aac4fea353fcb6faad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b503036329d9e6bafca2e719c8dc92f3740ecbcea4d3d76f99730aa738295730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b503036329d9e6bafca2e719c8dc92f3740ecbcea4d3d76f99730aa738295730->enter($__internal_b503036329d9e6bafca2e719c8dc92f3740ecbcea4d3d76f99730aa738295730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b503036329d9e6bafca2e719c8dc92f3740ecbcea4d3d76f99730aa738295730->leave($__internal_b503036329d9e6bafca2e719c8dc92f3740ecbcea4d3d76f99730aa738295730_prof);

        
        $__internal_ae82d82ad17126bc9fe887b73f2af995d7599dd2de7256aac4fea353fcb6faad->leave($__internal_ae82d82ad17126bc9fe887b73f2af995d7599dd2de7256aac4fea353fcb6faad_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bfb4211ae9bdf0a7d8afbf98c594a2beeefeb92048b8b9170f1a4b7e92eb713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bfb4211ae9bdf0a7d8afbf98c594a2beeefeb92048b8b9170f1a4b7e92eb713->enter($__internal_8bfb4211ae9bdf0a7d8afbf98c594a2beeefeb92048b8b9170f1a4b7e92eb713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cfd7f2781fc3eafaeb13b3cb6feacff2fb81fe3160015cbf81010490c60317d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd7f2781fc3eafaeb13b3cb6feacff2fb81fe3160015cbf81010490c60317d7->enter($__internal_cfd7f2781fc3eafaeb13b3cb6feacff2fb81fe3160015cbf81010490c60317d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_cfd7f2781fc3eafaeb13b3cb6feacff2fb81fe3160015cbf81010490c60317d7->leave($__internal_cfd7f2781fc3eafaeb13b3cb6feacff2fb81fe3160015cbf81010490c60317d7_prof);

        
        $__internal_8bfb4211ae9bdf0a7d8afbf98c594a2beeefeb92048b8b9170f1a4b7e92eb713->leave($__internal_8bfb4211ae9bdf0a7d8afbf98c594a2beeefeb92048b8b9170f1a4b7e92eb713_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b9d4f76663d62e3b5e2b194d2ab41bb29a310171b7246f5301ae759b824f274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b9d4f76663d62e3b5e2b194d2ab41bb29a310171b7246f5301ae759b824f274->enter($__internal_9b9d4f76663d62e3b5e2b194d2ab41bb29a310171b7246f5301ae759b824f274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de405e46f836e4178de3b6584490d62da18517e496949e6704218a43f04c0bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de405e46f836e4178de3b6584490d62da18517e496949e6704218a43f04c0bd6->enter($__internal_de405e46f836e4178de3b6584490d62da18517e496949e6704218a43f04c0bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_de405e46f836e4178de3b6584490d62da18517e496949e6704218a43f04c0bd6->leave($__internal_de405e46f836e4178de3b6584490d62da18517e496949e6704218a43f04c0bd6_prof);

        
        $__internal_9b9d4f76663d62e3b5e2b194d2ab41bb29a310171b7246f5301ae759b824f274->leave($__internal_9b9d4f76663d62e3b5e2b194d2ab41bb29a310171b7246f5301ae759b824f274_prof);

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
