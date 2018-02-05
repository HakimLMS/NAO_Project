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
        $__internal_9dceb8e8b8fdd617de6b9d740d0eef2b08beb40804ecdfb5233b6f22531b825e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dceb8e8b8fdd617de6b9d740d0eef2b08beb40804ecdfb5233b6f22531b825e->enter($__internal_9dceb8e8b8fdd617de6b9d740d0eef2b08beb40804ecdfb5233b6f22531b825e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_3467bf70ca841282ff1cc70bcef183f847ab3b6cc171bbd5132f9c62ee756094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3467bf70ca841282ff1cc70bcef183f847ab3b6cc171bbd5132f9c62ee756094->enter($__internal_3467bf70ca841282ff1cc70bcef183f847ab3b6cc171bbd5132f9c62ee756094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_9dceb8e8b8fdd617de6b9d740d0eef2b08beb40804ecdfb5233b6f22531b825e->leave($__internal_9dceb8e8b8fdd617de6b9d740d0eef2b08beb40804ecdfb5233b6f22531b825e_prof);

        
        $__internal_3467bf70ca841282ff1cc70bcef183f847ab3b6cc171bbd5132f9c62ee756094->leave($__internal_3467bf70ca841282ff1cc70bcef183f847ab3b6cc171bbd5132f9c62ee756094_prof);

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
