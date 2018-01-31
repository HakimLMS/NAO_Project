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
        $__internal_37340e6864b6357983b266f20493b254afb78c0d2f4fe2aca3d182e93a4b9c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37340e6864b6357983b266f20493b254afb78c0d2f4fe2aca3d182e93a4b9c0b->enter($__internal_37340e6864b6357983b266f20493b254afb78c0d2f4fe2aca3d182e93a4b9c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_63b1fc082817b100de96759c05016a880b27d03eeb75973ce839c52acce925cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b1fc082817b100de96759c05016a880b27d03eeb75973ce839c52acce925cf->enter($__internal_63b1fc082817b100de96759c05016a880b27d03eeb75973ce839c52acce925cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37340e6864b6357983b266f20493b254afb78c0d2f4fe2aca3d182e93a4b9c0b->leave($__internal_37340e6864b6357983b266f20493b254afb78c0d2f4fe2aca3d182e93a4b9c0b_prof);

        
        $__internal_63b1fc082817b100de96759c05016a880b27d03eeb75973ce839c52acce925cf->leave($__internal_63b1fc082817b100de96759c05016a880b27d03eeb75973ce839c52acce925cf_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0dab0fcfb92f13e80ba967292404cf1c7081b88aef5c3effb7fc25dc151c6ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0dab0fcfb92f13e80ba967292404cf1c7081b88aef5c3effb7fc25dc151c6ff->enter($__internal_a0dab0fcfb92f13e80ba967292404cf1c7081b88aef5c3effb7fc25dc151c6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9513ac24bd9154cc7c97fb9e0cb232c1de9bb296f553f305a2387426f33c8b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9513ac24bd9154cc7c97fb9e0cb232c1de9bb296f553f305a2387426f33c8b11->enter($__internal_9513ac24bd9154cc7c97fb9e0cb232c1de9bb296f553f305a2387426f33c8b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_9513ac24bd9154cc7c97fb9e0cb232c1de9bb296f553f305a2387426f33c8b11->leave($__internal_9513ac24bd9154cc7c97fb9e0cb232c1de9bb296f553f305a2387426f33c8b11_prof);

        
        $__internal_a0dab0fcfb92f13e80ba967292404cf1c7081b88aef5c3effb7fc25dc151c6ff->leave($__internal_a0dab0fcfb92f13e80ba967292404cf1c7081b88aef5c3effb7fc25dc151c6ff_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_433b7eb8e96b0285f4bda5dc555e504000d57c10a058a0989d656d046e5047d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_433b7eb8e96b0285f4bda5dc555e504000d57c10a058a0989d656d046e5047d1->enter($__internal_433b7eb8e96b0285f4bda5dc555e504000d57c10a058a0989d656d046e5047d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d360a1f71fe7047a09e4b259e85080216e4208618ed4b8ede88a706528a5d3cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d360a1f71fe7047a09e4b259e85080216e4208618ed4b8ede88a706528a5d3cd->enter($__internal_d360a1f71fe7047a09e4b259e85080216e4208618ed4b8ede88a706528a5d3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d360a1f71fe7047a09e4b259e85080216e4208618ed4b8ede88a706528a5d3cd->leave($__internal_d360a1f71fe7047a09e4b259e85080216e4208618ed4b8ede88a706528a5d3cd_prof);

        
        $__internal_433b7eb8e96b0285f4bda5dc555e504000d57c10a058a0989d656d046e5047d1->leave($__internal_433b7eb8e96b0285f4bda5dc555e504000d57c10a058a0989d656d046e5047d1_prof);

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
