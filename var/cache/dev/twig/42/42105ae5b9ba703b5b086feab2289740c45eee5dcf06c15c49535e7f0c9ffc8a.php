<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_acb880fc3b94667c83acd66c2e3183b687cc9751184bcac3aa7ddf178b40dc11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9985c0cd4f5f875153d98b4355ea21387d2edeff233949ac0d17f3cdf9ca13c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9985c0cd4f5f875153d98b4355ea21387d2edeff233949ac0d17f3cdf9ca13c4->enter($__internal_9985c0cd4f5f875153d98b4355ea21387d2edeff233949ac0d17f3cdf9ca13c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_91023175f2e70c08b2c00ecaed1a82c71a57103ac276551fa21ed61380f743c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91023175f2e70c08b2c00ecaed1a82c71a57103ac276551fa21ed61380f743c9->enter($__internal_91023175f2e70c08b2c00ecaed1a82c71a57103ac276551fa21ed61380f743c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9985c0cd4f5f875153d98b4355ea21387d2edeff233949ac0d17f3cdf9ca13c4->leave($__internal_9985c0cd4f5f875153d98b4355ea21387d2edeff233949ac0d17f3cdf9ca13c4_prof);

        
        $__internal_91023175f2e70c08b2c00ecaed1a82c71a57103ac276551fa21ed61380f743c9->leave($__internal_91023175f2e70c08b2c00ecaed1a82c71a57103ac276551fa21ed61380f743c9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_539f2d4bf0c6637a131bb3cfe4ba5b3abf33033b4e3629ecb4eccfa8072559e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_539f2d4bf0c6637a131bb3cfe4ba5b3abf33033b4e3629ecb4eccfa8072559e4->enter($__internal_539f2d4bf0c6637a131bb3cfe4ba5b3abf33033b4e3629ecb4eccfa8072559e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e479a63d0e754c7e532289f5f2c332835a1eef397713191aed6c1470fac6fa0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e479a63d0e754c7e532289f5f2c332835a1eef397713191aed6c1470fac6fa0e->enter($__internal_e479a63d0e754c7e532289f5f2c332835a1eef397713191aed6c1470fac6fa0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e479a63d0e754c7e532289f5f2c332835a1eef397713191aed6c1470fac6fa0e->leave($__internal_e479a63d0e754c7e532289f5f2c332835a1eef397713191aed6c1470fac6fa0e_prof);

        
        $__internal_539f2d4bf0c6637a131bb3cfe4ba5b3abf33033b4e3629ecb4eccfa8072559e4->leave($__internal_539f2d4bf0c6637a131bb3cfe4ba5b3abf33033b4e3629ecb4eccfa8072559e4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_631483bde1495e9fa280eb4caebb70395206f3082dbe8fc8742d90c27e9e4c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_631483bde1495e9fa280eb4caebb70395206f3082dbe8fc8742d90c27e9e4c7d->enter($__internal_631483bde1495e9fa280eb4caebb70395206f3082dbe8fc8742d90c27e9e4c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d85fec038078305213df26bb3042df13fee5e6725c535f2061b20f2d93a11ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85fec038078305213df26bb3042df13fee5e6725c535f2061b20f2d93a11ecd->enter($__internal_d85fec038078305213df26bb3042df13fee5e6725c535f2061b20f2d93a11ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d85fec038078305213df26bb3042df13fee5e6725c535f2061b20f2d93a11ecd->leave($__internal_d85fec038078305213df26bb3042df13fee5e6725c535f2061b20f2d93a11ecd_prof);

        
        $__internal_631483bde1495e9fa280eb4caebb70395206f3082dbe8fc8742d90c27e9e4c7d->leave($__internal_631483bde1495e9fa280eb4caebb70395206f3082dbe8fc8742d90c27e9e4c7d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8461f5a8b11d260d91269465e9941f80681c64c8760f656738af7e2a1da70e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8461f5a8b11d260d91269465e9941f80681c64c8760f656738af7e2a1da70e4a->enter($__internal_8461f5a8b11d260d91269465e9941f80681c64c8760f656738af7e2a1da70e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6df121e8351c5bc10890cfa5257e192b812f4c44fc94dc4d08ab048730c26e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df121e8351c5bc10890cfa5257e192b812f4c44fc94dc4d08ab048730c26e8b->enter($__internal_6df121e8351c5bc10890cfa5257e192b812f4c44fc94dc4d08ab048730c26e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6df121e8351c5bc10890cfa5257e192b812f4c44fc94dc4d08ab048730c26e8b->leave($__internal_6df121e8351c5bc10890cfa5257e192b812f4c44fc94dc4d08ab048730c26e8b_prof);

        
        $__internal_8461f5a8b11d260d91269465e9941f80681c64c8760f656738af7e2a1da70e4a->leave($__internal_8461f5a8b11d260d91269465e9941f80681c64c8760f656738af7e2a1da70e4a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
