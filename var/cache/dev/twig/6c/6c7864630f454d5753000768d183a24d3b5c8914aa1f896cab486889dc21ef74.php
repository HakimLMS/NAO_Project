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
        $__internal_4fb3acac80d94cb51996dc9fece74df2361b96db35f34b8e43e070ae04f6e7b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fb3acac80d94cb51996dc9fece74df2361b96db35f34b8e43e070ae04f6e7b9->enter($__internal_4fb3acac80d94cb51996dc9fece74df2361b96db35f34b8e43e070ae04f6e7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_4e7e9869427c68d4ae53f535f736589c9f12882d757291c8fd31312e2ec3f8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7e9869427c68d4ae53f535f736589c9f12882d757291c8fd31312e2ec3f8ae->enter($__internal_4e7e9869427c68d4ae53f535f736589c9f12882d757291c8fd31312e2ec3f8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_4fb3acac80d94cb51996dc9fece74df2361b96db35f34b8e43e070ae04f6e7b9->leave($__internal_4fb3acac80d94cb51996dc9fece74df2361b96db35f34b8e43e070ae04f6e7b9_prof);

        
        $__internal_4e7e9869427c68d4ae53f535f736589c9f12882d757291c8fd31312e2ec3f8ae->leave($__internal_4e7e9869427c68d4ae53f535f736589c9f12882d757291c8fd31312e2ec3f8ae_prof);

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
