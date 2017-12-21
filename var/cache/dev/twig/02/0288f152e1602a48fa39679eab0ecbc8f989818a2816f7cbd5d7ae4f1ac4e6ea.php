<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_ba262b89f56e2a5aa724b0f071b262c395972b4489916c925e4c694acc337cae extends Twig_Template
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
        $__internal_f5c652c41f9c72d68ad3423ca7dc7a9714d422191f5f0fa16d596a40915f0b00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c652c41f9c72d68ad3423ca7dc7a9714d422191f5f0fa16d596a40915f0b00->enter($__internal_f5c652c41f9c72d68ad3423ca7dc7a9714d422191f5f0fa16d596a40915f0b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_93d095b4899ac325e16f6c486c3d85772a9fe3b94f32dcd954edc5535cdc69fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d095b4899ac325e16f6c486c3d85772a9fe3b94f32dcd954edc5535cdc69fe->enter($__internal_93d095b4899ac325e16f6c486c3d85772a9fe3b94f32dcd954edc5535cdc69fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_f5c652c41f9c72d68ad3423ca7dc7a9714d422191f5f0fa16d596a40915f0b00->leave($__internal_f5c652c41f9c72d68ad3423ca7dc7a9714d422191f5f0fa16d596a40915f0b00_prof);

        
        $__internal_93d095b4899ac325e16f6c486c3d85772a9fe3b94f32dcd954edc5535cdc69fe->leave($__internal_93d095b4899ac325e16f6c486c3d85772a9fe3b94f32dcd954edc5535cdc69fe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
