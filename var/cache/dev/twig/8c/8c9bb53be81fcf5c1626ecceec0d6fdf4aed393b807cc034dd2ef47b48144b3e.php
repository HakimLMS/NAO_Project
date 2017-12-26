<?php

/* Administration/subscription.html.twig */
class __TwigTemplate_6e183341ffb202b843e0fd7d7584ec561e2eea4e208810f8cd5f91b69294ede7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "Administration/subscription.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72749b8577a9155ae2089e34dc496a5663d4f1986b5e8ff07b11450bd1c3537f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72749b8577a9155ae2089e34dc496a5663d4f1986b5e8ff07b11450bd1c3537f->enter($__internal_72749b8577a9155ae2089e34dc496a5663d4f1986b5e8ff07b11450bd1c3537f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $__internal_df74312b6ebbcf2f5608f9dbeca38c33e0d08a1e582fcdb6203a3ba58dc832d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df74312b6ebbcf2f5608f9dbeca38c33e0d08a1e582fcdb6203a3ba58dc832d8->enter($__internal_df74312b6ebbcf2f5608f9dbeca38c33e0d08a1e582fcdb6203a3ba58dc832d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72749b8577a9155ae2089e34dc496a5663d4f1986b5e8ff07b11450bd1c3537f->leave($__internal_72749b8577a9155ae2089e34dc496a5663d4f1986b5e8ff07b11450bd1c3537f_prof);

        
        $__internal_df74312b6ebbcf2f5608f9dbeca38c33e0d08a1e582fcdb6203a3ba58dc832d8->leave($__internal_df74312b6ebbcf2f5608f9dbeca38c33e0d08a1e582fcdb6203a3ba58dc832d8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec9f7b19c3e7df58a33ac086b9c24d8deea2947f4ae080195d53fb0fa3a51a2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec9f7b19c3e7df58a33ac086b9c24d8deea2947f4ae080195d53fb0fa3a51a2d->enter($__internal_ec9f7b19c3e7df58a33ac086b9c24d8deea2947f4ae080195d53fb0fa3a51a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f9a5a842de05132c7d9be771b0cd217062ec15c5f20c79df44b5b5f2e43d2d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9a5a842de05132c7d9be771b0cd217062ec15c5f20c79df44b5b5f2e43d2d7->enter($__internal_0f9a5a842de05132c7d9be771b0cd217062ec15c5f20c79df44b5b5f2e43d2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_0f9a5a842de05132c7d9be771b0cd217062ec15c5f20c79df44b5b5f2e43d2d7->leave($__internal_0f9a5a842de05132c7d9be771b0cd217062ec15c5f20c79df44b5b5f2e43d2d7_prof);

        
        $__internal_ec9f7b19c3e7df58a33ac086b9c24d8deea2947f4ae080195d53fb0fa3a51a2d->leave($__internal_ec9f7b19c3e7df58a33ac086b9c24d8deea2947f4ae080195d53fb0fa3a51a2d_prof);

    }

    public function getTemplateName()
    {
        return "Administration/subscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}
{{ form_start(form) }}
{{ form_end(form) }}
{% endblock %}", "Administration/subscription.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Administration\\subscription.html.twig");
    }
}
