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
        $__internal_886e1631b859837c5eff9067ca270c4488aaad4802371a55df457bf381135baf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_886e1631b859837c5eff9067ca270c4488aaad4802371a55df457bf381135baf->enter($__internal_886e1631b859837c5eff9067ca270c4488aaad4802371a55df457bf381135baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $__internal_a517fde27c3982f411dda89f0c6ec7d4c5856a09b3a5c1944aba18c2aecf02ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a517fde27c3982f411dda89f0c6ec7d4c5856a09b3a5c1944aba18c2aecf02ce->enter($__internal_a517fde27c3982f411dda89f0c6ec7d4c5856a09b3a5c1944aba18c2aecf02ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_886e1631b859837c5eff9067ca270c4488aaad4802371a55df457bf381135baf->leave($__internal_886e1631b859837c5eff9067ca270c4488aaad4802371a55df457bf381135baf_prof);

        
        $__internal_a517fde27c3982f411dda89f0c6ec7d4c5856a09b3a5c1944aba18c2aecf02ce->leave($__internal_a517fde27c3982f411dda89f0c6ec7d4c5856a09b3a5c1944aba18c2aecf02ce_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c763e8fc8d6b8b443340e8fc494aa7b43295aa1dd00475370d6bb2a34d0ac44c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c763e8fc8d6b8b443340e8fc494aa7b43295aa1dd00475370d6bb2a34d0ac44c->enter($__internal_c763e8fc8d6b8b443340e8fc494aa7b43295aa1dd00475370d6bb2a34d0ac44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86dfa84fe2dc9beee9b1a7c06bc594864e9bd8df6ed023a6c9b0359336c5f243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86dfa84fe2dc9beee9b1a7c06bc594864e9bd8df6ed023a6c9b0359336c5f243->enter($__internal_86dfa84fe2dc9beee9b1a7c06bc594864e9bd8df6ed023a6c9b0359336c5f243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_86dfa84fe2dc9beee9b1a7c06bc594864e9bd8df6ed023a6c9b0359336c5f243->leave($__internal_86dfa84fe2dc9beee9b1a7c06bc594864e9bd8df6ed023a6c9b0359336c5f243_prof);

        
        $__internal_c763e8fc8d6b8b443340e8fc494aa7b43295aa1dd00475370d6bb2a34d0ac44c->leave($__internal_c763e8fc8d6b8b443340e8fc494aa7b43295aa1dd00475370d6bb2a34d0ac44c_prof);

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
