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
        $__internal_7b9683293da5769f6a6af8f881c907fed92599f25773cf85ec39095d15132563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b9683293da5769f6a6af8f881c907fed92599f25773cf85ec39095d15132563->enter($__internal_7b9683293da5769f6a6af8f881c907fed92599f25773cf85ec39095d15132563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_58dc484a905d6a6b93fc98158ad9b62586664eb66ad0f162e8dbe130e22dc0e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58dc484a905d6a6b93fc98158ad9b62586664eb66ad0f162e8dbe130e22dc0e5->enter($__internal_58dc484a905d6a6b93fc98158ad9b62586664eb66ad0f162e8dbe130e22dc0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_7b9683293da5769f6a6af8f881c907fed92599f25773cf85ec39095d15132563->leave($__internal_7b9683293da5769f6a6af8f881c907fed92599f25773cf85ec39095d15132563_prof);

        
        $__internal_58dc484a905d6a6b93fc98158ad9b62586664eb66ad0f162e8dbe130e22dc0e5->leave($__internal_58dc484a905d6a6b93fc98158ad9b62586664eb66ad0f162e8dbe130e22dc0e5_prof);

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
