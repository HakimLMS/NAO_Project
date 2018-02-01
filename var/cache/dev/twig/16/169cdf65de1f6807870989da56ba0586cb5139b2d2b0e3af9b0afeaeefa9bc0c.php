<?php

/* Map/map.html.twig */
class __TwigTemplate_a661c3f33dbdd1f408749e8618ab7585b72699641102d8fff32ca4afd3e7d050 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "Map/map.html.twig", 2);
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
        $__internal_ceb698af7f4edebf95d6beb3809d91949c1caaf2300efed22bac97f716282368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb698af7f4edebf95d6beb3809d91949c1caaf2300efed22bac97f716282368->enter($__internal_ceb698af7f4edebf95d6beb3809d91949c1caaf2300efed22bac97f716282368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Map/map.html.twig"));

        $__internal_c6bf337382d97f20273999742bc202a9b7ab1a0dfd9813d27db2e19aa5e6bd16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6bf337382d97f20273999742bc202a9b7ab1a0dfd9813d27db2e19aa5e6bd16->enter($__internal_c6bf337382d97f20273999742bc202a9b7ab1a0dfd9813d27db2e19aa5e6bd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Map/map.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceb698af7f4edebf95d6beb3809d91949c1caaf2300efed22bac97f716282368->leave($__internal_ceb698af7f4edebf95d6beb3809d91949c1caaf2300efed22bac97f716282368_prof);

        
        $__internal_c6bf337382d97f20273999742bc202a9b7ab1a0dfd9813d27db2e19aa5e6bd16->leave($__internal_c6bf337382d97f20273999742bc202a9b7ab1a0dfd9813d27db2e19aa5e6bd16_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9460d324d7ab4dcebb363ba3055cb3d6854eaab8f2f475d7fc9262dcbe343438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9460d324d7ab4dcebb363ba3055cb3d6854eaab8f2f475d7fc9262dcbe343438->enter($__internal_9460d324d7ab4dcebb363ba3055cb3d6854eaab8f2f475d7fc9262dcbe343438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc928e120f6b60eb072d12329ff7883d9de5900d62a0b8d04f769ae3f0f03eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc928e120f6b60eb072d12329ff7883d9de5900d62a0b8d04f769ae3f0f03eb2->enter($__internal_fc928e120f6b60eb072d12329ff7883d9de5900d62a0b8d04f769ae3f0f03eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/map.css"), "html", null, true);
        echo "\">
        <div class=\"mapwraper\">
            <div id=\"map\"></div>
        </div>
        <div class=\"modal\" id=\"form\">
            <div class=\"modal-content\">
                <span class=\"close\">&times;</span>
        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form_start');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "_token", array()), 'widget');
        echo "
            <div>
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "name", array()), 'label');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "name", array()), 'errors');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "name", array()), 'widget');
        echo "
            </div>
            <div>
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "lat", array()), 'label');
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "lat", array()), 'errors');
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "lat", array()), 'widget');
        echo "
            </div>
            <div>
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "lng", array()), 'label');
        echo "
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "lng", array()), 'errors');
        echo "
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "lng", array()), 'widget');
        echo "
            </div>
            <a title=\"Comment trouver ses coordonnées GPS\"href=\"https://support.google.com/maps/answer/18539?co=GENIE.Platform%3DDesktop&hl=fr\" target=\"_blank\">Comment connaître sa position</a>
            <div>
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "image", array()), 'label');
        echo "
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "image", array()), 'errors');
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "image", array()), 'widget');
        echo "
            </div>
            <div>
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "type", array()), 'label');
        echo "
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), "type", array()), 'errors');
        echo "
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "type", array()), 'widget');
        echo "
            </div>
            <div>
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), "Enregistrer", array()), 'widget');
        echo "
            </div>
            
            </div>
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
            <input type=\"button\" id=\"obsButton\" value=\"J'ai vu un oiseau\">
        </div>
    ";
        
        $__internal_fc928e120f6b60eb072d12329ff7883d9de5900d62a0b8d04f769ae3f0f03eb2->leave($__internal_fc928e120f6b60eb072d12329ff7883d9de5900d62a0b8d04f769ae3f0f03eb2_prof);

        
        $__internal_9460d324d7ab4dcebb363ba3055cb3d6854eaab8f2f475d7fc9262dcbe343438->leave($__internal_9460d324d7ab4dcebb363ba3055cb3d6854eaab8f2f475d7fc9262dcbe343438_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e1b29527a73acfe3b387b434fa48270a5bb8a5242e756e2a79f2f12341f7ac79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b29527a73acfe3b387b434fa48270a5bb8a5242e756e2a79f2f12341f7ac79->enter($__internal_e1b29527a73acfe3b387b434fa48270a5bb8a5242e756e2a79f2f12341f7ac79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a81d91e7aafb84c9590123c85d749b502f799245b119e1830970aecc39548b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81d91e7aafb84c9590123c85d749b502f799245b119e1830970aecc39548b37->enter($__internal_a81d91e7aafb84c9590123c85d749b502f799245b119e1830970aecc39548b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "        <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBtz5G85w1sjtP8Y0sPnY45ZAQq5d2Y_LE&callback=initMap\"></script>
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/map.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/mapModal.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_a81d91e7aafb84c9590123c85d749b502f799245b119e1830970aecc39548b37->leave($__internal_a81d91e7aafb84c9590123c85d749b502f799245b119e1830970aecc39548b37_prof);

        
        $__internal_e1b29527a73acfe3b387b434fa48270a5bb8a5242e756e2a79f2f12341f7ac79->leave($__internal_e1b29527a73acfe3b387b434fa48270a5bb8a5242e756e2a79f2f12341f7ac79_prof);

    }

    public function getTemplateName()
    {
        return "Map/map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 79,  200 => 78,  197 => 77,  188 => 76,  143 => 41,  137 => 38,  133 => 37,  129 => 36,  123 => 33,  119 => 32,  115 => 31,  108 => 27,  104 => 26,  100 => 25,  94 => 22,  90 => 21,  86 => 20,  80 => 17,  76 => 16,  72 => 15,  67 => 13,  63 => 12,  53 => 5,  50 => 4,  41 => 3,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
    {% block body %}

        <link rel=\"stylesheet\" href=\"{{asset('build/css/map.css')}}\">
        <div class=\"mapwraper\">
            <div id=\"map\"></div>
        </div>
        <div class=\"modal\" id=\"form\">
            <div class=\"modal-content\">
                <span class=\"close\">&times;</span>
        {{ form_start(form) }}
            {{ form_widget(form._token) }}
            <div>
            {{ form_label(form.name) }}
            {{ form_errors(form.name) }}
            {{ form_widget(form.name) }}
            </div>
            <div>
            {{ form_label(form.lat) }}
            {{ form_errors(form.lat) }}
            {{ form_widget(form.lat) }}
            </div>
            <div>
            {{ form_label(form.lng) }}
            {{ form_errors(form.lng) }}
            {{ form_widget(form.lng) }}
            </div>
            <a title=\"Comment trouver ses coordonnées GPS\"href=\"https://support.google.com/maps/answer/18539?co=GENIE.Platform%3DDesktop&hl=fr\" target=\"_blank\">Comment connaître sa position</a>
            <div>
            {{ form_label(form.image) }}
            {{ form_errors(form.image) }}
            {{ form_widget(form.image) }}
            </div>
            <div>
            {{ form_label(form.type) }}
            {{ form_errors(form.type) }}
            {{ form_widget(form.type) }}
            </div>
            <div>
            {{ form_widget(form.Enregistrer) }}
            </div>
            
            </div>
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
            <input type=\"button\" id=\"obsButton\" value=\"J'ai vu un oiseau\">
        </div>
    {% endblock %}
    {% block javascripts %}
        <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBtz5G85w1sjtP8Y0sPnY45ZAQq5d2Y_LE&callback=initMap\"></script>
        <script src=\"{{asset('build/js/map.js')}}\"></script>
        <script src=\"{{asset('build/js/mapModal.js')}}\"></script>
    {% endblock %}
", "Map/map.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Map\\map.html.twig");
    }
}
