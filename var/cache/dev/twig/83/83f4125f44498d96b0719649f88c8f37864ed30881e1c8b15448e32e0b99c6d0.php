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
        $__internal_706e36cb1eb473364aacc65b612870c632ce670ec6cd2dc354bee7cfa2a2c7da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_706e36cb1eb473364aacc65b612870c632ce670ec6cd2dc354bee7cfa2a2c7da->enter($__internal_706e36cb1eb473364aacc65b612870c632ce670ec6cd2dc354bee7cfa2a2c7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_3ec0dfde166aef9d2ed3b6dee63979f98abb0e9782e2634342300cd72a4a930f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec0dfde166aef9d2ed3b6dee63979f98abb0e9782e2634342300cd72a4a930f->enter($__internal_3ec0dfde166aef9d2ed3b6dee63979f98abb0e9782e2634342300cd72a4a930f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_706e36cb1eb473364aacc65b612870c632ce670ec6cd2dc354bee7cfa2a2c7da->leave($__internal_706e36cb1eb473364aacc65b612870c632ce670ec6cd2dc354bee7cfa2a2c7da_prof);

        
        $__internal_3ec0dfde166aef9d2ed3b6dee63979f98abb0e9782e2634342300cd72a4a930f->leave($__internal_3ec0dfde166aef9d2ed3b6dee63979f98abb0e9782e2634342300cd72a4a930f_prof);

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
