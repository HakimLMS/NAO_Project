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
        $__internal_5b89be21b0c5d376ffca2dc2b082f699cad5c54f42101ef1e740f1ea2852ce54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b89be21b0c5d376ffca2dc2b082f699cad5c54f42101ef1e740f1ea2852ce54->enter($__internal_5b89be21b0c5d376ffca2dc2b082f699cad5c54f42101ef1e740f1ea2852ce54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $__internal_73d4232435faae3a8314acb0fe102790ae2bf9bf5563e6b6ca406bf84b29cea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d4232435faae3a8314acb0fe102790ae2bf9bf5563e6b6ca406bf84b29cea8->enter($__internal_73d4232435faae3a8314acb0fe102790ae2bf9bf5563e6b6ca406bf84b29cea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b89be21b0c5d376ffca2dc2b082f699cad5c54f42101ef1e740f1ea2852ce54->leave($__internal_5b89be21b0c5d376ffca2dc2b082f699cad5c54f42101ef1e740f1ea2852ce54_prof);

        
        $__internal_73d4232435faae3a8314acb0fe102790ae2bf9bf5563e6b6ca406bf84b29cea8->leave($__internal_73d4232435faae3a8314acb0fe102790ae2bf9bf5563e6b6ca406bf84b29cea8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f8a4582cfa6f6cf946adf8677b44337125541e1ffae28e3d961be7d51b38214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f8a4582cfa6f6cf946adf8677b44337125541e1ffae28e3d961be7d51b38214->enter($__internal_9f8a4582cfa6f6cf946adf8677b44337125541e1ffae28e3d961be7d51b38214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55ac2fad808fab0ff032c5a8a13ac905dc6eda0586e53ae06b2f292ac0ac887b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ac2fad808fab0ff032c5a8a13ac905dc6eda0586e53ae06b2f292ac0ac887b->enter($__internal_55ac2fad808fab0ff032c5a8a13ac905dc6eda0586e53ae06b2f292ac0ac887b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_55ac2fad808fab0ff032c5a8a13ac905dc6eda0586e53ae06b2f292ac0ac887b->leave($__internal_55ac2fad808fab0ff032c5a8a13ac905dc6eda0586e53ae06b2f292ac0ac887b_prof);

        
        $__internal_9f8a4582cfa6f6cf946adf8677b44337125541e1ffae28e3d961be7d51b38214->leave($__internal_9f8a4582cfa6f6cf946adf8677b44337125541e1ffae28e3d961be7d51b38214_prof);

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
