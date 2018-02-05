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
        $__internal_e1f7e06cf341c4db755243b7292208a859df5b802c9096eba895abe247eddef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f7e06cf341c4db755243b7292208a859df5b802c9096eba895abe247eddef6->enter($__internal_e1f7e06cf341c4db755243b7292208a859df5b802c9096eba895abe247eddef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "association.html.twig"));

        $__internal_6e121333ba313a8e8cb51fad7a23278f859cb5f5d80e586d9f37b58ce75ba8d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e121333ba313a8e8cb51fad7a23278f859cb5f5d80e586d9f37b58ce75ba8d3->enter($__internal_6e121333ba313a8e8cb51fad7a23278f859cb5f5d80e586d9f37b58ce75ba8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "association.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1f7e06cf341c4db755243b7292208a859df5b802c9096eba895abe247eddef6->leave($__internal_e1f7e06cf341c4db755243b7292208a859df5b802c9096eba895abe247eddef6_prof);

        
        $__internal_6e121333ba313a8e8cb51fad7a23278f859cb5f5d80e586d9f37b58ce75ba8d3->leave($__internal_6e121333ba313a8e8cb51fad7a23278f859cb5f5d80e586d9f37b58ce75ba8d3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_23b3846728a186291ff0f74d2fafccee278c1b0a25b656e6bdfb32205fbc9891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23b3846728a186291ff0f74d2fafccee278c1b0a25b656e6bdfb32205fbc9891->enter($__internal_23b3846728a186291ff0f74d2fafccee278c1b0a25b656e6bdfb32205fbc9891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d5e146dc7f3cfaaf369fc1ddbb2fccec61aeaf05bd0d3c108ce03cd0bed3ec31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e146dc7f3cfaaf369fc1ddbb2fccec61aeaf05bd0d3c108ce03cd0bed3ec31->enter($__internal_d5e146dc7f3cfaaf369fc1ddbb2fccec61aeaf05bd0d3c108ce03cd0bed3ec31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "L'association";
        
        $__internal_d5e146dc7f3cfaaf369fc1ddbb2fccec61aeaf05bd0d3c108ce03cd0bed3ec31->leave($__internal_d5e146dc7f3cfaaf369fc1ddbb2fccec61aeaf05bd0d3c108ce03cd0bed3ec31_prof);

        
        $__internal_23b3846728a186291ff0f74d2fafccee278c1b0a25b656e6bdfb32205fbc9891->leave($__internal_23b3846728a186291ff0f74d2fafccee278c1b0a25b656e6bdfb32205fbc9891_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_66af03b7c05601000777ad80b00092c80900a1ad920ef8b37d32839bf68f5bf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66af03b7c05601000777ad80b00092c80900a1ad920ef8b37d32839bf68f5bf3->enter($__internal_66af03b7c05601000777ad80b00092c80900a1ad920ef8b37d32839bf68f5bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f262222c4a0371c1fae9b73cef9db6d437b2c3cdd3ca8315709776744608516c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f262222c4a0371c1fae9b73cef9db6d437b2c3cdd3ca8315709776744608516c->enter($__internal_f262222c4a0371c1fae9b73cef9db6d437b2c3cdd3ca8315709776744608516c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t<a href=\"#\"><button id=\"bouton-don\" type=\"button\" class=\"btn\">Faire un don</button></a>
\t\t</div>
\t</div>

";
        
        $__internal_f262222c4a0371c1fae9b73cef9db6d437b2c3cdd3ca8315709776744608516c->leave($__internal_f262222c4a0371c1fae9b73cef9db6d437b2c3cdd3ca8315709776744608516c_prof);

        
        $__internal_66af03b7c05601000777ad80b00092c80900a1ad920ef8b37d32839bf68f5bf3->leave($__internal_66af03b7c05601000777ad80b00092c80900a1ad920ef8b37d32839bf68f5bf3_prof);

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
\t\t\t<a href=\"#\"><button id=\"bouton-don\" type=\"button\" class=\"btn\">Faire un don</button></a>
\t\t</div>
\t</div>

{% endblock %}", "association.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\association.html.twig");
    }
}
