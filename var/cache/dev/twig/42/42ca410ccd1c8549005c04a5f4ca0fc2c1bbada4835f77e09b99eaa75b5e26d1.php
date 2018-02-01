<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_dc81cb26d4c2ba9e707485ded88921598052ac84d16164c46724e61bd68d90bc extends Twig_Template
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
        $__internal_fee198ca73201c1d9787d8300ef4701d6861178fcd477f5d43b3603e8a5f454c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee198ca73201c1d9787d8300ef4701d6861178fcd477f5d43b3603e8a5f454c->enter($__internal_fee198ca73201c1d9787d8300ef4701d6861178fcd477f5d43b3603e8a5f454c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_6d732ecba09d5e6a91726ff1c2df6f1050802d575c551b412b502aabc48bdfce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d732ecba09d5e6a91726ff1c2df6f1050802d575c551b412b502aabc48bdfce->enter($__internal_6d732ecba09d5e6a91726ff1c2df6f1050802d575c551b412b502aabc48bdfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_fee198ca73201c1d9787d8300ef4701d6861178fcd477f5d43b3603e8a5f454c->leave($__internal_fee198ca73201c1d9787d8300ef4701d6861178fcd477f5d43b3603e8a5f454c_prof);

        
        $__internal_6d732ecba09d5e6a91726ff1c2df6f1050802d575c551b412b502aabc48bdfce->leave($__internal_6d732ecba09d5e6a91726ff1c2df6f1050802d575c551b412b502aabc48bdfce_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
