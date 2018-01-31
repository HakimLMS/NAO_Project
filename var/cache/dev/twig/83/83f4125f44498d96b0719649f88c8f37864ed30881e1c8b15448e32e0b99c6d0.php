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
        $__internal_e168692cbc7ca8cbb506ac587911ef0597ed2ab8db3161f8b78667f09d418026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e168692cbc7ca8cbb506ac587911ef0597ed2ab8db3161f8b78667f09d418026->enter($__internal_e168692cbc7ca8cbb506ac587911ef0597ed2ab8db3161f8b78667f09d418026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_65c0a32d0c3e586516132e512c2ce6241c4f91f100b5ee944b2f57dae3adcb4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c0a32d0c3e586516132e512c2ce6241c4f91f100b5ee944b2f57dae3adcb4e->enter($__internal_65c0a32d0c3e586516132e512c2ce6241c4f91f100b5ee944b2f57dae3adcb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e168692cbc7ca8cbb506ac587911ef0597ed2ab8db3161f8b78667f09d418026->leave($__internal_e168692cbc7ca8cbb506ac587911ef0597ed2ab8db3161f8b78667f09d418026_prof);

        
        $__internal_65c0a32d0c3e586516132e512c2ce6241c4f91f100b5ee944b2f57dae3adcb4e->leave($__internal_65c0a32d0c3e586516132e512c2ce6241c4f91f100b5ee944b2f57dae3adcb4e_prof);

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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
