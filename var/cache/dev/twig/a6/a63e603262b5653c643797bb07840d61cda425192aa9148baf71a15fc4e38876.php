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
        $__internal_d34f6bbc4d77223cc2e410a8582bc8815e86433ce7586728935f96151c53d5ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d34f6bbc4d77223cc2e410a8582bc8815e86433ce7586728935f96151c53d5ad->enter($__internal_d34f6bbc4d77223cc2e410a8582bc8815e86433ce7586728935f96151c53d5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_1a647f0e2488340be252b02b7a3f6314244abe8e1aa35c4057690a28fff9738a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a647f0e2488340be252b02b7a3f6314244abe8e1aa35c4057690a28fff9738a->enter($__internal_1a647f0e2488340be252b02b7a3f6314244abe8e1aa35c4057690a28fff9738a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d34f6bbc4d77223cc2e410a8582bc8815e86433ce7586728935f96151c53d5ad->leave($__internal_d34f6bbc4d77223cc2e410a8582bc8815e86433ce7586728935f96151c53d5ad_prof);

        
        $__internal_1a647f0e2488340be252b02b7a3f6314244abe8e1aa35c4057690a28fff9738a->leave($__internal_1a647f0e2488340be252b02b7a3f6314244abe8e1aa35c4057690a28fff9738a_prof);

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
