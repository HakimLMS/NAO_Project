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
        $__internal_feaeed19ae958b306d6f7f66b7ae776cdcfdb2bc3fd4423bbfadb9947ed516f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feaeed19ae958b306d6f7f66b7ae776cdcfdb2bc3fd4423bbfadb9947ed516f4->enter($__internal_feaeed19ae958b306d6f7f66b7ae776cdcfdb2bc3fd4423bbfadb9947ed516f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_a2ec65ce933a17b7bb094734e6aed9096e61c50afa9be3f2c6578a4a507c40d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ec65ce933a17b7bb094734e6aed9096e61c50afa9be3f2c6578a4a507c40d1->enter($__internal_a2ec65ce933a17b7bb094734e6aed9096e61c50afa9be3f2c6578a4a507c40d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feaeed19ae958b306d6f7f66b7ae776cdcfdb2bc3fd4423bbfadb9947ed516f4->leave($__internal_feaeed19ae958b306d6f7f66b7ae776cdcfdb2bc3fd4423bbfadb9947ed516f4_prof);

        
        $__internal_a2ec65ce933a17b7bb094734e6aed9096e61c50afa9be3f2c6578a4a507c40d1->leave($__internal_a2ec65ce933a17b7bb094734e6aed9096e61c50afa9be3f2c6578a4a507c40d1_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ef3949af6ee2d9236b8468011404e2a0c507d980fab9a2287efcbfbd4ad38c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ef3949af6ee2d9236b8468011404e2a0c507d980fab9a2287efcbfbd4ad38c9->enter($__internal_0ef3949af6ee2d9236b8468011404e2a0c507d980fab9a2287efcbfbd4ad38c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d98496398e6847be967e102f289bc01636c4b26e34a9bf59c030b43056851d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98496398e6847be967e102f289bc01636c4b26e34a9bf59c030b43056851d37->enter($__internal_d98496398e6847be967e102f289bc01636c4b26e34a9bf59c030b43056851d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_d98496398e6847be967e102f289bc01636c4b26e34a9bf59c030b43056851d37->leave($__internal_d98496398e6847be967e102f289bc01636c4b26e34a9bf59c030b43056851d37_prof);

        
        $__internal_0ef3949af6ee2d9236b8468011404e2a0c507d980fab9a2287efcbfbd4ad38c9->leave($__internal_0ef3949af6ee2d9236b8468011404e2a0c507d980fab9a2287efcbfbd4ad38c9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b83f878b03f5b4402b8812e3a7cae3071002548b386c74833c6a5a626588727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b83f878b03f5b4402b8812e3a7cae3071002548b386c74833c6a5a626588727->enter($__internal_3b83f878b03f5b4402b8812e3a7cae3071002548b386c74833c6a5a626588727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bed3771a20381dacb48b479101879abfce7592dca1772d594a34e39c16e900a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed3771a20381dacb48b479101879abfce7592dca1772d594a34e39c16e900a8->enter($__internal_bed3771a20381dacb48b479101879abfce7592dca1772d594a34e39c16e900a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bed3771a20381dacb48b479101879abfce7592dca1772d594a34e39c16e900a8->leave($__internal_bed3771a20381dacb48b479101879abfce7592dca1772d594a34e39c16e900a8_prof);

        
        $__internal_3b83f878b03f5b4402b8812e3a7cae3071002548b386c74833c6a5a626588727->leave($__internal_3b83f878b03f5b4402b8812e3a7cae3071002548b386c74833c6a5a626588727_prof);

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
", "security/login.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\security\\login.html.twig");
    }
}
