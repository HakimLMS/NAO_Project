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
        $__internal_3f4e38a498075982e1c5edaa86b98165f2f2298b19202bf94932a57879b6c046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f4e38a498075982e1c5edaa86b98165f2f2298b19202bf94932a57879b6c046->enter($__internal_3f4e38a498075982e1c5edaa86b98165f2f2298b19202bf94932a57879b6c046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_4bd8c4baf759801a7029a40b47b2dc79ebf03dd5234398d94484be5157b02a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd8c4baf759801a7029a40b47b2dc79ebf03dd5234398d94484be5157b02a79->enter($__internal_4bd8c4baf759801a7029a40b47b2dc79ebf03dd5234398d94484be5157b02a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3f4e38a498075982e1c5edaa86b98165f2f2298b19202bf94932a57879b6c046->leave($__internal_3f4e38a498075982e1c5edaa86b98165f2f2298b19202bf94932a57879b6c046_prof);

        
        $__internal_4bd8c4baf759801a7029a40b47b2dc79ebf03dd5234398d94484be5157b02a79->leave($__internal_4bd8c4baf759801a7029a40b47b2dc79ebf03dd5234398d94484be5157b02a79_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cec79ae95c9a7686723e852242d9b26d10e359af0d53fdedb22832afa1ff9fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cec79ae95c9a7686723e852242d9b26d10e359af0d53fdedb22832afa1ff9fec->enter($__internal_cec79ae95c9a7686723e852242d9b26d10e359af0d53fdedb22832afa1ff9fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a7a1b152b32881701ba0a30668e0c0566111bedbb2c2ede4063a0cfe2eaa8fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a1b152b32881701ba0a30668e0c0566111bedbb2c2ede4063a0cfe2eaa8fea->enter($__internal_a7a1b152b32881701ba0a30668e0c0566111bedbb2c2ede4063a0cfe2eaa8fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a7a1b152b32881701ba0a30668e0c0566111bedbb2c2ede4063a0cfe2eaa8fea->leave($__internal_a7a1b152b32881701ba0a30668e0c0566111bedbb2c2ede4063a0cfe2eaa8fea_prof);

        
        $__internal_cec79ae95c9a7686723e852242d9b26d10e359af0d53fdedb22832afa1ff9fec->leave($__internal_cec79ae95c9a7686723e852242d9b26d10e359af0d53fdedb22832afa1ff9fec_prof);

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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
