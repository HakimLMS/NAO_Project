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
        $__internal_d8a281396012c465e884ffa7f20bd421fe97d9e84162b26b8bb2cb3a1a2a4f69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a281396012c465e884ffa7f20bd421fe97d9e84162b26b8bb2cb3a1a2a4f69->enter($__internal_d8a281396012c465e884ffa7f20bd421fe97d9e84162b26b8bb2cb3a1a2a4f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_768247c3a9cca8a475ef8fe7e9e1740da7a318cc75612110478137dd25d027bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768247c3a9cca8a475ef8fe7e9e1740da7a318cc75612110478137dd25d027bc->enter($__internal_768247c3a9cca8a475ef8fe7e9e1740da7a318cc75612110478137dd25d027bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8a281396012c465e884ffa7f20bd421fe97d9e84162b26b8bb2cb3a1a2a4f69->leave($__internal_d8a281396012c465e884ffa7f20bd421fe97d9e84162b26b8bb2cb3a1a2a4f69_prof);

        
        $__internal_768247c3a9cca8a475ef8fe7e9e1740da7a318cc75612110478137dd25d027bc->leave($__internal_768247c3a9cca8a475ef8fe7e9e1740da7a318cc75612110478137dd25d027bc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2b449b21fc44d68ede55e2bc235a098e318db16e3bd30208793cd76ab0ad0e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b449b21fc44d68ede55e2bc235a098e318db16e3bd30208793cd76ab0ad0e2d->enter($__internal_2b449b21fc44d68ede55e2bc235a098e318db16e3bd30208793cd76ab0ad0e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_52e34e473a6b0ed86bc6df53cd35a9aa09b29ef8cbca97957791071c08ed1ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e34e473a6b0ed86bc6df53cd35a9aa09b29ef8cbca97957791071c08ed1ed3->enter($__internal_52e34e473a6b0ed86bc6df53cd35a9aa09b29ef8cbca97957791071c08ed1ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_52e34e473a6b0ed86bc6df53cd35a9aa09b29ef8cbca97957791071c08ed1ed3->leave($__internal_52e34e473a6b0ed86bc6df53cd35a9aa09b29ef8cbca97957791071c08ed1ed3_prof);

        
        $__internal_2b449b21fc44d68ede55e2bc235a098e318db16e3bd30208793cd76ab0ad0e2d->leave($__internal_2b449b21fc44d68ede55e2bc235a098e318db16e3bd30208793cd76ab0ad0e2d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_be917d141a3d313accfb3c75bc5afb68b1db7a2748a5a9dcfca2911bf36fa7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be917d141a3d313accfb3c75bc5afb68b1db7a2748a5a9dcfca2911bf36fa7d1->enter($__internal_be917d141a3d313accfb3c75bc5afb68b1db7a2748a5a9dcfca2911bf36fa7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_63ef68d857c2481908d8235ae6b0471abd2a1a1cc72b8ea6a9caf1bcb2dca937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ef68d857c2481908d8235ae6b0471abd2a1a1cc72b8ea6a9caf1bcb2dca937->enter($__internal_63ef68d857c2481908d8235ae6b0471abd2a1a1cc72b8ea6a9caf1bcb2dca937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_63ef68d857c2481908d8235ae6b0471abd2a1a1cc72b8ea6a9caf1bcb2dca937->leave($__internal_63ef68d857c2481908d8235ae6b0471abd2a1a1cc72b8ea6a9caf1bcb2dca937_prof);

        
        $__internal_be917d141a3d313accfb3c75bc5afb68b1db7a2748a5a9dcfca2911bf36fa7d1->leave($__internal_be917d141a3d313accfb3c75bc5afb68b1db7a2748a5a9dcfca2911bf36fa7d1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_13135538789ec54dd4322461b076398816847313295b7a733abf9289965cf702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13135538789ec54dd4322461b076398816847313295b7a733abf9289965cf702->enter($__internal_13135538789ec54dd4322461b076398816847313295b7a733abf9289965cf702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_afedf780c3e59a70b11b78edbcd027a412265e34dfdd760c84d3703b1724edf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afedf780c3e59a70b11b78edbcd027a412265e34dfdd760c84d3703b1724edf6->enter($__internal_afedf780c3e59a70b11b78edbcd027a412265e34dfdd760c84d3703b1724edf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_afedf780c3e59a70b11b78edbcd027a412265e34dfdd760c84d3703b1724edf6->leave($__internal_afedf780c3e59a70b11b78edbcd027a412265e34dfdd760c84d3703b1724edf6_prof);

        
        $__internal_13135538789ec54dd4322461b076398816847313295b7a733abf9289965cf702->leave($__internal_13135538789ec54dd4322461b076398816847313295b7a733abf9289965cf702_prof);

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
", "@WebProfiler/Collector/router.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
