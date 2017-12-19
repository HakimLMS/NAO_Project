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
        $__internal_af42fbf7ddb17615750d5120cfd6b128a1420f34afea6985c482a6349a681e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af42fbf7ddb17615750d5120cfd6b128a1420f34afea6985c482a6349a681e6e->enter($__internal_af42fbf7ddb17615750d5120cfd6b128a1420f34afea6985c482a6349a681e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_46504eb441e51d8584c488e2f83bb1a787e35af4380282c62bf4681a3e610c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46504eb441e51d8584c488e2f83bb1a787e35af4380282c62bf4681a3e610c99->enter($__internal_46504eb441e51d8584c488e2f83bb1a787e35af4380282c62bf4681a3e610c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_af42fbf7ddb17615750d5120cfd6b128a1420f34afea6985c482a6349a681e6e->leave($__internal_af42fbf7ddb17615750d5120cfd6b128a1420f34afea6985c482a6349a681e6e_prof);

        
        $__internal_46504eb441e51d8584c488e2f83bb1a787e35af4380282c62bf4681a3e610c99->leave($__internal_46504eb441e51d8584c488e2f83bb1a787e35af4380282c62bf4681a3e610c99_prof);

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
