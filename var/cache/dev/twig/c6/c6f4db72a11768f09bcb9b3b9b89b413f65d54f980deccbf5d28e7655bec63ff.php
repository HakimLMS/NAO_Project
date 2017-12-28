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
        $__internal_ecd902022841678bd616f37ee3792bb5eeabc0d4c170f78b5ad857715e621f6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd902022841678bd616f37ee3792bb5eeabc0d4c170f78b5ad857715e621f6a->enter($__internal_ecd902022841678bd616f37ee3792bb5eeabc0d4c170f78b5ad857715e621f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_91f86506fd35bbc93c0906e4a738c0a59e3e8dbcf4d5ad8a637e834c415be0b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f86506fd35bbc93c0906e4a738c0a59e3e8dbcf4d5ad8a637e834c415be0b6->enter($__internal_91f86506fd35bbc93c0906e4a738c0a59e3e8dbcf4d5ad8a637e834c415be0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ecd902022841678bd616f37ee3792bb5eeabc0d4c170f78b5ad857715e621f6a->leave($__internal_ecd902022841678bd616f37ee3792bb5eeabc0d4c170f78b5ad857715e621f6a_prof);

        
        $__internal_91f86506fd35bbc93c0906e4a738c0a59e3e8dbcf4d5ad8a637e834c415be0b6->leave($__internal_91f86506fd35bbc93c0906e4a738c0a59e3e8dbcf4d5ad8a637e834c415be0b6_prof);

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
