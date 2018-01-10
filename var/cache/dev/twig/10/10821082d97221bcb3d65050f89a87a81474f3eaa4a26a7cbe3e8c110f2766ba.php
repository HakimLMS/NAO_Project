<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_3d3e33c98dfe2a53b2372ad981736fe5bc331237544b29735a3fd9cc500d9162 extends Twig_Template
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
        $__internal_e1225b8d4540a6e9903ffb4ece63a530046629a170392c380366829a5f148e7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1225b8d4540a6e9903ffb4ece63a530046629a170392c380366829a5f148e7f->enter($__internal_e1225b8d4540a6e9903ffb4ece63a530046629a170392c380366829a5f148e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_b88074985bd934846b0119df81b4e253907e03e05345ef80afadcb4ea6943849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b88074985bd934846b0119df81b4e253907e03e05345ef80afadcb4ea6943849->enter($__internal_b88074985bd934846b0119df81b4e253907e03e05345ef80afadcb4ea6943849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_e1225b8d4540a6e9903ffb4ece63a530046629a170392c380366829a5f148e7f->leave($__internal_e1225b8d4540a6e9903ffb4ece63a530046629a170392c380366829a5f148e7f_prof);

        
        $__internal_b88074985bd934846b0119df81b4e253907e03e05345ef80afadcb4ea6943849->leave($__internal_b88074985bd934846b0119df81b4e253907e03e05345ef80afadcb4ea6943849_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
