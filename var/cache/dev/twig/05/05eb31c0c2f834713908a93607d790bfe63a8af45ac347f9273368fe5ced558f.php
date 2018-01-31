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
        $__internal_4b43047e24ff30656b4304428fe17dfc203b3e814c4be18b09bb5f7ec0e35721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b43047e24ff30656b4304428fe17dfc203b3e814c4be18b09bb5f7ec0e35721->enter($__internal_4b43047e24ff30656b4304428fe17dfc203b3e814c4be18b09bb5f7ec0e35721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subvalidationerror.html.twig"));

        $__internal_4eddc5f5df67baefc41ab6d4bde09ebf377819dc35ee482b38a5a7e65a0cc7ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eddc5f5df67baefc41ab6d4bde09ebf377819dc35ee482b38a5a7e65a0cc7ba->enter($__internal_4eddc5f5df67baefc41ab6d4bde09ebf377819dc35ee482b38a5a7e65a0cc7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subvalidationerror.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b43047e24ff30656b4304428fe17dfc203b3e814c4be18b09bb5f7ec0e35721->leave($__internal_4b43047e24ff30656b4304428fe17dfc203b3e814c4be18b09bb5f7ec0e35721_prof);

        
        $__internal_4eddc5f5df67baefc41ab6d4bde09ebf377819dc35ee482b38a5a7e65a0cc7ba->leave($__internal_4eddc5f5df67baefc41ab6d4bde09ebf377819dc35ee482b38a5a7e65a0cc7ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3f5f65f136b69767c8b0de4d1d240b5e4c25b1b2943130a86582246972baef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f5f65f136b69767c8b0de4d1d240b5e4c25b1b2943130a86582246972baef2->enter($__internal_c3f5f65f136b69767c8b0de4d1d240b5e4c25b1b2943130a86582246972baef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb896937bfa721c24fe15f7894afff69c1924d225e0732e7e61eb5e580e0cc40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb896937bfa721c24fe15f7894afff69c1924d225e0732e7e61eb5e580e0cc40->enter($__internal_fb896937bfa721c24fe15f7894afff69c1924d225e0732e7e61eb5e580e0cc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fb896937bfa721c24fe15f7894afff69c1924d225e0732e7e61eb5e580e0cc40->leave($__internal_fb896937bfa721c24fe15f7894afff69c1924d225e0732e7e61eb5e580e0cc40_prof);

        
        $__internal_c3f5f65f136b69767c8b0de4d1d240b5e4c25b1b2943130a86582246972baef2->leave($__internal_c3f5f65f136b69767c8b0de4d1d240b5e4c25b1b2943130a86582246972baef2_prof);

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
