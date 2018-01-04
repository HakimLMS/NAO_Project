<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_59f72dd51f7a948a3704a1377a45dfa7415a1c8f3303950974e6dd1bcd6135c8 extends Twig_Template
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
        $__internal_67241e80042c23c1ccc6afd8bf75f3b11fc6d02d4443666362ec8e4830dca689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67241e80042c23c1ccc6afd8bf75f3b11fc6d02d4443666362ec8e4830dca689->enter($__internal_67241e80042c23c1ccc6afd8bf75f3b11fc6d02d4443666362ec8e4830dca689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_3069d0e79f095827257ae659dd942592e863b38464cbd6c7851ee1289f52244e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3069d0e79f095827257ae659dd942592e863b38464cbd6c7851ee1289f52244e->enter($__internal_3069d0e79f095827257ae659dd942592e863b38464cbd6c7851ee1289f52244e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_67241e80042c23c1ccc6afd8bf75f3b11fc6d02d4443666362ec8e4830dca689->leave($__internal_67241e80042c23c1ccc6afd8bf75f3b11fc6d02d4443666362ec8e4830dca689_prof);

        
        $__internal_3069d0e79f095827257ae659dd942592e863b38464cbd6c7851ee1289f52244e->leave($__internal_3069d0e79f095827257ae659dd942592e863b38464cbd6c7851ee1289f52244e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
