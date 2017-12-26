<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_57d8a1b8f35c5bed11e3ef34b3e9f9793294a226206f763d33d25043648b516c extends Twig_Template
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
        $__internal_bd7f65d3b998566b9f57d41e0a1ee0ce91640d5398d01775d861518d9a2af92e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd7f65d3b998566b9f57d41e0a1ee0ce91640d5398d01775d861518d9a2af92e->enter($__internal_bd7f65d3b998566b9f57d41e0a1ee0ce91640d5398d01775d861518d9a2af92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_8ac1a2a88c7272829f88bd16eabee057fafc7ec513ae8195f6e97e9b1e5311f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac1a2a88c7272829f88bd16eabee057fafc7ec513ae8195f6e97e9b1e5311f3->enter($__internal_8ac1a2a88c7272829f88bd16eabee057fafc7ec513ae8195f6e97e9b1e5311f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_bd7f65d3b998566b9f57d41e0a1ee0ce91640d5398d01775d861518d9a2af92e->leave($__internal_bd7f65d3b998566b9f57d41e0a1ee0ce91640d5398d01775d861518d9a2af92e_prof);

        
        $__internal_8ac1a2a88c7272829f88bd16eabee057fafc7ec513ae8195f6e97e9b1e5311f3->leave($__internal_8ac1a2a88c7272829f88bd16eabee057fafc7ec513ae8195f6e97e9b1e5311f3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
