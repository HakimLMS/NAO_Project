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
        $__internal_a1596c841aba3b4aaa2fe602e2a9edb889d3644ef732ff93495984051588787c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1596c841aba3b4aaa2fe602e2a9edb889d3644ef732ff93495984051588787c->enter($__internal_a1596c841aba3b4aaa2fe602e2a9edb889d3644ef732ff93495984051588787c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_64694c04b7a171916e5bd5669e32abf4623f7e04b8707c8198a2779dc1ea9ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64694c04b7a171916e5bd5669e32abf4623f7e04b8707c8198a2779dc1ea9ee1->enter($__internal_64694c04b7a171916e5bd5669e32abf4623f7e04b8707c8198a2779dc1ea9ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a1596c841aba3b4aaa2fe602e2a9edb889d3644ef732ff93495984051588787c->leave($__internal_a1596c841aba3b4aaa2fe602e2a9edb889d3644ef732ff93495984051588787c_prof);

        
        $__internal_64694c04b7a171916e5bd5669e32abf4623f7e04b8707c8198a2779dc1ea9ee1->leave($__internal_64694c04b7a171916e5bd5669e32abf4623f7e04b8707c8198a2779dc1ea9ee1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_66de534189293ab4dadbf8001bd68bb94115dc41b6397d713f228553575c59bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66de534189293ab4dadbf8001bd68bb94115dc41b6397d713f228553575c59bc->enter($__internal_66de534189293ab4dadbf8001bd68bb94115dc41b6397d713f228553575c59bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_65c397804e094546ea6a42d75cc1c6bd1f77a9128ae1299205a6e08ca9eab066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c397804e094546ea6a42d75cc1c6bd1f77a9128ae1299205a6e08ca9eab066->enter($__internal_65c397804e094546ea6a42d75cc1c6bd1f77a9128ae1299205a6e08ca9eab066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_65c397804e094546ea6a42d75cc1c6bd1f77a9128ae1299205a6e08ca9eab066->leave($__internal_65c397804e094546ea6a42d75cc1c6bd1f77a9128ae1299205a6e08ca9eab066_prof);

        
        $__internal_66de534189293ab4dadbf8001bd68bb94115dc41b6397d713f228553575c59bc->leave($__internal_66de534189293ab4dadbf8001bd68bb94115dc41b6397d713f228553575c59bc_prof);

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
