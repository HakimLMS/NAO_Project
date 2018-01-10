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
        $__internal_af6cccada3e6f3508c16b1446614a2976109ea45f6d019d245991fcdf7a1171b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af6cccada3e6f3508c16b1446614a2976109ea45f6d019d245991fcdf7a1171b->enter($__internal_af6cccada3e6f3508c16b1446614a2976109ea45f6d019d245991fcdf7a1171b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_794f3913855828cfe158ebea13f2daddd451f473c78964074c3ee4ac9186b7ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_794f3913855828cfe158ebea13f2daddd451f473c78964074c3ee4ac9186b7ad->enter($__internal_794f3913855828cfe158ebea13f2daddd451f473c78964074c3ee4ac9186b7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_af6cccada3e6f3508c16b1446614a2976109ea45f6d019d245991fcdf7a1171b->leave($__internal_af6cccada3e6f3508c16b1446614a2976109ea45f6d019d245991fcdf7a1171b_prof);

        
        $__internal_794f3913855828cfe158ebea13f2daddd451f473c78964074c3ee4ac9186b7ad->leave($__internal_794f3913855828cfe158ebea13f2daddd451f473c78964074c3ee4ac9186b7ad_prof);

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
