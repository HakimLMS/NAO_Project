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
        $__internal_410b06a8830668b9d6cbfc536559ae4d42d28d1e345a32fe22512a3fd483089f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_410b06a8830668b9d6cbfc536559ae4d42d28d1e345a32fe22512a3fd483089f->enter($__internal_410b06a8830668b9d6cbfc536559ae4d42d28d1e345a32fe22512a3fd483089f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_85e602da64b8780f71257f58ecac9db7a5289c32d5eb3566a595d62a0654accf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e602da64b8780f71257f58ecac9db7a5289c32d5eb3566a595d62a0654accf->enter($__internal_85e602da64b8780f71257f58ecac9db7a5289c32d5eb3566a595d62a0654accf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_410b06a8830668b9d6cbfc536559ae4d42d28d1e345a32fe22512a3fd483089f->leave($__internal_410b06a8830668b9d6cbfc536559ae4d42d28d1e345a32fe22512a3fd483089f_prof);

        
        $__internal_85e602da64b8780f71257f58ecac9db7a5289c32d5eb3566a595d62a0654accf->leave($__internal_85e602da64b8780f71257f58ecac9db7a5289c32d5eb3566a595d62a0654accf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_06adf86880696f1770fc2a93d910d4374abcd58df838fc9dceb211dbe2a768a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06adf86880696f1770fc2a93d910d4374abcd58df838fc9dceb211dbe2a768a8->enter($__internal_06adf86880696f1770fc2a93d910d4374abcd58df838fc9dceb211dbe2a768a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4788a5b48e4dcab978f453982075962db1ddb30c5a80799b51f054bf1f72624b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4788a5b48e4dcab978f453982075962db1ddb30c5a80799b51f054bf1f72624b->enter($__internal_4788a5b48e4dcab978f453982075962db1ddb30c5a80799b51f054bf1f72624b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4788a5b48e4dcab978f453982075962db1ddb30c5a80799b51f054bf1f72624b->leave($__internal_4788a5b48e4dcab978f453982075962db1ddb30c5a80799b51f054bf1f72624b_prof);

        
        $__internal_06adf86880696f1770fc2a93d910d4374abcd58df838fc9dceb211dbe2a768a8->leave($__internal_06adf86880696f1770fc2a93d910d4374abcd58df838fc9dceb211dbe2a768a8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_204e9f1b6172a6974e9feb5c0aa771f265ee4d1a97f5786a770f6c03bfbadb37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204e9f1b6172a6974e9feb5c0aa771f265ee4d1a97f5786a770f6c03bfbadb37->enter($__internal_204e9f1b6172a6974e9feb5c0aa771f265ee4d1a97f5786a770f6c03bfbadb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_434aa9259d246629ac01fbc16d2937448188a020ee89ba569dbbb58ba1716dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434aa9259d246629ac01fbc16d2937448188a020ee89ba569dbbb58ba1716dbe->enter($__internal_434aa9259d246629ac01fbc16d2937448188a020ee89ba569dbbb58ba1716dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_434aa9259d246629ac01fbc16d2937448188a020ee89ba569dbbb58ba1716dbe->leave($__internal_434aa9259d246629ac01fbc16d2937448188a020ee89ba569dbbb58ba1716dbe_prof);

        
        $__internal_204e9f1b6172a6974e9feb5c0aa771f265ee4d1a97f5786a770f6c03bfbadb37->leave($__internal_204e9f1b6172a6974e9feb5c0aa771f265ee4d1a97f5786a770f6c03bfbadb37_prof);

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
