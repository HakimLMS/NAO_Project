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
        $__internal_b8464fec5d4e7d01fee0a3e627f4ad77f9ad0f5c51225eb5d0eadc422244711a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8464fec5d4e7d01fee0a3e627f4ad77f9ad0f5c51225eb5d0eadc422244711a->enter($__internal_b8464fec5d4e7d01fee0a3e627f4ad77f9ad0f5c51225eb5d0eadc422244711a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_8826bd425eb85fdc4d5a2a6b0c836169d242a912dbddef882535ada9f8d70cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8826bd425eb85fdc4d5a2a6b0c836169d242a912dbddef882535ada9f8d70cae->enter($__internal_8826bd425eb85fdc4d5a2a6b0c836169d242a912dbddef882535ada9f8d70cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8464fec5d4e7d01fee0a3e627f4ad77f9ad0f5c51225eb5d0eadc422244711a->leave($__internal_b8464fec5d4e7d01fee0a3e627f4ad77f9ad0f5c51225eb5d0eadc422244711a_prof);

        
        $__internal_8826bd425eb85fdc4d5a2a6b0c836169d242a912dbddef882535ada9f8d70cae->leave($__internal_8826bd425eb85fdc4d5a2a6b0c836169d242a912dbddef882535ada9f8d70cae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a8f97854146e4762595950b8dc4913885a8ed0d583464b4cab6b5ae655ffed9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a8f97854146e4762595950b8dc4913885a8ed0d583464b4cab6b5ae655ffed9->enter($__internal_1a8f97854146e4762595950b8dc4913885a8ed0d583464b4cab6b5ae655ffed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bbe1c4937405cea418ebee350d3054d28053aa0bbc10d53f620af5116965502f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe1c4937405cea418ebee350d3054d28053aa0bbc10d53f620af5116965502f->enter($__internal_bbe1c4937405cea418ebee350d3054d28053aa0bbc10d53f620af5116965502f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_bbe1c4937405cea418ebee350d3054d28053aa0bbc10d53f620af5116965502f->leave($__internal_bbe1c4937405cea418ebee350d3054d28053aa0bbc10d53f620af5116965502f_prof);

        
        $__internal_1a8f97854146e4762595950b8dc4913885a8ed0d583464b4cab6b5ae655ffed9->leave($__internal_1a8f97854146e4762595950b8dc4913885a8ed0d583464b4cab6b5ae655ffed9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_42381f8e6a9468aac54ca9a96465e09b8a35a459161e0335308e69d34dc7b3e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42381f8e6a9468aac54ca9a96465e09b8a35a459161e0335308e69d34dc7b3e0->enter($__internal_42381f8e6a9468aac54ca9a96465e09b8a35a459161e0335308e69d34dc7b3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75b272cbe099349917a7478c891a2cc58117bd79b442f865888d6a45fd311e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b272cbe099349917a7478c891a2cc58117bd79b442f865888d6a45fd311e7d->enter($__internal_75b272cbe099349917a7478c891a2cc58117bd79b442f865888d6a45fd311e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t
\t\t</div>

\t\t<h3>Comment agir ensemble ?</h3>

\t\t<div class=\"container\" id=\"block-icons\">
\t\t\t
\t\t\t\t<div class=\"col-lg-10 offset-lg-1\" id=\"block-icons-2\">
                                    <div>
                                        <button type=\"button\" id=\"see\" onclick=\"location.href='";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map");
        echo "';\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/jumelles-blanc.svg"), "html", null, true);
        echo "\" height=\"44.5px\" width=\"63px\" alt=\"observez\">
\t\t\t\t\t\t<p class=\"txtbutton\">Observez</p></button>
                                    </div>
                                    <div>
                                        <button type=\"button\" id=\"find\" onclick=\"location.href='";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map");
        echo "';\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/map-blanc.svg"), "html", null, true);
        echo "\" height=\"44px\" width=\"48px\" alt=\"retrouvez\">
                                            <p class=\"txtbutton\">Retrouvez</p></button>
                                    </div>
                                    <div>
                                        <button type=\"button\" id=\"search\" onclick=\"location.href='";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("research");
        echo "';\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/loupe-blanc.svg"), "html", null, true);
        echo "\" width=\"40px\" height=\"44px\" alt=\"recherchez\">
\t\t\t\t\t\t<p class=\"txtbutton\"> Recherchez</p></button>
                                    </div>
                                    <div>
                                        <button type=\"button\" id=\"myspace\" onclick=\"location.href='";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "';\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/user-blanc.svg"), "html", null, true);
        echo "\" height=\"44x\" width=\"44px\" alt=\"mon espace\">
