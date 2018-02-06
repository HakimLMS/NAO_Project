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
        $__internal_469d5563d7003256bec79012e5615a0c9a1732ebe624badc861c2dc696a6c201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_469d5563d7003256bec79012e5615a0c9a1732ebe624badc861c2dc696a6c201->enter($__internal_469d5563d7003256bec79012e5615a0c9a1732ebe624badc861c2dc696a6c201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f6d7c96555c70b177517be4cc25d64aad63c18f0cee4e3e81279943d4c0a334a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d7c96555c70b177517be4cc25d64aad63c18f0cee4e3e81279943d4c0a334a->enter($__internal_f6d7c96555c70b177517be4cc25d64aad63c18f0cee4e3e81279943d4c0a334a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_469d5563d7003256bec79012e5615a0c9a1732ebe624badc861c2dc696a6c201->leave($__internal_469d5563d7003256bec79012e5615a0c9a1732ebe624badc861c2dc696a6c201_prof);

        
        $__internal_f6d7c96555c70b177517be4cc25d64aad63c18f0cee4e3e81279943d4c0a334a->leave($__internal_f6d7c96555c70b177517be4cc25d64aad63c18f0cee4e3e81279943d4c0a334a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e54d9b569fbe5cbb1479479ce2e4695774ecfe1d0e6e49fec2914de52faff733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e54d9b569fbe5cbb1479479ce2e4695774ecfe1d0e6e49fec2914de52faff733->enter($__internal_e54d9b569fbe5cbb1479479ce2e4695774ecfe1d0e6e49fec2914de52faff733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8bcdebe3d12ab38d465d7cf5a6ea7cca96bb6a6a539435a64a64cd1703ada925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bcdebe3d12ab38d465d7cf5a6ea7cca96bb6a6a539435a64a64cd1703ada925->enter($__internal_8bcdebe3d12ab38d465d7cf5a6ea7cca96bb6a6a539435a64a64cd1703ada925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8bcdebe3d12ab38d465d7cf5a6ea7cca96bb6a6a539435a64a64cd1703ada925->leave($__internal_8bcdebe3d12ab38d465d7cf5a6ea7cca96bb6a6a539435a64a64cd1703ada925_prof);

        
        $__internal_e54d9b569fbe5cbb1479479ce2e4695774ecfe1d0e6e49fec2914de52faff733->leave($__internal_e54d9b569fbe5cbb1479479ce2e4695774ecfe1d0e6e49fec2914de52faff733_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d6630d22d5417771b267bd85cafd73fdccfaed9f8fa611e9dce70dbb1cabe93d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6630d22d5417771b267bd85cafd73fdccfaed9f8fa611e9dce70dbb1cabe93d->enter($__internal_d6630d22d5417771b267bd85cafd73fdccfaed9f8fa611e9dce70dbb1cabe93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_69b3271785ca463eeac86f6e4c35d1fad4932de4340c29d2b7fc5ab7b102c48c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b3271785ca463eeac86f6e4c35d1fad4932de4340c29d2b7fc5ab7b102c48c->enter($__internal_69b3271785ca463eeac86f6e4c35d1fad4932de4340c29d2b7fc5ab7b102c48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_69b3271785ca463eeac86f6e4c35d1fad4932de4340c29d2b7fc5ab7b102c48c->leave($__internal_69b3271785ca463eeac86f6e4c35d1fad4932de4340c29d2b7fc5ab7b102c48c_prof);

        
        $__internal_d6630d22d5417771b267bd85cafd73fdccfaed9f8fa611e9dce70dbb1cabe93d->leave($__internal_d6630d22d5417771b267bd85cafd73fdccfaed9f8fa611e9dce70dbb1cabe93d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ccc5dea5e271ed68e8f0d6e8791debc5719e0f8000b97262ccaa601e50c28c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccc5dea5e271ed68e8f0d6e8791debc5719e0f8000b97262ccaa601e50c28c55->enter($__internal_ccc5dea5e271ed68e8f0d6e8791debc5719e0f8000b97262ccaa601e50c28c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_214691ba893d5b3df308bfba0a6053fa6efe94fe90ee19db3d1293041ed9a996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214691ba893d5b3df308bfba0a6053fa6efe94fe90ee19db3d1293041ed9a996->enter($__internal_214691ba893d5b3df308bfba0a6053fa6efe94fe90ee19db3d1293041ed9a996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_214691ba893d5b3df308bfba0a6053fa6efe94fe90ee19db3d1293041ed9a996->leave($__internal_214691ba893d5b3df308bfba0a6053fa6efe94fe90ee19db3d1293041ed9a996_prof);

        
        $__internal_ccc5dea5e271ed68e8f0d6e8791debc5719e0f8000b97262ccaa601e50c28c55->leave($__internal_ccc5dea5e271ed68e8f0d6e8791debc5719e0f8000b97262ccaa601e50c28c55_prof);

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
