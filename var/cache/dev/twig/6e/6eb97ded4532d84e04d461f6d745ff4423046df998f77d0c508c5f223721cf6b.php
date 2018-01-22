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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cb5696b0adcf1b6c43f621a0b88b39157db729d336f5e97d1a9d7b29a952b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cb5696b0adcf1b6c43f621a0b88b39157db729d336f5e97d1a9d7b29a952b76->enter($__internal_9cb5696b0adcf1b6c43f621a0b88b39157db729d336f5e97d1a9d7b29a952b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_5433107e8692d1a0ddf2c51fac4a5de7b34cfc5e0e052375c65e692f5bc59416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5433107e8692d1a0ddf2c51fac4a5de7b34cfc5e0e052375c65e692f5bc59416->enter($__internal_5433107e8692d1a0ddf2c51fac4a5de7b34cfc5e0e052375c65e692f5bc59416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cb5696b0adcf1b6c43f621a0b88b39157db729d336f5e97d1a9d7b29a952b76->leave($__internal_9cb5696b0adcf1b6c43f621a0b88b39157db729d336f5e97d1a9d7b29a952b76_prof);

        
        $__internal_5433107e8692d1a0ddf2c51fac4a5de7b34cfc5e0e052375c65e692f5bc59416->leave($__internal_5433107e8692d1a0ddf2c51fac4a5de7b34cfc5e0e052375c65e692f5bc59416_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4b0d391084de88c6340e804ab476d108836e1b038e5d2c3b9b9626ec39d36d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b0d391084de88c6340e804ab476d108836e1b038e5d2c3b9b9626ec39d36d5->enter($__internal_d4b0d391084de88c6340e804ab476d108836e1b038e5d2c3b9b9626ec39d36d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cdade9dfd8e261dd5761cd20bfc079f37fb704c40cc02c009ebd50ddfe55d6f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdade9dfd8e261dd5761cd20bfc079f37fb704c40cc02c009ebd50ddfe55d6f6->enter($__internal_cdade9dfd8e261dd5761cd20bfc079f37fb704c40cc02c009ebd50ddfe55d6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 5, $this->getSourceContext()); })())) {
            // line 6
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "    <div>
    <form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
        <label for=\"username\">Mail</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />

        <label for=\"password\">Mot de passe:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <input type=\"hidden\" name=\"_csrf_token\"
        value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
        <button type=\"submit\">Connexion</button>
    </form>
        <a id=\"notsubyet\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subscribe");
        echo "\"> Pas encore de compte ?</a>    
    </div>
";
        
        $__internal_cdade9dfd8e261dd5761cd20bfc079f37fb704c40cc02c009ebd50ddfe55d6f6->leave($__internal_cdade9dfd8e261dd5761cd20bfc079f37fb704c40cc02c009ebd50ddfe55d6f6_prof);

        
        $__internal_d4b0d391084de88c6340e804ab476d108836e1b038e5d2c3b9b9626ec39d36d5->leave($__internal_d4b0d391084de88c6340e804ab476d108836e1b038e5d2c3b9b9626ec39d36d5_prof);

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
        return array (  80 => 19,  74 => 16,  66 => 11,  61 => 9,  58 => 8,  52 => 6,  49 => 5,  40 => 4,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{# templates/security/login.html.twig #}
{% extends 'base.html.twig' %}
{% block body %}
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
    <div>
    <form action=\"{{ path('login') }}\" method=\"post\">
        <label for=\"username\">Mail</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

        <label for=\"password\">Mot de passe:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <input type=\"hidden\" name=\"_csrf_token\"
        value=\"{{ csrf_token('authenticate') }}\">
        <button type=\"submit\">Connexion</button>
    </form>
        <a id=\"notsubyet\" href=\"{{ path('subscribe')}}\"> Pas encore de compte ?</a>    
    </div>
{% endblock %}
", "security/login.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\security\\login.html.twig");
    }
}
