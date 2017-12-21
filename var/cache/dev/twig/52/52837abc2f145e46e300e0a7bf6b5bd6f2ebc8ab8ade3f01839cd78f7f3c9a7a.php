<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_c4f5e8aa8324904649d8a9824076283ed7b42a971f495831f1145adfe5303310 extends Twig_Template
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
        $__internal_eceec269471bd0795681c9ed4658d77902e4035575f5a50d279426a674382c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eceec269471bd0795681c9ed4658d77902e4035575f5a50d279426a674382c03->enter($__internal_eceec269471bd0795681c9ed4658d77902e4035575f5a50d279426a674382c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_7bc876eec21023d6bcf5364d34b5f8ac27f036d234d4f9d206bfcbca44cfee46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc876eec21023d6bcf5364d34b5f8ac27f036d234d4f9d206bfcbca44cfee46->enter($__internal_7bc876eec21023d6bcf5364d34b5f8ac27f036d234d4f9d206bfcbca44cfee46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_eceec269471bd0795681c9ed4658d77902e4035575f5a50d279426a674382c03->leave($__internal_eceec269471bd0795681c9ed4658d77902e4035575f5a50d279426a674382c03_prof);

        
        $__internal_7bc876eec21023d6bcf5364d34b5f8ac27f036d234d4f9d206bfcbca44cfee46->leave($__internal_7bc876eec21023d6bcf5364d34b5f8ac27f036d234d4f9d206bfcbca44cfee46_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
