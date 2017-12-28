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
        $__internal_bf89facf8c44614c2e9e8727468431ed631ffb5a83fc3e27940c827f9581b027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf89facf8c44614c2e9e8727468431ed631ffb5a83fc3e27940c827f9581b027->enter($__internal_bf89facf8c44614c2e9e8727468431ed631ffb5a83fc3e27940c827f9581b027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_883c9c4d05f59ac90e5e272c17daadca98a57e52329a0b16f2f1c29a374afd40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_883c9c4d05f59ac90e5e272c17daadca98a57e52329a0b16f2f1c29a374afd40->enter($__internal_883c9c4d05f59ac90e5e272c17daadca98a57e52329a0b16f2f1c29a374afd40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_bf89facf8c44614c2e9e8727468431ed631ffb5a83fc3e27940c827f9581b027->leave($__internal_bf89facf8c44614c2e9e8727468431ed631ffb5a83fc3e27940c827f9581b027_prof);

        
        $__internal_883c9c4d05f59ac90e5e272c17daadca98a57e52329a0b16f2f1c29a374afd40->leave($__internal_883c9c4d05f59ac90e5e272c17daadca98a57e52329a0b16f2f1c29a374afd40_prof);

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
