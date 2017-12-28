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
        $__internal_48d76e3802f41cd7a746042e25c8bc71b26ef764a02a74e878f34748337533d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d76e3802f41cd7a746042e25c8bc71b26ef764a02a74e878f34748337533d4->enter($__internal_48d76e3802f41cd7a746042e25c8bc71b26ef764a02a74e878f34748337533d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_24a0c660828e585c43a1096673c908aaaef7b90ab3ceaaa6beffa62e5eea88c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a0c660828e585c43a1096673c908aaaef7b90ab3ceaaa6beffa62e5eea88c9->enter($__internal_24a0c660828e585c43a1096673c908aaaef7b90ab3ceaaa6beffa62e5eea88c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_48d76e3802f41cd7a746042e25c8bc71b26ef764a02a74e878f34748337533d4->leave($__internal_48d76e3802f41cd7a746042e25c8bc71b26ef764a02a74e878f34748337533d4_prof);

        
        $__internal_24a0c660828e585c43a1096673c908aaaef7b90ab3ceaaa6beffa62e5eea88c9->leave($__internal_24a0c660828e585c43a1096673c908aaaef7b90ab3ceaaa6beffa62e5eea88c9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1a77791431315e3c757d53277a20d42a1530de7b32286018c003ab42a5b32798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a77791431315e3c757d53277a20d42a1530de7b32286018c003ab42a5b32798->enter($__internal_1a77791431315e3c757d53277a20d42a1530de7b32286018c003ab42a5b32798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7b51553a4bd9472b0c39e347a8fb3db7272740644e61f8f1f357e4bbb7cd7aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b51553a4bd9472b0c39e347a8fb3db7272740644e61f8f1f357e4bbb7cd7aef->enter($__internal_7b51553a4bd9472b0c39e347a8fb3db7272740644e61f8f1f357e4bbb7cd7aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7b51553a4bd9472b0c39e347a8fb3db7272740644e61f8f1f357e4bbb7cd7aef->leave($__internal_7b51553a4bd9472b0c39e347a8fb3db7272740644e61f8f1f357e4bbb7cd7aef_prof);

        
        $__internal_1a77791431315e3c757d53277a20d42a1530de7b32286018c003ab42a5b32798->leave($__internal_1a77791431315e3c757d53277a20d42a1530de7b32286018c003ab42a5b32798_prof);

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
