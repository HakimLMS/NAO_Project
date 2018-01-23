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
        $__internal_0dd3e28d725b42142d9fae7b85dd87c5d0a634cb62e9893a7fe8b9312908fc4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dd3e28d725b42142d9fae7b85dd87c5d0a634cb62e9893a7fe8b9312908fc4f->enter($__internal_0dd3e28d725b42142d9fae7b85dd87c5d0a634cb62e9893a7fe8b9312908fc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/UserDashboard.html.twig"));

        $__internal_fada10d528f91d05d0c9206c3625bc24798067c12acf23848ddee4ee36143078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fada10d528f91d05d0c9206c3625bc24798067c12acf23848ddee4ee36143078->enter($__internal_fada10d528f91d05d0c9206c3625bc24798067c12acf23848ddee4ee36143078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/UserDashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dd3e28d725b42142d9fae7b85dd87c5d0a634cb62e9893a7fe8b9312908fc4f->leave($__internal_0dd3e28d725b42142d9fae7b85dd87c5d0a634cb62e9893a7fe8b9312908fc4f_prof);

        
        $__internal_fada10d528f91d05d0c9206c3625bc24798067c12acf23848ddee4ee36143078->leave($__internal_fada10d528f91d05d0c9206c3625bc24798067c12acf23848ddee4ee36143078_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_beb7849849f076d666abf08ded50caaf81b0fbd3d121cfa0e4bd3b8d8fdd1ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb7849849f076d666abf08ded50caaf81b0fbd3d121cfa0e4bd3b8d8fdd1ec1->enter($__internal_beb7849849f076d666abf08ded50caaf81b0fbd3d121cfa0e4bd3b8d8fdd1ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_871d886e8576b87058520633e6ed80b58a538e21daa2850fa2c79b7cd511b1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_871d886e8576b87058520633e6ed80b58a538e21daa2850fa2c79b7cd511b1ab->enter($__internal_871d886e8576b87058520633e6ed80b58a538e21daa2850fa2c79b7cd511b1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_871d886e8576b87058520633e6ed80b58a538e21daa2850fa2c79b7cd511b1ab->leave($__internal_871d886e8576b87058520633e6ed80b58a538e21daa2850fa2c79b7cd511b1ab_prof);

        
        $__internal_beb7849849f076d666abf08ded50caaf81b0fbd3d121cfa0e4bd3b8d8fdd1ec1->leave($__internal_beb7849849f076d666abf08ded50caaf81b0fbd3d121cfa0e4bd3b8d8fdd1ec1_prof);

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
