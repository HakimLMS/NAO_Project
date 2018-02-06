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
        $__internal_72739b3cc3553dd6eb77eca78763b4b9bb6f1af2d663feea62d2e25ab3aba7c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72739b3cc3553dd6eb77eca78763b4b9bb6f1af2d663feea62d2e25ab3aba7c7->enter($__internal_72739b3cc3553dd6eb77eca78763b4b9bb6f1af2d663feea62d2e25ab3aba7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/results.html.twig"));

        $__internal_a98bcbc91f096a18f371b1ad7606f62e2d4f7958700356ec00baa8903b547e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98bcbc91f096a18f371b1ad7606f62e2d4f7958700356ec00baa8903b547e31->enter($__internal_a98bcbc91f096a18f371b1ad7606f62e2d4f7958700356ec00baa8903b547e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72739b3cc3553dd6eb77eca78763b4b9bb6f1af2d663feea62d2e25ab3aba7c7->leave($__internal_72739b3cc3553dd6eb77eca78763b4b9bb6f1af2d663feea62d2e25ab3aba7c7_prof);

        
        $__internal_a98bcbc91f096a18f371b1ad7606f62e2d4f7958700356ec00baa8903b547e31->leave($__internal_a98bcbc91f096a18f371b1ad7606f62e2d4f7958700356ec00baa8903b547e31_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bc0d0384f613cee7a7ac385ddc7781785f7c63c45e728e5fba07aadc0471248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc0d0384f613cee7a7ac385ddc7781785f7c63c45e728e5fba07aadc0471248->enter($__internal_3bc0d0384f613cee7a7ac385ddc7781785f7c63c45e728e5fba07aadc0471248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b5fb9e401a1b005fdb24466ba8e93214d88901eddeb0df8a01247ffdc00d5683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5fb9e401a1b005fdb24466ba8e93214d88901eddeb0df8a01247ffdc00d5683->enter($__internal_b5fb9e401a1b005fdb24466ba8e93214d88901eddeb0df8a01247ffdc00d5683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Résultats recherche";
        
        $__internal_b5fb9e401a1b005fdb24466ba8e93214d88901eddeb0df8a01247ffdc00d5683->leave($__internal_b5fb9e401a1b005fdb24466ba8e93214d88901eddeb0df8a01247ffdc00d5683_prof);

        
        $__internal_3bc0d0384f613cee7a7ac385ddc7781785f7c63c45e728e5fba07aadc0471248->leave($__internal_3bc0d0384f613cee7a7ac385ddc7781785f7c63c45e728e5fba07aadc0471248_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4149decdee11e99ed23e6bb45238be7e4c3c63c22c144b212b9cbb0575b32e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4149decdee11e99ed23e6bb45238be7e4c3c63c22c144b212b9cbb0575b32e8e->enter($__internal_4149decdee11e99ed23e6bb45238be7e4c3c63c22c144b212b9cbb0575b32e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bbbb307b145dbc038d3e22dbba0569ebc24b1da820e24a3bfab6203b1dc2cc87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbbb307b145dbc038d3e22dbba0569ebc24b1da820e24a3bfab6203b1dc2cc87->enter($__internal_bbbb307b145dbc038d3e22dbba0569ebc24b1da820e24a3bfab6203b1dc2cc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bbbb307b145dbc038d3e22dbba0569ebc24b1da820e24a3bfab6203b1dc2cc87->leave($__internal_bbbb307b145dbc038d3e22dbba0569ebc24b1da820e24a3bfab6203b1dc2cc87_prof);

        
        $__internal_4149decdee11e99ed23e6bb45238be7e4c3c63c22c144b212b9cbb0575b32e8e->leave($__internal_4149decdee11e99ed23e6bb45238be7e4c3c63c22c144b212b9cbb0575b32e8e_prof);

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

{% endblock %}", "research/results.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\research\\results.html.twig");
    }
}
