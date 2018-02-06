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
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bd355ea51608011207f5c8bc8f871c52d245ceccfba2854ee7320450da1d91a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd355ea51608011207f5c8bc8f871c52d245ceccfba2854ee7320450da1d91a->enter($__internal_2bd355ea51608011207f5c8bc8f871c52d245ceccfba2854ee7320450da1d91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_f8501b59f4f64d0c0f1d702c139293a4d4ebad82a6a1efc3bd70e618c4fc2618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8501b59f4f64d0c0f1d702c139293a4d4ebad82a6a1efc3bd70e618c4fc2618->enter($__internal_f8501b59f4f64d0c0f1d702c139293a4d4ebad82a6a1efc3bd70e618c4fc2618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bd355ea51608011207f5c8bc8f871c52d245ceccfba2854ee7320450da1d91a->leave($__internal_2bd355ea51608011207f5c8bc8f871c52d245ceccfba2854ee7320450da1d91a_prof);

        
        $__internal_f8501b59f4f64d0c0f1d702c139293a4d4ebad82a6a1efc3bd70e618c4fc2618->leave($__internal_f8501b59f4f64d0c0f1d702c139293a4d4ebad82a6a1efc3bd70e618c4fc2618_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_37d01907b0a950cb652275dc659fde3cd3661c0fe67a5dd7f6b8289dbd4076f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d01907b0a950cb652275dc659fde3cd3661c0fe67a5dd7f6b8289dbd4076f4->enter($__internal_37d01907b0a950cb652275dc659fde3cd3661c0fe67a5dd7f6b8289dbd4076f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6eb75a29c5702f1ea8a49919542b60f17658ab5ab84d4a8b279491349f7bb66a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb75a29c5702f1ea8a49919542b60f17658ab5ab84d4a8b279491349f7bb66a->enter($__internal_6eb75a29c5702f1ea8a49919542b60f17658ab5ab84d4a8b279491349f7bb66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_6eb75a29c5702f1ea8a49919542b60f17658ab5ab84d4a8b279491349f7bb66a->leave($__internal_6eb75a29c5702f1ea8a49919542b60f17658ab5ab84d4a8b279491349f7bb66a_prof);

        
        $__internal_37d01907b0a950cb652275dc659fde3cd3661c0fe67a5dd7f6b8289dbd4076f4->leave($__internal_37d01907b0a950cb652275dc659fde3cd3661c0fe67a5dd7f6b8289dbd4076f4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_568a8ac26db06e18bb072d86ac370d014f71a95a38130586d01e1bce005e21c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_568a8ac26db06e18bb072d86ac370d014f71a95a38130586d01e1bce005e21c5->enter($__internal_568a8ac26db06e18bb072d86ac370d014f71a95a38130586d01e1bce005e21c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50e1e82dff2707cc7ce3f1b4844808b5c9f4a9a995da80d7306a1dc7682dff35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e1e82dff2707cc7ce3f1b4844808b5c9f4a9a995da80d7306a1dc7682dff35->enter($__internal_50e1e82dff2707cc7ce3f1b4844808b5c9f4a9a995da80d7306a1dc7682dff35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
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

\t\t<div class=\"container\" id=\"block-icons\">\t\t\t
\t\t\t\t<div class=\"col-lg-10 offset-lg-1\" id=\"block-icons-2\">
                                    <div>
                                        <button type=\"button\" id=\"see\" onclick=\"location.href='";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map");
        echo "';\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/jumelles-blanc.svg"), "html", null, true);
        echo "\" height=\"44.5px\" width=\"63px\" alt=\"observez\">
\t\t\t\t\t\t<p class=\"txtbutton\">Observez</p></button>
                                    </div>
                                    <div>
                                        <button type=\"button\" id=\"find\" onclick=\"location.href='";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map");
        echo "';\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/map-blanc.svg"), "html", null, true);
        echo "\" height=\"44px\" width=\"48px\" alt=\"retrouvez\">
                                            <p class=\"txtbutton\">Retrouvez</p></button>
                                    </div>
                                    <div>
                                        <button type=\"button\" id=\"search\" onclick=\"location.href='";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("research");
        echo "';\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/loupe-blanc.svg"), "html", null, true);
        echo "\" width=\"40px\" height=\"44px\" alt=\"recherchez\">
\t\t\t\t\t\t<p class=\"txtbutton\"> Recherchez</p></button>
                                    </div>
                                    <div>
                                        <button type=\"button\" id=\"myspace\" onclick=\"location.href='";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "';\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/user-blanc.svg"), "html", null, true);
        echo "\" height=\"44x\" width=\"44px\" alt=\"mon espace\">
