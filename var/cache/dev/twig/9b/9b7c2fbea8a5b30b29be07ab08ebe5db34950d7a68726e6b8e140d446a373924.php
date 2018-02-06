<?php

/* research/fiche-oiseau.html.twig */
class __TwigTemplate_adc8fa06eac53877e803684eea22a7079c920c98f2aff148d29f1814172165a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "research/fiche-oiseau.html.twig", 1);
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
        $__internal_22f0a3ce797b4fc908c1aa70e73fa7db89649f975c31b8a9643c36ac3e0f3097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f0a3ce797b4fc908c1aa70e73fa7db89649f975c31b8a9643c36ac3e0f3097->enter($__internal_22f0a3ce797b4fc908c1aa70e73fa7db89649f975c31b8a9643c36ac3e0f3097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/fiche-oiseau.html.twig"));

        $__internal_265b4485f69bc0fdae37f47464cd0a34f19e741cd9985b19991185fa6f5be538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265b4485f69bc0fdae37f47464cd0a34f19e741cd9985b19991185fa6f5be538->enter($__internal_265b4485f69bc0fdae37f47464cd0a34f19e741cd9985b19991185fa6f5be538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/fiche-oiseau.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22f0a3ce797b4fc908c1aa70e73fa7db89649f975c31b8a9643c36ac3e0f3097->leave($__internal_22f0a3ce797b4fc908c1aa70e73fa7db89649f975c31b8a9643c36ac3e0f3097_prof);

        
        $__internal_265b4485f69bc0fdae37f47464cd0a34f19e741cd9985b19991185fa6f5be538->leave($__internal_265b4485f69bc0fdae37f47464cd0a34f19e741cd9985b19991185fa6f5be538_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_42642c825f2084a047fcd8484e7d83d95eb48e4e8d40e738e9092d08cd9da0f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42642c825f2084a047fcd8484e7d83d95eb48e4e8d40e738e9092d08cd9da0f9->enter($__internal_42642c825f2084a047fcd8484e7d83d95eb48e4e8d40e738e9092d08cd9da0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ca8bffc6a405e15537f749454c1ae641c414321909d5ffbb1dfc70165602455d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8bffc6a405e15537f749454c1ae641c414321909d5ffbb1dfc70165602455d->enter($__internal_ca8bffc6a405e15537f749454c1ae641c414321909d5ffbb1dfc70165602455d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Fiche oiseau : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bird"]) || array_key_exists("bird", $context) ? $context["bird"] : (function () { throw new Twig_Error_Runtime('Variable "bird" does not exist.', 3, $this->getSourceContext()); })()), "cdName", array()), "html", null, true);
        
        $__internal_ca8bffc6a405e15537f749454c1ae641c414321909d5ffbb1dfc70165602455d->leave($__internal_ca8bffc6a405e15537f749454c1ae641c414321909d5ffbb1dfc70165602455d_prof);

        
        $__internal_42642c825f2084a047fcd8484e7d83d95eb48e4e8d40e738e9092d08cd9da0f9->leave($__internal_42642c825f2084a047fcd8484e7d83d95eb48e4e8d40e738e9092d08cd9da0f9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_97e9be15ea2292d2d2a2eec93f781e7f3f58e26cc7732435a9d292f28c5e9cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e9be15ea2292d2d2a2eec93f781e7f3f58e26cc7732435a9d292f28c5e9cc2->enter($__internal_97e9be15ea2292d2d2a2eec93f781e7f3f58e26cc7732435a9d292f28c5e9cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e3c04f4f1bd296029b0e6d9ca14bb9ef7b746a19c8a527e279588215de62f872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c04f4f1bd296029b0e6d9ca14bb9ef7b746a19c8a527e279588215de62f872->enter($__internal_e3c04f4f1bd296029b0e6d9ca14bb9ef7b746a19c8a527e279588215de62f872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<div class=\"container-fluid\" id=\"fiche\">
\t\t<div class=\"white-filter\">
\t\t\t<div class=\"container\" id=\"container-fiche-oiseau\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"offset-1 col-10 offset-md-6 col-md-5\" id=\"fiche-oiseau\">
\t\t\t\t\t\t<div id=\"fiche-titre\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t<img class=\"col-4\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/loupe-blanc.svg"), "html", null, true);
        echo "\" width=\"37px\" height=\"37px\">
\t\t\t\t\t\t\t\t<h3 class=\"col-8\">Carte d'identité</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div id=\"fiche-body\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-4\">Ordre</div>
\t\t\t\t\t\t\t\t<div class=\"offset-1 col-7 bird-data\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bird"]) || array_key_exists("bird", $context) ? $context["bird"] : (function () { throw new Twig_Error_Runtime('Variable "bird" does not exist.', 22, $this->getSourceContext()); })()), "orderAves", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-4\">Famille</div>
\t\t\t\t\t\t\t\t<div class=\"offset-1 col-7 bird-data\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bird"]) || array_key_exists("bird", $context) ? $context["bird"] : (function () { throw new Twig_Error_Runtime('Variable "bird" does not exist.', 26, $this->getSourceContext()); })()), "family", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-4\">Nom latin</div>
\t\t\t\t\t\t\t\t<div class=\"offset-1 col-7 bird-data\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bird"]) || array_key_exists("bird", $context) ? $context["bird"] : (function () { throw new Twig_Error_Runtime('Variable "bird" does not exist.', 30, $this->getSourceContext()); })()), "lbName", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-4\">Espèce</div>
\t\t\t\t\t\t\t\t<div class=\"offset-1 col-7 bird-data\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bird"]) || array_key_exists("bird", $context) ? $context["bird"] : (function () { throw new Twig_Error_Runtime('Variable "bird" does not exist.', 34, $this->getSourceContext()); })()), "vernName", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div id=\"white-bar\"></div>

