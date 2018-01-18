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
        $__internal_e4073c84381cef3bae061e73019dc14237b8485d1e7aaa1d3f552be6794e893a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4073c84381cef3bae061e73019dc14237b8485d1e7aaa1d3f552be6794e893a->enter($__internal_e4073c84381cef3bae061e73019dc14237b8485d1e7aaa1d3f552be6794e893a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subvalidationerror.html.twig"));

        $__internal_07aa6b45787616cf4b62d20e5bb04504d99a99c1a976af224072f698ac39f68f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07aa6b45787616cf4b62d20e5bb04504d99a99c1a976af224072f698ac39f68f->enter($__internal_07aa6b45787616cf4b62d20e5bb04504d99a99c1a976af224072f698ac39f68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subvalidationerror.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4073c84381cef3bae061e73019dc14237b8485d1e7aaa1d3f552be6794e893a->leave($__internal_e4073c84381cef3bae061e73019dc14237b8485d1e7aaa1d3f552be6794e893a_prof);

        
        $__internal_07aa6b45787616cf4b62d20e5bb04504d99a99c1a976af224072f698ac39f68f->leave($__internal_07aa6b45787616cf4b62d20e5bb04504d99a99c1a976af224072f698ac39f68f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_20e0e89cdd870070b7c6b42e6cb2e336ce40cb2a68e3017e5004b89eede729c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e0e89cdd870070b7c6b42e6cb2e336ce40cb2a68e3017e5004b89eede729c3->enter($__internal_20e0e89cdd870070b7c6b42e6cb2e336ce40cb2a68e3017e5004b89eede729c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e169ba37e9cb48c59429427165db0421db8dc03617a7db3bf758cdbba65bfd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e169ba37e9cb48c59429427165db0421db8dc03617a7db3bf758cdbba65bfd8->enter($__internal_5e169ba37e9cb48c59429427165db0421db8dc03617a7db3bf758cdbba65bfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5e169ba37e9cb48c59429427165db0421db8dc03617a7db3bf758cdbba65bfd8->leave($__internal_5e169ba37e9cb48c59429427165db0421db8dc03617a7db3bf758cdbba65bfd8_prof);

        
        $__internal_20e0e89cdd870070b7c6b42e6cb2e336ce40cb2a68e3017e5004b89eede729c3->leave($__internal_20e0e89cdd870070b7c6b42e6cb2e336ce40cb2a68e3017e5004b89eede729c3_prof);

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
