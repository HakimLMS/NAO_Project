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
        $__internal_2fe2481699c7d5650ffa0eaef3202f612f7b6930ef41314c48c0ca51ab05cc42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fe2481699c7d5650ffa0eaef3202f612f7b6930ef41314c48c0ca51ab05cc42->enter($__internal_2fe2481699c7d5650ffa0eaef3202f612f7b6930ef41314c48c0ca51ab05cc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_d9d91941feb99761f5d0512b25f1def89f84af96d1ca6d84cd954618f913b34d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d91941feb99761f5d0512b25f1def89f84af96d1ca6d84cd954618f913b34d->enter($__internal_d9d91941feb99761f5d0512b25f1def89f84af96d1ca6d84cd954618f913b34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_2fe2481699c7d5650ffa0eaef3202f612f7b6930ef41314c48c0ca51ab05cc42->leave($__internal_2fe2481699c7d5650ffa0eaef3202f612f7b6930ef41314c48c0ca51ab05cc42_prof);

        
        $__internal_d9d91941feb99761f5d0512b25f1def89f84af96d1ca6d84cd954618f913b34d->leave($__internal_d9d91941feb99761f5d0512b25f1def89f84af96d1ca6d84cd954618f913b34d_prof);

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
