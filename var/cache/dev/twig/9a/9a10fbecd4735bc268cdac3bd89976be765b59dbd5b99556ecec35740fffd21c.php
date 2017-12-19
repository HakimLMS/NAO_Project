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
        $__internal_d6e687102fde08b38b77498134ad7f1b9a642111ba4d1d6a715241fb19156bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6e687102fde08b38b77498134ad7f1b9a642111ba4d1d6a715241fb19156bb7->enter($__internal_d6e687102fde08b38b77498134ad7f1b9a642111ba4d1d6a715241fb19156bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_288c59e4c53549a4079c95ead2d49b0e63ed9d56a138ff9a7f16ac23f500cf52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288c59e4c53549a4079c95ead2d49b0e63ed9d56a138ff9a7f16ac23f500cf52->enter($__internal_288c59e4c53549a4079c95ead2d49b0e63ed9d56a138ff9a7f16ac23f500cf52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6e687102fde08b38b77498134ad7f1b9a642111ba4d1d6a715241fb19156bb7->leave($__internal_d6e687102fde08b38b77498134ad7f1b9a642111ba4d1d6a715241fb19156bb7_prof);

        
        $__internal_288c59e4c53549a4079c95ead2d49b0e63ed9d56a138ff9a7f16ac23f500cf52->leave($__internal_288c59e4c53549a4079c95ead2d49b0e63ed9d56a138ff9a7f16ac23f500cf52_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_756e4c35f6afef14631a3b212ae491e6e7525d2ab874c4b39adfd9288f48868a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_756e4c35f6afef14631a3b212ae491e6e7525d2ab874c4b39adfd9288f48868a->enter($__internal_756e4c35f6afef14631a3b212ae491e6e7525d2ab874c4b39adfd9288f48868a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_65a28e3bba5bd5d0ea46d4ae819de8d6daa7de9ffcb95f378b31910e87c7172b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65a28e3bba5bd5d0ea46d4ae819de8d6daa7de9ffcb95f378b31910e87c7172b->enter($__internal_65a28e3bba5bd5d0ea46d4ae819de8d6daa7de9ffcb95f378b31910e87c7172b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_65a28e3bba5bd5d0ea46d4ae819de8d6daa7de9ffcb95f378b31910e87c7172b->leave($__internal_65a28e3bba5bd5d0ea46d4ae819de8d6daa7de9ffcb95f378b31910e87c7172b_prof);

        
        $__internal_756e4c35f6afef14631a3b212ae491e6e7525d2ab874c4b39adfd9288f48868a->leave($__internal_756e4c35f6afef14631a3b212ae491e6e7525d2ab874c4b39adfd9288f48868a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_572e5a6d1d5d07bc15d741555f62f6a22e80148e5ecac22668a2f97321aa4bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_572e5a6d1d5d07bc15d741555f62f6a22e80148e5ecac22668a2f97321aa4bf1->enter($__internal_572e5a6d1d5d07bc15d741555f62f6a22e80148e5ecac22668a2f97321aa4bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a5373e5081d5b5dc8bcd8f84ec03e75ac521d346223565066576f0138c162a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5373e5081d5b5dc8bcd8f84ec03e75ac521d346223565066576f0138c162a8->enter($__internal_2a5373e5081d5b5dc8bcd8f84ec03e75ac521d346223565066576f0138c162a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2a5373e5081d5b5dc8bcd8f84ec03e75ac521d346223565066576f0138c162a8->leave($__internal_2a5373e5081d5b5dc8bcd8f84ec03e75ac521d346223565066576f0138c162a8_prof);

        
        $__internal_572e5a6d1d5d07bc15d741555f62f6a22e80148e5ecac22668a2f97321aa4bf1->leave($__internal_572e5a6d1d5d07bc15d741555f62f6a22e80148e5ecac22668a2f97321aa4bf1_prof);

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
