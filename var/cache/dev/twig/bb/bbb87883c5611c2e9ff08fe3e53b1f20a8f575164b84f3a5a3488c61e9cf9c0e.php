<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_435b95d5d34f5ce02cb6c03fdbf32385a4e1236fe75b4d805804cf51ee6dff52 extends Twig_Template
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
        $__internal_1b044cf6b828c5c739fbffbb949079a1ad7ef44353ac2b2867d64612678b768b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b044cf6b828c5c739fbffbb949079a1ad7ef44353ac2b2867d64612678b768b->enter($__internal_1b044cf6b828c5c739fbffbb949079a1ad7ef44353ac2b2867d64612678b768b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_037a8b02c7cc4a40169c1b6f012c9bfd58d849701d675c586c9974a758aaea5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037a8b02c7cc4a40169c1b6f012c9bfd58d849701d675c586c9974a758aaea5b->enter($__internal_037a8b02c7cc4a40169c1b6f012c9bfd58d849701d675c586c9974a758aaea5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_1b044cf6b828c5c739fbffbb949079a1ad7ef44353ac2b2867d64612678b768b->leave($__internal_1b044cf6b828c5c739fbffbb949079a1ad7ef44353ac2b2867d64612678b768b_prof);

        
        $__internal_037a8b02c7cc4a40169c1b6f012c9bfd58d849701d675c586c9974a758aaea5b->leave($__internal_037a8b02c7cc4a40169c1b6f012c9bfd58d849701d675c586c9974a758aaea5b_prof);

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
", "@Twig/Exception/error.xml.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