\t\t\t\t\t\t<div id=\"fiche-footer\">
\t\t\t\t\t\t\t<h3>Plus d'infos</h3>
\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://inpn.mnhn.fr/espece/cd_nom/";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bird"]) || array_key_exists("bird", $context) ? $context["bird"] : (function () { throw new Twig_Error_Runtime('Variable "bird" does not exist.', 42, $this->getSourceContext()); })()), "cdName", array()), "html", null, true);
        echo "\">INPN.fr</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_e3c04f4f1bd296029b0e6d9ca14bb9ef7b746a19c8a527e279588215de62f872->leave($__internal_e3c04f4f1bd296029b0e6d9ca14bb9ef7b746a19c8a527e279588215de62f872_prof);

        
        $__internal_97e9be15ea2292d2d2a2eec93f781e7f3f58e26cc7732435a9d292f28c5e9cc2->leave($__internal_97e9be15ea2292d2d2a2eec93f781e7f3f58e26cc7732435a9d292f28c5e9cc2_prof);

    }

    public function getTemplateName()
    {
        return "research/fiche-oiseau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  111 => 34,  104 => 30,  97 => 26,  90 => 22,  79 => 14,  69 => 6,  60 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Fiche oiseau : {{ bird.cdName }}{% endblock %}

{% block body %}

\t<div class=\"container-fluid\" id=\"fiche\">
\t\t<div class=\"white-filter\">
\t\t\t<div class=\"container\" id=\"container-fiche-oiseau\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"offset-1 col-10 offset-md-6 col-md-5\" id=\"fiche-oiseau\">
\t\t\t\t\t\t<div id=\"fiche-titre\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t<img class=\"col-4\" src=\"{{ asset('build/img/loupe-blanc.svg') }}\" width=\"37px\" height=\"37px\">
\t\t\t\t\t\t\t\t<h3 class=\"col-8\">Carte d'identité</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div id=\"fiche-body\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-4\">Ordre</div>
\t\t\t\t\t\t\t\t<div class=\"offset-1 col-7 bird-data\">{{ bird.orderAves }}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-4\">Famille</div>
\t\t\t\t\t\t\t\t<div class=\"offset-1 col-7 bird-data\">{{ bird.family }}</div>
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-4\">Nom latin</div>
\t\t\t\t\t\t\t\t<div class=\"offset-1 col-7 bird-data\">{{ bird.lbName }}</div>
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-4\">Espèce</div>
\t\t\t\t\t\t\t\t<div class=\"offset-1 col-7 bird-data\">{{ bird.vernName }}</div>
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div id=\"white-bar\"></div>

\t\t\t\t\t\t<div id=\"fiche-footer\">
\t\t\t\t\t\t\t<h3>Plus d'infos</h3>
\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://inpn.mnhn.fr/espece/cd_nom/{{ bird.cdName }}\">INPN.fr</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}", "research/fiche-oiseau.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\research\\fiche-oiseau.html.twig");
    }
}
