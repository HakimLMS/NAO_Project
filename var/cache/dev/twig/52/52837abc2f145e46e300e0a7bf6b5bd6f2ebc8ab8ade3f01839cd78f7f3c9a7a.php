<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_c4f5e8aa8324904649d8a9824076283ed7b42a971f495831f1145adfe5303310 extends Twig_Template
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
        $__internal_6a360dbfa56c1e8b356314ac04e7fd4f491f74ed28c12a94b349cfe0dcda559a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a360dbfa56c1e8b356314ac04e7fd4f491f74ed28c12a94b349cfe0dcda559a->enter($__internal_6a360dbfa56c1e8b356314ac04e7fd4f491f74ed28c12a94b349cfe0dcda559a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_0e266e7b14868e392700d5c25d397313b843da0be0f72de930a3b22d752c1faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e266e7b14868e392700d5c25d397313b843da0be0f72de930a3b22d752c1faf->enter($__internal_0e266e7b14868e392700d5c25d397313b843da0be0f72de930a3b22d752c1faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_6a360dbfa56c1e8b356314ac04e7fd4f491f74ed28c12a94b349cfe0dcda559a->leave($__internal_6a360dbfa56c1e8b356314ac04e7fd4f491f74ed28c12a94b349cfe0dcda559a_prof);

        
        $__internal_0e266e7b14868e392700d5c25d397313b843da0be0f72de930a3b22d752c1faf->leave($__internal_0e266e7b14868e392700d5c25d397313b843da0be0f72de930a3b22d752c1faf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
