<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_2ff7df758c387967a9e2c91ab63f86e8701320996d0af33cd0ef9328e90964ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f5fdfb3ddccf550c7db16d420b8822b9e99c279fb7c64554b03af7d03dafe3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5fdfb3ddccf550c7db16d420b8822b9e99c279fb7c64554b03af7d03dafe3f->enter($__internal_6f5fdfb3ddccf550c7db16d420b8822b9e99c279fb7c64554b03af7d03dafe3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_e50964ef65bea59285f6ebb0cc440712b75bf7a7bc2969d99241d7a383ce8bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50964ef65bea59285f6ebb0cc440712b75bf7a7bc2969d99241d7a383ce8bba->enter($__internal_e50964ef65bea59285f6ebb0cc440712b75bf7a7bc2969d99241d7a383ce8bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f5fdfb3ddccf550c7db16d420b8822b9e99c279fb7c64554b03af7d03dafe3f->leave($__internal_6f5fdfb3ddccf550c7db16d420b8822b9e99c279fb7c64554b03af7d03dafe3f_prof);

        
        $__internal_e50964ef65bea59285f6ebb0cc440712b75bf7a7bc2969d99241d7a383ce8bba->leave($__internal_e50964ef65bea59285f6ebb0cc440712b75bf7a7bc2969d99241d7a383ce8bba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f10013ca8b9ded85c3a9671060fee9e9f5d090f2a137942d31c8ddb15d8fdfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f10013ca8b9ded85c3a9671060fee9e9f5d090f2a137942d31c8ddb15d8fdfa->enter($__internal_1f10013ca8b9ded85c3a9671060fee9e9f5d090f2a137942d31c8ddb15d8fdfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_015b0eb3f92f77488c99a75073b32799c5386b911246cccd7b404ab461256c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015b0eb3f92f77488c99a75073b32799c5386b911246cccd7b404ab461256c86->enter($__internal_015b0eb3f92f77488c99a75073b32799c5386b911246cccd7b404ab461256c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_015b0eb3f92f77488c99a75073b32799c5386b911246cccd7b404ab461256c86->leave($__internal_015b0eb3f92f77488c99a75073b32799c5386b911246cccd7b404ab461256c86_prof);

        
        $__internal_1f10013ca8b9ded85c3a9671060fee9e9f5d090f2a137942d31c8ddb15d8fdfa->leave($__internal_1f10013ca8b9ded85c3a9671060fee9e9f5d090f2a137942d31c8ddb15d8fdfa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_768a768135d9fdb391b70eb66f8f4b376f0c3157c71e45436b5d93eaac51550a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_768a768135d9fdb391b70eb66f8f4b376f0c3157c71e45436b5d93eaac51550a->enter($__internal_768a768135d9fdb391b70eb66f8f4b376f0c3157c71e45436b5d93eaac51550a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1da444d8e02ba0bb3d6208bafd172756e2ad5d1d66de47271bc13894c84196bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da444d8e02ba0bb3d6208bafd172756e2ad5d1d66de47271bc13894c84196bc->enter($__internal_1da444d8e02ba0bb3d6208bafd172756e2ad5d1d66de47271bc13894c84196bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1da444d8e02ba0bb3d6208bafd172756e2ad5d1d66de47271bc13894c84196bc->leave($__internal_1da444d8e02ba0bb3d6208bafd172756e2ad5d1d66de47271bc13894c84196bc_prof);

        
        $__internal_768a768135d9fdb391b70eb66f8f4b376f0c3157c71e45436b5d93eaac51550a->leave($__internal_768a768135d9fdb391b70eb66f8f4b376f0c3157c71e45436b5d93eaac51550a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
