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
        $__internal_18ad3bd8e0697ec7b458aa3b9a76a62be9294eef073e5ce769f7f69989ce3182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18ad3bd8e0697ec7b458aa3b9a76a62be9294eef073e5ce769f7f69989ce3182->enter($__internal_18ad3bd8e0697ec7b458aa3b9a76a62be9294eef073e5ce769f7f69989ce3182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ad2da97c5d7d8891096babab938b26a36d61b445eee48452995611b3e103e1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2da97c5d7d8891096babab938b26a36d61b445eee48452995611b3e103e1f6->enter($__internal_ad2da97c5d7d8891096babab938b26a36d61b445eee48452995611b3e103e1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18ad3bd8e0697ec7b458aa3b9a76a62be9294eef073e5ce769f7f69989ce3182->leave($__internal_18ad3bd8e0697ec7b458aa3b9a76a62be9294eef073e5ce769f7f69989ce3182_prof);

        
        $__internal_ad2da97c5d7d8891096babab938b26a36d61b445eee48452995611b3e103e1f6->leave($__internal_ad2da97c5d7d8891096babab938b26a36d61b445eee48452995611b3e103e1f6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f5042b1e4a3223ce83ff923b0dc3fb54725cf5ceaef9714dee06f44c14ab728e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5042b1e4a3223ce83ff923b0dc3fb54725cf5ceaef9714dee06f44c14ab728e->enter($__internal_f5042b1e4a3223ce83ff923b0dc3fb54725cf5ceaef9714dee06f44c14ab728e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_119fbb6ac69c87010ae007dcd06a40137ea7e69115d834528c622fabd45466a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119fbb6ac69c87010ae007dcd06a40137ea7e69115d834528c622fabd45466a4->enter($__internal_119fbb6ac69c87010ae007dcd06a40137ea7e69115d834528c622fabd45466a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_119fbb6ac69c87010ae007dcd06a40137ea7e69115d834528c622fabd45466a4->leave($__internal_119fbb6ac69c87010ae007dcd06a40137ea7e69115d834528c622fabd45466a4_prof);

        
        $__internal_f5042b1e4a3223ce83ff923b0dc3fb54725cf5ceaef9714dee06f44c14ab728e->leave($__internal_f5042b1e4a3223ce83ff923b0dc3fb54725cf5ceaef9714dee06f44c14ab728e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce46549884c99e671de67b50bcf75c12850b4caf147ec16277ae44f428131f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce46549884c99e671de67b50bcf75c12850b4caf147ec16277ae44f428131f78->enter($__internal_ce46549884c99e671de67b50bcf75c12850b4caf147ec16277ae44f428131f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1d94a3a70aea4818937a373884dbcc1cd7cbf0ac7ea3877f2cfd7528c32313de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d94a3a70aea4818937a373884dbcc1cd7cbf0ac7ea3877f2cfd7528c32313de->enter($__internal_1d94a3a70aea4818937a373884dbcc1cd7cbf0ac7ea3877f2cfd7528c32313de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1d94a3a70aea4818937a373884dbcc1cd7cbf0ac7ea3877f2cfd7528c32313de->leave($__internal_1d94a3a70aea4818937a373884dbcc1cd7cbf0ac7ea3877f2cfd7528c32313de_prof);

        
        $__internal_ce46549884c99e671de67b50bcf75c12850b4caf147ec16277ae44f428131f78->leave($__internal_ce46549884c99e671de67b50bcf75c12850b4caf147ec16277ae44f428131f78_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd8c86c6ce7d1b9e493c02fb4a630b2dde0bedaf5f3bf283009285a6945badc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd8c86c6ce7d1b9e493c02fb4a630b2dde0bedaf5f3bf283009285a6945badc4->enter($__internal_cd8c86c6ce7d1b9e493c02fb4a630b2dde0bedaf5f3bf283009285a6945badc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1b3cdf73e2ee432891489918ca02f56ed738b69fe3ee00dc327770e73febc9fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3cdf73e2ee432891489918ca02f56ed738b69fe3ee00dc327770e73febc9fb->enter($__internal_1b3cdf73e2ee432891489918ca02f56ed738b69fe3ee00dc327770e73febc9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1b3cdf73e2ee432891489918ca02f56ed738b69fe3ee00dc327770e73febc9fb->leave($__internal_1b3cdf73e2ee432891489918ca02f56ed738b69fe3ee00dc327770e73febc9fb_prof);

        
        $__internal_cd8c86c6ce7d1b9e493c02fb4a630b2dde0bedaf5f3bf283009285a6945badc4->leave($__internal_cd8c86c6ce7d1b9e493c02fb4a630b2dde0bedaf5f3bf283009285a6945badc4_prof);

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
