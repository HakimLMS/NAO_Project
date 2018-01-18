<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_db91d81ab9081c4429041a833ecd86daf6b1e001efe8fe51148218b4ff202974 extends Twig_Template
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
        $__internal_a939bd2bb5c364250d245aaf9c793ef741055137e9113e56c5f1344917e571d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a939bd2bb5c364250d245aaf9c793ef741055137e9113e56c5f1344917e571d1->enter($__internal_a939bd2bb5c364250d245aaf9c793ef741055137e9113e56c5f1344917e571d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_9417ad9862b92db09e0486bbcd0b3310ed1ed148181453262205ad24185886e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9417ad9862b92db09e0486bbcd0b3310ed1ed148181453262205ad24185886e8->enter($__internal_9417ad9862b92db09e0486bbcd0b3310ed1ed148181453262205ad24185886e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_a939bd2bb5c364250d245aaf9c793ef741055137e9113e56c5f1344917e571d1->leave($__internal_a939bd2bb5c364250d245aaf9c793ef741055137e9113e56c5f1344917e571d1_prof);

        
        $__internal_9417ad9862b92db09e0486bbcd0b3310ed1ed148181453262205ad24185886e8->leave($__internal_9417ad9862b92db09e0486bbcd0b3310ed1ed148181453262205ad24185886e8_prof);

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
