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
        $__internal_40aa4d32f528528e29794262f81770216d52678323d79d8145910b103da89b61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40aa4d32f528528e29794262f81770216d52678323d79d8145910b103da89b61->enter($__internal_40aa4d32f528528e29794262f81770216d52678323d79d8145910b103da89b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_315c4761f52802fbf6f17f944330a3afc085c82da4a0a00643289a3b4d4fa2b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315c4761f52802fbf6f17f944330a3afc085c82da4a0a00643289a3b4d4fa2b5->enter($__internal_315c4761f52802fbf6f17f944330a3afc085c82da4a0a00643289a3b4d4fa2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_40aa4d32f528528e29794262f81770216d52678323d79d8145910b103da89b61->leave($__internal_40aa4d32f528528e29794262f81770216d52678323d79d8145910b103da89b61_prof);

        
        $__internal_315c4761f52802fbf6f17f944330a3afc085c82da4a0a00643289a3b4d4fa2b5->leave($__internal_315c4761f52802fbf6f17f944330a3afc085c82da4a0a00643289a3b4d4fa2b5_prof);

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
