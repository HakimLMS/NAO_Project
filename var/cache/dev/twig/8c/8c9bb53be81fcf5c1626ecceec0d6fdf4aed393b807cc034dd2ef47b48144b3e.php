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
        $__internal_675abc2015b0db03814807f8c01e9997e0851c552951605cba32de3238db6a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_675abc2015b0db03814807f8c01e9997e0851c552951605cba32de3238db6a32->enter($__internal_675abc2015b0db03814807f8c01e9997e0851c552951605cba32de3238db6a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $__internal_75c26b2443786aed4d5b1cdf80648076fcd841137b9bac341351877089b80ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c26b2443786aed4d5b1cdf80648076fcd841137b9bac341351877089b80ae6->enter($__internal_75c26b2443786aed4d5b1cdf80648076fcd841137b9bac341351877089b80ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_675abc2015b0db03814807f8c01e9997e0851c552951605cba32de3238db6a32->leave($__internal_675abc2015b0db03814807f8c01e9997e0851c552951605cba32de3238db6a32_prof);

        
        $__internal_75c26b2443786aed4d5b1cdf80648076fcd841137b9bac341351877089b80ae6->leave($__internal_75c26b2443786aed4d5b1cdf80648076fcd841137b9bac341351877089b80ae6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bcf767d152655b729518d55116093aa17365dba96457e9a56447e1f31beafd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bcf767d152655b729518d55116093aa17365dba96457e9a56447e1f31beafd8->enter($__internal_8bcf767d152655b729518d55116093aa17365dba96457e9a56447e1f31beafd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ff376dc027eff6134bbb596d7311c552d0e7e8a7a65bbc33029dad7340f4526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff376dc027eff6134bbb596d7311c552d0e7e8a7a65bbc33029dad7340f4526->enter($__internal_8ff376dc027eff6134bbb596d7311c552d0e7e8a7a65bbc33029dad7340f4526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 5, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 6
            echo "        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_8ff376dc027eff6134bbb596d7311c552d0e7e8a7a65bbc33029dad7340f4526->leave($__internal_8ff376dc027eff6134bbb596d7311c552d0e7e8a7a65bbc33029dad7340f4526_prof);

        
        $__internal_8bcf767d152655b729518d55116093aa17365dba96457e9a56447e1f31beafd8->leave($__internal_8bcf767d152655b729518d55116093aa17365dba96457e9a56447e1f31beafd8_prof);

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
        return array (  67 => 9,  63 => 8,  54 => 6,  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}
    {% for error in errors %}
        <li>{{ error.message }}</li>
    {% endfor %}
{{ form_start(form) }}
{{ form_end(form) }}
{% endblock %}", "Administration/subscription.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\Administration\\subscription.html.twig");
    }
}
