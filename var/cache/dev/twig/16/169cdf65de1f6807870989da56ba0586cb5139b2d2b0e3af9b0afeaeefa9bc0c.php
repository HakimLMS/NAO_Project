<?php

/* Map/map.html.twig */
class __TwigTemplate_a661c3f33dbdd1f408749e8618ab7585b72699641102d8fff32ca4afd3e7d050 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_650a52f7def0c1de0fcf313ab9c4950a2bcbc568512c0cdbe6810b6fc97820ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_650a52f7def0c1de0fcf313ab9c4950a2bcbc568512c0cdbe6810b6fc97820ba->enter($__internal_650a52f7def0c1de0fcf313ab9c4950a2bcbc568512c0cdbe6810b6fc97820ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Map/map.html.twig"));

        $__internal_e3a779bc1447e95e96a0349732d488b13d687d0ab4aea4874ea82481caf67b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a779bc1447e95e96a0349732d488b13d687d0ab4aea4874ea82481caf67b06->enter($__internal_e3a779bc1447e95e96a0349732d488b13d687d0ab4aea4874ea82481caf67b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Map/map.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <body>
    ";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "  </body>
</html>
";
        
        $__internal_650a52f7def0c1de0fcf313ab9c4950a2bcbc568512c0cdbe6810b6fc97820ba->leave($__internal_650a52f7def0c1de0fcf313ab9c4950a2bcbc568512c0cdbe6810b6fc97820ba_prof);

        
        $__internal_e3a779bc1447e95e96a0349732d488b13d687d0ab4aea4874ea82481caf67b06->leave($__internal_e3a779bc1447e95e96a0349732d488b13d687d0ab4aea4874ea82481caf67b06_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d38ff228aaf3657c0595bb1b55a684effd51a6ce8104fccaade76a53266b71ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d38ff228aaf3657c0595bb1b55a684effd51a6ce8104fccaade76a53266b71ae->enter($__internal_d38ff228aaf3657c0595bb1b55a684effd51a6ce8104fccaade76a53266b71ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48bcdafd38a67e313bbba17e7a3a69fa64a4fdc0a0c9acbb0bec07d67af488ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48bcdafd38a67e313bbba17e7a3a69fa64a4fdc0a0c9acbb0bec07d67af488ca->enter($__internal_48bcdafd38a67e313bbba17e7a3a69fa64a4fdc0a0c9acbb0bec07d67af488ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/map.css"), "html", null, true);
        echo "\">
        <div class=\"mapwraper\">
            <div id=\"map\"></div>
        </div>
        <div class=\"form-group\">
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_start');
        echo "
            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    ";
        
        $__internal_48bcdafd38a67e313bbba17e7a3a69fa64a4fdc0a0c9acbb0bec07d67af488ca->leave($__internal_48bcdafd38a67e313bbba17e7a3a69fa64a4fdc0a0c9acbb0bec07d67af488ca_prof);

        
        $__internal_d38ff228aaf3657c0595bb1b55a684effd51a6ce8104fccaade76a53266b71ae->leave($__internal_d38ff228aaf3657c0595bb1b55a684effd51a6ce8104fccaade76a53266b71ae_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_49c8611066c707c6a750cd3b3770d29fa81cf34c85fa4f221696dcd2ea8268ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49c8611066c707c6a750cd3b3770d29fa81cf34c85fa4f221696dcd2ea8268ec->enter($__internal_49c8611066c707c6a750cd3b3770d29fa81cf34c85fa4f221696dcd2ea8268ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0338c484005ac6a2768e0673f97ea12810d121e8005136c49551403ce69a2277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0338c484005ac6a2768e0673f97ea12810d121e8005136c49551403ce69a2277->enter($__internal_0338c484005ac6a2768e0673f97ea12810d121e8005136c49551403ce69a2277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "        <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBtz5G85w1sjtP8Y0sPnY45ZAQq5d2Y_LE&callback=initMap\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/map.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_0338c484005ac6a2768e0673f97ea12810d121e8005136c49551403ce69a2277->leave($__internal_0338c484005ac6a2768e0673f97ea12810d121e8005136c49551403ce69a2277_prof);

        
        $__internal_49c8611066c707c6a750cd3b3770d29fa81cf34c85fa4f221696dcd2ea8268ec->leave($__internal_49c8611066c707c6a750cd3b3770d29fa81cf34c85fa4f221696dcd2ea8268ec_prof);

    }

    public function getTemplateName()
    {
        return "Map/map.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  98 => 17,  95 => 16,  86 => 15,  73 => 12,  69 => 11,  61 => 6,  58 => 5,  49 => 4,  37 => 19,  34 => 15,  32 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <body>
    {% block body %}

        <link rel=\"stylesheet\" href=\"{{asset('build/css/map.css')}}\">
        <div class=\"mapwraper\">
            <div id=\"map\"></div>
        </div>
        <div class=\"form-group\">
            {{ form_start(form) }}
            {{ form_end(form) }}
        </div>
    {% endblock %}
    {% block javascripts %}
        <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBtz5G85w1sjtP8Y0sPnY45ZAQq5d2Y_LE&callback=initMap\"></script>
        <script src=\"{{asset('build/js/map.js')}}\"></script>
    {% endblock %}
  </body>
</html>
", "Map/map.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Map\\map.html.twig");
    }
}
