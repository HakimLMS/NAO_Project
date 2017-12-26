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
        $__internal_af0e60fc14580ced1fd19c827ad1bb57a53eff93fb1f5a4a7c63b85915dee23b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af0e60fc14580ced1fd19c827ad1bb57a53eff93fb1f5a4a7c63b85915dee23b->enter($__internal_af0e60fc14580ced1fd19c827ad1bb57a53eff93fb1f5a4a7c63b85915dee23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6178887956ac21151fb06004d81520250956ee01d49abfa9a347baddb3b2a9fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6178887956ac21151fb06004d81520250956ee01d49abfa9a347baddb3b2a9fd->enter($__internal_6178887956ac21151fb06004d81520250956ee01d49abfa9a347baddb3b2a9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af0e60fc14580ced1fd19c827ad1bb57a53eff93fb1f5a4a7c63b85915dee23b->leave($__internal_af0e60fc14580ced1fd19c827ad1bb57a53eff93fb1f5a4a7c63b85915dee23b_prof);

        
        $__internal_6178887956ac21151fb06004d81520250956ee01d49abfa9a347baddb3b2a9fd->leave($__internal_6178887956ac21151fb06004d81520250956ee01d49abfa9a347baddb3b2a9fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c91c4b7cab339efa714317195262f066923166d7708187004fcfd8de53401c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c91c4b7cab339efa714317195262f066923166d7708187004fcfd8de53401c8a->enter($__internal_c91c4b7cab339efa714317195262f066923166d7708187004fcfd8de53401c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bbdee8ecc8b996b922d1bfc1e72d246e145e14293e8ae790677b35d5b4cbec2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbdee8ecc8b996b922d1bfc1e72d246e145e14293e8ae790677b35d5b4cbec2f->enter($__internal_bbdee8ecc8b996b922d1bfc1e72d246e145e14293e8ae790677b35d5b4cbec2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bbdee8ecc8b996b922d1bfc1e72d246e145e14293e8ae790677b35d5b4cbec2f->leave($__internal_bbdee8ecc8b996b922d1bfc1e72d246e145e14293e8ae790677b35d5b4cbec2f_prof);

        
        $__internal_c91c4b7cab339efa714317195262f066923166d7708187004fcfd8de53401c8a->leave($__internal_c91c4b7cab339efa714317195262f066923166d7708187004fcfd8de53401c8a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed83028259df27bbbccdd5c3de2ceabb9553ef19b70a5f20a94d78e6e066eb89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed83028259df27bbbccdd5c3de2ceabb9553ef19b70a5f20a94d78e6e066eb89->enter($__internal_ed83028259df27bbbccdd5c3de2ceabb9553ef19b70a5f20a94d78e6e066eb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_709b760ae7d7ef416203dee60690d5e6f0a807a449e5e5c5ead0365b77c91328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_709b760ae7d7ef416203dee60690d5e6f0a807a449e5e5c5ead0365b77c91328->enter($__internal_709b760ae7d7ef416203dee60690d5e6f0a807a449e5e5c5ead0365b77c91328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_709b760ae7d7ef416203dee60690d5e6f0a807a449e5e5c5ead0365b77c91328->leave($__internal_709b760ae7d7ef416203dee60690d5e6f0a807a449e5e5c5ead0365b77c91328_prof);

        
        $__internal_ed83028259df27bbbccdd5c3de2ceabb9553ef19b70a5f20a94d78e6e066eb89->leave($__internal_ed83028259df27bbbccdd5c3de2ceabb9553ef19b70a5f20a94d78e6e066eb89_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ce49cf7952463dc7411a694e4b39fc3f6f47b9cd13cc039a4781263797f8d54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce49cf7952463dc7411a694e4b39fc3f6f47b9cd13cc039a4781263797f8d54->enter($__internal_6ce49cf7952463dc7411a694e4b39fc3f6f47b9cd13cc039a4781263797f8d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a9467039fb45dc6ac718b2e0f59878924874ea34bb4744ced9500df56e9bd4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9467039fb45dc6ac718b2e0f59878924874ea34bb4744ced9500df56e9bd4e->enter($__internal_1a9467039fb45dc6ac718b2e0f59878924874ea34bb4744ced9500df56e9bd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1a9467039fb45dc6ac718b2e0f59878924874ea34bb4744ced9500df56e9bd4e->leave($__internal_1a9467039fb45dc6ac718b2e0f59878924874ea34bb4744ced9500df56e9bd4e_prof);

        
        $__internal_6ce49cf7952463dc7411a694e4b39fc3f6f47b9cd13cc039a4781263797f8d54->leave($__internal_6ce49cf7952463dc7411a694e4b39fc3f6f47b9cd13cc039a4781263797f8d54_prof);

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
