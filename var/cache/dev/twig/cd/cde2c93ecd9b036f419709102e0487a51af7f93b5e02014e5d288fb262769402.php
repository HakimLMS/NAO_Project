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
        $__internal_6c2db0f32653eb31cdb9c9e96c99b9ebb701201b54a4790e0aa77398ea8740ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2db0f32653eb31cdb9c9e96c99b9ebb701201b54a4790e0aa77398ea8740ec->enter($__internal_6c2db0f32653eb31cdb9c9e96c99b9ebb701201b54a4790e0aa77398ea8740ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_5767d6f21100143ae4df9d101a821444663661d5895013732f66fc6b34208db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5767d6f21100143ae4df9d101a821444663661d5895013732f66fc6b34208db5->enter($__internal_5767d6f21100143ae4df9d101a821444663661d5895013732f66fc6b34208db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_6c2db0f32653eb31cdb9c9e96c99b9ebb701201b54a4790e0aa77398ea8740ec->leave($__internal_6c2db0f32653eb31cdb9c9e96c99b9ebb701201b54a4790e0aa77398ea8740ec_prof);

        
        $__internal_5767d6f21100143ae4df9d101a821444663661d5895013732f66fc6b34208db5->leave($__internal_5767d6f21100143ae4df9d101a821444663661d5895013732f66fc6b34208db5_prof);

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
