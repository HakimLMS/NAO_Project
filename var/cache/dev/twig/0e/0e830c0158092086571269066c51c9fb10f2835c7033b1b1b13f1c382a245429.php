<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9fa8b78a6e260dacb851ecab510133fde363855209d3e4b25002f9a770f874e4 extends Twig_Template
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
        $__internal_3e235b40977516af6fe7349dd7cf0b1a584a1b6923c1f36ed6f589cd989c7c85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e235b40977516af6fe7349dd7cf0b1a584a1b6923c1f36ed6f589cd989c7c85->enter($__internal_3e235b40977516af6fe7349dd7cf0b1a584a1b6923c1f36ed6f589cd989c7c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_4d39f0189716a6dcd8f883e96245f043c8601fd2eea1180dfb1a451eb5a096e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d39f0189716a6dcd8f883e96245f043c8601fd2eea1180dfb1a451eb5a096e2->enter($__internal_4d39f0189716a6dcd8f883e96245f043c8601fd2eea1180dfb1a451eb5a096e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3e235b40977516af6fe7349dd7cf0b1a584a1b6923c1f36ed6f589cd989c7c85->leave($__internal_3e235b40977516af6fe7349dd7cf0b1a584a1b6923c1f36ed6f589cd989c7c85_prof);

        
        $__internal_4d39f0189716a6dcd8f883e96245f043c8601fd2eea1180dfb1a451eb5a096e2->leave($__internal_4d39f0189716a6dcd8f883e96245f043c8601fd2eea1180dfb1a451eb5a096e2_prof);

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
