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
        $__internal_7d97d012d3e92b79886d6acbb9e5b972ee1f37ff28442df70299f6c2311a83a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d97d012d3e92b79886d6acbb9e5b972ee1f37ff28442df70299f6c2311a83a2->enter($__internal_7d97d012d3e92b79886d6acbb9e5b972ee1f37ff28442df70299f6c2311a83a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_9c4f1835383bc0696a97d6a22cfa0adbc263320a92ad1ba6095ef96dea5f2e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c4f1835383bc0696a97d6a22cfa0adbc263320a92ad1ba6095ef96dea5f2e49->enter($__internal_9c4f1835383bc0696a97d6a22cfa0adbc263320a92ad1ba6095ef96dea5f2e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7d97d012d3e92b79886d6acbb9e5b972ee1f37ff28442df70299f6c2311a83a2->leave($__internal_7d97d012d3e92b79886d6acbb9e5b972ee1f37ff28442df70299f6c2311a83a2_prof);

        
        $__internal_9c4f1835383bc0696a97d6a22cfa0adbc263320a92ad1ba6095ef96dea5f2e49->leave($__internal_9c4f1835383bc0696a97d6a22cfa0adbc263320a92ad1ba6095ef96dea5f2e49_prof);

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
