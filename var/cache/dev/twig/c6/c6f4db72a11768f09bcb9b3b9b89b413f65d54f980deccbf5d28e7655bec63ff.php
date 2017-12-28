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
        $__internal_08e65906adddfc3de6e8d0b9f1ba6cf88eccb1b347bfa15524e3a945551d1c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e65906adddfc3de6e8d0b9f1ba6cf88eccb1b347bfa15524e3a945551d1c9c->enter($__internal_08e65906adddfc3de6e8d0b9f1ba6cf88eccb1b347bfa15524e3a945551d1c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_72addf4fe01f00784dcb9ba1efb8df5e00f5e7f6f55d9609e71a117060685fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72addf4fe01f00784dcb9ba1efb8df5e00f5e7f6f55d9609e71a117060685fc1->enter($__internal_72addf4fe01f00784dcb9ba1efb8df5e00f5e7f6f55d9609e71a117060685fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_08e65906adddfc3de6e8d0b9f1ba6cf88eccb1b347bfa15524e3a945551d1c9c->leave($__internal_08e65906adddfc3de6e8d0b9f1ba6cf88eccb1b347bfa15524e3a945551d1c9c_prof);

        
        $__internal_72addf4fe01f00784dcb9ba1efb8df5e00f5e7f6f55d9609e71a117060685fc1->leave($__internal_72addf4fe01f00784dcb9ba1efb8df5e00f5e7f6f55d9609e71a117060685fc1_prof);

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
