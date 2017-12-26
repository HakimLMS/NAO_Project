<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f502cefbda9e840e612f29dd28d6109b499d7039bc4398da1a20fe9687e58abc extends Twig_Template
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
        $__internal_aee6ae68e7ce3f68ea107fa180336e676e812d01ee5b4de0f78b5205d2b6a552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aee6ae68e7ce3f68ea107fa180336e676e812d01ee5b4de0f78b5205d2b6a552->enter($__internal_aee6ae68e7ce3f68ea107fa180336e676e812d01ee5b4de0f78b5205d2b6a552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_429a2a57635041fa88ad0dde60d4388e4d1432a1033efa6a00abed42182cc44d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429a2a57635041fa88ad0dde60d4388e4d1432a1033efa6a00abed42182cc44d->enter($__internal_429a2a57635041fa88ad0dde60d4388e4d1432a1033efa6a00abed42182cc44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_aee6ae68e7ce3f68ea107fa180336e676e812d01ee5b4de0f78b5205d2b6a552->leave($__internal_aee6ae68e7ce3f68ea107fa180336e676e812d01ee5b4de0f78b5205d2b6a552_prof);

        
        $__internal_429a2a57635041fa88ad0dde60d4388e4d1432a1033efa6a00abed42182cc44d->leave($__internal_429a2a57635041fa88ad0dde60d4388e4d1432a1033efa6a00abed42182cc44d_prof);

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
", "@Twig/Exception/error.css.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
