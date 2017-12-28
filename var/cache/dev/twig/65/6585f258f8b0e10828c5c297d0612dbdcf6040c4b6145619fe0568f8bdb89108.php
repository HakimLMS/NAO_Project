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
        $__internal_4d1020306183d6e43fd699fca6c4b14a4d19272678ed10f34571c3309b565dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1020306183d6e43fd699fca6c4b14a4d19272678ed10f34571c3309b565dcb->enter($__internal_4d1020306183d6e43fd699fca6c4b14a4d19272678ed10f34571c3309b565dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_535c204f9107ed05a53f6414c6794c6fd84d121a201c5e00ab9f884f916ead6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535c204f9107ed05a53f6414c6794c6fd84d121a201c5e00ab9f884f916ead6c->enter($__internal_535c204f9107ed05a53f6414c6794c6fd84d121a201c5e00ab9f884f916ead6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_4d1020306183d6e43fd699fca6c4b14a4d19272678ed10f34571c3309b565dcb->leave($__internal_4d1020306183d6e43fd699fca6c4b14a4d19272678ed10f34571c3309b565dcb_prof);

        
        $__internal_535c204f9107ed05a53f6414c6794c6fd84d121a201c5e00ab9f884f916ead6c->leave($__internal_535c204f9107ed05a53f6414c6794c6fd84d121a201c5e00ab9f884f916ead6c_prof);

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
