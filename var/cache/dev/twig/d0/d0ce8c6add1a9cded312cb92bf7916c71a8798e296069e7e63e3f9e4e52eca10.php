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
        $__internal_d4d2210908451c172190e20ca375751301a7e76fa597effb66360b0866a37edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d2210908451c172190e20ca375751301a7e76fa597effb66360b0866a37edf->enter($__internal_d4d2210908451c172190e20ca375751301a7e76fa597effb66360b0866a37edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_7160319cc3fcd320502473aa47aba6e2f38132bd62cc502a043a03595f5daf1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7160319cc3fcd320502473aa47aba6e2f38132bd62cc502a043a03595f5daf1a->enter($__internal_7160319cc3fcd320502473aa47aba6e2f38132bd62cc502a043a03595f5daf1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d4d2210908451c172190e20ca375751301a7e76fa597effb66360b0866a37edf->leave($__internal_d4d2210908451c172190e20ca375751301a7e76fa597effb66360b0866a37edf_prof);

        
        $__internal_7160319cc3fcd320502473aa47aba6e2f38132bd62cc502a043a03595f5daf1a->leave($__internal_7160319cc3fcd320502473aa47aba6e2f38132bd62cc502a043a03595f5daf1a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a3495a905afd9608e03e85674da55f53881d7fa0516b5175de2c3a2b478d4c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3495a905afd9608e03e85674da55f53881d7fa0516b5175de2c3a2b478d4c0->enter($__internal_6a3495a905afd9608e03e85674da55f53881d7fa0516b5175de2c3a2b478d4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d9d43faa9e11c94cce94b6a1ff01955db6e89d7c06019ef1a15cb0b63178118e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d43faa9e11c94cce94b6a1ff01955db6e89d7c06019ef1a15cb0b63178118e->enter($__internal_d9d43faa9e11c94cce94b6a1ff01955db6e89d7c06019ef1a15cb0b63178118e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d9d43faa9e11c94cce94b6a1ff01955db6e89d7c06019ef1a15cb0b63178118e->leave($__internal_d9d43faa9e11c94cce94b6a1ff01955db6e89d7c06019ef1a15cb0b63178118e_prof);

        
        $__internal_6a3495a905afd9608e03e85674da55f53881d7fa0516b5175de2c3a2b478d4c0->leave($__internal_6a3495a905afd9608e03e85674da55f53881d7fa0516b5175de2c3a2b478d4c0_prof);

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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
