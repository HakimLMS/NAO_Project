<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_ef41c30844e72005200ada40688efa58ce746171c08e20764c2ac15ae93a2602 extends Twig_Template
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
<<<<<<< HEAD
        $__internal_90fa1f583af137979c6bbe3e083c5d664fd857994b0906e12a275ff38e3a5c6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90fa1f583af137979c6bbe3e083c5d664fd857994b0906e12a275ff38e3a5c6b->enter($__internal_90fa1f583af137979c6bbe3e083c5d664fd857994b0906e12a275ff38e3a5c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_18e9d3b1358ece755249edbf62e3c7634f04e089cf28a0eb4499c817b7254bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e9d3b1358ece755249edbf62e3c7634f04e089cf28a0eb4499c817b7254bb2->enter($__internal_18e9d3b1358ece755249edbf62e3c7634f04e089cf28a0eb4499c817b7254bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));
=======
        $__internal_4a8c9e123c3eae1add054c4b1e1e944729bf2ac063867b2767250fedb630057d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a8c9e123c3eae1add054c4b1e1e944729bf2ac063867b2767250fedb630057d->enter($__internal_4a8c9e123c3eae1add054c4b1e1e944729bf2ac063867b2767250fedb630057d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_07e9747499b5bb750a75764f4d8765cce74b5fb9889d68c6fe7acbf9cf476aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e9747499b5bb750a75764f4d8765cce74b5fb9889d68c6fe7acbf9cf476aea->enter($__internal_07e9747499b5bb750a75764f4d8765cce74b5fb9889d68c6fe7acbf9cf476aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));
>>>>>>> donmanager

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            echo "<pre class=\"stacktrace\">
";
            // line 3
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 3, $this->getSourceContext()); })()), "class", array());
            echo ":
";
            // line 4
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 4, $this->getSourceContext()); })()), "message", array()))) {
                // line 5
                echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 5, $this->getSourceContext()); })()), "message", array());
                echo "
";
            }
            // line 7
            echo "
";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 9
                echo "  ";
                echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "</pre>
";
        }
        
<<<<<<< HEAD
        $__internal_90fa1f583af137979c6bbe3e083c5d664fd857994b0906e12a275ff38e3a5c6b->leave($__internal_90fa1f583af137979c6bbe3e083c5d664fd857994b0906e12a275ff38e3a5c6b_prof);

        
        $__internal_18e9d3b1358ece755249edbf62e3c7634f04e089cf28a0eb4499c817b7254bb2->leave($__internal_18e9d3b1358ece755249edbf62e3c7634f04e089cf28a0eb4499c817b7254bb2_prof);
=======
        $__internal_4a8c9e123c3eae1add054c4b1e1e944729bf2ac063867b2767250fedb630057d->leave($__internal_4a8c9e123c3eae1add054c4b1e1e944729bf2ac063867b2767250fedb630057d_prof);

        
        $__internal_07e9747499b5bb750a75764f4d8765cce74b5fb9889d68c6fe7acbf9cf476aea->leave($__internal_07e9747499b5bb750a75764f4d8765cce74b5fb9889d68c6fe7acbf9cf476aea_prof);
>>>>>>> donmanager

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  48 => 9,  44 => 8,  41 => 7,  36 => 5,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
<pre class=\"stacktrace\">
{{ exception.class }}:
{% if exception.message is not empty %}
    {{- exception.message }}
{% endif %}

{% for trace in exception.trace %}
  {{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}
{% endfor %}
</pre>
{% endif %}
<<<<<<< HEAD
", "@Twig/Exception/traces.txt.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\traces.txt.twig");
=======
", "@Twig/Exception/traces.txt.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\traces.txt.twig");
>>>>>>> donmanager
    }
}
