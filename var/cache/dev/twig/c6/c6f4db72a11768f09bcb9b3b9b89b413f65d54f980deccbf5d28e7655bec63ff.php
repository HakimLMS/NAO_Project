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
        $__internal_773d01ce5b0bc5175aacadddf37218f06f2c2637ea2383ebb3c60643a743f652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_773d01ce5b0bc5175aacadddf37218f06f2c2637ea2383ebb3c60643a743f652->enter($__internal_773d01ce5b0bc5175aacadddf37218f06f2c2637ea2383ebb3c60643a743f652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_db3e0dd4c393b8a20b3cc7d88639d3f279cc0a6f270affaadf5e6cec26924321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db3e0dd4c393b8a20b3cc7d88639d3f279cc0a6f270affaadf5e6cec26924321->enter($__internal_db3e0dd4c393b8a20b3cc7d88639d3f279cc0a6f270affaadf5e6cec26924321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_773d01ce5b0bc5175aacadddf37218f06f2c2637ea2383ebb3c60643a743f652->leave($__internal_773d01ce5b0bc5175aacadddf37218f06f2c2637ea2383ebb3c60643a743f652_prof);

        
        $__internal_db3e0dd4c393b8a20b3cc7d88639d3f279cc0a6f270affaadf5e6cec26924321->leave($__internal_db3e0dd4c393b8a20b3cc7d88639d3f279cc0a6f270affaadf5e6cec26924321_prof);

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
