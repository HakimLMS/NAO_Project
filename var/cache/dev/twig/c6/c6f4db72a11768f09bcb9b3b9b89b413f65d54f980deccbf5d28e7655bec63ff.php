<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_5cd6516ab27e48ce13e96be2466eb285d1c887f631d60838eb94637b0da1c7c9 extends Twig_Template
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
        $__internal_df28223542f8adb9fe822ebe3a3c26e85e3c3f01cdeb5db772124d800907a514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df28223542f8adb9fe822ebe3a3c26e85e3c3f01cdeb5db772124d800907a514->enter($__internal_df28223542f8adb9fe822ebe3a3c26e85e3c3f01cdeb5db772124d800907a514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_a22c6f5fb5fc27f553907eb6efccd4a35b0aa54e842decd1274051b771fd4bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a22c6f5fb5fc27f553907eb6efccd4a35b0aa54e842decd1274051b771fd4bf3->enter($__internal_a22c6f5fb5fc27f553907eb6efccd4a35b0aa54e842decd1274051b771fd4bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_df28223542f8adb9fe822ebe3a3c26e85e3c3f01cdeb5db772124d800907a514->leave($__internal_df28223542f8adb9fe822ebe3a3c26e85e3c3f01cdeb5db772124d800907a514_prof);

        
        $__internal_a22c6f5fb5fc27f553907eb6efccd4a35b0aa54e842decd1274051b771fd4bf3->leave($__internal_a22c6f5fb5fc27f553907eb6efccd4a35b0aa54e842decd1274051b771fd4bf3_prof);

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
