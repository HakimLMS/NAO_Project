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
        $__internal_b2e14225cbee74b8e9908c3d0828ab01da901559dd2b44d429ef89b3bf4e3008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e14225cbee74b8e9908c3d0828ab01da901559dd2b44d429ef89b3bf4e3008->enter($__internal_b2e14225cbee74b8e9908c3d0828ab01da901559dd2b44d429ef89b3bf4e3008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_3b41813ab196444ec3769b58e84ffa9216e7ce2fbed879704d319cbc778c2dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b41813ab196444ec3769b58e84ffa9216e7ce2fbed879704d319cbc778c2dd2->enter($__internal_3b41813ab196444ec3769b58e84ffa9216e7ce2fbed879704d319cbc778c2dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_b2e14225cbee74b8e9908c3d0828ab01da901559dd2b44d429ef89b3bf4e3008->leave($__internal_b2e14225cbee74b8e9908c3d0828ab01da901559dd2b44d429ef89b3bf4e3008_prof);

        
        $__internal_3b41813ab196444ec3769b58e84ffa9216e7ce2fbed879704d319cbc778c2dd2->leave($__internal_3b41813ab196444ec3769b58e84ffa9216e7ce2fbed879704d319cbc778c2dd2_prof);

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
