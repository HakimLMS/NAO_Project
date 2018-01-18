<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_76a0247dec4b42e277b54b1e85c86f53751432c864d6926126790d4959c436f1 extends Twig_Template
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
        $__internal_c218c802bb6d5cae357c55ae5d28a0ecb84176d0ea24087a02dc125e3c9d210e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c218c802bb6d5cae357c55ae5d28a0ecb84176d0ea24087a02dc125e3c9d210e->enter($__internal_c218c802bb6d5cae357c55ae5d28a0ecb84176d0ea24087a02dc125e3c9d210e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_20e28f075707797320ccc8ba687ecd7c950d4562a6cf2a59a9da79302006fd2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e28f075707797320ccc8ba687ecd7c950d4562a6cf2a59a9da79302006fd2c->enter($__internal_20e28f075707797320ccc8ba687ecd7c950d4562a6cf2a59a9da79302006fd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c218c802bb6d5cae357c55ae5d28a0ecb84176d0ea24087a02dc125e3c9d210e->leave($__internal_c218c802bb6d5cae357c55ae5d28a0ecb84176d0ea24087a02dc125e3c9d210e_prof);

        
        $__internal_20e28f075707797320ccc8ba687ecd7c950d4562a6cf2a59a9da79302006fd2c->leave($__internal_20e28f075707797320ccc8ba687ecd7c950d4562a6cf2a59a9da79302006fd2c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6391b877d251143fa20cf784ada197c4558729662d5c0f1706cb5f21d16826f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6391b877d251143fa20cf784ada197c4558729662d5c0f1706cb5f21d16826f8->enter($__internal_6391b877d251143fa20cf784ada197c4558729662d5c0f1706cb5f21d16826f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_530705b5a2157c8a399c59ce29a1682fae0a53796087ab37e2631d40ffe32acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530705b5a2157c8a399c59ce29a1682fae0a53796087ab37e2631d40ffe32acc->enter($__internal_530705b5a2157c8a399c59ce29a1682fae0a53796087ab37e2631d40ffe32acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_530705b5a2157c8a399c59ce29a1682fae0a53796087ab37e2631d40ffe32acc->leave($__internal_530705b5a2157c8a399c59ce29a1682fae0a53796087ab37e2631d40ffe32acc_prof);

        
        $__internal_6391b877d251143fa20cf784ada197c4558729662d5c0f1706cb5f21d16826f8->leave($__internal_6391b877d251143fa20cf784ada197c4558729662d5c0f1706cb5f21d16826f8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f5133368dc821a09ce54695955dbd05762cbabcd77a23cbd90cc374f88030003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5133368dc821a09ce54695955dbd05762cbabcd77a23cbd90cc374f88030003->enter($__internal_f5133368dc821a09ce54695955dbd05762cbabcd77a23cbd90cc374f88030003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5f6d86b65becae15e929c2f340a23f5948b5f23da1600e284e09e906b0427bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6d86b65becae15e929c2f340a23f5948b5f23da1600e284e09e906b0427bf2->enter($__internal_5f6d86b65becae15e929c2f340a23f5948b5f23da1600e284e09e906b0427bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5f6d86b65becae15e929c2f340a23f5948b5f23da1600e284e09e906b0427bf2->leave($__internal_5f6d86b65becae15e929c2f340a23f5948b5f23da1600e284e09e906b0427bf2_prof);

        
        $__internal_f5133368dc821a09ce54695955dbd05762cbabcd77a23cbd90cc374f88030003->leave($__internal_f5133368dc821a09ce54695955dbd05762cbabcd77a23cbd90cc374f88030003_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_577dae9eef891afdc04c5daf05b928c7c653c0ada9d30a3f7851de497d88e391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_577dae9eef891afdc04c5daf05b928c7c653c0ada9d30a3f7851de497d88e391->enter($__internal_577dae9eef891afdc04c5daf05b928c7c653c0ada9d30a3f7851de497d88e391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1a1b857b903d67af507c50b1859323d45dcaf5643938fd795d5562a276e4a00a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1b857b903d67af507c50b1859323d45dcaf5643938fd795d5562a276e4a00a->enter($__internal_1a1b857b903d67af507c50b1859323d45dcaf5643938fd795d5562a276e4a00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1a1b857b903d67af507c50b1859323d45dcaf5643938fd795d5562a276e4a00a->leave($__internal_1a1b857b903d67af507c50b1859323d45dcaf5643938fd795d5562a276e4a00a_prof);

        
        $__internal_577dae9eef891afdc04c5daf05b928c7c653c0ada9d30a3f7851de497d88e391->leave($__internal_577dae9eef891afdc04c5daf05b928c7c653c0ada9d30a3f7851de497d88e391_prof);

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
