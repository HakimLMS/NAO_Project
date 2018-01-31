<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_9954d744faf13849b7b6bd1d163b7fda1a8a362e2072b7ae5ef50f906f3934a4 extends Twig_Template
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
        $__internal_6427557de38dc3c6c08ce6db2df77d8a43589472c99874d7744ca302632b3684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6427557de38dc3c6c08ce6db2df77d8a43589472c99874d7744ca302632b3684->enter($__internal_6427557de38dc3c6c08ce6db2df77d8a43589472c99874d7744ca302632b3684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_4a53c147ef1a47edb06fd89e0a06de78a71416ec636b293f287d2adbc33a405d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a53c147ef1a47edb06fd89e0a06de78a71416ec636b293f287d2adbc33a405d->enter($__internal_4a53c147ef1a47edb06fd89e0a06de78a71416ec636b293f287d2adbc33a405d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6427557de38dc3c6c08ce6db2df77d8a43589472c99874d7744ca302632b3684->leave($__internal_6427557de38dc3c6c08ce6db2df77d8a43589472c99874d7744ca302632b3684_prof);

        
        $__internal_4a53c147ef1a47edb06fd89e0a06de78a71416ec636b293f287d2adbc33a405d->leave($__internal_4a53c147ef1a47edb06fd89e0a06de78a71416ec636b293f287d2adbc33a405d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d5f4c9ccff3def2d71977fe9ead4331f0f4c55e23bc4c2c8182f8432b76fd34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5f4c9ccff3def2d71977fe9ead4331f0f4c55e23bc4c2c8182f8432b76fd34->enter($__internal_5d5f4c9ccff3def2d71977fe9ead4331f0f4c55e23bc4c2c8182f8432b76fd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f508f3a3ae817503280e156e4a7a74a3f37a19ec2f9fbe5e1614ae373b2a774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f508f3a3ae817503280e156e4a7a74a3f37a19ec2f9fbe5e1614ae373b2a774->enter($__internal_6f508f3a3ae817503280e156e4a7a74a3f37a19ec2f9fbe5e1614ae373b2a774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_6f508f3a3ae817503280e156e4a7a74a3f37a19ec2f9fbe5e1614ae373b2a774->leave($__internal_6f508f3a3ae817503280e156e4a7a74a3f37a19ec2f9fbe5e1614ae373b2a774_prof);

        
        $__internal_5d5f4c9ccff3def2d71977fe9ead4331f0f4c55e23bc4c2c8182f8432b76fd34->leave($__internal_5d5f4c9ccff3def2d71977fe9ead4331f0f4c55e23bc4c2c8182f8432b76fd34_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1860eacfe865d30d5a326050be44c53a55d188ec961437c4a46642241d18cfd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1860eacfe865d30d5a326050be44c53a55d188ec961437c4a46642241d18cfd9->enter($__internal_1860eacfe865d30d5a326050be44c53a55d188ec961437c4a46642241d18cfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69b89e7385911c493402b9f3475c9c7274c76fb066c9a45a335800d175157d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b89e7385911c493402b9f3475c9c7274c76fb066c9a45a335800d175157d01->enter($__internal_69b89e7385911c493402b9f3475c9c7274c76fb066c9a45a335800d175157d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_69b89e7385911c493402b9f3475c9c7274c76fb066c9a45a335800d175157d01->leave($__internal_69b89e7385911c493402b9f3475c9c7274c76fb066c9a45a335800d175157d01_prof);

        
        $__internal_1860eacfe865d30d5a326050be44c53a55d188ec961437c4a46642241d18cfd9->leave($__internal_1860eacfe865d30d5a326050be44c53a55d188ec961437c4a46642241d18cfd9_prof);

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
