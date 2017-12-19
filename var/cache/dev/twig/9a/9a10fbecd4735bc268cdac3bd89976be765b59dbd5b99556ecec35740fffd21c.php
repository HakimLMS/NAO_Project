<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_191fd969a5d1bcbabaeda8ebd7df9541016b7e82b7eb181196aeffa4ecaa5a4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0ede9a81e952b5c119b948ec0aa45d047541d5e73b2ab77d8c9ab162d29e553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ede9a81e952b5c119b948ec0aa45d047541d5e73b2ab77d8c9ab162d29e553->enter($__internal_a0ede9a81e952b5c119b948ec0aa45d047541d5e73b2ab77d8c9ab162d29e553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_92f968644a2aad0e51fbb6731418bc9f3c512c8dae04af73f4305c604c000ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f968644a2aad0e51fbb6731418bc9f3c512c8dae04af73f4305c604c000ebb->enter($__internal_92f968644a2aad0e51fbb6731418bc9f3c512c8dae04af73f4305c604c000ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0ede9a81e952b5c119b948ec0aa45d047541d5e73b2ab77d8c9ab162d29e553->leave($__internal_a0ede9a81e952b5c119b948ec0aa45d047541d5e73b2ab77d8c9ab162d29e553_prof);

        
        $__internal_92f968644a2aad0e51fbb6731418bc9f3c512c8dae04af73f4305c604c000ebb->leave($__internal_92f968644a2aad0e51fbb6731418bc9f3c512c8dae04af73f4305c604c000ebb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_29ff88d3ce1d89fbfe2d85ece1e42f57008676f442af4173348233fc7f8a6532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29ff88d3ce1d89fbfe2d85ece1e42f57008676f442af4173348233fc7f8a6532->enter($__internal_29ff88d3ce1d89fbfe2d85ece1e42f57008676f442af4173348233fc7f8a6532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_54a2c2462e9d14325b264d8564d551f1d0ca8a9baaaf0a25b1d6f973014fe458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a2c2462e9d14325b264d8564d551f1d0ca8a9baaaf0a25b1d6f973014fe458->enter($__internal_54a2c2462e9d14325b264d8564d551f1d0ca8a9baaaf0a25b1d6f973014fe458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_54a2c2462e9d14325b264d8564d551f1d0ca8a9baaaf0a25b1d6f973014fe458->leave($__internal_54a2c2462e9d14325b264d8564d551f1d0ca8a9baaaf0a25b1d6f973014fe458_prof);

        
        $__internal_29ff88d3ce1d89fbfe2d85ece1e42f57008676f442af4173348233fc7f8a6532->leave($__internal_29ff88d3ce1d89fbfe2d85ece1e42f57008676f442af4173348233fc7f8a6532_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_550499fa926de9d9142743b947db150c2c1f3dbf60bf30ae3df5500bf743d6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_550499fa926de9d9142743b947db150c2c1f3dbf60bf30ae3df5500bf743d6f8->enter($__internal_550499fa926de9d9142743b947db150c2c1f3dbf60bf30ae3df5500bf743d6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3cbf5271d0a1234a914ef5c0b242b977ce785f47b737c1165fbf5a320c3faae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cbf5271d0a1234a914ef5c0b242b977ce785f47b737c1165fbf5a320c3faae0->enter($__internal_3cbf5271d0a1234a914ef5c0b242b977ce785f47b737c1165fbf5a320c3faae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_3cbf5271d0a1234a914ef5c0b242b977ce785f47b737c1165fbf5a320c3faae0->leave($__internal_3cbf5271d0a1234a914ef5c0b242b977ce785f47b737c1165fbf5a320c3faae0_prof);

        
        $__internal_550499fa926de9d9142743b947db150c2c1f3dbf60bf30ae3df5500bf743d6f8->leave($__internal_550499fa926de9d9142743b947db150c2c1f3dbf60bf30ae3df5500bf743d6f8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
