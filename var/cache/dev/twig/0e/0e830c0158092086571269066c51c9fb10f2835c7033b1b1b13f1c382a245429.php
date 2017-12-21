<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9fa8b78a6e260dacb851ecab510133fde363855209d3e4b25002f9a770f874e4 extends Twig_Template
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
        $__internal_b7df80acd6f656ad45c569bb63d38ee47de523aaebff3b71cdafaac20cba757e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7df80acd6f656ad45c569bb63d38ee47de523aaebff3b71cdafaac20cba757e->enter($__internal_b7df80acd6f656ad45c569bb63d38ee47de523aaebff3b71cdafaac20cba757e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_172d324d3d0ef340965001ddc4d8d8f0a8919c05432483b3f96f480b34cf5f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172d324d3d0ef340965001ddc4d8d8f0a8919c05432483b3f96f480b34cf5f26->enter($__internal_172d324d3d0ef340965001ddc4d8d8f0a8919c05432483b3f96f480b34cf5f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b7df80acd6f656ad45c569bb63d38ee47de523aaebff3b71cdafaac20cba757e->leave($__internal_b7df80acd6f656ad45c569bb63d38ee47de523aaebff3b71cdafaac20cba757e_prof);

        
        $__internal_172d324d3d0ef340965001ddc4d8d8f0a8919c05432483b3f96f480b34cf5f26->leave($__internal_172d324d3d0ef340965001ddc4d8d8f0a8919c05432483b3f96f480b34cf5f26_prof);

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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
