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
        $__internal_224fc76e80906f3b5941dfde20b4fbe9e9ebad55cf87a74b9b746bdd6b74fd80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_224fc76e80906f3b5941dfde20b4fbe9e9ebad55cf87a74b9b746bdd6b74fd80->enter($__internal_224fc76e80906f3b5941dfde20b4fbe9e9ebad55cf87a74b9b746bdd6b74fd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/UserDashboard.html.twig"));

        $__internal_362ec050db82ed7d32631ea3e970afc1ff09266e1ed045629cb1f81ea85e4098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_362ec050db82ed7d32631ea3e970afc1ff09266e1ed045629cb1f81ea85e4098->enter($__internal_362ec050db82ed7d32631ea3e970afc1ff09266e1ed045629cb1f81ea85e4098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/UserDashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_224fc76e80906f3b5941dfde20b4fbe9e9ebad55cf87a74b9b746bdd6b74fd80->leave($__internal_224fc76e80906f3b5941dfde20b4fbe9e9ebad55cf87a74b9b746bdd6b74fd80_prof);

        
        $__internal_362ec050db82ed7d32631ea3e970afc1ff09266e1ed045629cb1f81ea85e4098->leave($__internal_362ec050db82ed7d32631ea3e970afc1ff09266e1ed045629cb1f81ea85e4098_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d9dc33e3ab291d70ae8cc57ddec9c606d88a81d284aa84890eb55561cb76876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d9dc33e3ab291d70ae8cc57ddec9c606d88a81d284aa84890eb55561cb76876->enter($__internal_7d9dc33e3ab291d70ae8cc57ddec9c606d88a81d284aa84890eb55561cb76876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3f6f5ab3d3ed7ff1d1e9697b50f05ea8ed4e0b674a6642ca11777beadff62e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f6f5ab3d3ed7ff1d1e9697b50f05ea8ed4e0b674a6642ca11777beadff62e8->enter($__internal_a3f6f5ab3d3ed7ff1d1e9697b50f05ea8ed4e0b674a6642ca11777beadff62e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a3f6f5ab3d3ed7ff1d1e9697b50f05ea8ed4e0b674a6642ca11777beadff62e8->leave($__internal_a3f6f5ab3d3ed7ff1d1e9697b50f05ea8ed4e0b674a6642ca11777beadff62e8_prof);

        
        $__internal_7d9dc33e3ab291d70ae8cc57ddec9c606d88a81d284aa84890eb55561cb76876->leave($__internal_7d9dc33e3ab291d70ae8cc57ddec9c606d88a81d284aa84890eb55561cb76876_prof);

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
{%endblock%}", "Administration/UserDashboard.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Administration\\UserDashboard.html.twig");
    }
}
