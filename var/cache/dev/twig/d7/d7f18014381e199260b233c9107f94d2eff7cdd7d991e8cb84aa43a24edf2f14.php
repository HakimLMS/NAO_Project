<?php

/* Administration/modifyUser.html.twig */
class __TwigTemplate_8a33966796aac74b38105bccb9d1fad348643fac5e5ca66f7d23fe5a94f3396d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "Administration/modifyUser.html.twig", 2);
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
        $__internal_e730af5b96ac8a9005b170f396970cadaa8e642d5338da65b0f59365c7489d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e730af5b96ac8a9005b170f396970cadaa8e642d5338da65b0f59365c7489d00->enter($__internal_e730af5b96ac8a9005b170f396970cadaa8e642d5338da65b0f59365c7489d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/modifyUser.html.twig"));

        $__internal_d21adea2782d71284c7503e9abf102b0beb12abfc8946b7cf933c88a786f72fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d21adea2782d71284c7503e9abf102b0beb12abfc8946b7cf933c88a786f72fc->enter($__internal_d21adea2782d71284c7503e9abf102b0beb12abfc8946b7cf933c88a786f72fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/modifyUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e730af5b96ac8a9005b170f396970cadaa8e642d5338da65b0f59365c7489d00->leave($__internal_e730af5b96ac8a9005b170f396970cadaa8e642d5338da65b0f59365c7489d00_prof);

        
        $__internal_d21adea2782d71284c7503e9abf102b0beb12abfc8946b7cf933c88a786f72fc->leave($__internal_d21adea2782d71284c7503e9abf102b0beb12abfc8946b7cf933c88a786f72fc_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f09bf03944d4bcd6660688b31229d20b8fd03f0470578a52777cf479ff351a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f09bf03944d4bcd6660688b31229d20b8fd03f0470578a52777cf479ff351a86->enter($__internal_f09bf03944d4bcd6660688b31229d20b8fd03f0470578a52777cf479ff351a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ea7ef7a05da8e76ec19c475255a79b8df3708167506711a50ab49aba78fc4bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea7ef7a05da8e76ec19c475255a79b8df3708167506711a50ab49aba78fc4bf->enter($__internal_2ea7ef7a05da8e76ec19c475255a79b8df3708167506711a50ab49aba78fc4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_2ea7ef7a05da8e76ec19c475255a79b8df3708167506711a50ab49aba78fc4bf->leave($__internal_2ea7ef7a05da8e76ec19c475255a79b8df3708167506711a50ab49aba78fc4bf_prof);

        
        $__internal_f09bf03944d4bcd6660688b31229d20b8fd03f0470578a52777cf479ff351a86->leave($__internal_f09bf03944d4bcd6660688b31229d20b8fd03f0470578a52777cf479ff351a86_prof);

    }

    public function getTemplateName()
    {
        return "Administration/modifyUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}
{{ form_start(form) }}
{{ form_end(form) }}
{% endblock %}
", "Administration/modifyUser.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\Administration\\modifyUser.html.twig");
    }
}
