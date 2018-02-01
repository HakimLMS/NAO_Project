<?php

/* Administration/subscription.html.twig */
class __TwigTemplate_6e183341ffb202b843e0fd7d7584ec561e2eea4e208810f8cd5f91b69294ede7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Administration/subscription.html.twig", 1);
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
        $__internal_47d4b160e080f11d10b1b7e70b7ccae99aca820a82625a659fdfeb4247d4dd9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d4b160e080f11d10b1b7e70b7ccae99aca820a82625a659fdfeb4247d4dd9f->enter($__internal_47d4b160e080f11d10b1b7e70b7ccae99aca820a82625a659fdfeb4247d4dd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $__internal_64a26dfc5f190862ed465202dae616c7a9ba3b0634bde315f619084205c92ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a26dfc5f190862ed465202dae616c7a9ba3b0634bde315f619084205c92ee0->enter($__internal_64a26dfc5f190862ed465202dae616c7a9ba3b0634bde315f619084205c92ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47d4b160e080f11d10b1b7e70b7ccae99aca820a82625a659fdfeb4247d4dd9f->leave($__internal_47d4b160e080f11d10b1b7e70b7ccae99aca820a82625a659fdfeb4247d4dd9f_prof);

        
        $__internal_64a26dfc5f190862ed465202dae616c7a9ba3b0634bde315f619084205c92ee0->leave($__internal_64a26dfc5f190862ed465202dae616c7a9ba3b0634bde315f619084205c92ee0_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_93fd7e3baa6c5e421ace4cf408fbd6c0bafc24b0f4b5f6c34528eea5d137a1e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93fd7e3baa6c5e421ace4cf408fbd6c0bafc24b0f4b5f6c34528eea5d137a1e0->enter($__internal_93fd7e3baa6c5e421ace4cf408fbd6c0bafc24b0f4b5f6c34528eea5d137a1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d5a40a25f556edd70ab4370ad4b432fb155348f6ba5ec76fc2a79d927ac413c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5a40a25f556edd70ab4370ad4b432fb155348f6ba5ec76fc2a79d927ac413c->enter($__internal_3d5a40a25f556edd70ab4370ad4b432fb155348f6ba5ec76fc2a79d927ac413c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_3d5a40a25f556edd70ab4370ad4b432fb155348f6ba5ec76fc2a79d927ac413c->leave($__internal_3d5a40a25f556edd70ab4370ad4b432fb155348f6ba5ec76fc2a79d927ac413c_prof);

        
        $__internal_93fd7e3baa6c5e421ace4cf408fbd6c0bafc24b0f4b5f6c34528eea5d137a1e0->leave($__internal_93fd7e3baa6c5e421ace4cf408fbd6c0bafc24b0f4b5f6c34528eea5d137a1e0_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_65229be8d2cf2fc26a5ca196661397a6e54bb7ed820804740cc4462eda3ad55a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65229be8d2cf2fc26a5ca196661397a6e54bb7ed820804740cc4462eda3ad55a->enter($__internal_65229be8d2cf2fc26a5ca196661397a6e54bb7ed820804740cc4462eda3ad55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc3cc2c5714b35f5e37c9f1649a0b64fd745b963821bd37736758db347e64b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc3cc2c5714b35f5e37c9f1649a0b64fd745b963821bd37736758db347e64b86->enter($__internal_dc3cc2c5714b35f5e37c9f1649a0b64fd745b963821bd37736758db347e64b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"container-fluid\" id=\"subscribe\">
\t\t<div class=\"white-filter\">
\t\t\t
\t\t    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 10, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 11
            echo "\t\t        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
            echo "</li>
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"offset-1 col-10 offset-md-6 col-md-6 well\" id=\"subscribe-form\">
\t\t\t\t\t\t<h3>Devenir membre</h3>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), 'form_start');
        echo "

\t\t\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'errors');
        echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "type", array()), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t<div class=\"form-group col-12 col-md-6\">
\t\t\t\t\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "lastname", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "lastname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom")));
        // line 32
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group col-12 col-md-6\">
\t\t\t\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "firstname", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), "firstname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prénom")));
        // line 39
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->getSourceContext()); })()), "password", array()), "first", array()), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->getSourceContext()); })()), "password", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "******")));
        // line 47
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), "password", array()), "second", array()), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()), "password", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "******")));
        // line 54
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t<div class=\"form-group col-12 col-md-6\">
\t\t\t\t\t\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->getSourceContext()); })()), "birth", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->getSourceContext()); })()), "birth", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group col-12 col-md-6\">
\t\t\t\t\t\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->getSourceContext()); })()), "email", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "exemple@gmail.com")));
        // line 67
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- ** CHECKBOXES ** -->

\t\t\t\t\t\t<div class=\"form-check offset-md-2 col-md-8\">
\t\t\t\t\t\t  ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->getSourceContext()); })()), "member", array()), 'widget', array("attr" => array("class" => "form-check-input")));
        echo "
\t\t\t\t\t\t  ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), "member", array()), 'label');
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-check offset-md-2 col-md-8\">
\t\t\t\t\t\t  ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->getSourceContext()); })()), "newsletter", array()), 'widget', array("attr" => array("class" => "form-check-input")));
        echo "
