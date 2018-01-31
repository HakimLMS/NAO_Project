<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_46e47137b8300facccd804c08d0e4807fdb26a00a6f6c82f9a94b76018870a0d extends Twig_Template
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
        $__internal_e0f5b4b79d524c82b7bc990302e17da50020683dad4bf3ec977a17db9e03b6c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f5b4b79d524c82b7bc990302e17da50020683dad4bf3ec977a17db9e03b6c2->enter($__internal_e0f5b4b79d524c82b7bc990302e17da50020683dad4bf3ec977a17db9e03b6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_4520da7f83b073fed796bf97c04b869e58f5011fc6f651e1f24e346704599b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4520da7f83b073fed796bf97c04b869e58f5011fc6f651e1f24e346704599b77->enter($__internal_4520da7f83b073fed796bf97c04b869e58f5011fc6f651e1f24e346704599b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e0f5b4b79d524c82b7bc990302e17da50020683dad4bf3ec977a17db9e03b6c2->leave($__internal_e0f5b4b79d524c82b7bc990302e17da50020683dad4bf3ec977a17db9e03b6c2_prof);

        
        $__internal_4520da7f83b073fed796bf97c04b869e58f5011fc6f651e1f24e346704599b77->leave($__internal_4520da7f83b073fed796bf97c04b869e58f5011fc6f651e1f24e346704599b77_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0473185c2fe1f1fbafc084e0fc0d21216c068285c8d2a87fd21cd92f7dcbc36e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0473185c2fe1f1fbafc084e0fc0d21216c068285c8d2a87fd21cd92f7dcbc36e->enter($__internal_0473185c2fe1f1fbafc084e0fc0d21216c068285c8d2a87fd21cd92f7dcbc36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b36efad4b22e93d89c1513cca3a3e2c16ff219390ad26d211027432a68aac5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36efad4b22e93d89c1513cca3a3e2c16ff219390ad26d211027432a68aac5de->enter($__internal_b36efad4b22e93d89c1513cca3a3e2c16ff219390ad26d211027432a68aac5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b36efad4b22e93d89c1513cca3a3e2c16ff219390ad26d211027432a68aac5de->leave($__internal_b36efad4b22e93d89c1513cca3a3e2c16ff219390ad26d211027432a68aac5de_prof);

        
        $__internal_0473185c2fe1f1fbafc084e0fc0d21216c068285c8d2a87fd21cd92f7dcbc36e->leave($__internal_0473185c2fe1f1fbafc084e0fc0d21216c068285c8d2a87fd21cd92f7dcbc36e_prof);

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
