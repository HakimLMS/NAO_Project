<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_6d8cbc6233d89ebd115cd0f5a34dc92f4334a7ed55900c14087ae9bf04c8a9c1 extends Twig_Template
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
        $__internal_2664b1356861e99a938e974ca48388b7cee25789f8bd682c3de581071a34138a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2664b1356861e99a938e974ca48388b7cee25789f8bd682c3de581071a34138a->enter($__internal_2664b1356861e99a938e974ca48388b7cee25789f8bd682c3de581071a34138a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_f09c42274e0ed86a256c08fde22d1420614795507cffa611515a6ce4a5ffd87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09c42274e0ed86a256c08fde22d1420614795507cffa611515a6ce4a5ffd87e->enter($__internal_f09c42274e0ed86a256c08fde22d1420614795507cffa611515a6ce4a5ffd87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_2664b1356861e99a938e974ca48388b7cee25789f8bd682c3de581071a34138a->leave($__internal_2664b1356861e99a938e974ca48388b7cee25789f8bd682c3de581071a34138a_prof);

        
        $__internal_f09c42274e0ed86a256c08fde22d1420614795507cffa611515a6ce4a5ffd87e->leave($__internal_f09c42274e0ed86a256c08fde22d1420614795507cffa611515a6ce4a5ffd87e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
