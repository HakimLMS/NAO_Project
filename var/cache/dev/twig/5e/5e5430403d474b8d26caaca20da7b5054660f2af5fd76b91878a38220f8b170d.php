<?php

/* footer.html.twig */
class __TwigTemplate_443d7bf994dd22d1b55b4f74a4f4337d2f92698dbcf1efc1ca20707342eca1cd extends Twig_Template
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
        $__internal_cf84df3f999b19a71ac44d6e54bca3d6e2161e008ed3c6723b822e6d5515b1ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf84df3f999b19a71ac44d6e54bca3d6e2161e008ed3c6723b822e6d5515b1ef->enter($__internal_cf84df3f999b19a71ac44d6e54bca3d6e2161e008ed3c6723b822e6d5515b1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_fd0c2c20bde717cd47cbb36b9c5616544666aa1151c143809301f29eda0b8bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd0c2c20bde717cd47cbb36b9c5616544666aa1151c143809301f29eda0b8bda->enter($__internal_fd0c2c20bde717cd47cbb36b9c5616544666aa1151c143809301f29eda0b8bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<footer>
\t<div class=\"container-fluid\" id=\"footer\">
\t\t<div class=\"row\">
\t\t\t<nav class=\"nav col-7 col-sm-8\" id=\"nav-footer\">
    \t\t\t<a class=\"nav-link\" href=\"#\">Contact</a>
    \t\t\t<a class=\"nav-link\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mentions_legales");
        echo "\">Mentions légales</a>
    \t\t</nav>

    \t\t<ul class=\"nav justify-content-end col-5 col-sm-4\" id=\"networks-footer\">
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://facebook.com\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/facebook_rose.svg"), "html", null, true);
        echo "\" alt=\"logo Facebook\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://twitter.com\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/twitter_rose.svg"), "html", null, true);
        echo "\" alt=\"logo Twitter\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://instagram.com\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/instagram_rose.svg"), "html", null, true);
        echo "\" alt=\"logo Instagram\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t</ul>
\t\t</div>
\t</div>
</footer>";
        
        $__internal_cf84df3f999b19a71ac44d6e54bca3d6e2161e008ed3c6723b822e6d5515b1ef->leave($__internal_cf84df3f999b19a71ac44d6e54bca3d6e2161e008ed3c6723b822e6d5515b1ef_prof);

        
        $__internal_fd0c2c20bde717cd47cbb36b9c5616544666aa1151c143809301f29eda0b8bda->leave($__internal_fd0c2c20bde717cd47cbb36b9c5616544666aa1151c143809301f29eda0b8bda_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  46 => 14,  40 => 11,  32 => 6,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer>
\t<div class=\"container-fluid\" id=\"footer\">
\t\t<div class=\"row\">
\t\t\t<nav class=\"nav col-7 col-sm-8\" id=\"nav-footer\">
    \t\t\t<a class=\"nav-link\" href=\"#\">Contact</a>
    \t\t\t<a class=\"nav-link\" href=\"{{ path('mentions_legales') }}\">Mentions légales</a>
    \t\t</nav>

    \t\t<ul class=\"nav justify-content-end col-5 col-sm-4\" id=\"networks-footer\">
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
\t</div>
</footer>", "footer.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\footer.html.twig");
    }
}
