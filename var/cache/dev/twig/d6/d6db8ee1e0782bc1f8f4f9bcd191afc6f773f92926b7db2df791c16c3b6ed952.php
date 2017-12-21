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
        $__internal_6e01d94fef50f72c0ab8890f0a74ad54f6f8b808d95e8579248768cd63a24447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e01d94fef50f72c0ab8890f0a74ad54f6f8b808d95e8579248768cd63a24447->enter($__internal_6e01d94fef50f72c0ab8890f0a74ad54f6f8b808d95e8579248768cd63a24447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_4ade3ec582c064b7d5fa7df905088b7981155072a5ca42e99072744e432070ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ade3ec582c064b7d5fa7df905088b7981155072a5ca42e99072744e432070ae->enter($__internal_4ade3ec582c064b7d5fa7df905088b7981155072a5ca42e99072744e432070ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_6e01d94fef50f72c0ab8890f0a74ad54f6f8b808d95e8579248768cd63a24447->leave($__internal_6e01d94fef50f72c0ab8890f0a74ad54f6f8b808d95e8579248768cd63a24447_prof);

        
        $__internal_4ade3ec582c064b7d5fa7df905088b7981155072a5ca42e99072744e432070ae->leave($__internal_4ade3ec582c064b7d5fa7df905088b7981155072a5ca42e99072744e432070ae_prof);

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
