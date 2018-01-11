<?php

/* Administration/subvalidationerror.html.twig */
class __TwigTemplate_7f96954917e9acfc97e5ab6e3c5599145bb9ef509b3df58f27ba10caa653ba3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("subscription.html.twig", "Administration/subvalidationerror.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "subscription.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc2930aee9f11949e7486bc80c4a12dcf071e6e4933ba462c8623e1da6a7b5cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc2930aee9f11949e7486bc80c4a12dcf071e6e4933ba462c8623e1da6a7b5cd->enter($__internal_fc2930aee9f11949e7486bc80c4a12dcf071e6e4933ba462c8623e1da6a7b5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subvalidationerror.html.twig"));

        $__internal_5bdcf60cb721dba38029736231dab8384fdf8652c31d590d59c4b787e627a807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bdcf60cb721dba38029736231dab8384fdf8652c31d590d59c4b787e627a807->enter($__internal_5bdcf60cb721dba38029736231dab8384fdf8652c31d590d59c4b787e627a807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subvalidationerror.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc2930aee9f11949e7486bc80c4a12dcf071e6e4933ba462c8623e1da6a7b5cd->leave($__internal_fc2930aee9f11949e7486bc80c4a12dcf071e6e4933ba462c8623e1da6a7b5cd_prof);

        
        $__internal_5bdcf60cb721dba38029736231dab8384fdf8652c31d590d59c4b787e627a807->leave($__internal_5bdcf60cb721dba38029736231dab8384fdf8652c31d590d59c4b787e627a807_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5712322207822770b51152aec2a83f9a306483df5772514fb1ef7057c1ea4fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5712322207822770b51152aec2a83f9a306483df5772514fb1ef7057c1ea4fb->enter($__internal_f5712322207822770b51152aec2a83f9a306483df5772514fb1ef7057c1ea4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_012e36d88eb990e6933cce52cd833603fa7ea8ffcbe587ee9631446873d73cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_012e36d88eb990e6933cce52cd833603fa7ea8ffcbe587ee9631446873d73cb9->enter($__internal_012e36d88eb990e6933cce52cd833603fa7ea8ffcbe587ee9631446873d73cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 4, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 5
            echo "        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_012e36d88eb990e6933cce52cd833603fa7ea8ffcbe587ee9631446873d73cb9->leave($__internal_012e36d88eb990e6933cce52cd833603fa7ea8ffcbe587ee9631446873d73cb9_prof);

        
        $__internal_f5712322207822770b51152aec2a83f9a306483df5772514fb1ef7057c1ea4fb->leave($__internal_f5712322207822770b51152aec2a83f9a306483df5772514fb1ef7057c1ea4fb_prof);

    }

    public function getTemplateName()
    {
        return "Administration/subvalidationerror.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'subscription.html.twig' %}

{% block body %}
    {% for error in errors %}
        <li>{{ error.message }}</li>
    {% endfor %}
{% endblock %}
", "Administration/subvalidationerror.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\Administration\\subvalidationerror.html.twig");
    }
}
