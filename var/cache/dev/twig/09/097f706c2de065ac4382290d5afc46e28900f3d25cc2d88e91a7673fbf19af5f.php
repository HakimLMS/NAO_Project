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
        $__internal_2585ace67aad949f5b1a5a8ef72507aba9b05e63bf897fd7a7b74fbe81b818f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2585ace67aad949f5b1a5a8ef72507aba9b05e63bf897fd7a7b74fbe81b818f9->enter($__internal_2585ace67aad949f5b1a5a8ef72507aba9b05e63bf897fd7a7b74fbe81b818f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "association.html.twig"));

        $__internal_c59a1cd5d9f6949c3538dbf6871cea2020748cba1141b4cd5c85c0152d591728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59a1cd5d9f6949c3538dbf6871cea2020748cba1141b4cd5c85c0152d591728->enter($__internal_c59a1cd5d9f6949c3538dbf6871cea2020748cba1141b4cd5c85c0152d591728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "association.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2585ace67aad949f5b1a5a8ef72507aba9b05e63bf897fd7a7b74fbe81b818f9->leave($__internal_2585ace67aad949f5b1a5a8ef72507aba9b05e63bf897fd7a7b74fbe81b818f9_prof);

        
        $__internal_c59a1cd5d9f6949c3538dbf6871cea2020748cba1141b4cd5c85c0152d591728->leave($__internal_c59a1cd5d9f6949c3538dbf6871cea2020748cba1141b4cd5c85c0152d591728_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce48e68bdb72b86e2b81e94627426acf73dc438bd2bb9512bb289fa227cead44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce48e68bdb72b86e2b81e94627426acf73dc438bd2bb9512bb289fa227cead44->enter($__internal_ce48e68bdb72b86e2b81e94627426acf73dc438bd2bb9512bb289fa227cead44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c77c7e50d087f063d27c9a33f682991e9635b771f6b82ca59e8d7bda3f4d12a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77c7e50d087f063d27c9a33f682991e9635b771f6b82ca59e8d7bda3f4d12a0->enter($__internal_c77c7e50d087f063d27c9a33f682991e9635b771f6b82ca59e8d7bda3f4d12a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "L'association";
        
        $__internal_c77c7e50d087f063d27c9a33f682991e9635b771f6b82ca59e8d7bda3f4d12a0->leave($__internal_c77c7e50d087f063d27c9a33f682991e9635b771f6b82ca59e8d7bda3f4d12a0_prof);

        
        $__internal_ce48e68bdb72b86e2b81e94627426acf73dc438bd2bb9512bb289fa227cead44->leave($__internal_ce48e68bdb72b86e2b81e94627426acf73dc438bd2bb9512bb289fa227cead44_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5bbc7f59c6d760aa2831165bd73a2c836a521a33677e345fb0520fb0b165199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5bbc7f59c6d760aa2831165bd73a2c836a521a33677e345fb0520fb0b165199->enter($__internal_b5bbc7f59c6d760aa2831165bd73a2c836a521a33677e345fb0520fb0b165199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c78cb6c585dd3706a40d2792dabf6c5b43b7630e331787f6571152f2fbaca578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78cb6c585dd3706a40d2792dabf6c5b43b7630e331787f6571152f2fbaca578->enter($__internal_c78cb6c585dd3706a40d2792dabf6c5b43b7630e331787f6571152f2fbaca578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<div class=\"container-fluid\" id=\"environnement\">
\t\t<img id=\"environnement-img\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/environnement2.jpg"), "html", null, true);
        echo "\" alt=\"environnement écologie\">
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
\t\t\t<a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("don");
        echo "\"><button id=\"bouton-don\" type=\"button\" class=\"btn\">Faire un don</button></a>
\t\t</div>
\t</div>

";
        
        $__internal_c78cb6c585dd3706a40d2792dabf6c5b43b7630e331787f6571152f2fbaca578->leave($__internal_c78cb6c585dd3706a40d2792dabf6c5b43b7630e331787f6571152f2fbaca578_prof);

        
        $__internal_b5bbc7f59c6d760aa2831165bd73a2c836a521a33677e345fb0520fb0b165199->leave($__internal_b5bbc7f59c6d760aa2831165bd73a2c836a521a33677e345fb0520fb0b165199_prof);

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
        return array (  113 => 46,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}L'association{% endblock %}

{% block body %}

\t<div class=\"container-fluid\" id=\"environnement\">
\t\t<img id=\"environnement-img\" src=\"{{ asset('build/img/environnement2.jpg') }}\" alt=\"environnement écologie\">
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
\t\t\t<a href=\"{{ path('don') }}\"><button id=\"bouton-don\" type=\"button\" class=\"btn\">Faire un don</button></a>
\t\t</div>
\t</div>

{% endblock %}", "association.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\association.html.twig");
    }
}
