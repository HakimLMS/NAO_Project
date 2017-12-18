<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_7d872e39280b01d7dc949f0caa13537b5f322e7a8883c69114ee9ee1c8b9e5b2 extends Twig_Template
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
        $__internal_989b3aa2a057a716262d5ef289b78d646a5e94d091ac6a26c252690a2a5bd7e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989b3aa2a057a716262d5ef289b78d646a5e94d091ac6a26c252690a2a5bd7e6->enter($__internal_989b3aa2a057a716262d5ef289b78d646a5e94d091ac6a26c252690a2a5bd7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_79e0715ecabc0c3850edac6bf64fbe622c1db9f7bb2c2ea10958dec858e2af02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e0715ecabc0c3850edac6bf64fbe622c1db9f7bb2c2ea10958dec858e2af02->enter($__internal_79e0715ecabc0c3850edac6bf64fbe622c1db9f7bb2c2ea10958dec858e2af02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_989b3aa2a057a716262d5ef289b78d646a5e94d091ac6a26c252690a2a5bd7e6->leave($__internal_989b3aa2a057a716262d5ef289b78d646a5e94d091ac6a26c252690a2a5bd7e6_prof);

        
        $__internal_79e0715ecabc0c3850edac6bf64fbe622c1db9f7bb2c2ea10958dec858e2af02->leave($__internal_79e0715ecabc0c3850edac6bf64fbe622c1db9f7bb2c2ea10958dec858e2af02_prof);

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
