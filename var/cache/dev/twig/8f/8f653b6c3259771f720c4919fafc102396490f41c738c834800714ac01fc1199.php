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
        $__internal_010d61fddb66bf88d4b8f414415ba50a296a365e6836e1d3fd21cee200ed64a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_010d61fddb66bf88d4b8f414415ba50a296a365e6836e1d3fd21cee200ed64a5->enter($__internal_010d61fddb66bf88d4b8f414415ba50a296a365e6836e1d3fd21cee200ed64a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_31b297f38b820c78b08ddd410be3ac3a68dd91a9b31cbdee6465d71fefd16e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b297f38b820c78b08ddd410be3ac3a68dd91a9b31cbdee6465d71fefd16e54->enter($__internal_31b297f38b820c78b08ddd410be3ac3a68dd91a9b31cbdee6465d71fefd16e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_010d61fddb66bf88d4b8f414415ba50a296a365e6836e1d3fd21cee200ed64a5->leave($__internal_010d61fddb66bf88d4b8f414415ba50a296a365e6836e1d3fd21cee200ed64a5_prof);

        
        $__internal_31b297f38b820c78b08ddd410be3ac3a68dd91a9b31cbdee6465d71fefd16e54->leave($__internal_31b297f38b820c78b08ddd410be3ac3a68dd91a9b31cbdee6465d71fefd16e54_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b3aedb32b1d548c40114cc5c31a798699084492c0849ac8e55463f23d133395a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3aedb32b1d548c40114cc5c31a798699084492c0849ac8e55463f23d133395a->enter($__internal_b3aedb32b1d548c40114cc5c31a798699084492c0849ac8e55463f23d133395a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_18295a631c04b471f7ae246583710a7b3c4b8217b0918777cfd376db6df82d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18295a631c04b471f7ae246583710a7b3c4b8217b0918777cfd376db6df82d3f->enter($__internal_18295a631c04b471f7ae246583710a7b3c4b8217b0918777cfd376db6df82d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_18295a631c04b471f7ae246583710a7b3c4b8217b0918777cfd376db6df82d3f->leave($__internal_18295a631c04b471f7ae246583710a7b3c4b8217b0918777cfd376db6df82d3f_prof);

        
        $__internal_b3aedb32b1d548c40114cc5c31a798699084492c0849ac8e55463f23d133395a->leave($__internal_b3aedb32b1d548c40114cc5c31a798699084492c0849ac8e55463f23d133395a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_11c7ee1393052c16bf7fb427719cc5813effce9cab5ddde0ce173868679284f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c7ee1393052c16bf7fb427719cc5813effce9cab5ddde0ce173868679284f0->enter($__internal_11c7ee1393052c16bf7fb427719cc5813effce9cab5ddde0ce173868679284f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_08380de04712f4021339e71ae453382b61047229fc44d220d9126d9aa8d4fd28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08380de04712f4021339e71ae453382b61047229fc44d220d9126d9aa8d4fd28->enter($__internal_08380de04712f4021339e71ae453382b61047229fc44d220d9126d9aa8d4fd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_08380de04712f4021339e71ae453382b61047229fc44d220d9126d9aa8d4fd28->leave($__internal_08380de04712f4021339e71ae453382b61047229fc44d220d9126d9aa8d4fd28_prof);

        
        $__internal_11c7ee1393052c16bf7fb427719cc5813effce9cab5ddde0ce173868679284f0->leave($__internal_11c7ee1393052c16bf7fb427719cc5813effce9cab5ddde0ce173868679284f0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_52fcabafe5aa47d1a23cd6e36d624d777e56e43f74a8d88655be1a8aaf36d27f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52fcabafe5aa47d1a23cd6e36d624d777e56e43f74a8d88655be1a8aaf36d27f->enter($__internal_52fcabafe5aa47d1a23cd6e36d624d777e56e43f74a8d88655be1a8aaf36d27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_65371234362ec2d531fc467b35c1aa0b123c73136257b54bc2c18a373d29ac0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65371234362ec2d531fc467b35c1aa0b123c73136257b54bc2c18a373d29ac0e->enter($__internal_65371234362ec2d531fc467b35c1aa0b123c73136257b54bc2c18a373d29ac0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_65371234362ec2d531fc467b35c1aa0b123c73136257b54bc2c18a373d29ac0e->leave($__internal_65371234362ec2d531fc467b35c1aa0b123c73136257b54bc2c18a373d29ac0e_prof);

        
        $__internal_52fcabafe5aa47d1a23cd6e36d624d777e56e43f74a8d88655be1a8aaf36d27f->leave($__internal_52fcabafe5aa47d1a23cd6e36d624d777e56e43f74a8d88655be1a8aaf36d27f_prof);

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
