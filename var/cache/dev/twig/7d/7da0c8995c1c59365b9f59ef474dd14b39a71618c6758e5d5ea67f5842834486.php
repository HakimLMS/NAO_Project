<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_f404656f0183dfe4950ba3cc46f8d0c9e77ce82dd2dfd005d3cdefee09baff3f extends Twig_Template
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
        $__internal_754dd1b4fc0886a94ea3c7e9464c25e6bf27ffad0ec4096c1d21a0e123122466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_754dd1b4fc0886a94ea3c7e9464c25e6bf27ffad0ec4096c1d21a0e123122466->enter($__internal_754dd1b4fc0886a94ea3c7e9464c25e6bf27ffad0ec4096c1d21a0e123122466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_02b0f49389ea63132b0dce2dd5c36477bc04171d2ebf474e898fde4391967e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b0f49389ea63132b0dce2dd5c36477bc04171d2ebf474e898fde4391967e91->enter($__internal_02b0f49389ea63132b0dce2dd5c36477bc04171d2ebf474e898fde4391967e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_754dd1b4fc0886a94ea3c7e9464c25e6bf27ffad0ec4096c1d21a0e123122466->leave($__internal_754dd1b4fc0886a94ea3c7e9464c25e6bf27ffad0ec4096c1d21a0e123122466_prof);

        
        $__internal_02b0f49389ea63132b0dce2dd5c36477bc04171d2ebf474e898fde4391967e91->leave($__internal_02b0f49389ea63132b0dce2dd5c36477bc04171d2ebf474e898fde4391967e91_prof);

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
", "@Twig/Exception/exception.json.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
