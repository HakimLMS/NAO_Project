<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_aa51162854aea0157d9154daa17624b1f8e492959880e0993ad7712f034b30ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0fb1678bd632fc6274c73cf95233c0b059927e40f3c7fcd1c824b6863ca8820a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb1678bd632fc6274c73cf95233c0b059927e40f3c7fcd1c824b6863ca8820a->enter($__internal_0fb1678bd632fc6274c73cf95233c0b059927e40f3c7fcd1c824b6863ca8820a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e8b207ae420a625d1d341c67b4d2146e9a8ef81e4a4e23c146cfbf028c1dad1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b207ae420a625d1d341c67b4d2146e9a8ef81e4a4e23c146cfbf028c1dad1f->enter($__internal_e8b207ae420a625d1d341c67b4d2146e9a8ef81e4a4e23c146cfbf028c1dad1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fb1678bd632fc6274c73cf95233c0b059927e40f3c7fcd1c824b6863ca8820a->leave($__internal_0fb1678bd632fc6274c73cf95233c0b059927e40f3c7fcd1c824b6863ca8820a_prof);

        
        $__internal_e8b207ae420a625d1d341c67b4d2146e9a8ef81e4a4e23c146cfbf028c1dad1f->leave($__internal_e8b207ae420a625d1d341c67b4d2146e9a8ef81e4a4e23c146cfbf028c1dad1f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a17747847fe0eb9881aad3a1f1a9d9a19b97ffbcf5e0742239d6cc8bc2d0c014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a17747847fe0eb9881aad3a1f1a9d9a19b97ffbcf5e0742239d6cc8bc2d0c014->enter($__internal_a17747847fe0eb9881aad3a1f1a9d9a19b97ffbcf5e0742239d6cc8bc2d0c014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9a8bdcb4eae5aef982e07ba7a5c4fcefa8087aa3cad01993fe4c6acf7569574d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8bdcb4eae5aef982e07ba7a5c4fcefa8087aa3cad01993fe4c6acf7569574d->enter($__internal_9a8bdcb4eae5aef982e07ba7a5c4fcefa8087aa3cad01993fe4c6acf7569574d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9a8bdcb4eae5aef982e07ba7a5c4fcefa8087aa3cad01993fe4c6acf7569574d->leave($__internal_9a8bdcb4eae5aef982e07ba7a5c4fcefa8087aa3cad01993fe4c6acf7569574d_prof);

        
        $__internal_a17747847fe0eb9881aad3a1f1a9d9a19b97ffbcf5e0742239d6cc8bc2d0c014->leave($__internal_a17747847fe0eb9881aad3a1f1a9d9a19b97ffbcf5e0742239d6cc8bc2d0c014_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_66664d2dd25de0584e7915975944777a70bd8ce60a35f6dc2253dd97294bcd51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66664d2dd25de0584e7915975944777a70bd8ce60a35f6dc2253dd97294bcd51->enter($__internal_66664d2dd25de0584e7915975944777a70bd8ce60a35f6dc2253dd97294bcd51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dce63f043cc928f363167bbf66d87abe28bfb4781571b74da7d238335c84ba46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce63f043cc928f363167bbf66d87abe28bfb4781571b74da7d238335c84ba46->enter($__internal_dce63f043cc928f363167bbf66d87abe28bfb4781571b74da7d238335c84ba46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_dce63f043cc928f363167bbf66d87abe28bfb4781571b74da7d238335c84ba46->leave($__internal_dce63f043cc928f363167bbf66d87abe28bfb4781571b74da7d238335c84ba46_prof);

        
        $__internal_66664d2dd25de0584e7915975944777a70bd8ce60a35f6dc2253dd97294bcd51->leave($__internal_66664d2dd25de0584e7915975944777a70bd8ce60a35f6dc2253dd97294bcd51_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f06aebcf1eb03b47e071f8a79cfcbb92626cda30bad19395ff620ebb830bc7d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f06aebcf1eb03b47e071f8a79cfcbb92626cda30bad19395ff620ebb830bc7d3->enter($__internal_f06aebcf1eb03b47e071f8a79cfcbb92626cda30bad19395ff620ebb830bc7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2846f2a11f87a97feddf38f17cdc421d21a6bca0c43f8e2a2c5a24521577fa39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2846f2a11f87a97feddf38f17cdc421d21a6bca0c43f8e2a2c5a24521577fa39->enter($__internal_2846f2a11f87a97feddf38f17cdc421d21a6bca0c43f8e2a2c5a24521577fa39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_2846f2a11f87a97feddf38f17cdc421d21a6bca0c43f8e2a2c5a24521577fa39->leave($__internal_2846f2a11f87a97feddf38f17cdc421d21a6bca0c43f8e2a2c5a24521577fa39_prof);

        
        $__internal_f06aebcf1eb03b47e071f8a79cfcbb92626cda30bad19395ff620ebb830bc7d3->leave($__internal_f06aebcf1eb03b47e071f8a79cfcbb92626cda30bad19395ff620ebb830bc7d3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
