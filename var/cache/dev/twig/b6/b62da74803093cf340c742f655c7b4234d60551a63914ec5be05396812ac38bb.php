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
        $__internal_68a2f4d5649861e6bde0ca7a74f970e46500d9f30eaa3090d505d2e3c7e1ade0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a2f4d5649861e6bde0ca7a74f970e46500d9f30eaa3090d505d2e3c7e1ade0->enter($__internal_68a2f4d5649861e6bde0ca7a74f970e46500d9f30eaa3090d505d2e3c7e1ade0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_b98fba885cf24789c22b4cb612f4afa45b1cec071e1f03433f2babbf6ae67ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b98fba885cf24789c22b4cb612f4afa45b1cec071e1f03433f2babbf6ae67ada->enter($__internal_b98fba885cf24789c22b4cb612f4afa45b1cec071e1f03433f2babbf6ae67ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_68a2f4d5649861e6bde0ca7a74f970e46500d9f30eaa3090d505d2e3c7e1ade0->leave($__internal_68a2f4d5649861e6bde0ca7a74f970e46500d9f30eaa3090d505d2e3c7e1ade0_prof);

        
        $__internal_b98fba885cf24789c22b4cb612f4afa45b1cec071e1f03433f2babbf6ae67ada->leave($__internal_b98fba885cf24789c22b4cb612f4afa45b1cec071e1f03433f2babbf6ae67ada_prof);

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
