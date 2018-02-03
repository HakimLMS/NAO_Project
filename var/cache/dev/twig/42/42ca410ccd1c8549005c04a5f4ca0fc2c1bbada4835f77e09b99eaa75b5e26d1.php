<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_dc81cb26d4c2ba9e707485ded88921598052ac84d16164c46724e61bd68d90bc extends Twig_Template
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
        $__internal_98a69008f0b332d6431128643843156b60d8090646a717c752830dea34f35de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98a69008f0b332d6431128643843156b60d8090646a717c752830dea34f35de5->enter($__internal_98a69008f0b332d6431128643843156b60d8090646a717c752830dea34f35de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_e0fd8836114902d9d24f472372669562147536296886a1059ed42960b963ef41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0fd8836114902d9d24f472372669562147536296886a1059ed42960b963ef41->enter($__internal_e0fd8836114902d9d24f472372669562147536296886a1059ed42960b963ef41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_98a69008f0b332d6431128643843156b60d8090646a717c752830dea34f35de5->leave($__internal_98a69008f0b332d6431128643843156b60d8090646a717c752830dea34f35de5_prof);

        
        $__internal_e0fd8836114902d9d24f472372669562147536296886a1059ed42960b963ef41->leave($__internal_e0fd8836114902d9d24f472372669562147536296886a1059ed42960b963ef41_prof);

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
