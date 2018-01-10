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
        $__internal_d4d15ee1e903ad144a1ec37568adf3bb8d8fea3aed852140f9906ca1056040be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d15ee1e903ad144a1ec37568adf3bb8d8fea3aed852140f9906ca1056040be->enter($__internal_d4d15ee1e903ad144a1ec37568adf3bb8d8fea3aed852140f9906ca1056040be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_de6c2706df0eb1b862a1b79147391a9c8690759a3673a98432c805d44ed7052b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6c2706df0eb1b862a1b79147391a9c8690759a3673a98432c805d44ed7052b->enter($__internal_de6c2706df0eb1b862a1b79147391a9c8690759a3673a98432c805d44ed7052b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d4d15ee1e903ad144a1ec37568adf3bb8d8fea3aed852140f9906ca1056040be->leave($__internal_d4d15ee1e903ad144a1ec37568adf3bb8d8fea3aed852140f9906ca1056040be_prof);

        
        $__internal_de6c2706df0eb1b862a1b79147391a9c8690759a3673a98432c805d44ed7052b->leave($__internal_de6c2706df0eb1b862a1b79147391a9c8690759a3673a98432c805d44ed7052b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4aed75ebf9513d18175a41bfabb30c2f1f1865b64d636e2b6e787a6152fa543e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aed75ebf9513d18175a41bfabb30c2f1f1865b64d636e2b6e787a6152fa543e->enter($__internal_4aed75ebf9513d18175a41bfabb30c2f1f1865b64d636e2b6e787a6152fa543e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2ff4bec3892fbadc6046581c2b2fa570c0c327aa68c83b83c49d7458bd03268c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff4bec3892fbadc6046581c2b2fa570c0c327aa68c83b83c49d7458bd03268c->enter($__internal_2ff4bec3892fbadc6046581c2b2fa570c0c327aa68c83b83c49d7458bd03268c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2ff4bec3892fbadc6046581c2b2fa570c0c327aa68c83b83c49d7458bd03268c->leave($__internal_2ff4bec3892fbadc6046581c2b2fa570c0c327aa68c83b83c49d7458bd03268c_prof);

        
        $__internal_4aed75ebf9513d18175a41bfabb30c2f1f1865b64d636e2b6e787a6152fa543e->leave($__internal_4aed75ebf9513d18175a41bfabb30c2f1f1865b64d636e2b6e787a6152fa543e_prof);

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
