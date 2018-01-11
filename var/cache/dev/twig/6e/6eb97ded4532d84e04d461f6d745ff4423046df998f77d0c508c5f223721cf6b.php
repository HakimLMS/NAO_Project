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
        $__internal_c4583ff25b1fa151c8d8215e614bebfbab52bc7f9ecfa1c4fd144a6afec329a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4583ff25b1fa151c8d8215e614bebfbab52bc7f9ecfa1c4fd144a6afec329a9->enter($__internal_c4583ff25b1fa151c8d8215e614bebfbab52bc7f9ecfa1c4fd144a6afec329a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_a82500d7ff04775a0fddb3bff8b40fa71e5bfb869cac6f5702b24457e5d9d5c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82500d7ff04775a0fddb3bff8b40fa71e5bfb869cac6f5702b24457e5d9d5c3->enter($__internal_a82500d7ff04775a0fddb3bff8b40fa71e5bfb869cac6f5702b24457e5d9d5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4583ff25b1fa151c8d8215e614bebfbab52bc7f9ecfa1c4fd144a6afec329a9->leave($__internal_c4583ff25b1fa151c8d8215e614bebfbab52bc7f9ecfa1c4fd144a6afec329a9_prof);

        
        $__internal_a82500d7ff04775a0fddb3bff8b40fa71e5bfb869cac6f5702b24457e5d9d5c3->leave($__internal_a82500d7ff04775a0fddb3bff8b40fa71e5bfb869cac6f5702b24457e5d9d5c3_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e6d11dd30d5fe6d4ae4d5a35db3b0531fe395108ff7444ac7f7a06186998da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6d11dd30d5fe6d4ae4d5a35db3b0531fe395108ff7444ac7f7a06186998da8->enter($__internal_8e6d11dd30d5fe6d4ae4d5a35db3b0531fe395108ff7444ac7f7a06186998da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0149190b07fd9d96131d57f2c2c8f39508a8c8047f2974a0a64061ae33ba8403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0149190b07fd9d96131d57f2c2c8f39508a8c8047f2974a0a64061ae33ba8403->enter($__internal_0149190b07fd9d96131d57f2c2c8f39508a8c8047f2974a0a64061ae33ba8403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0149190b07fd9d96131d57f2c2c8f39508a8c8047f2974a0a64061ae33ba8403->leave($__internal_0149190b07fd9d96131d57f2c2c8f39508a8c8047f2974a0a64061ae33ba8403_prof);

        
        $__internal_8e6d11dd30d5fe6d4ae4d5a35db3b0531fe395108ff7444ac7f7a06186998da8->leave($__internal_8e6d11dd30d5fe6d4ae4d5a35db3b0531fe395108ff7444ac7f7a06186998da8_prof);

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
", "security/login.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\security\\login.html.twig");
    }
}
