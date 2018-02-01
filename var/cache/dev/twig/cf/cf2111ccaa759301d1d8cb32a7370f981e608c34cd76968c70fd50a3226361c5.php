<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_db91d81ab9081c4429041a833ecd86daf6b1e001efe8fe51148218b4ff202974 extends Twig_Template
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
        $__internal_03786e902bd0f525dadb2fb67637d4c89d685701851a0c7247f4b99e3b7708f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03786e902bd0f525dadb2fb67637d4c89d685701851a0c7247f4b99e3b7708f4->enter($__internal_03786e902bd0f525dadb2fb67637d4c89d685701851a0c7247f4b99e3b7708f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_97e0197e8f2836eb738783f780367bc44679cd0e4d0dd6046c7b0bb21d704f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e0197e8f2836eb738783f780367bc44679cd0e4d0dd6046c7b0bb21d704f04->enter($__internal_97e0197e8f2836eb738783f780367bc44679cd0e4d0dd6046c7b0bb21d704f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_03786e902bd0f525dadb2fb67637d4c89d685701851a0c7247f4b99e3b7708f4->leave($__internal_03786e902bd0f525dadb2fb67637d4c89d685701851a0c7247f4b99e3b7708f4_prof);

        
        $__internal_97e0197e8f2836eb738783f780367bc44679cd0e4d0dd6046c7b0bb21d704f04->leave($__internal_97e0197e8f2836eb738783f780367bc44679cd0e4d0dd6046c7b0bb21d704f04_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
