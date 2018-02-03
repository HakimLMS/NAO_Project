<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_db91d81ab9081c4429041a833ecd86daf6b1e001efe8fe51148218b4ff202974 extends Twig_Template
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
        $__internal_33d36b9649834be52f2b35e400882a2f115a90d4afd29315ede11bf8b3170298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d36b9649834be52f2b35e400882a2f115a90d4afd29315ede11bf8b3170298->enter($__internal_33d36b9649834be52f2b35e400882a2f115a90d4afd29315ede11bf8b3170298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_858702c15fadc6175860fbdce9ab2267bf07d1dcc4c6ba9d98eefd0f2aec22a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858702c15fadc6175860fbdce9ab2267bf07d1dcc4c6ba9d98eefd0f2aec22a8->enter($__internal_858702c15fadc6175860fbdce9ab2267bf07d1dcc4c6ba9d98eefd0f2aec22a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_33d36b9649834be52f2b35e400882a2f115a90d4afd29315ede11bf8b3170298->leave($__internal_33d36b9649834be52f2b35e400882a2f115a90d4afd29315ede11bf8b3170298_prof);

        
        $__internal_858702c15fadc6175860fbdce9ab2267bf07d1dcc4c6ba9d98eefd0f2aec22a8->leave($__internal_858702c15fadc6175860fbdce9ab2267bf07d1dcc4c6ba9d98eefd0f2aec22a8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
