<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_57e679a2924dcaee34c665843bd051d090e83ea933a2043f42eef360fbe93462 extends Twig_Template
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
        $__internal_1a23792415372f4aeca77914898825f692cc692bf797a29344e81d634f5d59b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a23792415372f4aeca77914898825f692cc692bf797a29344e81d634f5d59b1->enter($__internal_1a23792415372f4aeca77914898825f692cc692bf797a29344e81d634f5d59b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_e6530a3e22a85032df3e33b069125839607dce0ef4a01bcad3dd28f547e70fc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6530a3e22a85032df3e33b069125839607dce0ef4a01bcad3dd28f547e70fc8->enter($__internal_e6530a3e22a85032df3e33b069125839607dce0ef4a01bcad3dd28f547e70fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_1a23792415372f4aeca77914898825f692cc692bf797a29344e81d634f5d59b1->leave($__internal_1a23792415372f4aeca77914898825f692cc692bf797a29344e81d634f5d59b1_prof);

        
        $__internal_e6530a3e22a85032df3e33b069125839607dce0ef4a01bcad3dd28f547e70fc8->leave($__internal_e6530a3e22a85032df3e33b069125839607dce0ef4a01bcad3dd28f547e70fc8_prof);

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
", "@Twig/Exception/traces.xml.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
