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
        $__internal_7ff51d6e44049749d04bb4bd1ee752b1f621c279cb5ca2a3c35fad3ef131dccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff51d6e44049749d04bb4bd1ee752b1f621c279cb5ca2a3c35fad3ef131dccb->enter($__internal_7ff51d6e44049749d04bb4bd1ee752b1f621c279cb5ca2a3c35fad3ef131dccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/research.html.twig"));

        $__internal_63d238d577010fa418e80e6970df93c0878660987943591eb92514b3c73c5347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d238d577010fa418e80e6970df93c0878660987943591eb92514b3c73c5347->enter($__internal_63d238d577010fa418e80e6970df93c0878660987943591eb92514b3c73c5347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/research.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ff51d6e44049749d04bb4bd1ee752b1f621c279cb5ca2a3c35fad3ef131dccb->leave($__internal_7ff51d6e44049749d04bb4bd1ee752b1f621c279cb5ca2a3c35fad3ef131dccb_prof);

        
        $__internal_63d238d577010fa418e80e6970df93c0878660987943591eb92514b3c73c5347->leave($__internal_63d238d577010fa418e80e6970df93c0878660987943591eb92514b3c73c5347_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_87e39f6ef63d250d7fe9f09196f74c2be1bd21b7207b10564e32aa6c30baebd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87e39f6ef63d250d7fe9f09196f74c2be1bd21b7207b10564e32aa6c30baebd7->enter($__internal_87e39f6ef63d250d7fe9f09196f74c2be1bd21b7207b10564e32aa6c30baebd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aa3553ad6ff68d1995ce1c49a76f7645d919a49cec9503c674dd6211adbe2b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa3553ad6ff68d1995ce1c49a76f7645d919a49cec9503c674dd6211adbe2b7c->enter($__internal_aa3553ad6ff68d1995ce1c49a76f7645d919a49cec9503c674dd6211adbe2b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Recherche";
        
        $__internal_aa3553ad6ff68d1995ce1c49a76f7645d919a49cec9503c674dd6211adbe2b7c->leave($__internal_aa3553ad6ff68d1995ce1c49a76f7645d919a49cec9503c674dd6211adbe2b7c_prof);

        
        $__internal_87e39f6ef63d250d7fe9f09196f74c2be1bd21b7207b10564e32aa6c30baebd7->leave($__internal_87e39f6ef63d250d7fe9f09196f74c2be1bd21b7207b10564e32aa6c30baebd7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3adb7e17453c5cd915c303ef1ac7130116b117f6f1bb9bc197248a00c1463c5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3adb7e17453c5cd915c303ef1ac7130116b117f6f1bb9bc197248a00c1463c5e->enter($__internal_3adb7e17453c5cd915c303ef1ac7130116b117f6f1bb9bc197248a00c1463c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10b69df7f1e853905c38a4b9be7b8e44a0b8c28e5ac06eed1de5f8f6f05cb745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b69df7f1e853905c38a4b9be7b8e44a0b8c28e5ac06eed1de5f8f6f05cb745->enter($__internal_10b69df7f1e853905c38a4b9be7b8e44a0b8c28e5ac06eed1de5f8f6f05cb745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_10b69df7f1e853905c38a4b9be7b8e44a0b8c28e5ac06eed1de5f8f6f05cb745->leave($__internal_10b69df7f1e853905c38a4b9be7b8e44a0b8c28e5ac06eed1de5f8f6f05cb745_prof);

        
        $__internal_3adb7e17453c5cd915c303ef1ac7130116b117f6f1bb9bc197248a00c1463c5e->leave($__internal_3adb7e17453c5cd915c303ef1ac7130116b117f6f1bb9bc197248a00c1463c5e_prof);

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

{% endblock %}", "research/research.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\research\\research.html.twig");
    }
}
