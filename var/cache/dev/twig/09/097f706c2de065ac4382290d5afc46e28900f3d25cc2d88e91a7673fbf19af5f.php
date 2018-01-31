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
        $__internal_45698618e2bbb20057d022dac0b4350bd67a1e32cfaa7cc349851a81ec085335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45698618e2bbb20057d022dac0b4350bd67a1e32cfaa7cc349851a81ec085335->enter($__internal_45698618e2bbb20057d022dac0b4350bd67a1e32cfaa7cc349851a81ec085335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "association.html.twig"));

        $__internal_f6a2569879c932fb57beb93fffc505f8c98ee3b7f50f284d837fd51239eb8c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a2569879c932fb57beb93fffc505f8c98ee3b7f50f284d837fd51239eb8c0d->enter($__internal_f6a2569879c932fb57beb93fffc505f8c98ee3b7f50f284d837fd51239eb8c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "association.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45698618e2bbb20057d022dac0b4350bd67a1e32cfaa7cc349851a81ec085335->leave($__internal_45698618e2bbb20057d022dac0b4350bd67a1e32cfaa7cc349851a81ec085335_prof);

        
        $__internal_f6a2569879c932fb57beb93fffc505f8c98ee3b7f50f284d837fd51239eb8c0d->leave($__internal_f6a2569879c932fb57beb93fffc505f8c98ee3b7f50f284d837fd51239eb8c0d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_099891d5aa74393287796c80d6741f700b60309b1fcea50681ba5b2dccaff57f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099891d5aa74393287796c80d6741f700b60309b1fcea50681ba5b2dccaff57f->enter($__internal_099891d5aa74393287796c80d6741f700b60309b1fcea50681ba5b2dccaff57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_33f00f80bdc4dafd38b26041540298f09d155dd3a075b3e7f4e166ceb6c6b166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f00f80bdc4dafd38b26041540298f09d155dd3a075b3e7f4e166ceb6c6b166->enter($__internal_33f00f80bdc4dafd38b26041540298f09d155dd3a075b3e7f4e166ceb6c6b166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "L'association";
        
        $__internal_33f00f80bdc4dafd38b26041540298f09d155dd3a075b3e7f4e166ceb6c6b166->leave($__internal_33f00f80bdc4dafd38b26041540298f09d155dd3a075b3e7f4e166ceb6c6b166_prof);

        
        $__internal_099891d5aa74393287796c80d6741f700b60309b1fcea50681ba5b2dccaff57f->leave($__internal_099891d5aa74393287796c80d6741f700b60309b1fcea50681ba5b2dccaff57f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f0ef7086f8e7bef04232bd456decea58c1dad95396669f24d2ca341c2c17d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f0ef7086f8e7bef04232bd456decea58c1dad95396669f24d2ca341c2c17d43->enter($__internal_6f0ef7086f8e7bef04232bd456decea58c1dad95396669f24d2ca341c2c17d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7b25e4e93ee66480134b2ae16e4fd9f2484ec7c97a00154c09fd0f39689e53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b25e4e93ee66480134b2ae16e4fd9f2484ec7c97a00154c09fd0f39689e53a->enter($__internal_a7b25e4e93ee66480134b2ae16e4fd9f2484ec7c97a00154c09fd0f39689e53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t<a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("don");
        echo "\"><button id=\"bouton-don\" type=\"button\" class=\"btn\">Faire un don</button></a>
\t\t</div>
\t</div>

";
        
        $__internal_a7b25e4e93ee66480134b2ae16e4fd9f2484ec7c97a00154c09fd0f39689e53a->leave($__internal_a7b25e4e93ee66480134b2ae16e4fd9f2484ec7c97a00154c09fd0f39689e53a_prof);

        
        $__internal_6f0ef7086f8e7bef04232bd456decea58c1dad95396669f24d2ca341c2c17d43->leave($__internal_6f0ef7086f8e7bef04232bd456decea58c1dad95396669f24d2ca341c2c17d43_prof);

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
        return array (  113 => 46,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
\t\t\t<a href=\"{{ path('don') }}\"><button id=\"bouton-don\" type=\"button\" class=\"btn\">Faire un don</button></a>
\t\t</div>
\t</div>

{% endblock %}", "association.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\association.html.twig");
    }
}
