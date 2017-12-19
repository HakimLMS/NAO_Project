<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_aeb988ac9096f13e727f6298c9be98dabda16ffa23a2bfa256d5fadd455103a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f56c196e55d2cc550969caaaa10febd8476bdc2776ba1ba875a242232e29204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f56c196e55d2cc550969caaaa10febd8476bdc2776ba1ba875a242232e29204->enter($__internal_3f56c196e55d2cc550969caaaa10febd8476bdc2776ba1ba875a242232e29204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_565c0a5a323ed94954708c16271683aace9726f3c7ff74edf250e2a28c392c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565c0a5a323ed94954708c16271683aace9726f3c7ff74edf250e2a28c392c19->enter($__internal_565c0a5a323ed94954708c16271683aace9726f3c7ff74edf250e2a28c392c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3f56c196e55d2cc550969caaaa10febd8476bdc2776ba1ba875a242232e29204->leave($__internal_3f56c196e55d2cc550969caaaa10febd8476bdc2776ba1ba875a242232e29204_prof);

        
        $__internal_565c0a5a323ed94954708c16271683aace9726f3c7ff74edf250e2a28c392c19->leave($__internal_565c0a5a323ed94954708c16271683aace9726f3c7ff74edf250e2a28c392c19_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_842b012dac7009b2c63000cc9f3552c9539014027e876ea23c50b1333b99d375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_842b012dac7009b2c63000cc9f3552c9539014027e876ea23c50b1333b99d375->enter($__internal_842b012dac7009b2c63000cc9f3552c9539014027e876ea23c50b1333b99d375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a04470ef6a952c669013cc5ec6622bf3437b02c3abc0fb3541f1d9205a1e9348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04470ef6a952c669013cc5ec6622bf3437b02c3abc0fb3541f1d9205a1e9348->enter($__internal_a04470ef6a952c669013cc5ec6622bf3437b02c3abc0fb3541f1d9205a1e9348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a04470ef6a952c669013cc5ec6622bf3437b02c3abc0fb3541f1d9205a1e9348->leave($__internal_a04470ef6a952c669013cc5ec6622bf3437b02c3abc0fb3541f1d9205a1e9348_prof);

        
        $__internal_842b012dac7009b2c63000cc9f3552c9539014027e876ea23c50b1333b99d375->leave($__internal_842b012dac7009b2c63000cc9f3552c9539014027e876ea23c50b1333b99d375_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
