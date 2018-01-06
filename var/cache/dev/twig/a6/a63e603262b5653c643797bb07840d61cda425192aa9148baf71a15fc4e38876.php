<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_652df5913a0ef875e3e870f126c6ca1aa41bd1306d188391deb4c748e9d6d1dd extends Twig_Template
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
        $__internal_889afe28f317c29633f9d6a9bb0b2ee2e87b6be10056365f9bfb827072fca903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_889afe28f317c29633f9d6a9bb0b2ee2e87b6be10056365f9bfb827072fca903->enter($__internal_889afe28f317c29633f9d6a9bb0b2ee2e87b6be10056365f9bfb827072fca903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_3c7dd32ae968c12ffe150a7ee600afd048965b8951d1599e4d972eb69331fa5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7dd32ae968c12ffe150a7ee600afd048965b8951d1599e4d972eb69331fa5d->enter($__internal_3c7dd32ae968c12ffe150a7ee600afd048965b8951d1599e4d972eb69331fa5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_889afe28f317c29633f9d6a9bb0b2ee2e87b6be10056365f9bfb827072fca903->leave($__internal_889afe28f317c29633f9d6a9bb0b2ee2e87b6be10056365f9bfb827072fca903_prof);

        
        $__internal_3c7dd32ae968c12ffe150a7ee600afd048965b8951d1599e4d972eb69331fa5d->leave($__internal_3c7dd32ae968c12ffe150a7ee600afd048965b8951d1599e4d972eb69331fa5d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
