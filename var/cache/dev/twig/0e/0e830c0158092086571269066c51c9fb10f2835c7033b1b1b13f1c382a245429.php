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
        $__internal_bc7a65ce1520b4c2f3aa205e7c647ed9ffef3fcd9f21075a244d548f74e1fb34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc7a65ce1520b4c2f3aa205e7c647ed9ffef3fcd9f21075a244d548f74e1fb34->enter($__internal_bc7a65ce1520b4c2f3aa205e7c647ed9ffef3fcd9f21075a244d548f74e1fb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_d2fc503875d789750ec39982c321933d5d1569c69accc974006485d20db24abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2fc503875d789750ec39982c321933d5d1569c69accc974006485d20db24abd->enter($__internal_d2fc503875d789750ec39982c321933d5d1569c69accc974006485d20db24abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_bc7a65ce1520b4c2f3aa205e7c647ed9ffef3fcd9f21075a244d548f74e1fb34->leave($__internal_bc7a65ce1520b4c2f3aa205e7c647ed9ffef3fcd9f21075a244d548f74e1fb34_prof);

        
        $__internal_d2fc503875d789750ec39982c321933d5d1569c69accc974006485d20db24abd->leave($__internal_d2fc503875d789750ec39982c321933d5d1569c69accc974006485d20db24abd_prof);

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
