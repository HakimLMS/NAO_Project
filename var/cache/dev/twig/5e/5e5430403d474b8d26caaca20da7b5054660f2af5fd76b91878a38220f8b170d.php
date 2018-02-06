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
        $__internal_812de588b8ea2bd8a75ed680c7e6aac98fcf874c78c463f0715386f5d8b149a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812de588b8ea2bd8a75ed680c7e6aac98fcf874c78c463f0715386f5d8b149a0->enter($__internal_812de588b8ea2bd8a75ed680c7e6aac98fcf874c78c463f0715386f5d8b149a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_feb70ff989f848434b9dfd012a7330e1c871b0e8dcec91fd51ed3ba036f04b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb70ff989f848434b9dfd012a7330e1c871b0e8dcec91fd51ed3ba036f04b2b->enter($__internal_feb70ff989f848434b9dfd012a7330e1c871b0e8dcec91fd51ed3ba036f04b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<footer>
\t<div class=\"container-fluid\" id=\"footer\">
\t\t<div class=\"row\">
\t\t\t<nav class=\"nav col-7 col-sm-8\" id=\"nav-footer\">
    \t\t\t<a class=\"nav-link\" href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contact</a>
    \t\t\t<a class=\"nav-link\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mentions_legales");
        echo "\">Mentions légales</a>
    \t\t</nav>

    \t\t<ul class=\"nav justify-content-end col-5 col-sm-4\" id=\"networks-footer\">
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://openclassrooms.facebook.com/naoloiseaurare/\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/facebook_rose.svg"), "html", null, true);
        echo "\" alt=\"logo Facebook\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://twitter.com/nao_oiseau_rare\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/twitter_rose.svg"), "html", null, true);
        echo "\" alt=\"logo Twitter\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item\">
\t\t\t    <a class=\"nav-link\" target=\"_blank\" href=\"https://www.instagram.com/nao_loiseau_rare/\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/instagram_rose.svg"), "html", null, true);
        echo "\" alt=\"logo Instagram\" height=\"35px\" width=\"35px\"></a>
\t\t\t  </li>
\t\t\t</ul>
\t\t</div>
\t</div>
</footer>";
        
        $__internal_812de588b8ea2bd8a75ed680c7e6aac98fcf874c78c463f0715386f5d8b149a0->leave($__internal_812de588b8ea2bd8a75ed680c7e6aac98fcf874c78c463f0715386f5d8b149a0_prof);

        
        $__internal_feb70ff989f848434b9dfd012a7330e1c871b0e8dcec91fd51ed3ba036f04b2b->leave($__internal_feb70ff989f848434b9dfd012a7330e1c871b0e8dcec91fd51ed3ba036f04b2b_prof);

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
        return array (  55 => 17,  49 => 14,  43 => 11,  35 => 6,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer>
\t<div class=\"container-fluid\" id=\"footer\">
\t\t<div class=\"row\">
\t\t\t<nav class=\"nav col-7 col-sm-8\" id=\"nav-footer\">
    \t\t\t<a class=\"nav-link\" href=\"{{ path('contact') }}\">Contact</a>
    \t\t\t<a class=\"nav-link\" href=\"{{ path('mentions_legales') }}\">Mentions légales</a>
    \t\t</nav>

    \t\t<ul class=\"nav justify-content-end col-5 col-sm-4\" id=\"networks-footer\">
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
\t</div>
</footer>", "footer.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\footer.html.twig");
    }
}
