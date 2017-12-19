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
        $__internal_2f121fcaba52e02c41b0a7ed9a6de93f2364ec1a372ebecb72dc44d45cd4a394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f121fcaba52e02c41b0a7ed9a6de93f2364ec1a372ebecb72dc44d45cd4a394->enter($__internal_2f121fcaba52e02c41b0a7ed9a6de93f2364ec1a372ebecb72dc44d45cd4a394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_77adac481e79b63d1948084bd2ae6cbc60f1d8838331b5ac85549b2cce70e782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77adac481e79b63d1948084bd2ae6cbc60f1d8838331b5ac85549b2cce70e782->enter($__internal_77adac481e79b63d1948084bd2ae6cbc60f1d8838331b5ac85549b2cce70e782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_2f121fcaba52e02c41b0a7ed9a6de93f2364ec1a372ebecb72dc44d45cd4a394->leave($__internal_2f121fcaba52e02c41b0a7ed9a6de93f2364ec1a372ebecb72dc44d45cd4a394_prof);

        
        $__internal_77adac481e79b63d1948084bd2ae6cbc60f1d8838331b5ac85549b2cce70e782->leave($__internal_77adac481e79b63d1948084bd2ae6cbc60f1d8838331b5ac85549b2cce70e782_prof);

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
