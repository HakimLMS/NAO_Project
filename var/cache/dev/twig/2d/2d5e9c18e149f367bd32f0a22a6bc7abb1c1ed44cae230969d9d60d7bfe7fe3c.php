<?php

/* @Twig/Exception/exception.xml.twig */
class __TwigTemplate_a44661efa47f2ffc5f00d3c0f45dcd302adf1e22ab28d7df5a5db20463ecea01 extends Twig_Template
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
        $__internal_5a8e3d49d790b3d2d2fbf25f235b16defacf6a140f097a6cfed3fdd5c320c83b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a8e3d49d790b3d2d2fbf25f235b16defacf6a140f097a6cfed3fdd5c320c83b->enter($__internal_5a8e3d49d790b3d2d2fbf25f235b16defacf6a140f097a6cfed3fdd5c320c83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.xml.twig"));

        $__internal_17cbb08fde9f45e2998e68d0061466613065e9083d737363995551ee2e72c028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17cbb08fde9f45e2998e68d0061466613065e9083d737363995551ee2e72c028->enter($__internal_17cbb08fde9f45e2998e68d0061466613065e9083d737363995551ee2e72c028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 4, $this->getSourceContext()); })()), "toarray", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 5
            echo "    <exception class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "class", array()), "html", null, true);
            echo "\" message=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "message", array()), "html", null, true);
            echo "\">
";
            // line 6
            echo twig_include($this->env, $context, "@Twig/Exception/traces.xml.twig", array("exception" => $context["e"]), false);
            echo "
    </exception>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</error>
";
        
        $__internal_5a8e3d49d790b3d2d2fbf25f235b16defacf6a140f097a6cfed3fdd5c320c83b->leave($__internal_5a8e3d49d790b3d2d2fbf25f235b16defacf6a140f097a6cfed3fdd5c320c83b_prof);

        
        $__internal_17cbb08fde9f45e2998e68d0061466613065e9083d737363995551ee2e72c028->leave($__internal_17cbb08fde9f45e2998e68d0061466613065e9083d737363995551ee2e72c028_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  48 => 6,  41 => 5,  37 => 4,  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\">
{% for e in exception.toarray %}
    <exception class=\"{{ e.class }}\" message=\"{{ e.message }}\">
{{ include('@Twig/Exception/traces.xml.twig', { exception: e }, with_context = false) }}
    </exception>
{% endfor %}
</error>
", "@Twig/Exception/exception.xml.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.xml.twig");
    }
}
