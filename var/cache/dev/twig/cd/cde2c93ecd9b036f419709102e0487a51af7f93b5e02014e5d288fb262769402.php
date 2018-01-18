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
        $__internal_82911236ee7f0667a6f25916a848f4119b2cb977ede01a4474c9136a355697a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82911236ee7f0667a6f25916a848f4119b2cb977ede01a4474c9136a355697a5->enter($__internal_82911236ee7f0667a6f25916a848f4119b2cb977ede01a4474c9136a355697a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_3002324415712fd98b7946692de7e5f3a2000db4579caf34c0e1cbb6284b0aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3002324415712fd98b7946692de7e5f3a2000db4579caf34c0e1cbb6284b0aba->enter($__internal_3002324415712fd98b7946692de7e5f3a2000db4579caf34c0e1cbb6284b0aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_82911236ee7f0667a6f25916a848f4119b2cb977ede01a4474c9136a355697a5->leave($__internal_82911236ee7f0667a6f25916a848f4119b2cb977ede01a4474c9136a355697a5_prof);

        
        $__internal_3002324415712fd98b7946692de7e5f3a2000db4579caf34c0e1cbb6284b0aba->leave($__internal_3002324415712fd98b7946692de7e5f3a2000db4579caf34c0e1cbb6284b0aba_prof);

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
