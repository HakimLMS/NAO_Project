<?php

/* association.html.twig */
class __TwigTemplate_38e62e883d305ab16f940b1cde7b3598f57c7bc8c50d12dfa9ca1a026de700fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "association.html.twig", 1);
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
        $__internal_677e49ac25bca6b83645f172d3a6c02ffba9d84fec70d775563cbb26663d012b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_677e49ac25bca6b83645f172d3a6c02ffba9d84fec70d775563cbb26663d012b->enter($__internal_677e49ac25bca6b83645f172d3a6c02ffba9d84fec70d775563cbb26663d012b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "association.html.twig"));

        $__internal_105d89268b0d613d15a533a39a71b68fc32995f6d2ddb94e7ab200b7f557c972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105d89268b0d613d15a533a39a71b68fc32995f6d2ddb94e7ab200b7f557c972->enter($__internal_105d89268b0d613d15a533a39a71b68fc32995f6d2ddb94e7ab200b7f557c972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "association.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_677e49ac25bca6b83645f172d3a6c02ffba9d84fec70d775563cbb26663d012b->leave($__internal_677e49ac25bca6b83645f172d3a6c02ffba9d84fec70d775563cbb26663d012b_prof);

        
        $__internal_105d89268b0d613d15a533a39a71b68fc32995f6d2ddb94e7ab200b7f557c972->leave($__internal_105d89268b0d613d15a533a39a71b68fc32995f6d2ddb94e7ab200b7f557c972_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d384a9432447d836585f12653c7948bf3da1677020be89ef0c9e3494d4f30459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d384a9432447d836585f12653c7948bf3da1677020be89ef0c9e3494d4f30459->enter($__internal_d384a9432447d836585f12653c7948bf3da1677020be89ef0c9e3494d4f30459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6e9c58f72ae93cf190f15818d6ab4e73c4c213aca2209da46388f73917d2a139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9c58f72ae93cf190f15818d6ab4e73c4c213aca2209da46388f73917d2a139->enter($__internal_6e9c58f72ae93cf190f15818d6ab4e73c4c213aca2209da46388f73917d2a139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "L'association";
        
        $__internal_6e9c58f72ae93cf190f15818d6ab4e73c4c213aca2209da46388f73917d2a139->leave($__internal_6e9c58f72ae93cf190f15818d6ab4e73c4c213aca2209da46388f73917d2a139_prof);

        
        $__internal_d384a9432447d836585f12653c7948bf3da1677020be89ef0c9e3494d4f30459->leave($__internal_d384a9432447d836585f12653c7948bf3da1677020be89ef0c9e3494d4f30459_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecf5276abf6af6292e9e72e0457cf3efbe825ca37f2c21eb332fc0660fa58d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf5276abf6af6292e9e72e0457cf3efbe825ca37f2c21eb332fc0660fa58d43->enter($__internal_ecf5276abf6af6292e9e72e0457cf3efbe825ca37f2c21eb332fc0660fa58d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_930ad3a0f42805b90bd7d9513eac240d4c70ced547064ce8b6fa3bcd920b7814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_930ad3a0f42805b90bd7d9513eac240d4c70ced547064ce8b6fa3bcd920b7814->enter($__internal_930ad3a0f42805b90bd7d9513eac240d4c70ced547064ce8b6fa3bcd920b7814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<div class=\"container-fluid\" id=\"environnement\">
\t\t<img id=\"environnement-img\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/environnement2.jpg"), "html", null, true);
        echo "\" alt=\"environnement écologie\">
\t</div>

\t<div class=\"container-fluid\" id=\"association\">
\t\t<div class=\"container\">
\t\t\t<h2>Notre mission</h2>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 left-column\">
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t\t<br>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 right-column\">
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t\t<br>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a href=\"#\"><button id=\"bouton-don\" type=\"button\" class=\"btn\">Faire un don</button></a>
\t\t</div>
\t</div>

";
        
        $__internal_930ad3a0f42805b90bd7d9513eac240d4c70ced547064ce8b6fa3bcd920b7814->leave($__internal_930ad3a0f42805b90bd7d9513eac240d4c70ced547064ce8b6fa3bcd920b7814_prof);

        
        $__internal_ecf5276abf6af6292e9e72e0457cf3efbe825ca37f2c21eb332fc0660fa58d43->leave($__internal_ecf5276abf6af6292e9e72e0457cf3efbe825ca37f2c21eb332fc0660fa58d43_prof);

    }

    public function getTemplateName()
    {
        return "association.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}L'association{% endblock %}

{% block body %}

\t<div class=\"container-fluid\" id=\"environnement\">
\t\t<img id=\"environnement-img\" src=\"{{ asset('build/img/environnement2.jpg') }}\" alt=\"environnement écologie\">
\t</div>

\t<div class=\"container-fluid\" id=\"association\">
\t\t<div class=\"container\">
\t\t\t<h2>Notre mission</h2>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 left-column\">
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t\t<br>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 right-column\">
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t\t<br>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
\t\t\t\t\ttempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
\t\t\t\t\tquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
\t\t\t\t\tconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
\t\t\t\t\tcillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
\t\t\t\t\tproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a href=\"#\"><button id=\"bouton-don\" type=\"button\" class=\"btn\">Faire un don</button></a>
\t\t</div>
\t</div>

{% endblock %}", "association.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\association.html.twig");
    }
}
