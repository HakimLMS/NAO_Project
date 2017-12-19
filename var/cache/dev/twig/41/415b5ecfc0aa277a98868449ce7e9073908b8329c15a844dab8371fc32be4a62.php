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
        $__internal_2bb48c2458ded5e49e1d846c53d0ce28c82f86e05f80561dd0137073e376fd36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bb48c2458ded5e49e1d846c53d0ce28c82f86e05f80561dd0137073e376fd36->enter($__internal_2bb48c2458ded5e49e1d846c53d0ce28c82f86e05f80561dd0137073e376fd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_a07abc9318bd4df99db25bbb6edbc8bcc190fbfff5e2dab7114c6830cca74535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07abc9318bd4df99db25bbb6edbc8bcc190fbfff5e2dab7114c6830cca74535->enter($__internal_a07abc9318bd4df99db25bbb6edbc8bcc190fbfff5e2dab7114c6830cca74535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_2bb48c2458ded5e49e1d846c53d0ce28c82f86e05f80561dd0137073e376fd36->leave($__internal_2bb48c2458ded5e49e1d846c53d0ce28c82f86e05f80561dd0137073e376fd36_prof);

        
        $__internal_a07abc9318bd4df99db25bbb6edbc8bcc190fbfff5e2dab7114c6830cca74535->leave($__internal_a07abc9318bd4df99db25bbb6edbc8bcc190fbfff5e2dab7114c6830cca74535_prof);

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
", "@Twig/Exception/error.txt.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
