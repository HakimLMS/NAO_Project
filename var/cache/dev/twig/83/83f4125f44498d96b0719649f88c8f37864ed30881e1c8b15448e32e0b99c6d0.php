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
        $__internal_bb9ece2df8410e049d5dbe9c3269bf6e2bc5362d0b07f1a69bc18a33623e5157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9ece2df8410e049d5dbe9c3269bf6e2bc5362d0b07f1a69bc18a33623e5157->enter($__internal_bb9ece2df8410e049d5dbe9c3269bf6e2bc5362d0b07f1a69bc18a33623e5157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_74d2256554b30f73fc8f8a6859543335953fadc430fbfae5ce15e7f30d92e46b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d2256554b30f73fc8f8a6859543335953fadc430fbfae5ce15e7f30d92e46b->enter($__internal_74d2256554b30f73fc8f8a6859543335953fadc430fbfae5ce15e7f30d92e46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_bb9ece2df8410e049d5dbe9c3269bf6e2bc5362d0b07f1a69bc18a33623e5157->leave($__internal_bb9ece2df8410e049d5dbe9c3269bf6e2bc5362d0b07f1a69bc18a33623e5157_prof);

        
        $__internal_74d2256554b30f73fc8f8a6859543335953fadc430fbfae5ce15e7f30d92e46b->leave($__internal_74d2256554b30f73fc8f8a6859543335953fadc430fbfae5ce15e7f30d92e46b_prof);

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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
