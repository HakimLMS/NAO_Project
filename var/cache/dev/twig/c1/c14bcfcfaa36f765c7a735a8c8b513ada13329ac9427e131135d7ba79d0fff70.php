<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_8650b72a1ec7ea62a5949e37ef016045d418089dfa6f6d7d5477fe967774573a extends Twig_Template
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
        $__internal_94ff80eae7d77bf9cd45568e0e5cf8b85426aa4715367921ba86a49689511053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94ff80eae7d77bf9cd45568e0e5cf8b85426aa4715367921ba86a49689511053->enter($__internal_94ff80eae7d77bf9cd45568e0e5cf8b85426aa4715367921ba86a49689511053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_51c6998dabb8139f812ffc7be2a35ea442bdfafa5dd6ae88824584c60bd45933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c6998dabb8139f812ffc7be2a35ea442bdfafa5dd6ae88824584c60bd45933->enter($__internal_51c6998dabb8139f812ffc7be2a35ea442bdfafa5dd6ae88824584c60bd45933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_94ff80eae7d77bf9cd45568e0e5cf8b85426aa4715367921ba86a49689511053->leave($__internal_94ff80eae7d77bf9cd45568e0e5cf8b85426aa4715367921ba86a49689511053_prof);

        
        $__internal_51c6998dabb8139f812ffc7be2a35ea442bdfafa5dd6ae88824584c60bd45933->leave($__internal_51c6998dabb8139f812ffc7be2a35ea442bdfafa5dd6ae88824584c60bd45933_prof);

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
