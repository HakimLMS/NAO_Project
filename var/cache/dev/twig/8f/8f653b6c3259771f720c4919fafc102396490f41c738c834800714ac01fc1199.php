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
        $__internal_6eeb8891a6b4c073ea5f2e217929db7cae7566fe7c669476ee1aaae58c29a6b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eeb8891a6b4c073ea5f2e217929db7cae7566fe7c669476ee1aaae58c29a6b7->enter($__internal_6eeb8891a6b4c073ea5f2e217929db7cae7566fe7c669476ee1aaae58c29a6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e15e43242bfbe2f0e4f2436f66c5b8939b67f5e3d6571ff9c691f4910010271c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15e43242bfbe2f0e4f2436f66c5b8939b67f5e3d6571ff9c691f4910010271c->enter($__internal_e15e43242bfbe2f0e4f2436f66c5b8939b67f5e3d6571ff9c691f4910010271c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eeb8891a6b4c073ea5f2e217929db7cae7566fe7c669476ee1aaae58c29a6b7->leave($__internal_6eeb8891a6b4c073ea5f2e217929db7cae7566fe7c669476ee1aaae58c29a6b7_prof);

        
        $__internal_e15e43242bfbe2f0e4f2436f66c5b8939b67f5e3d6571ff9c691f4910010271c->leave($__internal_e15e43242bfbe2f0e4f2436f66c5b8939b67f5e3d6571ff9c691f4910010271c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9b895b9b1a3ffb85e932eba2d8c3849547fc57a2060a2ba9499a99bdc0c1c8dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b895b9b1a3ffb85e932eba2d8c3849547fc57a2060a2ba9499a99bdc0c1c8dd->enter($__internal_9b895b9b1a3ffb85e932eba2d8c3849547fc57a2060a2ba9499a99bdc0c1c8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_72fc3455cee16f0c5b14009de892d4d00f396a5de44a694fe31e582fe7159d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72fc3455cee16f0c5b14009de892d4d00f396a5de44a694fe31e582fe7159d29->enter($__internal_72fc3455cee16f0c5b14009de892d4d00f396a5de44a694fe31e582fe7159d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_72fc3455cee16f0c5b14009de892d4d00f396a5de44a694fe31e582fe7159d29->leave($__internal_72fc3455cee16f0c5b14009de892d4d00f396a5de44a694fe31e582fe7159d29_prof);

        
        $__internal_9b895b9b1a3ffb85e932eba2d8c3849547fc57a2060a2ba9499a99bdc0c1c8dd->leave($__internal_9b895b9b1a3ffb85e932eba2d8c3849547fc57a2060a2ba9499a99bdc0c1c8dd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f10bc672b2a71af31c626f4167cffb12b727e444fa338ce0daf9f330db2af863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f10bc672b2a71af31c626f4167cffb12b727e444fa338ce0daf9f330db2af863->enter($__internal_f10bc672b2a71af31c626f4167cffb12b727e444fa338ce0daf9f330db2af863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b0de5e563cfdc843707d4fed830fbc1e4cb44a19724dbc76cff424f8477948fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0de5e563cfdc843707d4fed830fbc1e4cb44a19724dbc76cff424f8477948fb->enter($__internal_b0de5e563cfdc843707d4fed830fbc1e4cb44a19724dbc76cff424f8477948fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b0de5e563cfdc843707d4fed830fbc1e4cb44a19724dbc76cff424f8477948fb->leave($__internal_b0de5e563cfdc843707d4fed830fbc1e4cb44a19724dbc76cff424f8477948fb_prof);

        
        $__internal_f10bc672b2a71af31c626f4167cffb12b727e444fa338ce0daf9f330db2af863->leave($__internal_f10bc672b2a71af31c626f4167cffb12b727e444fa338ce0daf9f330db2af863_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5d50ef2428e6ecf65a098b7ccd3d3f1d261e33f5a7375a624dfea9a0995f1bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d50ef2428e6ecf65a098b7ccd3d3f1d261e33f5a7375a624dfea9a0995f1bd->enter($__internal_a5d50ef2428e6ecf65a098b7ccd3d3f1d261e33f5a7375a624dfea9a0995f1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a5a9a4c989601777cbec1e88b0ab6feb861a91dee680b9225bbda70911b3c179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a9a4c989601777cbec1e88b0ab6feb861a91dee680b9225bbda70911b3c179->enter($__internal_a5a9a4c989601777cbec1e88b0ab6feb861a91dee680b9225bbda70911b3c179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_a5a9a4c989601777cbec1e88b0ab6feb861a91dee680b9225bbda70911b3c179->leave($__internal_a5a9a4c989601777cbec1e88b0ab6feb861a91dee680b9225bbda70911b3c179_prof);

        
        $__internal_a5d50ef2428e6ecf65a098b7ccd3d3f1d261e33f5a7375a624dfea9a0995f1bd->leave($__internal_a5d50ef2428e6ecf65a098b7ccd3d3f1d261e33f5a7375a624dfea9a0995f1bd_prof);

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
