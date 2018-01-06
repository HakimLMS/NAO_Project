<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_9e2e06c6787a6364a0e2d0837d6945c3eb2ad4652b4e0d2dc66f532884e4a683 extends Twig_Template
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
        $__internal_826509f44f4497261b779584e6a576ec498a39648d628747228af46151ae301b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_826509f44f4497261b779584e6a576ec498a39648d628747228af46151ae301b->enter($__internal_826509f44f4497261b779584e6a576ec498a39648d628747228af46151ae301b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_5458418738816d869212da4551031b91bc2f12a2ac5f34dfccd1086fb8c895ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5458418738816d869212da4551031b91bc2f12a2ac5f34dfccd1086fb8c895ce->enter($__internal_5458418738816d869212da4551031b91bc2f12a2ac5f34dfccd1086fb8c895ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_826509f44f4497261b779584e6a576ec498a39648d628747228af46151ae301b->leave($__internal_826509f44f4497261b779584e6a576ec498a39648d628747228af46151ae301b_prof);

        
        $__internal_5458418738816d869212da4551031b91bc2f12a2ac5f34dfccd1086fb8c895ce->leave($__internal_5458418738816d869212da4551031b91bc2f12a2ac5f34dfccd1086fb8c895ce_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
