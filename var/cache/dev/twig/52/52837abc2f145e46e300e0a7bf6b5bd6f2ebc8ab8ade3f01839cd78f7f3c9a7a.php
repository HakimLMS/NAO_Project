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
        $__internal_c44652be1e2dc098a6e6a8881eeb5bd0ee34d6b36c9a4a25f90a48868b4642d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44652be1e2dc098a6e6a8881eeb5bd0ee34d6b36c9a4a25f90a48868b4642d9->enter($__internal_c44652be1e2dc098a6e6a8881eeb5bd0ee34d6b36c9a4a25f90a48868b4642d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_34677d4748dd45f68017276f91051a69bf72f10c884dd608829f5a5c1d070198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34677d4748dd45f68017276f91051a69bf72f10c884dd608829f5a5c1d070198->enter($__internal_34677d4748dd45f68017276f91051a69bf72f10c884dd608829f5a5c1d070198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_c44652be1e2dc098a6e6a8881eeb5bd0ee34d6b36c9a4a25f90a48868b4642d9->leave($__internal_c44652be1e2dc098a6e6a8881eeb5bd0ee34d6b36c9a4a25f90a48868b4642d9_prof);

        
        $__internal_34677d4748dd45f68017276f91051a69bf72f10c884dd608829f5a5c1d070198->leave($__internal_34677d4748dd45f68017276f91051a69bf72f10c884dd608829f5a5c1d070198_prof);

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
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
