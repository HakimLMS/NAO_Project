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
        $__internal_df79cf412d9ef82ae9e3fe9424ea816e19c87af824756d42a596a7d95eb6cc39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df79cf412d9ef82ae9e3fe9424ea816e19c87af824756d42a596a7d95eb6cc39->enter($__internal_df79cf412d9ef82ae9e3fe9424ea816e19c87af824756d42a596a7d95eb6cc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_8c46f0858e78df16a283da7c54db25395fe7738d76d353897230592019c446d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c46f0858e78df16a283da7c54db25395fe7738d76d353897230592019c446d4->enter($__internal_8c46f0858e78df16a283da7c54db25395fe7738d76d353897230592019c446d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_df79cf412d9ef82ae9e3fe9424ea816e19c87af824756d42a596a7d95eb6cc39->leave($__internal_df79cf412d9ef82ae9e3fe9424ea816e19c87af824756d42a596a7d95eb6cc39_prof);

        
        $__internal_8c46f0858e78df16a283da7c54db25395fe7738d76d353897230592019c446d4->leave($__internal_8c46f0858e78df16a283da7c54db25395fe7738d76d353897230592019c446d4_prof);

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
