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
        $__internal_8eb321c6099787050e01a4dfef1c9a181093a07a1c7a9c580077dd9c980c395d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb321c6099787050e01a4dfef1c9a181093a07a1c7a9c580077dd9c980c395d->enter($__internal_8eb321c6099787050e01a4dfef1c9a181093a07a1c7a9c580077dd9c980c395d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_777b926e57e9e641e3ced19c65d15f34e664f33ccb1f1d3ad6ff535ee8b44c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777b926e57e9e641e3ced19c65d15f34e664f33ccb1f1d3ad6ff535ee8b44c77->enter($__internal_777b926e57e9e641e3ced19c65d15f34e664f33ccb1f1d3ad6ff535ee8b44c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eb321c6099787050e01a4dfef1c9a181093a07a1c7a9c580077dd9c980c395d->leave($__internal_8eb321c6099787050e01a4dfef1c9a181093a07a1c7a9c580077dd9c980c395d_prof);

        
        $__internal_777b926e57e9e641e3ced19c65d15f34e664f33ccb1f1d3ad6ff535ee8b44c77->leave($__internal_777b926e57e9e641e3ced19c65d15f34e664f33ccb1f1d3ad6ff535ee8b44c77_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e739bc8815ebc849a1ae5094360e4e4cb08492d93493fdb52f05db01bb004ef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e739bc8815ebc849a1ae5094360e4e4cb08492d93493fdb52f05db01bb004ef1->enter($__internal_e739bc8815ebc849a1ae5094360e4e4cb08492d93493fdb52f05db01bb004ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c405bc9c4f9fc8565ef2d6498fac97ed795e2e88ca448e0e24a4a2f27592d1b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c405bc9c4f9fc8565ef2d6498fac97ed795e2e88ca448e0e24a4a2f27592d1b9->enter($__internal_c405bc9c4f9fc8565ef2d6498fac97ed795e2e88ca448e0e24a4a2f27592d1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_c405bc9c4f9fc8565ef2d6498fac97ed795e2e88ca448e0e24a4a2f27592d1b9->leave($__internal_c405bc9c4f9fc8565ef2d6498fac97ed795e2e88ca448e0e24a4a2f27592d1b9_prof);

        
        $__internal_e739bc8815ebc849a1ae5094360e4e4cb08492d93493fdb52f05db01bb004ef1->leave($__internal_e739bc8815ebc849a1ae5094360e4e4cb08492d93493fdb52f05db01bb004ef1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_565a7c9b2442108b03a5a24cc81ed14255373c795a716775bb69b3624489a1e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_565a7c9b2442108b03a5a24cc81ed14255373c795a716775bb69b3624489a1e6->enter($__internal_565a7c9b2442108b03a5a24cc81ed14255373c795a716775bb69b3624489a1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e6b543f9aef4131830a3977babd6547b49313cc6d67af1c3fc7862c6dde159f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6b543f9aef4131830a3977babd6547b49313cc6d67af1c3fc7862c6dde159f->enter($__internal_0e6b543f9aef4131830a3977babd6547b49313cc6d67af1c3fc7862c6dde159f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0e6b543f9aef4131830a3977babd6547b49313cc6d67af1c3fc7862c6dde159f->leave($__internal_0e6b543f9aef4131830a3977babd6547b49313cc6d67af1c3fc7862c6dde159f_prof);

        
        $__internal_565a7c9b2442108b03a5a24cc81ed14255373c795a716775bb69b3624489a1e6->leave($__internal_565a7c9b2442108b03a5a24cc81ed14255373c795a716775bb69b3624489a1e6_prof);

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
