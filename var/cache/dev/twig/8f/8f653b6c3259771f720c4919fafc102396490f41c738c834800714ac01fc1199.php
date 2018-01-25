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
        $__internal_103365eb9aef432a6811b99569f3c7ed376fccad0639e2e5fc9698784ad4b574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_103365eb9aef432a6811b99569f3c7ed376fccad0639e2e5fc9698784ad4b574->enter($__internal_103365eb9aef432a6811b99569f3c7ed376fccad0639e2e5fc9698784ad4b574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8cd75d384c858299050e2e7b5be808c85d1d02503f1ce3f16884c98d4e371cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd75d384c858299050e2e7b5be808c85d1d02503f1ce3f16884c98d4e371cd8->enter($__internal_8cd75d384c858299050e2e7b5be808c85d1d02503f1ce3f16884c98d4e371cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_103365eb9aef432a6811b99569f3c7ed376fccad0639e2e5fc9698784ad4b574->leave($__internal_103365eb9aef432a6811b99569f3c7ed376fccad0639e2e5fc9698784ad4b574_prof);

        
        $__internal_8cd75d384c858299050e2e7b5be808c85d1d02503f1ce3f16884c98d4e371cd8->leave($__internal_8cd75d384c858299050e2e7b5be808c85d1d02503f1ce3f16884c98d4e371cd8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0d06d2e351bb6f14837ac83d83fd754171b0348befa95bf1f31912b397bcca80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d06d2e351bb6f14837ac83d83fd754171b0348befa95bf1f31912b397bcca80->enter($__internal_0d06d2e351bb6f14837ac83d83fd754171b0348befa95bf1f31912b397bcca80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8971177d49d6e91629ab91668ac42e0433ace33e376fcdc3d9917bb7586f83df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8971177d49d6e91629ab91668ac42e0433ace33e376fcdc3d9917bb7586f83df->enter($__internal_8971177d49d6e91629ab91668ac42e0433ace33e376fcdc3d9917bb7586f83df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8971177d49d6e91629ab91668ac42e0433ace33e376fcdc3d9917bb7586f83df->leave($__internal_8971177d49d6e91629ab91668ac42e0433ace33e376fcdc3d9917bb7586f83df_prof);

        
        $__internal_0d06d2e351bb6f14837ac83d83fd754171b0348befa95bf1f31912b397bcca80->leave($__internal_0d06d2e351bb6f14837ac83d83fd754171b0348befa95bf1f31912b397bcca80_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d7b28121484d76e9d5281fdeed1246ed5b92607c85ec069191728b40f6566d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b28121484d76e9d5281fdeed1246ed5b92607c85ec069191728b40f6566d26->enter($__internal_d7b28121484d76e9d5281fdeed1246ed5b92607c85ec069191728b40f6566d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_710c9a1978176981d6c1e897b3ae709b977e7ccf40eef571a5a3da08587637a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710c9a1978176981d6c1e897b3ae709b977e7ccf40eef571a5a3da08587637a7->enter($__internal_710c9a1978176981d6c1e897b3ae709b977e7ccf40eef571a5a3da08587637a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_710c9a1978176981d6c1e897b3ae709b977e7ccf40eef571a5a3da08587637a7->leave($__internal_710c9a1978176981d6c1e897b3ae709b977e7ccf40eef571a5a3da08587637a7_prof);

        
        $__internal_d7b28121484d76e9d5281fdeed1246ed5b92607c85ec069191728b40f6566d26->leave($__internal_d7b28121484d76e9d5281fdeed1246ed5b92607c85ec069191728b40f6566d26_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cac6d101cbbd921f46b5f81d979041318d5721f81f122f9700046d907e945782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cac6d101cbbd921f46b5f81d979041318d5721f81f122f9700046d907e945782->enter($__internal_cac6d101cbbd921f46b5f81d979041318d5721f81f122f9700046d907e945782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_45b4e209d19bb8f836612b38396d5c0b3c747182186e20d185d8d996f2e72fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b4e209d19bb8f836612b38396d5c0b3c747182186e20d185d8d996f2e72fa4->enter($__internal_45b4e209d19bb8f836612b38396d5c0b3c747182186e20d185d8d996f2e72fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_45b4e209d19bb8f836612b38396d5c0b3c747182186e20d185d8d996f2e72fa4->leave($__internal_45b4e209d19bb8f836612b38396d5c0b3c747182186e20d185d8d996f2e72fa4_prof);

        
        $__internal_cac6d101cbbd921f46b5f81d979041318d5721f81f122f9700046d907e945782->leave($__internal_cac6d101cbbd921f46b5f81d979041318d5721f81f122f9700046d907e945782_prof);

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
", "@WebProfiler/Collector/router.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
