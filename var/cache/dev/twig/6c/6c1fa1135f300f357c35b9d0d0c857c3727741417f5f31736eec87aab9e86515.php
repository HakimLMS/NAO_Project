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
        $__internal_372d20c7bcb7f20e2760e17a41f917b564f5221ec5c5ec53404ea896544b8c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_372d20c7bcb7f20e2760e17a41f917b564f5221ec5c5ec53404ea896544b8c1d->enter($__internal_372d20c7bcb7f20e2760e17a41f917b564f5221ec5c5ec53404ea896544b8c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_2ce1262610fec7bd5e5afc811366bd78de093cc64a055198ae75448c74cfecb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce1262610fec7bd5e5afc811366bd78de093cc64a055198ae75448c74cfecb9->enter($__internal_2ce1262610fec7bd5e5afc811366bd78de093cc64a055198ae75448c74cfecb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_372d20c7bcb7f20e2760e17a41f917b564f5221ec5c5ec53404ea896544b8c1d->leave($__internal_372d20c7bcb7f20e2760e17a41f917b564f5221ec5c5ec53404ea896544b8c1d_prof);

        
        $__internal_2ce1262610fec7bd5e5afc811366bd78de093cc64a055198ae75448c74cfecb9->leave($__internal_2ce1262610fec7bd5e5afc811366bd78de093cc64a055198ae75448c74cfecb9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c222fb84aea0224222b00f8a096d3b413960a2891f4c10b27b055c882a2a3a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c222fb84aea0224222b00f8a096d3b413960a2891f4c10b27b055c882a2a3a2a->enter($__internal_c222fb84aea0224222b00f8a096d3b413960a2891f4c10b27b055c882a2a3a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_214ee22eb5a9687a900ec557a8c225da860d10ab7722ed8071591b789ca21103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214ee22eb5a9687a900ec557a8c225da860d10ab7722ed8071591b789ca21103->enter($__internal_214ee22eb5a9687a900ec557a8c225da860d10ab7722ed8071591b789ca21103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_214ee22eb5a9687a900ec557a8c225da860d10ab7722ed8071591b789ca21103->leave($__internal_214ee22eb5a9687a900ec557a8c225da860d10ab7722ed8071591b789ca21103_prof);

        
        $__internal_c222fb84aea0224222b00f8a096d3b413960a2891f4c10b27b055c882a2a3a2a->leave($__internal_c222fb84aea0224222b00f8a096d3b413960a2891f4c10b27b055c882a2a3a2a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_274a717c3f2be02c0b1ac36f2e8637d2a12dce6a8d0629314fa53d3b61e40228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_274a717c3f2be02c0b1ac36f2e8637d2a12dce6a8d0629314fa53d3b61e40228->enter($__internal_274a717c3f2be02c0b1ac36f2e8637d2a12dce6a8d0629314fa53d3b61e40228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a0a924f3552b861bda26b80a305096cca0449996b07351c0ae19edd7d6428cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0a924f3552b861bda26b80a305096cca0449996b07351c0ae19edd7d6428cb->enter($__internal_2a0a924f3552b861bda26b80a305096cca0449996b07351c0ae19edd7d6428cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2a0a924f3552b861bda26b80a305096cca0449996b07351c0ae19edd7d6428cb->leave($__internal_2a0a924f3552b861bda26b80a305096cca0449996b07351c0ae19edd7d6428cb_prof);

        
        $__internal_274a717c3f2be02c0b1ac36f2e8637d2a12dce6a8d0629314fa53d3b61e40228->leave($__internal_274a717c3f2be02c0b1ac36f2e8637d2a12dce6a8d0629314fa53d3b61e40228_prof);

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
