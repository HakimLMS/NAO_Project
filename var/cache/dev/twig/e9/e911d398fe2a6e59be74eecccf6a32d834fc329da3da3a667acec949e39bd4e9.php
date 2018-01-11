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
        $__internal_5bca63a07898669964a83277dd437d99e11510117fbc3be39a2e76fe01deeeb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bca63a07898669964a83277dd437d99e11510117fbc3be39a2e76fe01deeeb8->enter($__internal_5bca63a07898669964a83277dd437d99e11510117fbc3be39a2e76fe01deeeb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_ac34a96855d131e090d58f594e875c534139236b4fda6c325569ce0070f9e652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac34a96855d131e090d58f594e875c534139236b4fda6c325569ce0070f9e652->enter($__internal_ac34a96855d131e090d58f594e875c534139236b4fda6c325569ce0070f9e652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5bca63a07898669964a83277dd437d99e11510117fbc3be39a2e76fe01deeeb8->leave($__internal_5bca63a07898669964a83277dd437d99e11510117fbc3be39a2e76fe01deeeb8_prof);

        
        $__internal_ac34a96855d131e090d58f594e875c534139236b4fda6c325569ce0070f9e652->leave($__internal_ac34a96855d131e090d58f594e875c534139236b4fda6c325569ce0070f9e652_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_78ea2b8a9a8b11513c0833ca4241c8bf6eb84abd263bea8fbaf55df25bbd26c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78ea2b8a9a8b11513c0833ca4241c8bf6eb84abd263bea8fbaf55df25bbd26c1->enter($__internal_78ea2b8a9a8b11513c0833ca4241c8bf6eb84abd263bea8fbaf55df25bbd26c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a662e7e0a2e9f583d600e05987b2ca895ba34574dd10384b3cc014feea930ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a662e7e0a2e9f583d600e05987b2ca895ba34574dd10384b3cc014feea930ab5->enter($__internal_a662e7e0a2e9f583d600e05987b2ca895ba34574dd10384b3cc014feea930ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a662e7e0a2e9f583d600e05987b2ca895ba34574dd10384b3cc014feea930ab5->leave($__internal_a662e7e0a2e9f583d600e05987b2ca895ba34574dd10384b3cc014feea930ab5_prof);

        
        $__internal_78ea2b8a9a8b11513c0833ca4241c8bf6eb84abd263bea8fbaf55df25bbd26c1->leave($__internal_78ea2b8a9a8b11513c0833ca4241c8bf6eb84abd263bea8fbaf55df25bbd26c1_prof);

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
