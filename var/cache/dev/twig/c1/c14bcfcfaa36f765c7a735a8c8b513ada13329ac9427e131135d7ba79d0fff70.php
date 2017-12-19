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
        $__internal_801b0bcd1e48f263cf44f666352eabd9c22b45ef67991c66b0a1dbc61c764d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_801b0bcd1e48f263cf44f666352eabd9c22b45ef67991c66b0a1dbc61c764d8e->enter($__internal_801b0bcd1e48f263cf44f666352eabd9c22b45ef67991c66b0a1dbc61c764d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_b933712e1e726a0f56ee8dd16e86ae1ed4686a359435463ecde43c3b66507150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b933712e1e726a0f56ee8dd16e86ae1ed4686a359435463ecde43c3b66507150->enter($__internal_b933712e1e726a0f56ee8dd16e86ae1ed4686a359435463ecde43c3b66507150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_801b0bcd1e48f263cf44f666352eabd9c22b45ef67991c66b0a1dbc61c764d8e->leave($__internal_801b0bcd1e48f263cf44f666352eabd9c22b45ef67991c66b0a1dbc61c764d8e_prof);

        
        $__internal_b933712e1e726a0f56ee8dd16e86ae1ed4686a359435463ecde43c3b66507150->leave($__internal_b933712e1e726a0f56ee8dd16e86ae1ed4686a359435463ecde43c3b66507150_prof);

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
