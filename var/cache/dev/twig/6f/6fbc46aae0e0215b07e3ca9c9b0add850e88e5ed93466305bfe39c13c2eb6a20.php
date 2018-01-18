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
        $__internal_796ceacbb36c9fbe101f6f8dbac3fa1d5f783e7bcd7318506d77fa49da52c49e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_796ceacbb36c9fbe101f6f8dbac3fa1d5f783e7bcd7318506d77fa49da52c49e->enter($__internal_796ceacbb36c9fbe101f6f8dbac3fa1d5f783e7bcd7318506d77fa49da52c49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_639f8bb5ad09a6158088630414c47f3c4bb35ea77f2ff3068e57dbaac7c5f97b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639f8bb5ad09a6158088630414c47f3c4bb35ea77f2ff3068e57dbaac7c5f97b->enter($__internal_639f8bb5ad09a6158088630414c47f3c4bb35ea77f2ff3068e57dbaac7c5f97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_796ceacbb36c9fbe101f6f8dbac3fa1d5f783e7bcd7318506d77fa49da52c49e->leave($__internal_796ceacbb36c9fbe101f6f8dbac3fa1d5f783e7bcd7318506d77fa49da52c49e_prof);

        
        $__internal_639f8bb5ad09a6158088630414c47f3c4bb35ea77f2ff3068e57dbaac7c5f97b->leave($__internal_639f8bb5ad09a6158088630414c47f3c4bb35ea77f2ff3068e57dbaac7c5f97b_prof);

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
