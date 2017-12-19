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
        $__internal_3efb9fa98120608269e65590322670d9602215d1de46c754b4c32882fdcfff9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3efb9fa98120608269e65590322670d9602215d1de46c754b4c32882fdcfff9e->enter($__internal_3efb9fa98120608269e65590322670d9602215d1de46c754b4c32882fdcfff9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_1ce4940040e27941032ccdb782c6cdf980ce733bc86b7ee941d7a1802e797a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce4940040e27941032ccdb782c6cdf980ce733bc86b7ee941d7a1802e797a3c->enter($__internal_1ce4940040e27941032ccdb782c6cdf980ce733bc86b7ee941d7a1802e797a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3efb9fa98120608269e65590322670d9602215d1de46c754b4c32882fdcfff9e->leave($__internal_3efb9fa98120608269e65590322670d9602215d1de46c754b4c32882fdcfff9e_prof);

        
        $__internal_1ce4940040e27941032ccdb782c6cdf980ce733bc86b7ee941d7a1802e797a3c->leave($__internal_1ce4940040e27941032ccdb782c6cdf980ce733bc86b7ee941d7a1802e797a3c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_48bcc6294dca834e599a3e18b58d81cc6b58bd6acc565d137848297b8a2cf3b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48bcc6294dca834e599a3e18b58d81cc6b58bd6acc565d137848297b8a2cf3b4->enter($__internal_48bcc6294dca834e599a3e18b58d81cc6b58bd6acc565d137848297b8a2cf3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_743d58f5cf9b412e85eabc9e89ea9b16822cb2954a641a64956f8d4d1080f98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743d58f5cf9b412e85eabc9e89ea9b16822cb2954a641a64956f8d4d1080f98d->enter($__internal_743d58f5cf9b412e85eabc9e89ea9b16822cb2954a641a64956f8d4d1080f98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_743d58f5cf9b412e85eabc9e89ea9b16822cb2954a641a64956f8d4d1080f98d->leave($__internal_743d58f5cf9b412e85eabc9e89ea9b16822cb2954a641a64956f8d4d1080f98d_prof);

        
        $__internal_48bcc6294dca834e599a3e18b58d81cc6b58bd6acc565d137848297b8a2cf3b4->leave($__internal_48bcc6294dca834e599a3e18b58d81cc6b58bd6acc565d137848297b8a2cf3b4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_189350992e2deacbc46fc85c81f530d2a09d54e62361a69e4bbae0dd1157eefb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_189350992e2deacbc46fc85c81f530d2a09d54e62361a69e4bbae0dd1157eefb->enter($__internal_189350992e2deacbc46fc85c81f530d2a09d54e62361a69e4bbae0dd1157eefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a0ae1963492a43345abc9ad8133d1ec65334ac2331aff36adde3c692cac91c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a0ae1963492a43345abc9ad8133d1ec65334ac2331aff36adde3c692cac91c1->enter($__internal_9a0ae1963492a43345abc9ad8133d1ec65334ac2331aff36adde3c692cac91c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9a0ae1963492a43345abc9ad8133d1ec65334ac2331aff36adde3c692cac91c1->leave($__internal_9a0ae1963492a43345abc9ad8133d1ec65334ac2331aff36adde3c692cac91c1_prof);

        
        $__internal_189350992e2deacbc46fc85c81f530d2a09d54e62361a69e4bbae0dd1157eefb->leave($__internal_189350992e2deacbc46fc85c81f530d2a09d54e62361a69e4bbae0dd1157eefb_prof);

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
