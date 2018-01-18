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
        $__internal_1ef5b7e311cc23199ae57e7e1d893404a5917dd9843b3e967814d89f0f49c655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ef5b7e311cc23199ae57e7e1d893404a5917dd9843b3e967814d89f0f49c655->enter($__internal_1ef5b7e311cc23199ae57e7e1d893404a5917dd9843b3e967814d89f0f49c655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b965e28eb5b002155a0b73e326473e27990d3be4a1fb51f6409367f42fcc645b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b965e28eb5b002155a0b73e326473e27990d3be4a1fb51f6409367f42fcc645b->enter($__internal_b965e28eb5b002155a0b73e326473e27990d3be4a1fb51f6409367f42fcc645b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ef5b7e311cc23199ae57e7e1d893404a5917dd9843b3e967814d89f0f49c655->leave($__internal_1ef5b7e311cc23199ae57e7e1d893404a5917dd9843b3e967814d89f0f49c655_prof);

        
        $__internal_b965e28eb5b002155a0b73e326473e27990d3be4a1fb51f6409367f42fcc645b->leave($__internal_b965e28eb5b002155a0b73e326473e27990d3be4a1fb51f6409367f42fcc645b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_93c0027284f058aecc5da41947cfc80cb5e58f8b8cbb2fe707d76c8f4c99e4f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c0027284f058aecc5da41947cfc80cb5e58f8b8cbb2fe707d76c8f4c99e4f4->enter($__internal_93c0027284f058aecc5da41947cfc80cb5e58f8b8cbb2fe707d76c8f4c99e4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_59c3cfa01da64ef27371b8b0e20d8f6accd592e74a659c17956a5d397b86ff22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59c3cfa01da64ef27371b8b0e20d8f6accd592e74a659c17956a5d397b86ff22->enter($__internal_59c3cfa01da64ef27371b8b0e20d8f6accd592e74a659c17956a5d397b86ff22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_59c3cfa01da64ef27371b8b0e20d8f6accd592e74a659c17956a5d397b86ff22->leave($__internal_59c3cfa01da64ef27371b8b0e20d8f6accd592e74a659c17956a5d397b86ff22_prof);

        
        $__internal_93c0027284f058aecc5da41947cfc80cb5e58f8b8cbb2fe707d76c8f4c99e4f4->leave($__internal_93c0027284f058aecc5da41947cfc80cb5e58f8b8cbb2fe707d76c8f4c99e4f4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bea995717a64459aacecb3b6d15d6c094a2702e76932c7b7e89891fb0794b700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea995717a64459aacecb3b6d15d6c094a2702e76932c7b7e89891fb0794b700->enter($__internal_bea995717a64459aacecb3b6d15d6c094a2702e76932c7b7e89891fb0794b700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f44476f15251f82990c9f83a871609a2305c657bbc4354906af6289eb1d1a5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44476f15251f82990c9f83a871609a2305c657bbc4354906af6289eb1d1a5fd->enter($__internal_f44476f15251f82990c9f83a871609a2305c657bbc4354906af6289eb1d1a5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f44476f15251f82990c9f83a871609a2305c657bbc4354906af6289eb1d1a5fd->leave($__internal_f44476f15251f82990c9f83a871609a2305c657bbc4354906af6289eb1d1a5fd_prof);

        
        $__internal_bea995717a64459aacecb3b6d15d6c094a2702e76932c7b7e89891fb0794b700->leave($__internal_bea995717a64459aacecb3b6d15d6c094a2702e76932c7b7e89891fb0794b700_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a46a19ff36020735bb29a9ab8b9b1e98a43471ff0c0b9e7a9037887f55d57c61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a46a19ff36020735bb29a9ab8b9b1e98a43471ff0c0b9e7a9037887f55d57c61->enter($__internal_a46a19ff36020735bb29a9ab8b9b1e98a43471ff0c0b9e7a9037887f55d57c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_782fa58c45aefad8b30bbaacade9afaae8ee428dd70cf44ee4db9a84f5c535a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782fa58c45aefad8b30bbaacade9afaae8ee428dd70cf44ee4db9a84f5c535a2->enter($__internal_782fa58c45aefad8b30bbaacade9afaae8ee428dd70cf44ee4db9a84f5c535a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_782fa58c45aefad8b30bbaacade9afaae8ee428dd70cf44ee4db9a84f5c535a2->leave($__internal_782fa58c45aefad8b30bbaacade9afaae8ee428dd70cf44ee4db9a84f5c535a2_prof);

        
        $__internal_a46a19ff36020735bb29a9ab8b9b1e98a43471ff0c0b9e7a9037887f55d57c61->leave($__internal_a46a19ff36020735bb29a9ab8b9b1e98a43471ff0c0b9e7a9037887f55d57c61_prof);

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
