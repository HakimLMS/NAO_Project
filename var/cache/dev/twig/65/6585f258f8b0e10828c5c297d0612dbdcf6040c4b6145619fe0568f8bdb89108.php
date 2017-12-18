<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_520a545ebffce750005400596beef0d3ae5ec73e78ff5669256fc96ad546d6d4 extends Twig_Template
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
        $__internal_82878f23cf34cde1b53965e0c2b8b07568287b8b6db6bb7247897374af36f470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82878f23cf34cde1b53965e0c2b8b07568287b8b6db6bb7247897374af36f470->enter($__internal_82878f23cf34cde1b53965e0c2b8b07568287b8b6db6bb7247897374af36f470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_250856c4bef73930db0f253c4bcb9d4c026704c5dc729b7589f272e1ff7dae1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250856c4bef73930db0f253c4bcb9d4c026704c5dc729b7589f272e1ff7dae1e->enter($__internal_250856c4bef73930db0f253c4bcb9d4c026704c5dc729b7589f272e1ff7dae1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_82878f23cf34cde1b53965e0c2b8b07568287b8b6db6bb7247897374af36f470->leave($__internal_82878f23cf34cde1b53965e0c2b8b07568287b8b6db6bb7247897374af36f470_prof);

        
        $__internal_250856c4bef73930db0f253c4bcb9d4c026704c5dc729b7589f272e1ff7dae1e->leave($__internal_250856c4bef73930db0f253c4bcb9d4c026704c5dc729b7589f272e1ff7dae1e_prof);

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
