<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9fa8b78a6e260dacb851ecab510133fde363855209d3e4b25002f9a770f874e4 extends Twig_Template
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
        $__internal_bfff185286e0612ae77dbbecae0d8903f3d2251f4c3c4ca168c1ef9a202c8135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfff185286e0612ae77dbbecae0d8903f3d2251f4c3c4ca168c1ef9a202c8135->enter($__internal_bfff185286e0612ae77dbbecae0d8903f3d2251f4c3c4ca168c1ef9a202c8135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_ff8e07775d77d59360d0a0b51943565c3ccab43bd5a4bfeea599b983efd4c3bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8e07775d77d59360d0a0b51943565c3ccab43bd5a4bfeea599b983efd4c3bf->enter($__internal_ff8e07775d77d59360d0a0b51943565c3ccab43bd5a4bfeea599b983efd4c3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_bfff185286e0612ae77dbbecae0d8903f3d2251f4c3c4ca168c1ef9a202c8135->leave($__internal_bfff185286e0612ae77dbbecae0d8903f3d2251f4c3c4ca168c1ef9a202c8135_prof);

        
        $__internal_ff8e07775d77d59360d0a0b51943565c3ccab43bd5a4bfeea599b983efd4c3bf->leave($__internal_ff8e07775d77d59360d0a0b51943565c3ccab43bd5a4bfeea599b983efd4c3bf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
