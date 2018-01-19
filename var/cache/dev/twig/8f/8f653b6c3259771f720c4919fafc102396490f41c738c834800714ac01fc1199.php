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
        $__internal_3450e52e616a7e907af517f290ba1c83f3e54dbe963f1fa2e68546b18ce02943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3450e52e616a7e907af517f290ba1c83f3e54dbe963f1fa2e68546b18ce02943->enter($__internal_3450e52e616a7e907af517f290ba1c83f3e54dbe963f1fa2e68546b18ce02943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_116015ff502e621202b244c5f75f92d0a35e057344e4b7e12cfbc9638c5c7e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116015ff502e621202b244c5f75f92d0a35e057344e4b7e12cfbc9638c5c7e38->enter($__internal_116015ff502e621202b244c5f75f92d0a35e057344e4b7e12cfbc9638c5c7e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3450e52e616a7e907af517f290ba1c83f3e54dbe963f1fa2e68546b18ce02943->leave($__internal_3450e52e616a7e907af517f290ba1c83f3e54dbe963f1fa2e68546b18ce02943_prof);

        
        $__internal_116015ff502e621202b244c5f75f92d0a35e057344e4b7e12cfbc9638c5c7e38->leave($__internal_116015ff502e621202b244c5f75f92d0a35e057344e4b7e12cfbc9638c5c7e38_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f59ea3e8a02df260b59d5b959e4d7af69a5ca34edd9817345072591d8cb6abd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59ea3e8a02df260b59d5b959e4d7af69a5ca34edd9817345072591d8cb6abd3->enter($__internal_f59ea3e8a02df260b59d5b959e4d7af69a5ca34edd9817345072591d8cb6abd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_26a8ca51d24ad95ddd2af1f677cd74980491deab563e14ddfa687464a0edaeac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a8ca51d24ad95ddd2af1f677cd74980491deab563e14ddfa687464a0edaeac->enter($__internal_26a8ca51d24ad95ddd2af1f677cd74980491deab563e14ddfa687464a0edaeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_26a8ca51d24ad95ddd2af1f677cd74980491deab563e14ddfa687464a0edaeac->leave($__internal_26a8ca51d24ad95ddd2af1f677cd74980491deab563e14ddfa687464a0edaeac_prof);

        
        $__internal_f59ea3e8a02df260b59d5b959e4d7af69a5ca34edd9817345072591d8cb6abd3->leave($__internal_f59ea3e8a02df260b59d5b959e4d7af69a5ca34edd9817345072591d8cb6abd3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bc0e0380a3b35fc085d579c63b077ef75c48ca39564d386acd3b4dbe9381f954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc0e0380a3b35fc085d579c63b077ef75c48ca39564d386acd3b4dbe9381f954->enter($__internal_bc0e0380a3b35fc085d579c63b077ef75c48ca39564d386acd3b4dbe9381f954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fd26daa00f2831e35a48478c7dd7da4aca0481401dc7420cf0193fb4d6f340aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd26daa00f2831e35a48478c7dd7da4aca0481401dc7420cf0193fb4d6f340aa->enter($__internal_fd26daa00f2831e35a48478c7dd7da4aca0481401dc7420cf0193fb4d6f340aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fd26daa00f2831e35a48478c7dd7da4aca0481401dc7420cf0193fb4d6f340aa->leave($__internal_fd26daa00f2831e35a48478c7dd7da4aca0481401dc7420cf0193fb4d6f340aa_prof);

        
        $__internal_bc0e0380a3b35fc085d579c63b077ef75c48ca39564d386acd3b4dbe9381f954->leave($__internal_bc0e0380a3b35fc085d579c63b077ef75c48ca39564d386acd3b4dbe9381f954_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aec4abae6d976da74dc171358d85289390a6f1a91786f713d707fe0b79f0bf14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec4abae6d976da74dc171358d85289390a6f1a91786f713d707fe0b79f0bf14->enter($__internal_aec4abae6d976da74dc171358d85289390a6f1a91786f713d707fe0b79f0bf14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6e84d418f5a571ed9b124b4a42d599fb2e89172f03684b5b90c560f92a5be8ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e84d418f5a571ed9b124b4a42d599fb2e89172f03684b5b90c560f92a5be8ed->enter($__internal_6e84d418f5a571ed9b124b4a42d599fb2e89172f03684b5b90c560f92a5be8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6e84d418f5a571ed9b124b4a42d599fb2e89172f03684b5b90c560f92a5be8ed->leave($__internal_6e84d418f5a571ed9b124b4a42d599fb2e89172f03684b5b90c560f92a5be8ed_prof);

        
        $__internal_aec4abae6d976da74dc171358d85289390a6f1a91786f713d707fe0b79f0bf14->leave($__internal_aec4abae6d976da74dc171358d85289390a6f1a91786f713d707fe0b79f0bf14_prof);

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
