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
        $__internal_fa3311d04202e5f0005e4636c95594bbca74df700e00be2f6a9dfc4578f23a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa3311d04202e5f0005e4636c95594bbca74df700e00be2f6a9dfc4578f23a74->enter($__internal_fa3311d04202e5f0005e4636c95594bbca74df700e00be2f6a9dfc4578f23a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_1c9d2c9893f46b86e9cb53ba89f51ae907fe13bd19df6b52f3b6173d7c1b08d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9d2c9893f46b86e9cb53ba89f51ae907fe13bd19df6b52f3b6173d7c1b08d6->enter($__internal_1c9d2c9893f46b86e9cb53ba89f51ae907fe13bd19df6b52f3b6173d7c1b08d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_fa3311d04202e5f0005e4636c95594bbca74df700e00be2f6a9dfc4578f23a74->leave($__internal_fa3311d04202e5f0005e4636c95594bbca74df700e00be2f6a9dfc4578f23a74_prof);

        
        $__internal_1c9d2c9893f46b86e9cb53ba89f51ae907fe13bd19df6b52f3b6173d7c1b08d6->leave($__internal_1c9d2c9893f46b86e9cb53ba89f51ae907fe13bd19df6b52f3b6173d7c1b08d6_prof);

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
