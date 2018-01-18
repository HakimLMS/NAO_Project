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
        $__internal_32be5e35031b2cf22c19868b6873d4d750f13fd5e98c454f87ca8e1bb36d3b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32be5e35031b2cf22c19868b6873d4d750f13fd5e98c454f87ca8e1bb36d3b72->enter($__internal_32be5e35031b2cf22c19868b6873d4d750f13fd5e98c454f87ca8e1bb36d3b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_acd5b78a2966ef8eb875669758ccc99245139ae46745920b59aabe81f7b4a84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd5b78a2966ef8eb875669758ccc99245139ae46745920b59aabe81f7b4a84e->enter($__internal_acd5b78a2966ef8eb875669758ccc99245139ae46745920b59aabe81f7b4a84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32be5e35031b2cf22c19868b6873d4d750f13fd5e98c454f87ca8e1bb36d3b72->leave($__internal_32be5e35031b2cf22c19868b6873d4d750f13fd5e98c454f87ca8e1bb36d3b72_prof);

        
        $__internal_acd5b78a2966ef8eb875669758ccc99245139ae46745920b59aabe81f7b4a84e->leave($__internal_acd5b78a2966ef8eb875669758ccc99245139ae46745920b59aabe81f7b4a84e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f08a76de4f05f3c55523a5e899ce6e28d631f7094f2239bc935d7e26b179cdbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08a76de4f05f3c55523a5e899ce6e28d631f7094f2239bc935d7e26b179cdbf->enter($__internal_f08a76de4f05f3c55523a5e899ce6e28d631f7094f2239bc935d7e26b179cdbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_81d48a615d419d2a34c1d9f82a6466080f18f39c4609f4a4aad4ff7455bf6c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d48a615d419d2a34c1d9f82a6466080f18f39c4609f4a4aad4ff7455bf6c41->enter($__internal_81d48a615d419d2a34c1d9f82a6466080f18f39c4609f4a4aad4ff7455bf6c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_81d48a615d419d2a34c1d9f82a6466080f18f39c4609f4a4aad4ff7455bf6c41->leave($__internal_81d48a615d419d2a34c1d9f82a6466080f18f39c4609f4a4aad4ff7455bf6c41_prof);

        
        $__internal_f08a76de4f05f3c55523a5e899ce6e28d631f7094f2239bc935d7e26b179cdbf->leave($__internal_f08a76de4f05f3c55523a5e899ce6e28d631f7094f2239bc935d7e26b179cdbf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9159df24186469ca21b81ed4f963055bd2cd73b2b54d7281630cb3a8087dde84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9159df24186469ca21b81ed4f963055bd2cd73b2b54d7281630cb3a8087dde84->enter($__internal_9159df24186469ca21b81ed4f963055bd2cd73b2b54d7281630cb3a8087dde84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_93b3c0cdee8dbae7fa796614d3e20618d0d62164c7c546afcfd30c9e7b35c44b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b3c0cdee8dbae7fa796614d3e20618d0d62164c7c546afcfd30c9e7b35c44b->enter($__internal_93b3c0cdee8dbae7fa796614d3e20618d0d62164c7c546afcfd30c9e7b35c44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_93b3c0cdee8dbae7fa796614d3e20618d0d62164c7c546afcfd30c9e7b35c44b->leave($__internal_93b3c0cdee8dbae7fa796614d3e20618d0d62164c7c546afcfd30c9e7b35c44b_prof);

        
        $__internal_9159df24186469ca21b81ed4f963055bd2cd73b2b54d7281630cb3a8087dde84->leave($__internal_9159df24186469ca21b81ed4f963055bd2cd73b2b54d7281630cb3a8087dde84_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_10eefe8d92b848c6eaff763f6cd77de710389bf8d71952cf2567690df71d88b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10eefe8d92b848c6eaff763f6cd77de710389bf8d71952cf2567690df71d88b9->enter($__internal_10eefe8d92b848c6eaff763f6cd77de710389bf8d71952cf2567690df71d88b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0184f0a9c4dd763bd8389c834e986164e5aa6737aef5d3e67f35365fb32ce681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0184f0a9c4dd763bd8389c834e986164e5aa6737aef5d3e67f35365fb32ce681->enter($__internal_0184f0a9c4dd763bd8389c834e986164e5aa6737aef5d3e67f35365fb32ce681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0184f0a9c4dd763bd8389c834e986164e5aa6737aef5d3e67f35365fb32ce681->leave($__internal_0184f0a9c4dd763bd8389c834e986164e5aa6737aef5d3e67f35365fb32ce681_prof);

        
        $__internal_10eefe8d92b848c6eaff763f6cd77de710389bf8d71952cf2567690df71d88b9->leave($__internal_10eefe8d92b848c6eaff763f6cd77de710389bf8d71952cf2567690df71d88b9_prof);

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
