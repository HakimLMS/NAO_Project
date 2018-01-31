<?php

/* Map/map.html.twig */
class __TwigTemplate_a661c3f33dbdd1f408749e8618ab7585b72699641102d8fff32ca4afd3e7d050 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "Map/map.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7ee0851d319906b66dc0e542bfcc4edfe04485ed96612a90547ea54bd158ec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7ee0851d319906b66dc0e542bfcc4edfe04485ed96612a90547ea54bd158ec2->enter($__internal_b7ee0851d319906b66dc0e542bfcc4edfe04485ed96612a90547ea54bd158ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Map/map.html.twig"));

        $__internal_46519d8190b8cc3180ba215dc00415246dfe2661bf45e97b8d6e324eb450bfb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46519d8190b8cc3180ba215dc00415246dfe2661bf45e97b8d6e324eb450bfb9->enter($__internal_46519d8190b8cc3180ba215dc00415246dfe2661bf45e97b8d6e324eb450bfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Map/map.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7ee0851d319906b66dc0e542bfcc4edfe04485ed96612a90547ea54bd158ec2->leave($__internal_b7ee0851d319906b66dc0e542bfcc4edfe04485ed96612a90547ea54bd158ec2_prof);

        
        $__internal_46519d8190b8cc3180ba215dc00415246dfe2661bf45e97b8d6e324eb450bfb9->leave($__internal_46519d8190b8cc3180ba215dc00415246dfe2661bf45e97b8d6e324eb450bfb9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_29cc763fff6a2795d67bcfcebe594d05c52995becb09e675ccdb67a155d80cee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29cc763fff6a2795d67bcfcebe594d05c52995becb09e675ccdb67a155d80cee->enter($__internal_29cc763fff6a2795d67bcfcebe594d05c52995becb09e675ccdb67a155d80cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd2c9390b800238722691e5e3a5f01cc85ea14840a1d542d50a0d77f30354db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2c9390b800238722691e5e3a5f01cc85ea14840a1d542d50a0d77f30354db6->enter($__internal_dd2c9390b800238722691e5e3a5f01cc85ea14840a1d542d50a0d77f30354db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/map.css"), "html", null, true);
        echo "\">
        <div class=\"mapwraper\">
            <div id=\"map\"></div>
        </div>
        <div class=\"form-group\">
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_start');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "_token", array()), 'widget');
        echo "
            <div>
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "name", array()), 'label');
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "name", array()), 'errors');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "name", array()), 'widget');
        echo "
            </div>
            <div>
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "lat", array()), 'label');
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "lat", array()), 'errors');
        echo "
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "lat", array()), 'widget');
        echo "
            </div>
            <div>
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "lng", array()), 'label');
        echo "
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "lng", array()), 'errors');
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "lng", array()), 'widget');
        echo "
            </div>
            <a title=\"Comment trouver ses coordonnées GPS\"href=\"https://support.google.com/maps/answer/18539?co=GENIE.Platform%3DDesktop&hl=fr\" target=\"_blank\">Comment connaître sa position</a>
            <div>
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "image", array()), 'label');
        echo "
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "image", array()), 'errors');
        echo "
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "image", array()), 'widget');
        echo "
            </div>
            <div>
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "type", array()), 'label');
        echo "
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "type", array()), 'errors');
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "type", array()), 'widget');
        echo "
            </div>
            <div>
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "Enregistrer", array()), 'widget');
        echo "
            </div>
        
        </div>
    ";
        
        $__internal_dd2c9390b800238722691e5e3a5f01cc85ea14840a1d542d50a0d77f30354db6->leave($__internal_dd2c9390b800238722691e5e3a5f01cc85ea14840a1d542d50a0d77f30354db6_prof);

        
        $__internal_29cc763fff6a2795d67bcfcebe594d05c52995becb09e675ccdb67a155d80cee->leave($__internal_29cc763fff6a2795d67bcfcebe594d05c52995becb09e675ccdb67a155d80cee_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_71e065f44d70262f87efc2161cb2f1c2375552be9d629b1be033be4c23a302a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e065f44d70262f87efc2161cb2f1c2375552be9d629b1be033be4c23a302a9->enter($__internal_71e065f44d70262f87efc2161cb2f1c2375552be9d629b1be033be4c23a302a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_58b37824caadac9116c24a6bff7ebd0aae0b4987b59631ec6b98c77bc15abf36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b37824caadac9116c24a6bff7ebd0aae0b4987b59631ec6b98c77bc15abf36->enter($__internal_58b37824caadac9116c24a6bff7ebd0aae0b4987b59631ec6b98c77bc15abf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "        <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBtz5G85w1sjtP8Y0sPnY45ZAQq5d2Y_LE&callback=initMap\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/map.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_58b37824caadac9116c24a6bff7ebd0aae0b4987b59631ec6b98c77bc15abf36->leave($__internal_58b37824caadac9116c24a6bff7ebd0aae0b4987b59631ec6b98c77bc15abf36_prof);

        
        $__internal_71e065f44d70262f87efc2161cb2f1c2375552be9d629b1be033be4c23a302a9->leave($__internal_71e065f44d70262f87efc2161cb2f1c2375552be9d629b1be033be4c23a302a9_prof);

    }

    public function getTemplateName()
    {
        return "Map/map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 46,  165 => 45,  156 => 44,  141 => 39,  135 => 36,  131 => 35,  127 => 34,  121 => 31,  117 => 30,  113 => 29,  106 => 25,  102 => 24,  98 => 23,  92 => 20,  88 => 19,  84 => 18,  78 => 15,  74 => 14,  70 => 13,  65 => 11,  61 => 10,  53 => 5,  50 => 4,  41 => 3,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
    {% block body %}

        <link rel=\"stylesheet\" href=\"{{asset('build/css/map.css')}}\">
        <div class=\"mapwraper\">
            <div id=\"map\"></div>
        </div>
        <div class=\"form-group\">
        {{ form_start(form) }}
            {{ form_widget(form._token) }}
            <div>
            {{ form_label(form.name) }}
            {{ form_errors(form.name) }}
            {{ form_widget(form.name) }}
            </div>
            <div>
            {{ form_label(form.lat) }}
            {{ form_errors(form.lat) }}
            {{ form_widget(form.lat) }}
            </div>
            <div>
            {{ form_label(form.lng) }}
            {{ form_errors(form.lng) }}
            {{ form_widget(form.lng) }}
            </div>
            <a title=\"Comment trouver ses coordonnées GPS\"href=\"https://support.google.com/maps/answer/18539?co=GENIE.Platform%3DDesktop&hl=fr\" target=\"_blank\">Comment connaître sa position</a>
            <div>
            {{ form_label(form.image) }}
            {{ form_errors(form.image) }}
            {{ form_widget(form.image) }}
            </div>
            <div>
            {{ form_label(form.type) }}
            {{ form_errors(form.type) }}
            {{ form_widget(form.type) }}
            </div>
            <div>
            {{ form_widget(form.Enregistrer) }}
            </div>
        
        </div>
    {% endblock %}
    {% block javascripts %}
        <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBtz5G85w1sjtP8Y0sPnY45ZAQq5d2Y_LE&callback=initMap\"></script>
        <script src=\"{{asset('build/js/map.js')}}\"></script>
    {% endblock %}
", "Map/map.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Map\\map.html.twig");
    }
}
