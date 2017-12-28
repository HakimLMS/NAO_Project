<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9fa8b78a6e260dacb851ecab510133fde363855209d3e4b25002f9a770f874e4 extends Twig_Template
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
        $__internal_16b67ae684f7ca755db450cd097dd5fb02587588322a4c6ca6a2d4295ca0c9dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b67ae684f7ca755db450cd097dd5fb02587588322a4c6ca6a2d4295ca0c9dd->enter($__internal_16b67ae684f7ca755db450cd097dd5fb02587588322a4c6ca6a2d4295ca0c9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_b062f5e9a047622f857766045c19345d6bb01ce4136d83605722aa928a26edd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b062f5e9a047622f857766045c19345d6bb01ce4136d83605722aa928a26edd8->enter($__internal_b062f5e9a047622f857766045c19345d6bb01ce4136d83605722aa928a26edd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_16b67ae684f7ca755db450cd097dd5fb02587588322a4c6ca6a2d4295ca0c9dd->leave($__internal_16b67ae684f7ca755db450cd097dd5fb02587588322a4c6ca6a2d4295ca0c9dd_prof);

        
        $__internal_b062f5e9a047622f857766045c19345d6bb01ce4136d83605722aa928a26edd8->leave($__internal_b062f5e9a047622f857766045c19345d6bb01ce4136d83605722aa928a26edd8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
