<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_6d8cbc6233d89ebd115cd0f5a34dc92f4334a7ed55900c14087ae9bf04c8a9c1 extends Twig_Template
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
        $__internal_ee4e8f05c825664b0e9735d711957117b34f3961151f3a0a2b14cffd47f566ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee4e8f05c825664b0e9735d711957117b34f3961151f3a0a2b14cffd47f566ef->enter($__internal_ee4e8f05c825664b0e9735d711957117b34f3961151f3a0a2b14cffd47f566ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_494a56f28d1e3c2c1f5ac433364c2ac7ed4bdbb0fcf812cb070a7726af3a7ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494a56f28d1e3c2c1f5ac433364c2ac7ed4bdbb0fcf812cb070a7726af3a7ecd->enter($__internal_494a56f28d1e3c2c1f5ac433364c2ac7ed4bdbb0fcf812cb070a7726af3a7ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_ee4e8f05c825664b0e9735d711957117b34f3961151f3a0a2b14cffd47f566ef->leave($__internal_ee4e8f05c825664b0e9735d711957117b34f3961151f3a0a2b14cffd47f566ef_prof);

        
        $__internal_494a56f28d1e3c2c1f5ac433364c2ac7ed4bdbb0fcf812cb070a7726af3a7ecd->leave($__internal_494a56f28d1e3c2c1f5ac433364c2ac7ed4bdbb0fcf812cb070a7726af3a7ecd_prof);

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
", "@Twig/Exception/exception.js.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
