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
        $__internal_add87dc50a24d7b581c726bdd9de2bef7d27b5a8bcc395b5e3ccd55997be5b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add87dc50a24d7b581c726bdd9de2bef7d27b5a8bcc395b5e3ccd55997be5b31->enter($__internal_add87dc50a24d7b581c726bdd9de2bef7d27b5a8bcc395b5e3ccd55997be5b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_51332d50fe6c5e3c0e10c1b2b57673fceb5806c42bcd6dcc9d46377c21d15353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51332d50fe6c5e3c0e10c1b2b57673fceb5806c42bcd6dcc9d46377c21d15353->enter($__internal_51332d50fe6c5e3c0e10c1b2b57673fceb5806c42bcd6dcc9d46377c21d15353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_add87dc50a24d7b581c726bdd9de2bef7d27b5a8bcc395b5e3ccd55997be5b31->leave($__internal_add87dc50a24d7b581c726bdd9de2bef7d27b5a8bcc395b5e3ccd55997be5b31_prof);

        
        $__internal_51332d50fe6c5e3c0e10c1b2b57673fceb5806c42bcd6dcc9d46377c21d15353->leave($__internal_51332d50fe6c5e3c0e10c1b2b57673fceb5806c42bcd6dcc9d46377c21d15353_prof);

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
