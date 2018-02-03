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
        $__internal_c1aaee5bbb747ff3b239e45f4e56edaecd02b82352cb9e574c53b7bd54ca52f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1aaee5bbb747ff3b239e45f4e56edaecd02b82352cb9e574c53b7bd54ca52f6->enter($__internal_c1aaee5bbb747ff3b239e45f4e56edaecd02b82352cb9e574c53b7bd54ca52f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/don.html.twig"));

        $__internal_828a35ceff3d8aff985091f249ea32f4e0169f2b90c0606b51cbbb7bf3ba0410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828a35ceff3d8aff985091f249ea32f4e0169f2b90c0606b51cbbb7bf3ba0410->enter($__internal_828a35ceff3d8aff985091f249ea32f4e0169f2b90c0606b51cbbb7bf3ba0410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/don.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1aaee5bbb747ff3b239e45f4e56edaecd02b82352cb9e574c53b7bd54ca52f6->leave($__internal_c1aaee5bbb747ff3b239e45f4e56edaecd02b82352cb9e574c53b7bd54ca52f6_prof);

        
        $__internal_828a35ceff3d8aff985091f249ea32f4e0169f2b90c0606b51cbbb7bf3ba0410->leave($__internal_828a35ceff3d8aff985091f249ea32f4e0169f2b90c0606b51cbbb7bf3ba0410_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4110548494e19f8353fb8a111d65240e2c9146215acb3d1d257d63610a7f32bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4110548494e19f8353fb8a111d65240e2c9146215acb3d1d257d63610a7f32bb->enter($__internal_4110548494e19f8353fb8a111d65240e2c9146215acb3d1d257d63610a7f32bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_309ea89183f7e454bfa3fa4b543d2a77fce430787e2eb6728b21015044a2d1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309ea89183f7e454bfa3fa4b543d2a77fce430787e2eb6728b21015044a2d1fa->enter($__internal_309ea89183f7e454bfa3fa4b543d2a77fce430787e2eb6728b21015044a2d1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Votre don";
        
        $__internal_309ea89183f7e454bfa3fa4b543d2a77fce430787e2eb6728b21015044a2d1fa->leave($__internal_309ea89183f7e454bfa3fa4b543d2a77fce430787e2eb6728b21015044a2d1fa_prof);

        
        $__internal_4110548494e19f8353fb8a111d65240e2c9146215acb3d1d257d63610a7f32bb->leave($__internal_4110548494e19f8353fb8a111d65240e2c9146215acb3d1d257d63610a7f32bb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_917eed2033a04c92c13d56e420b53ccac0f4289507ec388e2500a6b409670e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_917eed2033a04c92c13d56e420b53ccac0f4289507ec388e2500a6b409670e84->enter($__internal_917eed2033a04c92c13d56e420b53ccac0f4289507ec388e2500a6b409670e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57b5350af9e5415b291a87ff8cfa62685d4062fc06c62d427934cf44aa034e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b5350af9e5415b291a87ff8cfa62685d4062fc06c62d427934cf44aa034e02->enter($__internal_57b5350af9e5415b291a87ff8cfa62685d4062fc06c62d427934cf44aa034e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_57b5350af9e5415b291a87ff8cfa62685d4062fc06c62d427934cf44aa034e02->leave($__internal_57b5350af9e5415b291a87ff8cfa62685d4062fc06c62d427934cf44aa034e02_prof);

        
        $__internal_917eed2033a04c92c13d56e420b53ccac0f4289507ec388e2500a6b409670e84->leave($__internal_917eed2033a04c92c13d56e420b53ccac0f4289507ec388e2500a6b409670e84_prof);

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

{% endblock %}", "Don/don.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\Don\\don.html.twig");
    }
}
