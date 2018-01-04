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
        $__internal_538a373afe4bc2c6771b0004fa481f0c3d122399c951e800e8d2ac584b5b8c6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_538a373afe4bc2c6771b0004fa481f0c3d122399c951e800e8d2ac584b5b8c6e->enter($__internal_538a373afe4bc2c6771b0004fa481f0c3d122399c951e800e8d2ac584b5b8c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_c54828aeabaec298421cad23cff2b83c0e2d60441755de5c711ec4336e6459c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c54828aeabaec298421cad23cff2b83c0e2d60441755de5c711ec4336e6459c8->enter($__internal_c54828aeabaec298421cad23cff2b83c0e2d60441755de5c711ec4336e6459c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_538a373afe4bc2c6771b0004fa481f0c3d122399c951e800e8d2ac584b5b8c6e->leave($__internal_538a373afe4bc2c6771b0004fa481f0c3d122399c951e800e8d2ac584b5b8c6e_prof);

        
        $__internal_c54828aeabaec298421cad23cff2b83c0e2d60441755de5c711ec4336e6459c8->leave($__internal_c54828aeabaec298421cad23cff2b83c0e2d60441755de5c711ec4336e6459c8_prof);

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
