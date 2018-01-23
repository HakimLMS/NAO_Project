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
        $__internal_b86f1a70a748e0f40f5b55aadd0af3bcde06e41006928cff056c0c6cb95acdcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b86f1a70a748e0f40f5b55aadd0af3bcde06e41006928cff056c0c6cb95acdcf->enter($__internal_b86f1a70a748e0f40f5b55aadd0af3bcde06e41006928cff056c0c6cb95acdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $__internal_ef46b66efab3fab575d48ab860d7c17281ca372e18e7f7d08b8659fefc37ae5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef46b66efab3fab575d48ab860d7c17281ca372e18e7f7d08b8659fefc37ae5a->enter($__internal_ef46b66efab3fab575d48ab860d7c17281ca372e18e7f7d08b8659fefc37ae5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b86f1a70a748e0f40f5b55aadd0af3bcde06e41006928cff056c0c6cb95acdcf->leave($__internal_b86f1a70a748e0f40f5b55aadd0af3bcde06e41006928cff056c0c6cb95acdcf_prof);

        
        $__internal_ef46b66efab3fab575d48ab860d7c17281ca372e18e7f7d08b8659fefc37ae5a->leave($__internal_ef46b66efab3fab575d48ab860d7c17281ca372e18e7f7d08b8659fefc37ae5a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_958670c429225b7160e89bf754fa102b275b44241b0078f66d3ae9652a27fa9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_958670c429225b7160e89bf754fa102b275b44241b0078f66d3ae9652a27fa9e->enter($__internal_958670c429225b7160e89bf754fa102b275b44241b0078f66d3ae9652a27fa9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_78198e2edcb3e708dbdc7434054316550734ac94b21fc4ae42e88ef8bb6522f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78198e2edcb3e708dbdc7434054316550734ac94b21fc4ae42e88ef8bb6522f6->enter($__internal_78198e2edcb3e708dbdc7434054316550734ac94b21fc4ae42e88ef8bb6522f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_78198e2edcb3e708dbdc7434054316550734ac94b21fc4ae42e88ef8bb6522f6->leave($__internal_78198e2edcb3e708dbdc7434054316550734ac94b21fc4ae42e88ef8bb6522f6_prof);

        
        $__internal_958670c429225b7160e89bf754fa102b275b44241b0078f66d3ae9652a27fa9e->leave($__internal_958670c429225b7160e89bf754fa102b275b44241b0078f66d3ae9652a27fa9e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e50a07c7d877f9fe5f752316d924ab14eac27f425a640b2a23234ecac2df8df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e50a07c7d877f9fe5f752316d924ab14eac27f425a640b2a23234ecac2df8df->enter($__internal_6e50a07c7d877f9fe5f752316d924ab14eac27f425a640b2a23234ecac2df8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1deaf53a8c14c890823d96ebb2464a140e9512211f5e72a818de37f13ecb1c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1deaf53a8c14c890823d96ebb2464a140e9512211f5e72a818de37f13ecb1c96->enter($__internal_1deaf53a8c14c890823d96ebb2464a140e9512211f5e72a818de37f13ecb1c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

\t\t\t\t\t\t<div class=\"form-check offset-md-2 col-md-8\" id=\"last-checkbox\">
\t\t\t\t\t\t  ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->getSourceContext()); })()), "newsletter", array()), 'widget', array("attr" => array("class" => "form-check-input")));
        echo "
\t\t\t\t\t\t  ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->getSourceContext()); })()), "newsletter", array()), 'label');
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->getSourceContext()); })()), "Inscription", array()), 'row', array("attr" => array("class" => "btn")));
        echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 85, $this->getSourceContext()); })()), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>\t
\t</div>
";
        
        $__internal_1deaf53a8c14c890823d96ebb2464a140e9512211f5e72a818de37f13ecb1c96->leave($__internal_1deaf53a8c14c890823d96ebb2464a140e9512211f5e72a818de37f13ecb1c96_prof);

        
        $__internal_6e50a07c7d877f9fe5f752316d924ab14eac27f425a640b2a23234ecac2df8df->leave($__internal_6e50a07c7d877f9fe5f752316d924ab14eac27f425a640b2a23234ecac2df8df_prof);

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
        return array (  218 => 85,  213 => 83,  207 => 80,  203 => 79,  196 => 75,  192 => 74,  183 => 67,  181 => 65,  177 => 64,  170 => 60,  166 => 59,  159 => 54,  157 => 52,  153 => 51,  147 => 47,  145 => 45,  141 => 44,  134 => 39,  132 => 37,  128 => 36,  122 => 32,  120 => 30,  116 => 29,  108 => 24,  104 => 23,  98 => 20,  93 => 18,  86 => 13,  77 => 11,  73 => 10,  68 => 7,  59 => 6,  41 => 4,  11 => 1,);
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

\t\t\t\t\t\t<div class=\"form-check offset-md-2 col-md-8\" id=\"last-checkbox\">
\t\t\t\t\t\t  {{ form_widget(form.newsletter, {'attr': {'class': 'form-check-input'}}) }}
\t\t\t\t\t\t  {{ form_label(form.newsletter) }}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t{{ form_row(form.Inscription, {'attr': {'class': 'btn'}}) }}
\t\t\t\t\t\t\t
\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>\t
\t</div>
{% endblock %}", "Administration/subscription.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\Administration\\subscription.html.twig");
    }
}
