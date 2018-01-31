<?php

/* Administration/UserDashboard.html.twig */
class __TwigTemplate_2d7d3df62af0ba662b89f636341e771aba407f6287752f4e9946bdff3d097df1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Administration/UserDashboard.html.twig", 1);
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
        $__internal_458e23520dea6485b77cd4c2f9f064972e422b7137511c3640590440481f6b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_458e23520dea6485b77cd4c2f9f064972e422b7137511c3640590440481f6b28->enter($__internal_458e23520dea6485b77cd4c2f9f064972e422b7137511c3640590440481f6b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/UserDashboard.html.twig"));

        $__internal_2f733591e13e7329eeeffb620483f80afaebb0450977a5612c36c7a750299aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f733591e13e7329eeeffb620483f80afaebb0450977a5612c36c7a750299aab->enter($__internal_2f733591e13e7329eeeffb620483f80afaebb0450977a5612c36c7a750299aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/UserDashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_458e23520dea6485b77cd4c2f9f064972e422b7137511c3640590440481f6b28->leave($__internal_458e23520dea6485b77cd4c2f9f064972e422b7137511c3640590440481f6b28_prof);

        
        $__internal_2f733591e13e7329eeeffb620483f80afaebb0450977a5612c36c7a750299aab->leave($__internal_2f733591e13e7329eeeffb620483f80afaebb0450977a5612c36c7a750299aab_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee2c2ac5a95de5edb1cef957ce85b92ee51320b1c72413ec96bde8ea0565fdfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee2c2ac5a95de5edb1cef957ce85b92ee51320b1c72413ec96bde8ea0565fdfd->enter($__internal_ee2c2ac5a95de5edb1cef957ce85b92ee51320b1c72413ec96bde8ea0565fdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1791cfa26ab21159aaaaa9143ae8d844a848cbd2bc6e53e3343be17127a873b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1791cfa26ab21159aaaaa9143ae8d844a848cbd2bc6e53e3343be17127a873b2->enter($__internal_1791cfa26ab21159aaaaa9143ae8d844a848cbd2bc6e53e3343be17127a873b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"usercard\">
        <div class=\"card\" style=\"width: 18rem;\">
            
            <div class=\"card-body\">
                <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifyuser");
        echo "\"><img class=\"card-img-top\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("build/img/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "image", array()))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "\" style=\"height: 170px;\"></a>
              <h5 class=\"card-title\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "</h5>
              <p class=\"card-text\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 9, $this->getSourceContext()); })()), "type", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
";
        
        $__internal_1791cfa26ab21159aaaaa9143ae8d844a848cbd2bc6e53e3343be17127a873b2->leave($__internal_1791cfa26ab21159aaaaa9143ae8d844a848cbd2bc6e53e3343be17127a873b2_prof);

        
        $__internal_ee2c2ac5a95de5edb1cef957ce85b92ee51320b1c72413ec96bde8ea0565fdfd->leave($__internal_ee2c2ac5a95de5edb1cef957ce85b92ee51320b1c72413ec96bde8ea0565fdfd_prof);

    }

    public function getTemplateName()
    {
        return "Administration/UserDashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 9,  63 => 8,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"usercard\">
        <div class=\"card\" style=\"width: 18rem;\">
            
            <div class=\"card-body\">
                <a href=\"{{path('modifyuser')}}\"><img class=\"card-img-top\" src=\"{{asset('build/img/'~user.image)}}\" alt=\"{{user.firstname}}\" style=\"height: 170px;\"></a>
              <h5 class=\"card-title\">{{user.firstname}}</h5>
              <p class=\"card-text\">{{user.type}}</p>
            </div>
        </div>
    </div>
{%endblock%}", "Administration/UserDashboard.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\Administration\\UserDashboard.html.twig");
    }
}
