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
        $__internal_9d5c9f9056c0cf475a37c3e0a34d597502e56989f074d998ebd25aaf9c80badb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d5c9f9056c0cf475a37c3e0a34d597502e56989f074d998ebd25aaf9c80badb->enter($__internal_9d5c9f9056c0cf475a37c3e0a34d597502e56989f074d998ebd25aaf9c80badb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_957a2f0b3ac08f128818fa6d48b34672754b50e78781aec70aab7c3dba91145d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957a2f0b3ac08f128818fa6d48b34672754b50e78781aec70aab7c3dba91145d->enter($__internal_957a2f0b3ac08f128818fa6d48b34672754b50e78781aec70aab7c3dba91145d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d5c9f9056c0cf475a37c3e0a34d597502e56989f074d998ebd25aaf9c80badb->leave($__internal_9d5c9f9056c0cf475a37c3e0a34d597502e56989f074d998ebd25aaf9c80badb_prof);

        
        $__internal_957a2f0b3ac08f128818fa6d48b34672754b50e78781aec70aab7c3dba91145d->leave($__internal_957a2f0b3ac08f128818fa6d48b34672754b50e78781aec70aab7c3dba91145d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_497100916031907d283d5fa6047ce6f4467d98338026376e9189541ebfab9ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497100916031907d283d5fa6047ce6f4467d98338026376e9189541ebfab9ad9->enter($__internal_497100916031907d283d5fa6047ce6f4467d98338026376e9189541ebfab9ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_24b0c5bd2ca9b48840fe97dae62b444b2f71b8f979317e638f6c940b6f42d9ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b0c5bd2ca9b48840fe97dae62b444b2f71b8f979317e638f6c940b6f42d9ec->enter($__internal_24b0c5bd2ca9b48840fe97dae62b444b2f71b8f979317e638f6c940b6f42d9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_24b0c5bd2ca9b48840fe97dae62b444b2f71b8f979317e638f6c940b6f42d9ec->leave($__internal_24b0c5bd2ca9b48840fe97dae62b444b2f71b8f979317e638f6c940b6f42d9ec_prof);

        
        $__internal_497100916031907d283d5fa6047ce6f4467d98338026376e9189541ebfab9ad9->leave($__internal_497100916031907d283d5fa6047ce6f4467d98338026376e9189541ebfab9ad9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_df558dcb15a733716b0d9a61b61f36fc64113b26f5b5c9c15194a4c2eb282386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df558dcb15a733716b0d9a61b61f36fc64113b26f5b5c9c15194a4c2eb282386->enter($__internal_df558dcb15a733716b0d9a61b61f36fc64113b26f5b5c9c15194a4c2eb282386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13cb65e4a14ad02a118b93e4398d60119e0f87e6b43b307da3f51dc5488b2bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13cb65e4a14ad02a118b93e4398d60119e0f87e6b43b307da3f51dc5488b2bd6->enter($__internal_13cb65e4a14ad02a118b93e4398d60119e0f87e6b43b307da3f51dc5488b2bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_13cb65e4a14ad02a118b93e4398d60119e0f87e6b43b307da3f51dc5488b2bd6->leave($__internal_13cb65e4a14ad02a118b93e4398d60119e0f87e6b43b307da3f51dc5488b2bd6_prof);

        
        $__internal_df558dcb15a733716b0d9a61b61f36fc64113b26f5b5c9c15194a4c2eb282386->leave($__internal_df558dcb15a733716b0d9a61b61f36fc64113b26f5b5c9c15194a4c2eb282386_prof);

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
