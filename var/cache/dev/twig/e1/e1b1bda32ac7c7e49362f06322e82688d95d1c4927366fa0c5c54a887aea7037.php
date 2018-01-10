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
        $__internal_a02123d54a49190208ebd9690cc8c15837da372bc6ea064891011bd8e1e96de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02123d54a49190208ebd9690cc8c15837da372bc6ea064891011bd8e1e96de8->enter($__internal_a02123d54a49190208ebd9690cc8c15837da372bc6ea064891011bd8e1e96de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_a1f2a818a8d3903b1d6ea3d8c5c9997a74d7a017ae027c7196357d9f19d70993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f2a818a8d3903b1d6ea3d8c5c9997a74d7a017ae027c7196357d9f19d70993->enter($__internal_a1f2a818a8d3903b1d6ea3d8c5c9997a74d7a017ae027c7196357d9f19d70993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_a02123d54a49190208ebd9690cc8c15837da372bc6ea064891011bd8e1e96de8->leave($__internal_a02123d54a49190208ebd9690cc8c15837da372bc6ea064891011bd8e1e96de8_prof);

        
        $__internal_a1f2a818a8d3903b1d6ea3d8c5c9997a74d7a017ae027c7196357d9f19d70993->leave($__internal_a1f2a818a8d3903b1d6ea3d8c5c9997a74d7a017ae027c7196357d9f19d70993_prof);

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
