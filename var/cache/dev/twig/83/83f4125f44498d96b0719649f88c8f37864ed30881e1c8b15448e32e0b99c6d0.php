<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_c374c45efbeb75ae40b820408e4ffe4e1cbd94b48fd075814324ada0a84d1e09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7fd82c99980282d4ce75d2341c0a84919589b82ada5e9a2bbe4bbfc75d49ebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7fd82c99980282d4ce75d2341c0a84919589b82ada5e9a2bbe4bbfc75d49ebd->enter($__internal_d7fd82c99980282d4ce75d2341c0a84919589b82ada5e9a2bbe4bbfc75d49ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_63b701a6ed22bd1b89e1cd29addb72548506cde7ae48e99e806119721ef231d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b701a6ed22bd1b89e1cd29addb72548506cde7ae48e99e806119721ef231d8->enter($__internal_63b701a6ed22bd1b89e1cd29addb72548506cde7ae48e99e806119721ef231d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d7fd82c99980282d4ce75d2341c0a84919589b82ada5e9a2bbe4bbfc75d49ebd->leave($__internal_d7fd82c99980282d4ce75d2341c0a84919589b82ada5e9a2bbe4bbfc75d49ebd_prof);

        
        $__internal_63b701a6ed22bd1b89e1cd29addb72548506cde7ae48e99e806119721ef231d8->leave($__internal_63b701a6ed22bd1b89e1cd29addb72548506cde7ae48e99e806119721ef231d8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
