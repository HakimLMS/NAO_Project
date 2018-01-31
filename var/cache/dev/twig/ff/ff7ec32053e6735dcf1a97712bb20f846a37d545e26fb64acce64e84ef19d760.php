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
        $__internal_3502bfe951a4d9cc0dfc77c5db27540bad0158421726b0673f47cfafa1e16284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3502bfe951a4d9cc0dfc77c5db27540bad0158421726b0673f47cfafa1e16284->enter($__internal_3502bfe951a4d9cc0dfc77c5db27540bad0158421726b0673f47cfafa1e16284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_82a07aff0f640412aacd65539cbff5c7b20e8f2feb34a8fc66eef36b1abe00fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a07aff0f640412aacd65539cbff5c7b20e8f2feb34a8fc66eef36b1abe00fd->enter($__internal_82a07aff0f640412aacd65539cbff5c7b20e8f2feb34a8fc66eef36b1abe00fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_3502bfe951a4d9cc0dfc77c5db27540bad0158421726b0673f47cfafa1e16284->leave($__internal_3502bfe951a4d9cc0dfc77c5db27540bad0158421726b0673f47cfafa1e16284_prof);

        
        $__internal_82a07aff0f640412aacd65539cbff5c7b20e8f2feb34a8fc66eef36b1abe00fd->leave($__internal_82a07aff0f640412aacd65539cbff5c7b20e8f2feb34a8fc66eef36b1abe00fd_prof);

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
