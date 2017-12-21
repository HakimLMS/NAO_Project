<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_8acba2dea11fddb382f2708cd3e10a41cc1f28b6e0c042a0e0b21f80acc85ae8 extends Twig_Template
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
        $__internal_d8a9ebeb1e26712323911730840c368009c7ed57d3aebd8971e2ac51e59b6cbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a9ebeb1e26712323911730840c368009c7ed57d3aebd8971e2ac51e59b6cbf->enter($__internal_d8a9ebeb1e26712323911730840c368009c7ed57d3aebd8971e2ac51e59b6cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_fd3e209606f60251c1f1a64271ab6d95544ef0dca936b2ffef395ce75ee31655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3e209606f60251c1f1a64271ab6d95544ef0dca936b2ffef395ce75ee31655->enter($__internal_fd3e209606f60251c1f1a64271ab6d95544ef0dca936b2ffef395ce75ee31655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_d8a9ebeb1e26712323911730840c368009c7ed57d3aebd8971e2ac51e59b6cbf->leave($__internal_d8a9ebeb1e26712323911730840c368009c7ed57d3aebd8971e2ac51e59b6cbf_prof);

        
        $__internal_fd3e209606f60251c1f1a64271ab6d95544ef0dca936b2ffef395ce75ee31655->leave($__internal_fd3e209606f60251c1f1a64271ab6d95544ef0dca936b2ffef395ce75ee31655_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
