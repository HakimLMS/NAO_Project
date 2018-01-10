<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_652df5913a0ef875e3e870f126c6ca1aa41bd1306d188391deb4c748e9d6d1dd extends Twig_Template
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
        $__internal_864e3fdb953d74ae811086f805cbb21de41428f64180dcc02c41732020eb59f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_864e3fdb953d74ae811086f805cbb21de41428f64180dcc02c41732020eb59f7->enter($__internal_864e3fdb953d74ae811086f805cbb21de41428f64180dcc02c41732020eb59f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_51638d9e9b9d32799ec09b870d80a506829c889e816d986111877e4e7b4a73ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51638d9e9b9d32799ec09b870d80a506829c889e816d986111877e4e7b4a73ba->enter($__internal_51638d9e9b9d32799ec09b870d80a506829c889e816d986111877e4e7b4a73ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_864e3fdb953d74ae811086f805cbb21de41428f64180dcc02c41732020eb59f7->leave($__internal_864e3fdb953d74ae811086f805cbb21de41428f64180dcc02c41732020eb59f7_prof);

        
        $__internal_51638d9e9b9d32799ec09b870d80a506829c889e816d986111877e4e7b4a73ba->leave($__internal_51638d9e9b9d32799ec09b870d80a506829c889e816d986111877e4e7b4a73ba_prof);

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
", "@Twig/Exception/error.atom.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
