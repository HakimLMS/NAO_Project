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
        $__internal_db8fd34f3ff8719201b64a66f910bb7d25b0d0e67188625e31fee5d87f0e6f52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db8fd34f3ff8719201b64a66f910bb7d25b0d0e67188625e31fee5d87f0e6f52->enter($__internal_db8fd34f3ff8719201b64a66f910bb7d25b0d0e67188625e31fee5d87f0e6f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_401bc045784bce427fbdc0822240f29c464a03b47b7c3c975ec1ccf5291dd437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_401bc045784bce427fbdc0822240f29c464a03b47b7c3c975ec1ccf5291dd437->enter($__internal_401bc045784bce427fbdc0822240f29c464a03b47b7c3c975ec1ccf5291dd437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db8fd34f3ff8719201b64a66f910bb7d25b0d0e67188625e31fee5d87f0e6f52->leave($__internal_db8fd34f3ff8719201b64a66f910bb7d25b0d0e67188625e31fee5d87f0e6f52_prof);

        
        $__internal_401bc045784bce427fbdc0822240f29c464a03b47b7c3c975ec1ccf5291dd437->leave($__internal_401bc045784bce427fbdc0822240f29c464a03b47b7c3c975ec1ccf5291dd437_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a0fe34b7774b37b8540e567b898f48400acb4b02a2b545659c58b1eebbb388c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a0fe34b7774b37b8540e567b898f48400acb4b02a2b545659c58b1eebbb388c->enter($__internal_0a0fe34b7774b37b8540e567b898f48400acb4b02a2b545659c58b1eebbb388c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a4c7f75e0620d006d8dcc4088f267a8a23488612c9893736509b51a5cd7e67ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c7f75e0620d006d8dcc4088f267a8a23488612c9893736509b51a5cd7e67ab->enter($__internal_a4c7f75e0620d006d8dcc4088f267a8a23488612c9893736509b51a5cd7e67ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a4c7f75e0620d006d8dcc4088f267a8a23488612c9893736509b51a5cd7e67ab->leave($__internal_a4c7f75e0620d006d8dcc4088f267a8a23488612c9893736509b51a5cd7e67ab_prof);

        
        $__internal_0a0fe34b7774b37b8540e567b898f48400acb4b02a2b545659c58b1eebbb388c->leave($__internal_0a0fe34b7774b37b8540e567b898f48400acb4b02a2b545659c58b1eebbb388c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_60514e65a5f90f3f10ff9eb7b44a076d7ab8e0fafb60f6faf7120c9ef0392c3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60514e65a5f90f3f10ff9eb7b44a076d7ab8e0fafb60f6faf7120c9ef0392c3f->enter($__internal_60514e65a5f90f3f10ff9eb7b44a076d7ab8e0fafb60f6faf7120c9ef0392c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6f6bcdbdf92ff1d207b1764d51819db2591cdfafd06b2563b76232e4c88ad69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f6bcdbdf92ff1d207b1764d51819db2591cdfafd06b2563b76232e4c88ad69->enter($__internal_e6f6bcdbdf92ff1d207b1764d51819db2591cdfafd06b2563b76232e4c88ad69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e6f6bcdbdf92ff1d207b1764d51819db2591cdfafd06b2563b76232e4c88ad69->leave($__internal_e6f6bcdbdf92ff1d207b1764d51819db2591cdfafd06b2563b76232e4c88ad69_prof);

        
        $__internal_60514e65a5f90f3f10ff9eb7b44a076d7ab8e0fafb60f6faf7120c9ef0392c3f->leave($__internal_60514e65a5f90f3f10ff9eb7b44a076d7ab8e0fafb60f6faf7120c9ef0392c3f_prof);

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
