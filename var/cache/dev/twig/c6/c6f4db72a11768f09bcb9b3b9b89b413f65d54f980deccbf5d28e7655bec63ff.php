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
        $__internal_06d4c755c6e774c052457a39f5085604527cd50ce1dd8350b73c25b337ebc654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d4c755c6e774c052457a39f5085604527cd50ce1dd8350b73c25b337ebc654->enter($__internal_06d4c755c6e774c052457a39f5085604527cd50ce1dd8350b73c25b337ebc654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_21190059839706a4c1a64ba932381846501b6e199068d50185a170921e078f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21190059839706a4c1a64ba932381846501b6e199068d50185a170921e078f62->enter($__internal_21190059839706a4c1a64ba932381846501b6e199068d50185a170921e078f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_06d4c755c6e774c052457a39f5085604527cd50ce1dd8350b73c25b337ebc654->leave($__internal_06d4c755c6e774c052457a39f5085604527cd50ce1dd8350b73c25b337ebc654_prof);

        
        $__internal_21190059839706a4c1a64ba932381846501b6e199068d50185a170921e078f62->leave($__internal_21190059839706a4c1a64ba932381846501b6e199068d50185a170921e078f62_prof);

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
