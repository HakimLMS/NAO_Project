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
        $__internal_c99fa8d90240e29293ae87785c36eeb5d8ba444a934e660900c0b76c6f0149fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c99fa8d90240e29293ae87785c36eeb5d8ba444a934e660900c0b76c6f0149fc->enter($__internal_c99fa8d90240e29293ae87785c36eeb5d8ba444a934e660900c0b76c6f0149fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/research.html.twig"));

        $__internal_a62e7633c04ffa24eec3103c2f10cb3e61a53b3b848f6e6a23c7a6bc02246af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62e7633c04ffa24eec3103c2f10cb3e61a53b3b848f6e6a23c7a6bc02246af5->enter($__internal_a62e7633c04ffa24eec3103c2f10cb3e61a53b3b848f6e6a23c7a6bc02246af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/research.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c99fa8d90240e29293ae87785c36eeb5d8ba444a934e660900c0b76c6f0149fc->leave($__internal_c99fa8d90240e29293ae87785c36eeb5d8ba444a934e660900c0b76c6f0149fc_prof);

        
        $__internal_a62e7633c04ffa24eec3103c2f10cb3e61a53b3b848f6e6a23c7a6bc02246af5->leave($__internal_a62e7633c04ffa24eec3103c2f10cb3e61a53b3b848f6e6a23c7a6bc02246af5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb467871e55ba784c8e3cdda60cad80353d8e4df4d182912a7d116f1c5ccfe20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb467871e55ba784c8e3cdda60cad80353d8e4df4d182912a7d116f1c5ccfe20->enter($__internal_eb467871e55ba784c8e3cdda60cad80353d8e4df4d182912a7d116f1c5ccfe20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e87b7479ee2c9e954209badab469432f822af06005188e12ad91c77ceffd8e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87b7479ee2c9e954209badab469432f822af06005188e12ad91c77ceffd8e04->enter($__internal_e87b7479ee2c9e954209badab469432f822af06005188e12ad91c77ceffd8e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Recherche";
        
        $__internal_e87b7479ee2c9e954209badab469432f822af06005188e12ad91c77ceffd8e04->leave($__internal_e87b7479ee2c9e954209badab469432f822af06005188e12ad91c77ceffd8e04_prof);

        
        $__internal_eb467871e55ba784c8e3cdda60cad80353d8e4df4d182912a7d116f1c5ccfe20->leave($__internal_eb467871e55ba784c8e3cdda60cad80353d8e4df4d182912a7d116f1c5ccfe20_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3b8f6eada38cc10d6611b8176ca45f3bce5179ea826f263787c0e3489ae9ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3b8f6eada38cc10d6611b8176ca45f3bce5179ea826f263787c0e3489ae9ddb->enter($__internal_b3b8f6eada38cc10d6611b8176ca45f3bce5179ea826f263787c0e3489ae9ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5166288d84808984338f17a75d8aa260a554837c758f4658edf1beae5356e72e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5166288d84808984338f17a75d8aa260a554837c758f4658edf1beae5356e72e->enter($__internal_5166288d84808984338f17a75d8aa260a554837c758f4658edf1beae5356e72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container-fluid\" id=\"research\">
\t<div class=\"white-filter\">
\t\t<div class=\"container\" id=\"research-form\">
\t\t\t
\t\t\t";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_start');
        echo "

\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'errors');
        echo "

\t\t\t<div class=\"form-row\">
\t\t\t\t<div class=\"form-group col-12 col-md-10\">
\t\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "vern_name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Votre recherche...")));
        // line 19
        echo "
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group col-12 col-md-2\">
\t\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "Rechercher", array()), 'widget', array("attr" => array("class" => "btn")));
        // line 24
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'form_end');
        echo "

\t\t</div>
\t</div>
</div>\t

";
        
        $__internal_5166288d84808984338f17a75d8aa260a554837c758f4658edf1beae5356e72e->leave($__internal_5166288d84808984338f17a75d8aa260a554837c758f4658edf1beae5356e72e_prof);

        
        $__internal_b3b8f6eada38cc10d6611b8176ca45f3bce5179ea826f263787c0e3489ae9ddb->leave($__internal_b3b8f6eada38cc10d6611b8176ca45f3bce5179ea826f263787c0e3489ae9ddb_prof);

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
        return array (  103 => 28,  97 => 24,  95 => 23,  89 => 19,  87 => 17,  80 => 13,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Recherche{% endblock %} 

{% block body %}

<div class=\"container-fluid\" id=\"research\">
\t<div class=\"white-filter\">
\t\t<div class=\"container\" id=\"research-form\">
\t\t\t
\t\t\t{{ form_start(form) }}

\t\t\t{{ form_errors(form) }}

\t\t\t<div class=\"form-row\">
\t\t\t\t<div class=\"form-group col-12 col-md-10\">
\t\t\t\t\t{{ form_widget(form.vern_name, {'attr': {
\t\t\t\t\t'class': 'form-control',
\t\t\t\t\t'placeholder': 'Votre recherche...'}}) }}
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group col-12 col-md-2\">
\t\t\t\t\t{{ form_widget(form.Rechercher, {'attr': {
\t\t\t\t\t'class': 'btn'}}) }}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{{ form_end(form) }}

\t\t</div>
\t</div>
</div>\t

{% endblock %}", "research/research.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\research\\research.html.twig");
    }
}
