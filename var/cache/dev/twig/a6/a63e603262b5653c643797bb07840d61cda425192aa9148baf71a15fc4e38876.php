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
        $__internal_5114af18cad68a22005ef633fd7f601ed3c73bfc3a428439dfa6244b5052c425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5114af18cad68a22005ef633fd7f601ed3c73bfc3a428439dfa6244b5052c425->enter($__internal_5114af18cad68a22005ef633fd7f601ed3c73bfc3a428439dfa6244b5052c425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_eea56e589ea16be882d2392cb1f205cb44b897f861c7d6c3382387ff02c3a0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea56e589ea16be882d2392cb1f205cb44b897f861c7d6c3382387ff02c3a0ed->enter($__internal_eea56e589ea16be882d2392cb1f205cb44b897f861c7d6c3382387ff02c3a0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5114af18cad68a22005ef633fd7f601ed3c73bfc3a428439dfa6244b5052c425->leave($__internal_5114af18cad68a22005ef633fd7f601ed3c73bfc3a428439dfa6244b5052c425_prof);

        
        $__internal_eea56e589ea16be882d2392cb1f205cb44b897f861c7d6c3382387ff02c3a0ed->leave($__internal_eea56e589ea16be882d2392cb1f205cb44b897f861c7d6c3382387ff02c3a0ed_prof);

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
