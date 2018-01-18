<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_413f9459d99620bc668db23eda85e5e27cf411c9710dbf441b19122b39fc33b3 extends Twig_Template
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
        $__internal_9ea527d1bf9b45c8d84fdd2bc2af65fce87e14a2d7934f22b448a33f334d8652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea527d1bf9b45c8d84fdd2bc2af65fce87e14a2d7934f22b448a33f334d8652->enter($__internal_9ea527d1bf9b45c8d84fdd2bc2af65fce87e14a2d7934f22b448a33f334d8652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_a3da0194fcd77e77f853d778146842c4c0dc8d0a16b07618894ce42233813863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3da0194fcd77e77f853d778146842c4c0dc8d0a16b07618894ce42233813863->enter($__internal_a3da0194fcd77e77f853d778146842c4c0dc8d0a16b07618894ce42233813863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_9ea527d1bf9b45c8d84fdd2bc2af65fce87e14a2d7934f22b448a33f334d8652->leave($__internal_9ea527d1bf9b45c8d84fdd2bc2af65fce87e14a2d7934f22b448a33f334d8652_prof);

        
        $__internal_a3da0194fcd77e77f853d778146842c4c0dc8d0a16b07618894ce42233813863->leave($__internal_a3da0194fcd77e77f853d778146842c4c0dc8d0a16b07618894ce42233813863_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
