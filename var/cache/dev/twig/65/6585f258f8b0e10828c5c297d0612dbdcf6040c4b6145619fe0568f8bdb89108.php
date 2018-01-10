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
        $__internal_226dd9df9d97a2360ad3edacd3a4b7c8072c9c9f4dce5476881a87d5188adcf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_226dd9df9d97a2360ad3edacd3a4b7c8072c9c9f4dce5476881a87d5188adcf1->enter($__internal_226dd9df9d97a2360ad3edacd3a4b7c8072c9c9f4dce5476881a87d5188adcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_55b712d5bb5a24d5945a90b6c5df6b10a7178e49995c6be8a0dcc5db3ae4bc87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b712d5bb5a24d5945a90b6c5df6b10a7178e49995c6be8a0dcc5db3ae4bc87->enter($__internal_55b712d5bb5a24d5945a90b6c5df6b10a7178e49995c6be8a0dcc5db3ae4bc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_226dd9df9d97a2360ad3edacd3a4b7c8072c9c9f4dce5476881a87d5188adcf1->leave($__internal_226dd9df9d97a2360ad3edacd3a4b7c8072c9c9f4dce5476881a87d5188adcf1_prof);

        
        $__internal_55b712d5bb5a24d5945a90b6c5df6b10a7178e49995c6be8a0dcc5db3ae4bc87->leave($__internal_55b712d5bb5a24d5945a90b6c5df6b10a7178e49995c6be8a0dcc5db3ae4bc87_prof);

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
