<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_d1fe3ee444453d5b7d6cf990657935fe67fed9ee07b2a5a51bfa6cba315f1a64 extends Twig_Template
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
        $__internal_5d8c4b699b99512a37dc6635dd7dd9428b672f6258fc381b27955f3fb2984b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d8c4b699b99512a37dc6635dd7dd9428b672f6258fc381b27955f3fb2984b28->enter($__internal_5d8c4b699b99512a37dc6635dd7dd9428b672f6258fc381b27955f3fb2984b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_6f6826388a00f89937212caed17bc7a168f8ee09f1c555cc17e5c7a52d172c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f6826388a00f89937212caed17bc7a168f8ee09f1c555cc17e5c7a52d172c6c->enter($__internal_6f6826388a00f89937212caed17bc7a168f8ee09f1c555cc17e5c7a52d172c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_5d8c4b699b99512a37dc6635dd7dd9428b672f6258fc381b27955f3fb2984b28->leave($__internal_5d8c4b699b99512a37dc6635dd7dd9428b672f6258fc381b27955f3fb2984b28_prof);

        
        $__internal_6f6826388a00f89937212caed17bc7a168f8ee09f1c555cc17e5c7a52d172c6c->leave($__internal_6f6826388a00f89937212caed17bc7a168f8ee09f1c555cc17e5c7a52d172c6c_prof);

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
