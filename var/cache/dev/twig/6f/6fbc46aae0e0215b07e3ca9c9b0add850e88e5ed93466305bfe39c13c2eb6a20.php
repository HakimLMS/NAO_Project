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
        $__internal_d504b3ed40056f3ea0eaa664155b615a9db6e808eb19e5e7fde662cada319e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d504b3ed40056f3ea0eaa664155b615a9db6e808eb19e5e7fde662cada319e3a->enter($__internal_d504b3ed40056f3ea0eaa664155b615a9db6e808eb19e5e7fde662cada319e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_5b5527f0df4ade07bcc6dea029be7ced3f0b0f9f5b77c9af377541688a5f3d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5527f0df4ade07bcc6dea029be7ced3f0b0f9f5b77c9af377541688a5f3d42->enter($__internal_5b5527f0df4ade07bcc6dea029be7ced3f0b0f9f5b77c9af377541688a5f3d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d504b3ed40056f3ea0eaa664155b615a9db6e808eb19e5e7fde662cada319e3a->leave($__internal_d504b3ed40056f3ea0eaa664155b615a9db6e808eb19e5e7fde662cada319e3a_prof);

        
        $__internal_5b5527f0df4ade07bcc6dea029be7ced3f0b0f9f5b77c9af377541688a5f3d42->leave($__internal_5b5527f0df4ade07bcc6dea029be7ced3f0b0f9f5b77c9af377541688a5f3d42_prof);

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
