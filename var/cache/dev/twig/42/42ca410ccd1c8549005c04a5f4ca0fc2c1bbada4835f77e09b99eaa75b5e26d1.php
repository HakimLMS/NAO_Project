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
        $__internal_c282324692e86615ac7a7a376128dafe5f3a8321bccc77c854a176720156b46c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c282324692e86615ac7a7a376128dafe5f3a8321bccc77c854a176720156b46c->enter($__internal_c282324692e86615ac7a7a376128dafe5f3a8321bccc77c854a176720156b46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_44cb31331cdc3763142f52c7fb312b6a64ef61bedd2cdc92d3d8e9b7828a031d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44cb31331cdc3763142f52c7fb312b6a64ef61bedd2cdc92d3d8e9b7828a031d->enter($__internal_44cb31331cdc3763142f52c7fb312b6a64ef61bedd2cdc92d3d8e9b7828a031d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_c282324692e86615ac7a7a376128dafe5f3a8321bccc77c854a176720156b46c->leave($__internal_c282324692e86615ac7a7a376128dafe5f3a8321bccc77c854a176720156b46c_prof);

        
        $__internal_44cb31331cdc3763142f52c7fb312b6a64ef61bedd2cdc92d3d8e9b7828a031d->leave($__internal_44cb31331cdc3763142f52c7fb312b6a64ef61bedd2cdc92d3d8e9b7828a031d_prof);

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
", "@Twig/Exception/exception.css.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