\t\t\t\t\t\t<p class=\"txtbutton\">Mon espace</p></button>
                                    </div>
                                    <div>
                                        <button type=\"button\" id=\"mission\" onclick=\"location.href='";
        // line 45
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
        // line 62
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
        // line 79
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
        // line 89
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
        // line 99
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
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/facebook_rose.svg"), "html", null, true);
        echo "\" alt=\"logo Facebook\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://twitter.com\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/twitter_rose.svg"), "html", null, true);
        echo "\" alt=\"logo Twitter\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://instagram.com\"><img src=\"";
        // line 119
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
        // line 131
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_75b272cbe099349917a7478c891a2cc58117bd79b442f865888d6a45fd311e7d->leave($__internal_75b272cbe099349917a7478c891a2cc58117bd79b442f865888d6a45fd311e7d_prof);

        
        $__internal_42381f8e6a9468aac54ca9a96465e09b8a35a459161e0335308e69d34dc7b3e0->leave($__internal_42381f8e6a9468aac54ca9a96465e09b8a35a459161e0335308e69d34dc7b3e0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a243d9391e3da8328d85d3ac7537c9825956ef9bfc1f35d4fee56204563fdeb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a243d9391e3da8328d85d3ac7537c9825956ef9bfc1f35d4fee56204563fdeb1->enter($__internal_a243d9391e3da8328d85d3ac7537c9825956ef9bfc1f35d4fee56204563fdeb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d2fd15a6e74a54915e3c57f81267edd4688987993b725b90ad6a14fe58f9bbfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2fd15a6e74a54915e3c57f81267edd4688987993b725b90ad6a14fe58f9bbfc->enter($__internal_d2fd15a6e74a54915e3c57f81267edd4688987993b725b90ad6a14fe58f9bbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d2fd15a6e74a54915e3c57f81267edd4688987993b725b90ad6a14fe58f9bbfc->leave($__internal_d2fd15a6e74a54915e3c57f81267edd4688987993b725b90ad6a14fe58f9bbfc_prof);

        
        $__internal_a243d9391e3da8328d85d3ac7537c9825956ef9bfc1f35d4fee56204563fdeb1->leave($__internal_a243d9391e3da8328d85d3ac7537c9825956ef9bfc1f35d4fee56204563fdeb1_prof);

    }

    // line 131
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a26ebd72cf9cdec8eaf79d12a69d97793aa51c5f13b8f8620025aa5c37d4f682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a26ebd72cf9cdec8eaf79d12a69d97793aa51c5f13b8f8620025aa5c37d4f682->enter($__internal_a26ebd72cf9cdec8eaf79d12a69d97793aa51c5f13b8f8620025aa5c37d4f682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d3f2cf0c6e0ba2e0d0800f8e4b9c08473b38db53841da66672a53a1bd481f5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f2cf0c6e0ba2e0d0800f8e4b9c08473b38db53841da66672a53a1bd481f5c4->enter($__internal_d3f2cf0c6e0ba2e0d0800f8e4b9c08473b38db53841da66672a53a1bd481f5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 132
        echo "                           <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/slick/slick/slick.js"), "html", null, true);
        echo "\"></script>
                           <script type=\"text/javascript\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/slick/initslick.js"), "html", null, true);
        echo "\"></script>
                           ";
        
        $__internal_d3f2cf0c6e0ba2e0d0800f8e4b9c08473b38db53841da66672a53a1bd481f5c4->leave($__internal_d3f2cf0c6e0ba2e0d0800f8e4b9c08473b38db53841da66672a53a1bd481f5c4_prof);

        
        $__internal_a26ebd72cf9cdec8eaf79d12a69d97793aa51c5f13b8f8620025aa5c37d4f682->leave($__internal_a26ebd72cf9cdec8eaf79d12a69d97793aa51c5f13b8f8620025aa5c37d4f682_prof);

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
        return array (  294 => 133,  289 => 132,  280 => 131,  268 => 8,  264 => 7,  253 => 6,  243 => 131,  228 => 119,  222 => 116,  216 => 113,  199 => 99,  186 => 89,  173 => 79,  153 => 62,  131 => 45,  122 => 41,  113 => 37,  104 => 33,  95 => 29,  73 => 9,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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
\t\t\t
\t\t</div>

\t\t<h3>Comment agir ensemble ?</h3>

\t\t<div class=\"container\" id=\"block-icons\">
\t\t\t
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

                           {% block javascripts %}
                           <script type=\"text/javascript\" src=\"{{asset('build/slick/slick/slick.js')}}\"></script>
                           <script type=\"text/javascript\" src=\"{{asset('build/slick/initslick.js')}}\"></script>
                           {% endblock %}
{% endblock %}\t", "home.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\home.html.twig");
    }
}
