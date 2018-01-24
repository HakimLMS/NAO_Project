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
        $__internal_9867333a86fc641e98a185f48750c0be9e438b26f05ebb73dc4187bc43bd409a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9867333a86fc641e98a185f48750c0be9e438b26f05ebb73dc4187bc43bd409a->enter($__internal_9867333a86fc641e98a185f48750c0be9e438b26f05ebb73dc4187bc43bd409a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_7a6eb85f46c28ca200669b323f6b0a4d9ec1311bcec5f38901cc90ff4f59e72f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6eb85f46c28ca200669b323f6b0a4d9ec1311bcec5f38901cc90ff4f59e72f->enter($__internal_7a6eb85f46c28ca200669b323f6b0a4d9ec1311bcec5f38901cc90ff4f59e72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9867333a86fc641e98a185f48750c0be9e438b26f05ebb73dc4187bc43bd409a->leave($__internal_9867333a86fc641e98a185f48750c0be9e438b26f05ebb73dc4187bc43bd409a_prof);

        
        $__internal_7a6eb85f46c28ca200669b323f6b0a4d9ec1311bcec5f38901cc90ff4f59e72f->leave($__internal_7a6eb85f46c28ca200669b323f6b0a4d9ec1311bcec5f38901cc90ff4f59e72f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f21307539c93c1a0e13e5b9b0c0e62c894249adfba67016cc676c7331fb2cb81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f21307539c93c1a0e13e5b9b0c0e62c894249adfba67016cc676c7331fb2cb81->enter($__internal_f21307539c93c1a0e13e5b9b0c0e62c894249adfba67016cc676c7331fb2cb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9b11657ac7fa7a75b2047cb40d955d50c29c7b6a1c5f64afa80231b70eedf5bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b11657ac7fa7a75b2047cb40d955d50c29c7b6a1c5f64afa80231b70eedf5bd->enter($__internal_9b11657ac7fa7a75b2047cb40d955d50c29c7b6a1c5f64afa80231b70eedf5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9b11657ac7fa7a75b2047cb40d955d50c29c7b6a1c5f64afa80231b70eedf5bd->leave($__internal_9b11657ac7fa7a75b2047cb40d955d50c29c7b6a1c5f64afa80231b70eedf5bd_prof);

        
        $__internal_f21307539c93c1a0e13e5b9b0c0e62c894249adfba67016cc676c7331fb2cb81->leave($__internal_f21307539c93c1a0e13e5b9b0c0e62c894249adfba67016cc676c7331fb2cb81_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e30814832174f4bc0e21753d3dfdf60e9060122a09d2ba775781c1224d32c969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e30814832174f4bc0e21753d3dfdf60e9060122a09d2ba775781c1224d32c969->enter($__internal_e30814832174f4bc0e21753d3dfdf60e9060122a09d2ba775781c1224d32c969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8481571f518b52b2cc5954cca9b95d4a2fdfe3ab70dd9c2679d973732da6c1dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8481571f518b52b2cc5954cca9b95d4a2fdfe3ab70dd9c2679d973732da6c1dc->enter($__internal_8481571f518b52b2cc5954cca9b95d4a2fdfe3ab70dd9c2679d973732da6c1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8481571f518b52b2cc5954cca9b95d4a2fdfe3ab70dd9c2679d973732da6c1dc->leave($__internal_8481571f518b52b2cc5954cca9b95d4a2fdfe3ab70dd9c2679d973732da6c1dc_prof);

        
        $__internal_e30814832174f4bc0e21753d3dfdf60e9060122a09d2ba775781c1224d32c969->leave($__internal_e30814832174f4bc0e21753d3dfdf60e9060122a09d2ba775781c1224d32c969_prof);

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
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
