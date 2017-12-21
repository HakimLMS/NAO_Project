<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_520a545ebffce750005400596beef0d3ae5ec73e78ff5669256fc96ad546d6d4 extends Twig_Template
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
        $__internal_82a39e2524849afa634fad7c437175f8e63d2d3cc596e86812e4d8aaed6d29cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a39e2524849afa634fad7c437175f8e63d2d3cc596e86812e4d8aaed6d29cc->enter($__internal_82a39e2524849afa634fad7c437175f8e63d2d3cc596e86812e4d8aaed6d29cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_9f6b081c8c1fe58977f700baf8456f9757a376c1238cc7c5b9062127aea380ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6b081c8c1fe58977f700baf8456f9757a376c1238cc7c5b9062127aea380ad->enter($__internal_9f6b081c8c1fe58977f700baf8456f9757a376c1238cc7c5b9062127aea380ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_82a39e2524849afa634fad7c437175f8e63d2d3cc596e86812e4d8aaed6d29cc->leave($__internal_82a39e2524849afa634fad7c437175f8e63d2d3cc596e86812e4d8aaed6d29cc_prof);

        
        $__internal_9f6b081c8c1fe58977f700baf8456f9757a376c1238cc7c5b9062127aea380ad->leave($__internal_9f6b081c8c1fe58977f700baf8456f9757a376c1238cc7c5b9062127aea380ad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
