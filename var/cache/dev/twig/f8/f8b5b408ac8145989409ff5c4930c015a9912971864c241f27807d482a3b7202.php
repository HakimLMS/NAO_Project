<?php

/* home.html.twig */
class __TwigTemplate_706a8b485676355b2fcb3463317c1fbb93c92203120eef4cf4ceed781beae1eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
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
        $__internal_930b643a808b9e39c35dcf2f2a5984135cc416bc5d1b7aec5d59d921cea3761e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_930b643a808b9e39c35dcf2f2a5984135cc416bc5d1b7aec5d59d921cea3761e->enter($__internal_930b643a808b9e39c35dcf2f2a5984135cc416bc5d1b7aec5d59d921cea3761e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_ff9ea26b99df2a05bdc24ebaef4e4d3e38505cfb9a52cbe7f5b2508613d3226e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff9ea26b99df2a05bdc24ebaef4e4d3e38505cfb9a52cbe7f5b2508613d3226e->enter($__internal_ff9ea26b99df2a05bdc24ebaef4e4d3e38505cfb9a52cbe7f5b2508613d3226e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_930b643a808b9e39c35dcf2f2a5984135cc416bc5d1b7aec5d59d921cea3761e->leave($__internal_930b643a808b9e39c35dcf2f2a5984135cc416bc5d1b7aec5d59d921cea3761e_prof);

        
        $__internal_ff9ea26b99df2a05bdc24ebaef4e4d3e38505cfb9a52cbe7f5b2508613d3226e->leave($__internal_ff9ea26b99df2a05bdc24ebaef4e4d3e38505cfb9a52cbe7f5b2508613d3226e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e7711fe3a956d0dfcdd27b06abc97ffafd945402d8f8fa6593320d3a5fb5a29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e7711fe3a956d0dfcdd27b06abc97ffafd945402d8f8fa6593320d3a5fb5a29->enter($__internal_6e7711fe3a956d0dfcdd27b06abc97ffafd945402d8f8fa6593320d3a5fb5a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a3beb8c2b96ffc1e2c8bf93dfd036a6f19edb085940ac8a6e023a02979652e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3beb8c2b96ffc1e2c8bf93dfd036a6f19edb085940ac8a6e023a02979652e00->enter($__internal_a3beb8c2b96ffc1e2c8bf93dfd036a6f19edb085940ac8a6e023a02979652e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_a3beb8c2b96ffc1e2c8bf93dfd036a6f19edb085940ac8a6e023a02979652e00->leave($__internal_a3beb8c2b96ffc1e2c8bf93dfd036a6f19edb085940ac8a6e023a02979652e00_prof);

        
        $__internal_6e7711fe3a956d0dfcdd27b06abc97ffafd945402d8f8fa6593320d3a5fb5a29->leave($__internal_6e7711fe3a956d0dfcdd27b06abc97ffafd945402d8f8fa6593320d3a5fb5a29_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c9d2cabd7ecac1d99adc8761e3db27a6ee3562fdafe82cd0d66ebbc5186246e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c9d2cabd7ecac1d99adc8761e3db27a6ee3562fdafe82cd0d66ebbc5186246e->enter($__internal_3c9d2cabd7ecac1d99adc8761e3db27a6ee3562fdafe82cd0d66ebbc5186246e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec26673b5283f104958eeefe0f8a860b9b27dc8c69fe006972ac87a439327e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec26673b5283f104958eeefe0f8a860b9b27dc8c69fe006972ac87a439327e95->enter($__internal_ec26673b5283f104958eeefe0f8a860b9b27dc8c69fe006972ac87a439327e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<div class=\"container-fluid\" id=\"homepage-first-section\">
\t<div id=\"filtre\">
\t\t<h1>Faisons un geste pour les oiseaux,<br>respectons la nature ensemble.</h1>

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"offset-1 col-10\" id=\"block-description\">
\t\t\t\t\t<p>NAO est une association de protection des oiseaux et de leurs habitats naturels. Nous mettons en place un programme de recherche permettant de collecter des données afin d'étudier les effets du climat, de l'urbanisation et de l'agriculture sur la biodiversité et l'environnement naturel.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>

\t\t<h3>Comment agir ensemble ?</h3>

\t\t<div class=\"container\" id=\"block-icons\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-10 offset-lg-1\" id=\"block-icons-2\">
\t\t\t\t\t<a href=\"#\" class=\"block-icon\" id=\"block-observez\" title=\"Effectuez une observation d'oiseaux de manière géolocalisée\"><div>
\t\t\t\t\t\t<img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/jumelles-blanc.svg"), "html", null, true);
        echo "\" height=\"44.5px\" width=\"63px\" alt=\"observez\">
\t\t\t\t\t\t<p>Observez</p>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"#\" class=\"block-icon\" id=\"block-retrouvez\" title=\"Découvrez en temps réel les différentes observations d'oiseaux faites par la communauté\"><div>
\t\t\t\t\t\t<img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/map-blanc.svg"), "html", null, true);
        echo "\" height=\"44px\" width=\"48px\" alt=\"retrouvez\">
\t\t\t\t\t\t<p>Retrouvez</p>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("research");
        echo "\" class=\"block-icon\" id=\"block-recherchez\" title=\"Recherchez des informations sur les différentes espèces d'oiseaux\"><div>
\t\t\t\t\t\t<img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/loupe-blanc.svg"), "html", null, true);
        echo "\" width=\"40px\" height=\"44px\" alt=\"recherchez\">
\t\t\t\t\t\t<p>Recherchez</p>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\" class=\"block-icon\" id=\"block-dashboard\" title=\"Inscrivez-vous gratuitement pour intégrer notre communauté de passionnés\"><div>
\t\t\t\t\t\t<img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/user-blanc.svg"), "html", null, true);
        echo "\" height=\"44x\" width=\"44px\" alt=\"mon espace\">
\t\t\t\t\t\t<p>Mon espace</p>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("association");
        echo "\" class=\"block-icon\" id=\"block-association\" title=\"Prenez connaissance de l'association et ses missions, nos collectes de fond et autres évènements caritatifs\"><div>
\t\t\t\t\t\t<img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/world_rose.svg"), "html", null, true);
        echo "\" width=\"44px\" height=\"44px\" alt=\"association\">
\t\t\t\t\t\t<p>Notre mission</p>
\t\t\t\t\t</div></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>\t
\t</div>


\t<div class=\"container-fluid\" id=\"homepage-second-section\">
\t\t<div class=\"container\" id=\"block-community\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t<h2>Contribuez pleinement à la préservation des espèces d'oiseaux et de leurs habitats naturels.</h2>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"offset-md-1 col-md-4\">
\t\t\t\t\t<a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subscribe");
        echo "\"><button class=\"btn\">Rejoignez la communauté !</button></a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"offset-4 col-4 pink-bar\"></div>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"block-testimonials\">
\t\t\t<div class=\"container\">
\t\t\t\t<h2>NAO, c'est notre communauté qui en parle le mieux :</h2>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row justify-content-md-center\" id=\"testimonials\">
\t\t\t\t<div class=\"col-md-3 testimony\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t \t<img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/user1.jpg"), "html", null, true);
        echo "\" class=\"col\" alt=\"user1\">
\t\t\t\t\t \t<p class=\"col\">\"Je peux en apprendre plus sur les oiseaux grâce à NAO #nao #cultureG\"
\t\t\t\t\t \t<br>
\t\t\t\t\t \t<span>Julie - 25/01/18</span>
\t\t\t\t\t \t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3 testimony\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t \t<img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/user2.jpg"), "html", null, true);
        echo "\" class=\"col\" alt=\"user2\">
\t\t\t\t\t \t<p class=\"col\">\"Je peux faire mes observations pendant mes balades, c'est génial ! #nao\"
\t\t\t\t\t \t<br>
\t\t\t\t\t \t<span>Pierre - 20/01/18</span>
\t\t\t\t\t \t</p>
\t\t\t\t\t</div>\t  
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3 testimony\">
\t\t\t\t \t<div class=\"row\">
\t\t\t\t\t \t<img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/user3.jpg"), "html", null, true);
        echo "\" class=\"col\" alt=\"user3\">
\t\t\t\t\t \t<p class=\"col\">\"C'est grâce à vous qu'on peut sauver et protéger des espèces #sauvonslesoiseaux\"
\t\t\t\t\t \t<br>
\t\t\t\t\t \t<span>Georges - 30/01/18</span>
\t\t\t\t\t \t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t

\t\t</div>

\t\t<div id=\"block-social-networks\">
\t\t\t<ul class=\"nav justify-content-center\">
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://facebook.com\"><img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/facebook_rose.svg"), "html", null, true);
        echo "\" alt=\"logo Facebook\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://twitter.com\"><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/twitter_rose.svg"), "html", null, true);
        echo "\" alt=\"logo Twitter\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://instagram.com\"><img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/instagram_rose.svg"), "html", null, true);
        echo "\" alt=\"logo Instagram\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t</ul>
\t\t</div>
\t\t
\t\t<iframe class=\"offset-md-3 col-md-6\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://app.mailjet.com/widget/iframe/2pqp/5dM\" width=\"100%\" height=\"255\"></iframe>
\t\t\t
\t\t
\t</div>

\t


";
        
        $__internal_ec26673b5283f104958eeefe0f8a860b9b27dc8c69fe006972ac87a439327e95->leave($__internal_ec26673b5283f104958eeefe0f8a860b9b27dc8c69fe006972ac87a439327e95_prof);

        
        $__internal_3c9d2cabd7ecac1d99adc8761e3db27a6ee3562fdafe82cd0d66ebbc5186246e->leave($__internal_3c9d2cabd7ecac1d99adc8761e3db27a6ee3562fdafe82cd0d66ebbc5186246e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 117,  217 => 114,  211 => 111,  194 => 97,  181 => 87,  168 => 77,  148 => 60,  127 => 42,  123 => 41,  117 => 38,  113 => 37,  107 => 34,  103 => 33,  97 => 30,  90 => 26,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Accueil{% endblock %}

{% block body %}

\t<div class=\"container-fluid\" id=\"homepage-first-section\">
\t<div id=\"filtre\">
\t\t<h1>Faisons un geste pour les oiseaux,<br>respectons la nature ensemble.</h1>

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"offset-1 col-10\" id=\"block-description\">
\t\t\t\t\t<p>NAO est une association de protection des oiseaux et de leurs habitats naturels. Nous mettons en place un programme de recherche permettant de collecter des données afin d'étudier les effets du climat, de l'urbanisation et de l'agriculture sur la biodiversité et l'environnement naturel.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>

\t\t<h3>Comment agir ensemble ?</h3>

\t\t<div class=\"container\" id=\"block-icons\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-10 offset-lg-1\" id=\"block-icons-2\">
\t\t\t\t\t<a href=\"#\" class=\"block-icon\" id=\"block-observez\" title=\"Effectuez une observation d'oiseaux de manière géolocalisée\"><div>
\t\t\t\t\t\t<img src=\"{{ asset('build/img/jumelles-blanc.svg') }}\" height=\"44.5px\" width=\"63px\" alt=\"observez\">
\t\t\t\t\t\t<p>Observez</p>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"#\" class=\"block-icon\" id=\"block-retrouvez\" title=\"Découvrez en temps réel les différentes observations d'oiseaux faites par la communauté\"><div>
\t\t\t\t\t\t<img src=\"{{ asset('build/img/map-blanc.svg') }}\" height=\"44px\" width=\"48px\" alt=\"retrouvez\">
\t\t\t\t\t\t<p>Retrouvez</p>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"{{ path('research') }}\" class=\"block-icon\" id=\"block-recherchez\" title=\"Recherchez des informations sur les différentes espèces d'oiseaux\"><div>
\t\t\t\t\t\t<img src=\"{{ asset('build/img/loupe-blanc.svg') }}\" width=\"40px\" height=\"44px\" alt=\"recherchez\">
\t\t\t\t\t\t<p>Recherchez</p>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"{{ path('dashboard') }}\" class=\"block-icon\" id=\"block-dashboard\" title=\"Inscrivez-vous gratuitement pour intégrer notre communauté de passionnés\"><div>
\t\t\t\t\t\t<img src=\"{{ asset('build/img/user-blanc.svg') }}\" height=\"44x\" width=\"44px\" alt=\"mon espace\">
\t\t\t\t\t\t<p>Mon espace</p>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"{{ path('association') }}\" class=\"block-icon\" id=\"block-association\" title=\"Prenez connaissance de l'association et ses missions, nos collectes de fond et autres évènements caritatifs\"><div>
\t\t\t\t\t\t<img src=\"{{ asset('build/img/world_rose.svg') }}\" width=\"44px\" height=\"44px\" alt=\"association\">
\t\t\t\t\t\t<p>Notre mission</p>
\t\t\t\t\t</div></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>\t
\t</div>


\t<div class=\"container-fluid\" id=\"homepage-second-section\">
\t\t<div class=\"container\" id=\"block-community\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t<h2>Contribuez pleinement à la préservation des espèces d'oiseaux et de leurs habitats naturels.</h2>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"offset-md-1 col-md-4\">
\t\t\t\t\t<a href=\"{{ path('subscribe') }}\"><button class=\"btn\">Rejoignez la communauté !</button></a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"offset-4 col-4 pink-bar\"></div>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"block-testimonials\">
\t\t\t<div class=\"container\">
\t\t\t\t<h2>NAO, c'est notre communauté qui en parle le mieux :</h2>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row justify-content-md-center\" id=\"testimonials\">
\t\t\t\t<div class=\"col-md-3 testimony\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t \t<img src=\"{{ asset('build/img/user1.jpg') }}\" class=\"col\" alt=\"user1\">
\t\t\t\t\t \t<p class=\"col\">\"Je peux en apprendre plus sur les oiseaux grâce à NAO #nao #cultureG\"
\t\t\t\t\t \t<br>
\t\t\t\t\t \t<span>Julie - 25/01/18</span>
\t\t\t\t\t \t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3 testimony\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t \t<img src=\"{{ asset('build/img/user2.jpg') }}\" class=\"col\" alt=\"user2\">
\t\t\t\t\t \t<p class=\"col\">\"Je peux faire mes observations pendant mes balades, c'est génial ! #nao\"
\t\t\t\t\t \t<br>
\t\t\t\t\t \t<span>Pierre - 20/01/18</span>
\t\t\t\t\t \t</p>
\t\t\t\t\t</div>\t  
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3 testimony\">
\t\t\t\t \t<div class=\"row\">
\t\t\t\t\t \t<img src=\"{{ asset('build/img/user3.jpg') }}\" class=\"col\" alt=\"user3\">
\t\t\t\t\t \t<p class=\"col\">\"C'est grâce à vous qu'on peut sauver et protéger des espèces #sauvonslesoiseaux\"
\t\t\t\t\t \t<br>
\t\t\t\t\t \t<span>Georges - 30/01/18</span>
\t\t\t\t\t \t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t

\t\t</div>

\t\t<div id=\"block-social-networks\">
\t\t\t<ul class=\"nav justify-content-center\">
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://facebook.com\"><img src=\"{{ asset('build/img/facebook_rose.svg') }}\" alt=\"logo Facebook\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://twitter.com\"><img src=\"{{ asset('build/img/twitter_rose.svg') }}\" alt=\"logo Twitter\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://instagram.com\"><img src=\"{{ asset('build/img/instagram_rose.svg') }}\" alt=\"logo Instagram\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t</ul>
\t\t</div>
\t\t
\t\t<iframe class=\"offset-md-3 col-md-6\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://app.mailjet.com/widget/iframe/2pqp/5dM\" width=\"100%\" height=\"255\"></iframe>
\t\t\t
\t\t
\t</div>

\t


{% endblock %}\t", "home.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\home.html.twig");
    }
}
