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
        $__internal_26b9d16c96ba92239340bbf55a0dc137e6742e356aa2f3972f8a61459b42d168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26b9d16c96ba92239340bbf55a0dc137e6742e356aa2f3972f8a61459b42d168->enter($__internal_26b9d16c96ba92239340bbf55a0dc137e6742e356aa2f3972f8a61459b42d168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_2710c3f0230aa7ee62ec0c1b2a2d62a2a7370d4672aa4d777212e55d174ad606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2710c3f0230aa7ee62ec0c1b2a2d62a2a7370d4672aa4d777212e55d174ad606->enter($__internal_2710c3f0230aa7ee62ec0c1b2a2d62a2a7370d4672aa4d777212e55d174ad606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_26b9d16c96ba92239340bbf55a0dc137e6742e356aa2f3972f8a61459b42d168->leave($__internal_26b9d16c96ba92239340bbf55a0dc137e6742e356aa2f3972f8a61459b42d168_prof);

        
        $__internal_2710c3f0230aa7ee62ec0c1b2a2d62a2a7370d4672aa4d777212e55d174ad606->leave($__internal_2710c3f0230aa7ee62ec0c1b2a2d62a2a7370d4672aa4d777212e55d174ad606_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_042a1531ac3a80789c39598ecc6a9be0243370fba35aaa1906e21a8ffb623d21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042a1531ac3a80789c39598ecc6a9be0243370fba35aaa1906e21a8ffb623d21->enter($__internal_042a1531ac3a80789c39598ecc6a9be0243370fba35aaa1906e21a8ffb623d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_724b599d9d28bdc165a794d39b88ed13806c783b2cd9e4bf89cd0ddaf5ecda45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724b599d9d28bdc165a794d39b88ed13806c783b2cd9e4bf89cd0ddaf5ecda45->enter($__internal_724b599d9d28bdc165a794d39b88ed13806c783b2cd9e4bf89cd0ddaf5ecda45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_724b599d9d28bdc165a794d39b88ed13806c783b2cd9e4bf89cd0ddaf5ecda45->leave($__internal_724b599d9d28bdc165a794d39b88ed13806c783b2cd9e4bf89cd0ddaf5ecda45_prof);

        
        $__internal_042a1531ac3a80789c39598ecc6a9be0243370fba35aaa1906e21a8ffb623d21->leave($__internal_042a1531ac3a80789c39598ecc6a9be0243370fba35aaa1906e21a8ffb623d21_prof);

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
