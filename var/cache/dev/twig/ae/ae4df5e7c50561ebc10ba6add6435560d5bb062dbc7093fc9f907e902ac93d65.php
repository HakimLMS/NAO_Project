<?php

/* header.html.twig */
class __TwigTemplate_da598d170545ce8e026746b11ed53bcf3621c8e76ae7f3f07a3c59bae02652f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f90f2ee6dab1fb1aef95945cfb696c346a3bcf5f3c1e899d00e1a390c43fb79b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f90f2ee6dab1fb1aef95945cfb696c346a3bcf5f3c1e899d00e1a390c43fb79b->enter($__internal_f90f2ee6dab1fb1aef95945cfb696c346a3bcf5f3c1e899d00e1a390c43fb79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_819f189db9582f94626b8ed01d5802d9e6e8bddda309771a485805ad25f87620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_819f189db9582f94626b8ed01d5802d9e6e8bddda309771a485805ad25f87620->enter($__internal_819f189db9582f94626b8ed01d5802d9e6e8bddda309771a485805ad25f87620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<header>
\t<div class=\"container-fluid\" id=\"header\">
\t\t<div id=\"hamburger\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-2 col-md-2\" id=\"logo\">
\t\t\t\t\t<a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/logohorizontale.svg"), "html", null, true);
        echo "\" alt=\"Logo l'oiseau rare\" width=\"130px\" height=\"81px\"></a>
\t\t\t\t</div>

\t\t\t\t<div class=\"col col-md-10\" id=\"menu\">
\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t<li class=\"nav-item link\"><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/map_rose.svg"), "html", null, true);
        echo "\" alt=\"carte\" width=\"28px\" height=\"28px\">Carte</a></li>
\t\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_list");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/blog_rose.svg"), "html", null, true);
        echo "\" alt=\"blog\" width=\"28px\" height=\"28px\">Blog</a></li>
\t\t\t    \t\t\t<li class=\"nav-item link\">
\t\t\t    \t\t\t\t";
        // line 14
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->getSourceContext()); })()), "user", array()) == null)) {
            // line 15
            echo "\t\t\t    \t\t\t\t    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/user-male_rose.svg"), "html", null, true);
            echo "\" alt=\"login\" width=\"30px\" height=\"30px\">Se connecter</a>
\t\t\t    \t\t\t\t";
        } else {
            // line 17
            echo "\t\t\t    \t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/user-male_rose.svg"), "html", null, true);
            echo "\" alt=\"login\" width=\"30px\" height=\"30px\">Mon espace</a>
\t\t\t    \t\t\t\t";
        }
        // line 18
        echo "\t
\t\t\t    \t\t\t</li>
\t\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("research");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/loupe_rose.svg"), "html", null, true);
        echo "\" alt=\"recherche\" width=\"25px\" height=\"25px\">Recherche</a></li>
\t\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("don");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/donation_rose.svg"), "html", null, true);
        echo "\" alt=\"don\" width=\"28px\" height=\"28px\">Faire un don</a></li>
\t\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("association");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/world_rose.svg"), "html", null, true);
        echo "\" alt=\"association\" width=\"28px\" height=\"28px\">Notre mission</a></li>
\t\t\t\t\t</ul>\t
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/menu_hamb_black.svg"), "html", null, true);
        echo "\" alt=\"menu\" width=\"69px\" height=\"48px\" id=\"menu-hamb\">

\t\t\t<div id=\"hamburger-sidebar-menu\">
\t\t\t\t<h4>Menu</h4>
\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link active\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/map_rose.svg"), "html", null, true);
        echo "\" alt=\"carte\" width=\"14px\" height=\"14px\">Carte</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_list");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/blog_rose.svg"), "html", null, true);
        echo "\" alt=\"blog\" width=\"14px\" height=\"14px\">Blog</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t  \t";
        // line 39
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 39, $this->getSourceContext()); })()), "user", array()) == null)) {
            // line 40
            echo "\t\t\t\t    \t<a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/user-male_rose.svg"), "html", null, true);
            echo "\" alt=\"login\" width=\"14px\" height=\"14px\">Se connecter</a>
\t\t\t\t    ";
        } else {
            // line 42
            echo "\t\t\t\t    \t<a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/user-male_rose.svg"), "html", null, true);
            echo "\" alt=\"login\" width=\"14px\" height=\"14px\">Mon espace</a>\t
\t\t\t\t    ";
        }
        // line 43
        echo "\t
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("research");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/loupe_rose.svg"), "html", null, true);
        echo "\" alt=\"recherche\" width=\"14px\" height=\"14px\">Recherche</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("don");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/donation_rose.svg"), "html", null, true);
        echo "\" alt=\"don\" width=\"14px\" height=\"14px\">Faire un don</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("association");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/world_rose.svg"), "html", null, true);
        echo "\" alt=\"association\" width=\"14px\" height=\"14px\">Notre mission</a>
\t\t\t\t  </li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div id=\"black-filter\"></div>


\t\t</div>

