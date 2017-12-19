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
        $__internal_5598542e1fd788ac39599219d7de52c3de46133ae372c65968607231c039fc47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5598542e1fd788ac39599219d7de52c3de46133ae372c65968607231c039fc47->enter($__internal_5598542e1fd788ac39599219d7de52c3de46133ae372c65968607231c039fc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_42cadf915dd97cac39fd7cde33a755dddaff86b113a049799e526ebb3010d8bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42cadf915dd97cac39fd7cde33a755dddaff86b113a049799e526ebb3010d8bf->enter($__internal_42cadf915dd97cac39fd7cde33a755dddaff86b113a049799e526ebb3010d8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5598542e1fd788ac39599219d7de52c3de46133ae372c65968607231c039fc47->leave($__internal_5598542e1fd788ac39599219d7de52c3de46133ae372c65968607231c039fc47_prof);

        
        $__internal_42cadf915dd97cac39fd7cde33a755dddaff86b113a049799e526ebb3010d8bf->leave($__internal_42cadf915dd97cac39fd7cde33a755dddaff86b113a049799e526ebb3010d8bf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ded4ac3c2ad381cf4d3955ba4357c6997d6b9120b301f9478f8048d404eba8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ded4ac3c2ad381cf4d3955ba4357c6997d6b9120b301f9478f8048d404eba8d->enter($__internal_2ded4ac3c2ad381cf4d3955ba4357c6997d6b9120b301f9478f8048d404eba8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_da1979fb2527a73e0d958bee25c93146b10ddb153e5b50dbc8747326a1c2ea32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1979fb2527a73e0d958bee25c93146b10ddb153e5b50dbc8747326a1c2ea32->enter($__internal_da1979fb2527a73e0d958bee25c93146b10ddb153e5b50dbc8747326a1c2ea32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_da1979fb2527a73e0d958bee25c93146b10ddb153e5b50dbc8747326a1c2ea32->leave($__internal_da1979fb2527a73e0d958bee25c93146b10ddb153e5b50dbc8747326a1c2ea32_prof);

        
        $__internal_2ded4ac3c2ad381cf4d3955ba4357c6997d6b9120b301f9478f8048d404eba8d->leave($__internal_2ded4ac3c2ad381cf4d3955ba4357c6997d6b9120b301f9478f8048d404eba8d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9717305cdf517573355997e41142e1584b65f8f345e9503ae7ad29f3c46ba8d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9717305cdf517573355997e41142e1584b65f8f345e9503ae7ad29f3c46ba8d9->enter($__internal_9717305cdf517573355997e41142e1584b65f8f345e9503ae7ad29f3c46ba8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f53ba1e20e5dd60deafeb743218ce31ea442a5d80c5263616a1ee00cbfc59d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53ba1e20e5dd60deafeb743218ce31ea442a5d80c5263616a1ee00cbfc59d14->enter($__internal_f53ba1e20e5dd60deafeb743218ce31ea442a5d80c5263616a1ee00cbfc59d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f53ba1e20e5dd60deafeb743218ce31ea442a5d80c5263616a1ee00cbfc59d14->leave($__internal_f53ba1e20e5dd60deafeb743218ce31ea442a5d80c5263616a1ee00cbfc59d14_prof);

        
        $__internal_9717305cdf517573355997e41142e1584b65f8f345e9503ae7ad29f3c46ba8d9->leave($__internal_9717305cdf517573355997e41142e1584b65f8f345e9503ae7ad29f3c46ba8d9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c3368b3faf3fa0a1af9f701f81be1dadb8015ea3ed85066c526d34a5cc5e6e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c3368b3faf3fa0a1af9f701f81be1dadb8015ea3ed85066c526d34a5cc5e6e9->enter($__internal_5c3368b3faf3fa0a1af9f701f81be1dadb8015ea3ed85066c526d34a5cc5e6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0f95f1d1b1c10dbba61da1e1e7a8c8424f3b3318ed7d2151570ef6eb2b6714c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f95f1d1b1c10dbba61da1e1e7a8c8424f3b3318ed7d2151570ef6eb2b6714c6->enter($__internal_0f95f1d1b1c10dbba61da1e1e7a8c8424f3b3318ed7d2151570ef6eb2b6714c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0f95f1d1b1c10dbba61da1e1e7a8c8424f3b3318ed7d2151570ef6eb2b6714c6->leave($__internal_0f95f1d1b1c10dbba61da1e1e7a8c8424f3b3318ed7d2151570ef6eb2b6714c6_prof);

        
        $__internal_5c3368b3faf3fa0a1af9f701f81be1dadb8015ea3ed85066c526d34a5cc5e6e9->leave($__internal_5c3368b3faf3fa0a1af9f701f81be1dadb8015ea3ed85066c526d34a5cc5e6e9_prof);

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
