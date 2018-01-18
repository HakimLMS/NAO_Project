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
        $__internal_239e94eace1270838e939b674ce2afa93eaeb50832319d6b2212daba1566f2f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239e94eace1270838e939b674ce2afa93eaeb50832319d6b2212daba1566f2f8->enter($__internal_239e94eace1270838e939b674ce2afa93eaeb50832319d6b2212daba1566f2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "association.html.twig"));

        $__internal_888bf498268b0b0dd5945c127f082aed566bdad1cd322e82d6be29f5ac4400bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888bf498268b0b0dd5945c127f082aed566bdad1cd322e82d6be29f5ac4400bd->enter($__internal_888bf498268b0b0dd5945c127f082aed566bdad1cd322e82d6be29f5ac4400bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "association.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_239e94eace1270838e939b674ce2afa93eaeb50832319d6b2212daba1566f2f8->leave($__internal_239e94eace1270838e939b674ce2afa93eaeb50832319d6b2212daba1566f2f8_prof);

        
        $__internal_888bf498268b0b0dd5945c127f082aed566bdad1cd322e82d6be29f5ac4400bd->leave($__internal_888bf498268b0b0dd5945c127f082aed566bdad1cd322e82d6be29f5ac4400bd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a0c059b3452ff41648fb1320f8dafe2b25062593d6f41342e6f9e52cf8c9b20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a0c059b3452ff41648fb1320f8dafe2b25062593d6f41342e6f9e52cf8c9b20->enter($__internal_4a0c059b3452ff41648fb1320f8dafe2b25062593d6f41342e6f9e52cf8c9b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b4ff0d182e0c7f7c28321a02a15d4ea011f6aed8d9b65e71eb3a1354f75f3ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4ff0d182e0c7f7c28321a02a15d4ea011f6aed8d9b65e71eb3a1354f75f3ed->enter($__internal_9b4ff0d182e0c7f7c28321a02a15d4ea011f6aed8d9b65e71eb3a1354f75f3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "L'association";
        
        $__internal_9b4ff0d182e0c7f7c28321a02a15d4ea011f6aed8d9b65e71eb3a1354f75f3ed->leave($__internal_9b4ff0d182e0c7f7c28321a02a15d4ea011f6aed8d9b65e71eb3a1354f75f3ed_prof);

        
        $__internal_4a0c059b3452ff41648fb1320f8dafe2b25062593d6f41342e6f9e52cf8c9b20->leave($__internal_4a0c059b3452ff41648fb1320f8dafe2b25062593d6f41342e6f9e52cf8c9b20_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3d5cbc8962ab24de033f645b97871ededa90cb0ffc58918b57301fe07576de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3d5cbc8962ab24de033f645b97871ededa90cb0ffc58918b57301fe07576de2->enter($__internal_a3d5cbc8962ab24de033f645b97871ededa90cb0ffc58918b57301fe07576de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85dc3f0556257633afaad2b045028aa66e88cd981f1a3a5174b795965b1f4097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85dc3f0556257633afaad2b045028aa66e88cd981f1a3a5174b795965b1f4097->enter($__internal_85dc3f0556257633afaad2b045028aa66e88cd981f1a3a5174b795965b1f4097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<div class=\"container-fluid\" id=\"environnement\">
\t\t<img id=\"environnement-img\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/environnement1.jpg"), "html", null, true);
        echo "\">
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
\t\t\t<a href=\"#\"><button id=\"bouton-don\" type=\"button\" class=\"btn\">Faire un don</button></a>
\t\t</div>
\t</div>

";
        
        $__internal_85dc3f0556257633afaad2b045028aa66e88cd981f1a3a5174b795965b1f4097->leave($__internal_85dc3f0556257633afaad2b045028aa66e88cd981f1a3a5174b795965b1f4097_prof);

        
        $__internal_a3d5cbc8962ab24de033f645b97871ededa90cb0ffc58918b57301fe07576de2->leave($__internal_a3d5cbc8962ab24de033f645b97871ededa90cb0ffc58918b57301fe07576de2_prof);

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
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}L'association{% endblock %}

{% block body %}

\t<div class=\"container-fluid\" id=\"environnement\">
\t\t<img id=\"environnement-img\" src=\"{{ asset('build/img/environnement1.jpg') }}\">
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
\t\t\t<a href=\"#\"><button id=\"bouton-don\" type=\"button\" class=\"btn\">Faire un don</button></a>
\t\t</div>
\t</div>

{% endblock %}", "association.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\association.html.twig");
    }
}
