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
        $__internal_ff96a3e2b410080acb914628decc0f3c8b20488a6ed5ec9905d611e0c38648ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff96a3e2b410080acb914628decc0f3c8b20488a6ed5ec9905d611e0c38648ae->enter($__internal_ff96a3e2b410080acb914628decc0f3c8b20488a6ed5ec9905d611e0c38648ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_e7a2883373e68f55ab0157435d57cfd794673733ac33849de0335a623fef09cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a2883373e68f55ab0157435d57cfd794673733ac33849de0335a623fef09cb->enter($__internal_e7a2883373e68f55ab0157435d57cfd794673733ac33849de0335a623fef09cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_ff96a3e2b410080acb914628decc0f3c8b20488a6ed5ec9905d611e0c38648ae->leave($__internal_ff96a3e2b410080acb914628decc0f3c8b20488a6ed5ec9905d611e0c38648ae_prof);

        
        $__internal_e7a2883373e68f55ab0157435d57cfd794673733ac33849de0335a623fef09cb->leave($__internal_e7a2883373e68f55ab0157435d57cfd794673733ac33849de0335a623fef09cb_prof);

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
