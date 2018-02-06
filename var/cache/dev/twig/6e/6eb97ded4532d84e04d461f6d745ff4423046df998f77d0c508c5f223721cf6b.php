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
        $__internal_265a578cf5e74d0378a822220d6b9a308d81ee86a50e5684fff7cbe96068a121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265a578cf5e74d0378a822220d6b9a308d81ee86a50e5684fff7cbe96068a121->enter($__internal_265a578cf5e74d0378a822220d6b9a308d81ee86a50e5684fff7cbe96068a121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_dbe595de85552a16d4082e4c14d64beaf88e79f8cc1807ea2ff79d6740c4de71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe595de85552a16d4082e4c14d64beaf88e79f8cc1807ea2ff79d6740c4de71->enter($__internal_dbe595de85552a16d4082e4c14d64beaf88e79f8cc1807ea2ff79d6740c4de71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_265a578cf5e74d0378a822220d6b9a308d81ee86a50e5684fff7cbe96068a121->leave($__internal_265a578cf5e74d0378a822220d6b9a308d81ee86a50e5684fff7cbe96068a121_prof);

        
        $__internal_dbe595de85552a16d4082e4c14d64beaf88e79f8cc1807ea2ff79d6740c4de71->leave($__internal_dbe595de85552a16d4082e4c14d64beaf88e79f8cc1807ea2ff79d6740c4de71_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_394a76ee565b890b564c06788c6f8916be3a53d3794853004d16d7c3d7dc0be6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394a76ee565b890b564c06788c6f8916be3a53d3794853004d16d7c3d7dc0be6->enter($__internal_394a76ee565b890b564c06788c6f8916be3a53d3794853004d16d7c3d7dc0be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1bc33acf99c4c459a1c7d9c80cda4c8b99ece5dcfcd1e0627e3546176e226f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc33acf99c4c459a1c7d9c80cda4c8b99ece5dcfcd1e0627e3546176e226f7d->enter($__internal_1bc33acf99c4c459a1c7d9c80cda4c8b99ece5dcfcd1e0627e3546176e226f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_1bc33acf99c4c459a1c7d9c80cda4c8b99ece5dcfcd1e0627e3546176e226f7d->leave($__internal_1bc33acf99c4c459a1c7d9c80cda4c8b99ece5dcfcd1e0627e3546176e226f7d_prof);

        
        $__internal_394a76ee565b890b564c06788c6f8916be3a53d3794853004d16d7c3d7dc0be6->leave($__internal_394a76ee565b890b564c06788c6f8916be3a53d3794853004d16d7c3d7dc0be6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c44bd8c24b236e623a6f9c5d1315c7ca9babd352587fccc86e24c52869faff07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44bd8c24b236e623a6f9c5d1315c7ca9babd352587fccc86e24c52869faff07->enter($__internal_c44bd8c24b236e623a6f9c5d1315c7ca9babd352587fccc86e24c52869faff07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6082e1306b1ef1317ab225989ca17e3cb7849804ee284c9d5157a9946f06a02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6082e1306b1ef1317ab225989ca17e3cb7849804ee284c9d5157a9946f06a02d->enter($__internal_6082e1306b1ef1317ab225989ca17e3cb7849804ee284c9d5157a9946f06a02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6082e1306b1ef1317ab225989ca17e3cb7849804ee284c9d5157a9946f06a02d->leave($__internal_6082e1306b1ef1317ab225989ca17e3cb7849804ee284c9d5157a9946f06a02d_prof);

        
        $__internal_c44bd8c24b236e623a6f9c5d1315c7ca9babd352587fccc86e24c52869faff07->leave($__internal_c44bd8c24b236e623a6f9c5d1315c7ca9babd352587fccc86e24c52869faff07_prof);

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
