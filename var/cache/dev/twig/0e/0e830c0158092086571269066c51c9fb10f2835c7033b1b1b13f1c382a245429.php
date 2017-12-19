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
        $__internal_dda14e59ed85364baf457127cb95c32693d75f5aee9211356e05beac32172e5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda14e59ed85364baf457127cb95c32693d75f5aee9211356e05beac32172e5b->enter($__internal_dda14e59ed85364baf457127cb95c32693d75f5aee9211356e05beac32172e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_4a173d50fbbfae33337d70124f56efbd3dd6f6e0fb6caf1123f404225eb7b3b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a173d50fbbfae33337d70124f56efbd3dd6f6e0fb6caf1123f404225eb7b3b2->enter($__internal_4a173d50fbbfae33337d70124f56efbd3dd6f6e0fb6caf1123f404225eb7b3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_dda14e59ed85364baf457127cb95c32693d75f5aee9211356e05beac32172e5b->leave($__internal_dda14e59ed85364baf457127cb95c32693d75f5aee9211356e05beac32172e5b_prof);

        
        $__internal_4a173d50fbbfae33337d70124f56efbd3dd6f6e0fb6caf1123f404225eb7b3b2->leave($__internal_4a173d50fbbfae33337d70124f56efbd3dd6f6e0fb6caf1123f404225eb7b3b2_prof);

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
", "@Twig/Exception/error.atom.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
