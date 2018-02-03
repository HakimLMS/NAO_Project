<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f502cefbda9e840e612f29dd28d6109b499d7039bc4398da1a20fe9687e58abc extends Twig_Template
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
        $__internal_6095139a7a5723b4de2a3dc0cbe0a96394cd78d48c9b9155b3166e4305308119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6095139a7a5723b4de2a3dc0cbe0a96394cd78d48c9b9155b3166e4305308119->enter($__internal_6095139a7a5723b4de2a3dc0cbe0a96394cd78d48c9b9155b3166e4305308119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_6cb33eb6b52d488145f728ece43c05728bdcf8bc242ca2e1d2e9f412c11a690e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb33eb6b52d488145f728ece43c05728bdcf8bc242ca2e1d2e9f412c11a690e->enter($__internal_6cb33eb6b52d488145f728ece43c05728bdcf8bc242ca2e1d2e9f412c11a690e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_6095139a7a5723b4de2a3dc0cbe0a96394cd78d48c9b9155b3166e4305308119->leave($__internal_6095139a7a5723b4de2a3dc0cbe0a96394cd78d48c9b9155b3166e4305308119_prof);

        
        $__internal_6cb33eb6b52d488145f728ece43c05728bdcf8bc242ca2e1d2e9f412c11a690e->leave($__internal_6cb33eb6b52d488145f728ece43c05728bdcf8bc242ca2e1d2e9f412c11a690e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
