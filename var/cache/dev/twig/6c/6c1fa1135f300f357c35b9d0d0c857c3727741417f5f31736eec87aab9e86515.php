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
        $__internal_24da078595b8ba4382e23882000eebb8613d8bb4c905646c0d53f2a8159139ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24da078595b8ba4382e23882000eebb8613d8bb4c905646c0d53f2a8159139ee->enter($__internal_24da078595b8ba4382e23882000eebb8613d8bb4c905646c0d53f2a8159139ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_3fdcbe0c39ba285f49985002beb300988d248fce79150ca05285cde1b8b6294c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fdcbe0c39ba285f49985002beb300988d248fce79150ca05285cde1b8b6294c->enter($__internal_3fdcbe0c39ba285f49985002beb300988d248fce79150ca05285cde1b8b6294c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24da078595b8ba4382e23882000eebb8613d8bb4c905646c0d53f2a8159139ee->leave($__internal_24da078595b8ba4382e23882000eebb8613d8bb4c905646c0d53f2a8159139ee_prof);

        
        $__internal_3fdcbe0c39ba285f49985002beb300988d248fce79150ca05285cde1b8b6294c->leave($__internal_3fdcbe0c39ba285f49985002beb300988d248fce79150ca05285cde1b8b6294c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9c6bb5ffc56dd9248dfccd5fa297ba0b6625acb77eb922e35c3403c8fa4200f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c6bb5ffc56dd9248dfccd5fa297ba0b6625acb77eb922e35c3403c8fa4200f1->enter($__internal_9c6bb5ffc56dd9248dfccd5fa297ba0b6625acb77eb922e35c3403c8fa4200f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cab559ef66a2406263297258cd90db6872e218f81bbf10bc816ce5715a4f5f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab559ef66a2406263297258cd90db6872e218f81bbf10bc816ce5715a4f5f29->enter($__internal_cab559ef66a2406263297258cd90db6872e218f81bbf10bc816ce5715a4f5f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_cab559ef66a2406263297258cd90db6872e218f81bbf10bc816ce5715a4f5f29->leave($__internal_cab559ef66a2406263297258cd90db6872e218f81bbf10bc816ce5715a4f5f29_prof);

        
        $__internal_9c6bb5ffc56dd9248dfccd5fa297ba0b6625acb77eb922e35c3403c8fa4200f1->leave($__internal_9c6bb5ffc56dd9248dfccd5fa297ba0b6625acb77eb922e35c3403c8fa4200f1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4028a77b57e52d242aed167505186a4382b2216ad5c7e79a6e33ca45d7c4f7bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4028a77b57e52d242aed167505186a4382b2216ad5c7e79a6e33ca45d7c4f7bf->enter($__internal_4028a77b57e52d242aed167505186a4382b2216ad5c7e79a6e33ca45d7c4f7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_37d5970911883aa902450da9aebcf9a84361fdb3d8fb44e2d93f51f59f3b095a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37d5970911883aa902450da9aebcf9a84361fdb3d8fb44e2d93f51f59f3b095a->enter($__internal_37d5970911883aa902450da9aebcf9a84361fdb3d8fb44e2d93f51f59f3b095a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_37d5970911883aa902450da9aebcf9a84361fdb3d8fb44e2d93f51f59f3b095a->leave($__internal_37d5970911883aa902450da9aebcf9a84361fdb3d8fb44e2d93f51f59f3b095a_prof);

        
        $__internal_4028a77b57e52d242aed167505186a4382b2216ad5c7e79a6e33ca45d7c4f7bf->leave($__internal_4028a77b57e52d242aed167505186a4382b2216ad5c7e79a6e33ca45d7c4f7bf_prof);

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
