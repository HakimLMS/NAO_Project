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
        $__internal_8539fcdba55c4568cda2d52de8b4ef69cc2b1762d37a268c2d7049c5d8f73ec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8539fcdba55c4568cda2d52de8b4ef69cc2b1762d37a268c2d7049c5d8f73ec0->enter($__internal_8539fcdba55c4568cda2d52de8b4ef69cc2b1762d37a268c2d7049c5d8f73ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_9d85fb0a723414ce32d7b847a0bb31096ad5ac8ff1dfaddf3327786bbe4c9aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d85fb0a723414ce32d7b847a0bb31096ad5ac8ff1dfaddf3327786bbe4c9aa3->enter($__internal_9d85fb0a723414ce32d7b847a0bb31096ad5ac8ff1dfaddf3327786bbe4c9aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8539fcdba55c4568cda2d52de8b4ef69cc2b1762d37a268c2d7049c5d8f73ec0->leave($__internal_8539fcdba55c4568cda2d52de8b4ef69cc2b1762d37a268c2d7049c5d8f73ec0_prof);

        
        $__internal_9d85fb0a723414ce32d7b847a0bb31096ad5ac8ff1dfaddf3327786bbe4c9aa3->leave($__internal_9d85fb0a723414ce32d7b847a0bb31096ad5ac8ff1dfaddf3327786bbe4c9aa3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1b5a3fcf830e0045ea71573004b1e981f2239dcd8b4f72b8cc189cb29bf00a6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b5a3fcf830e0045ea71573004b1e981f2239dcd8b4f72b8cc189cb29bf00a6c->enter($__internal_1b5a3fcf830e0045ea71573004b1e981f2239dcd8b4f72b8cc189cb29bf00a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ac051999d4993a8f60276ca5c09868a7180a4d8ac3d68a5f8eb19f4cf7b531a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac051999d4993a8f60276ca5c09868a7180a4d8ac3d68a5f8eb19f4cf7b531a5->enter($__internal_ac051999d4993a8f60276ca5c09868a7180a4d8ac3d68a5f8eb19f4cf7b531a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ac051999d4993a8f60276ca5c09868a7180a4d8ac3d68a5f8eb19f4cf7b531a5->leave($__internal_ac051999d4993a8f60276ca5c09868a7180a4d8ac3d68a5f8eb19f4cf7b531a5_prof);

        
        $__internal_1b5a3fcf830e0045ea71573004b1e981f2239dcd8b4f72b8cc189cb29bf00a6c->leave($__internal_1b5a3fcf830e0045ea71573004b1e981f2239dcd8b4f72b8cc189cb29bf00a6c_prof);

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
