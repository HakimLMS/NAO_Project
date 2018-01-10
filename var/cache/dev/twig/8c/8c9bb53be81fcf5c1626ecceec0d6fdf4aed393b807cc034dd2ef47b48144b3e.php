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
        $__internal_d06af02dda4456986c0afde607ba17ffe0877c95a30b6d0b0dadedaed11c445b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d06af02dda4456986c0afde607ba17ffe0877c95a30b6d0b0dadedaed11c445b->enter($__internal_d06af02dda4456986c0afde607ba17ffe0877c95a30b6d0b0dadedaed11c445b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $__internal_ba64f3d5ec52ef19546ddec20414d13c326ffe92d49b475c42b0b1bee89f76fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba64f3d5ec52ef19546ddec20414d13c326ffe92d49b475c42b0b1bee89f76fd->enter($__internal_ba64f3d5ec52ef19546ddec20414d13c326ffe92d49b475c42b0b1bee89f76fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d06af02dda4456986c0afde607ba17ffe0877c95a30b6d0b0dadedaed11c445b->leave($__internal_d06af02dda4456986c0afde607ba17ffe0877c95a30b6d0b0dadedaed11c445b_prof);

        
        $__internal_ba64f3d5ec52ef19546ddec20414d13c326ffe92d49b475c42b0b1bee89f76fd->leave($__internal_ba64f3d5ec52ef19546ddec20414d13c326ffe92d49b475c42b0b1bee89f76fd_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f26181696373b6fb83346009df2fb0b704ce3f2d3cbf6f8a44721fc2b9adc376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f26181696373b6fb83346009df2fb0b704ce3f2d3cbf6f8a44721fc2b9adc376->enter($__internal_f26181696373b6fb83346009df2fb0b704ce3f2d3cbf6f8a44721fc2b9adc376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a220d51623ef7ca2572b9614cdfd9ce61d7743988bf7f412b725bdd3882e699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a220d51623ef7ca2572b9614cdfd9ce61d7743988bf7f412b725bdd3882e699->enter($__internal_6a220d51623ef7ca2572b9614cdfd9ce61d7743988bf7f412b725bdd3882e699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6a220d51623ef7ca2572b9614cdfd9ce61d7743988bf7f412b725bdd3882e699->leave($__internal_6a220d51623ef7ca2572b9614cdfd9ce61d7743988bf7f412b725bdd3882e699_prof);

        
        $__internal_f26181696373b6fb83346009df2fb0b704ce3f2d3cbf6f8a44721fc2b9adc376->leave($__internal_f26181696373b6fb83346009df2fb0b704ce3f2d3cbf6f8a44721fc2b9adc376_prof);

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
