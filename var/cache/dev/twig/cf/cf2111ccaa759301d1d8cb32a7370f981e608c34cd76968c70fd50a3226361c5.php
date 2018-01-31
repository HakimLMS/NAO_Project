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
        $__internal_2235d79116ac8976f757abc25e28c4cef1c6b11550c173ecdfcb22d9ffa00771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2235d79116ac8976f757abc25e28c4cef1c6b11550c173ecdfcb22d9ffa00771->enter($__internal_2235d79116ac8976f757abc25e28c4cef1c6b11550c173ecdfcb22d9ffa00771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_0bfd9b8e7e716bcf6b24e7dd9de55e84d5030117a7f84856a8e6b462ce132cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bfd9b8e7e716bcf6b24e7dd9de55e84d5030117a7f84856a8e6b462ce132cee->enter($__internal_0bfd9b8e7e716bcf6b24e7dd9de55e84d5030117a7f84856a8e6b462ce132cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_2235d79116ac8976f757abc25e28c4cef1c6b11550c173ecdfcb22d9ffa00771->leave($__internal_2235d79116ac8976f757abc25e28c4cef1c6b11550c173ecdfcb22d9ffa00771_prof);

        
        $__internal_0bfd9b8e7e716bcf6b24e7dd9de55e84d5030117a7f84856a8e6b462ce132cee->leave($__internal_0bfd9b8e7e716bcf6b24e7dd9de55e84d5030117a7f84856a8e6b462ce132cee_prof);

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
