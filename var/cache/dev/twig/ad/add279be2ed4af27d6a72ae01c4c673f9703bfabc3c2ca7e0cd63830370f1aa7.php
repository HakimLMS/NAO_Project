<?php

/* Contact/contact.html.twig */
class __TwigTemplate_12daab9488ed60c1e40a4796e603fe1a334696dc824f696180c230b153c359e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Contact/contact.html.twig", 1);
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
        $__internal_0249c74d23acea94ce2c5b59cf560e1698e39cebf1f0412616253781e92a1d2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0249c74d23acea94ce2c5b59cf560e1698e39cebf1f0412616253781e92a1d2f->enter($__internal_0249c74d23acea94ce2c5b59cf560e1698e39cebf1f0412616253781e92a1d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Contact/contact.html.twig"));

        $__internal_910b314dec5d9290580588de1bffb286067656cfe33e59a324ccbc09285eab34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910b314dec5d9290580588de1bffb286067656cfe33e59a324ccbc09285eab34->enter($__internal_910b314dec5d9290580588de1bffb286067656cfe33e59a324ccbc09285eab34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Contact/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0249c74d23acea94ce2c5b59cf560e1698e39cebf1f0412616253781e92a1d2f->leave($__internal_0249c74d23acea94ce2c5b59cf560e1698e39cebf1f0412616253781e92a1d2f_prof);

        
        $__internal_910b314dec5d9290580588de1bffb286067656cfe33e59a324ccbc09285eab34->leave($__internal_910b314dec5d9290580588de1bffb286067656cfe33e59a324ccbc09285eab34_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d1abe7b49edb481c3dba4adc92518313816e5e47a6e3e7f55c1cb37968da998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d1abe7b49edb481c3dba4adc92518313816e5e47a6e3e7f55c1cb37968da998->enter($__internal_8d1abe7b49edb481c3dba4adc92518313816e5e47a6e3e7f55c1cb37968da998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e15507b4a0a7005e52fc247dc76765e91f7e2a7de9182ab7b538e7fb5b528a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e15507b4a0a7005e52fc247dc76765e91f7e2a7de9182ab7b538e7fb5b528a9->enter($__internal_8e15507b4a0a7005e52fc247dc76765e91f7e2a7de9182ab7b538e7fb5b528a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_8e15507b4a0a7005e52fc247dc76765e91f7e2a7de9182ab7b538e7fb5b528a9->leave($__internal_8e15507b4a0a7005e52fc247dc76765e91f7e2a7de9182ab7b538e7fb5b528a9_prof);

        
        $__internal_8d1abe7b49edb481c3dba4adc92518313816e5e47a6e3e7f55c1cb37968da998->leave($__internal_8d1abe7b49edb481c3dba4adc92518313816e5e47a6e3e7f55c1cb37968da998_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb2bb7cf04a998efd65e80d5334f1e3fd8f433e4de19ede20a58c1e9533e5974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb2bb7cf04a998efd65e80d5334f1e3fd8f433e4de19ede20a58c1e9533e5974->enter($__internal_eb2bb7cf04a998efd65e80d5334f1e3fd8f433e4de19ede20a58c1e9533e5974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49c21c222ccd76a9fa1769344cadf825d24fcf5b3e33a55c7c2e9e4ee81eb6bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c21c222ccd76a9fa1769344cadf825d24fcf5b3e33a55c7c2e9e4ee81eb6bb->enter($__internal_49c21c222ccd76a9fa1769344cadf825d24fcf5b3e33a55c7c2e9e4ee81eb6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container-fluid\" id=\"contact\">
        <div class=\"white-filter\">
    
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"offset-1 col-10 offset-md-6 col-md-6 well\" id=\"contact-form\">
                    <h3>Contactez-nous</h3>

                        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), 'form_start');
        echo "

                        <div class=\"form-row\">
                            <div class=\"form-group col-12 col-md-6\">
                                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "lastname", array()), 'label');
        echo "
                                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "lastname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom")));
        // line 21
        echo "
                            </div>
                            
                            <div class=\"form-group col-12 col-md-6\">
                                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "firstname", array()), 'label');
        echo "
                                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "firstname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prénom")));
        // line 28
        echo "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "mail", array()), "first", array()), 'label');
        echo "
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "mail", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "exemple@gmail.com")));
        // line 36
        echo "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), "mail", array()), "second", array()), 'label');
        echo "
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), "mail", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "exemple@gmail.com")));
        // line 43
        echo "
                        </div> 

                        <div class=\"form-group\">
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), "object", array()), 'label');
        echo "
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), "object", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>    

                        <div class=\"form-group\">
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()), "content", array()), 'label');
        echo "
                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "6")));
        // line 56
        echo "
                        </div>

                        <div class=\"form-check offset-md-2 col-md-8\">
                          ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->getSourceContext()); })()), "notRobot", array()), 'widget');
        echo "
                          ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), "notRobot", array()), 'label');
        echo "
                        </div>                   

                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->getSourceContext()); })()), "Envoyer", array()), 'row', array("attr" => array("class" => "btn")));
        echo "


                        ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->getSourceContext()); })()), 'form_end');
        echo "

                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_49c21c222ccd76a9fa1769344cadf825d24fcf5b3e33a55c7c2e9e4ee81eb6bb->leave($__internal_49c21c222ccd76a9fa1769344cadf825d24fcf5b3e33a55c7c2e9e4ee81eb6bb_prof);

        
        $__internal_eb2bb7cf04a998efd65e80d5334f1e3fd8f433e4de19ede20a58c1e9533e5974->leave($__internal_eb2bb7cf04a998efd65e80d5334f1e3fd8f433e4de19ede20a58c1e9533e5974_prof);

    }

    public function getTemplateName()
    {
        return "Contact/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 67,  167 => 64,  161 => 61,  157 => 60,  151 => 56,  149 => 53,  145 => 52,  138 => 48,  134 => 47,  128 => 43,  126 => 41,  122 => 40,  116 => 36,  114 => 34,  110 => 33,  103 => 28,  101 => 26,  97 => 25,  91 => 21,  89 => 19,  85 => 18,  78 => 14,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Contact{% endblock %}

{% block body %}
    <div class=\"container-fluid\" id=\"contact\">
        <div class=\"white-filter\">
    
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"offset-1 col-10 offset-md-6 col-md-6 well\" id=\"contact-form\">
                    <h3>Contactez-nous</h3>

                        {{ form_start(form) }}

                        <div class=\"form-row\">
                            <div class=\"form-group col-12 col-md-6\">
                                {{ form_label(form.lastname) }}
                                {{ form_widget(form.lastname, {'attr': {
                                'class': 'form-control',
                                'placeholder': 'Nom'}}) }}
                            </div>
                            
                            <div class=\"form-group col-12 col-md-6\">
                                {{ form_label(form.firstname) }}
                                {{ form_widget(form.firstname, {'attr': {
                                'class': 'form-control',
                                'placeholder': 'Prénom'}}) }}
                            </div>
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(form.mail.first) }}
                            {{ form_widget(form.mail.first, {'attr': {
                            'class': 'form-control',
                            'placeholder': 'exemple@gmail.com'}}) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(form.mail.second) }}
                            {{ form_widget(form.mail.second, {'attr': {
                            'class': 'form-control',
                            'placeholder': 'exemple@gmail.com'}}) }}
                        </div> 

                        <div class=\"form-group\">
                            {{ form_label(form.object) }}
                            {{ form_widget(form.object, {'attr': {'class': 'form-control'}}) }}
                        </div>    

                        <div class=\"form-group\">
                            {{ form_label(form.content) }}
                            {{ form_widget(form.content, {'attr': {
                            'class': 'form-control',
                            'rows': '6'
                            }}) }}
                        </div>

                        <div class=\"form-check offset-md-2 col-md-8\">
                          {{ form_widget(form.notRobot) }}
                          {{ form_label(form.notRobot) }}
                        </div>                   

                        {{ form_row(form.Envoyer, {'attr': {'class': 'btn'}}) }}


                        {{ form_end(form) }}

                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

", "Contact/contact.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\contact\\contact.html.twig");
    }
}
