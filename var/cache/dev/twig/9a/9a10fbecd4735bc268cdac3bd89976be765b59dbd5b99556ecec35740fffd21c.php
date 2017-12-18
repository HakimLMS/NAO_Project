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
        $__internal_73aeb929030dff332f246431d5b70080875080a7bce054afa1e43c224c9ea9e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73aeb929030dff332f246431d5b70080875080a7bce054afa1e43c224c9ea9e0->enter($__internal_73aeb929030dff332f246431d5b70080875080a7bce054afa1e43c224c9ea9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_e5563b9c967d8d60d5ceb44142a78b5b21c50593e06d91c2e023a30d427be96a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5563b9c967d8d60d5ceb44142a78b5b21c50593e06d91c2e023a30d427be96a->enter($__internal_e5563b9c967d8d60d5ceb44142a78b5b21c50593e06d91c2e023a30d427be96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73aeb929030dff332f246431d5b70080875080a7bce054afa1e43c224c9ea9e0->leave($__internal_73aeb929030dff332f246431d5b70080875080a7bce054afa1e43c224c9ea9e0_prof);

        
        $__internal_e5563b9c967d8d60d5ceb44142a78b5b21c50593e06d91c2e023a30d427be96a->leave($__internal_e5563b9c967d8d60d5ceb44142a78b5b21c50593e06d91c2e023a30d427be96a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_53cc8acf518bca687724640dee44c9c6bab22e1481b1b8d815afe413c50a9bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53cc8acf518bca687724640dee44c9c6bab22e1481b1b8d815afe413c50a9bc6->enter($__internal_53cc8acf518bca687724640dee44c9c6bab22e1481b1b8d815afe413c50a9bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bcf51b2e5cb946da2d5ec88bffe0a25cc11c4b05f9184fb85e50ead095caf883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf51b2e5cb946da2d5ec88bffe0a25cc11c4b05f9184fb85e50ead095caf883->enter($__internal_bcf51b2e5cb946da2d5ec88bffe0a25cc11c4b05f9184fb85e50ead095caf883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_bcf51b2e5cb946da2d5ec88bffe0a25cc11c4b05f9184fb85e50ead095caf883->leave($__internal_bcf51b2e5cb946da2d5ec88bffe0a25cc11c4b05f9184fb85e50ead095caf883_prof);

        
        $__internal_53cc8acf518bca687724640dee44c9c6bab22e1481b1b8d815afe413c50a9bc6->leave($__internal_53cc8acf518bca687724640dee44c9c6bab22e1481b1b8d815afe413c50a9bc6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_07944e9fb798cb335d4c68cf5be9ee9b11b29363d83c30d8e38ba66605297933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07944e9fb798cb335d4c68cf5be9ee9b11b29363d83c30d8e38ba66605297933->enter($__internal_07944e9fb798cb335d4c68cf5be9ee9b11b29363d83c30d8e38ba66605297933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_522a718909b8bef4359da43f01c07ecb25c2cbaaaf015f3b2f8ad60d02f203ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_522a718909b8bef4359da43f01c07ecb25c2cbaaaf015f3b2f8ad60d02f203ed->enter($__internal_522a718909b8bef4359da43f01c07ecb25c2cbaaaf015f3b2f8ad60d02f203ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_522a718909b8bef4359da43f01c07ecb25c2cbaaaf015f3b2f8ad60d02f203ed->leave($__internal_522a718909b8bef4359da43f01c07ecb25c2cbaaaf015f3b2f8ad60d02f203ed_prof);

        
        $__internal_07944e9fb798cb335d4c68cf5be9ee9b11b29363d83c30d8e38ba66605297933->leave($__internal_07944e9fb798cb335d4c68cf5be9ee9b11b29363d83c30d8e38ba66605297933_prof);

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
