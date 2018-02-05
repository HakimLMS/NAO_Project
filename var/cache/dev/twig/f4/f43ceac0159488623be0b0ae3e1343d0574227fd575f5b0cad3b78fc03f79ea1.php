<?php

/* Map/mapAnonymous.html.twig */
class __TwigTemplate_444cf3d00033b903ed030521d9b1271e01611eab8e092232c990853648c5b494 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Map/mapAnonymous.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97fb0c332b23143feaf27e06f7eb23d08abf2132835523a3b18d63c4beacf739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97fb0c332b23143feaf27e06f7eb23d08abf2132835523a3b18d63c4beacf739->enter($__internal_97fb0c332b23143feaf27e06f7eb23d08abf2132835523a3b18d63c4beacf739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Map/mapAnonymous.html.twig"));

        $__internal_57cc047ba926fb3126ef7650d7624aaf53df2d0d45cb655431d9a52714972009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57cc047ba926fb3126ef7650d7624aaf53df2d0d45cb655431d9a52714972009->enter($__internal_57cc047ba926fb3126ef7650d7624aaf53df2d0d45cb655431d9a52714972009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Map/mapAnonymous.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97fb0c332b23143feaf27e06f7eb23d08abf2132835523a3b18d63c4beacf739->leave($__internal_97fb0c332b23143feaf27e06f7eb23d08abf2132835523a3b18d63c4beacf739_prof);

        
        $__internal_57cc047ba926fb3126ef7650d7624aaf53df2d0d45cb655431d9a52714972009->leave($__internal_57cc047ba926fb3126ef7650d7624aaf53df2d0d45cb655431d9a52714972009_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7dda9ea06dc0bf1722634d385b574aa14e1a5e0bc411fcf9663843737018dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7dda9ea06dc0bf1722634d385b574aa14e1a5e0bc411fcf9663843737018dcb->enter($__internal_b7dda9ea06dc0bf1722634d385b574aa14e1a5e0bc411fcf9663843737018dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5bcdfe8b03928b96463d97787c920a72898141cb8f44efdef6800ed8679c8939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bcdfe8b03928b96463d97787c920a72898141cb8f44efdef6800ed8679c8939->enter($__internal_5bcdfe8b03928b96463d97787c920a72898141cb8f44efdef6800ed8679c8939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/map.css"), "html", null, true);
        echo "\">
        <div class=\"mapwraper\">
            <div id=\"map\"></div>
        </div>
        <div class=\"buttons\">
            <select id=\"selectType\" onclick=\"initMap();\">
               <option value='All'>Choisissez un filtre</option>
               <option value='Accipitriformes'>Accipitriforme</option>
               <option value='Anseriformes'>Anseriforme</option>
               <option value='Bucerotiformes'>Bucerotiforme</option>
               <option value='Caprimulgiformes'> Caprimulgiformes</option>
               <option value='Charadriiformes'> Charadriiformes</option>
               <option value='Columbiformes'> Columbiformes</option>
               <option value='Coraciiformes'> Coraciiformes</option>
               <option value='Cuculiformes'> Cuculiformes</option>
               <option value='Eurypygiformes'> Eurypygiformes</option>
               <option value='Falconiformes'> Falconiformes</option>
               <option value='Galliformes'> Galliformes</option>
               <option value='Gruiformes'> Gruiformes</option>
               <option value='Leptosomatiformes'> Leptosomatiformes</option>
               <option value='Opisthocomiformes'> Opisthocomiformes</option>
               <option value='Passeriformes'> Passeriformes</option>
               <option value='Phoenicopteriformes'> Phoenicopteriformes</option>
               <option value='Piciformes'> Piciformes</option>
               <option value='Procellariiformes'> Procellariiformes</option>
               <option value='Psittaciformes'> Psittaciformes</option>
               <option value='Sphenisciformes'> Sphenisciformes</option>
               <option value='Strigiformes'> Strigiformes</option>
               <option value='Tinamiformes'> Tinamiformes</option>
               <option value=Trogoniformes> Trogoniformes</option>
            </select>
        </div>
    ";
        
        $__internal_5bcdfe8b03928b96463d97787c920a72898141cb8f44efdef6800ed8679c8939->leave($__internal_5bcdfe8b03928b96463d97787c920a72898141cb8f44efdef6800ed8679c8939_prof);

        
        $__internal_b7dda9ea06dc0bf1722634d385b574aa14e1a5e0bc411fcf9663843737018dcb->leave($__internal_b7dda9ea06dc0bf1722634d385b574aa14e1a5e0bc411fcf9663843737018dcb_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fb685f3d0e35c5816d775514a734fa47113b236621325448797a977466a6d93b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb685f3d0e35c5816d775514a734fa47113b236621325448797a977466a6d93b->enter($__internal_fb685f3d0e35c5816d775514a734fa47113b236621325448797a977466a6d93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5c47369567f73372813d2b5ec374e9a9e9bfc065915a308c81c9f9f335601cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c47369567f73372813d2b5ec374e9a9e9bfc065915a308c81c9f9f335601cc5->enter($__internal_5c47369567f73372813d2b5ec374e9a9e9bfc065915a308c81c9f9f335601cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "        <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBtz5G85w1sjtP8Y0sPnY45ZAQq5d2Y_LE&callback=initMap\"></script>
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/mapAnonymous.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_5c47369567f73372813d2b5ec374e9a9e9bfc065915a308c81c9f9f335601cc5->leave($__internal_5c47369567f73372813d2b5ec374e9a9e9bfc065915a308c81c9f9f335601cc5_prof);

        
        $__internal_fb685f3d0e35c5816d775514a734fa47113b236621325448797a977466a6d93b->leave($__internal_fb685f3d0e35c5816d775514a734fa47113b236621325448797a977466a6d93b_prof);

    }

    public function getTemplateName()
    {
        return "Map/mapAnonymous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  105 => 39,  96 => 38,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

    {% block body %}

        <link rel=\"stylesheet\" href=\"{{asset('build/css/map.css')}}\">
        <div class=\"mapwraper\">
            <div id=\"map\"></div>
        </div>
        <div class=\"buttons\">
            <select id=\"selectType\" onclick=\"initMap();\">
               <option value='All'>Choisissez un filtre</option>
               <option value='Accipitriformes'>Accipitriforme</option>
               <option value='Anseriformes'>Anseriforme</option>
               <option value='Bucerotiformes'>Bucerotiforme</option>
               <option value='Caprimulgiformes'> Caprimulgiformes</option>
               <option value='Charadriiformes'> Charadriiformes</option>
               <option value='Columbiformes'> Columbiformes</option>
               <option value='Coraciiformes'> Coraciiformes</option>
               <option value='Cuculiformes'> Cuculiformes</option>
               <option value='Eurypygiformes'> Eurypygiformes</option>
               <option value='Falconiformes'> Falconiformes</option>
               <option value='Galliformes'> Galliformes</option>
               <option value='Gruiformes'> Gruiformes</option>
               <option value='Leptosomatiformes'> Leptosomatiformes</option>
               <option value='Opisthocomiformes'> Opisthocomiformes</option>
               <option value='Passeriformes'> Passeriformes</option>
               <option value='Phoenicopteriformes'> Phoenicopteriformes</option>
               <option value='Piciformes'> Piciformes</option>
               <option value='Procellariiformes'> Procellariiformes</option>
               <option value='Psittaciformes'> Psittaciformes</option>
               <option value='Sphenisciformes'> Sphenisciformes</option>
               <option value='Strigiformes'> Strigiformes</option>
               <option value='Tinamiformes'> Tinamiformes</option>
               <option value=Trogoniformes> Trogoniformes</option>
            </select>
        </div>
    {% endblock %}
    {% block javascripts %}
        <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBtz5G85w1sjtP8Y0sPnY45ZAQq5d2Y_LE&callback=initMap\"></script>
        <script src=\"{{asset('build/js/mapAnonymous.js')}}\"></script>
    {% endblock %}

", "Map/mapAnonymous.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Map\\mapAnonymous.html.twig");
    }
}
