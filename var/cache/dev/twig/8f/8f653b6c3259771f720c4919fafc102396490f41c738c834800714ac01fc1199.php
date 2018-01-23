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
        $__internal_1812fb83831ad9b225d34f0cbbf16b486e24ac34dc247abb9d4682d0413f9c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1812fb83831ad9b225d34f0cbbf16b486e24ac34dc247abb9d4682d0413f9c48->enter($__internal_1812fb83831ad9b225d34f0cbbf16b486e24ac34dc247abb9d4682d0413f9c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c9c2ea1abe8d544420fd852fd7f87ae4a44eaebf0b0c10c963c94166973db104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c2ea1abe8d544420fd852fd7f87ae4a44eaebf0b0c10c963c94166973db104->enter($__internal_c9c2ea1abe8d544420fd852fd7f87ae4a44eaebf0b0c10c963c94166973db104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1812fb83831ad9b225d34f0cbbf16b486e24ac34dc247abb9d4682d0413f9c48->leave($__internal_1812fb83831ad9b225d34f0cbbf16b486e24ac34dc247abb9d4682d0413f9c48_prof);

        
        $__internal_c9c2ea1abe8d544420fd852fd7f87ae4a44eaebf0b0c10c963c94166973db104->leave($__internal_c9c2ea1abe8d544420fd852fd7f87ae4a44eaebf0b0c10c963c94166973db104_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_973ab928ce04dfc8f43c2a206e2cd45136a155d68971a9fc9c39166adf44db0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_973ab928ce04dfc8f43c2a206e2cd45136a155d68971a9fc9c39166adf44db0b->enter($__internal_973ab928ce04dfc8f43c2a206e2cd45136a155d68971a9fc9c39166adf44db0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6c177b0cbfd5b66efd0d4235e857b171767c8c0f2744f54618b207aa34bb1058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c177b0cbfd5b66efd0d4235e857b171767c8c0f2744f54618b207aa34bb1058->enter($__internal_6c177b0cbfd5b66efd0d4235e857b171767c8c0f2744f54618b207aa34bb1058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6c177b0cbfd5b66efd0d4235e857b171767c8c0f2744f54618b207aa34bb1058->leave($__internal_6c177b0cbfd5b66efd0d4235e857b171767c8c0f2744f54618b207aa34bb1058_prof);

        
        $__internal_973ab928ce04dfc8f43c2a206e2cd45136a155d68971a9fc9c39166adf44db0b->leave($__internal_973ab928ce04dfc8f43c2a206e2cd45136a155d68971a9fc9c39166adf44db0b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4fc49d8d7b4b3feb8e72092175d08b7ec815e5f85fbf41515c0ae716587a8c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fc49d8d7b4b3feb8e72092175d08b7ec815e5f85fbf41515c0ae716587a8c7c->enter($__internal_4fc49d8d7b4b3feb8e72092175d08b7ec815e5f85fbf41515c0ae716587a8c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3ebf20338364feb7e843f28eb1dd73a518383513fc6b492351660fdba96b28a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ebf20338364feb7e843f28eb1dd73a518383513fc6b492351660fdba96b28a8->enter($__internal_3ebf20338364feb7e843f28eb1dd73a518383513fc6b492351660fdba96b28a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3ebf20338364feb7e843f28eb1dd73a518383513fc6b492351660fdba96b28a8->leave($__internal_3ebf20338364feb7e843f28eb1dd73a518383513fc6b492351660fdba96b28a8_prof);

        
        $__internal_4fc49d8d7b4b3feb8e72092175d08b7ec815e5f85fbf41515c0ae716587a8c7c->leave($__internal_4fc49d8d7b4b3feb8e72092175d08b7ec815e5f85fbf41515c0ae716587a8c7c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e0a2e007deda62a15d014e2bf2437e4a26cab629e2980122d75b0cd6e474323a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0a2e007deda62a15d014e2bf2437e4a26cab629e2980122d75b0cd6e474323a->enter($__internal_e0a2e007deda62a15d014e2bf2437e4a26cab629e2980122d75b0cd6e474323a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_549321bc6f09994410ecb7348949077fd8a6fbf1e4ba578f62477349f4a841c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549321bc6f09994410ecb7348949077fd8a6fbf1e4ba578f62477349f4a841c3->enter($__internal_549321bc6f09994410ecb7348949077fd8a6fbf1e4ba578f62477349f4a841c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_549321bc6f09994410ecb7348949077fd8a6fbf1e4ba578f62477349f4a841c3->leave($__internal_549321bc6f09994410ecb7348949077fd8a6fbf1e4ba578f62477349f4a841c3_prof);

        
        $__internal_e0a2e007deda62a15d014e2bf2437e4a26cab629e2980122d75b0cd6e474323a->leave($__internal_e0a2e007deda62a15d014e2bf2437e4a26cab629e2980122d75b0cd6e474323a_prof);

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
