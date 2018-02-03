<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_c374c45efbeb75ae40b820408e4ffe4e1cbd94b48fd075814324ada0a84d1e09 extends Twig_Template
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
        $__internal_77d27a2359351da81c8082e08e65a25ac4a41247e70de024d657b07d33fbb123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77d27a2359351da81c8082e08e65a25ac4a41247e70de024d657b07d33fbb123->enter($__internal_77d27a2359351da81c8082e08e65a25ac4a41247e70de024d657b07d33fbb123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_d949f33029f321d9c3e1c9d2999abf726684ea6de045f7164d0fd11bfcda4600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d949f33029f321d9c3e1c9d2999abf726684ea6de045f7164d0fd11bfcda4600->enter($__internal_d949f33029f321d9c3e1c9d2999abf726684ea6de045f7164d0fd11bfcda4600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_77d27a2359351da81c8082e08e65a25ac4a41247e70de024d657b07d33fbb123->leave($__internal_77d27a2359351da81c8082e08e65a25ac4a41247e70de024d657b07d33fbb123_prof);

        
        $__internal_d949f33029f321d9c3e1c9d2999abf726684ea6de045f7164d0fd11bfcda4600->leave($__internal_d949f33029f321d9c3e1c9d2999abf726684ea6de045f7164d0fd11bfcda4600_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
