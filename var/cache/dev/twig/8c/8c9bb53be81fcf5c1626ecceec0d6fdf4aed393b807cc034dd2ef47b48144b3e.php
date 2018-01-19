<?php

/* Administration/subscription.html.twig */
class __TwigTemplate_6e183341ffb202b843e0fd7d7584ec561e2eea4e208810f8cd5f91b69294ede7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "Administration/subscription.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc4d36293d77aee0dcadf0e19318ff5b489906efdf94f5dbc56e6dc7d35d20fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc4d36293d77aee0dcadf0e19318ff5b489906efdf94f5dbc56e6dc7d35d20fa->enter($__internal_cc4d36293d77aee0dcadf0e19318ff5b489906efdf94f5dbc56e6dc7d35d20fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $__internal_5e5e19047b39c794d077c99931779e7cca24bb288461c457ab9ba998b1f9e312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5e19047b39c794d077c99931779e7cca24bb288461c457ab9ba998b1f9e312->enter($__internal_5e5e19047b39c794d077c99931779e7cca24bb288461c457ab9ba998b1f9e312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc4d36293d77aee0dcadf0e19318ff5b489906efdf94f5dbc56e6dc7d35d20fa->leave($__internal_cc4d36293d77aee0dcadf0e19318ff5b489906efdf94f5dbc56e6dc7d35d20fa_prof);

        
        $__internal_5e5e19047b39c794d077c99931779e7cca24bb288461c457ab9ba998b1f9e312->leave($__internal_5e5e19047b39c794d077c99931779e7cca24bb288461c457ab9ba998b1f9e312_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_693dc9498976b689655c35501e065de9f4df7144e09e5aa24522cc5c9983cf6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693dc9498976b689655c35501e065de9f4df7144e09e5aa24522cc5c9983cf6e->enter($__internal_693dc9498976b689655c35501e065de9f4df7144e09e5aa24522cc5c9983cf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf564d619114689900ba7dc382253d70174fb0384bfa58e929098cc9178e4040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf564d619114689900ba7dc382253d70174fb0384bfa58e929098cc9178e4040->enter($__internal_cf564d619114689900ba7dc382253d70174fb0384bfa58e929098cc9178e4040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 5, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 6
            echo "        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_cf564d619114689900ba7dc382253d70174fb0384bfa58e929098cc9178e4040->leave($__internal_cf564d619114689900ba7dc382253d70174fb0384bfa58e929098cc9178e4040_prof);

        
        $__internal_693dc9498976b689655c35501e065de9f4df7144e09e5aa24522cc5c9983cf6e->leave($__internal_693dc9498976b689655c35501e065de9f4df7144e09e5aa24522cc5c9983cf6e_prof);

    }

    public function getTemplateName()
    {
        return "Administration/subscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 9,  63 => 8,  54 => 6,  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}
    {% for error in errors %}
        <li>{{ error.message }}</li>
    {% endfor %}
{{ form_start(form) }}
{{ form_end(form) }}
{% endblock %}", "Administration/subscription.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Administration\\subscription.html.twig");
    }
}
