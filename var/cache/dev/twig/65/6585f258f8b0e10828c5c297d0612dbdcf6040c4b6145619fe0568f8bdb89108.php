<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_520a545ebffce750005400596beef0d3ae5ec73e78ff5669256fc96ad546d6d4 extends Twig_Template
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
        $__internal_c8a6b8f39a21ec863de38cd9c36eca1ed242092ca6132d815e4950e3d04ba235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8a6b8f39a21ec863de38cd9c36eca1ed242092ca6132d815e4950e3d04ba235->enter($__internal_c8a6b8f39a21ec863de38cd9c36eca1ed242092ca6132d815e4950e3d04ba235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_7ef133791808c82207da6a44f530ff3beb72a02c0bc2727bc531f5b61f95987e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef133791808c82207da6a44f530ff3beb72a02c0bc2727bc531f5b61f95987e->enter($__internal_7ef133791808c82207da6a44f530ff3beb72a02c0bc2727bc531f5b61f95987e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_c8a6b8f39a21ec863de38cd9c36eca1ed242092ca6132d815e4950e3d04ba235->leave($__internal_c8a6b8f39a21ec863de38cd9c36eca1ed242092ca6132d815e4950e3d04ba235_prof);

        
        $__internal_7ef133791808c82207da6a44f530ff3beb72a02c0bc2727bc531f5b61f95987e->leave($__internal_7ef133791808c82207da6a44f530ff3beb72a02c0bc2727bc531f5b61f95987e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
