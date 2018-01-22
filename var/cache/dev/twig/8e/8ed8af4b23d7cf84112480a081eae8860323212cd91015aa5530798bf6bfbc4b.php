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
        $__internal_2518e0dfbc2f356fc1f031daaf0c2a1d234fbfc29cc7893b8b85b2c1197dd2d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2518e0dfbc2f356fc1f031daaf0c2a1d234fbfc29cc7893b8b85b2c1197dd2d1->enter($__internal_2518e0dfbc2f356fc1f031daaf0c2a1d234fbfc29cc7893b8b85b2c1197dd2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/UserDashboard.html.twig"));

        $__internal_cd86d6ec517548309d4ebee80b42c5a855b7d57dfd4bf0b2aef88bab93195ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd86d6ec517548309d4ebee80b42c5a855b7d57dfd4bf0b2aef88bab93195ec9->enter($__internal_cd86d6ec517548309d4ebee80b42c5a855b7d57dfd4bf0b2aef88bab93195ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/UserDashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2518e0dfbc2f356fc1f031daaf0c2a1d234fbfc29cc7893b8b85b2c1197dd2d1->leave($__internal_2518e0dfbc2f356fc1f031daaf0c2a1d234fbfc29cc7893b8b85b2c1197dd2d1_prof);

        
        $__internal_cd86d6ec517548309d4ebee80b42c5a855b7d57dfd4bf0b2aef88bab93195ec9->leave($__internal_cd86d6ec517548309d4ebee80b42c5a855b7d57dfd4bf0b2aef88bab93195ec9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_158cbc2c5ce5b0bcea61e19b278f4bd6bf7d4e2f7a9c3d6eb680638bdd123a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158cbc2c5ce5b0bcea61e19b278f4bd6bf7d4e2f7a9c3d6eb680638bdd123a0a->enter($__internal_158cbc2c5ce5b0bcea61e19b278f4bd6bf7d4e2f7a9c3d6eb680638bdd123a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e5a1768c955a40c757b72f19844176d5dc7f29af32c8b3a3a2def0e5d89a12f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5a1768c955a40c757b72f19844176d5dc7f29af32c8b3a3a2def0e5d89a12f->enter($__internal_3e5a1768c955a40c757b72f19844176d5dc7f29af32c8b3a3a2def0e5d89a12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"usercard\">
        <div class=\"card\" style=\"width: 18rem;\">
            
            <div class=\"card-body\">
               <img class=\"card-img-top\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("build/img/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "image", array()))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "\" style=\"height: 170px;\">
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
        
        $__internal_3e5a1768c955a40c757b72f19844176d5dc7f29af32c8b3a3a2def0e5d89a12f->leave($__internal_3e5a1768c955a40c757b72f19844176d5dc7f29af32c8b3a3a2def0e5d89a12f_prof);

        
        $__internal_158cbc2c5ce5b0bcea61e19b278f4bd6bf7d4e2f7a9c3d6eb680638bdd123a0a->leave($__internal_158cbc2c5ce5b0bcea61e19b278f4bd6bf7d4e2f7a9c3d6eb680638bdd123a0a_prof);

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
        return array (  65 => 9,  61 => 8,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"usercard\">
        <div class=\"card\" style=\"width: 18rem;\">
            
            <div class=\"card-body\">
               <img class=\"card-img-top\" src=\"{{asset('build/img/'~user.image)}}\" alt=\"{{user.firstname}}\" style=\"height: 170px;\">
              <h5 class=\"card-title\">{{user.firstname}}</h5>
              <p class=\"card-text\">{{user.type}}</p>
            </div>
        </div>
    </div>
{%endblock%}", "Administration/UserDashboard.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Administration\\UserDashboard.html.twig");
    }
}
