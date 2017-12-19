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
        $__internal_0dd6aa1fe54b0194b7c26cb7bfe045bd44bf5881ac72e6f20a30ff92cf4f96bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dd6aa1fe54b0194b7c26cb7bfe045bd44bf5881ac72e6f20a30ff92cf4f96bf->enter($__internal_0dd6aa1fe54b0194b7c26cb7bfe045bd44bf5881ac72e6f20a30ff92cf4f96bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_126f5928a9526b04e3a2036e19ce1b191d20e99a447a1dfa9dfc38ff4a35b797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126f5928a9526b04e3a2036e19ce1b191d20e99a447a1dfa9dfc38ff4a35b797->enter($__internal_126f5928a9526b04e3a2036e19ce1b191d20e99a447a1dfa9dfc38ff4a35b797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0dd6aa1fe54b0194b7c26cb7bfe045bd44bf5881ac72e6f20a30ff92cf4f96bf->leave($__internal_0dd6aa1fe54b0194b7c26cb7bfe045bd44bf5881ac72e6f20a30ff92cf4f96bf_prof);

        
        $__internal_126f5928a9526b04e3a2036e19ce1b191d20e99a447a1dfa9dfc38ff4a35b797->leave($__internal_126f5928a9526b04e3a2036e19ce1b191d20e99a447a1dfa9dfc38ff4a35b797_prof);

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
