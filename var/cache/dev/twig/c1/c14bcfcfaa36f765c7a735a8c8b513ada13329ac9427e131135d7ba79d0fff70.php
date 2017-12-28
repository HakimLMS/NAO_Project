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
        $__internal_7ab71600cc21ecd010724c05afb45fbcf803f28616a97226913b90f8abdb43a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ab71600cc21ecd010724c05afb45fbcf803f28616a97226913b90f8abdb43a2->enter($__internal_7ab71600cc21ecd010724c05afb45fbcf803f28616a97226913b90f8abdb43a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_9f6e6f958d6a945184362c305e159c83071d4cbbdb5b21056474117fd7adc839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6e6f958d6a945184362c305e159c83071d4cbbdb5b21056474117fd7adc839->enter($__internal_9f6e6f958d6a945184362c305e159c83071d4cbbdb5b21056474117fd7adc839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_7ab71600cc21ecd010724c05afb45fbcf803f28616a97226913b90f8abdb43a2->leave($__internal_7ab71600cc21ecd010724c05afb45fbcf803f28616a97226913b90f8abdb43a2_prof);

        
        $__internal_9f6e6f958d6a945184362c305e159c83071d4cbbdb5b21056474117fd7adc839->leave($__internal_9f6e6f958d6a945184362c305e159c83071d4cbbdb5b21056474117fd7adc839_prof);

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
