<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_a0717ef71b2022fa91d6de17c1a11c8286fd615279e88c8b09218bfe8063dd49 extends Twig_Template
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
        $__internal_f6ef28966f3a3fdf5628afcd2393e6d06ae8e199547c9b14aa88739faa01e8e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ef28966f3a3fdf5628afcd2393e6d06ae8e199547c9b14aa88739faa01e8e4->enter($__internal_f6ef28966f3a3fdf5628afcd2393e6d06ae8e199547c9b14aa88739faa01e8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_4cc2e71ebc4a1a3e9f9daae093cc479e2d2fd8289fd3d6a9070f97d34f158076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc2e71ebc4a1a3e9f9daae093cc479e2d2fd8289fd3d6a9070f97d34f158076->enter($__internal_4cc2e71ebc4a1a3e9f9daae093cc479e2d2fd8289fd3d6a9070f97d34f158076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_f6ef28966f3a3fdf5628afcd2393e6d06ae8e199547c9b14aa88739faa01e8e4->leave($__internal_f6ef28966f3a3fdf5628afcd2393e6d06ae8e199547c9b14aa88739faa01e8e4_prof);

        
        $__internal_4cc2e71ebc4a1a3e9f9daae093cc479e2d2fd8289fd3d6a9070f97d34f158076->leave($__internal_4cc2e71ebc4a1a3e9f9daae093cc479e2d2fd8289fd3d6a9070f97d34f158076_prof);

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
", "@WebProfiler/Collector/exception.css.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
