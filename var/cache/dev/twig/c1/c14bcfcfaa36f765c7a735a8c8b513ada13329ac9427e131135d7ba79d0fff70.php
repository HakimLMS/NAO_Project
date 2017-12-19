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
        $__internal_4b07917411d5fb6c21c03cfed49fd7763a31b545290a4ce126c548bf2fd99013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b07917411d5fb6c21c03cfed49fd7763a31b545290a4ce126c548bf2fd99013->enter($__internal_4b07917411d5fb6c21c03cfed49fd7763a31b545290a4ce126c548bf2fd99013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_42476317c3ca386434a2ecd43578c9e6dbd53e5b2999432962dc2461ea00c731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42476317c3ca386434a2ecd43578c9e6dbd53e5b2999432962dc2461ea00c731->enter($__internal_42476317c3ca386434a2ecd43578c9e6dbd53e5b2999432962dc2461ea00c731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_4b07917411d5fb6c21c03cfed49fd7763a31b545290a4ce126c548bf2fd99013->leave($__internal_4b07917411d5fb6c21c03cfed49fd7763a31b545290a4ce126c548bf2fd99013_prof);

        
        $__internal_42476317c3ca386434a2ecd43578c9e6dbd53e5b2999432962dc2461ea00c731->leave($__internal_42476317c3ca386434a2ecd43578c9e6dbd53e5b2999432962dc2461ea00c731_prof);

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
