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
        $__internal_de5c85beac4ddb444284a56573b0e4a46f10e41c59ea0d958752e57e661c8513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de5c85beac4ddb444284a56573b0e4a46f10e41c59ea0d958752e57e661c8513->enter($__internal_de5c85beac4ddb444284a56573b0e4a46f10e41c59ea0d958752e57e661c8513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_fdfdb80db7bc05fc20e3f08010225792e95a259d4dc68966e42dbd8cc1c516d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdfdb80db7bc05fc20e3f08010225792e95a259d4dc68966e42dbd8cc1c516d7->enter($__internal_fdfdb80db7bc05fc20e3f08010225792e95a259d4dc68966e42dbd8cc1c516d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_de5c85beac4ddb444284a56573b0e4a46f10e41c59ea0d958752e57e661c8513->leave($__internal_de5c85beac4ddb444284a56573b0e4a46f10e41c59ea0d958752e57e661c8513_prof);

        
        $__internal_fdfdb80db7bc05fc20e3f08010225792e95a259d4dc68966e42dbd8cc1c516d7->leave($__internal_fdfdb80db7bc05fc20e3f08010225792e95a259d4dc68966e42dbd8cc1c516d7_prof);

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
