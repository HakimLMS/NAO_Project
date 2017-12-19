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
        $__internal_c3c3fc07891d884f5824866d3c8494c36cbec6fa0f59e16b12e5609095ede37b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3c3fc07891d884f5824866d3c8494c36cbec6fa0f59e16b12e5609095ede37b->enter($__internal_c3c3fc07891d884f5824866d3c8494c36cbec6fa0f59e16b12e5609095ede37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_6b8d0ffe3425c79b8e7bca6b2c9510acbe5fa51ffa20c4716e69c27b0f870644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8d0ffe3425c79b8e7bca6b2c9510acbe5fa51ffa20c4716e69c27b0f870644->enter($__internal_6b8d0ffe3425c79b8e7bca6b2c9510acbe5fa51ffa20c4716e69c27b0f870644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_c3c3fc07891d884f5824866d3c8494c36cbec6fa0f59e16b12e5609095ede37b->leave($__internal_c3c3fc07891d884f5824866d3c8494c36cbec6fa0f59e16b12e5609095ede37b_prof);

        
        $__internal_6b8d0ffe3425c79b8e7bca6b2c9510acbe5fa51ffa20c4716e69c27b0f870644->leave($__internal_6b8d0ffe3425c79b8e7bca6b2c9510acbe5fa51ffa20c4716e69c27b0f870644_prof);

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
