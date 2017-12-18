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
        $__internal_7735702c3ccfc92622c87a81620135ac5d482faa3c2e37e917e3eeca29cd52d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7735702c3ccfc92622c87a81620135ac5d482faa3c2e37e917e3eeca29cd52d1->enter($__internal_7735702c3ccfc92622c87a81620135ac5d482faa3c2e37e917e3eeca29cd52d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_2e4d0429271e9e81a49c840d3611aea3f2bb2701f835099ba9de01d3d82c3768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4d0429271e9e81a49c840d3611aea3f2bb2701f835099ba9de01d3d82c3768->enter($__internal_2e4d0429271e9e81a49c840d3611aea3f2bb2701f835099ba9de01d3d82c3768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7735702c3ccfc92622c87a81620135ac5d482faa3c2e37e917e3eeca29cd52d1->leave($__internal_7735702c3ccfc92622c87a81620135ac5d482faa3c2e37e917e3eeca29cd52d1_prof);

        
        $__internal_2e4d0429271e9e81a49c840d3611aea3f2bb2701f835099ba9de01d3d82c3768->leave($__internal_2e4d0429271e9e81a49c840d3611aea3f2bb2701f835099ba9de01d3d82c3768_prof);

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
", "@Twig/Exception/error.atom.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
