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
        $__internal_f6305ad636ec34c01112b187561702c65080b0ef74ea289bc2d55a6704f36772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6305ad636ec34c01112b187561702c65080b0ef74ea289bc2d55a6704f36772->enter($__internal_f6305ad636ec34c01112b187561702c65080b0ef74ea289bc2d55a6704f36772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_89e6a01126b01a130d34b8422cf0d778c389ffd9b6637cd2418a0baac28c3714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e6a01126b01a130d34b8422cf0d778c389ffd9b6637cd2418a0baac28c3714->enter($__internal_89e6a01126b01a130d34b8422cf0d778c389ffd9b6637cd2418a0baac28c3714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_f6305ad636ec34c01112b187561702c65080b0ef74ea289bc2d55a6704f36772->leave($__internal_f6305ad636ec34c01112b187561702c65080b0ef74ea289bc2d55a6704f36772_prof);

        
        $__internal_89e6a01126b01a130d34b8422cf0d778c389ffd9b6637cd2418a0baac28c3714->leave($__internal_89e6a01126b01a130d34b8422cf0d778c389ffd9b6637cd2418a0baac28c3714_prof);

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
