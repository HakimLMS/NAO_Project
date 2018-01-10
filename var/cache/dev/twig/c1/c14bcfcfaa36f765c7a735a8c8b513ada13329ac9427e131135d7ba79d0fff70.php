<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_8650b72a1ec7ea62a5949e37ef016045d418089dfa6f6d7d5477fe967774573a extends Twig_Template
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
        $__internal_3742142b77fc6474c7bce079a227b5a0d41079d8b500c5f5f6641c939798adab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3742142b77fc6474c7bce079a227b5a0d41079d8b500c5f5f6641c939798adab->enter($__internal_3742142b77fc6474c7bce079a227b5a0d41079d8b500c5f5f6641c939798adab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_ab3a968a70f1266f2e3ff94d7c8eb72ab673ee08ecb6796b64dafe86ab1b5c64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3a968a70f1266f2e3ff94d7c8eb72ab673ee08ecb6796b64dafe86ab1b5c64->enter($__internal_ab3a968a70f1266f2e3ff94d7c8eb72ab673ee08ecb6796b64dafe86ab1b5c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_3742142b77fc6474c7bce079a227b5a0d41079d8b500c5f5f6641c939798adab->leave($__internal_3742142b77fc6474c7bce079a227b5a0d41079d8b500c5f5f6641c939798adab_prof);

        
        $__internal_ab3a968a70f1266f2e3ff94d7c8eb72ab673ee08ecb6796b64dafe86ab1b5c64->leave($__internal_ab3a968a70f1266f2e3ff94d7c8eb72ab673ee08ecb6796b64dafe86ab1b5c64_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
