<?php

/* Don/don.html.twig */
class __TwigTemplate_bcad5803f8b6ca5a6e56d6921620ca17ba599bebf2d039657840fd892f44da6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Don/don.html.twig", 1);
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
        $__internal_d20a4b082c5e1324089c715f4c91bf7609edea4d40d95ded677302acb5d46982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d20a4b082c5e1324089c715f4c91bf7609edea4d40d95ded677302acb5d46982->enter($__internal_d20a4b082c5e1324089c715f4c91bf7609edea4d40d95ded677302acb5d46982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/don.html.twig"));

        $__internal_12a262317a8c04ffeb61b2480cb17d4d5095a77d12ff72cdbc8625166e4f4542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a262317a8c04ffeb61b2480cb17d4d5095a77d12ff72cdbc8625166e4f4542->enter($__internal_12a262317a8c04ffeb61b2480cb17d4d5095a77d12ff72cdbc8625166e4f4542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/don.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d20a4b082c5e1324089c715f4c91bf7609edea4d40d95ded677302acb5d46982->leave($__internal_d20a4b082c5e1324089c715f4c91bf7609edea4d40d95ded677302acb5d46982_prof);

        
        $__internal_12a262317a8c04ffeb61b2480cb17d4d5095a77d12ff72cdbc8625166e4f4542->leave($__internal_12a262317a8c04ffeb61b2480cb17d4d5095a77d12ff72cdbc8625166e4f4542_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_53b7124cd527a6970e73ceac10956489ae62f20fb20f7eaf27a6fd6238b2b806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b7124cd527a6970e73ceac10956489ae62f20fb20f7eaf27a6fd6238b2b806->enter($__internal_53b7124cd527a6970e73ceac10956489ae62f20fb20f7eaf27a6fd6238b2b806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f37a9d5c7176c98bd77362e9de9e76cdd2b26f29e306747369219c741ad708c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37a9d5c7176c98bd77362e9de9e76cdd2b26f29e306747369219c741ad708c0->enter($__internal_f37a9d5c7176c98bd77362e9de9e76cdd2b26f29e306747369219c741ad708c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Votre don";
        
        $__internal_f37a9d5c7176c98bd77362e9de9e76cdd2b26f29e306747369219c741ad708c0->leave($__internal_f37a9d5c7176c98bd77362e9de9e76cdd2b26f29e306747369219c741ad708c0_prof);

        
        $__internal_53b7124cd527a6970e73ceac10956489ae62f20fb20f7eaf27a6fd6238b2b806->leave($__internal_53b7124cd527a6970e73ceac10956489ae62f20fb20f7eaf27a6fd6238b2b806_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a358d58d6f4c5d65da861b627fd40e1ade35b8996b77796d1c10e1f08c13b39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a358d58d6f4c5d65da861b627fd40e1ade35b8996b77796d1c10e1f08c13b39->enter($__internal_1a358d58d6f4c5d65da861b627fd40e1ade35b8996b77796d1c10e1f08c13b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95bc6059f077df86c445ba96631c040478db57639872c4918edaae595c1220e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95bc6059f077df86c445ba96631c040478db57639872c4918edaae595c1220e0->enter($__internal_95bc6059f077df86c445ba96631c040478db57639872c4918edaae595c1220e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container-fluid\" id=\"don\">
        <div class=\"white-filter\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"offset-1 col-10 col-md-5\" id=\"don-form\">
                        <h3>Faire un don</h3>
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/don-blanc.svg"), "html", null, true);
        echo "\" width=\"65px\" height=\"65px\">

                        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'form_start');
        echo "

                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), 'errors');
        echo "

                        <div class=\"form-group\">
                            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "amount", array()), 'widget', array("attr" => array("class" => "form-control")));
        // line 21
        echo "
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <div class=\"form-group\">
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "lastname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "firstname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "mail", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>

                        <div id=\"don-form-buttons\">
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "CB", array()), 'row', array("attr" => array("class" => "btn don-choix")));
        echo "
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "CHQ", array()), 'row', array("attr" => array("class" => "btn don-choix")));
        echo "
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), "VIR", array()), 'row', array("attr" => array("class" => "btn don-choix")));
        echo "
                        </div>

                        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'form_end');
        echo "

                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_95bc6059f077df86c445ba96631c040478db57639872c4918edaae595c1220e0->leave($__internal_95bc6059f077df86c445ba96631c040478db57639872c4918edaae595c1220e0_prof);

        
        $__internal_1a358d58d6f4c5d65da861b627fd40e1ade35b8996b77796d1c10e1f08c13b39->leave($__internal_1a358d58d6f4c5d65da861b627fd40e1ade35b8996b77796d1c10e1f08c13b39_prof);

    }

    public function getTemplateName()
    {
        return "Don/don.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 43,  131 => 40,  127 => 39,  123 => 38,  116 => 34,  109 => 30,  102 => 26,  95 => 21,  93 => 20,  87 => 17,  82 => 15,  77 => 13,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Votre don{% endblock %}

{% block body %}

    <div class=\"container-fluid\" id=\"don\">
        <div class=\"white-filter\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"offset-1 col-10 col-md-5\" id=\"don-form\">
                        <h3>Faire un don</h3>
                        <img src=\"{{ asset('build/img/don-blanc.svg') }}\" width=\"65px\" height=\"65px\">

                        {{ form_start(form) }}

                        {{ form_errors(form) }}

                        <div class=\"form-group\">
                            {{ form_widget(form.amount, {'attr': {
                            'class': 'form-control'}}) }}
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <div class=\"form-group\">
                            {{ form_widget(form.lastname, {'attr': {'class': 'form-control'}}) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_widget(form.firstname, {'attr': {'class': 'form-control'}}) }}
                        </div>

                        <div class=\"form-group\">
                            {{ form_widget(form.mail, {'attr': {'class': 'form-control'}}) }}
                        </div>

                        <div id=\"don-form-buttons\">
                        {{ form_row(form.CB, {'attr': {'class': 'btn don-choix'}}) }}
                        {{ form_row(form.CHQ, {'attr': {'class': 'btn don-choix'}}) }}
                        {{ form_row(form.VIR, {'attr': {'class': 'btn don-choix'}}) }}
                        </div>

                        {{ form_end(form) }}

                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "Don/don.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Don\\don.html.twig");
    }
}
