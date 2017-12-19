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
        $__internal_7bddb02165f54e0d50e661b4a8dd7ab0a04aa10ba109a78951082d3628ba53e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bddb02165f54e0d50e661b4a8dd7ab0a04aa10ba109a78951082d3628ba53e4->enter($__internal_7bddb02165f54e0d50e661b4a8dd7ab0a04aa10ba109a78951082d3628ba53e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_2dcd4e002081f91dd65ea637e756f4c8f25c2391ef997fbbdd3f69ccbde27ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dcd4e002081f91dd65ea637e756f4c8f25c2391ef997fbbdd3f69ccbde27ed6->enter($__internal_2dcd4e002081f91dd65ea637e756f4c8f25c2391ef997fbbdd3f69ccbde27ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_7bddb02165f54e0d50e661b4a8dd7ab0a04aa10ba109a78951082d3628ba53e4->leave($__internal_7bddb02165f54e0d50e661b4a8dd7ab0a04aa10ba109a78951082d3628ba53e4_prof);

        
        $__internal_2dcd4e002081f91dd65ea637e756f4c8f25c2391ef997fbbdd3f69ccbde27ed6->leave($__internal_2dcd4e002081f91dd65ea637e756f4c8f25c2391ef997fbbdd3f69ccbde27ed6_prof);

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
", "@Twig/Exception/exception.atom.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
