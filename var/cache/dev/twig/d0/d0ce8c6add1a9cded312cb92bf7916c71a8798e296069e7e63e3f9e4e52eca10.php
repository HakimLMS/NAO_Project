<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_aeb988ac9096f13e727f6298c9be98dabda16ffa23a2bfa256d5fadd455103a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_599fc38a571c5351651b95d8cc0e848f9249f3443bd3c8ede36a25a0e4e54f49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_599fc38a571c5351651b95d8cc0e848f9249f3443bd3c8ede36a25a0e4e54f49->enter($__internal_599fc38a571c5351651b95d8cc0e848f9249f3443bd3c8ede36a25a0e4e54f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_922a2eefd722d612c8434c15ac1602348358d5ad7ae6e159ca00ec8ede0b2373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922a2eefd722d612c8434c15ac1602348358d5ad7ae6e159ca00ec8ede0b2373->enter($__internal_922a2eefd722d612c8434c15ac1602348358d5ad7ae6e159ca00ec8ede0b2373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_599fc38a571c5351651b95d8cc0e848f9249f3443bd3c8ede36a25a0e4e54f49->leave($__internal_599fc38a571c5351651b95d8cc0e848f9249f3443bd3c8ede36a25a0e4e54f49_prof);

        
        $__internal_922a2eefd722d612c8434c15ac1602348358d5ad7ae6e159ca00ec8ede0b2373->leave($__internal_922a2eefd722d612c8434c15ac1602348358d5ad7ae6e159ca00ec8ede0b2373_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6fde548477ad160599a91c887f65ead563c508631a2c1e2d4ac9b9398eed3b11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fde548477ad160599a91c887f65ead563c508631a2c1e2d4ac9b9398eed3b11->enter($__internal_6fde548477ad160599a91c887f65ead563c508631a2c1e2d4ac9b9398eed3b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_43a4dd253f3e968387e9849cc1c8df830560c43721f6afd6e038c0cb500504a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a4dd253f3e968387e9849cc1c8df830560c43721f6afd6e038c0cb500504a4->enter($__internal_43a4dd253f3e968387e9849cc1c8df830560c43721f6afd6e038c0cb500504a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_43a4dd253f3e968387e9849cc1c8df830560c43721f6afd6e038c0cb500504a4->leave($__internal_43a4dd253f3e968387e9849cc1c8df830560c43721f6afd6e038c0cb500504a4_prof);

        
        $__internal_6fde548477ad160599a91c887f65ead563c508631a2c1e2d4ac9b9398eed3b11->leave($__internal_6fde548477ad160599a91c887f65ead563c508631a2c1e2d4ac9b9398eed3b11_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
