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
        $__internal_56817ba020186f5677a81c70c46a9a979042d585b5f15903f53bfa10f8bc8d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56817ba020186f5677a81c70c46a9a979042d585b5f15903f53bfa10f8bc8d23->enter($__internal_56817ba020186f5677a81c70c46a9a979042d585b5f15903f53bfa10f8bc8d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_ce20bb61b7f6feb798c4aae634f551fc9a246a5071fbf870d5d15aa950ef5301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce20bb61b7f6feb798c4aae634f551fc9a246a5071fbf870d5d15aa950ef5301->enter($__internal_ce20bb61b7f6feb798c4aae634f551fc9a246a5071fbf870d5d15aa950ef5301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_56817ba020186f5677a81c70c46a9a979042d585b5f15903f53bfa10f8bc8d23->leave($__internal_56817ba020186f5677a81c70c46a9a979042d585b5f15903f53bfa10f8bc8d23_prof);

        
        $__internal_ce20bb61b7f6feb798c4aae634f551fc9a246a5071fbf870d5d15aa950ef5301->leave($__internal_ce20bb61b7f6feb798c4aae634f551fc9a246a5071fbf870d5d15aa950ef5301_prof);

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
