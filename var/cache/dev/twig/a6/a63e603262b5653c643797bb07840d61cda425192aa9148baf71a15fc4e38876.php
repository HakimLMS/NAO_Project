<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_652df5913a0ef875e3e870f126c6ca1aa41bd1306d188391deb4c748e9d6d1dd extends Twig_Template
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
        $__internal_6eb3eb9e5e08ddd52d92c4ab53b900577c5fa943e07a60b002a6654a3780c6a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eb3eb9e5e08ddd52d92c4ab53b900577c5fa943e07a60b002a6654a3780c6a3->enter($__internal_6eb3eb9e5e08ddd52d92c4ab53b900577c5fa943e07a60b002a6654a3780c6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_40f97623d6af7a302a485affd3a48f898da24ed35fb8f1ee02f1fdb992355be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f97623d6af7a302a485affd3a48f898da24ed35fb8f1ee02f1fdb992355be0->enter($__internal_40f97623d6af7a302a485affd3a48f898da24ed35fb8f1ee02f1fdb992355be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6eb3eb9e5e08ddd52d92c4ab53b900577c5fa943e07a60b002a6654a3780c6a3->leave($__internal_6eb3eb9e5e08ddd52d92c4ab53b900577c5fa943e07a60b002a6654a3780c6a3_prof);

        
        $__internal_40f97623d6af7a302a485affd3a48f898da24ed35fb8f1ee02f1fdb992355be0->leave($__internal_40f97623d6af7a302a485affd3a48f898da24ed35fb8f1ee02f1fdb992355be0_prof);

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
