<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_4b04693d21d1d7c94ccef85af49161a537f117327e5fcbb56ad1585693af0178 extends Twig_Template
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
        $__internal_6242bcff2cfe950a1619c9e93dc31c9fe04dd314ff9152dc73e06ac498e607fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6242bcff2cfe950a1619c9e93dc31c9fe04dd314ff9152dc73e06ac498e607fb->enter($__internal_6242bcff2cfe950a1619c9e93dc31c9fe04dd314ff9152dc73e06ac498e607fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_35ac61242053d9ec8d68c46a23ac5815eb22e4d7119b0dc49e53c8163321df62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35ac61242053d9ec8d68c46a23ac5815eb22e4d7119b0dc49e53c8163321df62->enter($__internal_35ac61242053d9ec8d68c46a23ac5815eb22e4d7119b0dc49e53c8163321df62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_6242bcff2cfe950a1619c9e93dc31c9fe04dd314ff9152dc73e06ac498e607fb->leave($__internal_6242bcff2cfe950a1619c9e93dc31c9fe04dd314ff9152dc73e06ac498e607fb_prof);

        
        $__internal_35ac61242053d9ec8d68c46a23ac5815eb22e4d7119b0dc49e53c8163321df62->leave($__internal_35ac61242053d9ec8d68c46a23ac5815eb22e4d7119b0dc49e53c8163321df62_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
