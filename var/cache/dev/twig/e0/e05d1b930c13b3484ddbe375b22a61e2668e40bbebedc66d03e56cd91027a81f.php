<?php

/* research/results.html.twig */
class __TwigTemplate_fe7f5b97af33c187d6de382b83333ff4eda632252adc9f2069e43907ebf5c12a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "research/results.html.twig", 1);
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
        $__internal_72f68d7f6126e66ab9d1df139508a310951d39ee81280e4372131b138f6da6ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72f68d7f6126e66ab9d1df139508a310951d39ee81280e4372131b138f6da6ed->enter($__internal_72f68d7f6126e66ab9d1df139508a310951d39ee81280e4372131b138f6da6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/results.html.twig"));

        $__internal_0c15b82f0872701ab78e70768cd87bf7ccaeababa1a6c51aa712564a040f806b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c15b82f0872701ab78e70768cd87bf7ccaeababa1a6c51aa712564a040f806b->enter($__internal_0c15b82f0872701ab78e70768cd87bf7ccaeababa1a6c51aa712564a040f806b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72f68d7f6126e66ab9d1df139508a310951d39ee81280e4372131b138f6da6ed->leave($__internal_72f68d7f6126e66ab9d1df139508a310951d39ee81280e4372131b138f6da6ed_prof);

        
        $__internal_0c15b82f0872701ab78e70768cd87bf7ccaeababa1a6c51aa712564a040f806b->leave($__internal_0c15b82f0872701ab78e70768cd87bf7ccaeababa1a6c51aa712564a040f806b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c0af9ff492ceb7ff86601f40ece617034863c571d28d479d79a32ef191bb953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c0af9ff492ceb7ff86601f40ece617034863c571d28d479d79a32ef191bb953->enter($__internal_3c0af9ff492ceb7ff86601f40ece617034863c571d28d479d79a32ef191bb953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_53d3fe273086c8d59610ce927eaef9de41485744d0e46a065b70a47fc741ee7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d3fe273086c8d59610ce927eaef9de41485744d0e46a065b70a47fc741ee7d->enter($__internal_53d3fe273086c8d59610ce927eaef9de41485744d0e46a065b70a47fc741ee7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Résultats recherche";
        
        $__internal_53d3fe273086c8d59610ce927eaef9de41485744d0e46a065b70a47fc741ee7d->leave($__internal_53d3fe273086c8d59610ce927eaef9de41485744d0e46a065b70a47fc741ee7d_prof);

        
        $__internal_3c0af9ff492ceb7ff86601f40ece617034863c571d28d479d79a32ef191bb953->leave($__internal_3c0af9ff492ceb7ff86601f40ece617034863c571d28d479d79a32ef191bb953_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_09f93b7639d07e1e4af91f9c8515efd2cd4b68f7d7b026cf8bb087292be4001b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f93b7639d07e1e4af91f9c8515efd2cd4b68f7d7b026cf8bb087292be4001b->enter($__internal_09f93b7639d07e1e4af91f9c8515efd2cd4b68f7d7b026cf8bb087292be4001b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1e69bc7c937aec64daa8dd67e04cf3eb7a3ea11e90bf0cb95c520a9192e383a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e69bc7c937aec64daa8dd67e04cf3eb7a3ea11e90bf0cb95c520a9192e383a->enter($__internal_f1e69bc7c937aec64daa8dd67e04cf3eb7a3ea11e90bf0cb95c520a9192e383a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<div class=\"container-fluid\" id=\"results\">
\t\t<div class=\"white-filter\">
\t\t\t<div class=\"container\" id=\"block-results\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["birds"]) || array_key_exists("birds", $context) ? $context["birds"] : (function () { throw new Twig_Error_Runtime('Variable "birds" does not exist.', 11, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bird"]) {
            // line 12
            echo "\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fiche_oiseau", array("cd_name" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bird"], "cdName", array()))), "html", null, true);
            echo "\"><div class=\"bird-result\">
\t\t\t\t\t\t\t\t\t";
            // line 14
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bird"], "vernName", array())) >= 15)) {
                // line 15
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bird"], "vernName", array()), 0, 15), "html", null, true);
                echo "...
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 17
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bird"], "vernName", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 19
            echo "\t\t\t\t\t\t\t\t</div></a>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "\t\t\t\t\t\t<p>Aucun résultat</p>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bird'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t
\t\t\t\t</div>\t
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_f1e69bc7c937aec64daa8dd67e04cf3eb7a3ea11e90bf0cb95c520a9192e383a->leave($__internal_f1e69bc7c937aec64daa8dd67e04cf3eb7a3ea11e90bf0cb95c520a9192e383a_prof);

        
        $__internal_09f93b7639d07e1e4af91f9c8515efd2cd4b68f7d7b026cf8bb087292be4001b->leave($__internal_09f93b7639d07e1e4af91f9c8515efd2cd4b68f7d7b026cf8bb087292be4001b_prof);

    }

    public function getTemplateName()
    {
        return "research/results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 23,  108 => 22,  101 => 19,  95 => 17,  89 => 15,  87 => 14,  83 => 13,  80 => 12,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Résultats recherche{% endblock %}

{% block body %}

\t<div class=\"container-fluid\" id=\"results\">
\t\t<div class=\"white-filter\">
\t\t\t<div class=\"container\" id=\"block-results\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% for bird in birds %}
\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('fiche_oiseau', {'cd_name': bird.cdName}) }}\"><div class=\"bird-result\">
\t\t\t\t\t\t\t\t\t{% if bird.vernName|length >= 15 %}
\t\t\t\t\t\t\t\t\t\t{{ bird.vernName|slice(0, 15) }}...
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{{ bird.vernName }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div></a>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p>Aucun résultat</p>
\t\t\t\t\t{% endfor %}\t
\t\t\t\t</div>\t
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}", "research/results.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\research\\results.html.twig");
    }
}
