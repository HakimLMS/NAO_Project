<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_f404656f0183dfe4950ba3cc46f8d0c9e77ce82dd2dfd005d3cdefee09baff3f extends Twig_Template
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
        $__internal_13660c67136a3187541890c45ddbbf957a1fc6876455ae003bb9055204f097be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13660c67136a3187541890c45ddbbf957a1fc6876455ae003bb9055204f097be->enter($__internal_13660c67136a3187541890c45ddbbf957a1fc6876455ae003bb9055204f097be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_67d6083a1b15d9d5a9be26f439a430fb5428517a26d1bf8ae72140e96d33712e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d6083a1b15d9d5a9be26f439a430fb5428517a26d1bf8ae72140e96d33712e->enter($__internal_67d6083a1b15d9d5a9be26f439a430fb5428517a26d1bf8ae72140e96d33712e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_13660c67136a3187541890c45ddbbf957a1fc6876455ae003bb9055204f097be->leave($__internal_13660c67136a3187541890c45ddbbf957a1fc6876455ae003bb9055204f097be_prof);

        
        $__internal_67d6083a1b15d9d5a9be26f439a430fb5428517a26d1bf8ae72140e96d33712e->leave($__internal_67d6083a1b15d9d5a9be26f439a430fb5428517a26d1bf8ae72140e96d33712e_prof);

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