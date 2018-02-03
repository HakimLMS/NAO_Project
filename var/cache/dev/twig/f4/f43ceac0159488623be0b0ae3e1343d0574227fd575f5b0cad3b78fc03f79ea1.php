<?php

/* Map/mapAnonymous.html.twig */
class __TwigTemplate_444cf3d00033b903ed030521d9b1271e01611eab8e092232c990853648c5b494 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Map/mapAnonymous.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aaef1fce5d66f1478e4e61d0a12c8629f333a4472e13582f24594064df8d8244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaef1fce5d66f1478e4e61d0a12c8629f333a4472e13582f24594064df8d8244->enter($__internal_aaef1fce5d66f1478e4e61d0a12c8629f333a4472e13582f24594064df8d8244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Map/mapAnonymous.html.twig"));

        $__internal_8cfaa25bd9a4643df0d5f99dde6f4e09951d91c4e89adf8dad3fde41b5ae6061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cfaa25bd9a4643df0d5f99dde6f4e09951d91c4e89adf8dad3fde41b5ae6061->enter($__internal_8cfaa25bd9a4643df0d5f99dde6f4e09951d91c4e89adf8dad3fde41b5ae6061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Map/mapAnonymous.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaef1fce5d66f1478e4e61d0a12c8629f333a4472e13582f24594064df8d8244->leave($__internal_aaef1fce5d66f1478e4e61d0a12c8629f333a4472e13582f24594064df8d8244_prof);

        
        $__internal_8cfaa25bd9a4643df0d5f99dde6f4e09951d91c4e89adf8dad3fde41b5ae6061->leave($__internal_8cfaa25bd9a4643df0d5f99dde6f4e09951d91c4e89adf8dad3fde41b5ae6061_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_699e681271e25ce31277023aee027828c8990a1ed6e7711b63935c5703b4454a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699e681271e25ce31277023aee027828c8990a1ed6e7711b63935c5703b4454a->enter($__internal_699e681271e25ce31277023aee027828c8990a1ed6e7711b63935c5703b4454a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1296c56da2cc778e0cdc3cb93a95fcc67b6a1ba40f0b01bdff0ef56177d1962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1296c56da2cc778e0cdc3cb93a95fcc67b6a1ba40f0b01bdff0ef56177d1962->enter($__internal_c1296c56da2cc778e0cdc3cb93a95fcc67b6a1ba40f0b01bdff0ef56177d1962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/map.css"), "html", null, true);
        echo "\">
        <div class=\"mapwraper\">
            <div id=\"map\"></div>
        </div>
    ";
        
        $__internal_c1296c56da2cc778e0cdc3cb93a95fcc67b6a1ba40f0b01bdff0ef56177d1962->leave($__internal_c1296c56da2cc778e0cdc3cb93a95fcc67b6a1ba40f0b01bdff0ef56177d1962_prof);

        
        $__internal_699e681271e25ce31277023aee027828c8990a1ed6e7711b63935c5703b4454a->leave($__internal_699e681271e25ce31277023aee027828c8990a1ed6e7711b63935c5703b4454a_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9b637ceefd4e53a580b8bac5037394defcdf8812d1f2dcce68eda3ac5c141d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b637ceefd4e53a580b8bac5037394defcdf8812d1f2dcce68eda3ac5c141d2d->enter($__internal_9b637ceefd4e53a580b8bac5037394defcdf8812d1f2dcce68eda3ac5c141d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0560a4485dcd1886925ca3b446e49694a1e7c78f5c5ffba74d4b905417a9257c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0560a4485dcd1886925ca3b446e49694a1e7c78f5c5ffba74d4b905417a9257c->enter($__internal_0560a4485dcd1886925ca3b446e49694a1e7c78f5c5ffba74d4b905417a9257c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "        <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBtz5G85w1sjtP8Y0sPnY45ZAQq5d2Y_LE&callback=initMap\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/mapAnonymous.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_0560a4485dcd1886925ca3b446e49694a1e7c78f5c5ffba74d4b905417a9257c->leave($__internal_0560a4485dcd1886925ca3b446e49694a1e7c78f5c5ffba74d4b905417a9257c_prof);

        
        $__internal_9b637ceefd4e53a580b8bac5037394defcdf8812d1f2dcce68eda3ac5c141d2d->leave($__internal_9b637ceefd4e53a580b8bac5037394defcdf8812d1f2dcce68eda3ac5c141d2d_prof);

    }

    public function getTemplateName()
    {
        return "Map/mapAnonymous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 12,  77 => 11,  68 => 10,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

    {% block body %}

        <link rel=\"stylesheet\" href=\"{{asset('build/css/map.css')}}\">
        <div class=\"mapwraper\">
            <div id=\"map\"></div>
        </div>
    {% endblock %}
    {% block javascripts %}
        <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBtz5G85w1sjtP8Y0sPnY45ZAQq5d2Y_LE&callback=initMap\"></script>
        <script src=\"{{asset('build/js/mapAnonymous.js')}}\"></script>
    {% endblock %}

", "Map/mapAnonymous.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\Map\\mapAnonymous.html.twig");
    }
}
