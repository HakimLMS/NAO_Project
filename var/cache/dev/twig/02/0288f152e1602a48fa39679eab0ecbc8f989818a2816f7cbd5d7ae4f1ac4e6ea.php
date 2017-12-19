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
        $__internal_5c4313130f22b0343ec42735556ea84ad67fa418ba083842ae04a1b91cf138a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c4313130f22b0343ec42735556ea84ad67fa418ba083842ae04a1b91cf138a8->enter($__internal_5c4313130f22b0343ec42735556ea84ad67fa418ba083842ae04a1b91cf138a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_b0f5b880c19084bcd8d96c8fe2462a10c4c61a305eee00bca458f3912ab1e85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f5b880c19084bcd8d96c8fe2462a10c4c61a305eee00bca458f3912ab1e85b->enter($__internal_b0f5b880c19084bcd8d96c8fe2462a10c4c61a305eee00bca458f3912ab1e85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_5c4313130f22b0343ec42735556ea84ad67fa418ba083842ae04a1b91cf138a8->leave($__internal_5c4313130f22b0343ec42735556ea84ad67fa418ba083842ae04a1b91cf138a8_prof);

        
        $__internal_b0f5b880c19084bcd8d96c8fe2462a10c4c61a305eee00bca458f3912ab1e85b->leave($__internal_b0f5b880c19084bcd8d96c8fe2462a10c4c61a305eee00bca458f3912ab1e85b_prof);

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
