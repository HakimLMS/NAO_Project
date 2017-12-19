<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_5cd6516ab27e48ce13e96be2466eb285d1c887f631d60838eb94637b0da1c7c9 extends Twig_Template
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
        $__internal_551f815c9cbfaf28ff0ae4031fc9a0a579ff3e672509c6c80ecfb8d84bc3b061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_551f815c9cbfaf28ff0ae4031fc9a0a579ff3e672509c6c80ecfb8d84bc3b061->enter($__internal_551f815c9cbfaf28ff0ae4031fc9a0a579ff3e672509c6c80ecfb8d84bc3b061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_10e40b794bd338f786549397c40b0823dd404e9bbfd8e7b32e547f98b4316f92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e40b794bd338f786549397c40b0823dd404e9bbfd8e7b32e547f98b4316f92->enter($__internal_10e40b794bd338f786549397c40b0823dd404e9bbfd8e7b32e547f98b4316f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_551f815c9cbfaf28ff0ae4031fc9a0a579ff3e672509c6c80ecfb8d84bc3b061->leave($__internal_551f815c9cbfaf28ff0ae4031fc9a0a579ff3e672509c6c80ecfb8d84bc3b061_prof);

        
        $__internal_10e40b794bd338f786549397c40b0823dd404e9bbfd8e7b32e547f98b4316f92->leave($__internal_10e40b794bd338f786549397c40b0823dd404e9bbfd8e7b32e547f98b4316f92_prof);

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
", "@Twig/Exception/error.rdf.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
