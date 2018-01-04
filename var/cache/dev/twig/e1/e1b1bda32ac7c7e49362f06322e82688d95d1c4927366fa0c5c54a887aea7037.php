<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_6d8cbc6233d89ebd115cd0f5a34dc92f4334a7ed55900c14087ae9bf04c8a9c1 extends Twig_Template
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
        $__internal_8d01d98ccbc35eedd9f46d5e568fa20632c59493d710665b7afe8b43eccd24fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d01d98ccbc35eedd9f46d5e568fa20632c59493d710665b7afe8b43eccd24fc->enter($__internal_8d01d98ccbc35eedd9f46d5e568fa20632c59493d710665b7afe8b43eccd24fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_7768433c767ca454967f53a8f40b7e5ee21e4980284e53e4db9a7c79a0281277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7768433c767ca454967f53a8f40b7e5ee21e4980284e53e4db9a7c79a0281277->enter($__internal_7768433c767ca454967f53a8f40b7e5ee21e4980284e53e4db9a7c79a0281277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_8d01d98ccbc35eedd9f46d5e568fa20632c59493d710665b7afe8b43eccd24fc->leave($__internal_8d01d98ccbc35eedd9f46d5e568fa20632c59493d710665b7afe8b43eccd24fc_prof);

        
        $__internal_7768433c767ca454967f53a8f40b7e5ee21e4980284e53e4db9a7c79a0281277->leave($__internal_7768433c767ca454967f53a8f40b7e5ee21e4980284e53e4db9a7c79a0281277_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
