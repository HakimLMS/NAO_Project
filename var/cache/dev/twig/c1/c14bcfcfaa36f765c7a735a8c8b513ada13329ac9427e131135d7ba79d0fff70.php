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
        $__internal_13e922aa3347de0db07786875cc10caf2d0474d501954b4b5561ef3100ba6a9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13e922aa3347de0db07786875cc10caf2d0474d501954b4b5561ef3100ba6a9b->enter($__internal_13e922aa3347de0db07786875cc10caf2d0474d501954b4b5561ef3100ba6a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_1c10cec0485e7b33f5375079e9a503d33a69d124deafc45ac2a942fc1ab769fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c10cec0485e7b33f5375079e9a503d33a69d124deafc45ac2a942fc1ab769fa->enter($__internal_1c10cec0485e7b33f5375079e9a503d33a69d124deafc45ac2a942fc1ab769fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_13e922aa3347de0db07786875cc10caf2d0474d501954b4b5561ef3100ba6a9b->leave($__internal_13e922aa3347de0db07786875cc10caf2d0474d501954b4b5561ef3100ba6a9b_prof);

        
        $__internal_1c10cec0485e7b33f5375079e9a503d33a69d124deafc45ac2a942fc1ab769fa->leave($__internal_1c10cec0485e7b33f5375079e9a503d33a69d124deafc45ac2a942fc1ab769fa_prof);

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
