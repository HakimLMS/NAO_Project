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
        $__internal_c4a79382d92296aa7442fb5d63e3aee54b80717aa24306e01311d141a35125ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a79382d92296aa7442fb5d63e3aee54b80717aa24306e01311d141a35125ae->enter($__internal_c4a79382d92296aa7442fb5d63e3aee54b80717aa24306e01311d141a35125ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_e65845ccd30b47b76e869ccf49361122800293816951c48a025d1b5e89a6b1ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65845ccd30b47b76e869ccf49361122800293816951c48a025d1b5e89a6b1ec->enter($__internal_e65845ccd30b47b76e869ccf49361122800293816951c48a025d1b5e89a6b1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4a79382d92296aa7442fb5d63e3aee54b80717aa24306e01311d141a35125ae->leave($__internal_c4a79382d92296aa7442fb5d63e3aee54b80717aa24306e01311d141a35125ae_prof);

        
        $__internal_e65845ccd30b47b76e869ccf49361122800293816951c48a025d1b5e89a6b1ec->leave($__internal_e65845ccd30b47b76e869ccf49361122800293816951c48a025d1b5e89a6b1ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9821e4041b52bc657b1444e950de71cf6edec8a190de09f375a41537095cddd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9821e4041b52bc657b1444e950de71cf6edec8a190de09f375a41537095cddd1->enter($__internal_9821e4041b52bc657b1444e950de71cf6edec8a190de09f375a41537095cddd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_751aee0c7b8435d8ca9d95eaf8bd6547f8d29014021f1351140aa73720f6c440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_751aee0c7b8435d8ca9d95eaf8bd6547f8d29014021f1351140aa73720f6c440->enter($__internal_751aee0c7b8435d8ca9d95eaf8bd6547f8d29014021f1351140aa73720f6c440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_751aee0c7b8435d8ca9d95eaf8bd6547f8d29014021f1351140aa73720f6c440->leave($__internal_751aee0c7b8435d8ca9d95eaf8bd6547f8d29014021f1351140aa73720f6c440_prof);

        
        $__internal_9821e4041b52bc657b1444e950de71cf6edec8a190de09f375a41537095cddd1->leave($__internal_9821e4041b52bc657b1444e950de71cf6edec8a190de09f375a41537095cddd1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cedaa1977e445dd9446e5ae55ad02356ffc6d9accd12bd5d1c01e917c4ee4f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cedaa1977e445dd9446e5ae55ad02356ffc6d9accd12bd5d1c01e917c4ee4f5->enter($__internal_7cedaa1977e445dd9446e5ae55ad02356ffc6d9accd12bd5d1c01e917c4ee4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85e2185b53f9c03c078eb575f2a74ff95e75648deb421aeee7b43c3f5dceba3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e2185b53f9c03c078eb575f2a74ff95e75648deb421aeee7b43c3f5dceba3a->enter($__internal_85e2185b53f9c03c078eb575f2a74ff95e75648deb421aeee7b43c3f5dceba3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_85e2185b53f9c03c078eb575f2a74ff95e75648deb421aeee7b43c3f5dceba3a->leave($__internal_85e2185b53f9c03c078eb575f2a74ff95e75648deb421aeee7b43c3f5dceba3a_prof);

        
        $__internal_7cedaa1977e445dd9446e5ae55ad02356ffc6d9accd12bd5d1c01e917c4ee4f5->leave($__internal_7cedaa1977e445dd9446e5ae55ad02356ffc6d9accd12bd5d1c01e917c4ee4f5_prof);

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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
