<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_7d872e39280b01d7dc949f0caa13537b5f322e7a8883c69114ee9ee1c8b9e5b2 extends Twig_Template
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
        $__internal_3aa4d42bd5880278309775066cc068acb3475ab2627ada864e568462981f4461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aa4d42bd5880278309775066cc068acb3475ab2627ada864e568462981f4461->enter($__internal_3aa4d42bd5880278309775066cc068acb3475ab2627ada864e568462981f4461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_4153db349988b186c5682f052065b4885fe4ae9e0e6b3972e1121b18a8c14400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4153db349988b186c5682f052065b4885fe4ae9e0e6b3972e1121b18a8c14400->enter($__internal_4153db349988b186c5682f052065b4885fe4ae9e0e6b3972e1121b18a8c14400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_3aa4d42bd5880278309775066cc068acb3475ab2627ada864e568462981f4461->leave($__internal_3aa4d42bd5880278309775066cc068acb3475ab2627ada864e568462981f4461_prof);

        
        $__internal_4153db349988b186c5682f052065b4885fe4ae9e0e6b3972e1121b18a8c14400->leave($__internal_4153db349988b186c5682f052065b4885fe4ae9e0e6b3972e1121b18a8c14400_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
