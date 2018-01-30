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
        $__internal_b7c82aa7af687aeb8114543563197feb10a81e4a803b003fa69fd26069229a3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c82aa7af687aeb8114543563197feb10a81e4a803b003fa69fd26069229a3a->enter($__internal_b7c82aa7af687aeb8114543563197feb10a81e4a803b003fa69fd26069229a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_9c8345349fed51e5ad4dd77bfc17742d20df14a8c11655a2685a0970714c338e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8345349fed51e5ad4dd77bfc17742d20df14a8c11655a2685a0970714c338e->enter($__internal_9c8345349fed51e5ad4dd77bfc17742d20df14a8c11655a2685a0970714c338e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7c82aa7af687aeb8114543563197feb10a81e4a803b003fa69fd26069229a3a->leave($__internal_b7c82aa7af687aeb8114543563197feb10a81e4a803b003fa69fd26069229a3a_prof);

        
        $__internal_9c8345349fed51e5ad4dd77bfc17742d20df14a8c11655a2685a0970714c338e->leave($__internal_9c8345349fed51e5ad4dd77bfc17742d20df14a8c11655a2685a0970714c338e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5aa202f548b0a16089443206e06694f4a08124b5452ad11acaaf366857c32b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5aa202f548b0a16089443206e06694f4a08124b5452ad11acaaf366857c32b4->enter($__internal_c5aa202f548b0a16089443206e06694f4a08124b5452ad11acaaf366857c32b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_18bf1126bda6c1d4220aecdd6afc20faea0f242ce80e064bf7acfaf3aa8b9b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18bf1126bda6c1d4220aecdd6afc20faea0f242ce80e064bf7acfaf3aa8b9b6e->enter($__internal_18bf1126bda6c1d4220aecdd6afc20faea0f242ce80e064bf7acfaf3aa8b9b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_18bf1126bda6c1d4220aecdd6afc20faea0f242ce80e064bf7acfaf3aa8b9b6e->leave($__internal_18bf1126bda6c1d4220aecdd6afc20faea0f242ce80e064bf7acfaf3aa8b9b6e_prof);

        
        $__internal_c5aa202f548b0a16089443206e06694f4a08124b5452ad11acaaf366857c32b4->leave($__internal_c5aa202f548b0a16089443206e06694f4a08124b5452ad11acaaf366857c32b4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_692952eb8f4ced651e5ea770710a5022d20109cb4edac86162631179a7c27a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_692952eb8f4ced651e5ea770710a5022d20109cb4edac86162631179a7c27a5f->enter($__internal_692952eb8f4ced651e5ea770710a5022d20109cb4edac86162631179a7c27a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa85e730ac46c36df27bdcb9b60dd5308b53043feacacbfa02f1acc0bba80892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa85e730ac46c36df27bdcb9b60dd5308b53043feacacbfa02f1acc0bba80892->enter($__internal_aa85e730ac46c36df27bdcb9b60dd5308b53043feacacbfa02f1acc0bba80892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aa85e730ac46c36df27bdcb9b60dd5308b53043feacacbfa02f1acc0bba80892->leave($__internal_aa85e730ac46c36df27bdcb9b60dd5308b53043feacacbfa02f1acc0bba80892_prof);

        
        $__internal_692952eb8f4ced651e5ea770710a5022d20109cb4edac86162631179a7c27a5f->leave($__internal_692952eb8f4ced651e5ea770710a5022d20109cb4edac86162631179a7c27a5f_prof);

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