\t\t\t\t\t\t<p class=\"txtbutton\">Mon espace</p></button>
                                    </div>
                                    <div>
                                        <button type=\"button\" id=\"mission\" onclick=\"location.href='";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("association");
        echo "';\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/world_rose.svg"), "html", null, true);
        echo "\" width=\"44px\" height=\"44px\" alt=\"association\">
\t\t\t\t\t\t<p class=\"txtbutton\">Notre mission</p></button>
                                    </div>                                 
                                </div>\t\t\t
\t\t</div>
\t</div>
        </div>


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
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://openclassrooms.facebook.com/naoloiseaurare/\"><img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/facebook_rose.svg"), "html", null, true);
        echo "\" alt=\"logo Facebook\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://twitter.com/nao_oiseau_rare\"><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/twitter_rose.svg"), "html", null, true);
        echo "\" alt=\"logo Twitter\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://www.instagram.com/nao_loiseau_rare/\"><img src=\"";
        // line 117
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
        // line 132
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_50e1e82dff2707cc7ce3f1b4844808b5c9f4a9a995da80d7306a1dc7682dff35->leave($__internal_50e1e82dff2707cc7ce3f1b4844808b5c9f4a9a995da80d7306a1dc7682dff35_prof);

        
        $__internal_568a8ac26db06e18bb072d86ac370d014f71a95a38130586d01e1bce005e21c5->leave($__internal_568a8ac26db06e18bb072d86ac370d014f71a95a38130586d01e1bce005e21c5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5baa472b57579500380cd9a4428b64485f364d6b3497769508a17c73adc4dc91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5baa472b57579500380cd9a4428b64485f364d6b3497769508a17c73adc4dc91->enter($__internal_5baa472b57579500380cd9a4428b64485f364d6b3497769508a17c73adc4dc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b47221bf0f38c2a0b60eca39224ab77fc7929cd881f5734fd605f8cbfce6bf09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47221bf0f38c2a0b60eca39224ab77fc7929cd881f5734fd605f8cbfce6bf09->enter($__internal_b47221bf0f38c2a0b60eca39224ab77fc7929cd881f5734fd605f8cbfce6bf09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " 
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/slick/slick/slick.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/slick/slick/slick-theme.css"), "html", null, true);
        echo "\"/>
    ";
        
        $__internal_b47221bf0f38c2a0b60eca39224ab77fc7929cd881f5734fd605f8cbfce6bf09->leave($__internal_b47221bf0f38c2a0b60eca39224ab77fc7929cd881f5734fd605f8cbfce6bf09_prof);

        
        $__internal_5baa472b57579500380cd9a4428b64485f364d6b3497769508a17c73adc4dc91->leave($__internal_5baa472b57579500380cd9a4428b64485f364d6b3497769508a17c73adc4dc91_prof);

    }

    // line 132
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1ce97f599c0942451b034a95177309facfc20ef4db4220a1536cc31ca0dc8ca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ce97f599c0942451b034a95177309facfc20ef4db4220a1536cc31ca0dc8ca7->enter($__internal_1ce97f599c0942451b034a95177309facfc20ef4db4220a1536cc31ca0dc8ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c3cc2594443a905e1f9b99d084396134ba3b44bf33bb21b482735b05f87157e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3cc2594443a905e1f9b99d084396134ba3b44bf33bb21b482735b05f87157e1->enter($__internal_c3cc2594443a905e1f9b99d084396134ba3b44bf33bb21b482735b05f87157e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 133
        echo "                           <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/slick/slick/slick.js"), "html", null, true);
        echo "\"></script>
                           <script type=\"text/javascript\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/slick/initslick.js"), "html", null, true);
        echo "\"></script>
                           ";
        
        $__internal_c3cc2594443a905e1f9b99d084396134ba3b44bf33bb21b482735b05f87157e1->leave($__internal_c3cc2594443a905e1f9b99d084396134ba3b44bf33bb21b482735b05f87157e1_prof);

        
        $__internal_1ce97f599c0942451b034a95177309facfc20ef4db4220a1536cc31ca0dc8ca7->leave($__internal_1ce97f599c0942451b034a95177309facfc20ef4db4220a1536cc31ca0dc8ca7_prof);

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
        return array (  295 => 134,  290 => 133,  281 => 132,  269 => 8,  265 => 7,  254 => 6,  244 => 132,  226 => 117,  220 => 114,  214 => 111,  197 => 97,  184 => 87,  171 => 77,  151 => 60,  129 => 43,  120 => 39,  111 => 35,  102 => 31,  93 => 27,  73 => 9,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Accueil{% endblock %}

{% block body %}
    {% block stylesheets %} 
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('build/slick/slick/slick.css')}}\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('build/slick/slick/slick-theme.css')}}\"/>
    {%endblock%}        
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

