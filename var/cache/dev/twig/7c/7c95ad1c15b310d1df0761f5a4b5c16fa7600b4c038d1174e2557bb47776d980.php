<?php

/* Administration/dashboard.html.twig */
class __TwigTemplate_c4223d61da71dd2291748e6e7b42dbc7d3129c02f2ff3f2561a931aa0ccae969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Administration/dashboard.html.twig", 1);
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
        $__internal_6a9e90c002932dfc81794f06262e5a624223616bbace6fb2153958f74acbba46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a9e90c002932dfc81794f06262e5a624223616bbace6fb2153958f74acbba46->enter($__internal_6a9e90c002932dfc81794f06262e5a624223616bbace6fb2153958f74acbba46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/dashboard.html.twig"));

        $__internal_c017bda325957f042f3b516c1b7fb1d9cdcf935b310c2a7cca6fbf5d9b35c2d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c017bda325957f042f3b516c1b7fb1d9cdcf935b310c2a7cca6fbf5d9b35c2d0->enter($__internal_c017bda325957f042f3b516c1b7fb1d9cdcf935b310c2a7cca6fbf5d9b35c2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a9e90c002932dfc81794f06262e5a624223616bbace6fb2153958f74acbba46->leave($__internal_6a9e90c002932dfc81794f06262e5a624223616bbace6fb2153958f74acbba46_prof);

        
        $__internal_c017bda325957f042f3b516c1b7fb1d9cdcf935b310c2a7cca6fbf5d9b35c2d0->leave($__internal_c017bda325957f042f3b516c1b7fb1d9cdcf935b310c2a7cca6fbf5d9b35c2d0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8eb42cabf0ab9ca96ab3472f024fd099898ff9f95aa12aec79bb6287eda6f34e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb42cabf0ab9ca96ab3472f024fd099898ff9f95aa12aec79bb6287eda6f34e->enter($__internal_8eb42cabf0ab9ca96ab3472f024fd099898ff9f95aa12aec79bb6287eda6f34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d3ce1889d2189a55e823835e3d5901b54c022e6133e127cfd8f26f5f81c362f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3ce1889d2189a55e823835e3d5901b54c022e6133e127cfd8f26f5f81c362f->enter($__internal_9d3ce1889d2189a55e823835e3d5901b54c022e6133e127cfd8f26f5f81c362f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <table>
        <h3>Comptes naturalistes à valider</h3> 
    <tr>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Mail</th>
      <th>Carte Professionnelle</th>
      <th>Action à faire</th>
    </tr>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["naturalistesqueued"]) || array_key_exists("naturalistesqueued", $context) ? $context["naturalistesqueued"] : (function () { throw new Twig_Error_Runtime('Variable "naturalistesqueued" does not exist.', 12, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 13
            echo "    <tr>
       <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
            echo "</td>
       <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
            echo "</td>
       <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "mail", array()), "html", null, true);
            echo "</td>
       <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "procard", array()), "html", null, true);
            echo "</td>
       <td> <button>Valider</button> <button>Rétrograder</button></td>
    </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</table>
";
        
        $__internal_9d3ce1889d2189a55e823835e3d5901b54c022e6133e127cfd8f26f5f81c362f->leave($__internal_9d3ce1889d2189a55e823835e3d5901b54c022e6133e127cfd8f26f5f81c362f_prof);

        
        $__internal_8eb42cabf0ab9ca96ab3472f024fd099898ff9f95aa12aec79bb6287eda6f34e->leave($__internal_8eb42cabf0ab9ca96ab3472f024fd099898ff9f95aa12aec79bb6287eda6f34e_prof);

    }

    public function getTemplateName()
    {
        return "Administration/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  64 => 13,  60 => 12,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <table>
        <h3>Comptes naturalistes à valider</h3> 
    <tr>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Mail</th>
      <th>Carte Professionnelle</th>
      <th>Action à faire</th>
    </tr>
        {% for user in naturalistesqueued %}
    <tr>
       <td>{{user.lastname}}</td>
       <td>{{user.firstname}}</td>
       <td>{{user.mail}}</td>
       <td>{{user.procard}}</td>
       <td> <button>Valider</button> <button>Rétrograder</button></td>
    </tr>
        {% endfor %}
</table>
{% endblock %}
", "Administration/dashboard.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Administration\\dashboard.html.twig");
    }
}
