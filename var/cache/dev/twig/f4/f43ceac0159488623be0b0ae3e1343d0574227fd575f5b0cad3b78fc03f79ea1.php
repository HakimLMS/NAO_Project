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
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_bc0914c40338f9c7fe8d695b1035e71b1f33cc7f930e6a46fedbe9fdeea3f474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc0914c40338f9c7fe8d695b1035e71b1f33cc7f930e6a46fedbe9fdeea3f474->enter($__internal_bc0914c40338f9c7fe8d695b1035e71b1f33cc7f930e6a46fedbe9fdeea3f474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Map/mapAnonymous.html.twig"));

        $__internal_f0336adbdbf2f7ab08784ab216e27c1f7c96eea873dbc0c7227f4ce60eb8bc79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0336adbdbf2f7ab08784ab216e27c1f7c96eea873dbc0c7227f4ce60eb8bc79->enter($__internal_f0336adbdbf2f7ab08784ab216e27c1f7c96eea873dbc0c7227f4ce60eb8bc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Map/mapAnonymous.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc0914c40338f9c7fe8d695b1035e71b1f33cc7f930e6a46fedbe9fdeea3f474->leave($__internal_bc0914c40338f9c7fe8d695b1035e71b1f33cc7f930e6a46fedbe9fdeea3f474_prof);

        
        $__internal_f0336adbdbf2f7ab08784ab216e27c1f7c96eea873dbc0c7227f4ce60eb8bc79->leave($__internal_f0336adbdbf2f7ab08784ab216e27c1f7c96eea873dbc0c7227f4ce60eb8bc79_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_89c43cbb7447da0bde44f768d6580ce94af1cf0d06ef8d881792daf377d1e743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89c43cbb7447da0bde44f768d6580ce94af1cf0d06ef8d881792daf377d1e743->enter($__internal_89c43cbb7447da0bde44f768d6580ce94af1cf0d06ef8d881792daf377d1e743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d27c2919a0f5e22cbc7e93793b2285427842f95201d2a6cecb92041d804c2004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d27c2919a0f5e22cbc7e93793b2285427842f95201d2a6cecb92041d804c2004->enter($__internal_d27c2919a0f5e22cbc7e93793b2285427842f95201d2a6cecb92041d804c2004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carte";
        
        $__internal_d27c2919a0f5e22cbc7e93793b2285427842f95201d2a6cecb92041d804c2004->leave($__internal_d27c2919a0f5e22cbc7e93793b2285427842f95201d2a6cecb92041d804c2004_prof);

        
        $__internal_89c43cbb7447da0bde44f768d6580ce94af1cf0d06ef8d881792daf377d1e743->leave($__internal_89c43cbb7447da0bde44f768d6580ce94af1cf0d06ef8d881792daf377d1e743_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ff327adf2bdde5f57d667724d367f4e93572f03fb582291028fca47ef12f49e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff327adf2bdde5f57d667724d367f4e93572f03fb582291028fca47ef12f49e7->enter($__internal_ff327adf2bdde5f57d667724d367f4e93572f03fb582291028fca47ef12f49e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_62eb0889bd317394dd39199ca61bc644f0c2da079ad0b69f674c22b2b4bcf7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62eb0889bd317394dd39199ca61bc644f0c2da079ad0b69f674c22b2b4bcf7cd->enter($__internal_62eb0889bd317394dd39199ca61bc644f0c2da079ad0b69f674c22b2b4bcf7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/map.css"), "html", null, true);
        echo "\">";
        
        $__internal_62eb0889bd317394dd39199ca61bc644f0c2da079ad0b69f674c22b2b4bcf7cd->leave($__internal_62eb0889bd317394dd39199ca61bc644f0c2da079ad0b69f674c22b2b4bcf7cd_prof);

        
        $__internal_ff327adf2bdde5f57d667724d367f4e93572f03fb582291028fca47ef12f49e7->leave($__internal_ff327adf2bdde5f57d667724d367f4e93572f03fb582291028fca47ef12f49e7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_059b27d47edfb070541fec6c70acfba28a76852819009ede6831d39a88393983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_059b27d47edfb070541fec6c70acfba28a76852819009ede6831d39a88393983->enter($__internal_059b27d47edfb070541fec6c70acfba28a76852819009ede6831d39a88393983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_686530631fdc287b97d2582074132c6a91bcd84fb69cd8218c10f631be0eae9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_686530631fdc287b97d2582074132c6a91bcd84fb69cd8218c10f631be0eae9a->enter($__internal_686530631fdc287b97d2582074132c6a91bcd84fb69cd8218c10f631be0eae9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
        <div class=\"container-fluid\" id=\"carte\">
            <div class=\"white-filter\">
                <div class=\"row\">
                    <div class=\"col-md-8 mapwraper\">
                        <div id=\"map\"></div>
                    </div>

                    <div class=\"col-md-4 buttons\">
                        <a id=\"map-login\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\"><button id=\"obs-login\" class=\"btn\">Se connecter</button></a>
                        <select class=\"form-control\" id=\"selectType\" onclick=\"initMap();\">
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
                </div>
            </div>
        </div>
    ";
        
        $__internal_686530631fdc287b97d2582074132c6a91bcd84fb69cd8218c10f631be0eae9a->leave($__internal_686530631fdc287b97d2582074132c6a91bcd84fb69cd8218c10f631be0eae9a_prof);

        
        $__internal_059b27d47edfb070541fec6c70acfba28a76852819009ede6831d39a88393983->leave($__internal_059b27d47edfb070541fec6c70acfba28a76852819009ede6831d39a88393983_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_52be26d6e8f8baf19b62d3a9da280d9bce1424a36953cfebf00765d37c89ad71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52be26d6e8f8baf19b62d3a9da280d9bce1424a36953cfebf00765d37c89ad71->enter($__internal_52be26d6e8f8baf19b62d3a9da280d9bce1424a36953cfebf00765d37c89ad71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a8f706622865e7cabe0fea8416a7c99aecd5ca7498818589481582dcdf02ca01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f706622865e7cabe0fea8416a7c99aecd5ca7498818589481582dcdf02ca01->enter($__internal_a8f706622865e7cabe0fea8416a7c99aecd5ca7498818589481582dcdf02ca01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "        <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBtz5G85w1sjtP8Y0sPnY45ZAQq5d2Y_LE&callback=initMap\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/mapAnonymous.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_a8f706622865e7cabe0fea8416a7c99aecd5ca7498818589481582dcdf02ca01->leave($__internal_a8f706622865e7cabe0fea8416a7c99aecd5ca7498818589481582dcdf02ca01_prof);

        
        $__internal_52be26d6e8f8baf19b62d3a9da280d9bce1424a36953cfebf00765d37c89ad71->leave($__internal_52be26d6e8f8baf19b62d3a9da280d9bce1424a36953cfebf00765d37c89ad71_prof);

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
        return array (  155 => 51,  152 => 50,  143 => 49,  101 => 17,  90 => 8,  81 => 7,  61 => 5,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Carte{% endblock %}

{% block stylesheets %}<link rel=\"stylesheet\" href=\"{{asset('build/css/map.css')}}\">{% endblock %}

    {% block body %}

        <div class=\"container-fluid\" id=\"carte\">
            <div class=\"white-filter\">
                <div class=\"row\">
                    <div class=\"col-md-8 mapwraper\">
                        <div id=\"map\"></div>
                    </div>

                    <div class=\"col-md-4 buttons\">
                        <a id=\"map-login\" href=\"{{ path('login') }}\"><button id=\"obs-login\" class=\"btn\">Se connecter</button></a>
                        <select class=\"form-control\" id=\"selectType\" onclick=\"initMap();\">
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
                </div>
            </div>
        </div>
    {% endblock %}
    {% block javascripts %}
        <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBtz5G85w1sjtP8Y0sPnY45ZAQq5d2Y_LE&callback=initMap\"></script>
        <script src=\"{{asset('build/js/mapAnonymous.js')}}\"></script>
    {% endblock %}
", "Map/mapAnonymous.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Map\\mapAnonymous.html.twig");
    }
}
