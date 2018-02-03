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
        $__internal_e04b776a40b5d3c403a2820f4b31003c129032bca50ca0d89e6ec3bbf55ac307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e04b776a40b5d3c403a2820f4b31003c129032bca50ca0d89e6ec3bbf55ac307->enter($__internal_e04b776a40b5d3c403a2820f4b31003c129032bca50ca0d89e6ec3bbf55ac307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_e7533f9d62a36e1a9c1bb4d64899fc43d83cbd7af999ef5b74b787d3f6e846d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7533f9d62a36e1a9c1bb4d64899fc43d83cbd7af999ef5b74b787d3f6e846d3->enter($__internal_e7533f9d62a36e1a9c1bb4d64899fc43d83cbd7af999ef5b74b787d3f6e846d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e04b776a40b5d3c403a2820f4b31003c129032bca50ca0d89e6ec3bbf55ac307->leave($__internal_e04b776a40b5d3c403a2820f4b31003c129032bca50ca0d89e6ec3bbf55ac307_prof);

        
        $__internal_e7533f9d62a36e1a9c1bb4d64899fc43d83cbd7af999ef5b74b787d3f6e846d3->leave($__internal_e7533f9d62a36e1a9c1bb4d64899fc43d83cbd7af999ef5b74b787d3f6e846d3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c71860962873dfd8007d63511bf9c837b6a3d8d2761a15221f3b65e36c2f9e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c71860962873dfd8007d63511bf9c837b6a3d8d2761a15221f3b65e36c2f9e4->enter($__internal_6c71860962873dfd8007d63511bf9c837b6a3d8d2761a15221f3b65e36c2f9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7630fe4fea91e50d9785f305b36f0d77db346edcfb3e5bcbd53ebfe2945e785d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7630fe4fea91e50d9785f305b36f0d77db346edcfb3e5bcbd53ebfe2945e785d->enter($__internal_7630fe4fea91e50d9785f305b36f0d77db346edcfb3e5bcbd53ebfe2945e785d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_7630fe4fea91e50d9785f305b36f0d77db346edcfb3e5bcbd53ebfe2945e785d->leave($__internal_7630fe4fea91e50d9785f305b36f0d77db346edcfb3e5bcbd53ebfe2945e785d_prof);

        
        $__internal_6c71860962873dfd8007d63511bf9c837b6a3d8d2761a15221f3b65e36c2f9e4->leave($__internal_6c71860962873dfd8007d63511bf9c837b6a3d8d2761a15221f3b65e36c2f9e4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_098e4442ae56f96312f5aa1e854fc1a1eb7a45a9ba9f4113d7bfdb3971a72bc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098e4442ae56f96312f5aa1e854fc1a1eb7a45a9ba9f4113d7bfdb3971a72bc8->enter($__internal_098e4442ae56f96312f5aa1e854fc1a1eb7a45a9ba9f4113d7bfdb3971a72bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c7402357cd42e655a0dc2ce95cd0ad1f26e1802f4039a1920e077c7a2f36ab9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7402357cd42e655a0dc2ce95cd0ad1f26e1802f4039a1920e077c7a2f36ab9f->enter($__internal_c7402357cd42e655a0dc2ce95cd0ad1f26e1802f4039a1920e077c7a2f36ab9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t</div>

\t\t<h3>Comment agir ensemble ?</h3>

\t\t<div class=\"container\" id=\"block-icons\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-10 offset-lg-1\" id=\"block-icons-2\">
\t\t\t\t\t<a href=\"#\" class=\"block-icon\" id=\"block-observez\" title=\"Effectuez une observation d'oiseaux de manière géolocalisée\"><div>
\t\t\t\t\t\t<img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/jumelles-blanc.svg"), "html", null, true);
        echo "\" height=\"44.5px\" width=\"63px\" alt=\"observez\">
\t\t\t\t\t\t<p>Observez</p>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"#\" class=\"block-icon\" id=\"block-retrouvez\" title=\"Découvrez en temps réel les différentes observations d'oiseaux faites par la communauté\"><div>
\t\t\t\t\t\t<img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/map-blanc.svg"), "html", null, true);
        echo "\" height=\"44px\" width=\"48px\" alt=\"retrouvez\">
\t\t\t\t\t\t<p>Retrouvez</p>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("research");
        echo "\" class=\"block-icon\" id=\"block-recherchez\" title=\"Recherchez des informations sur les différentes espèces d'oiseaux\"><div>
\t\t\t\t\t\t<img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/loupe-blanc.svg"), "html", null, true);
        echo "\" width=\"40px\" height=\"44px\" alt=\"recherchez\">
\t\t\t\t\t\t<p>Recherchez</p>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\" class=\"block-icon\" id=\"block-dashboard\" title=\"Inscrivez-vous gratuitement pour intégrer notre communauté de passionnés\"><div>
\t\t\t\t\t\t<img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/user-blanc.svg"), "html", null, true);
        echo "\" height=\"44x\" width=\"44px\" alt=\"mon espace\">
\t\t\t\t\t\t<p>Mon espace</p>
\t\t\t\t\t</div></a>
\t\t\t\t\t<a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("association");
        echo "\" class=\"block-icon\" id=\"block-association\" title=\"Prenez connaissance de l'association et ses missions, nos collectes de fond et autres évènements caritatifs\"><div>
\t\t\t\t\t\t<img src=\"";
        // line 41
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
        // line 59
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
        // line 76
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
        // line 86
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
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/user3.jpg"), "html", null, true);
        echo "\" class=\"col\" alt=\"user3\">
\t\t\t\t\t \t<p class=\"col\">\"C'est grâce à vous qu'on peut sauver et protéger des espèces #nature\"
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
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/facebook_rose.svg"), "html", null, true);
        echo "\" alt=\"logo Facebook\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://twitter.com\"><img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/twitter_rose.svg"), "html", null, true);
        echo "\" alt=\"logo Twitter\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://instagram.com\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/instagram_rose.svg"), "html", null, true);
        echo "\" alt=\"logo Instagram\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t</ul>
\t\t</div>
\t\t
\t\t<div class=\"container\" id=\"block-mj\">
\t\t\t<iframe class=\"col-12 col-md-10\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://app.mailjet.com/widget/iframe/2pqp/5dM\" width=\"80%\" height=\"425\"></iframe>
\t\t</div>
\t\t
\t\t\t
\t\t
\t</div>

\t


";
        
        $__internal_c7402357cd42e655a0dc2ce95cd0ad1f26e1802f4039a1920e077c7a2f36ab9f->leave($__internal_c7402357cd42e655a0dc2ce95cd0ad1f26e1802f4039a1920e077c7a2f36ab9f_prof);

        
        $__internal_098e4442ae56f96312f5aa1e854fc1a1eb7a45a9ba9f4113d7bfdb3971a72bc8->leave($__internal_098e4442ae56f96312f5aa1e854fc1a1eb7a45a9ba9f4113d7bfdb3971a72bc8_prof);

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
        return array (  222 => 116,  216 => 113,  210 => 110,  193 => 96,  180 => 86,  167 => 76,  147 => 59,  126 => 41,  122 => 40,  116 => 37,  112 => 36,  106 => 33,  102 => 32,  96 => 29,  89 => 25,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
\t\t\t\t\t \t<p class=\"col\">\"C'est grâce à vous qu'on peut sauver et protéger des espèces #nature\"
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
\t\t<div class=\"container\" id=\"block-mj\">
\t\t\t<iframe class=\"col-12 col-md-10\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://app.mailjet.com/widget/iframe/2pqp/5dM\" width=\"80%\" height=\"425\"></iframe>
\t\t</div>
\t\t
\t\t\t
\t\t
\t</div>

\t


{% endblock %}\t", "home.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\home.html.twig");
    }
}
