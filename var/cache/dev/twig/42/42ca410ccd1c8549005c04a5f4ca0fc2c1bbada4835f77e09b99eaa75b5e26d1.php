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
        $__internal_07cd4e3dd9dbf1e5101f44172a2d1efe7ee98f79a510c4be1a23fea0afe3ad7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07cd4e3dd9dbf1e5101f44172a2d1efe7ee98f79a510c4be1a23fea0afe3ad7a->enter($__internal_07cd4e3dd9dbf1e5101f44172a2d1efe7ee98f79a510c4be1a23fea0afe3ad7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_f4a6c807c27032f04367fde3490c150e820bfc1a56da3e5528b32a63172fca12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a6c807c27032f04367fde3490c150e820bfc1a56da3e5528b32a63172fca12->enter($__internal_f4a6c807c27032f04367fde3490c150e820bfc1a56da3e5528b32a63172fca12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_07cd4e3dd9dbf1e5101f44172a2d1efe7ee98f79a510c4be1a23fea0afe3ad7a->leave($__internal_07cd4e3dd9dbf1e5101f44172a2d1efe7ee98f79a510c4be1a23fea0afe3ad7a_prof);

        
        $__internal_f4a6c807c27032f04367fde3490c150e820bfc1a56da3e5528b32a63172fca12->leave($__internal_f4a6c807c27032f04367fde3490c150e820bfc1a56da3e5528b32a63172fca12_prof);

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
", "@Twig/Exception/exception.css.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
