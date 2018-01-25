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
        $__internal_23db00bec1fa43aa6416cab5b9effc18e2406ca81ab59a0c693fa11f619912bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23db00bec1fa43aa6416cab5b9effc18e2406ca81ab59a0c693fa11f619912bb->enter($__internal_23db00bec1fa43aa6416cab5b9effc18e2406ca81ab59a0c693fa11f619912bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $__internal_beced16d97d4558bde40edcf55c9237830ccbd3a2f59217698560dc7077f22bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beced16d97d4558bde40edcf55c9237830ccbd3a2f59217698560dc7077f22bb->enter($__internal_beced16d97d4558bde40edcf55c9237830ccbd3a2f59217698560dc7077f22bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23db00bec1fa43aa6416cab5b9effc18e2406ca81ab59a0c693fa11f619912bb->leave($__internal_23db00bec1fa43aa6416cab5b9effc18e2406ca81ab59a0c693fa11f619912bb_prof);

        
        $__internal_beced16d97d4558bde40edcf55c9237830ccbd3a2f59217698560dc7077f22bb->leave($__internal_beced16d97d4558bde40edcf55c9237830ccbd3a2f59217698560dc7077f22bb_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_217da544e1b710fd2846567e463990c340550eac1127a9f30446b7cd470efef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217da544e1b710fd2846567e463990c340550eac1127a9f30446b7cd470efef5->enter($__internal_217da544e1b710fd2846567e463990c340550eac1127a9f30446b7cd470efef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_333d94664a2f6818c64e38c434145bbb8f831299e364574a4c1c51bd1b58f2ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333d94664a2f6818c64e38c434145bbb8f831299e364574a4c1c51bd1b58f2ee->enter($__internal_333d94664a2f6818c64e38c434145bbb8f831299e364574a4c1c51bd1b58f2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_333d94664a2f6818c64e38c434145bbb8f831299e364574a4c1c51bd1b58f2ee->leave($__internal_333d94664a2f6818c64e38c434145bbb8f831299e364574a4c1c51bd1b58f2ee_prof);

        
        $__internal_217da544e1b710fd2846567e463990c340550eac1127a9f30446b7cd470efef5->leave($__internal_217da544e1b710fd2846567e463990c340550eac1127a9f30446b7cd470efef5_prof);

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
