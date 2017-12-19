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
        $__internal_7ffff3bdb4475496e40e0f19f65c85799c8e0495e092d069f89f483fbd508233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ffff3bdb4475496e40e0f19f65c85799c8e0495e092d069f89f483fbd508233->enter($__internal_7ffff3bdb4475496e40e0f19f65c85799c8e0495e092d069f89f483fbd508233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_4a6d516d0a7af68f2f3c1f4a224af22d5b4b3d32c3eaa572cc037c628f699cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a6d516d0a7af68f2f3c1f4a224af22d5b4b3d32c3eaa572cc037c628f699cf7->enter($__internal_4a6d516d0a7af68f2f3c1f4a224af22d5b4b3d32c3eaa572cc037c628f699cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7ffff3bdb4475496e40e0f19f65c85799c8e0495e092d069f89f483fbd508233->leave($__internal_7ffff3bdb4475496e40e0f19f65c85799c8e0495e092d069f89f483fbd508233_prof);

        
        $__internal_4a6d516d0a7af68f2f3c1f4a224af22d5b4b3d32c3eaa572cc037c628f699cf7->leave($__internal_4a6d516d0a7af68f2f3c1f4a224af22d5b4b3d32c3eaa572cc037c628f699cf7_prof);

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
