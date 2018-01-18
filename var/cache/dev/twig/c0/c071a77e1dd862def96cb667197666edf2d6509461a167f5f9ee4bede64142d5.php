<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_4b04693d21d1d7c94ccef85af49161a537f117327e5fcbb56ad1585693af0178 extends Twig_Template
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
        $__internal_22dd7b90f922cb170254f6e8eee8621cf8dfc0a76f01af190f4de5165d296aea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22dd7b90f922cb170254f6e8eee8621cf8dfc0a76f01af190f4de5165d296aea->enter($__internal_22dd7b90f922cb170254f6e8eee8621cf8dfc0a76f01af190f4de5165d296aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_abe71016cd1c87151cdb7b93a58e4528f2acfc79f1cc703c5ed7ce66d3d42ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe71016cd1c87151cdb7b93a58e4528f2acfc79f1cc703c5ed7ce66d3d42ab0->enter($__internal_abe71016cd1c87151cdb7b93a58e4528f2acfc79f1cc703c5ed7ce66d3d42ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_22dd7b90f922cb170254f6e8eee8621cf8dfc0a76f01af190f4de5165d296aea->leave($__internal_22dd7b90f922cb170254f6e8eee8621cf8dfc0a76f01af190f4de5165d296aea_prof);

        
        $__internal_abe71016cd1c87151cdb7b93a58e4528f2acfc79f1cc703c5ed7ce66d3d42ab0->leave($__internal_abe71016cd1c87151cdb7b93a58e4528f2acfc79f1cc703c5ed7ce66d3d42ab0_prof);

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
