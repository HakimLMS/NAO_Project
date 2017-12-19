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
        $__internal_9c3f27058e5926db91014fa46a2cdb9e4418dc5a1839ed40f522a967bbf80921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c3f27058e5926db91014fa46a2cdb9e4418dc5a1839ed40f522a967bbf80921->enter($__internal_9c3f27058e5926db91014fa46a2cdb9e4418dc5a1839ed40f522a967bbf80921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_3d16a9638700ae136d1f8bd3991f6b08883bab4628ebc8165c3951c076d884cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d16a9638700ae136d1f8bd3991f6b08883bab4628ebc8165c3951c076d884cb->enter($__internal_3d16a9638700ae136d1f8bd3991f6b08883bab4628ebc8165c3951c076d884cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_9c3f27058e5926db91014fa46a2cdb9e4418dc5a1839ed40f522a967bbf80921->leave($__internal_9c3f27058e5926db91014fa46a2cdb9e4418dc5a1839ed40f522a967bbf80921_prof);

        
        $__internal_3d16a9638700ae136d1f8bd3991f6b08883bab4628ebc8165c3951c076d884cb->leave($__internal_3d16a9638700ae136d1f8bd3991f6b08883bab4628ebc8165c3951c076d884cb_prof);

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
", "@Twig/Exception/exception.js.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
