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
        $__internal_f8f82aec2c789cc22f96ebb2c9c0980f92de396c1594273d0c394b8ff7ca4ebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f82aec2c789cc22f96ebb2c9c0980f92de396c1594273d0c394b8ff7ca4ebd->enter($__internal_f8f82aec2c789cc22f96ebb2c9c0980f92de396c1594273d0c394b8ff7ca4ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/research.html.twig"));

        $__internal_68b28c02f82be389e94ab3fb2b43c833b393308ce84d2cc50acc058e7a617306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b28c02f82be389e94ab3fb2b43c833b393308ce84d2cc50acc058e7a617306->enter($__internal_68b28c02f82be389e94ab3fb2b43c833b393308ce84d2cc50acc058e7a617306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/research.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8f82aec2c789cc22f96ebb2c9c0980f92de396c1594273d0c394b8ff7ca4ebd->leave($__internal_f8f82aec2c789cc22f96ebb2c9c0980f92de396c1594273d0c394b8ff7ca4ebd_prof);

        
        $__internal_68b28c02f82be389e94ab3fb2b43c833b393308ce84d2cc50acc058e7a617306->leave($__internal_68b28c02f82be389e94ab3fb2b43c833b393308ce84d2cc50acc058e7a617306_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_86fdff8c1cb30801bb31c41940c0fbda60420c6ebdaa4f63b273aa2fa660e917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86fdff8c1cb30801bb31c41940c0fbda60420c6ebdaa4f63b273aa2fa660e917->enter($__internal_86fdff8c1cb30801bb31c41940c0fbda60420c6ebdaa4f63b273aa2fa660e917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d3a3507d8c0123cda6507add99d2253768c4b887066780c98b925d85e2ad5d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a3507d8c0123cda6507add99d2253768c4b887066780c98b925d85e2ad5d79->enter($__internal_d3a3507d8c0123cda6507add99d2253768c4b887066780c98b925d85e2ad5d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Recherche";
        
        $__internal_d3a3507d8c0123cda6507add99d2253768c4b887066780c98b925d85e2ad5d79->leave($__internal_d3a3507d8c0123cda6507add99d2253768c4b887066780c98b925d85e2ad5d79_prof);

        
        $__internal_86fdff8c1cb30801bb31c41940c0fbda60420c6ebdaa4f63b273aa2fa660e917->leave($__internal_86fdff8c1cb30801bb31c41940c0fbda60420c6ebdaa4f63b273aa2fa660e917_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_af64f15050b51aecb85104ae18c772fe1e2b403c57a691a324779ee5027cde00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af64f15050b51aecb85104ae18c772fe1e2b403c57a691a324779ee5027cde00->enter($__internal_af64f15050b51aecb85104ae18c772fe1e2b403c57a691a324779ee5027cde00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_395b75a59eb74dd7e89d5c12c0b479aeff948d53d65aa0b4a579868185256c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395b75a59eb74dd7e89d5c12c0b479aeff948d53d65aa0b4a579868185256c1e->enter($__internal_395b75a59eb74dd7e89d5c12c0b479aeff948d53d65aa0b4a579868185256c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container-fluid\" id=\"research\">
\t<div class=\"white-filter\">
\t\t<div class=\"container\" id=\"research-form\">
\t\t\t
\t\t\t";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_start');
        echo "

\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'errors');
        echo "

\t\t\t<div class=\"form-row\">
\t\t\t\t<div class=\"form-group col-12 col-md-10\">
\t\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "vern_name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Votre recherche...")));
        // line 19
        echo "
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group col-12 col-md-2\">
\t\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "Rechercher", array()), 'widget', array("attr" => array("class" => "btn")));
        // line 24
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'form_end');
        echo "

\t\t</div>
\t</div>
</div>\t

";
        
        $__internal_395b75a59eb74dd7e89d5c12c0b479aeff948d53d65aa0b4a579868185256c1e->leave($__internal_395b75a59eb74dd7e89d5c12c0b479aeff948d53d65aa0b4a579868185256c1e_prof);

        
        $__internal_af64f15050b51aecb85104ae18c772fe1e2b403c57a691a324779ee5027cde00->leave($__internal_af64f15050b51aecb85104ae18c772fe1e2b403c57a691a324779ee5027cde00_prof);

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
        return array (  103 => 28,  97 => 24,  95 => 23,  89 => 19,  87 => 17,  80 => 13,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Recherche{% endblock %} 

{% block body %}

<div class=\"container-fluid\" id=\"research\">
\t<div class=\"white-filter\">
\t\t<div class=\"container\" id=\"research-form\">
\t\t\t
\t\t\t{{ form_start(form) }}

\t\t\t{{ form_errors(form) }}

\t\t\t<div class=\"form-row\">
\t\t\t\t<div class=\"form-group col-12 col-md-10\">
\t\t\t\t\t{{ form_widget(form.vern_name, {'attr': {
\t\t\t\t\t'class': 'form-control',
\t\t\t\t\t'placeholder': 'Votre recherche...'}}) }}
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group col-12 col-md-2\">
\t\t\t\t\t{{ form_widget(form.Rechercher, {'attr': {
\t\t\t\t\t'class': 'btn'}}) }}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{{ form_end(form) }}

\t\t</div>
\t</div>
</div>\t

{% endblock %}", "research/research.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\research\\research.html.twig");
    }
}
