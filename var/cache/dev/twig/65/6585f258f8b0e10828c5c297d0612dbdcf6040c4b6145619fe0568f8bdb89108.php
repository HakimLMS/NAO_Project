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
        $__internal_4b28fdb8228e00fa1b2a34340df483b55bc613859ce694c1ad9d31b8b2e45100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b28fdb8228e00fa1b2a34340df483b55bc613859ce694c1ad9d31b8b2e45100->enter($__internal_4b28fdb8228e00fa1b2a34340df483b55bc613859ce694c1ad9d31b8b2e45100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_48412a60a33baa351cfef1325e0352d839ed9a3226a16d5b21cbf43e02867d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48412a60a33baa351cfef1325e0352d839ed9a3226a16d5b21cbf43e02867d91->enter($__internal_48412a60a33baa351cfef1325e0352d839ed9a3226a16d5b21cbf43e02867d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_4b28fdb8228e00fa1b2a34340df483b55bc613859ce694c1ad9d31b8b2e45100->leave($__internal_4b28fdb8228e00fa1b2a34340df483b55bc613859ce694c1ad9d31b8b2e45100_prof);

        
        $__internal_48412a60a33baa351cfef1325e0352d839ed9a3226a16d5b21cbf43e02867d91->leave($__internal_48412a60a33baa351cfef1325e0352d839ed9a3226a16d5b21cbf43e02867d91_prof);

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
