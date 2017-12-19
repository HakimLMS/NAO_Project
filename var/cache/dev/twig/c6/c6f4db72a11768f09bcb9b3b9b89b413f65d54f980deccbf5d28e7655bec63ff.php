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
        $__internal_8ec9e99071faf48b2a00e174fba35771a3c44f23c721da6e650c861d82ffd201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ec9e99071faf48b2a00e174fba35771a3c44f23c721da6e650c861d82ffd201->enter($__internal_8ec9e99071faf48b2a00e174fba35771a3c44f23c721da6e650c861d82ffd201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_df07b293888eb2a2d35864e8b86b6e9383dbc83266515fd3489a677a86d21591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df07b293888eb2a2d35864e8b86b6e9383dbc83266515fd3489a677a86d21591->enter($__internal_df07b293888eb2a2d35864e8b86b6e9383dbc83266515fd3489a677a86d21591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8ec9e99071faf48b2a00e174fba35771a3c44f23c721da6e650c861d82ffd201->leave($__internal_8ec9e99071faf48b2a00e174fba35771a3c44f23c721da6e650c861d82ffd201_prof);

        
        $__internal_df07b293888eb2a2d35864e8b86b6e9383dbc83266515fd3489a677a86d21591->leave($__internal_df07b293888eb2a2d35864e8b86b6e9383dbc83266515fd3489a677a86d21591_prof);

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
