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
        $__internal_bb77cb740f1fe63ec5274da7b3d8ec43ea695544e676168a9a1137b1fd93e726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb77cb740f1fe63ec5274da7b3d8ec43ea695544e676168a9a1137b1fd93e726->enter($__internal_bb77cb740f1fe63ec5274da7b3d8ec43ea695544e676168a9a1137b1fd93e726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_2e98d20af505e95e252007927cfd7d1a7b771b8e7cf0ac2cdcfbb80c286be1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e98d20af505e95e252007927cfd7d1a7b771b8e7cf0ac2cdcfbb80c286be1db->enter($__internal_2e98d20af505e95e252007927cfd7d1a7b771b8e7cf0ac2cdcfbb80c286be1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_bb77cb740f1fe63ec5274da7b3d8ec43ea695544e676168a9a1137b1fd93e726->leave($__internal_bb77cb740f1fe63ec5274da7b3d8ec43ea695544e676168a9a1137b1fd93e726_prof);

        
        $__internal_2e98d20af505e95e252007927cfd7d1a7b771b8e7cf0ac2cdcfbb80c286be1db->leave($__internal_2e98d20af505e95e252007927cfd7d1a7b771b8e7cf0ac2cdcfbb80c286be1db_prof);

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
