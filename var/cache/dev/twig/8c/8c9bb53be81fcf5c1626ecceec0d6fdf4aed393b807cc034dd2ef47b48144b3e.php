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
        $__internal_7e9509e9c6df9004cb5739712753b000f84c9b4eb69eaa221b6ae47ffb125f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e9509e9c6df9004cb5739712753b000f84c9b4eb69eaa221b6ae47ffb125f9a->enter($__internal_7e9509e9c6df9004cb5739712753b000f84c9b4eb69eaa221b6ae47ffb125f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $__internal_78b9cd78cca7c8b1a955cc3a24710d51ad165d138a61e4c11a12b2531f87b06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78b9cd78cca7c8b1a955cc3a24710d51ad165d138a61e4c11a12b2531f87b06d->enter($__internal_78b9cd78cca7c8b1a955cc3a24710d51ad165d138a61e4c11a12b2531f87b06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e9509e9c6df9004cb5739712753b000f84c9b4eb69eaa221b6ae47ffb125f9a->leave($__internal_7e9509e9c6df9004cb5739712753b000f84c9b4eb69eaa221b6ae47ffb125f9a_prof);

        
        $__internal_78b9cd78cca7c8b1a955cc3a24710d51ad165d138a61e4c11a12b2531f87b06d->leave($__internal_78b9cd78cca7c8b1a955cc3a24710d51ad165d138a61e4c11a12b2531f87b06d_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c46525ac61c0b01ea6a172d1c706541ea23db2086cc481ccceb4c7e5c5ce8e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c46525ac61c0b01ea6a172d1c706541ea23db2086cc481ccceb4c7e5c5ce8e19->enter($__internal_c46525ac61c0b01ea6a172d1c706541ea23db2086cc481ccceb4c7e5c5ce8e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ebffc0f42bc5754a5849ec9b71d541e076f083a3ebb2ceda02ceffc80eb82a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebffc0f42bc5754a5849ec9b71d541e076f083a3ebb2ceda02ceffc80eb82a80->enter($__internal_ebffc0f42bc5754a5849ec9b71d541e076f083a3ebb2ceda02ceffc80eb82a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ebffc0f42bc5754a5849ec9b71d541e076f083a3ebb2ceda02ceffc80eb82a80->leave($__internal_ebffc0f42bc5754a5849ec9b71d541e076f083a3ebb2ceda02ceffc80eb82a80_prof);

        
        $__internal_c46525ac61c0b01ea6a172d1c706541ea23db2086cc481ccceb4c7e5c5ce8e19->leave($__internal_c46525ac61c0b01ea6a172d1c706541ea23db2086cc481ccceb4c7e5c5ce8e19_prof);

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
{% endblock %}", "Administration/subscription.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Administration\\subscription.html.twig");
    }
}
