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
        $__internal_fd4313290ee9f8d96b1c833b53dfd1e46ee51dd8db32d50c257c804d0ab6182b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd4313290ee9f8d96b1c833b53dfd1e46ee51dd8db32d50c257c804d0ab6182b->enter($__internal_fd4313290ee9f8d96b1c833b53dfd1e46ee51dd8db32d50c257c804d0ab6182b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_bba16b5cb0ba4ada24cff7c677b01f2cf94dfc7b1b777ccbbf89ce6d491a2aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba16b5cb0ba4ada24cff7c677b01f2cf94dfc7b1b777ccbbf89ce6d491a2aee->enter($__internal_bba16b5cb0ba4ada24cff7c677b01f2cf94dfc7b1b777ccbbf89ce6d491a2aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_fd4313290ee9f8d96b1c833b53dfd1e46ee51dd8db32d50c257c804d0ab6182b->leave($__internal_fd4313290ee9f8d96b1c833b53dfd1e46ee51dd8db32d50c257c804d0ab6182b_prof);

        
        $__internal_bba16b5cb0ba4ada24cff7c677b01f2cf94dfc7b1b777ccbbf89ce6d491a2aee->leave($__internal_bba16b5cb0ba4ada24cff7c677b01f2cf94dfc7b1b777ccbbf89ce6d491a2aee_prof);

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
