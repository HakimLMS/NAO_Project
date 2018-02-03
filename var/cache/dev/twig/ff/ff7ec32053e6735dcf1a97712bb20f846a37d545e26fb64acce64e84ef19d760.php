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
        $__internal_d388bc13685b7a7dc9f52413096ac81f91ee0b1b01c2f117430afb02c80aec7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d388bc13685b7a7dc9f52413096ac81f91ee0b1b01c2f117430afb02c80aec7b->enter($__internal_d388bc13685b7a7dc9f52413096ac81f91ee0b1b01c2f117430afb02c80aec7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_f3c38dd117014dd5bb094fd2b8ab06b8ae269bc61a0debefb462b2a8967d1478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c38dd117014dd5bb094fd2b8ab06b8ae269bc61a0debefb462b2a8967d1478->enter($__internal_f3c38dd117014dd5bb094fd2b8ab06b8ae269bc61a0debefb462b2a8967d1478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_d388bc13685b7a7dc9f52413096ac81f91ee0b1b01c2f117430afb02c80aec7b->leave($__internal_d388bc13685b7a7dc9f52413096ac81f91ee0b1b01c2f117430afb02c80aec7b_prof);

        
        $__internal_f3c38dd117014dd5bb094fd2b8ab06b8ae269bc61a0debefb462b2a8967d1478->leave($__internal_f3c38dd117014dd5bb094fd2b8ab06b8ae269bc61a0debefb462b2a8967d1478_prof);

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
