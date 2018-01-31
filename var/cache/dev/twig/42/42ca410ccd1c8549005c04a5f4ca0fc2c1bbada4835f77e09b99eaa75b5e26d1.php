<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_dc81cb26d4c2ba9e707485ded88921598052ac84d16164c46724e61bd68d90bc extends Twig_Template
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
        $__internal_fc0a388ffe48ffe9598fc96a12bceeab2d7eb653e2fdc147061fd2b281d0ab7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc0a388ffe48ffe9598fc96a12bceeab2d7eb653e2fdc147061fd2b281d0ab7d->enter($__internal_fc0a388ffe48ffe9598fc96a12bceeab2d7eb653e2fdc147061fd2b281d0ab7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_f26e289c0a6e6ce974640f962ee756e7529eede2a3e514b6a2fbdf6791ad5432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26e289c0a6e6ce974640f962ee756e7529eede2a3e514b6a2fbdf6791ad5432->enter($__internal_f26e289c0a6e6ce974640f962ee756e7529eede2a3e514b6a2fbdf6791ad5432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_fc0a388ffe48ffe9598fc96a12bceeab2d7eb653e2fdc147061fd2b281d0ab7d->leave($__internal_fc0a388ffe48ffe9598fc96a12bceeab2d7eb653e2fdc147061fd2b281d0ab7d_prof);

        
        $__internal_f26e289c0a6e6ce974640f962ee756e7529eede2a3e514b6a2fbdf6791ad5432->leave($__internal_f26e289c0a6e6ce974640f962ee756e7529eede2a3e514b6a2fbdf6791ad5432_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
