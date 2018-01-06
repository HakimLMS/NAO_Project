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
        $__internal_16ea49e0f7fb713ad41001035cab13cbaa41f7411e5801903e64ee4501dcf8f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16ea49e0f7fb713ad41001035cab13cbaa41f7411e5801903e64ee4501dcf8f9->enter($__internal_16ea49e0f7fb713ad41001035cab13cbaa41f7411e5801903e64ee4501dcf8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_199debfb777bf97c0266877c2d14dad1b46be3f044279daaea87353e47228935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_199debfb777bf97c0266877c2d14dad1b46be3f044279daaea87353e47228935->enter($__internal_199debfb777bf97c0266877c2d14dad1b46be3f044279daaea87353e47228935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_16ea49e0f7fb713ad41001035cab13cbaa41f7411e5801903e64ee4501dcf8f9->leave($__internal_16ea49e0f7fb713ad41001035cab13cbaa41f7411e5801903e64ee4501dcf8f9_prof);

        
        $__internal_199debfb777bf97c0266877c2d14dad1b46be3f044279daaea87353e47228935->leave($__internal_199debfb777bf97c0266877c2d14dad1b46be3f044279daaea87353e47228935_prof);

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
