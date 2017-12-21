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
        $__internal_93c8081ea85f05e6c80fe3765a69dcc13b0378e303d3bc3440de9cadf80ffd0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c8081ea85f05e6c80fe3765a69dcc13b0378e303d3bc3440de9cadf80ffd0b->enter($__internal_93c8081ea85f05e6c80fe3765a69dcc13b0378e303d3bc3440de9cadf80ffd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4b63d396ed9348715a62e273f2ebf98b40b7a42d126a3948e711ca2b9a5b5255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b63d396ed9348715a62e273f2ebf98b40b7a42d126a3948e711ca2b9a5b5255->enter($__internal_4b63d396ed9348715a62e273f2ebf98b40b7a42d126a3948e711ca2b9a5b5255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93c8081ea85f05e6c80fe3765a69dcc13b0378e303d3bc3440de9cadf80ffd0b->leave($__internal_93c8081ea85f05e6c80fe3765a69dcc13b0378e303d3bc3440de9cadf80ffd0b_prof);

        
        $__internal_4b63d396ed9348715a62e273f2ebf98b40b7a42d126a3948e711ca2b9a5b5255->leave($__internal_4b63d396ed9348715a62e273f2ebf98b40b7a42d126a3948e711ca2b9a5b5255_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e185aff7e9ee0e2b439f916b275bef6400b38ca11334d6171a1f8ad7f697ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e185aff7e9ee0e2b439f916b275bef6400b38ca11334d6171a1f8ad7f697ac6->enter($__internal_2e185aff7e9ee0e2b439f916b275bef6400b38ca11334d6171a1f8ad7f697ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cb79bf78d8e27d058bd92b3752adaaa06e94f721733681928d94aba857305ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb79bf78d8e27d058bd92b3752adaaa06e94f721733681928d94aba857305ddc->enter($__internal_cb79bf78d8e27d058bd92b3752adaaa06e94f721733681928d94aba857305ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cb79bf78d8e27d058bd92b3752adaaa06e94f721733681928d94aba857305ddc->leave($__internal_cb79bf78d8e27d058bd92b3752adaaa06e94f721733681928d94aba857305ddc_prof);

        
        $__internal_2e185aff7e9ee0e2b439f916b275bef6400b38ca11334d6171a1f8ad7f697ac6->leave($__internal_2e185aff7e9ee0e2b439f916b275bef6400b38ca11334d6171a1f8ad7f697ac6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b942491c4f8ac6b258e8692f6f954ae9012eeed0af104e8cd6d432c7d7c3d800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b942491c4f8ac6b258e8692f6f954ae9012eeed0af104e8cd6d432c7d7c3d800->enter($__internal_b942491c4f8ac6b258e8692f6f954ae9012eeed0af104e8cd6d432c7d7c3d800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_18574afdfa36fbea4f23eac81a81d00ca59c453dcbcd39572f379a91d7e70845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18574afdfa36fbea4f23eac81a81d00ca59c453dcbcd39572f379a91d7e70845->enter($__internal_18574afdfa36fbea4f23eac81a81d00ca59c453dcbcd39572f379a91d7e70845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_18574afdfa36fbea4f23eac81a81d00ca59c453dcbcd39572f379a91d7e70845->leave($__internal_18574afdfa36fbea4f23eac81a81d00ca59c453dcbcd39572f379a91d7e70845_prof);

        
        $__internal_b942491c4f8ac6b258e8692f6f954ae9012eeed0af104e8cd6d432c7d7c3d800->leave($__internal_b942491c4f8ac6b258e8692f6f954ae9012eeed0af104e8cd6d432c7d7c3d800_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_bac494ae0a1f7232e3e91f879b1103d5ee3d64796a68ad5e71ef4989c047eee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bac494ae0a1f7232e3e91f879b1103d5ee3d64796a68ad5e71ef4989c047eee4->enter($__internal_bac494ae0a1f7232e3e91f879b1103d5ee3d64796a68ad5e71ef4989c047eee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ba3c0801df002ac309054633b71a24087537038ee1cf5158bba4e02f2948938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba3c0801df002ac309054633b71a24087537038ee1cf5158bba4e02f2948938->enter($__internal_0ba3c0801df002ac309054633b71a24087537038ee1cf5158bba4e02f2948938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0ba3c0801df002ac309054633b71a24087537038ee1cf5158bba4e02f2948938->leave($__internal_0ba3c0801df002ac309054633b71a24087537038ee1cf5158bba4e02f2948938_prof);

        
        $__internal_bac494ae0a1f7232e3e91f879b1103d5ee3d64796a68ad5e71ef4989c047eee4->leave($__internal_bac494ae0a1f7232e3e91f879b1103d5ee3d64796a68ad5e71ef4989c047eee4_prof);

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
