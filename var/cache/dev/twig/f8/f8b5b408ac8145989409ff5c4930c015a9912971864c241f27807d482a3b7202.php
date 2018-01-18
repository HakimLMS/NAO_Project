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
        $__internal_35cf39327252fe8eefd17ea31d26698da4d1a53d0bd8c000c216bcd759c4751e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35cf39327252fe8eefd17ea31d26698da4d1a53d0bd8c000c216bcd759c4751e->enter($__internal_35cf39327252fe8eefd17ea31d26698da4d1a53d0bd8c000c216bcd759c4751e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_c08791fa5a69e20b5d1a3a9c05c7cbcd9e98a46511d50292bc311ffe097799d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08791fa5a69e20b5d1a3a9c05c7cbcd9e98a46511d50292bc311ffe097799d7->enter($__internal_c08791fa5a69e20b5d1a3a9c05c7cbcd9e98a46511d50292bc311ffe097799d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35cf39327252fe8eefd17ea31d26698da4d1a53d0bd8c000c216bcd759c4751e->leave($__internal_35cf39327252fe8eefd17ea31d26698da4d1a53d0bd8c000c216bcd759c4751e_prof);

        
        $__internal_c08791fa5a69e20b5d1a3a9c05c7cbcd9e98a46511d50292bc311ffe097799d7->leave($__internal_c08791fa5a69e20b5d1a3a9c05c7cbcd9e98a46511d50292bc311ffe097799d7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_18e1e19ae7e7c072c303cbbc8c9b148d224a69ab3399df834d3c577f144a9bbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e1e19ae7e7c072c303cbbc8c9b148d224a69ab3399df834d3c577f144a9bbb->enter($__internal_18e1e19ae7e7c072c303cbbc8c9b148d224a69ab3399df834d3c577f144a9bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4605857809a79d8dee00b01f85bb1a6ce2ee7e85a9fefcf03064188edb010a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4605857809a79d8dee00b01f85bb1a6ce2ee7e85a9fefcf03064188edb010a0b->enter($__internal_4605857809a79d8dee00b01f85bb1a6ce2ee7e85a9fefcf03064188edb010a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_4605857809a79d8dee00b01f85bb1a6ce2ee7e85a9fefcf03064188edb010a0b->leave($__internal_4605857809a79d8dee00b01f85bb1a6ce2ee7e85a9fefcf03064188edb010a0b_prof);

        
        $__internal_18e1e19ae7e7c072c303cbbc8c9b148d224a69ab3399df834d3c577f144a9bbb->leave($__internal_18e1e19ae7e7c072c303cbbc8c9b148d224a69ab3399df834d3c577f144a9bbb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_375d5ee4615939594e3904e8ed1b0b4f518d5a953b2f38c45bcad91fa1ae2c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_375d5ee4615939594e3904e8ed1b0b4f518d5a953b2f38c45bcad91fa1ae2c20->enter($__internal_375d5ee4615939594e3904e8ed1b0b4f518d5a953b2f38c45bcad91fa1ae2c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44f2ebddd47d1a92b94fe2290e57c864676424d5d2cb78311807a283f0c4935d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f2ebddd47d1a92b94fe2290e57c864676424d5d2cb78311807a283f0c4935d->enter($__internal_44f2ebddd47d1a92b94fe2290e57c864676424d5d2cb78311807a283f0c4935d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<div class=\"container-fluid\" id=\"homepage-first-section\">
\t<div class=\"white-filter\" id=\"filtre\">
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
\t\t\t\t\t<a href=\"#\" class=\"block-icon\" id=\"block-observez\"><div>
\t\t\t\t\t\t<img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/jumelles-blanc.svg"), "html", null, true);
        echo "\" height=\"44.5px\" width=\"63px\">
\t\t\t\t\t\t<p>Observez</p>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"#\" class=\"block-icon\" id=\"block-retrouvez\"><div>
\t\t\t\t\t\t<img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/map-blanc.svg"), "html", null, true);
        echo "\" height=\"44px\" width=\"48px\">
\t\t\t\t\t\t<p>Retrouvez</p>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("research");
        echo "\" class=\"block-icon\" id=\"block-recherchez\"><div>
\t\t\t\t\t\t<img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/loupe-blanc.svg"), "html", null, true);
        echo "\" width=\"40px\" height=\"44px\">
\t\t\t\t\t\t<p>Recherchez</p>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\" class=\"block-icon\" id=\"block-dashboard\"><div>
\t\t\t\t\t\t<img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/user-blanc.svg"), "html", null, true);
        echo "\" height=\"44x\" width=\"44px\">
\t\t\t\t\t\t<p>Mon espace</p>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("association");
        echo "\" class=\"block-icon\" id=\"block-association\"><div>
\t\t\t\t\t\t<img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/world_rose.svg"), "html", null, true);
        echo "\" width=\"44px\" height=\"44px\">
\t\t\t\t\t\t<p>Notre mission</p>
\t\t\t\t\t</div></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--
\t\t\t<div class=\"row\">
\t\t\t\t<a href=\"#\" class=\"col-lg-2 offset-lg-1 block-icon\" id=\"block-observez\"><div>
\t\t\t\t\t<img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/jumelles-blanc.svg"), "html", null, true);
        echo "\" height=\"44.5px\" width=\"63px\">
\t\t\t\t\t<br>
\t\t\t\t\tObservez
\t\t\t\t</div></a>
\t\t\t\t<a href=\"#\" class=\"col-lg-2 block-icon\" id=\"block-retrouvez\"><div>
\t\t\t\t\t<img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/map-blanc.svg"), "html", null, true);
        echo "\" height=\"44px\" width=\"48px\">
\t\t\t\t\t<br>
\t\t\t\t\tRetrouvez
\t\t\t\t</div></a>
\t\t\t\t<a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("research");
        echo "\" class=\"col-lg-2 block-icon\" id=\"block-recherchez\"><div>
\t\t\t\t\t<img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/loupe-blanc.svg"), "html", null, true);
        echo "\" width=\"40px\" height=\"44px\">
\t\t\t\t\t<br>
\t\t\t\t\tRecherchez
\t\t\t\t</div></a>
\t\t\t\t<a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\" class=\"col-lg-2 block-icon\" id=\"block-dashboard\"><div>
\t\t\t\t\t<img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/user-blanc.svg"), "html", null, true);
        echo "\" height=\"44px\" width=\"42px\">
\t\t\t\t\t<br>
\t\t\t\t\tMon espace
\t\t\t\t</div></a>
\t\t\t\t<a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("association");
        echo "\" class=\"col-lg-2 block-icon\" id=\"block-association\"><div>
\t\t\t\t\t<img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/world_rose.svg"), "html", null, true);
        echo "\" width=\"44px\" height=\"44px\">
\t\t\t\t\t<br>
\t\t\t\t\tNotre mission
\t\t\t\t</div></a>
\t\t\t</div>
\t\t\t-->
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
\t\t\t\t\t<button class=\"btn\">Rejoignez la communauté !</button>
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
\t\t\t<div class=\"row\" id=\"testimonials\">
\t\t\t\t<div class=\"col-md-4 testimony\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t \t<img src=\"\" class=\"col-3\">
\t\t\t\t\t \t<p class=\"offset-1 col-8\">Phrase de test - Témoignage réseaux sociaux sur le site et l'association NAO
\t\t\t\t\t \t<br>
\t\t\t\t\t \t<span>Nom - Date</span>
\t\t\t\t\t \t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4 testimony\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t \t<img src=\"\" class=\"col-3\">
\t\t\t\t\t \t<p class=\"offset-1 col-8\">Phrase de test - Témoignage réseaux sociaux sur le site et l'association NAO
\t\t\t\t\t \t<br>
\t\t\t\t\t \t<span>Nom - Date</span>
\t\t\t\t\t \t</p>
\t\t\t\t\t</div>\t  
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4 testimony\">
\t\t\t\t \t<div class=\"row\">
\t\t\t\t\t \t<img src=\"\" class=\"col-3\">
\t\t\t\t\t \t<p class=\"offset-1 col-8\">Phrase de test - Témoignage réseaux sociaux sur le site et l'association NAO
\t\t\t\t\t \t<br>
\t\t\t\t\t \t<span>Nom - Date</span>
\t\t\t\t\t \t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t

\t\t</div>

\t\t<div id=\"block-social-networks\">
\t\t\t<ul class=\"nav justify-content-center\">
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://facebook.com\"><img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/facebook_rose.svg"), "html", null, true);
        echo "\" alt=\"logo Facebook\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://twitter.com\"><img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/twitter_rose.svg"), "html", null, true);
        echo "\" alt=\"logo Facebook\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://instagram.com\"><img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/instagram_rose.svg"), "html", null, true);
        echo "\" alt=\"logo Facebook\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t</ul>
\t\t</div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"offset-md-2 col-md-8\" id=\"block-newsletter\">
\t\t\t\t\t<p>Abonnez-vous à la Newsletter pour être le premier informé</p>
\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"email\" name=\"newsletter\" placeholder=\"Votre adresse mail\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn\">Valider</button>
\t\t\t\t\t</form>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>

\t


";
        
        $__internal_44f2ebddd47d1a92b94fe2290e57c864676424d5d2cb78311807a283f0c4935d->leave($__internal_44f2ebddd47d1a92b94fe2290e57c864676424d5d2cb78311807a283f0c4935d_prof);

        
        $__internal_375d5ee4615939594e3904e8ed1b0b4f518d5a953b2f38c45bcad91fa1ae2c20->leave($__internal_375d5ee4615939594e3904e8ed1b0b4f518d5a953b2f38c45bcad91fa1ae2c20_prof);

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
        return array (  264 => 146,  258 => 143,  252 => 140,  179 => 70,  175 => 69,  168 => 65,  164 => 64,  157 => 60,  153 => 59,  146 => 55,  138 => 50,  127 => 42,  123 => 41,  117 => 38,  113 => 37,  107 => 34,  103 => 33,  97 => 30,  90 => 26,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Accueil{% endblock %}

{% block body %}

\t<div class=\"container-fluid\" id=\"homepage-first-section\">
\t<div class=\"white-filter\" id=\"filtre\">
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
\t\t\t\t\t<a href=\"#\" class=\"block-icon\" id=\"block-observez\"><div>
\t\t\t\t\t\t<img src=\"{{ asset('build/img/jumelles-blanc.svg') }}\" height=\"44.5px\" width=\"63px\">
\t\t\t\t\t\t<p>Observez</p>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"#\" class=\"block-icon\" id=\"block-retrouvez\"><div>
\t\t\t\t\t\t<img src=\"{{ asset('build/img/map-blanc.svg') }}\" height=\"44px\" width=\"48px\">
\t\t\t\t\t\t<p>Retrouvez</p>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"{{ path('research') }}\" class=\"block-icon\" id=\"block-recherchez\"><div>
\t\t\t\t\t\t<img src=\"{{ asset('build/img/loupe-blanc.svg') }}\" width=\"40px\" height=\"44px\">
\t\t\t\t\t\t<p>Recherchez</p>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"{{ path('dashboard') }}\" class=\"block-icon\" id=\"block-dashboard\"><div>
\t\t\t\t\t\t<img src=\"{{ asset('build/img/user-blanc.svg') }}\" height=\"44x\" width=\"44px\">
\t\t\t\t\t\t<p>Mon espace</p>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"{{ path('association') }}\" class=\"block-icon\" id=\"block-association\"><div>
\t\t\t\t\t\t<img src=\"{{ asset('build/img/world_rose.svg') }}\" width=\"44px\" height=\"44px\">
\t\t\t\t\t\t<p>Notre mission</p>
\t\t\t\t\t</div></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--
\t\t\t<div class=\"row\">
\t\t\t\t<a href=\"#\" class=\"col-lg-2 offset-lg-1 block-icon\" id=\"block-observez\"><div>
\t\t\t\t\t<img src=\"{{ asset('build/img/jumelles-blanc.svg') }}\" height=\"44.5px\" width=\"63px\">
\t\t\t\t\t<br>
\t\t\t\t\tObservez
\t\t\t\t</div></a>
\t\t\t\t<a href=\"#\" class=\"col-lg-2 block-icon\" id=\"block-retrouvez\"><div>
\t\t\t\t\t<img src=\"{{ asset('build/img/map-blanc.svg') }}\" height=\"44px\" width=\"48px\">
\t\t\t\t\t<br>
\t\t\t\t\tRetrouvez
\t\t\t\t</div></a>
\t\t\t\t<a href=\"{{ path('research') }}\" class=\"col-lg-2 block-icon\" id=\"block-recherchez\"><div>
\t\t\t\t\t<img src=\"{{ asset('build/img/loupe-blanc.svg') }}\" width=\"40px\" height=\"44px\">
\t\t\t\t\t<br>
\t\t\t\t\tRecherchez
\t\t\t\t</div></a>
\t\t\t\t<a href=\"{{ path('dashboard') }}\" class=\"col-lg-2 block-icon\" id=\"block-dashboard\"><div>
\t\t\t\t\t<img src=\"{{ asset('build/img/user-blanc.svg') }}\" height=\"44px\" width=\"42px\">
\t\t\t\t\t<br>
\t\t\t\t\tMon espace
\t\t\t\t</div></a>
\t\t\t\t<a href=\"{{ path('association') }}\" class=\"col-lg-2 block-icon\" id=\"block-association\"><div>
\t\t\t\t\t<img src=\"{{ asset('build/img/world_rose.svg') }}\" width=\"44px\" height=\"44px\">
\t\t\t\t\t<br>
\t\t\t\t\tNotre mission
\t\t\t\t</div></a>
\t\t\t</div>
\t\t\t-->
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
\t\t\t\t\t<button class=\"btn\">Rejoignez la communauté !</button>
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
\t\t\t<div class=\"row\" id=\"testimonials\">
\t\t\t\t<div class=\"col-md-4 testimony\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t \t<img src=\"\" class=\"col-3\">
\t\t\t\t\t \t<p class=\"offset-1 col-8\">Phrase de test - Témoignage réseaux sociaux sur le site et l'association NAO
\t\t\t\t\t \t<br>
\t\t\t\t\t \t<span>Nom - Date</span>
\t\t\t\t\t \t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4 testimony\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t \t<img src=\"\" class=\"col-3\">
\t\t\t\t\t \t<p class=\"offset-1 col-8\">Phrase de test - Témoignage réseaux sociaux sur le site et l'association NAO
\t\t\t\t\t \t<br>
\t\t\t\t\t \t<span>Nom - Date</span>
\t\t\t\t\t \t</p>
\t\t\t\t\t</div>\t  
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4 testimony\">
\t\t\t\t \t<div class=\"row\">
\t\t\t\t\t \t<img src=\"\" class=\"col-3\">
\t\t\t\t\t \t<p class=\"offset-1 col-8\">Phrase de test - Témoignage réseaux sociaux sur le site et l'association NAO
\t\t\t\t\t \t<br>
\t\t\t\t\t \t<span>Nom - Date</span>
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
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://twitter.com\"><img src=\"{{ asset('build/img/twitter_rose.svg') }}\" alt=\"logo Facebook\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://instagram.com\"><img src=\"{{ asset('build/img/instagram_rose.svg') }}\" alt=\"logo Facebook\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t</ul>
\t\t</div>

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"offset-md-2 col-md-8\" id=\"block-newsletter\">
\t\t\t\t\t<p>Abonnez-vous à la Newsletter pour être le premier informé</p>
\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"email\" name=\"newsletter\" placeholder=\"Votre adresse mail\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn\">Valider</button>
\t\t\t\t\t</form>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>

\t


{% endblock %}\t", "home.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\home.html.twig");
    }
}
