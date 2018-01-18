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
        $__internal_968b17752247a4811ba529a0e24a875a91e243daa5d8262fe80283a69ba6ec51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_968b17752247a4811ba529a0e24a875a91e243daa5d8262fe80283a69ba6ec51->enter($__internal_968b17752247a4811ba529a0e24a875a91e243daa5d8262fe80283a69ba6ec51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_081340582170233f9967403a2bb76012f6d943b65ebbf3f3ffcb8b9789688444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_081340582170233f9967403a2bb76012f6d943b65ebbf3f3ffcb8b9789688444->enter($__internal_081340582170233f9967403a2bb76012f6d943b65ebbf3f3ffcb8b9789688444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_968b17752247a4811ba529a0e24a875a91e243daa5d8262fe80283a69ba6ec51->leave($__internal_968b17752247a4811ba529a0e24a875a91e243daa5d8262fe80283a69ba6ec51_prof);

        
        $__internal_081340582170233f9967403a2bb76012f6d943b65ebbf3f3ffcb8b9789688444->leave($__internal_081340582170233f9967403a2bb76012f6d943b65ebbf3f3ffcb8b9789688444_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da9e512de9fc7c956def15e2d733693a31b3daff8ea00a892f547003bb5d7871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da9e512de9fc7c956def15e2d733693a31b3daff8ea00a892f547003bb5d7871->enter($__internal_da9e512de9fc7c956def15e2d733693a31b3daff8ea00a892f547003bb5d7871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_30849b4f771bbbd7aa255786ed2e1c7924f288ce5709f0e860d0c316618c4dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30849b4f771bbbd7aa255786ed2e1c7924f288ce5709f0e860d0c316618c4dcc->enter($__internal_30849b4f771bbbd7aa255786ed2e1c7924f288ce5709f0e860d0c316618c4dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_30849b4f771bbbd7aa255786ed2e1c7924f288ce5709f0e860d0c316618c4dcc->leave($__internal_30849b4f771bbbd7aa255786ed2e1c7924f288ce5709f0e860d0c316618c4dcc_prof);

        
        $__internal_da9e512de9fc7c956def15e2d733693a31b3daff8ea00a892f547003bb5d7871->leave($__internal_da9e512de9fc7c956def15e2d733693a31b3daff8ea00a892f547003bb5d7871_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd240162c7b69629ced64e6b29fc13163eaa2cb5993a069adb2d631a8ed08214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd240162c7b69629ced64e6b29fc13163eaa2cb5993a069adb2d631a8ed08214->enter($__internal_bd240162c7b69629ced64e6b29fc13163eaa2cb5993a069adb2d631a8ed08214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29d50cfbd98312be8f3f8618087b23ba7fa85a76362139c8b6deed8b0e9a112b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d50cfbd98312be8f3f8618087b23ba7fa85a76362139c8b6deed8b0e9a112b->enter($__internal_29d50cfbd98312be8f3f8618087b23ba7fa85a76362139c8b6deed8b0e9a112b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_29d50cfbd98312be8f3f8618087b23ba7fa85a76362139c8b6deed8b0e9a112b->leave($__internal_29d50cfbd98312be8f3f8618087b23ba7fa85a76362139c8b6deed8b0e9a112b_prof);

        
        $__internal_bd240162c7b69629ced64e6b29fc13163eaa2cb5993a069adb2d631a8ed08214->leave($__internal_bd240162c7b69629ced64e6b29fc13163eaa2cb5993a069adb2d631a8ed08214_prof);

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