\t\t
\t</div>
</header>";
        
        $__internal_f90f2ee6dab1fb1aef95945cfb696c346a3bcf5f3c1e899d00e1a390c43fb79b->leave($__internal_f90f2ee6dab1fb1aef95945cfb696c346a3bcf5f3c1e899d00e1a390c43fb79b_prof);

        
        $__internal_819f189db9582f94626b8ed01d5802d9e6e8bddda309771a485805ad25f87620->leave($__internal_819f189db9582f94626b8ed01d5802d9e6e8bddda309771a485805ad25f87620_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 52,  155 => 49,  147 => 46,  142 => 43,  134 => 42,  126 => 40,  124 => 39,  116 => 36,  108 => 33,  99 => 27,  89 => 22,  83 => 21,  77 => 20,  73 => 18,  65 => 17,  57 => 15,  55 => 14,  48 => 12,  42 => 11,  32 => 6,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header>
\t<div class=\"container-fluid\" id=\"header\">
\t\t<div id=\"hamburger\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-2 col-md-2\" id=\"logo\">
\t\t\t\t\t<a href=\"{{ path('home') }}\"><img src=\"{{ asset('build/img/logohorizontale.svg') }}\" alt=\"Logo l'oiseau rare\" width=\"130px\" height=\"81px\"></a>
\t\t\t\t</div>

\t\t\t\t<div class=\"col col-md-10\" id=\"menu\">
\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t<li class=\"nav-item link\"><a href=\"{{ path('map') }}\"><img src=\"{{ asset('build/img/map_rose.svg') }}\" alt=\"carte\" width=\"28px\" height=\"28px\">Carte</a></li>
\t\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"{{ path('blog_list') }}\"><img src=\"{{ asset('build/img/blog_rose.svg') }}\" alt=\"blog\" width=\"28px\" height=\"28px\">Blog</a></li>
\t\t\t    \t\t\t<li class=\"nav-item link\">
\t\t\t    \t\t\t\t{% if app.user == null %}
\t\t\t    \t\t\t\t    <a href=\"{{ path('login') }}\"><img src=\"{{ asset('build/img/user-male_rose.svg') }}\" alt=\"login\" width=\"30px\" height=\"30px\">Se connecter</a>
\t\t\t    \t\t\t\t{% else %}
\t\t\t    \t\t\t\t\t<a href=\"{{ path('dashboard') }}\"><img src=\"{{ asset('build/img/user-male_rose.svg') }}\" alt=\"login\" width=\"30px\" height=\"30px\">Mon espace</a>
\t\t\t    \t\t\t\t{% endif %}\t
\t\t\t    \t\t\t</li>
\t\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"{{ path('research') }}\"><img src=\"{{ asset('build/img/loupe_rose.svg') }}\" alt=\"recherche\" width=\"25px\" height=\"25px\">Recherche</a></li>
\t\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"{{ path('don') }}\"><img src=\"{{ asset('build/img/donation_rose.svg') }}\" alt=\"don\" width=\"28px\" height=\"28px\">Faire un don</a></li>
\t\t\t    \t\t\t<li class=\"nav-item link\"><a href=\"{{ path('association') }}\"><img src=\"{{ asset('build/img/world_rose.svg') }}\" alt=\"association\" width=\"28px\" height=\"28px\">Notre mission</a></li>
\t\t\t\t\t</ul>\t
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<img src=\"{{ asset('build/img/menu_hamb_black.svg') }}\" alt=\"menu\" width=\"69px\" height=\"48px\" id=\"menu-hamb\">

\t\t\t<div id=\"hamburger-sidebar-menu\">
\t\t\t\t<h4>Menu</h4>
\t\t\t\t<ul class=\"nav flex-column\">
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link active\" href=\"{{ path('map') }}\"><img src=\"{{ asset('build/img/map_rose.svg') }}\" alt=\"carte\" width=\"14px\" height=\"14px\">Carte</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"{{ path('blog_list') }}\"><img src=\"{{ asset('build/img/blog_rose.svg') }}\" alt=\"blog\" width=\"14px\" height=\"14px\">Blog</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t  \t{% if app.user == null %}
\t\t\t\t    \t<a class=\"nav-link\" href=\"{{ path('login') }}\"><img src=\"{{ asset('build/img/user-male_rose.svg') }}\" alt=\"login\" width=\"14px\" height=\"14px\">Se connecter</a>
\t\t\t\t    {% else %}
\t\t\t\t    \t<a class=\"nav-link\" href=\"{{ path('dashboard') }}\"><img src=\"{{ asset('build/img/user-male_rose.svg') }}\" alt=\"login\" width=\"14px\" height=\"14px\">Mon espace</a>\t
\t\t\t\t    {% endif %}\t
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"{{ path('research') }}\"><img src=\"{{ asset('build/img/loupe_rose.svg') }}\" alt=\"recherche\" width=\"14px\" height=\"14px\">Recherche</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"{{ path('don') }}\"><img src=\"{{ asset('build/img/donation_rose.svg') }}\" alt=\"don\" width=\"14px\" height=\"14px\">Faire un don</a>
\t\t\t\t  </li>
\t\t\t\t  <li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"{{ path('association') }}\"><img src=\"{{ asset('build/img/world_rose.svg') }}\" alt=\"association\" width=\"14px\" height=\"14px\">Notre mission</a>
\t\t\t\t  </li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div id=\"black-filter\"></div>


\t\t</div>

\t\t
\t</div>
</header>", "header.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\header.html.twig");
    }
}
