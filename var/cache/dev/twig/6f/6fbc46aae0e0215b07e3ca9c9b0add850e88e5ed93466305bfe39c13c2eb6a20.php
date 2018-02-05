<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_ecb2a755969e105c3e976051a08de87799dfe00105728983f8c26cada2cae21f extends Twig_Template
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
        $__internal_3a34b5e4e3c4343fb41b773747c9c6485030779bc54bc89aa9de322fda757c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a34b5e4e3c4343fb41b773747c9c6485030779bc54bc89aa9de322fda757c38->enter($__internal_3a34b5e4e3c4343fb41b773747c9c6485030779bc54bc89aa9de322fda757c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_8d97c6fc0c87238a10b9a6b9d90ff53978c35ba5dbe1612f61242eed79d39da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d97c6fc0c87238a10b9a6b9d90ff53978c35ba5dbe1612f61242eed79d39da6->enter($__internal_8d97c6fc0c87238a10b9a6b9d90ff53978c35ba5dbe1612f61242eed79d39da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3a34b5e4e3c4343fb41b773747c9c6485030779bc54bc89aa9de322fda757c38->leave($__internal_3a34b5e4e3c4343fb41b773747c9c6485030779bc54bc89aa9de322fda757c38_prof);

        
        $__internal_8d97c6fc0c87238a10b9a6b9d90ff53978c35ba5dbe1612f61242eed79d39da6->leave($__internal_8d97c6fc0c87238a10b9a6b9d90ff53978c35ba5dbe1612f61242eed79d39da6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