\t\t\t\t\t\t  ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->getSourceContext()); })()), "newsletter", array()), 'label');
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-check offset-md-2 col-md-8\" id=\"last-checkbox\">
\t\t\t\t\t\t  ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->getSourceContext()); })()), "conditions", array()), 'widget', array("attr" => array("class" => "form-check-input")));
        echo "
\t\t\t\t\t\t  ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 85, $this->getSourceContext()); })()), "conditions", array()), 'label');
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), "Inscription", array()), 'row', array("attr" => array("class" => "btn")));
        echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 90, $this->getSourceContext()); })()), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>\t
\t</div>
";
        
        $__internal_dc3cc2c5714b35f5e37c9f1649a0b64fd745b963821bd37736758db347e64b86->leave($__internal_dc3cc2c5714b35f5e37c9f1649a0b64fd745b963821bd37736758db347e64b86_prof);

        
        $__internal_65229be8d2cf2fc26a5ca196661397a6e54bb7ed820804740cc4462eda3ad55a->leave($__internal_65229be8d2cf2fc26a5ca196661397a6e54bb7ed820804740cc4462eda3ad55a_prof);

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
        return array (  229 => 90,  224 => 88,  218 => 85,  214 => 84,  207 => 80,  203 => 79,  196 => 75,  192 => 74,  183 => 67,  181 => 65,  177 => 64,  170 => 60,  166 => 59,  159 => 54,  157 => 52,  153 => 51,  147 => 47,  145 => 45,  141 => 44,  134 => 39,  132 => 37,  128 => 36,  122 => 32,  120 => 30,  116 => 29,  108 => 24,  104 => 23,  98 => 20,  93 => 18,  86 => 13,  77 => 11,  73 => 10,  68 => 7,  59 => 6,  41 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block title %}Inscription{% endblock %}

{% block body %}
\t<div class=\"container-fluid\" id=\"subscribe\">
\t\t<div class=\"white-filter\">
\t\t\t
\t\t    {% for error in errors %}
\t\t        <li>{{ error.message }}</li>
\t\t    {% endfor %}
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"offset-1 col-10 offset-md-6 col-md-6 well\" id=\"subscribe-form\">
\t\t\t\t\t\t<h3>Devenir membre</h3>
\t\t\t\t\t\t
\t\t\t\t\t\t{{ form_start(form) }}

\t\t\t\t\t\t{{ form_errors(form) }}
\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.type) }}
\t\t\t\t\t\t\t{{ form_widget(form.type, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t<div class=\"form-group col-12 col-md-6\">
\t\t\t\t\t\t\t\t{{ form_label(form.lastname) }}
\t\t\t\t\t\t\t\t{{ form_widget(form.lastname, {'attr': {
\t\t\t\t\t\t\t\t'class': 'form-control',
\t\t\t\t\t\t\t\t'placeholder': 'Nom'}}) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group col-12 col-md-6\">
\t\t\t\t\t\t\t\t{{ form_label(form.firstname) }}
\t\t\t\t\t\t\t\t{{ form_widget(form.firstname, {'attr': {
\t\t\t\t\t\t\t\t'class': 'form-control',
\t\t\t\t\t\t\t\t'placeholder': 'Prénom'}}) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.password.first) }}
\t\t\t\t\t\t\t{{ form_widget(form.password.first, {'attr': {
\t\t\t\t\t\t\t'class': 'form-control',
\t\t\t\t\t\t\t'placeholder': '******'}}) }}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_label(form.password.second) }}
\t\t\t\t\t\t\t{{ form_widget(form.password.second, {'attr': {
\t\t\t\t\t\t\t'class': 'form-control',
\t\t\t\t\t\t\t'placeholder': '******'}}) }}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t<div class=\"form-group col-12 col-md-6\">
\t\t\t\t\t\t\t\t{{ form_label(form.birth) }}
\t\t\t\t\t\t\t\t{{ form_widget(form.birth, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group col-12 col-md-6\">
\t\t\t\t\t\t\t\t{{ form_label(form.email) }}
\t\t\t\t\t\t\t\t{{ form_widget(form.email, {'attr': {
\t\t\t\t\t\t\t\t'class': 'form-control',
\t\t\t\t\t\t\t\t'placeholder': 'exemple@gmail.com'}}) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- ** CHECKBOXES ** -->

\t\t\t\t\t\t<div class=\"form-check offset-md-2 col-md-8\">
\t\t\t\t\t\t  {{ form_widget(form.member, {'attr': {'class': 'form-check-input'}}) }}
\t\t\t\t\t\t  {{ form_label(form.member) }}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-check offset-md-2 col-md-8\">
\t\t\t\t\t\t  {{ form_widget(form.newsletter, {'attr': {'class': 'form-check-input'}}) }}
\t\t\t\t\t\t  {{ form_label(form.newsletter) }}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-check offset-md-2 col-md-8\" id=\"last-checkbox\">
\t\t\t\t\t\t  {{ form_widget(form.conditions, {'attr': {'class': 'form-check-input'}}) }}
\t\t\t\t\t\t  {{ form_label(form.conditions) }}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t{{ form_row(form.Inscription, {'attr': {'class': 'btn'}}) }}
\t\t\t\t\t\t\t
\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>\t
\t</div>
{% endblock %}", "Administration/subscription.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Administration\\subscription.html.twig");
    }
}
