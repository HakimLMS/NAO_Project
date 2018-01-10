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
        $__internal_1fe5ecc83c7da87e1605a58f5e1c98ea1a825c899eacd7c9b7434f69de129202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fe5ecc83c7da87e1605a58f5e1c98ea1a825c899eacd7c9b7434f69de129202->enter($__internal_1fe5ecc83c7da87e1605a58f5e1c98ea1a825c899eacd7c9b7434f69de129202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_63b75481e93cabee4b7feb4c87788a184842b312eebfc8b87c73aa0f658b7b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b75481e93cabee4b7feb4c87788a184842b312eebfc8b87c73aa0f658b7b86->enter($__internal_63b75481e93cabee4b7feb4c87788a184842b312eebfc8b87c73aa0f658b7b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fe5ecc83c7da87e1605a58f5e1c98ea1a825c899eacd7c9b7434f69de129202->leave($__internal_1fe5ecc83c7da87e1605a58f5e1c98ea1a825c899eacd7c9b7434f69de129202_prof);

        
        $__internal_63b75481e93cabee4b7feb4c87788a184842b312eebfc8b87c73aa0f658b7b86->leave($__internal_63b75481e93cabee4b7feb4c87788a184842b312eebfc8b87c73aa0f658b7b86_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_86ce7984ba729f92077bf12c37b65993b8adc66a118413b520fe35e376a6565e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86ce7984ba729f92077bf12c37b65993b8adc66a118413b520fe35e376a6565e->enter($__internal_86ce7984ba729f92077bf12c37b65993b8adc66a118413b520fe35e376a6565e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e05bcc70456b9d918d37f68213e0e42fb546cdf6eb0f79f57610e80db8cbec1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05bcc70456b9d918d37f68213e0e42fb546cdf6eb0f79f57610e80db8cbec1a->enter($__internal_e05bcc70456b9d918d37f68213e0e42fb546cdf6eb0f79f57610e80db8cbec1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e05bcc70456b9d918d37f68213e0e42fb546cdf6eb0f79f57610e80db8cbec1a->leave($__internal_e05bcc70456b9d918d37f68213e0e42fb546cdf6eb0f79f57610e80db8cbec1a_prof);

        
        $__internal_86ce7984ba729f92077bf12c37b65993b8adc66a118413b520fe35e376a6565e->leave($__internal_86ce7984ba729f92077bf12c37b65993b8adc66a118413b520fe35e376a6565e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a6f9bf533649580eced59760f37f0d02ab0c50e62dedc839a17412dc34c4fc52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6f9bf533649580eced59760f37f0d02ab0c50e62dedc839a17412dc34c4fc52->enter($__internal_a6f9bf533649580eced59760f37f0d02ab0c50e62dedc839a17412dc34c4fc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ef70807e6233e721dcace24b8dfbfe2a358dc066104a9305a66e8027fd480bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef70807e6233e721dcace24b8dfbfe2a358dc066104a9305a66e8027fd480bf8->enter($__internal_ef70807e6233e721dcace24b8dfbfe2a358dc066104a9305a66e8027fd480bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ef70807e6233e721dcace24b8dfbfe2a358dc066104a9305a66e8027fd480bf8->leave($__internal_ef70807e6233e721dcace24b8dfbfe2a358dc066104a9305a66e8027fd480bf8_prof);

        
        $__internal_a6f9bf533649580eced59760f37f0d02ab0c50e62dedc839a17412dc34c4fc52->leave($__internal_a6f9bf533649580eced59760f37f0d02ab0c50e62dedc839a17412dc34c4fc52_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a79a08b1f843cac960406f35932a1e022b2bfa70b02b2f927df9cae48ac71cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79a08b1f843cac960406f35932a1e022b2bfa70b02b2f927df9cae48ac71cd4->enter($__internal_a79a08b1f843cac960406f35932a1e022b2bfa70b02b2f927df9cae48ac71cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7c68ff5245128eb391c71bec9ec28c4fdf41a0b17f27f901eecc134b93ff424e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c68ff5245128eb391c71bec9ec28c4fdf41a0b17f27f901eecc134b93ff424e->enter($__internal_7c68ff5245128eb391c71bec9ec28c4fdf41a0b17f27f901eecc134b93ff424e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7c68ff5245128eb391c71bec9ec28c4fdf41a0b17f27f901eecc134b93ff424e->leave($__internal_7c68ff5245128eb391c71bec9ec28c4fdf41a0b17f27f901eecc134b93ff424e_prof);

        
        $__internal_a79a08b1f843cac960406f35932a1e022b2bfa70b02b2f927df9cae48ac71cd4->leave($__internal_a79a08b1f843cac960406f35932a1e022b2bfa70b02b2f927df9cae48ac71cd4_prof);

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
