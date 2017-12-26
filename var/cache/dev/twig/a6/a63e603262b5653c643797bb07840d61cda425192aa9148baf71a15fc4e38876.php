<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_652df5913a0ef875e3e870f126c6ca1aa41bd1306d188391deb4c748e9d6d1dd extends Twig_Template
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
        $__internal_d6d82cd3ecb770325eb4bdf6ca41fb8377f51ac547f716f98f41b9cdcdd46bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d82cd3ecb770325eb4bdf6ca41fb8377f51ac547f716f98f41b9cdcdd46bfc->enter($__internal_d6d82cd3ecb770325eb4bdf6ca41fb8377f51ac547f716f98f41b9cdcdd46bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_553e0727808f4556d76ecaebc0c39a57ce92a6eeb3bc0334f1e3a144911e6db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553e0727808f4556d76ecaebc0c39a57ce92a6eeb3bc0334f1e3a144911e6db5->enter($__internal_553e0727808f4556d76ecaebc0c39a57ce92a6eeb3bc0334f1e3a144911e6db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d6d82cd3ecb770325eb4bdf6ca41fb8377f51ac547f716f98f41b9cdcdd46bfc->leave($__internal_d6d82cd3ecb770325eb4bdf6ca41fb8377f51ac547f716f98f41b9cdcdd46bfc_prof);

        
        $__internal_553e0727808f4556d76ecaebc0c39a57ce92a6eeb3bc0334f1e3a144911e6db5->leave($__internal_553e0727808f4556d76ecaebc0c39a57ce92a6eeb3bc0334f1e3a144911e6db5_prof);

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
", "@Twig/Exception/error.atom.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
