<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_c374c45efbeb75ae40b820408e4ffe4e1cbd94b48fd075814324ada0a84d1e09 extends Twig_Template
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
        $__internal_040ce9aa753d750d54e6416b12a944961505a8c4800d375de14cc2fbc393935c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040ce9aa753d750d54e6416b12a944961505a8c4800d375de14cc2fbc393935c->enter($__internal_040ce9aa753d750d54e6416b12a944961505a8c4800d375de14cc2fbc393935c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_ed64f60a186a5d6e6de54aef806ce7fb38c6a7c222b865d2c08b51c186c76901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed64f60a186a5d6e6de54aef806ce7fb38c6a7c222b865d2c08b51c186c76901->enter($__internal_ed64f60a186a5d6e6de54aef806ce7fb38c6a7c222b865d2c08b51c186c76901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_040ce9aa753d750d54e6416b12a944961505a8c4800d375de14cc2fbc393935c->leave($__internal_040ce9aa753d750d54e6416b12a944961505a8c4800d375de14cc2fbc393935c_prof);

        
        $__internal_ed64f60a186a5d6e6de54aef806ce7fb38c6a7c222b865d2c08b51c186c76901->leave($__internal_ed64f60a186a5d6e6de54aef806ce7fb38c6a7c222b865d2c08b51c186c76901_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
