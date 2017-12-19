<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_16fea8c7a10e961a6bdf5042d9a6dfb9a9f6f4296d80ad37c451ab7809277217 extends Twig_Template
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
        $__internal_daad163a02260a104f4d3a4d2c38a9dde4530ef0281c94b6b6ba4920010d16d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daad163a02260a104f4d3a4d2c38a9dde4530ef0281c94b6b6ba4920010d16d8->enter($__internal_daad163a02260a104f4d3a4d2c38a9dde4530ef0281c94b6b6ba4920010d16d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_bf7851115501523ad35392dd341e7ebe78d4044632462e512425a3932b36e88e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7851115501523ad35392dd341e7ebe78d4044632462e512425a3932b36e88e->enter($__internal_bf7851115501523ad35392dd341e7ebe78d4044632462e512425a3932b36e88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_daad163a02260a104f4d3a4d2c38a9dde4530ef0281c94b6b6ba4920010d16d8->leave($__internal_daad163a02260a104f4d3a4d2c38a9dde4530ef0281c94b6b6ba4920010d16d8_prof);

        
        $__internal_bf7851115501523ad35392dd341e7ebe78d4044632462e512425a3932b36e88e->leave($__internal_bf7851115501523ad35392dd341e7ebe78d4044632462e512425a3932b36e88e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
