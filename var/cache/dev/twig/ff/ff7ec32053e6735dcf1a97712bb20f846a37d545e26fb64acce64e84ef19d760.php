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
        $__internal_2468d02c6a1380c9321d30006f2c6ee58fe6fcfc0594ffab8998dd2a97159ca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2468d02c6a1380c9321d30006f2c6ee58fe6fcfc0594ffab8998dd2a97159ca7->enter($__internal_2468d02c6a1380c9321d30006f2c6ee58fe6fcfc0594ffab8998dd2a97159ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_77f070ae90d79f51f9298f244cdbb97fdea94c9f84040f1a96310bcd6ccde71b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f070ae90d79f51f9298f244cdbb97fdea94c9f84040f1a96310bcd6ccde71b->enter($__internal_77f070ae90d79f51f9298f244cdbb97fdea94c9f84040f1a96310bcd6ccde71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_2468d02c6a1380c9321d30006f2c6ee58fe6fcfc0594ffab8998dd2a97159ca7->leave($__internal_2468d02c6a1380c9321d30006f2c6ee58fe6fcfc0594ffab8998dd2a97159ca7_prof);

        
        $__internal_77f070ae90d79f51f9298f244cdbb97fdea94c9f84040f1a96310bcd6ccde71b->leave($__internal_77f070ae90d79f51f9298f244cdbb97fdea94c9f84040f1a96310bcd6ccde71b_prof);

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
", "@Twig/Exception/exception.rdf.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
