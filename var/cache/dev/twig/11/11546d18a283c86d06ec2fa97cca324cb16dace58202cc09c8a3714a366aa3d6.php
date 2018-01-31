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
        $__internal_31bd1a21ad48a1510f2af0aac004ddf1fbabc95e10284e75216db39d2ab3affd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31bd1a21ad48a1510f2af0aac004ddf1fbabc95e10284e75216db39d2ab3affd->enter($__internal_31bd1a21ad48a1510f2af0aac004ddf1fbabc95e10284e75216db39d2ab3affd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_ecf6e6e17cfa985a630a757f4ee46807ba67dc2aba739b0fae9daf08321639c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf6e6e17cfa985a630a757f4ee46807ba67dc2aba739b0fae9daf08321639c3->enter($__internal_ecf6e6e17cfa985a630a757f4ee46807ba67dc2aba739b0fae9daf08321639c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_31bd1a21ad48a1510f2af0aac004ddf1fbabc95e10284e75216db39d2ab3affd->leave($__internal_31bd1a21ad48a1510f2af0aac004ddf1fbabc95e10284e75216db39d2ab3affd_prof);

        
        $__internal_ecf6e6e17cfa985a630a757f4ee46807ba67dc2aba739b0fae9daf08321639c3->leave($__internal_ecf6e6e17cfa985a630a757f4ee46807ba67dc2aba739b0fae9daf08321639c3_prof);

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
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
