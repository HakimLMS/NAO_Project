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
        $__internal_add8b9bde67902f737579d755a8abb3fd3b2402f9394571d9b1114fa782ab548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add8b9bde67902f737579d755a8abb3fd3b2402f9394571d9b1114fa782ab548->enter($__internal_add8b9bde67902f737579d755a8abb3fd3b2402f9394571d9b1114fa782ab548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subvalidationerror.html.twig"));

        $__internal_575a9845c42fa5d4a91d8beda21b3ccde15fb4717a9de0f6307d676dc1a47f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575a9845c42fa5d4a91d8beda21b3ccde15fb4717a9de0f6307d676dc1a47f46->enter($__internal_575a9845c42fa5d4a91d8beda21b3ccde15fb4717a9de0f6307d676dc1a47f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subvalidationerror.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_add8b9bde67902f737579d755a8abb3fd3b2402f9394571d9b1114fa782ab548->leave($__internal_add8b9bde67902f737579d755a8abb3fd3b2402f9394571d9b1114fa782ab548_prof);

        
        $__internal_575a9845c42fa5d4a91d8beda21b3ccde15fb4717a9de0f6307d676dc1a47f46->leave($__internal_575a9845c42fa5d4a91d8beda21b3ccde15fb4717a9de0f6307d676dc1a47f46_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_361748b3bb16b94306d23d031a9a6286002bfd8f7f02d6193a196f494a6b7cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_361748b3bb16b94306d23d031a9a6286002bfd8f7f02d6193a196f494a6b7cea->enter($__internal_361748b3bb16b94306d23d031a9a6286002bfd8f7f02d6193a196f494a6b7cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0c04fdda0329f930191b868a50d257a65d4fa96b63d32378cdee38fb6738a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c04fdda0329f930191b868a50d257a65d4fa96b63d32378cdee38fb6738a5f->enter($__internal_c0c04fdda0329f930191b868a50d257a65d4fa96b63d32378cdee38fb6738a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c0c04fdda0329f930191b868a50d257a65d4fa96b63d32378cdee38fb6738a5f->leave($__internal_c0c04fdda0329f930191b868a50d257a65d4fa96b63d32378cdee38fb6738a5f_prof);

        
        $__internal_361748b3bb16b94306d23d031a9a6286002bfd8f7f02d6193a196f494a6b7cea->leave($__internal_361748b3bb16b94306d23d031a9a6286002bfd8f7f02d6193a196f494a6b7cea_prof);

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
