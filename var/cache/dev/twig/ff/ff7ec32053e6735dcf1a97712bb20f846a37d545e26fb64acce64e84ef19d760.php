<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_413f9459d99620bc668db23eda85e5e27cf411c9710dbf441b19122b39fc33b3 extends Twig_Template
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
        $__internal_addd9b39ea6dfd3b746366983962a41535976f33967441bb43dbded1725332db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_addd9b39ea6dfd3b746366983962a41535976f33967441bb43dbded1725332db->enter($__internal_addd9b39ea6dfd3b746366983962a41535976f33967441bb43dbded1725332db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_3baf090b595983126354b7a458ce7de12630641983a1644a3c2e7f1c2896504b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3baf090b595983126354b7a458ce7de12630641983a1644a3c2e7f1c2896504b->enter($__internal_3baf090b595983126354b7a458ce7de12630641983a1644a3c2e7f1c2896504b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_addd9b39ea6dfd3b746366983962a41535976f33967441bb43dbded1725332db->leave($__internal_addd9b39ea6dfd3b746366983962a41535976f33967441bb43dbded1725332db_prof);

        
        $__internal_3baf090b595983126354b7a458ce7de12630641983a1644a3c2e7f1c2896504b->leave($__internal_3baf090b595983126354b7a458ce7de12630641983a1644a3c2e7f1c2896504b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
