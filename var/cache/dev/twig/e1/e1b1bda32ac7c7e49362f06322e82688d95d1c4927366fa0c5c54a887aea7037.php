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
        $__internal_1b4995aab50aee60cb06aa265c3da14150718b7fdafb06eb8a77062864347be2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b4995aab50aee60cb06aa265c3da14150718b7fdafb06eb8a77062864347be2->enter($__internal_1b4995aab50aee60cb06aa265c3da14150718b7fdafb06eb8a77062864347be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_6c699309d131f8459f74bc76e30f8cd7ba5b420b36baca702dbe13a5a0a79724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c699309d131f8459f74bc76e30f8cd7ba5b420b36baca702dbe13a5a0a79724->enter($__internal_6c699309d131f8459f74bc76e30f8cd7ba5b420b36baca702dbe13a5a0a79724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_1b4995aab50aee60cb06aa265c3da14150718b7fdafb06eb8a77062864347be2->leave($__internal_1b4995aab50aee60cb06aa265c3da14150718b7fdafb06eb8a77062864347be2_prof);

        
        $__internal_6c699309d131f8459f74bc76e30f8cd7ba5b420b36baca702dbe13a5a0a79724->leave($__internal_6c699309d131f8459f74bc76e30f8cd7ba5b420b36baca702dbe13a5a0a79724_prof);

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
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
