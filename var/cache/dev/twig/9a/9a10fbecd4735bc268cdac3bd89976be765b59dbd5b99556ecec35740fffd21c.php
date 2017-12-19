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
        $__internal_6f356c52d73000f1282be75515273195a55fa7eef043e4f5caef118df16b2ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f356c52d73000f1282be75515273195a55fa7eef043e4f5caef118df16b2ab6->enter($__internal_6f356c52d73000f1282be75515273195a55fa7eef043e4f5caef118df16b2ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_cc8212402e8c20858a53b4256f7563b37ee20c7ee66f6da81d0d4f4baed1cc08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8212402e8c20858a53b4256f7563b37ee20c7ee66f6da81d0d4f4baed1cc08->enter($__internal_cc8212402e8c20858a53b4256f7563b37ee20c7ee66f6da81d0d4f4baed1cc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f356c52d73000f1282be75515273195a55fa7eef043e4f5caef118df16b2ab6->leave($__internal_6f356c52d73000f1282be75515273195a55fa7eef043e4f5caef118df16b2ab6_prof);

        
        $__internal_cc8212402e8c20858a53b4256f7563b37ee20c7ee66f6da81d0d4f4baed1cc08->leave($__internal_cc8212402e8c20858a53b4256f7563b37ee20c7ee66f6da81d0d4f4baed1cc08_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ad60b6e70828452cf105c4a0471200495c5f89bed154a4345c53806da0464a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ad60b6e70828452cf105c4a0471200495c5f89bed154a4345c53806da0464a4->enter($__internal_2ad60b6e70828452cf105c4a0471200495c5f89bed154a4345c53806da0464a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eff9b93a24de07e4a80dcd72f4e6473a5683a164f6cb886b7e49bf51ac56447f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff9b93a24de07e4a80dcd72f4e6473a5683a164f6cb886b7e49bf51ac56447f->enter($__internal_eff9b93a24de07e4a80dcd72f4e6473a5683a164f6cb886b7e49bf51ac56447f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_eff9b93a24de07e4a80dcd72f4e6473a5683a164f6cb886b7e49bf51ac56447f->leave($__internal_eff9b93a24de07e4a80dcd72f4e6473a5683a164f6cb886b7e49bf51ac56447f_prof);

        
        $__internal_2ad60b6e70828452cf105c4a0471200495c5f89bed154a4345c53806da0464a4->leave($__internal_2ad60b6e70828452cf105c4a0471200495c5f89bed154a4345c53806da0464a4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_61bed6dab9f24e02edf9d675d34943340a8bc24a9179cab9090b7213294a2f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61bed6dab9f24e02edf9d675d34943340a8bc24a9179cab9090b7213294a2f25->enter($__internal_61bed6dab9f24e02edf9d675d34943340a8bc24a9179cab9090b7213294a2f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b20bf0ec33c3dfeff9c87192179ac42eb66d056f5766a070abb8529dba67d837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20bf0ec33c3dfeff9c87192179ac42eb66d056f5766a070abb8529dba67d837->enter($__internal_b20bf0ec33c3dfeff9c87192179ac42eb66d056f5766a070abb8529dba67d837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b20bf0ec33c3dfeff9c87192179ac42eb66d056f5766a070abb8529dba67d837->leave($__internal_b20bf0ec33c3dfeff9c87192179ac42eb66d056f5766a070abb8529dba67d837_prof);

        
        $__internal_61bed6dab9f24e02edf9d675d34943340a8bc24a9179cab9090b7213294a2f25->leave($__internal_61bed6dab9f24e02edf9d675d34943340a8bc24a9179cab9090b7213294a2f25_prof);

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