\t\t<div class=\"container\" id=\"block-icons\">\t\t\t
\t\t\t\t<div class=\"col-lg-10 offset-lg-1\" id=\"block-icons-2\">
                                    <div>
                                        <button type=\"button\" id=\"see\" onclick=\"location.href='{{ path('map')}}';\"><img src=\"{{ asset('build/img/jumelles-blanc.svg') }}\" height=\"44.5px\" width=\"63px\" alt=\"observez\">
\t\t\t\t\t\t<p class=\"txtbutton\">Observez</p></button>
                                    </div>
                                    <div>
                                        <button type=\"button\" id=\"find\" onclick=\"location.href='{{ path('map')}}';\"><img src=\"{{ asset('build/img/map-blanc.svg') }}\" height=\"44px\" width=\"48px\" alt=\"retrouvez\">
                                            <p class=\"txtbutton\">Retrouvez</p></button>
                                    </div>
                                    <div>
                                        <button type=\"button\" id=\"search\" onclick=\"location.href='{{ path('research')}}';\"><img src=\"{{ asset('build/img/loupe-blanc.svg') }}\" width=\"40px\" height=\"44px\" alt=\"recherchez\">
\t\t\t\t\t\t<p class=\"txtbutton\"> Recherchez</p></button>
                                    </div>
                                    <div>
                                        <button type=\"button\" id=\"myspace\" onclick=\"location.href='{{ path('dashboard')}}';\"><img src=\"{{ asset('build/img/user-blanc.svg') }}\" height=\"44x\" width=\"44px\" alt=\"mon espace\">
\t\t\t\t\t\t<p class=\"txtbutton\">Mon espace</p></button>
                                    </div>
                                    <div>
                                        <button type=\"button\" id=\"mission\" onclick=\"location.href='{{ path('association')}}';\"><img src=\"{{ asset('build/img/world_rose.svg') }}\" width=\"44px\" height=\"44px\" alt=\"association\">
\t\t\t\t\t\t<p class=\"txtbutton\">Notre mission</p></button>
                                    </div>                                 
                                </div>\t\t\t
\t\t</div>
\t</div>
        </div>


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
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://openclassrooms.facebook.com/naoloiseaurare/\"><img src=\"{{ asset('build/img/facebook_rose.svg') }}\" alt=\"logo Facebook\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://twitter.com/nao_oiseau_rare\"><img src=\"{{ asset('build/img/twitter_rose.svg') }}\" alt=\"logo Twitter\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://www.instagram.com/nao_loiseau_rare/\"><img src=\"{{ asset('build/img/instagram_rose.svg') }}\" alt=\"logo Instagram\" height=\"35px\" width=\"35px\"></a>
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

                           {% block javascripts %}
                           <script type=\"text/javascript\" src=\"{{asset('build/slick/slick/slick.js')}}\"></script>
                           <script type=\"text/javascript\" src=\"{{asset('build/slick/initslick.js')}}\"></script>
                           {% endblock %}
{% endblock %}\t", "home.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\home.html.twig");
    }
}
