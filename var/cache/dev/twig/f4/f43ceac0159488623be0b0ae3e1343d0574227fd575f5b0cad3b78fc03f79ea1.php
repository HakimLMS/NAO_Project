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
        $__internal_6265bc950fda1ab03c30449dc69dac1e20cd7bc09bca225993cebad5daa7d260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6265bc950fda1ab03c30449dc69dac1e20cd7bc09bca225993cebad5daa7d260->enter($__internal_6265bc950fda1ab03c30449dc69dac1e20cd7bc09bca225993cebad5daa7d260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Map/mapAnonymous.html.twig"));

        $__internal_f1c2bc6e7c1b68520ad5ae7558893e058009de1b49f40a04ea913f337e693f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c2bc6e7c1b68520ad5ae7558893e058009de1b49f40a04ea913f337e693f6f->enter($__internal_f1c2bc6e7c1b68520ad5ae7558893e058009de1b49f40a04ea913f337e693f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Map/mapAnonymous.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6265bc950fda1ab03c30449dc69dac1e20cd7bc09bca225993cebad5daa7d260->leave($__internal_6265bc950fda1ab03c30449dc69dac1e20cd7bc09bca225993cebad5daa7d260_prof);

        
        $__internal_f1c2bc6e7c1b68520ad5ae7558893e058009de1b49f40a04ea913f337e693f6f->leave($__internal_f1c2bc6e7c1b68520ad5ae7558893e058009de1b49f40a04ea913f337e693f6f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4ef8c6ccd4e773546a907164312e37b797501e9bc56bb260b44562f8241ce0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ef8c6ccd4e773546a907164312e37b797501e9bc56bb260b44562f8241ce0b->enter($__internal_e4ef8c6ccd4e773546a907164312e37b797501e9bc56bb260b44562f8241ce0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41f6755271c3e5acd78e0800fd714d829e30e8e38c16b2f4d32570c272a68d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f6755271c3e5acd78e0800fd714d829e30e8e38c16b2f4d32570c272a68d27->enter($__internal_41f6755271c3e5acd78e0800fd714d829e30e8e38c16b2f4d32570c272a68d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_41f6755271c3e5acd78e0800fd714d829e30e8e38c16b2f4d32570c272a68d27->leave($__internal_41f6755271c3e5acd78e0800fd714d829e30e8e38c16b2f4d32570c272a68d27_prof);

        
        $__internal_e4ef8c6ccd4e773546a907164312e37b797501e9bc56bb260b44562f8241ce0b->leave($__internal_e4ef8c6ccd4e773546a907164312e37b797501e9bc56bb260b44562f8241ce0b_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_483d78eab250cd1195de0a04b92706d43bf58746012aeac41008de15edfd8d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483d78eab250cd1195de0a04b92706d43bf58746012aeac41008de15edfd8d60->enter($__internal_483d78eab250cd1195de0a04b92706d43bf58746012aeac41008de15edfd8d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8591b65f8d4e46ad4df0b5205fba9a3703dd387ac5d8ff2e0805be98b52c49d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8591b65f8d4e46ad4df0b5205fba9a3703dd387ac5d8ff2e0805be98b52c49d5->enter($__internal_8591b65f8d4e46ad4df0b5205fba9a3703dd387ac5d8ff2e0805be98b52c49d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "        <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBtz5G85w1sjtP8Y0sPnY45ZAQq5d2Y_LE&callback=initMap\"></script>
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/mapAnonymous.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_8591b65f8d4e46ad4df0b5205fba9a3703dd387ac5d8ff2e0805be98b52c49d5->leave($__internal_8591b65f8d4e46ad4df0b5205fba9a3703dd387ac5d8ff2e0805be98b52c49d5_prof);

        
        $__internal_483d78eab250cd1195de0a04b92706d43bf58746012aeac41008de15edfd8d60->leave($__internal_483d78eab250cd1195de0a04b92706d43bf58746012aeac41008de15edfd8d60_prof);

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

", "Map/mapAnonymous.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Map\\mapAnonymous.html.twig");
    }
}
