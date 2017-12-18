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
        $__internal_90d82918e1d17e830c15c237650b00f607041f29af82bb6fc6054c30a7b716a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d82918e1d17e830c15c237650b00f607041f29af82bb6fc6054c30a7b716a4->enter($__internal_90d82918e1d17e830c15c237650b00f607041f29af82bb6fc6054c30a7b716a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b51b62c5dbf6b11a7596ec6f4a44bf1bf961d5edd1b3f01df7d6b778ae2f1a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b51b62c5dbf6b11a7596ec6f4a44bf1bf961d5edd1b3f01df7d6b778ae2f1a24->enter($__internal_b51b62c5dbf6b11a7596ec6f4a44bf1bf961d5edd1b3f01df7d6b778ae2f1a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90d82918e1d17e830c15c237650b00f607041f29af82bb6fc6054c30a7b716a4->leave($__internal_90d82918e1d17e830c15c237650b00f607041f29af82bb6fc6054c30a7b716a4_prof);

        
        $__internal_b51b62c5dbf6b11a7596ec6f4a44bf1bf961d5edd1b3f01df7d6b778ae2f1a24->leave($__internal_b51b62c5dbf6b11a7596ec6f4a44bf1bf961d5edd1b3f01df7d6b778ae2f1a24_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_edb0f537fbc34c1c27586d89a4869782c804c914fc622be9b2ddeb3fdaeeccf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edb0f537fbc34c1c27586d89a4869782c804c914fc622be9b2ddeb3fdaeeccf9->enter($__internal_edb0f537fbc34c1c27586d89a4869782c804c914fc622be9b2ddeb3fdaeeccf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_76b52f29ec63c015a5af2be20b10eb2612434969b34f066e045a0b6151bb0f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b52f29ec63c015a5af2be20b10eb2612434969b34f066e045a0b6151bb0f37->enter($__internal_76b52f29ec63c015a5af2be20b10eb2612434969b34f066e045a0b6151bb0f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_76b52f29ec63c015a5af2be20b10eb2612434969b34f066e045a0b6151bb0f37->leave($__internal_76b52f29ec63c015a5af2be20b10eb2612434969b34f066e045a0b6151bb0f37_prof);

        
        $__internal_edb0f537fbc34c1c27586d89a4869782c804c914fc622be9b2ddeb3fdaeeccf9->leave($__internal_edb0f537fbc34c1c27586d89a4869782c804c914fc622be9b2ddeb3fdaeeccf9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee3e82e371e3c1c9b3c35ae12fad1ae962c2aee339c5c1cb0f618705a2967db2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee3e82e371e3c1c9b3c35ae12fad1ae962c2aee339c5c1cb0f618705a2967db2->enter($__internal_ee3e82e371e3c1c9b3c35ae12fad1ae962c2aee339c5c1cb0f618705a2967db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7e0250a73ded5ce1d9e9862b7a7ff907412a9024faa2d460e0416f723cff8145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e0250a73ded5ce1d9e9862b7a7ff907412a9024faa2d460e0416f723cff8145->enter($__internal_7e0250a73ded5ce1d9e9862b7a7ff907412a9024faa2d460e0416f723cff8145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7e0250a73ded5ce1d9e9862b7a7ff907412a9024faa2d460e0416f723cff8145->leave($__internal_7e0250a73ded5ce1d9e9862b7a7ff907412a9024faa2d460e0416f723cff8145_prof);

        
        $__internal_ee3e82e371e3c1c9b3c35ae12fad1ae962c2aee339c5c1cb0f618705a2967db2->leave($__internal_ee3e82e371e3c1c9b3c35ae12fad1ae962c2aee339c5c1cb0f618705a2967db2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_666ce18888913f73c68c73bb36004cf85536b9b0354180470e373b90e6c38a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_666ce18888913f73c68c73bb36004cf85536b9b0354180470e373b90e6c38a21->enter($__internal_666ce18888913f73c68c73bb36004cf85536b9b0354180470e373b90e6c38a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_50418b92634f665ab5735915ac5c8516ea182db63902fc792210a20037f65ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50418b92634f665ab5735915ac5c8516ea182db63902fc792210a20037f65ea0->enter($__internal_50418b92634f665ab5735915ac5c8516ea182db63902fc792210a20037f65ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_50418b92634f665ab5735915ac5c8516ea182db63902fc792210a20037f65ea0->leave($__internal_50418b92634f665ab5735915ac5c8516ea182db63902fc792210a20037f65ea0_prof);

        
        $__internal_666ce18888913f73c68c73bb36004cf85536b9b0354180470e373b90e6c38a21->leave($__internal_666ce18888913f73c68c73bb36004cf85536b9b0354180470e373b90e6c38a21_prof);

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
