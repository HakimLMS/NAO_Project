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
        $__internal_62e95b27fce5a5b043d32abdc4a501413d2556b0365d7e7f260f36d7130661fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62e95b27fce5a5b043d32abdc4a501413d2556b0365d7e7f260f36d7130661fe->enter($__internal_62e95b27fce5a5b043d32abdc4a501413d2556b0365d7e7f260f36d7130661fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_39ed916eeb435c0626c6dbdbe0123e008a8ad1a181003fef0141faed3aef13d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ed916eeb435c0626c6dbdbe0123e008a8ad1a181003fef0141faed3aef13d0->enter($__internal_39ed916eeb435c0626c6dbdbe0123e008a8ad1a181003fef0141faed3aef13d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62e95b27fce5a5b043d32abdc4a501413d2556b0365d7e7f260f36d7130661fe->leave($__internal_62e95b27fce5a5b043d32abdc4a501413d2556b0365d7e7f260f36d7130661fe_prof);

        
        $__internal_39ed916eeb435c0626c6dbdbe0123e008a8ad1a181003fef0141faed3aef13d0->leave($__internal_39ed916eeb435c0626c6dbdbe0123e008a8ad1a181003fef0141faed3aef13d0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d936d344bb675d12b029064a047b3dbff6366bfe3c4639a21a0ebc7a62fef1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d936d344bb675d12b029064a047b3dbff6366bfe3c4639a21a0ebc7a62fef1d->enter($__internal_9d936d344bb675d12b029064a047b3dbff6366bfe3c4639a21a0ebc7a62fef1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e46f8b57ad736f5cca6d81d57450778c50ba548c67f1c5430522cb3851ef1c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46f8b57ad736f5cca6d81d57450778c50ba548c67f1c5430522cb3851ef1c84->enter($__internal_e46f8b57ad736f5cca6d81d57450778c50ba548c67f1c5430522cb3851ef1c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e46f8b57ad736f5cca6d81d57450778c50ba548c67f1c5430522cb3851ef1c84->leave($__internal_e46f8b57ad736f5cca6d81d57450778c50ba548c67f1c5430522cb3851ef1c84_prof);

        
        $__internal_9d936d344bb675d12b029064a047b3dbff6366bfe3c4639a21a0ebc7a62fef1d->leave($__internal_9d936d344bb675d12b029064a047b3dbff6366bfe3c4639a21a0ebc7a62fef1d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff58016df182ab38997212f38c730f8a76f530d544ddc93937dc2464b9a6b5ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff58016df182ab38997212f38c730f8a76f530d544ddc93937dc2464b9a6b5ea->enter($__internal_ff58016df182ab38997212f38c730f8a76f530d544ddc93937dc2464b9a6b5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3d8c241d25a8c4a9c5d649ad1b448a74656ec49c60321b44c5e45bb1f5e89f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d8c241d25a8c4a9c5d649ad1b448a74656ec49c60321b44c5e45bb1f5e89f19->enter($__internal_3d8c241d25a8c4a9c5d649ad1b448a74656ec49c60321b44c5e45bb1f5e89f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3d8c241d25a8c4a9c5d649ad1b448a74656ec49c60321b44c5e45bb1f5e89f19->leave($__internal_3d8c241d25a8c4a9c5d649ad1b448a74656ec49c60321b44c5e45bb1f5e89f19_prof);

        
        $__internal_ff58016df182ab38997212f38c730f8a76f530d544ddc93937dc2464b9a6b5ea->leave($__internal_ff58016df182ab38997212f38c730f8a76f530d544ddc93937dc2464b9a6b5ea_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2779830ddeb72400293a37cb65c69baa3f6744a03add87641f89f336a1640c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2779830ddeb72400293a37cb65c69baa3f6744a03add87641f89f336a1640c9->enter($__internal_e2779830ddeb72400293a37cb65c69baa3f6744a03add87641f89f336a1640c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_718d2742148502a7261a6d92871555a2c9aeb1a295d18a1f8e5b3b1ac5583ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718d2742148502a7261a6d92871555a2c9aeb1a295d18a1f8e5b3b1ac5583ba4->enter($__internal_718d2742148502a7261a6d92871555a2c9aeb1a295d18a1f8e5b3b1ac5583ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_718d2742148502a7261a6d92871555a2c9aeb1a295d18a1f8e5b3b1ac5583ba4->leave($__internal_718d2742148502a7261a6d92871555a2c9aeb1a295d18a1f8e5b3b1ac5583ba4_prof);

        
        $__internal_e2779830ddeb72400293a37cb65c69baa3f6744a03add87641f89f336a1640c9->leave($__internal_e2779830ddeb72400293a37cb65c69baa3f6744a03add87641f89f336a1640c9_prof);

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
