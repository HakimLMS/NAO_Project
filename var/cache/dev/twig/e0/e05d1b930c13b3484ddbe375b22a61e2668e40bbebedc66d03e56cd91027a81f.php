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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5d209051066275d648a5dcef2880ad4885506e080ea26a32218654b1b1fab0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d209051066275d648a5dcef2880ad4885506e080ea26a32218654b1b1fab0a->enter($__internal_a5d209051066275d648a5dcef2880ad4885506e080ea26a32218654b1b1fab0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/results.html.twig"));

        $__internal_d8aa4e096cbbbae6dccdb259c339f288cc68f4ba2e9f77c8c5d0e151e93b4883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8aa4e096cbbbae6dccdb259c339f288cc68f4ba2e9f77c8c5d0e151e93b4883->enter($__internal_d8aa4e096cbbbae6dccdb259c339f288cc68f4ba2e9f77c8c5d0e151e93b4883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5d209051066275d648a5dcef2880ad4885506e080ea26a32218654b1b1fab0a->leave($__internal_a5d209051066275d648a5dcef2880ad4885506e080ea26a32218654b1b1fab0a_prof);

        
        $__internal_d8aa4e096cbbbae6dccdb259c339f288cc68f4ba2e9f77c8c5d0e151e93b4883->leave($__internal_d8aa4e096cbbbae6dccdb259c339f288cc68f4ba2e9f77c8c5d0e151e93b4883_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b01dca9c9a18bcc12bf90b2e3c62e17705f33bd65732e31fd0c7cbc52f14ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b01dca9c9a18bcc12bf90b2e3c62e17705f33bd65732e31fd0c7cbc52f14ed8->enter($__internal_5b01dca9c9a18bcc12bf90b2e3c62e17705f33bd65732e31fd0c7cbc52f14ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3b8821226868a89ca57915de077225300c8165e60c7fa322089734bcc2ec8a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b8821226868a89ca57915de077225300c8165e60c7fa322089734bcc2ec8a2->enter($__internal_f3b8821226868a89ca57915de077225300c8165e60c7fa322089734bcc2ec8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<ul>
\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["birds"]) || array_key_exists("birds", $context) ? $context["birds"] : (function () { throw new Twig_Error_Runtime('Variable "birds" does not exist.', 6, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bird"]) {
            // line 7
            echo "
\t<li>Espèce : ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bird"], "vernName", array()), "html", null, true);
            echo "</li>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bird'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t</ul>

";
        
        $__internal_f3b8821226868a89ca57915de077225300c8165e60c7fa322089734bcc2ec8a2->leave($__internal_f3b8821226868a89ca57915de077225300c8165e60c7fa322089734bcc2ec8a2_prof);

        
        $__internal_5b01dca9c9a18bcc12bf90b2e3c62e17705f33bd65732e31fd0c7cbc52f14ed8->leave($__internal_5b01dca9c9a18bcc12bf90b2e3c62e17705f33bd65732e31fd0c7cbc52f14ed8_prof);

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
        return array (  69 => 11,  60 => 8,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}

\t<ul>
\t{% for bird in birds %}

\t<li>Espèce : {{ bird.vernName }}</li>

\t{% endfor %}
\t</ul>

{% endblock %}", "research/results.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\research\\results.html.twig");
    }
}
