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
        $__internal_baad2aa2340c9e65d19ba5e3792385f4bcb0ead443b10dd64abdedb877d9aa38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baad2aa2340c9e65d19ba5e3792385f4bcb0ead443b10dd64abdedb877d9aa38->enter($__internal_baad2aa2340c9e65d19ba5e3792385f4bcb0ead443b10dd64abdedb877d9aa38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/fiche-oiseau.html.twig"));

        $__internal_f8990f1b533953e9e1c315fd4ce7c8f473a10fe982bcee7f32fd6b1a5bc44bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8990f1b533953e9e1c315fd4ce7c8f473a10fe982bcee7f32fd6b1a5bc44bcb->enter($__internal_f8990f1b533953e9e1c315fd4ce7c8f473a10fe982bcee7f32fd6b1a5bc44bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/fiche-oiseau.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_baad2aa2340c9e65d19ba5e3792385f4bcb0ead443b10dd64abdedb877d9aa38->leave($__internal_baad2aa2340c9e65d19ba5e3792385f4bcb0ead443b10dd64abdedb877d9aa38_prof);

        
        $__internal_f8990f1b533953e9e1c315fd4ce7c8f473a10fe982bcee7f32fd6b1a5bc44bcb->leave($__internal_f8990f1b533953e9e1c315fd4ce7c8f473a10fe982bcee7f32fd6b1a5bc44bcb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f86b000085c663c712c8aa110bb85e8332f84ffd19233538144255cc7f88ea36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f86b000085c663c712c8aa110bb85e8332f84ffd19233538144255cc7f88ea36->enter($__internal_f86b000085c663c712c8aa110bb85e8332f84ffd19233538144255cc7f88ea36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4fa11bea63487687b73dbe3115e36b5982f77cf1505cfcfb9f28e17161d599f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4fa11bea63487687b73dbe3115e36b5982f77cf1505cfcfb9f28e17161d599f->enter($__internal_d4fa11bea63487687b73dbe3115e36b5982f77cf1505cfcfb9f28e17161d599f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Fiche oiseau : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["bird"]) || array_key_exists("bird", $context) ? $context["bird"] : (function () { throw new Twig_Error_Runtime('Variable "bird" does not exist.', 3, $this->getSourceContext()); })()), "cdName", array()), "html", null, true);
        
        $__internal_d4fa11bea63487687b73dbe3115e36b5982f77cf1505cfcfb9f28e17161d599f->leave($__internal_d4fa11bea63487687b73dbe3115e36b5982f77cf1505cfcfb9f28e17161d599f_prof);

        
        $__internal_f86b000085c663c712c8aa110bb85e8332f84ffd19233538144255cc7f88ea36->leave($__internal_f86b000085c663c712c8aa110bb85e8332f84ffd19233538144255cc7f88ea36_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f884efeb5c25747d753d020cc879c47110e1136b6c85055119b1cc81426286e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f884efeb5c25747d753d020cc879c47110e1136b6c85055119b1cc81426286e->enter($__internal_0f884efeb5c25747d753d020cc879c47110e1136b6c85055119b1cc81426286e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_22379e2b20f5d11de12200d6bf0981240bb61e343794fd2c1aee63076351d9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22379e2b20f5d11de12200d6bf0981240bb61e343794fd2c1aee63076351d9de->enter($__internal_22379e2b20f5d11de12200d6bf0981240bb61e343794fd2c1aee63076351d9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_22379e2b20f5d11de12200d6bf0981240bb61e343794fd2c1aee63076351d9de->leave($__internal_22379e2b20f5d11de12200d6bf0981240bb61e343794fd2c1aee63076351d9de_prof);

        
        $__internal_0f884efeb5c25747d753d020cc879c47110e1136b6c85055119b1cc81426286e->leave($__internal_0f884efeb5c25747d753d020cc879c47110e1136b6c85055119b1cc81426286e_prof);

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

{% endblock %}", "research/fiche-oiseau.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\research\\fiche-oiseau.html.twig");
    }
}
