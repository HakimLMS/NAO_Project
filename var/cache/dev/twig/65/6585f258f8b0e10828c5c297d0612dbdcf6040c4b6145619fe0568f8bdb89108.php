<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_520a545ebffce750005400596beef0d3ae5ec73e78ff5669256fc96ad546d6d4 extends Twig_Template
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
        $__internal_70d4e89ef6d54a1451d7c2f323e1f87455a11a35535efed8c757aeb2f8c1785d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70d4e89ef6d54a1451d7c2f323e1f87455a11a35535efed8c757aeb2f8c1785d->enter($__internal_70d4e89ef6d54a1451d7c2f323e1f87455a11a35535efed8c757aeb2f8c1785d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_02f3f6f75ad6d9a2475ff2b17b14a4a66cf7d62748cf50d3b75a732e5da405a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f3f6f75ad6d9a2475ff2b17b14a4a66cf7d62748cf50d3b75a732e5da405a9->enter($__internal_02f3f6f75ad6d9a2475ff2b17b14a4a66cf7d62748cf50d3b75a732e5da405a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_70d4e89ef6d54a1451d7c2f323e1f87455a11a35535efed8c757aeb2f8c1785d->leave($__internal_70d4e89ef6d54a1451d7c2f323e1f87455a11a35535efed8c757aeb2f8c1785d_prof);

        
        $__internal_02f3f6f75ad6d9a2475ff2b17b14a4a66cf7d62748cf50d3b75a732e5da405a9->leave($__internal_02f3f6f75ad6d9a2475ff2b17b14a4a66cf7d62748cf50d3b75a732e5da405a9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
