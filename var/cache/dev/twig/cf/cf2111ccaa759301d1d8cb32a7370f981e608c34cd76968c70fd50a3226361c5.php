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
        $__internal_71f4250cfbfd650993d40da57d1bd16ced806029fca0fe440cece51e90035112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71f4250cfbfd650993d40da57d1bd16ced806029fca0fe440cece51e90035112->enter($__internal_71f4250cfbfd650993d40da57d1bd16ced806029fca0fe440cece51e90035112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_7c11d6d712bf4d88e0857a16d77a90b023d304ed8429bee18f201bc803b86400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c11d6d712bf4d88e0857a16d77a90b023d304ed8429bee18f201bc803b86400->enter($__internal_7c11d6d712bf4d88e0857a16d77a90b023d304ed8429bee18f201bc803b86400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_71f4250cfbfd650993d40da57d1bd16ced806029fca0fe440cece51e90035112->leave($__internal_71f4250cfbfd650993d40da57d1bd16ced806029fca0fe440cece51e90035112_prof);

        
        $__internal_7c11d6d712bf4d88e0857a16d77a90b023d304ed8429bee18f201bc803b86400->leave($__internal_7c11d6d712bf4d88e0857a16d77a90b023d304ed8429bee18f201bc803b86400_prof);

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
