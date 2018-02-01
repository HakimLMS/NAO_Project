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
        $__internal_494ccb631e39b95ccacdaf71aaa498f2cf7fe83e6f0ba7f813a970d570085dd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494ccb631e39b95ccacdaf71aaa498f2cf7fe83e6f0ba7f813a970d570085dd2->enter($__internal_494ccb631e39b95ccacdaf71aaa498f2cf7fe83e6f0ba7f813a970d570085dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_52563f8e2129b878ede412da86b6f974f803955bacbcfe23b3e6a12a88555cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52563f8e2129b878ede412da86b6f974f803955bacbcfe23b3e6a12a88555cd5->enter($__internal_52563f8e2129b878ede412da86b6f974f803955bacbcfe23b3e6a12a88555cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_494ccb631e39b95ccacdaf71aaa498f2cf7fe83e6f0ba7f813a970d570085dd2->leave($__internal_494ccb631e39b95ccacdaf71aaa498f2cf7fe83e6f0ba7f813a970d570085dd2_prof);

        
        $__internal_52563f8e2129b878ede412da86b6f974f803955bacbcfe23b3e6a12a88555cd5->leave($__internal_52563f8e2129b878ede412da86b6f974f803955bacbcfe23b3e6a12a88555cd5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bafa3518835e10348413a3066494c1d4fab98c563bfdea2d62249fbe4083a57f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bafa3518835e10348413a3066494c1d4fab98c563bfdea2d62249fbe4083a57f->enter($__internal_bafa3518835e10348413a3066494c1d4fab98c563bfdea2d62249fbe4083a57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_41524f129efcb2bdfce0341c3ca66452132c0d719e7a0e60b4fa4a30252b9045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41524f129efcb2bdfce0341c3ca66452132c0d719e7a0e60b4fa4a30252b9045->enter($__internal_41524f129efcb2bdfce0341c3ca66452132c0d719e7a0e60b4fa4a30252b9045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_41524f129efcb2bdfce0341c3ca66452132c0d719e7a0e60b4fa4a30252b9045->leave($__internal_41524f129efcb2bdfce0341c3ca66452132c0d719e7a0e60b4fa4a30252b9045_prof);

        
        $__internal_bafa3518835e10348413a3066494c1d4fab98c563bfdea2d62249fbe4083a57f->leave($__internal_bafa3518835e10348413a3066494c1d4fab98c563bfdea2d62249fbe4083a57f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1c6a8cebb30da1aac25ee052fc4fa476ee1c0eba473f579ec5f528a91cceb1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c6a8cebb30da1aac25ee052fc4fa476ee1c0eba473f579ec5f528a91cceb1e->enter($__internal_e1c6a8cebb30da1aac25ee052fc4fa476ee1c0eba473f579ec5f528a91cceb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d8b3a04e006e5c7ee702a350506e45848ce60b6a247272232ff594b84bff17ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b3a04e006e5c7ee702a350506e45848ce60b6a247272232ff594b84bff17ac->enter($__internal_d8b3a04e006e5c7ee702a350506e45848ce60b6a247272232ff594b84bff17ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d8b3a04e006e5c7ee702a350506e45848ce60b6a247272232ff594b84bff17ac->leave($__internal_d8b3a04e006e5c7ee702a350506e45848ce60b6a247272232ff594b84bff17ac_prof);

        
        $__internal_e1c6a8cebb30da1aac25ee052fc4fa476ee1c0eba473f579ec5f528a91cceb1e->leave($__internal_e1c6a8cebb30da1aac25ee052fc4fa476ee1c0eba473f579ec5f528a91cceb1e_prof);

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
