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
        $__internal_8759a965c497e1e3a0f22ee36e64516fc0834322d090e8e9cddbea53c8fd2669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8759a965c497e1e3a0f22ee36e64516fc0834322d090e8e9cddbea53c8fd2669->enter($__internal_8759a965c497e1e3a0f22ee36e64516fc0834322d090e8e9cddbea53c8fd2669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_73c28ca7e14329aad299f1d026eee10de65a39a97ff61b444b62bf7532a71c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c28ca7e14329aad299f1d026eee10de65a39a97ff61b444b62bf7532a71c6f->enter($__internal_73c28ca7e14329aad299f1d026eee10de65a39a97ff61b444b62bf7532a71c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8759a965c497e1e3a0f22ee36e64516fc0834322d090e8e9cddbea53c8fd2669->leave($__internal_8759a965c497e1e3a0f22ee36e64516fc0834322d090e8e9cddbea53c8fd2669_prof);

        
        $__internal_73c28ca7e14329aad299f1d026eee10de65a39a97ff61b444b62bf7532a71c6f->leave($__internal_73c28ca7e14329aad299f1d026eee10de65a39a97ff61b444b62bf7532a71c6f_prof);

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
