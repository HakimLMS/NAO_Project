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
        $__internal_74a2ac4489f2bf736de438abd926ef9d20ef06f917fabd8e7ad229d6a0783157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74a2ac4489f2bf736de438abd926ef9d20ef06f917fabd8e7ad229d6a0783157->enter($__internal_74a2ac4489f2bf736de438abd926ef9d20ef06f917fabd8e7ad229d6a0783157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8143c373cd5bc664f76b7c437143d84ded59ac8011c13ad34b7030ec78e51dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8143c373cd5bc664f76b7c437143d84ded59ac8011c13ad34b7030ec78e51dd1->enter($__internal_8143c373cd5bc664f76b7c437143d84ded59ac8011c13ad34b7030ec78e51dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74a2ac4489f2bf736de438abd926ef9d20ef06f917fabd8e7ad229d6a0783157->leave($__internal_74a2ac4489f2bf736de438abd926ef9d20ef06f917fabd8e7ad229d6a0783157_prof);

        
        $__internal_8143c373cd5bc664f76b7c437143d84ded59ac8011c13ad34b7030ec78e51dd1->leave($__internal_8143c373cd5bc664f76b7c437143d84ded59ac8011c13ad34b7030ec78e51dd1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a9902bb0e59722c4225bfab12abac1868f4b460178fdab1d18f3e8d92cf897cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9902bb0e59722c4225bfab12abac1868f4b460178fdab1d18f3e8d92cf897cf->enter($__internal_a9902bb0e59722c4225bfab12abac1868f4b460178fdab1d18f3e8d92cf897cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_84b5fb476ea047eac6f6074b01d0c0eaac4e70c6462d5a4f0c52790bec0ac53f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b5fb476ea047eac6f6074b01d0c0eaac4e70c6462d5a4f0c52790bec0ac53f->enter($__internal_84b5fb476ea047eac6f6074b01d0c0eaac4e70c6462d5a4f0c52790bec0ac53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_84b5fb476ea047eac6f6074b01d0c0eaac4e70c6462d5a4f0c52790bec0ac53f->leave($__internal_84b5fb476ea047eac6f6074b01d0c0eaac4e70c6462d5a4f0c52790bec0ac53f_prof);

        
        $__internal_a9902bb0e59722c4225bfab12abac1868f4b460178fdab1d18f3e8d92cf897cf->leave($__internal_a9902bb0e59722c4225bfab12abac1868f4b460178fdab1d18f3e8d92cf897cf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6a39d074cde10d699c047bb03a53b8e25475133989ce13c2b53b9d70d4467b2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a39d074cde10d699c047bb03a53b8e25475133989ce13c2b53b9d70d4467b2a->enter($__internal_6a39d074cde10d699c047bb03a53b8e25475133989ce13c2b53b9d70d4467b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3c640fa5590562d738b2689fe1f71f985190a48bab1f9d2a7c96a983e1ea01c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c640fa5590562d738b2689fe1f71f985190a48bab1f9d2a7c96a983e1ea01c7->enter($__internal_3c640fa5590562d738b2689fe1f71f985190a48bab1f9d2a7c96a983e1ea01c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3c640fa5590562d738b2689fe1f71f985190a48bab1f9d2a7c96a983e1ea01c7->leave($__internal_3c640fa5590562d738b2689fe1f71f985190a48bab1f9d2a7c96a983e1ea01c7_prof);

        
        $__internal_6a39d074cde10d699c047bb03a53b8e25475133989ce13c2b53b9d70d4467b2a->leave($__internal_6a39d074cde10d699c047bb03a53b8e25475133989ce13c2b53b9d70d4467b2a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_95c3082754ee0295b508640bbd28fc84900ccc74d3e7a358a91adca274c448d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95c3082754ee0295b508640bbd28fc84900ccc74d3e7a358a91adca274c448d1->enter($__internal_95c3082754ee0295b508640bbd28fc84900ccc74d3e7a358a91adca274c448d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5a1e451c5de5d3c07ae9abb0902bfe1048f4d3728ce89fe6119acf80dbc399a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1e451c5de5d3c07ae9abb0902bfe1048f4d3728ce89fe6119acf80dbc399a9->enter($__internal_5a1e451c5de5d3c07ae9abb0902bfe1048f4d3728ce89fe6119acf80dbc399a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5a1e451c5de5d3c07ae9abb0902bfe1048f4d3728ce89fe6119acf80dbc399a9->leave($__internal_5a1e451c5de5d3c07ae9abb0902bfe1048f4d3728ce89fe6119acf80dbc399a9_prof);

        
        $__internal_95c3082754ee0295b508640bbd28fc84900ccc74d3e7a358a91adca274c448d1->leave($__internal_95c3082754ee0295b508640bbd28fc84900ccc74d3e7a358a91adca274c448d1_prof);

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
