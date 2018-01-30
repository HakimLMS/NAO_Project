<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_aa51162854aea0157d9154daa17624b1f8e492959880e0993ad7712f034b30ac extends Twig_Template
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
        $__internal_786ff059ebf6423b340fa544f6fed2388510a94d9a1c0d12338795fc8aacca72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_786ff059ebf6423b340fa544f6fed2388510a94d9a1c0d12338795fc8aacca72->enter($__internal_786ff059ebf6423b340fa544f6fed2388510a94d9a1c0d12338795fc8aacca72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ed642ea0b737d99d1d82c90c1d2ccf1f7e3e532721ccb5c365570ee13b9a017a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed642ea0b737d99d1d82c90c1d2ccf1f7e3e532721ccb5c365570ee13b9a017a->enter($__internal_ed642ea0b737d99d1d82c90c1d2ccf1f7e3e532721ccb5c365570ee13b9a017a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_786ff059ebf6423b340fa544f6fed2388510a94d9a1c0d12338795fc8aacca72->leave($__internal_786ff059ebf6423b340fa544f6fed2388510a94d9a1c0d12338795fc8aacca72_prof);

        
        $__internal_ed642ea0b737d99d1d82c90c1d2ccf1f7e3e532721ccb5c365570ee13b9a017a->leave($__internal_ed642ea0b737d99d1d82c90c1d2ccf1f7e3e532721ccb5c365570ee13b9a017a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_80ee78db9ddc54e206861a0a28a2d4ca75bcdb0a2878c1f83732fa2603f44bb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ee78db9ddc54e206861a0a28a2d4ca75bcdb0a2878c1f83732fa2603f44bb4->enter($__internal_80ee78db9ddc54e206861a0a28a2d4ca75bcdb0a2878c1f83732fa2603f44bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8652f73a4f4629a839a06b4ed5b7c63e502fe5943fec10fdc04c9dfa1e9ff488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8652f73a4f4629a839a06b4ed5b7c63e502fe5943fec10fdc04c9dfa1e9ff488->enter($__internal_8652f73a4f4629a839a06b4ed5b7c63e502fe5943fec10fdc04c9dfa1e9ff488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8652f73a4f4629a839a06b4ed5b7c63e502fe5943fec10fdc04c9dfa1e9ff488->leave($__internal_8652f73a4f4629a839a06b4ed5b7c63e502fe5943fec10fdc04c9dfa1e9ff488_prof);

        
        $__internal_80ee78db9ddc54e206861a0a28a2d4ca75bcdb0a2878c1f83732fa2603f44bb4->leave($__internal_80ee78db9ddc54e206861a0a28a2d4ca75bcdb0a2878c1f83732fa2603f44bb4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_09554449d2334ac13ed4d35d50dc82dc24aab869c980fbf28feff133807c2c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09554449d2334ac13ed4d35d50dc82dc24aab869c980fbf28feff133807c2c34->enter($__internal_09554449d2334ac13ed4d35d50dc82dc24aab869c980fbf28feff133807c2c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_614c665779c63d3ea354cb3cdd07016ead8cb906791b7ec4cfe94bcf68b78aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_614c665779c63d3ea354cb3cdd07016ead8cb906791b7ec4cfe94bcf68b78aa9->enter($__internal_614c665779c63d3ea354cb3cdd07016ead8cb906791b7ec4cfe94bcf68b78aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_614c665779c63d3ea354cb3cdd07016ead8cb906791b7ec4cfe94bcf68b78aa9->leave($__internal_614c665779c63d3ea354cb3cdd07016ead8cb906791b7ec4cfe94bcf68b78aa9_prof);

        
        $__internal_09554449d2334ac13ed4d35d50dc82dc24aab869c980fbf28feff133807c2c34->leave($__internal_09554449d2334ac13ed4d35d50dc82dc24aab869c980fbf28feff133807c2c34_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_35abf6426da7441d2bb53e985a8f17f3764cf2fc5d621a05b73aa2e12914f3e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35abf6426da7441d2bb53e985a8f17f3764cf2fc5d621a05b73aa2e12914f3e7->enter($__internal_35abf6426da7441d2bb53e985a8f17f3764cf2fc5d621a05b73aa2e12914f3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9fa8fa802969c864d9c47d2e4d2a6ccd6a2af5fe6cee6068ce13b8650a4b1225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa8fa802969c864d9c47d2e4d2a6ccd6a2af5fe6cee6068ce13b8650a4b1225->enter($__internal_9fa8fa802969c864d9c47d2e4d2a6ccd6a2af5fe6cee6068ce13b8650a4b1225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9fa8fa802969c864d9c47d2e4d2a6ccd6a2af5fe6cee6068ce13b8650a4b1225->leave($__internal_9fa8fa802969c864d9c47d2e4d2a6ccd6a2af5fe6cee6068ce13b8650a4b1225_prof);

        
        $__internal_35abf6426da7441d2bb53e985a8f17f3764cf2fc5d621a05b73aa2e12914f3e7->leave($__internal_35abf6426da7441d2bb53e985a8f17f3764cf2fc5d621a05b73aa2e12914f3e7_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
