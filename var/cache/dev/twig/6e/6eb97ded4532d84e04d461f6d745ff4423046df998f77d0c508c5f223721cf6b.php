<?php

/* security/login.html.twig */
class __TwigTemplate_3381ac27e39b0d4545c00bb3d47651507a974b4c6783b5d0c3a42d76fa446b11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 3);
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
        $__internal_cf83ef33beed436dd8ae652d4fed5580a4ef465c782b2a340addc48b42dc9e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf83ef33beed436dd8ae652d4fed5580a4ef465c782b2a340addc48b42dc9e1f->enter($__internal_cf83ef33beed436dd8ae652d4fed5580a4ef465c782b2a340addc48b42dc9e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_dd5c0bf1b75fe7ceea5c0628fa301911f02dce8a8bf7243974c6cac3e365d2e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5c0bf1b75fe7ceea5c0628fa301911f02dce8a8bf7243974c6cac3e365d2e7->enter($__internal_dd5c0bf1b75fe7ceea5c0628fa301911f02dce8a8bf7243974c6cac3e365d2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf83ef33beed436dd8ae652d4fed5580a4ef465c782b2a340addc48b42dc9e1f->leave($__internal_cf83ef33beed436dd8ae652d4fed5580a4ef465c782b2a340addc48b42dc9e1f_prof);

        
        $__internal_dd5c0bf1b75fe7ceea5c0628fa301911f02dce8a8bf7243974c6cac3e365d2e7->leave($__internal_dd5c0bf1b75fe7ceea5c0628fa301911f02dce8a8bf7243974c6cac3e365d2e7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a710d77dd105a57603f8b5c012d439aa268e8591c5294b9ed446be6a316c9e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a710d77dd105a57603f8b5c012d439aa268e8591c5294b9ed446be6a316c9e53->enter($__internal_a710d77dd105a57603f8b5c012d439aa268e8591c5294b9ed446be6a316c9e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cebdd0bfa46fcab0c19924a3f0cca6f7ea75b680224216f8502ae7bc0ef4bf19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cebdd0bfa46fcab0c19924a3f0cca6f7ea75b680224216f8502ae7bc0ef4bf19->enter($__internal_cebdd0bfa46fcab0c19924a3f0cca6f7ea75b680224216f8502ae7bc0ef4bf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_cebdd0bfa46fcab0c19924a3f0cca6f7ea75b680224216f8502ae7bc0ef4bf19->leave($__internal_cebdd0bfa46fcab0c19924a3f0cca6f7ea75b680224216f8502ae7bc0ef4bf19_prof);

        
        $__internal_a710d77dd105a57603f8b5c012d439aa268e8591c5294b9ed446be6a316c9e53->leave($__internal_a710d77dd105a57603f8b5c012d439aa268e8591c5294b9ed446be6a316c9e53_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8de560a1278af1158463b084d9eb2a34d73e9b58f9ea8ca974c537183b23b743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8de560a1278af1158463b084d9eb2a34d73e9b58f9ea8ca974c537183b23b743->enter($__internal_8de560a1278af1158463b084d9eb2a34d73e9b58f9ea8ca974c537183b23b743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d18a8eb63daa38b7305a68cef993202733b35bb5758d638040f98663e0a17333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18a8eb63daa38b7305a68cef993202733b35bb5758d638040f98663e0a17333->enter($__internal_d18a8eb63daa38b7305a68cef993202733b35bb5758d638040f98663e0a17333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container-fluid\" id=\"login\">
        <div class=\"white-filter\">
            
            <div class=\"container errors\">
                ";
        // line 10
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 10, $this->getSourceContext()); })())) {
            // line 11
            echo "                    <div class=\"block-errors\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 11, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 11, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 13
        echo "                <div class=\"row\">
                    <div class=\"offset-1 col-10 offset-md-6 col-md-6\" id=\"login-form\">
                        <h3>Connexion</h3>
                        <form action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
                            <div class=\"form-group\">
                                <label for=\"username\">Votre adresse mail*</label>
                                <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
        echo "\" placeholder=\"Adresse email\">
                            </div>
                           
                            <div class=\"form-group\">
                                <label for=\"password\">Votre mot de passe*</label>
                                <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"******\">
                                <input type=\"hidden\" name=\"_csrf_token\"
                                value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                            </div>
                            
                            <div id=\"form-bar\"></div>
                            <a id=\"notsubyet\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subscribe");
        echo "\">Devenir membre</a>
                            <button type=\"submit\" class=\"btn\">Connexion</button>
                        </form>  
                    </div>
                </div>
            </div>

        </div>
         
    </div>
";
        
        $__internal_d18a8eb63daa38b7305a68cef993202733b35bb5758d638040f98663e0a17333->leave($__internal_d18a8eb63daa38b7305a68cef993202733b35bb5758d638040f98663e0a17333_prof);

        
        $__internal_8de560a1278af1158463b084d9eb2a34d73e9b58f9ea8ca974c537183b23b743->leave($__internal_8de560a1278af1158463b084d9eb2a34d73e9b58f9ea8ca974c537183b23b743_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 30,  103 => 26,  93 => 19,  87 => 16,  82 => 13,  76 => 11,  74 => 10,  68 => 6,  59 => 5,  41 => 4,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{# templates/security/login.html.twig #}
{% extends 'base.html.twig' %}
{% block title %}Connexion{% endblock %}
{% block body %}
    <div class=\"container-fluid\" id=\"login\">
        <div class=\"white-filter\">
            
            <div class=\"container errors\">
                {% if error %}
                    <div class=\"block-errors\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
                <div class=\"row\">
                    <div class=\"offset-1 col-10 offset-md-6 col-md-6\" id=\"login-form\">
                        <h3>Connexion</h3>
                        <form action=\"{{ path('login') }}\" method=\"post\">
                            <div class=\"form-group\">
                                <label for=\"username\">Votre adresse mail*</label>
                                <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"Adresse email\">
                            </div>
                           
                            <div class=\"form-group\">
                                <label for=\"password\">Votre mot de passe*</label>
                                <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"******\">
                                <input type=\"hidden\" name=\"_csrf_token\"
                                value=\"{{ csrf_token('authenticate') }}\">
                            </div>
                            
                            <div id=\"form-bar\"></div>
                            <a id=\"notsubyet\" href=\"{{ path('subscribe')}}\">Devenir membre</a>
                            <button type=\"submit\" class=\"btn\">Connexion</button>
                        </form>  
                    </div>
                </div>
            </div>

        </div>
         
    </div>
{% endblock %}
", "security/login.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\security\\login.html.twig");
    }
}
