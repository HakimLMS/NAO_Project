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
        $__internal_e78a7434bfdaa649e529fce84732ccb88b9a72ed536b165834eb34923527f3a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e78a7434bfdaa649e529fce84732ccb88b9a72ed536b165834eb34923527f3a2->enter($__internal_e78a7434bfdaa649e529fce84732ccb88b9a72ed536b165834eb34923527f3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_133ebd83ca558bc0dc076be2abb5f20e5b92bc1f16e104325a7b2a6ab5eeceac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133ebd83ca558bc0dc076be2abb5f20e5b92bc1f16e104325a7b2a6ab5eeceac->enter($__internal_133ebd83ca558bc0dc076be2abb5f20e5b92bc1f16e104325a7b2a6ab5eeceac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e78a7434bfdaa649e529fce84732ccb88b9a72ed536b165834eb34923527f3a2->leave($__internal_e78a7434bfdaa649e529fce84732ccb88b9a72ed536b165834eb34923527f3a2_prof);

        
        $__internal_133ebd83ca558bc0dc076be2abb5f20e5b92bc1f16e104325a7b2a6ab5eeceac->leave($__internal_133ebd83ca558bc0dc076be2abb5f20e5b92bc1f16e104325a7b2a6ab5eeceac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5b38634ed680c91b84ca2a4860c06c994f9cd5a4194946619749e853defc98d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b38634ed680c91b84ca2a4860c06c994f9cd5a4194946619749e853defc98d9->enter($__internal_5b38634ed680c91b84ca2a4860c06c994f9cd5a4194946619749e853defc98d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b394d3299612298cf4a820e5e34f4a3ec79be661840dbf6f672d7feada693510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b394d3299612298cf4a820e5e34f4a3ec79be661840dbf6f672d7feada693510->enter($__internal_b394d3299612298cf4a820e5e34f4a3ec79be661840dbf6f672d7feada693510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b394d3299612298cf4a820e5e34f4a3ec79be661840dbf6f672d7feada693510->leave($__internal_b394d3299612298cf4a820e5e34f4a3ec79be661840dbf6f672d7feada693510_prof);

        
        $__internal_5b38634ed680c91b84ca2a4860c06c994f9cd5a4194946619749e853defc98d9->leave($__internal_5b38634ed680c91b84ca2a4860c06c994f9cd5a4194946619749e853defc98d9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fd66618e1615e5bf496c57917e1f1291d68af33f402cecba55cd00145efa0e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd66618e1615e5bf496c57917e1f1291d68af33f402cecba55cd00145efa0e7->enter($__internal_2fd66618e1615e5bf496c57917e1f1291d68af33f402cecba55cd00145efa0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8ab56b44a9455613f2015e7295d220f3f836cea2bc157f79dc8ad4fd90027ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ab56b44a9455613f2015e7295d220f3f836cea2bc157f79dc8ad4fd90027ce->enter($__internal_e8ab56b44a9455613f2015e7295d220f3f836cea2bc157f79dc8ad4fd90027ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e8ab56b44a9455613f2015e7295d220f3f836cea2bc157f79dc8ad4fd90027ce->leave($__internal_e8ab56b44a9455613f2015e7295d220f3f836cea2bc157f79dc8ad4fd90027ce_prof);

        
        $__internal_2fd66618e1615e5bf496c57917e1f1291d68af33f402cecba55cd00145efa0e7->leave($__internal_2fd66618e1615e5bf496c57917e1f1291d68af33f402cecba55cd00145efa0e7_prof);

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
