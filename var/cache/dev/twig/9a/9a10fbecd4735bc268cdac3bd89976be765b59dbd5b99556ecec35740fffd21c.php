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
        $__internal_4c3ed75bcdf4d869d558ab7df10e28055fa527d1c984e702eea14c03f942c78d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c3ed75bcdf4d869d558ab7df10e28055fa527d1c984e702eea14c03f942c78d->enter($__internal_4c3ed75bcdf4d869d558ab7df10e28055fa527d1c984e702eea14c03f942c78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_5efd7dac1f54bfdac8df626dbf848aa07f3a1d9697e7e1e74360ddec5629d61a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5efd7dac1f54bfdac8df626dbf848aa07f3a1d9697e7e1e74360ddec5629d61a->enter($__internal_5efd7dac1f54bfdac8df626dbf848aa07f3a1d9697e7e1e74360ddec5629d61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c3ed75bcdf4d869d558ab7df10e28055fa527d1c984e702eea14c03f942c78d->leave($__internal_4c3ed75bcdf4d869d558ab7df10e28055fa527d1c984e702eea14c03f942c78d_prof);

        
        $__internal_5efd7dac1f54bfdac8df626dbf848aa07f3a1d9697e7e1e74360ddec5629d61a->leave($__internal_5efd7dac1f54bfdac8df626dbf848aa07f3a1d9697e7e1e74360ddec5629d61a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4f338cc0b9845aa9f155a4827a5d6ca8300b52385030262181572b04a9a4103e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f338cc0b9845aa9f155a4827a5d6ca8300b52385030262181572b04a9a4103e->enter($__internal_4f338cc0b9845aa9f155a4827a5d6ca8300b52385030262181572b04a9a4103e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3a7148445972727a21f02a4caae2c274473fa53698a453f274a7486eba87b3bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7148445972727a21f02a4caae2c274473fa53698a453f274a7486eba87b3bb->enter($__internal_3a7148445972727a21f02a4caae2c274473fa53698a453f274a7486eba87b3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_3a7148445972727a21f02a4caae2c274473fa53698a453f274a7486eba87b3bb->leave($__internal_3a7148445972727a21f02a4caae2c274473fa53698a453f274a7486eba87b3bb_prof);

        
        $__internal_4f338cc0b9845aa9f155a4827a5d6ca8300b52385030262181572b04a9a4103e->leave($__internal_4f338cc0b9845aa9f155a4827a5d6ca8300b52385030262181572b04a9a4103e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_75a4ecb4d4c4f5d2ad300a47733b50d866787509e63423e82bc77665676bbd0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75a4ecb4d4c4f5d2ad300a47733b50d866787509e63423e82bc77665676bbd0a->enter($__internal_75a4ecb4d4c4f5d2ad300a47733b50d866787509e63423e82bc77665676bbd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fd3abaf163e29baf7320630ea36f6696e1a021d09478403bf9ce2d10f6ce835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd3abaf163e29baf7320630ea36f6696e1a021d09478403bf9ce2d10f6ce835->enter($__internal_9fd3abaf163e29baf7320630ea36f6696e1a021d09478403bf9ce2d10f6ce835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9fd3abaf163e29baf7320630ea36f6696e1a021d09478403bf9ce2d10f6ce835->leave($__internal_9fd3abaf163e29baf7320630ea36f6696e1a021d09478403bf9ce2d10f6ce835_prof);

        
        $__internal_75a4ecb4d4c4f5d2ad300a47733b50d866787509e63423e82bc77665676bbd0a->leave($__internal_75a4ecb4d4c4f5d2ad300a47733b50d866787509e63423e82bc77665676bbd0a_prof);

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
