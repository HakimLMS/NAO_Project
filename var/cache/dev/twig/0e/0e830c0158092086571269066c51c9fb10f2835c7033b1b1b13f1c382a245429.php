<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9fa8b78a6e260dacb851ecab510133fde363855209d3e4b25002f9a770f874e4 extends Twig_Template
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
        $__internal_54d13484d5618c45d14584a9b088c48bb58f0eceb433af0abdfffe460323c06a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54d13484d5618c45d14584a9b088c48bb58f0eceb433af0abdfffe460323c06a->enter($__internal_54d13484d5618c45d14584a9b088c48bb58f0eceb433af0abdfffe460323c06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_55f5d633055c30c2418beedd0329cff705898d81c40b630e671c14c165b3cd7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f5d633055c30c2418beedd0329cff705898d81c40b630e671c14c165b3cd7b->enter($__internal_55f5d633055c30c2418beedd0329cff705898d81c40b630e671c14c165b3cd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_54d13484d5618c45d14584a9b088c48bb58f0eceb433af0abdfffe460323c06a->leave($__internal_54d13484d5618c45d14584a9b088c48bb58f0eceb433af0abdfffe460323c06a_prof);

        
        $__internal_55f5d633055c30c2418beedd0329cff705898d81c40b630e671c14c165b3cd7b->leave($__internal_55f5d633055c30c2418beedd0329cff705898d81c40b630e671c14c165b3cd7b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
