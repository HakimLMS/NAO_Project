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
        $__internal_8b30e91032cec9450d28af0f3291f15078accc20a13824e2c629b4c03870e07a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b30e91032cec9450d28af0f3291f15078accc20a13824e2c629b4c03870e07a->enter($__internal_8b30e91032cec9450d28af0f3291f15078accc20a13824e2c629b4c03870e07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_55a0071e6a1e0ce6e52d9e2bafe263144854787695d75c41c8c7f8a2868926ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a0071e6a1e0ce6e52d9e2bafe263144854787695d75c41c8c7f8a2868926ff->enter($__internal_55a0071e6a1e0ce6e52d9e2bafe263144854787695d75c41c8c7f8a2868926ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8b30e91032cec9450d28af0f3291f15078accc20a13824e2c629b4c03870e07a->leave($__internal_8b30e91032cec9450d28af0f3291f15078accc20a13824e2c629b4c03870e07a_prof);

        
        $__internal_55a0071e6a1e0ce6e52d9e2bafe263144854787695d75c41c8c7f8a2868926ff->leave($__internal_55a0071e6a1e0ce6e52d9e2bafe263144854787695d75c41c8c7f8a2868926ff_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4409c2eb828406d78e0d6f25d13b110537bdb486ce726b9ca03ed8d85d5cdbd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4409c2eb828406d78e0d6f25d13b110537bdb486ce726b9ca03ed8d85d5cdbd4->enter($__internal_4409c2eb828406d78e0d6f25d13b110537bdb486ce726b9ca03ed8d85d5cdbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_10bcde016cf40061d23dc260cf687738400b7192b729868b66c36c0132de6030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10bcde016cf40061d23dc260cf687738400b7192b729868b66c36c0132de6030->enter($__internal_10bcde016cf40061d23dc260cf687738400b7192b729868b66c36c0132de6030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_10bcde016cf40061d23dc260cf687738400b7192b729868b66c36c0132de6030->leave($__internal_10bcde016cf40061d23dc260cf687738400b7192b729868b66c36c0132de6030_prof);

        
        $__internal_4409c2eb828406d78e0d6f25d13b110537bdb486ce726b9ca03ed8d85d5cdbd4->leave($__internal_4409c2eb828406d78e0d6f25d13b110537bdb486ce726b9ca03ed8d85d5cdbd4_prof);

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
