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
        $__internal_519d385f1a43bd50cdb52772310254f431408d314bba976264024bb45930ddf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_519d385f1a43bd50cdb52772310254f431408d314bba976264024bb45930ddf0->enter($__internal_519d385f1a43bd50cdb52772310254f431408d314bba976264024bb45930ddf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_b5734ceeacd3244afffa71c859e73833be68e8f36a9d3f4f0fa018ab21e26f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5734ceeacd3244afffa71c859e73833be68e8f36a9d3f4f0fa018ab21e26f11->enter($__internal_b5734ceeacd3244afffa71c859e73833be68e8f36a9d3f4f0fa018ab21e26f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_519d385f1a43bd50cdb52772310254f431408d314bba976264024bb45930ddf0->leave($__internal_519d385f1a43bd50cdb52772310254f431408d314bba976264024bb45930ddf0_prof);

        
        $__internal_b5734ceeacd3244afffa71c859e73833be68e8f36a9d3f4f0fa018ab21e26f11->leave($__internal_b5734ceeacd3244afffa71c859e73833be68e8f36a9d3f4f0fa018ab21e26f11_prof);

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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
