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
        $__internal_af4ec4a27dc64608b96be0fa95f2be213d6e9a99b861b5e3c01b3f41e4324379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af4ec4a27dc64608b96be0fa95f2be213d6e9a99b861b5e3c01b3f41e4324379->enter($__internal_af4ec4a27dc64608b96be0fa95f2be213d6e9a99b861b5e3c01b3f41e4324379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_412c1f7c3d77f286f368d8f09ff969ac5be0c5f560b6f72694c1618a6f7c3fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_412c1f7c3d77f286f368d8f09ff969ac5be0c5f560b6f72694c1618a6f7c3fcc->enter($__internal_412c1f7c3d77f286f368d8f09ff969ac5be0c5f560b6f72694c1618a6f7c3fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_af4ec4a27dc64608b96be0fa95f2be213d6e9a99b861b5e3c01b3f41e4324379->leave($__internal_af4ec4a27dc64608b96be0fa95f2be213d6e9a99b861b5e3c01b3f41e4324379_prof);

        
        $__internal_412c1f7c3d77f286f368d8f09ff969ac5be0c5f560b6f72694c1618a6f7c3fcc->leave($__internal_412c1f7c3d77f286f368d8f09ff969ac5be0c5f560b6f72694c1618a6f7c3fcc_prof);

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
