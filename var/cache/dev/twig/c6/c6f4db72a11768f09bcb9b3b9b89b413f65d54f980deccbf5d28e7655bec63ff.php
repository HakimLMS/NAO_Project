<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_5cd6516ab27e48ce13e96be2466eb285d1c887f631d60838eb94637b0da1c7c9 extends Twig_Template
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
        $__internal_d2cbd4e7c01218db8b887498b6c15b95d95297afb2f3c1ffe279d21a5c1ecb59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2cbd4e7c01218db8b887498b6c15b95d95297afb2f3c1ffe279d21a5c1ecb59->enter($__internal_d2cbd4e7c01218db8b887498b6c15b95d95297afb2f3c1ffe279d21a5c1ecb59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_45f3ee3346f5ddbdadc74e57f2ede4aeba38b995dfb1084b804c71a45f2391fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f3ee3346f5ddbdadc74e57f2ede4aeba38b995dfb1084b804c71a45f2391fc->enter($__internal_45f3ee3346f5ddbdadc74e57f2ede4aeba38b995dfb1084b804c71a45f2391fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d2cbd4e7c01218db8b887498b6c15b95d95297afb2f3c1ffe279d21a5c1ecb59->leave($__internal_d2cbd4e7c01218db8b887498b6c15b95d95297afb2f3c1ffe279d21a5c1ecb59_prof);

        
        $__internal_45f3ee3346f5ddbdadc74e57f2ede4aeba38b995dfb1084b804c71a45f2391fc->leave($__internal_45f3ee3346f5ddbdadc74e57f2ede4aeba38b995dfb1084b804c71a45f2391fc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
