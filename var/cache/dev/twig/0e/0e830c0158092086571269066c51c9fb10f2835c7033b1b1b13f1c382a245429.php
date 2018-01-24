<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9fa8b78a6e260dacb851ecab510133fde363855209d3e4b25002f9a770f874e4 extends Twig_Template
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
        $__internal_e8dafa803762e8952e080e671dead2c0a9d256f86f1fe02d7d291467cee9481f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8dafa803762e8952e080e671dead2c0a9d256f86f1fe02d7d291467cee9481f->enter($__internal_e8dafa803762e8952e080e671dead2c0a9d256f86f1fe02d7d291467cee9481f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_cf0e9ab81c21206312bde117664b074c33fd07c8a88013bf7e7dacd799e95ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0e9ab81c21206312bde117664b074c33fd07c8a88013bf7e7dacd799e95ea9->enter($__internal_cf0e9ab81c21206312bde117664b074c33fd07c8a88013bf7e7dacd799e95ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e8dafa803762e8952e080e671dead2c0a9d256f86f1fe02d7d291467cee9481f->leave($__internal_e8dafa803762e8952e080e671dead2c0a9d256f86f1fe02d7d291467cee9481f_prof);

        
        $__internal_cf0e9ab81c21206312bde117664b074c33fd07c8a88013bf7e7dacd799e95ea9->leave($__internal_cf0e9ab81c21206312bde117664b074c33fd07c8a88013bf7e7dacd799e95ea9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
