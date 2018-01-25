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
        $__internal_2d2fb6c32c558ae067bc021b77bb81a2c45ef32d4ccab786422f1f7e00db55ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d2fb6c32c558ae067bc021b77bb81a2c45ef32d4ccab786422f1f7e00db55ba->enter($__internal_2d2fb6c32c558ae067bc021b77bb81a2c45ef32d4ccab786422f1f7e00db55ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ce1f0fa442f9e1ee76868943e18ed691f28ad0f52a3f0d251b1b341c2188f96f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1f0fa442f9e1ee76868943e18ed691f28ad0f52a3f0d251b1b341c2188f96f->enter($__internal_ce1f0fa442f9e1ee76868943e18ed691f28ad0f52a3f0d251b1b341c2188f96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d2fb6c32c558ae067bc021b77bb81a2c45ef32d4ccab786422f1f7e00db55ba->leave($__internal_2d2fb6c32c558ae067bc021b77bb81a2c45ef32d4ccab786422f1f7e00db55ba_prof);

        
        $__internal_ce1f0fa442f9e1ee76868943e18ed691f28ad0f52a3f0d251b1b341c2188f96f->leave($__internal_ce1f0fa442f9e1ee76868943e18ed691f28ad0f52a3f0d251b1b341c2188f96f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bcddb6e0d30ae2be8f6d0e5b265f4cfd3270a8d4ed6e66908b5f9ea8fc1417d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcddb6e0d30ae2be8f6d0e5b265f4cfd3270a8d4ed6e66908b5f9ea8fc1417d9->enter($__internal_bcddb6e0d30ae2be8f6d0e5b265f4cfd3270a8d4ed6e66908b5f9ea8fc1417d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3a04b4b9b0673ecb70c50a2f45dc5111a56c85d7f0a2c36d73da8f949b93e84b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a04b4b9b0673ecb70c50a2f45dc5111a56c85d7f0a2c36d73da8f949b93e84b->enter($__internal_3a04b4b9b0673ecb70c50a2f45dc5111a56c85d7f0a2c36d73da8f949b93e84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3a04b4b9b0673ecb70c50a2f45dc5111a56c85d7f0a2c36d73da8f949b93e84b->leave($__internal_3a04b4b9b0673ecb70c50a2f45dc5111a56c85d7f0a2c36d73da8f949b93e84b_prof);

        
        $__internal_bcddb6e0d30ae2be8f6d0e5b265f4cfd3270a8d4ed6e66908b5f9ea8fc1417d9->leave($__internal_bcddb6e0d30ae2be8f6d0e5b265f4cfd3270a8d4ed6e66908b5f9ea8fc1417d9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9bf6fcab0fc009f85b07963487d9ce29cbf9d1d4381b69d34272e65a59ae83c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf6fcab0fc009f85b07963487d9ce29cbf9d1d4381b69d34272e65a59ae83c7->enter($__internal_9bf6fcab0fc009f85b07963487d9ce29cbf9d1d4381b69d34272e65a59ae83c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_85d59827411b4a2eddfb981aa8b5e6fba24afb4451c9c3d7c89aea49405af7c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d59827411b4a2eddfb981aa8b5e6fba24afb4451c9c3d7c89aea49405af7c5->enter($__internal_85d59827411b4a2eddfb981aa8b5e6fba24afb4451c9c3d7c89aea49405af7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_85d59827411b4a2eddfb981aa8b5e6fba24afb4451c9c3d7c89aea49405af7c5->leave($__internal_85d59827411b4a2eddfb981aa8b5e6fba24afb4451c9c3d7c89aea49405af7c5_prof);

        
        $__internal_9bf6fcab0fc009f85b07963487d9ce29cbf9d1d4381b69d34272e65a59ae83c7->leave($__internal_9bf6fcab0fc009f85b07963487d9ce29cbf9d1d4381b69d34272e65a59ae83c7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_51c210cf32c92bdc06f335fbc00a15675d4c722644659d12cd43b68a732c1cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51c210cf32c92bdc06f335fbc00a15675d4c722644659d12cd43b68a732c1cd6->enter($__internal_51c210cf32c92bdc06f335fbc00a15675d4c722644659d12cd43b68a732c1cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2f4bf337ea5cb8ff258fd40ab0d301ddb5aa028ffa9b78d027b6b45875ba438e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4bf337ea5cb8ff258fd40ab0d301ddb5aa028ffa9b78d027b6b45875ba438e->enter($__internal_2f4bf337ea5cb8ff258fd40ab0d301ddb5aa028ffa9b78d027b6b45875ba438e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2f4bf337ea5cb8ff258fd40ab0d301ddb5aa028ffa9b78d027b6b45875ba438e->leave($__internal_2f4bf337ea5cb8ff258fd40ab0d301ddb5aa028ffa9b78d027b6b45875ba438e_prof);

        
        $__internal_51c210cf32c92bdc06f335fbc00a15675d4c722644659d12cd43b68a732c1cd6->leave($__internal_51c210cf32c92bdc06f335fbc00a15675d4c722644659d12cd43b68a732c1cd6_prof);

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
