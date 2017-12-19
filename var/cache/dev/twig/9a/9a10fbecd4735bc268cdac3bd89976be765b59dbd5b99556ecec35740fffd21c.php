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
        $__internal_68d8ce8119ca278f8b54bbd9844ab333841041af1d38edcb186c236dde0cd60d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d8ce8119ca278f8b54bbd9844ab333841041af1d38edcb186c236dde0cd60d->enter($__internal_68d8ce8119ca278f8b54bbd9844ab333841041af1d38edcb186c236dde0cd60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_b4fbeb5234cf4fefc2974ae7e50a172c84c92362891a760bfe2160a186370437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4fbeb5234cf4fefc2974ae7e50a172c84c92362891a760bfe2160a186370437->enter($__internal_b4fbeb5234cf4fefc2974ae7e50a172c84c92362891a760bfe2160a186370437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68d8ce8119ca278f8b54bbd9844ab333841041af1d38edcb186c236dde0cd60d->leave($__internal_68d8ce8119ca278f8b54bbd9844ab333841041af1d38edcb186c236dde0cd60d_prof);

        
        $__internal_b4fbeb5234cf4fefc2974ae7e50a172c84c92362891a760bfe2160a186370437->leave($__internal_b4fbeb5234cf4fefc2974ae7e50a172c84c92362891a760bfe2160a186370437_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe2abe87b6ccf3924fb4a2958b9fe62c152c3e638583b49b5284c3d2274597e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe2abe87b6ccf3924fb4a2958b9fe62c152c3e638583b49b5284c3d2274597e2->enter($__internal_fe2abe87b6ccf3924fb4a2958b9fe62c152c3e638583b49b5284c3d2274597e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c53f48a6ab5645c2a80e470c8b811b251196256cd2cf3f4be8c3f05e38e793e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c53f48a6ab5645c2a80e470c8b811b251196256cd2cf3f4be8c3f05e38e793e2->enter($__internal_c53f48a6ab5645c2a80e470c8b811b251196256cd2cf3f4be8c3f05e38e793e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c53f48a6ab5645c2a80e470c8b811b251196256cd2cf3f4be8c3f05e38e793e2->leave($__internal_c53f48a6ab5645c2a80e470c8b811b251196256cd2cf3f4be8c3f05e38e793e2_prof);

        
        $__internal_fe2abe87b6ccf3924fb4a2958b9fe62c152c3e638583b49b5284c3d2274597e2->leave($__internal_fe2abe87b6ccf3924fb4a2958b9fe62c152c3e638583b49b5284c3d2274597e2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a98c29bf502134f72dad9cfca70659e7760df16ebb9710d3172bc8177a9ea82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a98c29bf502134f72dad9cfca70659e7760df16ebb9710d3172bc8177a9ea82->enter($__internal_0a98c29bf502134f72dad9cfca70659e7760df16ebb9710d3172bc8177a9ea82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b5bb1289ef977b1c8fc1b5e9094f698ca19bdd9694acdb3dd09aef34b68cdb13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5bb1289ef977b1c8fc1b5e9094f698ca19bdd9694acdb3dd09aef34b68cdb13->enter($__internal_b5bb1289ef977b1c8fc1b5e9094f698ca19bdd9694acdb3dd09aef34b68cdb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b5bb1289ef977b1c8fc1b5e9094f698ca19bdd9694acdb3dd09aef34b68cdb13->leave($__internal_b5bb1289ef977b1c8fc1b5e9094f698ca19bdd9694acdb3dd09aef34b68cdb13_prof);

        
        $__internal_0a98c29bf502134f72dad9cfca70659e7760df16ebb9710d3172bc8177a9ea82->leave($__internal_0a98c29bf502134f72dad9cfca70659e7760df16ebb9710d3172bc8177a9ea82_prof);

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
