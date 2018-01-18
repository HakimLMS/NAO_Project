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
        $__internal_a8f2669bac0409e2d4e09d3fad8bfece1286b2217461728e5e26866a3580cc15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8f2669bac0409e2d4e09d3fad8bfece1286b2217461728e5e26866a3580cc15->enter($__internal_a8f2669bac0409e2d4e09d3fad8bfece1286b2217461728e5e26866a3580cc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c0b0bf59021d5881de1a7b9d00498cfad841ba0b36a99a4731ae0cf50b28474a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b0bf59021d5881de1a7b9d00498cfad841ba0b36a99a4731ae0cf50b28474a->enter($__internal_c0b0bf59021d5881de1a7b9d00498cfad841ba0b36a99a4731ae0cf50b28474a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8f2669bac0409e2d4e09d3fad8bfece1286b2217461728e5e26866a3580cc15->leave($__internal_a8f2669bac0409e2d4e09d3fad8bfece1286b2217461728e5e26866a3580cc15_prof);

        
        $__internal_c0b0bf59021d5881de1a7b9d00498cfad841ba0b36a99a4731ae0cf50b28474a->leave($__internal_c0b0bf59021d5881de1a7b9d00498cfad841ba0b36a99a4731ae0cf50b28474a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c3314f8e717c75981c127461fef93a0f06d040e2e9180d730605697ea67bda1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c3314f8e717c75981c127461fef93a0f06d040e2e9180d730605697ea67bda1->enter($__internal_8c3314f8e717c75981c127461fef93a0f06d040e2e9180d730605697ea67bda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7878b04a1ebb90b5ccb170b95f627a7a216bde855ac90b70c61956bdd6ad2afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7878b04a1ebb90b5ccb170b95f627a7a216bde855ac90b70c61956bdd6ad2afb->enter($__internal_7878b04a1ebb90b5ccb170b95f627a7a216bde855ac90b70c61956bdd6ad2afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7878b04a1ebb90b5ccb170b95f627a7a216bde855ac90b70c61956bdd6ad2afb->leave($__internal_7878b04a1ebb90b5ccb170b95f627a7a216bde855ac90b70c61956bdd6ad2afb_prof);

        
        $__internal_8c3314f8e717c75981c127461fef93a0f06d040e2e9180d730605697ea67bda1->leave($__internal_8c3314f8e717c75981c127461fef93a0f06d040e2e9180d730605697ea67bda1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c0b02413ddfed249c445d3202a923a866453f251ff5453974a7e860689555cf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b02413ddfed249c445d3202a923a866453f251ff5453974a7e860689555cf3->enter($__internal_c0b02413ddfed249c445d3202a923a866453f251ff5453974a7e860689555cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e443eebb87759e98b28559cc2316c29e4b8e2e3b0426601b1b8e12bd9defb563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e443eebb87759e98b28559cc2316c29e4b8e2e3b0426601b1b8e12bd9defb563->enter($__internal_e443eebb87759e98b28559cc2316c29e4b8e2e3b0426601b1b8e12bd9defb563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e443eebb87759e98b28559cc2316c29e4b8e2e3b0426601b1b8e12bd9defb563->leave($__internal_e443eebb87759e98b28559cc2316c29e4b8e2e3b0426601b1b8e12bd9defb563_prof);

        
        $__internal_c0b02413ddfed249c445d3202a923a866453f251ff5453974a7e860689555cf3->leave($__internal_c0b02413ddfed249c445d3202a923a866453f251ff5453974a7e860689555cf3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_70449bd009005fd8e677aba6ceeff8a69422f9a5d05a499300fff19b97968ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70449bd009005fd8e677aba6ceeff8a69422f9a5d05a499300fff19b97968ab9->enter($__internal_70449bd009005fd8e677aba6ceeff8a69422f9a5d05a499300fff19b97968ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_01e66eecbe7132b58a5340f1fb17638aacc109f7bdd2e142bc29ec38ffe12814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e66eecbe7132b58a5340f1fb17638aacc109f7bdd2e142bc29ec38ffe12814->enter($__internal_01e66eecbe7132b58a5340f1fb17638aacc109f7bdd2e142bc29ec38ffe12814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_01e66eecbe7132b58a5340f1fb17638aacc109f7bdd2e142bc29ec38ffe12814->leave($__internal_01e66eecbe7132b58a5340f1fb17638aacc109f7bdd2e142bc29ec38ffe12814_prof);

        
        $__internal_70449bd009005fd8e677aba6ceeff8a69422f9a5d05a499300fff19b97968ab9->leave($__internal_70449bd009005fd8e677aba6ceeff8a69422f9a5d05a499300fff19b97968ab9_prof);

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
