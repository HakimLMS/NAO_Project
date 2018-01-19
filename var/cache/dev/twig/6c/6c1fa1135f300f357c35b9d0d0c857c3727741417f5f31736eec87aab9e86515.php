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
        $__internal_73ec310b13554d5d084a95afc6356472027d44be7106e32466aff9ae8c0f69fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ec310b13554d5d084a95afc6356472027d44be7106e32466aff9ae8c0f69fb->enter($__internal_73ec310b13554d5d084a95afc6356472027d44be7106e32466aff9ae8c0f69fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_517ef9114dd84ecc06464f94b8c74152fe901a1147d626101fd0eeba1b44830c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517ef9114dd84ecc06464f94b8c74152fe901a1147d626101fd0eeba1b44830c->enter($__internal_517ef9114dd84ecc06464f94b8c74152fe901a1147d626101fd0eeba1b44830c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73ec310b13554d5d084a95afc6356472027d44be7106e32466aff9ae8c0f69fb->leave($__internal_73ec310b13554d5d084a95afc6356472027d44be7106e32466aff9ae8c0f69fb_prof);

        
        $__internal_517ef9114dd84ecc06464f94b8c74152fe901a1147d626101fd0eeba1b44830c->leave($__internal_517ef9114dd84ecc06464f94b8c74152fe901a1147d626101fd0eeba1b44830c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f747e06d31e15266f8756099ed2ae5bbf25e5ac73cebb6c0577ad9576f8b63d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f747e06d31e15266f8756099ed2ae5bbf25e5ac73cebb6c0577ad9576f8b63d6->enter($__internal_f747e06d31e15266f8756099ed2ae5bbf25e5ac73cebb6c0577ad9576f8b63d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1edc196928f91b30d8d284de7b6d2de10585ad72cc32357b34275654158a06e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1edc196928f91b30d8d284de7b6d2de10585ad72cc32357b34275654158a06e8->enter($__internal_1edc196928f91b30d8d284de7b6d2de10585ad72cc32357b34275654158a06e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_1edc196928f91b30d8d284de7b6d2de10585ad72cc32357b34275654158a06e8->leave($__internal_1edc196928f91b30d8d284de7b6d2de10585ad72cc32357b34275654158a06e8_prof);

        
        $__internal_f747e06d31e15266f8756099ed2ae5bbf25e5ac73cebb6c0577ad9576f8b63d6->leave($__internal_f747e06d31e15266f8756099ed2ae5bbf25e5ac73cebb6c0577ad9576f8b63d6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_44715eeff0a52e819ac32abd65e35d22d9dd3d64ec4e57a3eded746baedf2a46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44715eeff0a52e819ac32abd65e35d22d9dd3d64ec4e57a3eded746baedf2a46->enter($__internal_44715eeff0a52e819ac32abd65e35d22d9dd3d64ec4e57a3eded746baedf2a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f03dd183380ae1ee2b174c1730fbadd9e65af7893daf56d8809d92138d1fb04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f03dd183380ae1ee2b174c1730fbadd9e65af7893daf56d8809d92138d1fb04->enter($__internal_3f03dd183380ae1ee2b174c1730fbadd9e65af7893daf56d8809d92138d1fb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3f03dd183380ae1ee2b174c1730fbadd9e65af7893daf56d8809d92138d1fb04->leave($__internal_3f03dd183380ae1ee2b174c1730fbadd9e65af7893daf56d8809d92138d1fb04_prof);

        
        $__internal_44715eeff0a52e819ac32abd65e35d22d9dd3d64ec4e57a3eded746baedf2a46->leave($__internal_44715eeff0a52e819ac32abd65e35d22d9dd3d64ec4e57a3eded746baedf2a46_prof);

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
