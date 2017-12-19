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
        $__internal_37b3c5b4bbc902f9a2835ecd5d1842a69e4b455e2de64b6887b5dbc95fc174b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b3c5b4bbc902f9a2835ecd5d1842a69e4b455e2de64b6887b5dbc95fc174b1->enter($__internal_37b3c5b4bbc902f9a2835ecd5d1842a69e4b455e2de64b6887b5dbc95fc174b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_c279bbe3427859621dff592186e38cd5573e888ad85bffa4a511c2e4ec545463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c279bbe3427859621dff592186e38cd5573e888ad85bffa4a511c2e4ec545463->enter($__internal_c279bbe3427859621dff592186e38cd5573e888ad85bffa4a511c2e4ec545463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_37b3c5b4bbc902f9a2835ecd5d1842a69e4b455e2de64b6887b5dbc95fc174b1->leave($__internal_37b3c5b4bbc902f9a2835ecd5d1842a69e4b455e2de64b6887b5dbc95fc174b1_prof);

        
        $__internal_c279bbe3427859621dff592186e38cd5573e888ad85bffa4a511c2e4ec545463->leave($__internal_c279bbe3427859621dff592186e38cd5573e888ad85bffa4a511c2e4ec545463_prof);

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
