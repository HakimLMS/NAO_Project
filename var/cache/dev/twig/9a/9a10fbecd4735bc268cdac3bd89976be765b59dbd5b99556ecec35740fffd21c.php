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
        $__internal_b555fff424b5f476af7d3ca23379c1cc2c73c82ebddbe52515cfe429ffa7dcb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b555fff424b5f476af7d3ca23379c1cc2c73c82ebddbe52515cfe429ffa7dcb3->enter($__internal_b555fff424b5f476af7d3ca23379c1cc2c73c82ebddbe52515cfe429ffa7dcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_a054b543cc9978a65f519d495f9b3f29f40f8cb0905253a2549cf4da7665e2a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a054b543cc9978a65f519d495f9b3f29f40f8cb0905253a2549cf4da7665e2a0->enter($__internal_a054b543cc9978a65f519d495f9b3f29f40f8cb0905253a2549cf4da7665e2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b555fff424b5f476af7d3ca23379c1cc2c73c82ebddbe52515cfe429ffa7dcb3->leave($__internal_b555fff424b5f476af7d3ca23379c1cc2c73c82ebddbe52515cfe429ffa7dcb3_prof);

        
        $__internal_a054b543cc9978a65f519d495f9b3f29f40f8cb0905253a2549cf4da7665e2a0->leave($__internal_a054b543cc9978a65f519d495f9b3f29f40f8cb0905253a2549cf4da7665e2a0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e0b0da11bcd15e91ccfe70ef4d73961d2fcf681eed2d989011f05b0d9e25660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e0b0da11bcd15e91ccfe70ef4d73961d2fcf681eed2d989011f05b0d9e25660->enter($__internal_3e0b0da11bcd15e91ccfe70ef4d73961d2fcf681eed2d989011f05b0d9e25660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5908e9f4d397a3ee6bd4eac263305b56affb8948731b43d847aaf4f1b61f9d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5908e9f4d397a3ee6bd4eac263305b56affb8948731b43d847aaf4f1b61f9d4a->enter($__internal_5908e9f4d397a3ee6bd4eac263305b56affb8948731b43d847aaf4f1b61f9d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_5908e9f4d397a3ee6bd4eac263305b56affb8948731b43d847aaf4f1b61f9d4a->leave($__internal_5908e9f4d397a3ee6bd4eac263305b56affb8948731b43d847aaf4f1b61f9d4a_prof);

        
        $__internal_3e0b0da11bcd15e91ccfe70ef4d73961d2fcf681eed2d989011f05b0d9e25660->leave($__internal_3e0b0da11bcd15e91ccfe70ef4d73961d2fcf681eed2d989011f05b0d9e25660_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_39431c68b232e2fb3a5053f7719f7ab25b96518d09759976291dda37797ccab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39431c68b232e2fb3a5053f7719f7ab25b96518d09759976291dda37797ccab9->enter($__internal_39431c68b232e2fb3a5053f7719f7ab25b96518d09759976291dda37797ccab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_734bacc325f24d9acb8c2ff8e6095a021cc80ce251f114e59b3ee6f6e84bdbc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734bacc325f24d9acb8c2ff8e6095a021cc80ce251f114e59b3ee6f6e84bdbc8->enter($__internal_734bacc325f24d9acb8c2ff8e6095a021cc80ce251f114e59b3ee6f6e84bdbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_734bacc325f24d9acb8c2ff8e6095a021cc80ce251f114e59b3ee6f6e84bdbc8->leave($__internal_734bacc325f24d9acb8c2ff8e6095a021cc80ce251f114e59b3ee6f6e84bdbc8_prof);

        
        $__internal_39431c68b232e2fb3a5053f7719f7ab25b96518d09759976291dda37797ccab9->leave($__internal_39431c68b232e2fb3a5053f7719f7ab25b96518d09759976291dda37797ccab9_prof);

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
