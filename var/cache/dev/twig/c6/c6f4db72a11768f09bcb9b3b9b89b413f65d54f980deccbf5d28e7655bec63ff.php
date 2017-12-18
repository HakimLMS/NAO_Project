<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_5cd6516ab27e48ce13e96be2466eb285d1c887f631d60838eb94637b0da1c7c9 extends Twig_Template
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
        $__internal_6e9772256003166c22213803ee73c245310be55fcabc49cc93477a1ab7109532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9772256003166c22213803ee73c245310be55fcabc49cc93477a1ab7109532->enter($__internal_6e9772256003166c22213803ee73c245310be55fcabc49cc93477a1ab7109532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_d693330d15ec137c313fdc76a09f4b1e72faa353d26889eef55f493b56feed24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d693330d15ec137c313fdc76a09f4b1e72faa353d26889eef55f493b56feed24->enter($__internal_d693330d15ec137c313fdc76a09f4b1e72faa353d26889eef55f493b56feed24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6e9772256003166c22213803ee73c245310be55fcabc49cc93477a1ab7109532->leave($__internal_6e9772256003166c22213803ee73c245310be55fcabc49cc93477a1ab7109532_prof);

        
        $__internal_d693330d15ec137c313fdc76a09f4b1e72faa353d26889eef55f493b56feed24->leave($__internal_d693330d15ec137c313fdc76a09f4b1e72faa353d26889eef55f493b56feed24_prof);

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
", "@Twig/Exception/error.rdf.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
