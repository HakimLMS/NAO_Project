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
        $__internal_ba6529ea6be71730452174b3b22b824031f9b47f58075aaa670bffc335548a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba6529ea6be71730452174b3b22b824031f9b47f58075aaa670bffc335548a1c->enter($__internal_ba6529ea6be71730452174b3b22b824031f9b47f58075aaa670bffc335548a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_3711592bdcc704138d4df842ff5263adf271bacb1ff9c56e8441ea3080d39ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3711592bdcc704138d4df842ff5263adf271bacb1ff9c56e8441ea3080d39ccc->enter($__internal_3711592bdcc704138d4df842ff5263adf271bacb1ff9c56e8441ea3080d39ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_ba6529ea6be71730452174b3b22b824031f9b47f58075aaa670bffc335548a1c->leave($__internal_ba6529ea6be71730452174b3b22b824031f9b47f58075aaa670bffc335548a1c_prof);

        
        $__internal_3711592bdcc704138d4df842ff5263adf271bacb1ff9c56e8441ea3080d39ccc->leave($__internal_3711592bdcc704138d4df842ff5263adf271bacb1ff9c56e8441ea3080d39ccc_prof);

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
