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
        $__internal_848e6a733ea044d2cf713760e6656df41f10a9d55c50cb700c824b7b38f7fb2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_848e6a733ea044d2cf713760e6656df41f10a9d55c50cb700c824b7b38f7fb2a->enter($__internal_848e6a733ea044d2cf713760e6656df41f10a9d55c50cb700c824b7b38f7fb2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_d30d8fe8c59fffc6cd566f229fdce4e22b4cdc25e8ade5f82600db5b514ebe6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30d8fe8c59fffc6cd566f229fdce4e22b4cdc25e8ade5f82600db5b514ebe6f->enter($__internal_d30d8fe8c59fffc6cd566f229fdce4e22b4cdc25e8ade5f82600db5b514ebe6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_848e6a733ea044d2cf713760e6656df41f10a9d55c50cb700c824b7b38f7fb2a->leave($__internal_848e6a733ea044d2cf713760e6656df41f10a9d55c50cb700c824b7b38f7fb2a_prof);

        
        $__internal_d30d8fe8c59fffc6cd566f229fdce4e22b4cdc25e8ade5f82600db5b514ebe6f->leave($__internal_d30d8fe8c59fffc6cd566f229fdce4e22b4cdc25e8ade5f82600db5b514ebe6f_prof);

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
