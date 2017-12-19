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
        $__internal_64925dbcc41bf0c35dccc4f731871a0cbc1104bb4ff229bd25af39469f84ed0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64925dbcc41bf0c35dccc4f731871a0cbc1104bb4ff229bd25af39469f84ed0a->enter($__internal_64925dbcc41bf0c35dccc4f731871a0cbc1104bb4ff229bd25af39469f84ed0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_49cf8e569314c724181124cc1631dcf0e0c9122ceb3be3002f8392a415be019c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49cf8e569314c724181124cc1631dcf0e0c9122ceb3be3002f8392a415be019c->enter($__internal_49cf8e569314c724181124cc1631dcf0e0c9122ceb3be3002f8392a415be019c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_64925dbcc41bf0c35dccc4f731871a0cbc1104bb4ff229bd25af39469f84ed0a->leave($__internal_64925dbcc41bf0c35dccc4f731871a0cbc1104bb4ff229bd25af39469f84ed0a_prof);

        
        $__internal_49cf8e569314c724181124cc1631dcf0e0c9122ceb3be3002f8392a415be019c->leave($__internal_49cf8e569314c724181124cc1631dcf0e0c9122ceb3be3002f8392a415be019c_prof);

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
", "@Twig/Exception/error.atom.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
