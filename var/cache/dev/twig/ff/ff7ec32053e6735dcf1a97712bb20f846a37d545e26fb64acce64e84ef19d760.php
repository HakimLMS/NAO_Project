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
        $__internal_7cfca63b0ee8523c7d051362c0ce32ba4995a1aa40aba077256de49ebbd35ff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cfca63b0ee8523c7d051362c0ce32ba4995a1aa40aba077256de49ebbd35ff3->enter($__internal_7cfca63b0ee8523c7d051362c0ce32ba4995a1aa40aba077256de49ebbd35ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_c0879c0823f345cd06ee7977f2429b3e2dd43fa24523f8c785a951d56e0e3e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0879c0823f345cd06ee7977f2429b3e2dd43fa24523f8c785a951d56e0e3e78->enter($__internal_c0879c0823f345cd06ee7977f2429b3e2dd43fa24523f8c785a951d56e0e3e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_7cfca63b0ee8523c7d051362c0ce32ba4995a1aa40aba077256de49ebbd35ff3->leave($__internal_7cfca63b0ee8523c7d051362c0ce32ba4995a1aa40aba077256de49ebbd35ff3_prof);

        
        $__internal_c0879c0823f345cd06ee7977f2429b3e2dd43fa24523f8c785a951d56e0e3e78->leave($__internal_c0879c0823f345cd06ee7977f2429b3e2dd43fa24523f8c785a951d56e0e3e78_prof);

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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
