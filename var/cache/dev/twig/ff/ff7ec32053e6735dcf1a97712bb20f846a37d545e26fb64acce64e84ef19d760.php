<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_413f9459d99620bc668db23eda85e5e27cf411c9710dbf441b19122b39fc33b3 extends Twig_Template
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
        $__internal_8966b99538baf3bd766d07fb0958077ac13bf20cf4c663bf9ff1273945960f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8966b99538baf3bd766d07fb0958077ac13bf20cf4c663bf9ff1273945960f60->enter($__internal_8966b99538baf3bd766d07fb0958077ac13bf20cf4c663bf9ff1273945960f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_c2245a2be6278e501b1d9af4cbbdc195f68cede6b9c3e4e02b6942fa1ccea654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2245a2be6278e501b1d9af4cbbdc195f68cede6b9c3e4e02b6942fa1ccea654->enter($__internal_c2245a2be6278e501b1d9af4cbbdc195f68cede6b9c3e4e02b6942fa1ccea654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_8966b99538baf3bd766d07fb0958077ac13bf20cf4c663bf9ff1273945960f60->leave($__internal_8966b99538baf3bd766d07fb0958077ac13bf20cf4c663bf9ff1273945960f60_prof);

        
        $__internal_c2245a2be6278e501b1d9af4cbbdc195f68cede6b9c3e4e02b6942fa1ccea654->leave($__internal_c2245a2be6278e501b1d9af4cbbdc195f68cede6b9c3e4e02b6942fa1ccea654_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
