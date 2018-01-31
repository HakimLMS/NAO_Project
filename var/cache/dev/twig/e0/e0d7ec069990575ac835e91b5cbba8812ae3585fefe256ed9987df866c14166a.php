<?php

/* research/research.html.twig */
class __TwigTemplate_9b3bf040c3be46edf0979c44b36f3e55b837a52fbe064e6b9e876489eb738e98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "research/research.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_619545f2720c10a16e7ebef63949df2a13d8c1b76c4974d002de63de35c83c8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_619545f2720c10a16e7ebef63949df2a13d8c1b76c4974d002de63de35c83c8e->enter($__internal_619545f2720c10a16e7ebef63949df2a13d8c1b76c4974d002de63de35c83c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/research.html.twig"));

        $__internal_4ef59981d3fd5e9f31e1439b8c7001ea155759586602ecec2988abf6f6db6bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef59981d3fd5e9f31e1439b8c7001ea155759586602ecec2988abf6f6db6bad->enter($__internal_4ef59981d3fd5e9f31e1439b8c7001ea155759586602ecec2988abf6f6db6bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/research.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_619545f2720c10a16e7ebef63949df2a13d8c1b76c4974d002de63de35c83c8e->leave($__internal_619545f2720c10a16e7ebef63949df2a13d8c1b76c4974d002de63de35c83c8e_prof);

        
        $__internal_4ef59981d3fd5e9f31e1439b8c7001ea155759586602ecec2988abf6f6db6bad->leave($__internal_4ef59981d3fd5e9f31e1439b8c7001ea155759586602ecec2988abf6f6db6bad_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_af6ce4db59ecc38308f64652c5d781d427b67fca0f7d48cf9826ad3443ffda68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af6ce4db59ecc38308f64652c5d781d427b67fca0f7d48cf9826ad3443ffda68->enter($__internal_af6ce4db59ecc38308f64652c5d781d427b67fca0f7d48cf9826ad3443ffda68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9626d97f441fa1c77e4f24278c21687ebd3e33f4b5d6408323f2f3d2952864a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9626d97f441fa1c77e4f24278c21687ebd3e33f4b5d6408323f2f3d2952864a0->enter($__internal_9626d97f441fa1c77e4f24278c21687ebd3e33f4b5d6408323f2f3d2952864a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Recherche";
        
        $__internal_9626d97f441fa1c77e4f24278c21687ebd3e33f4b5d6408323f2f3d2952864a0->leave($__internal_9626d97f441fa1c77e4f24278c21687ebd3e33f4b5d6408323f2f3d2952864a0_prof);

        
        $__internal_af6ce4db59ecc38308f64652c5d781d427b67fca0f7d48cf9826ad3443ffda68->leave($__internal_af6ce4db59ecc38308f64652c5d781d427b67fca0f7d48cf9826ad3443ffda68_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6eb12f127bdb0f3e3b33475fa6f2ad230add7aedf968a1187187dd6bef4fdc70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eb12f127bdb0f3e3b33475fa6f2ad230add7aedf968a1187187dd6bef4fdc70->enter($__internal_6eb12f127bdb0f3e3b33475fa6f2ad230add7aedf968a1187187dd6bef4fdc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1a3d7fe44e8a225bc04c6a1669465434d896fdb7e2ef5f435dfd97a52d1008b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a3d7fe44e8a225bc04c6a1669465434d896fdb7e2ef5f435dfd97a52d1008b->enter($__internal_b1a3d7fe44e8a225bc04c6a1669465434d896fdb7e2ef5f435dfd97a52d1008b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start');
        echo "

\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        echo "

\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "vern_name", array()), 'row');
        echo "

\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "Rechercher", array()), 'row');
        echo "

\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'rest');
        echo "

\t";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), 'form_end');
        echo "

\t<div id=\"resultats-recherche\">
\t\t
\t</div>

";
        
        $__internal_b1a3d7fe44e8a225bc04c6a1669465434d896fdb7e2ef5f435dfd97a52d1008b->leave($__internal_b1a3d7fe44e8a225bc04c6a1669465434d896fdb7e2ef5f435dfd97a52d1008b_prof);

        
        $__internal_6eb12f127bdb0f3e3b33475fa6f2ad230add7aedf968a1187187dd6bef4fdc70->leave($__internal_6eb12f127bdb0f3e3b33475fa6f2ad230add7aedf968a1187187dd6bef4fdc70_prof);

    }

    public function getTemplateName()
    {
        return "research/research.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 17,  91 => 15,  86 => 13,  81 => 11,  76 => 9,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Recherche{% endblock %} 

{% block body %}

\t{{ form_start(form) }}

\t{{ form_errors(form) }}

\t{{ form_row(form.vern_name) }}

\t{{ form_row(form.Rechercher) }}

\t{{ form_rest(form) }}

\t{{ form_end(form) }}

\t<div id=\"resultats-recherche\">
\t\t
\t</div>

{% endblock %}", "research/research.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\research\\research.html.twig");
    }
}
