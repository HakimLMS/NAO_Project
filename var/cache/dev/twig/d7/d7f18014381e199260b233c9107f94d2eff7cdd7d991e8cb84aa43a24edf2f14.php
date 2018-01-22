<?php

/* Administration/modifyUser.html.twig */
class __TwigTemplate_8a33966796aac74b38105bccb9d1fad348643fac5e5ca66f7d23fe5a94f3396d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "Administration/modifyUser.html.twig", 2);
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
        $__internal_6a5631fd062813310c1d0db108168e6f95ca70155e577f18bcf9ce6951189c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a5631fd062813310c1d0db108168e6f95ca70155e577f18bcf9ce6951189c98->enter($__internal_6a5631fd062813310c1d0db108168e6f95ca70155e577f18bcf9ce6951189c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/modifyUser.html.twig"));

        $__internal_5a5da47a91ad53dd19952db2cdb16339bccaef753923463ed4c79a5cfbffb5d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5da47a91ad53dd19952db2cdb16339bccaef753923463ed4c79a5cfbffb5d4->enter($__internal_5a5da47a91ad53dd19952db2cdb16339bccaef753923463ed4c79a5cfbffb5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/modifyUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a5631fd062813310c1d0db108168e6f95ca70155e577f18bcf9ce6951189c98->leave($__internal_6a5631fd062813310c1d0db108168e6f95ca70155e577f18bcf9ce6951189c98_prof);

        
        $__internal_5a5da47a91ad53dd19952db2cdb16339bccaef753923463ed4c79a5cfbffb5d4->leave($__internal_5a5da47a91ad53dd19952db2cdb16339bccaef753923463ed4c79a5cfbffb5d4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5247b92bea86a6745b751bfffbe2bf6a58259ef70e5f75e2fbf44b3f9f63d87c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5247b92bea86a6745b751bfffbe2bf6a58259ef70e5f75e2fbf44b3f9f63d87c->enter($__internal_5247b92bea86a6745b751bfffbe2bf6a58259ef70e5f75e2fbf44b3f9f63d87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa658ed348eb3c80449d985ed7757269c94565b9e793e99d66ef98375077a78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa658ed348eb3c80449d985ed7757269c94565b9e793e99d66ef98375077a78f->enter($__internal_aa658ed348eb3c80449d985ed7757269c94565b9e793e99d66ef98375077a78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_aa658ed348eb3c80449d985ed7757269c94565b9e793e99d66ef98375077a78f->leave($__internal_aa658ed348eb3c80449d985ed7757269c94565b9e793e99d66ef98375077a78f_prof);

        
        $__internal_5247b92bea86a6745b751bfffbe2bf6a58259ef70e5f75e2fbf44b3f9f63d87c->leave($__internal_5247b92bea86a6745b751bfffbe2bf6a58259ef70e5f75e2fbf44b3f9f63d87c_prof);

    }

    public function getTemplateName()
    {
        return "Administration/modifyUser.html.twig";
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
{% endblock %}
", "Administration/modifyUser.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Administration\\modifyUser.html.twig");
    }
}
