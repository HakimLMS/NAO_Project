<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_86c58f2b87a4b63da49ab7b5c2f08fe5e59b7f568ef3799b9212131d9c7f018a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e2f8bc976b4fcd14d252e8b59c4201844d2c9ce93fc37e1c3cbac4664ac32ece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2f8bc976b4fcd14d252e8b59c4201844d2c9ce93fc37e1c3cbac4664ac32ece->enter($__internal_e2f8bc976b4fcd14d252e8b59c4201844d2c9ce93fc37e1c3cbac4664ac32ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cb9d96d40a4ea5cac480959e0f4cea905745fed6488e84b5c692f40b54fb773e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9d96d40a4ea5cac480959e0f4cea905745fed6488e84b5c692f40b54fb773e->enter($__internal_cb9d96d40a4ea5cac480959e0f4cea905745fed6488e84b5c692f40b54fb773e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2f8bc976b4fcd14d252e8b59c4201844d2c9ce93fc37e1c3cbac4664ac32ece->leave($__internal_e2f8bc976b4fcd14d252e8b59c4201844d2c9ce93fc37e1c3cbac4664ac32ece_prof);

        
        $__internal_cb9d96d40a4ea5cac480959e0f4cea905745fed6488e84b5c692f40b54fb773e->leave($__internal_cb9d96d40a4ea5cac480959e0f4cea905745fed6488e84b5c692f40b54fb773e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3fde3f6afce99ce421afd8c6905555e5514a253e114859f9454271c5304bb58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3fde3f6afce99ce421afd8c6905555e5514a253e114859f9454271c5304bb58->enter($__internal_a3fde3f6afce99ce421afd8c6905555e5514a253e114859f9454271c5304bb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6a4b97a6a251dff341c4dc762fa6fa7ee8f30a262f73c20ebbf09bd9d8082bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4b97a6a251dff341c4dc762fa6fa7ee8f30a262f73c20ebbf09bd9d8082bca->enter($__internal_6a4b97a6a251dff341c4dc762fa6fa7ee8f30a262f73c20ebbf09bd9d8082bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6a4b97a6a251dff341c4dc762fa6fa7ee8f30a262f73c20ebbf09bd9d8082bca->leave($__internal_6a4b97a6a251dff341c4dc762fa6fa7ee8f30a262f73c20ebbf09bd9d8082bca_prof);

        
        $__internal_a3fde3f6afce99ce421afd8c6905555e5514a253e114859f9454271c5304bb58->leave($__internal_a3fde3f6afce99ce421afd8c6905555e5514a253e114859f9454271c5304bb58_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a10e9be19c59f319d32b817900207bb8b0dea4a58cf31810ac46f824e08f3d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a10e9be19c59f319d32b817900207bb8b0dea4a58cf31810ac46f824e08f3d7a->enter($__internal_a10e9be19c59f319d32b817900207bb8b0dea4a58cf31810ac46f824e08f3d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3713f89811f50b2ead851f2a6aa77e9117fb0c64ed2e639151a122370279cef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3713f89811f50b2ead851f2a6aa77e9117fb0c64ed2e639151a122370279cef2->enter($__internal_3713f89811f50b2ead851f2a6aa77e9117fb0c64ed2e639151a122370279cef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3713f89811f50b2ead851f2a6aa77e9117fb0c64ed2e639151a122370279cef2->leave($__internal_3713f89811f50b2ead851f2a6aa77e9117fb0c64ed2e639151a122370279cef2_prof);

        
        $__internal_a10e9be19c59f319d32b817900207bb8b0dea4a58cf31810ac46f824e08f3d7a->leave($__internal_a10e9be19c59f319d32b817900207bb8b0dea4a58cf31810ac46f824e08f3d7a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d971d77ea333ba1d315fb89ff1310239164e4fb407078c21d650ffbad2f314a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d971d77ea333ba1d315fb89ff1310239164e4fb407078c21d650ffbad2f314a8->enter($__internal_d971d77ea333ba1d315fb89ff1310239164e4fb407078c21d650ffbad2f314a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_823d28347e311d6556541acfca17d70a139ba4237e84ae593abbfa6ac96533f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823d28347e311d6556541acfca17d70a139ba4237e84ae593abbfa6ac96533f7->enter($__internal_823d28347e311d6556541acfca17d70a139ba4237e84ae593abbfa6ac96533f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_823d28347e311d6556541acfca17d70a139ba4237e84ae593abbfa6ac96533f7->leave($__internal_823d28347e311d6556541acfca17d70a139ba4237e84ae593abbfa6ac96533f7_prof);

        
        $__internal_d971d77ea333ba1d315fb89ff1310239164e4fb407078c21d650ffbad2f314a8->leave($__internal_d971d77ea333ba1d315fb89ff1310239164e4fb407078c21d650ffbad2f314a8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
