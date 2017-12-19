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
        $__internal_dbbe17f60b6f475d0de89d194ed677eee5f7a29b18c54ff6185546bad4ce8b08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbbe17f60b6f475d0de89d194ed677eee5f7a29b18c54ff6185546bad4ce8b08->enter($__internal_dbbe17f60b6f475d0de89d194ed677eee5f7a29b18c54ff6185546bad4ce8b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_60c65b3a9ca2034b53ec9333345f7afbde3e3def1cab998c220a3e96f727ccdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c65b3a9ca2034b53ec9333345f7afbde3e3def1cab998c220a3e96f727ccdf->enter($__internal_60c65b3a9ca2034b53ec9333345f7afbde3e3def1cab998c220a3e96f727ccdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbbe17f60b6f475d0de89d194ed677eee5f7a29b18c54ff6185546bad4ce8b08->leave($__internal_dbbe17f60b6f475d0de89d194ed677eee5f7a29b18c54ff6185546bad4ce8b08_prof);

        
        $__internal_60c65b3a9ca2034b53ec9333345f7afbde3e3def1cab998c220a3e96f727ccdf->leave($__internal_60c65b3a9ca2034b53ec9333345f7afbde3e3def1cab998c220a3e96f727ccdf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_978cf003fbdaba6c5f18d6ad5b0e447039f612cf7d1461aabc9727d0c641ce4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978cf003fbdaba6c5f18d6ad5b0e447039f612cf7d1461aabc9727d0c641ce4d->enter($__internal_978cf003fbdaba6c5f18d6ad5b0e447039f612cf7d1461aabc9727d0c641ce4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0970553526b5388597d6db09c3f289cce03da171d6fc9f5eb891f17180f7a004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0970553526b5388597d6db09c3f289cce03da171d6fc9f5eb891f17180f7a004->enter($__internal_0970553526b5388597d6db09c3f289cce03da171d6fc9f5eb891f17180f7a004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0970553526b5388597d6db09c3f289cce03da171d6fc9f5eb891f17180f7a004->leave($__internal_0970553526b5388597d6db09c3f289cce03da171d6fc9f5eb891f17180f7a004_prof);

        
        $__internal_978cf003fbdaba6c5f18d6ad5b0e447039f612cf7d1461aabc9727d0c641ce4d->leave($__internal_978cf003fbdaba6c5f18d6ad5b0e447039f612cf7d1461aabc9727d0c641ce4d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6544e0e86df173a0bb1f7b44a22757c013a2535ed397c91f4f2edc5f5aac620d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6544e0e86df173a0bb1f7b44a22757c013a2535ed397c91f4f2edc5f5aac620d->enter($__internal_6544e0e86df173a0bb1f7b44a22757c013a2535ed397c91f4f2edc5f5aac620d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c84e7e80c2785c943a2b87a03f8c94e2328151aaaa5d84182d4eef00b06a087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c84e7e80c2785c943a2b87a03f8c94e2328151aaaa5d84182d4eef00b06a087->enter($__internal_5c84e7e80c2785c943a2b87a03f8c94e2328151aaaa5d84182d4eef00b06a087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_5c84e7e80c2785c943a2b87a03f8c94e2328151aaaa5d84182d4eef00b06a087->leave($__internal_5c84e7e80c2785c943a2b87a03f8c94e2328151aaaa5d84182d4eef00b06a087_prof);

        
        $__internal_6544e0e86df173a0bb1f7b44a22757c013a2535ed397c91f4f2edc5f5aac620d->leave($__internal_6544e0e86df173a0bb1f7b44a22757c013a2535ed397c91f4f2edc5f5aac620d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4ab25333299d030f7155a42b86aa3ea253b968863bf501086802ff8472242cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4ab25333299d030f7155a42b86aa3ea253b968863bf501086802ff8472242cb->enter($__internal_c4ab25333299d030f7155a42b86aa3ea253b968863bf501086802ff8472242cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f2f096187ac3111c8d3d35c74c4830ee7a7b1cd067638e751e889727e0a4178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2f096187ac3111c8d3d35c74c4830ee7a7b1cd067638e751e889727e0a4178->enter($__internal_9f2f096187ac3111c8d3d35c74c4830ee7a7b1cd067638e751e889727e0a4178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9f2f096187ac3111c8d3d35c74c4830ee7a7b1cd067638e751e889727e0a4178->leave($__internal_9f2f096187ac3111c8d3d35c74c4830ee7a7b1cd067638e751e889727e0a4178_prof);

        
        $__internal_c4ab25333299d030f7155a42b86aa3ea253b968863bf501086802ff8472242cb->leave($__internal_c4ab25333299d030f7155a42b86aa3ea253b968863bf501086802ff8472242cb_prof);

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
