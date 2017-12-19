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
        $__internal_180dc3307dcc75ed847c7ee7d5baa11befdd4a20195e3a32d91a6fb6575539a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_180dc3307dcc75ed847c7ee7d5baa11befdd4a20195e3a32d91a6fb6575539a6->enter($__internal_180dc3307dcc75ed847c7ee7d5baa11befdd4a20195e3a32d91a6fb6575539a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_9fc550d6b169c3067383b4acc5f5b51c7208b36919f917889518478e3134d8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc550d6b169c3067383b4acc5f5b51c7208b36919f917889518478e3134d8ad->enter($__internal_9fc550d6b169c3067383b4acc5f5b51c7208b36919f917889518478e3134d8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_180dc3307dcc75ed847c7ee7d5baa11befdd4a20195e3a32d91a6fb6575539a6->leave($__internal_180dc3307dcc75ed847c7ee7d5baa11befdd4a20195e3a32d91a6fb6575539a6_prof);

        
        $__internal_9fc550d6b169c3067383b4acc5f5b51c7208b36919f917889518478e3134d8ad->leave($__internal_9fc550d6b169c3067383b4acc5f5b51c7208b36919f917889518478e3134d8ad_prof);

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
