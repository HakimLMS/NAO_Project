<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_6d8cbc6233d89ebd115cd0f5a34dc92f4334a7ed55900c14087ae9bf04c8a9c1 extends Twig_Template
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
        $__internal_59dd88088bbe6182941bc41ee51ee1d851f80b6cdad13bb0264c496180e1b12b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59dd88088bbe6182941bc41ee51ee1d851f80b6cdad13bb0264c496180e1b12b->enter($__internal_59dd88088bbe6182941bc41ee51ee1d851f80b6cdad13bb0264c496180e1b12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_57293b3d525a535850d48def2506c3a97ca6d9924fd439337c1c85aa94628f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57293b3d525a535850d48def2506c3a97ca6d9924fd439337c1c85aa94628f60->enter($__internal_57293b3d525a535850d48def2506c3a97ca6d9924fd439337c1c85aa94628f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_59dd88088bbe6182941bc41ee51ee1d851f80b6cdad13bb0264c496180e1b12b->leave($__internal_59dd88088bbe6182941bc41ee51ee1d851f80b6cdad13bb0264c496180e1b12b_prof);

        
        $__internal_57293b3d525a535850d48def2506c3a97ca6d9924fd439337c1c85aa94628f60->leave($__internal_57293b3d525a535850d48def2506c3a97ca6d9924fd439337c1c85aa94628f60_prof);

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
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
