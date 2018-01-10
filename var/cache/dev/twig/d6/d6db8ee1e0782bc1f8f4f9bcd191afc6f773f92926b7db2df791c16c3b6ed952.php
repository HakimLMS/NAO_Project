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
        $__internal_b1857b89208496c821d32833213583f9026a063cade471a3959226c9539818d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1857b89208496c821d32833213583f9026a063cade471a3959226c9539818d8->enter($__internal_b1857b89208496c821d32833213583f9026a063cade471a3959226c9539818d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_54daf8298c9a68448fcb8b9c18912eb33710ab9edf39f4821981dc8f1504b48f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54daf8298c9a68448fcb8b9c18912eb33710ab9edf39f4821981dc8f1504b48f->enter($__internal_54daf8298c9a68448fcb8b9c18912eb33710ab9edf39f4821981dc8f1504b48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_b1857b89208496c821d32833213583f9026a063cade471a3959226c9539818d8->leave($__internal_b1857b89208496c821d32833213583f9026a063cade471a3959226c9539818d8_prof);

        
        $__internal_54daf8298c9a68448fcb8b9c18912eb33710ab9edf39f4821981dc8f1504b48f->leave($__internal_54daf8298c9a68448fcb8b9c18912eb33710ab9edf39f4821981dc8f1504b48f_prof);

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
