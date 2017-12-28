<?php

/* @WebProfiler/Collector/events.html.twig */
class __TwigTemplate_ab787b124398e6f78124e3547171bdc6453883814c1122fc1b18033817b31a48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/events.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aada37aae26b983bc0adfb19824bbee2eb26f0b016b8caa89460203b06c3a856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aada37aae26b983bc0adfb19824bbee2eb26f0b016b8caa89460203b06c3a856->enter($__internal_aada37aae26b983bc0adfb19824bbee2eb26f0b016b8caa89460203b06c3a856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        $__internal_6ce33a35f40074fad132b58d0cf4200229f587a046a574aba84774e2e50513e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce33a35f40074fad132b58d0cf4200229f587a046a574aba84774e2e50513e7->enter($__internal_6ce33a35f40074fad132b58d0cf4200229f587a046a574aba84774e2e50513e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aada37aae26b983bc0adfb19824bbee2eb26f0b016b8caa89460203b06c3a856->leave($__internal_aada37aae26b983bc0adfb19824bbee2eb26f0b016b8caa89460203b06c3a856_prof);

        
        $__internal_6ce33a35f40074fad132b58d0cf4200229f587a046a574aba84774e2e50513e7->leave($__internal_6ce33a35f40074fad132b58d0cf4200229f587a046a574aba84774e2e50513e7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f95e6a11f044083d317dd7cbbdbf76711486f405b8547baf299b1431de23f63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f95e6a11f044083d317dd7cbbdbf76711486f405b8547baf299b1431de23f63->enter($__internal_2f95e6a11f044083d317dd7cbbdbf76711486f405b8547baf299b1431de23f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_821124c73e54e8f805abd128ff14a4127af0d21c69b2210f14c2c0609ede8250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_821124c73e54e8f805abd128ff14a4127af0d21c69b2210f14c2c0609ede8250->enter($__internal_821124c73e54e8f805abd128ff14a4127af0d21c69b2210f14c2c0609ede8250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/event.svg");
        echo "</span>
    <strong>Events</strong>
</span>
";
        
        $__internal_821124c73e54e8f805abd128ff14a4127af0d21c69b2210f14c2c0609ede8250->leave($__internal_821124c73e54e8f805abd128ff14a4127af0d21c69b2210f14c2c0609ede8250_prof);

        
        $__internal_2f95e6a11f044083d317dd7cbbdbf76711486f405b8547baf299b1431de23f63->leave($__internal_2f95e6a11f044083d317dd7cbbdbf76711486f405b8547baf299b1431de23f63_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a80e8741b8cf4a351dd6e2abe084dbc6a41564d442f9e719f6fc2aa91f8c9e52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a80e8741b8cf4a351dd6e2abe084dbc6a41564d442f9e719f6fc2aa91f8c9e52->enter($__internal_a80e8741b8cf4a351dd6e2abe084dbc6a41564d442f9e719f6fc2aa91f8c9e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_474d69c7eb8dcd0445bfeac48644923391d507e62e89f36535faea3d05da1278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474d69c7eb8dcd0445bfeac48644923391d507e62e89f36535faea3d05da1278->enter($__internal_474d69c7eb8dcd0445bfeac48644923391d507e62e89f36535faea3d05da1278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    <h2>Event Dispatcher</h2>

    ";
        // line 15
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 15, $this->getSourceContext()); })()), "calledlisteners", array()))) {
            // line 16
            echo "        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 20
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">";
            // line 22
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 22, $this->getSourceContext()); })()), "calledlisteners", array())), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 25
            echo $context["helper"]->macro_render_table(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 25, $this->getSourceContext()); })()), "calledlisteners", array()));
            echo "
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 30, $this->getSourceContext()); })()), "notcalledlisteners", array())), "html", null, true);
            echo "</span></h3>
                <div class=\"tab-content\">
                    ";
            // line 32
            if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 32, $this->getSourceContext()); })()), "notcalledlisteners", array()))) {
                // line 33
                echo "                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    ";
            } else {
                // line 44
                echo "                        ";
                echo $context["helper"]->macro_render_table(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 44, $this->getSourceContext()); })()), "notcalledlisteners", array()));
                echo "
                    ";
            }
            // line 46
            echo "                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_474d69c7eb8dcd0445bfeac48644923391d507e62e89f36535faea3d05da1278->leave($__internal_474d69c7eb8dcd0445bfeac48644923391d507e62e89f36535faea3d05da1278_prof);

        
        $__internal_a80e8741b8cf4a351dd6e2abe084dbc6a41564d442f9e719f6fc2aa91f8c9e52->leave($__internal_a80e8741b8cf4a351dd6e2abe084dbc6a41564d442f9e719f6fc2aa91f8c9e52_prof);

    }

    // line 52
    public function macro_render_table($__listeners__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "listeners" => $__listeners__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_34f3c3bd71855e5019cfc5556b2d66cc388ab316312d09d4a63d2e711359b8fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_34f3c3bd71855e5019cfc5556b2d66cc388ab316312d09d4a63d2e711359b8fc->enter($__internal_34f3c3bd71855e5019cfc5556b2d66cc388ab316312d09d4a63d2e711359b8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_c305bbd05310880b82a9f690b334a386bfc4723d533b813e0f5b7b8c5db0d6b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c305bbd05310880b82a9f690b334a386bfc4723d533b813e0f5b7b8c5db0d6b8->enter($__internal_c305bbd05310880b82a9f690b334a386bfc4723d533b813e0f5b7b8c5db0d6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 53
            echo "    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        ";
            // line 61
            $context["previous_event"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_first($this->env, (isset($context["listeners"]) || array_key_exists("listeners", $context) ? $context["listeners"] : (function () { throw new Twig_Error_Runtime('Variable "listeners" does not exist.', 61, $this->getSourceContext()); })())), "event", array());
            // line 62
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeners"]) || array_key_exists("listeners", $context) ? $context["listeners"] : (function () { throw new Twig_Error_Runtime('Variable "listeners" does not exist.', 62, $this->getSourceContext()); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 63
                echo "            ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array()) || (twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "event", array()) != (isset($context["previous_event"]) || array_key_exists("previous_event", $context) ? $context["previous_event"] : (function () { throw new Twig_Error_Runtime('Variable "previous_event" does not exist.', 63, $this->getSourceContext()); })())))) {
                    // line 64
                    echo "                ";
                    if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                        // line 65
                        echo "                    </tbody>
                ";
                    }
                    // line 67
                    echo "
                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "event", array()), "html", null, true);
                    echo "</th>
                    </tr>

                ";
                    // line 73
                    $context["previous_event"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "event", array());
                    // line 74
                    echo "            ";
                }
                // line 75
                echo "
            <tr>
                <td class=\"text-right\">";
                // line 77
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "priority", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "priority", array()), "-")) : ("-")), "html", null, true);
                echo "</td>
                <td class=\"font-normal\">";
                // line 78
                echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpData($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "stub", array()));
                echo "</td>
            </tr>

            ";
                // line 81
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    // line 82
                    echo "                </tbody>
            ";
                }
                // line 84
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "    </table>
";
            
            $__internal_c305bbd05310880b82a9f690b334a386bfc4723d533b813e0f5b7b8c5db0d6b8->leave($__internal_c305bbd05310880b82a9f690b334a386bfc4723d533b813e0f5b7b8c5db0d6b8_prof);

            
            $__internal_34f3c3bd71855e5019cfc5556b2d66cc388ab316312d09d4a63d2e711359b8fc->leave($__internal_34f3c3bd71855e5019cfc5556b2d66cc388ab316312d09d4a63d2e711359b8fc_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 85,  243 => 84,  239 => 82,  237 => 81,  231 => 78,  227 => 77,  223 => 75,  220 => 74,  218 => 73,  212 => 70,  207 => 67,  203 => 65,  200 => 64,  197 => 63,  179 => 62,  177 => 61,  167 => 53,  149 => 52,  135 => 46,  129 => 44,  116 => 33,  114 => 32,  109 => 30,  101 => 25,  95 => 22,  91 => 20,  85 => 16,  83 => 15,  79 => 13,  70 => 12,  56 => 7,  53 => 6,  44 => 5,  34 => 1,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/event.svg') }}</span>
    <strong>Events</strong>
</span>
{% endblock %}

{% block panel %}
    <h2>Event Dispatcher</h2>

    {% if collector.calledlisteners is empty %}
        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    {% else %}
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">{{ collector.calledlisteners|length }}</span></h3>

                <div class=\"tab-content\">
                    {{ helper.render_table(collector.calledlisteners) }}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">{{ collector.notcalledlisteners|length }}</span></h3>
                <div class=\"tab-content\">
                    {% if collector.notcalledlisteners is empty %}
                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    {% else %}
                        {{ helper.render_table(collector.notcalledlisteners) }}
                    {% endif %}
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% macro render_table(listeners) %}
    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        {% set previous_event = (listeners|first).event %}
        {% for listener in listeners %}
            {% if loop.first or listener.event != previous_event %}
                {% if not loop.first %}
                    </tbody>
                {% endif %}

                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">{{ listener.event }}</th>
                    </tr>

                {% set previous_event = listener.event %}
            {% endif %}

            <tr>
                <td class=\"text-right\">{{ listener.priority|default('-') }}</td>
                <td class=\"font-normal\">{{ profiler_dump(listener.stub) }}</td>
            </tr>

            {% if loop.last %}
                </tbody>
            {% endif %}
        {% endfor %}
    </table>
{% endmacro %}
", "@WebProfiler/Collector/events.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\events.html.twig");
    }
}
