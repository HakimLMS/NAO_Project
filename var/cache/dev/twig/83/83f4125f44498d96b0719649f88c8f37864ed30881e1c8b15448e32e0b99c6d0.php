<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_c374c45efbeb75ae40b820408e4ffe4e1cbd94b48fd075814324ada0a84d1e09 extends Twig_Template
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
        $__internal_0b88c687f1fd47cf3bae9ca04b2d3e8f30764b1bac0b72c1246944e0142bdefd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b88c687f1fd47cf3bae9ca04b2d3e8f30764b1bac0b72c1246944e0142bdefd->enter($__internal_0b88c687f1fd47cf3bae9ca04b2d3e8f30764b1bac0b72c1246944e0142bdefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_e4cd3b06e4ee877ac9da81eb95018ff6a760c4616e550b882b33248fde035abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4cd3b06e4ee877ac9da81eb95018ff6a760c4616e550b882b33248fde035abf->enter($__internal_e4cd3b06e4ee877ac9da81eb95018ff6a760c4616e550b882b33248fde035abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0b88c687f1fd47cf3bae9ca04b2d3e8f30764b1bac0b72c1246944e0142bdefd->leave($__internal_0b88c687f1fd47cf3bae9ca04b2d3e8f30764b1bac0b72c1246944e0142bdefd_prof);

        
        $__internal_e4cd3b06e4ee877ac9da81eb95018ff6a760c4616e550b882b33248fde035abf->leave($__internal_e4cd3b06e4ee877ac9da81eb95018ff6a760c4616e550b882b33248fde035abf_prof);

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
", "@Twig/Exception/error.rdf.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
