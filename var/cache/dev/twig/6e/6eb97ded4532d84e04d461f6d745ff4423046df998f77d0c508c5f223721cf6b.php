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
        $__internal_f83bf23fe58ab087880642a2e5a66d6298aaa936229b6ed70a099f92d64a718b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f83bf23fe58ab087880642a2e5a66d6298aaa936229b6ed70a099f92d64a718b->enter($__internal_f83bf23fe58ab087880642a2e5a66d6298aaa936229b6ed70a099f92d64a718b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_8faec65c60bb9e9be64dff9ec31d6d7b1e10b2ad07daac17c889e4e2799c46dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8faec65c60bb9e9be64dff9ec31d6d7b1e10b2ad07daac17c889e4e2799c46dd->enter($__internal_8faec65c60bb9e9be64dff9ec31d6d7b1e10b2ad07daac17c889e4e2799c46dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f83bf23fe58ab087880642a2e5a66d6298aaa936229b6ed70a099f92d64a718b->leave($__internal_f83bf23fe58ab087880642a2e5a66d6298aaa936229b6ed70a099f92d64a718b_prof);

        
        $__internal_8faec65c60bb9e9be64dff9ec31d6d7b1e10b2ad07daac17c889e4e2799c46dd->leave($__internal_8faec65c60bb9e9be64dff9ec31d6d7b1e10b2ad07daac17c889e4e2799c46dd_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_74c8e107ee17aad852ab861e118cba9b14d16e04d03b1707a3d72845ba39bc97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c8e107ee17aad852ab861e118cba9b14d16e04d03b1707a3d72845ba39bc97->enter($__internal_74c8e107ee17aad852ab861e118cba9b14d16e04d03b1707a3d72845ba39bc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e2aee161e56e27cdcd30035441b00f1283ace67bc2f23eeb062b80d432ed117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2aee161e56e27cdcd30035441b00f1283ace67bc2f23eeb062b80d432ed117->enter($__internal_8e2aee161e56e27cdcd30035441b00f1283ace67bc2f23eeb062b80d432ed117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_8e2aee161e56e27cdcd30035441b00f1283ace67bc2f23eeb062b80d432ed117->leave($__internal_8e2aee161e56e27cdcd30035441b00f1283ace67bc2f23eeb062b80d432ed117_prof);

        
        $__internal_74c8e107ee17aad852ab861e118cba9b14d16e04d03b1707a3d72845ba39bc97->leave($__internal_74c8e107ee17aad852ab861e118cba9b14d16e04d03b1707a3d72845ba39bc97_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_71c087b53252ff672a627cf79fb0224208d72bcf459b414a839365457b4a2ce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c087b53252ff672a627cf79fb0224208d72bcf459b414a839365457b4a2ce7->enter($__internal_71c087b53252ff672a627cf79fb0224208d72bcf459b414a839365457b4a2ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f84b533b11dafae0e57a717d80c3be6753077858470c86a8b8520d3e28dcf8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f84b533b11dafae0e57a717d80c3be6753077858470c86a8b8520d3e28dcf8e->enter($__internal_3f84b533b11dafae0e57a717d80c3be6753077858470c86a8b8520d3e28dcf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3f84b533b11dafae0e57a717d80c3be6753077858470c86a8b8520d3e28dcf8e->leave($__internal_3f84b533b11dafae0e57a717d80c3be6753077858470c86a8b8520d3e28dcf8e_prof);

        
        $__internal_71c087b53252ff672a627cf79fb0224208d72bcf459b414a839365457b4a2ce7->leave($__internal_71c087b53252ff672a627cf79fb0224208d72bcf459b414a839365457b4a2ce7_prof);

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
