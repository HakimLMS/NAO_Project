<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_cfaa23cb50c6c2748ef38f528e6db30e459fe929898fba7de173a750bc2157f7 extends Twig_Template
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
        $__internal_36ba70e7a3ea8d17c7c6afe09d31efd8525a1fb3029ec1a65d755dc52e1173db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36ba70e7a3ea8d17c7c6afe09d31efd8525a1fb3029ec1a65d755dc52e1173db->enter($__internal_36ba70e7a3ea8d17c7c6afe09d31efd8525a1fb3029ec1a65d755dc52e1173db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_0b2a38fcf9493cd4847e48da578101778449244ac2837e20f328b46b5807bdde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b2a38fcf9493cd4847e48da578101778449244ac2837e20f328b46b5807bdde->enter($__internal_0b2a38fcf9493cd4847e48da578101778449244ac2837e20f328b46b5807bdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_36ba70e7a3ea8d17c7c6afe09d31efd8525a1fb3029ec1a65d755dc52e1173db->leave($__internal_36ba70e7a3ea8d17c7c6afe09d31efd8525a1fb3029ec1a65d755dc52e1173db_prof);

        
        $__internal_0b2a38fcf9493cd4847e48da578101778449244ac2837e20f328b46b5807bdde->leave($__internal_0b2a38fcf9493cd4847e48da578101778449244ac2837e20f328b46b5807bdde_prof);

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
", "@Twig/Exception/traces.txt.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
