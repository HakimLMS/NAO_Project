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
        $__internal_bbce40aadf621ca91bc1824120dfb28ae208ef604ded8e6747b6a8ce46a6545b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbce40aadf621ca91bc1824120dfb28ae208ef604ded8e6747b6a8ce46a6545b->enter($__internal_bbce40aadf621ca91bc1824120dfb28ae208ef604ded8e6747b6a8ce46a6545b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_fe59705228be4c272e4a7e9dd365b4c150fa6369c1a302c12636687bf0b65510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe59705228be4c272e4a7e9dd365b4c150fa6369c1a302c12636687bf0b65510->enter($__internal_fe59705228be4c272e4a7e9dd365b4c150fa6369c1a302c12636687bf0b65510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bbce40aadf621ca91bc1824120dfb28ae208ef604ded8e6747b6a8ce46a6545b->leave($__internal_bbce40aadf621ca91bc1824120dfb28ae208ef604ded8e6747b6a8ce46a6545b_prof);

        
        $__internal_fe59705228be4c272e4a7e9dd365b4c150fa6369c1a302c12636687bf0b65510->leave($__internal_fe59705228be4c272e4a7e9dd365b4c150fa6369c1a302c12636687bf0b65510_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f940d42b69215be24045b872e3b6e69ed515765d8957f953834455a0ac5da7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f940d42b69215be24045b872e3b6e69ed515765d8957f953834455a0ac5da7a->enter($__internal_0f940d42b69215be24045b872e3b6e69ed515765d8957f953834455a0ac5da7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_811497b772955ce58463834f77fcbad68890f715ad6c571e14a363b6ff0037b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811497b772955ce58463834f77fcbad68890f715ad6c571e14a363b6ff0037b1->enter($__internal_811497b772955ce58463834f77fcbad68890f715ad6c571e14a363b6ff0037b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_811497b772955ce58463834f77fcbad68890f715ad6c571e14a363b6ff0037b1->leave($__internal_811497b772955ce58463834f77fcbad68890f715ad6c571e14a363b6ff0037b1_prof);

        
        $__internal_0f940d42b69215be24045b872e3b6e69ed515765d8957f953834455a0ac5da7a->leave($__internal_0f940d42b69215be24045b872e3b6e69ed515765d8957f953834455a0ac5da7a_prof);

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
