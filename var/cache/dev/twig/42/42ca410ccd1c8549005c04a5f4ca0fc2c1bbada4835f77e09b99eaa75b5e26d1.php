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
        $__internal_b148503d5e2fc2e4cdb4dbffd00ce8075791f65a07e02db55ddbcd3d5e8ba35b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b148503d5e2fc2e4cdb4dbffd00ce8075791f65a07e02db55ddbcd3d5e8ba35b->enter($__internal_b148503d5e2fc2e4cdb4dbffd00ce8075791f65a07e02db55ddbcd3d5e8ba35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_9a8f5d82c30a2de7bd6cdde325fee6fff356cfb08ba2cad04bc1aa34b213376e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8f5d82c30a2de7bd6cdde325fee6fff356cfb08ba2cad04bc1aa34b213376e->enter($__internal_9a8f5d82c30a2de7bd6cdde325fee6fff356cfb08ba2cad04bc1aa34b213376e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_b148503d5e2fc2e4cdb4dbffd00ce8075791f65a07e02db55ddbcd3d5e8ba35b->leave($__internal_b148503d5e2fc2e4cdb4dbffd00ce8075791f65a07e02db55ddbcd3d5e8ba35b_prof);

        
        $__internal_9a8f5d82c30a2de7bd6cdde325fee6fff356cfb08ba2cad04bc1aa34b213376e->leave($__internal_9a8f5d82c30a2de7bd6cdde325fee6fff356cfb08ba2cad04bc1aa34b213376e_prof);

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
