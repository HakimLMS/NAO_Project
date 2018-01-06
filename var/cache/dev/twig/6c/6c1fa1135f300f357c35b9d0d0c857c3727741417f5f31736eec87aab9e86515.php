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
        $__internal_e2a230bb1529bca7c9566f665a2ebdbafbd50e62ecd38e04742d1bb8c8386bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2a230bb1529bca7c9566f665a2ebdbafbd50e62ecd38e04742d1bb8c8386bb7->enter($__internal_e2a230bb1529bca7c9566f665a2ebdbafbd50e62ecd38e04742d1bb8c8386bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_51f38fb082365bf6a0d40e419861e968ff0fda15570c07079535c7cc9568e096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f38fb082365bf6a0d40e419861e968ff0fda15570c07079535c7cc9568e096->enter($__internal_51f38fb082365bf6a0d40e419861e968ff0fda15570c07079535c7cc9568e096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2a230bb1529bca7c9566f665a2ebdbafbd50e62ecd38e04742d1bb8c8386bb7->leave($__internal_e2a230bb1529bca7c9566f665a2ebdbafbd50e62ecd38e04742d1bb8c8386bb7_prof);

        
        $__internal_51f38fb082365bf6a0d40e419861e968ff0fda15570c07079535c7cc9568e096->leave($__internal_51f38fb082365bf6a0d40e419861e968ff0fda15570c07079535c7cc9568e096_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4923a1b8b81ec0656f802737099202e01fa6d425f02172e6dc721321daeb1c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4923a1b8b81ec0656f802737099202e01fa6d425f02172e6dc721321daeb1c1->enter($__internal_b4923a1b8b81ec0656f802737099202e01fa6d425f02172e6dc721321daeb1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_110814a6141a5909f939c47974588a2c6ce881ef5739d69f82faa20cff84e02e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110814a6141a5909f939c47974588a2c6ce881ef5739d69f82faa20cff84e02e->enter($__internal_110814a6141a5909f939c47974588a2c6ce881ef5739d69f82faa20cff84e02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_110814a6141a5909f939c47974588a2c6ce881ef5739d69f82faa20cff84e02e->leave($__internal_110814a6141a5909f939c47974588a2c6ce881ef5739d69f82faa20cff84e02e_prof);

        
        $__internal_b4923a1b8b81ec0656f802737099202e01fa6d425f02172e6dc721321daeb1c1->leave($__internal_b4923a1b8b81ec0656f802737099202e01fa6d425f02172e6dc721321daeb1c1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_74c51ccf033e989124c4abf87c08f52521490abbc2da432760444628588973e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c51ccf033e989124c4abf87c08f52521490abbc2da432760444628588973e1->enter($__internal_74c51ccf033e989124c4abf87c08f52521490abbc2da432760444628588973e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e671ea1e511ef81fb6a59ea04d7e05e63d6f3513d037348e7fc2e5dc601c7226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e671ea1e511ef81fb6a59ea04d7e05e63d6f3513d037348e7fc2e5dc601c7226->enter($__internal_e671ea1e511ef81fb6a59ea04d7e05e63d6f3513d037348e7fc2e5dc601c7226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e671ea1e511ef81fb6a59ea04d7e05e63d6f3513d037348e7fc2e5dc601c7226->leave($__internal_e671ea1e511ef81fb6a59ea04d7e05e63d6f3513d037348e7fc2e5dc601c7226_prof);

        
        $__internal_74c51ccf033e989124c4abf87c08f52521490abbc2da432760444628588973e1->leave($__internal_74c51ccf033e989124c4abf87c08f52521490abbc2da432760444628588973e1_prof);

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
