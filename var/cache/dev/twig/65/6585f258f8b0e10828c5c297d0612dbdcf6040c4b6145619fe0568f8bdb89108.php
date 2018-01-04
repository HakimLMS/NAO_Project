<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_520a545ebffce750005400596beef0d3ae5ec73e78ff5669256fc96ad546d6d4 extends Twig_Template
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
        $__internal_efd0118afdedf2cf2b5ec9c2ccbcadf44fce16a9c93a932a251646997d4c10b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efd0118afdedf2cf2b5ec9c2ccbcadf44fce16a9c93a932a251646997d4c10b8->enter($__internal_efd0118afdedf2cf2b5ec9c2ccbcadf44fce16a9c93a932a251646997d4c10b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_44d58b444cbc3f17ce2e500157b5100d6943224f96838cbc445ad7bfdceecb22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d58b444cbc3f17ce2e500157b5100d6943224f96838cbc445ad7bfdceecb22->enter($__internal_44d58b444cbc3f17ce2e500157b5100d6943224f96838cbc445ad7bfdceecb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_efd0118afdedf2cf2b5ec9c2ccbcadf44fce16a9c93a932a251646997d4c10b8->leave($__internal_efd0118afdedf2cf2b5ec9c2ccbcadf44fce16a9c93a932a251646997d4c10b8_prof);

        
        $__internal_44d58b444cbc3f17ce2e500157b5100d6943224f96838cbc445ad7bfdceecb22->leave($__internal_44d58b444cbc3f17ce2e500157b5100d6943224f96838cbc445ad7bfdceecb22_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
