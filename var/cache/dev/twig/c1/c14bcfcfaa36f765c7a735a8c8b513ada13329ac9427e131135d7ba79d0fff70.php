<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_8650b72a1ec7ea62a5949e37ef016045d418089dfa6f6d7d5477fe967774573a extends Twig_Template
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
        $__internal_0e396fb0fda03997f205ce9d744cb81f699c7c5a97b4ff1f5d1836fc9b247ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e396fb0fda03997f205ce9d744cb81f699c7c5a97b4ff1f5d1836fc9b247ed8->enter($__internal_0e396fb0fda03997f205ce9d744cb81f699c7c5a97b4ff1f5d1836fc9b247ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_a2d944bea77892f7e13250bdf32cf7d02b8dfa84df8f10a56d752acd60d85b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2d944bea77892f7e13250bdf32cf7d02b8dfa84df8f10a56d752acd60d85b96->enter($__internal_a2d944bea77892f7e13250bdf32cf7d02b8dfa84df8f10a56d752acd60d85b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_0e396fb0fda03997f205ce9d744cb81f699c7c5a97b4ff1f5d1836fc9b247ed8->leave($__internal_0e396fb0fda03997f205ce9d744cb81f699c7c5a97b4ff1f5d1836fc9b247ed8_prof);

        
        $__internal_a2d944bea77892f7e13250bdf32cf7d02b8dfa84df8f10a56d752acd60d85b96->leave($__internal_a2d944bea77892f7e13250bdf32cf7d02b8dfa84df8f10a56d752acd60d85b96_prof);

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
