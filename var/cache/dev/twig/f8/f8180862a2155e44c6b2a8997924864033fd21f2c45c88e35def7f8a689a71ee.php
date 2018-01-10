<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_0bc1ab384529e439db9ea3270d790534f174f7dc89a5a7a0c805113a4772e084 extends Twig_Template
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
        $__internal_2751a2e48ed0a8a0d9086eac6de353c952fb854903f32466b1f895c053cb83c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2751a2e48ed0a8a0d9086eac6de353c952fb854903f32466b1f895c053cb83c0->enter($__internal_2751a2e48ed0a8a0d9086eac6de353c952fb854903f32466b1f895c053cb83c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_af18f39a87a2371c3070e05e5893d382ef479a062b5f6ea502252d1ef2c23854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af18f39a87a2371c3070e05e5893d382ef479a062b5f6ea502252d1ef2c23854->enter($__internal_af18f39a87a2371c3070e05e5893d382ef479a062b5f6ea502252d1ef2c23854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2751a2e48ed0a8a0d9086eac6de353c952fb854903f32466b1f895c053cb83c0->leave($__internal_2751a2e48ed0a8a0d9086eac6de353c952fb854903f32466b1f895c053cb83c0_prof);

        
        $__internal_af18f39a87a2371c3070e05e5893d382ef479a062b5f6ea502252d1ef2c23854->leave($__internal_af18f39a87a2371c3070e05e5893d382ef479a062b5f6ea502252d1ef2c23854_prof);

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
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
