<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_c7c5d7f4de059fb7823d4e1739d8e672d33df3617e8c3891e873173a9633452f extends Twig_Template
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
        $__internal_68bfa100b0981e01a44711f30ca7b326ae4a67131380feacab286e06f72b24a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68bfa100b0981e01a44711f30ca7b326ae4a67131380feacab286e06f72b24a9->enter($__internal_68bfa100b0981e01a44711f30ca7b326ae4a67131380feacab286e06f72b24a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_02ce0bb785d14d5c836f9d38cc25c125bcf807ab15b93313e10792bacdcbd20a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ce0bb785d14d5c836f9d38cc25c125bcf807ab15b93313e10792bacdcbd20a->enter($__internal_02ce0bb785d14d5c836f9d38cc25c125bcf807ab15b93313e10792bacdcbd20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68bfa100b0981e01a44711f30ca7b326ae4a67131380feacab286e06f72b24a9->leave($__internal_68bfa100b0981e01a44711f30ca7b326ae4a67131380feacab286e06f72b24a9_prof);

        
        $__internal_02ce0bb785d14d5c836f9d38cc25c125bcf807ab15b93313e10792bacdcbd20a->leave($__internal_02ce0bb785d14d5c836f9d38cc25c125bcf807ab15b93313e10792bacdcbd20a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f236c5a66354708483824a8a23c5791876d0d3a35f8131bedfff7547e1d64263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f236c5a66354708483824a8a23c5791876d0d3a35f8131bedfff7547e1d64263->enter($__internal_f236c5a66354708483824a8a23c5791876d0d3a35f8131bedfff7547e1d64263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_91592be4c34a10513f38b48cceb6554a16949777ca40b432ebf4763bc8e9e042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91592be4c34a10513f38b48cceb6554a16949777ca40b432ebf4763bc8e9e042->enter($__internal_91592be4c34a10513f38b48cceb6554a16949777ca40b432ebf4763bc8e9e042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_91592be4c34a10513f38b48cceb6554a16949777ca40b432ebf4763bc8e9e042->leave($__internal_91592be4c34a10513f38b48cceb6554a16949777ca40b432ebf4763bc8e9e042_prof);

        
        $__internal_f236c5a66354708483824a8a23c5791876d0d3a35f8131bedfff7547e1d64263->leave($__internal_f236c5a66354708483824a8a23c5791876d0d3a35f8131bedfff7547e1d64263_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bb7ef3e29d51309e8f97922dc527406acb7f50d170a0e31ba77a988a11dee74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb7ef3e29d51309e8f97922dc527406acb7f50d170a0e31ba77a988a11dee74->enter($__internal_4bb7ef3e29d51309e8f97922dc527406acb7f50d170a0e31ba77a988a11dee74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48b4c26e46f8cd0002fb6ddb2199d2bfec7da24cd2d83ba47e4ba9455c31ba6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b4c26e46f8cd0002fb6ddb2199d2bfec7da24cd2d83ba47e4ba9455c31ba6c->enter($__internal_48b4c26e46f8cd0002fb6ddb2199d2bfec7da24cd2d83ba47e4ba9455c31ba6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_48b4c26e46f8cd0002fb6ddb2199d2bfec7da24cd2d83ba47e4ba9455c31ba6c->leave($__internal_48b4c26e46f8cd0002fb6ddb2199d2bfec7da24cd2d83ba47e4ba9455c31ba6c_prof);

        
        $__internal_4bb7ef3e29d51309e8f97922dc527406acb7f50d170a0e31ba77a988a11dee74->leave($__internal_4bb7ef3e29d51309e8f97922dc527406acb7f50d170a0e31ba77a988a11dee74_prof);

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
