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
        $__internal_89014bb17157165192f7d1b522d6e13b8e89db61378324dfc55601c6cbddd0da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89014bb17157165192f7d1b522d6e13b8e89db61378324dfc55601c6cbddd0da->enter($__internal_89014bb17157165192f7d1b522d6e13b8e89db61378324dfc55601c6cbddd0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $__internal_40bbc92427b5001b21c4d80c0612722691d811677cbea4b8456cd3737eea19c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40bbc92427b5001b21c4d80c0612722691d811677cbea4b8456cd3737eea19c6->enter($__internal_40bbc92427b5001b21c4d80c0612722691d811677cbea4b8456cd3737eea19c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89014bb17157165192f7d1b522d6e13b8e89db61378324dfc55601c6cbddd0da->leave($__internal_89014bb17157165192f7d1b522d6e13b8e89db61378324dfc55601c6cbddd0da_prof);

        
        $__internal_40bbc92427b5001b21c4d80c0612722691d811677cbea4b8456cd3737eea19c6->leave($__internal_40bbc92427b5001b21c4d80c0612722691d811677cbea4b8456cd3737eea19c6_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b79c666194c0c57888378fe74505e89376d76418b28b6b3b4691771588d4af7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b79c666194c0c57888378fe74505e89376d76418b28b6b3b4691771588d4af7->enter($__internal_5b79c666194c0c57888378fe74505e89376d76418b28b6b3b4691771588d4af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5069ea762cdbc16bbd574181b166ef5fa94125f1fd7bdb3920df5f709ce89eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5069ea762cdbc16bbd574181b166ef5fa94125f1fd7bdb3920df5f709ce89eff->enter($__internal_5069ea762cdbc16bbd574181b166ef5fa94125f1fd7bdb3920df5f709ce89eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_5069ea762cdbc16bbd574181b166ef5fa94125f1fd7bdb3920df5f709ce89eff->leave($__internal_5069ea762cdbc16bbd574181b166ef5fa94125f1fd7bdb3920df5f709ce89eff_prof);

        
        $__internal_5b79c666194c0c57888378fe74505e89376d76418b28b6b3b4691771588d4af7->leave($__internal_5b79c666194c0c57888378fe74505e89376d76418b28b6b3b4691771588d4af7_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fe2c2204bdaeba1e3ae43b8557af90749812b0d1fc8ec454560811c96c39ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fe2c2204bdaeba1e3ae43b8557af90749812b0d1fc8ec454560811c96c39ee3->enter($__internal_6fe2c2204bdaeba1e3ae43b8557af90749812b0d1fc8ec454560811c96c39ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4cc820b6f923ea9f21c8ca852627da0e366c2da729cc241e045bc3212666115a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc820b6f923ea9f21c8ca852627da0e366c2da729cc241e045bc3212666115a->enter($__internal_4cc820b6f923ea9f21c8ca852627da0e366c2da729cc241e045bc3212666115a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "type", array()), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t<div class=\"form-group col-12 col-md-6\">
\t\t\t\t\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "lastname", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), "lastname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom")));
        // line 30
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group col-12 col-md-6\">
\t\t\t\t\t\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "firstname", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "firstname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prénom")));
        // line 37
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), "password", array()), "first", array()), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), "password", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "******")));
        // line 45
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->getSourceContext()); })()), "password", array()), "second", array()), 'label');
        echo "
\t\t\t\t\t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "password", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "******")));
        // line 52
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t<div class=\"form-group col-12 col-md-6\">
\t\t\t\t\t\t\t\t";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->getSourceContext()); })()), "birth", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), "birth", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group col-12 col-md-6\">
\t\t\t\t\t\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), "email", array()), 'label');
        echo "
\t\t\t\t\t\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "exemple@gmail.com")));
        // line 65
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- ** CHECKBOXES ** -->

\t\t\t\t\t\t<div class=\"form-check offset-md-2 col-md-8\">
\t\t\t\t\t\t  ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->getSourceContext()); })()), "member", array()), 'widget', array("attr" => array("class" => "form-check-input")));
        echo "
\t\t\t\t\t\t  ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->getSourceContext()); })()), "member", array()), 'label');
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-check offset-md-2 col-md-8\" id=\"last-checkbox\">
\t\t\t\t\t\t  ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->getSourceContext()); })()), "newsletter", array()), 'widget', array("attr" => array("class" => "form-check-input")));
        echo "
\t\t\t\t\t\t  ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->getSourceContext()); })()), "newsletter", array()), 'label');
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->getSourceContext()); })()), "Inscription", array()), 'row', array("attr" => array("class" => "btn")));
        echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->getSourceContext()); })()), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>\t
\t</div>
";
        
        $__internal_4cc820b6f923ea9f21c8ca852627da0e366c2da729cc241e045bc3212666115a->leave($__internal_4cc820b6f923ea9f21c8ca852627da0e366c2da729cc241e045bc3212666115a_prof);

        
        $__internal_6fe2c2204bdaeba1e3ae43b8557af90749812b0d1fc8ec454560811c96c39ee3->leave($__internal_6fe2c2204bdaeba1e3ae43b8557af90749812b0d1fc8ec454560811c96c39ee3_prof);

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
        return array (  213 => 83,  208 => 81,  202 => 78,  198 => 77,  191 => 73,  187 => 72,  178 => 65,  176 => 63,  172 => 62,  165 => 58,  161 => 57,  154 => 52,  152 => 50,  148 => 49,  142 => 45,  140 => 43,  136 => 42,  129 => 37,  127 => 35,  123 => 34,  117 => 30,  115 => 28,  111 => 27,  103 => 22,  99 => 21,  93 => 18,  86 => 13,  77 => 11,  73 => 10,  68 => 7,  59 => 6,  41 => 4,  11 => 1,);
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
