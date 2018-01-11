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
        $__internal_abcd7c3bbdc904b077b3ddf82ce7aa66104dfdadfac63b8eb2eecb3de0b81ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abcd7c3bbdc904b077b3ddf82ce7aa66104dfdadfac63b8eb2eecb3de0b81ba1->enter($__internal_abcd7c3bbdc904b077b3ddf82ce7aa66104dfdadfac63b8eb2eecb3de0b81ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_82a2ffbe1b7c9024b44bef6517d6898bc16206a26c82ab40561a746c496c6503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a2ffbe1b7c9024b44bef6517d6898bc16206a26c82ab40561a746c496c6503->enter($__internal_82a2ffbe1b7c9024b44bef6517d6898bc16206a26c82ab40561a746c496c6503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_abcd7c3bbdc904b077b3ddf82ce7aa66104dfdadfac63b8eb2eecb3de0b81ba1->leave($__internal_abcd7c3bbdc904b077b3ddf82ce7aa66104dfdadfac63b8eb2eecb3de0b81ba1_prof);

        
        $__internal_82a2ffbe1b7c9024b44bef6517d6898bc16206a26c82ab40561a746c496c6503->leave($__internal_82a2ffbe1b7c9024b44bef6517d6898bc16206a26c82ab40561a746c496c6503_prof);

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
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
