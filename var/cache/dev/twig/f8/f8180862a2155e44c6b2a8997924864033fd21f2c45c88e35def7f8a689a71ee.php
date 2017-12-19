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
        $__internal_2a9a57759c17e5f3171f2ed3a251e380f7777bdc7f81d451d286a7ce142d42c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a9a57759c17e5f3171f2ed3a251e380f7777bdc7f81d451d286a7ce142d42c6->enter($__internal_2a9a57759c17e5f3171f2ed3a251e380f7777bdc7f81d451d286a7ce142d42c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_291211d2cde6defbe60fc445688f90ee3d10d338e3f5f86e5d45ab09d1c30822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291211d2cde6defbe60fc445688f90ee3d10d338e3f5f86e5d45ab09d1c30822->enter($__internal_291211d2cde6defbe60fc445688f90ee3d10d338e3f5f86e5d45ab09d1c30822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2a9a57759c17e5f3171f2ed3a251e380f7777bdc7f81d451d286a7ce142d42c6->leave($__internal_2a9a57759c17e5f3171f2ed3a251e380f7777bdc7f81d451d286a7ce142d42c6_prof);

        
        $__internal_291211d2cde6defbe60fc445688f90ee3d10d338e3f5f86e5d45ab09d1c30822->leave($__internal_291211d2cde6defbe60fc445688f90ee3d10d338e3f5f86e5d45ab09d1c30822_prof);

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
