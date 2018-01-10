<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_dc81cb26d4c2ba9e707485ded88921598052ac84d16164c46724e61bd68d90bc extends Twig_Template
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
        $__internal_5cf80db94162680eb6bcd9b527f38a114ba7301fc51a2e39bf1abd1560a9c32c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf80db94162680eb6bcd9b527f38a114ba7301fc51a2e39bf1abd1560a9c32c->enter($__internal_5cf80db94162680eb6bcd9b527f38a114ba7301fc51a2e39bf1abd1560a9c32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_3986e0b58e6a76803de9662899c128ffc58ba7a2b651ddcba122469cf69470bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3986e0b58e6a76803de9662899c128ffc58ba7a2b651ddcba122469cf69470bf->enter($__internal_3986e0b58e6a76803de9662899c128ffc58ba7a2b651ddcba122469cf69470bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_5cf80db94162680eb6bcd9b527f38a114ba7301fc51a2e39bf1abd1560a9c32c->leave($__internal_5cf80db94162680eb6bcd9b527f38a114ba7301fc51a2e39bf1abd1560a9c32c_prof);

        
        $__internal_3986e0b58e6a76803de9662899c128ffc58ba7a2b651ddcba122469cf69470bf->leave($__internal_3986e0b58e6a76803de9662899c128ffc58ba7a2b651ddcba122469cf69470bf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
