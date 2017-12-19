<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_acb880fc3b94667c83acd66c2e3183b687cc9751184bcac3aa7ddf178b40dc11 extends Twig_Template
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
        $__internal_1870910bcaf59223252e270f6696d3d85c2fd46fe3c8869758a313a89f9b41e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1870910bcaf59223252e270f6696d3d85c2fd46fe3c8869758a313a89f9b41e6->enter($__internal_1870910bcaf59223252e270f6696d3d85c2fd46fe3c8869758a313a89f9b41e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c6c78a50da7ac13f38bcd7ffc13d7cb86e819707fa2ce5269f1e069c28e02079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c78a50da7ac13f38bcd7ffc13d7cb86e819707fa2ce5269f1e069c28e02079->enter($__internal_c6c78a50da7ac13f38bcd7ffc13d7cb86e819707fa2ce5269f1e069c28e02079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1870910bcaf59223252e270f6696d3d85c2fd46fe3c8869758a313a89f9b41e6->leave($__internal_1870910bcaf59223252e270f6696d3d85c2fd46fe3c8869758a313a89f9b41e6_prof);

        
        $__internal_c6c78a50da7ac13f38bcd7ffc13d7cb86e819707fa2ce5269f1e069c28e02079->leave($__internal_c6c78a50da7ac13f38bcd7ffc13d7cb86e819707fa2ce5269f1e069c28e02079_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0276f463545e4b8bd811dfc5d5cd86818ddf16698ed290fafbf0b84014409001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0276f463545e4b8bd811dfc5d5cd86818ddf16698ed290fafbf0b84014409001->enter($__internal_0276f463545e4b8bd811dfc5d5cd86818ddf16698ed290fafbf0b84014409001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a25b5fba02a7005560f7de70354c62a4e433c3fbda6f7ea0777608e4c4d32005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a25b5fba02a7005560f7de70354c62a4e433c3fbda6f7ea0777608e4c4d32005->enter($__internal_a25b5fba02a7005560f7de70354c62a4e433c3fbda6f7ea0777608e4c4d32005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a25b5fba02a7005560f7de70354c62a4e433c3fbda6f7ea0777608e4c4d32005->leave($__internal_a25b5fba02a7005560f7de70354c62a4e433c3fbda6f7ea0777608e4c4d32005_prof);

        
        $__internal_0276f463545e4b8bd811dfc5d5cd86818ddf16698ed290fafbf0b84014409001->leave($__internal_0276f463545e4b8bd811dfc5d5cd86818ddf16698ed290fafbf0b84014409001_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c35eaf269dd492accbc87f82f633ab2b200e2e8300b4568fd0e0dd76c918b622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35eaf269dd492accbc87f82f633ab2b200e2e8300b4568fd0e0dd76c918b622->enter($__internal_c35eaf269dd492accbc87f82f633ab2b200e2e8300b4568fd0e0dd76c918b622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f96dea4c2e74cd9572e2610cd000af027922df0453e7a770ae0e36e6f123bf00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f96dea4c2e74cd9572e2610cd000af027922df0453e7a770ae0e36e6f123bf00->enter($__internal_f96dea4c2e74cd9572e2610cd000af027922df0453e7a770ae0e36e6f123bf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f96dea4c2e74cd9572e2610cd000af027922df0453e7a770ae0e36e6f123bf00->leave($__internal_f96dea4c2e74cd9572e2610cd000af027922df0453e7a770ae0e36e6f123bf00_prof);

        
        $__internal_c35eaf269dd492accbc87f82f633ab2b200e2e8300b4568fd0e0dd76c918b622->leave($__internal_c35eaf269dd492accbc87f82f633ab2b200e2e8300b4568fd0e0dd76c918b622_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d9d916c0c96ca48f0868aa36395f535bd653dbb4c2b0181ea6d16bc1ceb39181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9d916c0c96ca48f0868aa36395f535bd653dbb4c2b0181ea6d16bc1ceb39181->enter($__internal_d9d916c0c96ca48f0868aa36395f535bd653dbb4c2b0181ea6d16bc1ceb39181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_de7ee4ac79c3611e3bc392eaea032e9fcb37a331fa18d53f499e141b23d33469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7ee4ac79c3611e3bc392eaea032e9fcb37a331fa18d53f499e141b23d33469->enter($__internal_de7ee4ac79c3611e3bc392eaea032e9fcb37a331fa18d53f499e141b23d33469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_de7ee4ac79c3611e3bc392eaea032e9fcb37a331fa18d53f499e141b23d33469->leave($__internal_de7ee4ac79c3611e3bc392eaea032e9fcb37a331fa18d53f499e141b23d33469_prof);

        
        $__internal_d9d916c0c96ca48f0868aa36395f535bd653dbb4c2b0181ea6d16bc1ceb39181->leave($__internal_d9d916c0c96ca48f0868aa36395f535bd653dbb4c2b0181ea6d16bc1ceb39181_prof);

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
