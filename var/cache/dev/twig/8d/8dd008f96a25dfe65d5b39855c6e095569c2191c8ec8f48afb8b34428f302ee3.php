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
        $__internal_b5afc5b0e7affd2d406cb1fee7595f2e18c6d03ca0184c8420c1ed681bf6ddaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5afc5b0e7affd2d406cb1fee7595f2e18c6d03ca0184c8420c1ed681bf6ddaa->enter($__internal_b5afc5b0e7affd2d406cb1fee7595f2e18c6d03ca0184c8420c1ed681bf6ddaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_47e63c83929d91bb9afd1482662f9fd7078918f3921029a62799d522dba77c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e63c83929d91bb9afd1482662f9fd7078918f3921029a62799d522dba77c24->enter($__internal_47e63c83929d91bb9afd1482662f9fd7078918f3921029a62799d522dba77c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5afc5b0e7affd2d406cb1fee7595f2e18c6d03ca0184c8420c1ed681bf6ddaa->leave($__internal_b5afc5b0e7affd2d406cb1fee7595f2e18c6d03ca0184c8420c1ed681bf6ddaa_prof);

        
        $__internal_47e63c83929d91bb9afd1482662f9fd7078918f3921029a62799d522dba77c24->leave($__internal_47e63c83929d91bb9afd1482662f9fd7078918f3921029a62799d522dba77c24_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d49c7aa2be733f8c483eadb0a6fdba5dd60ff6ab17a17730ae39107dcc454e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d49c7aa2be733f8c483eadb0a6fdba5dd60ff6ab17a17730ae39107dcc454e9a->enter($__internal_d49c7aa2be733f8c483eadb0a6fdba5dd60ff6ab17a17730ae39107dcc454e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f11f54e04a66c10bec491a182e3f281d1f656a5e160a6a612a88a4c0e87c4ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11f54e04a66c10bec491a182e3f281d1f656a5e160a6a612a88a4c0e87c4ac4->enter($__internal_f11f54e04a66c10bec491a182e3f281d1f656a5e160a6a612a88a4c0e87c4ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f11f54e04a66c10bec491a182e3f281d1f656a5e160a6a612a88a4c0e87c4ac4->leave($__internal_f11f54e04a66c10bec491a182e3f281d1f656a5e160a6a612a88a4c0e87c4ac4_prof);

        
        $__internal_d49c7aa2be733f8c483eadb0a6fdba5dd60ff6ab17a17730ae39107dcc454e9a->leave($__internal_d49c7aa2be733f8c483eadb0a6fdba5dd60ff6ab17a17730ae39107dcc454e9a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49c95b442a3497ca8e97e40501cd2e49a7f58634f9ed4a694dcb1c53d3cce408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49c95b442a3497ca8e97e40501cd2e49a7f58634f9ed4a694dcb1c53d3cce408->enter($__internal_49c95b442a3497ca8e97e40501cd2e49a7f58634f9ed4a694dcb1c53d3cce408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eb0ecd462c492c8c76e8a38ab3137f6816cb3cbb41adbe3a648c95a5fc9c9e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0ecd462c492c8c76e8a38ab3137f6816cb3cbb41adbe3a648c95a5fc9c9e6e->enter($__internal_eb0ecd462c492c8c76e8a38ab3137f6816cb3cbb41adbe3a648c95a5fc9c9e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_eb0ecd462c492c8c76e8a38ab3137f6816cb3cbb41adbe3a648c95a5fc9c9e6e->leave($__internal_eb0ecd462c492c8c76e8a38ab3137f6816cb3cbb41adbe3a648c95a5fc9c9e6e_prof);

        
        $__internal_49c95b442a3497ca8e97e40501cd2e49a7f58634f9ed4a694dcb1c53d3cce408->leave($__internal_49c95b442a3497ca8e97e40501cd2e49a7f58634f9ed4a694dcb1c53d3cce408_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a1d5d12dd01f73fea2d63d9a44a138e0b6bb6729e8c420327e47868ae8d439e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a1d5d12dd01f73fea2d63d9a44a138e0b6bb6729e8c420327e47868ae8d439e->enter($__internal_5a1d5d12dd01f73fea2d63d9a44a138e0b6bb6729e8c420327e47868ae8d439e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9889514fb2a37713b71ff60713f47993694a7352885417589bf3818ca04a6b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9889514fb2a37713b71ff60713f47993694a7352885417589bf3818ca04a6b41->enter($__internal_9889514fb2a37713b71ff60713f47993694a7352885417589bf3818ca04a6b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9889514fb2a37713b71ff60713f47993694a7352885417589bf3818ca04a6b41->leave($__internal_9889514fb2a37713b71ff60713f47993694a7352885417589bf3818ca04a6b41_prof);

        
        $__internal_5a1d5d12dd01f73fea2d63d9a44a138e0b6bb6729e8c420327e47868ae8d439e->leave($__internal_5a1d5d12dd01f73fea2d63d9a44a138e0b6bb6729e8c420327e47868ae8d439e_prof);

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
