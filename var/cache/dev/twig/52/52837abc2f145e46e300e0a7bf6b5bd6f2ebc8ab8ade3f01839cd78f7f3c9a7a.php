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
        $__internal_e5116805e37eeb93a9c0f42ebee00194174cf2d097f1c5b039e9db4e18baccef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5116805e37eeb93a9c0f42ebee00194174cf2d097f1c5b039e9db4e18baccef->enter($__internal_e5116805e37eeb93a9c0f42ebee00194174cf2d097f1c5b039e9db4e18baccef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_8710b4a783d876d46420b8bd37ab2d7bb50c71e4cb20f689b10b5944ac00d6bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8710b4a783d876d46420b8bd37ab2d7bb50c71e4cb20f689b10b5944ac00d6bf->enter($__internal_8710b4a783d876d46420b8bd37ab2d7bb50c71e4cb20f689b10b5944ac00d6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_e5116805e37eeb93a9c0f42ebee00194174cf2d097f1c5b039e9db4e18baccef->leave($__internal_e5116805e37eeb93a9c0f42ebee00194174cf2d097f1c5b039e9db4e18baccef_prof);

        
        $__internal_8710b4a783d876d46420b8bd37ab2d7bb50c71e4cb20f689b10b5944ac00d6bf->leave($__internal_8710b4a783d876d46420b8bd37ab2d7bb50c71e4cb20f689b10b5944ac00d6bf_prof);

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
