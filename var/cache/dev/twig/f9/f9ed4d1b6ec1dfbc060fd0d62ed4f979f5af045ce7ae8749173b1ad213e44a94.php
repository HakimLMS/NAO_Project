<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_16fea8c7a10e961a6bdf5042d9a6dfb9a9f6f4296d80ad37c451ab7809277217 extends Twig_Template
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
        $__internal_2d226082e9653aeaead8b9236aa32a1ea282804b46204f1229d1a0f614e07b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d226082e9653aeaead8b9236aa32a1ea282804b46204f1229d1a0f614e07b62->enter($__internal_2d226082e9653aeaead8b9236aa32a1ea282804b46204f1229d1a0f614e07b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_38fee8b163d8687555e2d0ee457de248d6c599d099bd046e2e0212c5f93405cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38fee8b163d8687555e2d0ee457de248d6c599d099bd046e2e0212c5f93405cf->enter($__internal_38fee8b163d8687555e2d0ee457de248d6c599d099bd046e2e0212c5f93405cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_2d226082e9653aeaead8b9236aa32a1ea282804b46204f1229d1a0f614e07b62->leave($__internal_2d226082e9653aeaead8b9236aa32a1ea282804b46204f1229d1a0f614e07b62_prof);

        
        $__internal_38fee8b163d8687555e2d0ee457de248d6c599d099bd046e2e0212c5f93405cf->leave($__internal_38fee8b163d8687555e2d0ee457de248d6c599d099bd046e2e0212c5f93405cf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
