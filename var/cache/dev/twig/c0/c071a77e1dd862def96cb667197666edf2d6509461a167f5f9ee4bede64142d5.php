<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_4b04693d21d1d7c94ccef85af49161a537f117327e5fcbb56ad1585693af0178 extends Twig_Template
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
        $__internal_550e31f0cbfa8f5d8f39bb4767809bff8e4f82a4be050ce611cafddbe0fce37d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_550e31f0cbfa8f5d8f39bb4767809bff8e4f82a4be050ce611cafddbe0fce37d->enter($__internal_550e31f0cbfa8f5d8f39bb4767809bff8e4f82a4be050ce611cafddbe0fce37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_cab90974e7f34495e88f4a1a3617e580ca579ec9f68e46d16c749a58cddafcf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab90974e7f34495e88f4a1a3617e580ca579ec9f68e46d16c749a58cddafcf5->enter($__internal_cab90974e7f34495e88f4a1a3617e580ca579ec9f68e46d16c749a58cddafcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_550e31f0cbfa8f5d8f39bb4767809bff8e4f82a4be050ce611cafddbe0fce37d->leave($__internal_550e31f0cbfa8f5d8f39bb4767809bff8e4f82a4be050ce611cafddbe0fce37d_prof);

        
        $__internal_cab90974e7f34495e88f4a1a3617e580ca579ec9f68e46d16c749a58cddafcf5->leave($__internal_cab90974e7f34495e88f4a1a3617e580ca579ec9f68e46d16c749a58cddafcf5_prof);

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
