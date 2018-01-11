<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_d1fe3ee444453d5b7d6cf990657935fe67fed9ee07b2a5a51bfa6cba315f1a64 extends Twig_Template
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
        $__internal_92c45ab465047e0d5903dcc2e811f0b9d2895e3399ecd7a7280b51daa714f513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92c45ab465047e0d5903dcc2e811f0b9d2895e3399ecd7a7280b51daa714f513->enter($__internal_92c45ab465047e0d5903dcc2e811f0b9d2895e3399ecd7a7280b51daa714f513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_071f600bd20a1f6dc9030d557d2a3247cabf1887aeaa683b22b2449b01d8b444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_071f600bd20a1f6dc9030d557d2a3247cabf1887aeaa683b22b2449b01d8b444->enter($__internal_071f600bd20a1f6dc9030d557d2a3247cabf1887aeaa683b22b2449b01d8b444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_92c45ab465047e0d5903dcc2e811f0b9d2895e3399ecd7a7280b51daa714f513->leave($__internal_92c45ab465047e0d5903dcc2e811f0b9d2895e3399ecd7a7280b51daa714f513_prof);

        
        $__internal_071f600bd20a1f6dc9030d557d2a3247cabf1887aeaa683b22b2449b01d8b444->leave($__internal_071f600bd20a1f6dc9030d557d2a3247cabf1887aeaa683b22b2449b01d8b444_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
