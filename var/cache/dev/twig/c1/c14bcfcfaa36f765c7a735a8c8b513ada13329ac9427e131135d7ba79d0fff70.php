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
        $__internal_529c09251a42bf5b690ff6f8c59ff8059162d6e6a353998afda043c737bc2d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_529c09251a42bf5b690ff6f8c59ff8059162d6e6a353998afda043c737bc2d0a->enter($__internal_529c09251a42bf5b690ff6f8c59ff8059162d6e6a353998afda043c737bc2d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_54422c7cd1767ef6da15e7ef31440cc19185172635303f7f200c475313945001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54422c7cd1767ef6da15e7ef31440cc19185172635303f7f200c475313945001->enter($__internal_54422c7cd1767ef6da15e7ef31440cc19185172635303f7f200c475313945001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_529c09251a42bf5b690ff6f8c59ff8059162d6e6a353998afda043c737bc2d0a->leave($__internal_529c09251a42bf5b690ff6f8c59ff8059162d6e6a353998afda043c737bc2d0a_prof);

        
        $__internal_54422c7cd1767ef6da15e7ef31440cc19185172635303f7f200c475313945001->leave($__internal_54422c7cd1767ef6da15e7ef31440cc19185172635303f7f200c475313945001_prof);

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
