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
        $__internal_da1ecbd05833576167c3ff54742baacbcde1c248ef1dc4274c02864e0db4953c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da1ecbd05833576167c3ff54742baacbcde1c248ef1dc4274c02864e0db4953c->enter($__internal_da1ecbd05833576167c3ff54742baacbcde1c248ef1dc4274c02864e0db4953c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_bfa2dd673287b80c96cf495ee03ddb0c9f36acd6a47012282f58d2639659ded1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa2dd673287b80c96cf495ee03ddb0c9f36acd6a47012282f58d2639659ded1->enter($__internal_bfa2dd673287b80c96cf495ee03ddb0c9f36acd6a47012282f58d2639659ded1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da1ecbd05833576167c3ff54742baacbcde1c248ef1dc4274c02864e0db4953c->leave($__internal_da1ecbd05833576167c3ff54742baacbcde1c248ef1dc4274c02864e0db4953c_prof);

        
        $__internal_bfa2dd673287b80c96cf495ee03ddb0c9f36acd6a47012282f58d2639659ded1->leave($__internal_bfa2dd673287b80c96cf495ee03ddb0c9f36acd6a47012282f58d2639659ded1_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_277fe307979acdfef2506958e4954e1b2062dbda771f98197020a4c84047ff93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_277fe307979acdfef2506958e4954e1b2062dbda771f98197020a4c84047ff93->enter($__internal_277fe307979acdfef2506958e4954e1b2062dbda771f98197020a4c84047ff93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5b06f4c4cd3f3b3d13af45d9d1dd0a716813cfeffed1ed7f9143cbe0417bb4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b06f4c4cd3f3b3d13af45d9d1dd0a716813cfeffed1ed7f9143cbe0417bb4d0->enter($__internal_5b06f4c4cd3f3b3d13af45d9d1dd0a716813cfeffed1ed7f9143cbe0417bb4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_5b06f4c4cd3f3b3d13af45d9d1dd0a716813cfeffed1ed7f9143cbe0417bb4d0->leave($__internal_5b06f4c4cd3f3b3d13af45d9d1dd0a716813cfeffed1ed7f9143cbe0417bb4d0_prof);

        
        $__internal_277fe307979acdfef2506958e4954e1b2062dbda771f98197020a4c84047ff93->leave($__internal_277fe307979acdfef2506958e4954e1b2062dbda771f98197020a4c84047ff93_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6675d740f5ca5758a7efb8301040b79854d0ba72e3ade6af5c5020ff7fe7beb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6675d740f5ca5758a7efb8301040b79854d0ba72e3ade6af5c5020ff7fe7beb7->enter($__internal_6675d740f5ca5758a7efb8301040b79854d0ba72e3ade6af5c5020ff7fe7beb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff903cfe4faf0d8d044a642c47a930a088cc07a7d12f3b4244ebce4ed2b52372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff903cfe4faf0d8d044a642c47a930a088cc07a7d12f3b4244ebce4ed2b52372->enter($__internal_ff903cfe4faf0d8d044a642c47a930a088cc07a7d12f3b4244ebce4ed2b52372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })())) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "    <div class=\"container-fluid\" id=\"login\">
        <div class=\"white-filter\">
            
            <div class=\"container\">
                <div class=\"row\">
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
        
        $__internal_ff903cfe4faf0d8d044a642c47a930a088cc07a7d12f3b4244ebce4ed2b52372->leave($__internal_ff903cfe4faf0d8d044a642c47a930a088cc07a7d12f3b4244ebce4ed2b52372_prof);

        
        $__internal_6675d740f5ca5758a7efb8301040b79854d0ba72e3ade6af5c5020ff7fe7beb7->leave($__internal_6675d740f5ca5758a7efb8301040b79854d0ba72e3ade6af5c5020ff7fe7beb7_prof);

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
        return array (  109 => 30,  102 => 26,  92 => 19,  86 => 16,  77 => 9,  71 => 7,  68 => 6,  59 => 5,  41 => 4,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{# templates/security/login.html.twig #}
{% extends 'base.html.twig' %}
{% block title %}Connexion{% endblock %}
{% block body %}
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
    <div class=\"container-fluid\" id=\"login\">
        <div class=\"white-filter\">
            
            <div class=\"container\">
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
