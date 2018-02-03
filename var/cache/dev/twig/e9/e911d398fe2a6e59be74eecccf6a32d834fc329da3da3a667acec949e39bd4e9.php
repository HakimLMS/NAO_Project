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
        $__internal_80b04d650970d9bd65694850bd26e1dcf7e17a56525c460946f5d68f94ad6bb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b04d650970d9bd65694850bd26e1dcf7e17a56525c460946f5d68f94ad6bb4->enter($__internal_80b04d650970d9bd65694850bd26e1dcf7e17a56525c460946f5d68f94ad6bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_a42ca313a13e9f8751fae5383e482bfe0e88e91d6206ced688a9b10f3f3b4286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42ca313a13e9f8751fae5383e482bfe0e88e91d6206ced688a9b10f3f3b4286->enter($__internal_a42ca313a13e9f8751fae5383e482bfe0e88e91d6206ced688a9b10f3f3b4286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_80b04d650970d9bd65694850bd26e1dcf7e17a56525c460946f5d68f94ad6bb4->leave($__internal_80b04d650970d9bd65694850bd26e1dcf7e17a56525c460946f5d68f94ad6bb4_prof);

        
        $__internal_a42ca313a13e9f8751fae5383e482bfe0e88e91d6206ced688a9b10f3f3b4286->leave($__internal_a42ca313a13e9f8751fae5383e482bfe0e88e91d6206ced688a9b10f3f3b4286_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae054bb8fff19b1cdf9971b0feb08271f1097dc371bb896c15b0fda04d21235e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae054bb8fff19b1cdf9971b0feb08271f1097dc371bb896c15b0fda04d21235e->enter($__internal_ae054bb8fff19b1cdf9971b0feb08271f1097dc371bb896c15b0fda04d21235e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d7790d89de2a865553fd6a30a2cb95c97bc6021daa6914d5a22100e987c01a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7790d89de2a865553fd6a30a2cb95c97bc6021daa6914d5a22100e987c01a36->enter($__internal_d7790d89de2a865553fd6a30a2cb95c97bc6021daa6914d5a22100e987c01a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d7790d89de2a865553fd6a30a2cb95c97bc6021daa6914d5a22100e987c01a36->leave($__internal_d7790d89de2a865553fd6a30a2cb95c97bc6021daa6914d5a22100e987c01a36_prof);

        
        $__internal_ae054bb8fff19b1cdf9971b0feb08271f1097dc371bb896c15b0fda04d21235e->leave($__internal_ae054bb8fff19b1cdf9971b0feb08271f1097dc371bb896c15b0fda04d21235e_prof);

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
