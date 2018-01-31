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
        $__internal_2014248f6c578710a6494a84392cc1a65c8644f5bb66bf46d6d6ad9b5987c004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2014248f6c578710a6494a84392cc1a65c8644f5bb66bf46d6d6ad9b5987c004->enter($__internal_2014248f6c578710a6494a84392cc1a65c8644f5bb66bf46d6d6ad9b5987c004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c606339cda6243c95427459ba3275949606260692bff2e6db69a2d5f83b35455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c606339cda6243c95427459ba3275949606260692bff2e6db69a2d5f83b35455->enter($__internal_c606339cda6243c95427459ba3275949606260692bff2e6db69a2d5f83b35455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2014248f6c578710a6494a84392cc1a65c8644f5bb66bf46d6d6ad9b5987c004->leave($__internal_2014248f6c578710a6494a84392cc1a65c8644f5bb66bf46d6d6ad9b5987c004_prof);

        
        $__internal_c606339cda6243c95427459ba3275949606260692bff2e6db69a2d5f83b35455->leave($__internal_c606339cda6243c95427459ba3275949606260692bff2e6db69a2d5f83b35455_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e32ea7de75ea7370d3923f838f6b7e076136b9ea1b6ef9cb14d291026de1f09b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e32ea7de75ea7370d3923f838f6b7e076136b9ea1b6ef9cb14d291026de1f09b->enter($__internal_e32ea7de75ea7370d3923f838f6b7e076136b9ea1b6ef9cb14d291026de1f09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cf752be7ead25867b0dc9606ff3df26f1697859d988cadba8266d74152cae5a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf752be7ead25867b0dc9606ff3df26f1697859d988cadba8266d74152cae5a6->enter($__internal_cf752be7ead25867b0dc9606ff3df26f1697859d988cadba8266d74152cae5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cf752be7ead25867b0dc9606ff3df26f1697859d988cadba8266d74152cae5a6->leave($__internal_cf752be7ead25867b0dc9606ff3df26f1697859d988cadba8266d74152cae5a6_prof);

        
        $__internal_e32ea7de75ea7370d3923f838f6b7e076136b9ea1b6ef9cb14d291026de1f09b->leave($__internal_e32ea7de75ea7370d3923f838f6b7e076136b9ea1b6ef9cb14d291026de1f09b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5242782f3e9b827c78e830007720982f65df24c872b7348df996100e70df9afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5242782f3e9b827c78e830007720982f65df24c872b7348df996100e70df9afd->enter($__internal_5242782f3e9b827c78e830007720982f65df24c872b7348df996100e70df9afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c5e2fe137766a85acce8f3212cb41ce5c2bbbc08302fb507d2d7fa2e484ff846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e2fe137766a85acce8f3212cb41ce5c2bbbc08302fb507d2d7fa2e484ff846->enter($__internal_c5e2fe137766a85acce8f3212cb41ce5c2bbbc08302fb507d2d7fa2e484ff846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c5e2fe137766a85acce8f3212cb41ce5c2bbbc08302fb507d2d7fa2e484ff846->leave($__internal_c5e2fe137766a85acce8f3212cb41ce5c2bbbc08302fb507d2d7fa2e484ff846_prof);

        
        $__internal_5242782f3e9b827c78e830007720982f65df24c872b7348df996100e70df9afd->leave($__internal_5242782f3e9b827c78e830007720982f65df24c872b7348df996100e70df9afd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9150c93474cd0b1ea0161810443215edf3b7133913b73025dd82b6097eb2c7d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9150c93474cd0b1ea0161810443215edf3b7133913b73025dd82b6097eb2c7d7->enter($__internal_9150c93474cd0b1ea0161810443215edf3b7133913b73025dd82b6097eb2c7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a42600c779213af8360cddfbfcf2e5fc87fb674eef72d07b85f257c5ef044742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42600c779213af8360cddfbfcf2e5fc87fb674eef72d07b85f257c5ef044742->enter($__internal_a42600c779213af8360cddfbfcf2e5fc87fb674eef72d07b85f257c5ef044742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a42600c779213af8360cddfbfcf2e5fc87fb674eef72d07b85f257c5ef044742->leave($__internal_a42600c779213af8360cddfbfcf2e5fc87fb674eef72d07b85f257c5ef044742_prof);

        
        $__internal_9150c93474cd0b1ea0161810443215edf3b7133913b73025dd82b6097eb2c7d7->leave($__internal_9150c93474cd0b1ea0161810443215edf3b7133913b73025dd82b6097eb2c7d7_prof);

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
