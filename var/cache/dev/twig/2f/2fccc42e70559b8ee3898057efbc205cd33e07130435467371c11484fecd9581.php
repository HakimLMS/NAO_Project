<?php

/* Administration/OrganizerDashboard.html.twig */
class __TwigTemplate_3d6d031b7add388249e40d05bb2ebf436e53555724b9a004463cab378eb609be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Administration/OrganizerDashboard.html.twig", 1);
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
        $__internal_64a9c24ff917e18e2cda9ae82d6f70b5615bfc745f5688305f38866510ab117e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64a9c24ff917e18e2cda9ae82d6f70b5615bfc745f5688305f38866510ab117e->enter($__internal_64a9c24ff917e18e2cda9ae82d6f70b5615bfc745f5688305f38866510ab117e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/OrganizerDashboard.html.twig"));

        $__internal_2304257196eda7501350e8dc40e1cab4910b2b6bbb0bf7812677b7e8da946917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2304257196eda7501350e8dc40e1cab4910b2b6bbb0bf7812677b7e8da946917->enter($__internal_2304257196eda7501350e8dc40e1cab4910b2b6bbb0bf7812677b7e8da946917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/OrganizerDashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64a9c24ff917e18e2cda9ae82d6f70b5615bfc745f5688305f38866510ab117e->leave($__internal_64a9c24ff917e18e2cda9ae82d6f70b5615bfc745f5688305f38866510ab117e_prof);

        
        $__internal_2304257196eda7501350e8dc40e1cab4910b2b6bbb0bf7812677b7e8da946917->leave($__internal_2304257196eda7501350e8dc40e1cab4910b2b6bbb0bf7812677b7e8da946917_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0db72bb80ca36bde850f2b4e6d50e013fba6cff2b6d31e70e7f78f0a337ce82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0db72bb80ca36bde850f2b4e6d50e013fba6cff2b6d31e70e7f78f0a337ce82->enter($__internal_b0db72bb80ca36bde850f2b4e6d50e013fba6cff2b6d31e70e7f78f0a337ce82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a919bb0b2a525fe0947fe7e3d6eb4641f8ad60d4a337b440d864b006bbb307a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a919bb0b2a525fe0947fe7e3d6eb4641f8ad60d4a337b440d864b006bbb307a4->enter($__internal_a919bb0b2a525fe0947fe7e3d6eb4641f8ad60d4a337b440d864b006bbb307a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a919bb0b2a525fe0947fe7e3d6eb4641f8ad60d4a337b440d864b006bbb307a4->leave($__internal_a919bb0b2a525fe0947fe7e3d6eb4641f8ad60d4a337b440d864b006bbb307a4_prof);

        
        $__internal_b0db72bb80ca36bde850f2b4e6d50e013fba6cff2b6d31e70e7f78f0a337ce82->leave($__internal_b0db72bb80ca36bde850f2b4e6d50e013fba6cff2b6d31e70e7f78f0a337ce82_prof);

    }

    public function getTemplateName()
    {
        return "Administration/OrganizerDashboard.html.twig";
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
{%endblock%}
", "Administration/OrganizerDashboard.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\Administration\\OrganizerDashboard.html.twig");
    }
}
