<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_86c58f2b87a4b63da49ab7b5c2f08fe5e59b7f568ef3799b9212131d9c7f018a extends Twig_Template
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
        $__internal_855a6644252581e48f22a79fd1f5b1f6351cd1d23d9acd98fe689a893edf65cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_855a6644252581e48f22a79fd1f5b1f6351cd1d23d9acd98fe689a893edf65cf->enter($__internal_855a6644252581e48f22a79fd1f5b1f6351cd1d23d9acd98fe689a893edf65cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3d700633f0de1f0eda8654c819cd202f4670fbfa2fa201a894fdd3797a6d5dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d700633f0de1f0eda8654c819cd202f4670fbfa2fa201a894fdd3797a6d5dec->enter($__internal_3d700633f0de1f0eda8654c819cd202f4670fbfa2fa201a894fdd3797a6d5dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_855a6644252581e48f22a79fd1f5b1f6351cd1d23d9acd98fe689a893edf65cf->leave($__internal_855a6644252581e48f22a79fd1f5b1f6351cd1d23d9acd98fe689a893edf65cf_prof);

        
        $__internal_3d700633f0de1f0eda8654c819cd202f4670fbfa2fa201a894fdd3797a6d5dec->leave($__internal_3d700633f0de1f0eda8654c819cd202f4670fbfa2fa201a894fdd3797a6d5dec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_59e7ea648022eddc5fae23bfc552cdafcab7fa1ec2695e823d883d90eb280970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59e7ea648022eddc5fae23bfc552cdafcab7fa1ec2695e823d883d90eb280970->enter($__internal_59e7ea648022eddc5fae23bfc552cdafcab7fa1ec2695e823d883d90eb280970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7f6029c53e99fc2083bf779cdf1f6cc021a091c10a37e818d8734e9e56d5e8fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6029c53e99fc2083bf779cdf1f6cc021a091c10a37e818d8734e9e56d5e8fb->enter($__internal_7f6029c53e99fc2083bf779cdf1f6cc021a091c10a37e818d8734e9e56d5e8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7f6029c53e99fc2083bf779cdf1f6cc021a091c10a37e818d8734e9e56d5e8fb->leave($__internal_7f6029c53e99fc2083bf779cdf1f6cc021a091c10a37e818d8734e9e56d5e8fb_prof);

        
        $__internal_59e7ea648022eddc5fae23bfc552cdafcab7fa1ec2695e823d883d90eb280970->leave($__internal_59e7ea648022eddc5fae23bfc552cdafcab7fa1ec2695e823d883d90eb280970_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_edee484527587f5b427658eaee7e94756c42f6016c8c74509ee8db901d3b4b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edee484527587f5b427658eaee7e94756c42f6016c8c74509ee8db901d3b4b4f->enter($__internal_edee484527587f5b427658eaee7e94756c42f6016c8c74509ee8db901d3b4b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_79942994423186adb62af97a953fedb48878f4ae128efe52430932ef968aba9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79942994423186adb62af97a953fedb48878f4ae128efe52430932ef968aba9e->enter($__internal_79942994423186adb62af97a953fedb48878f4ae128efe52430932ef968aba9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_79942994423186adb62af97a953fedb48878f4ae128efe52430932ef968aba9e->leave($__internal_79942994423186adb62af97a953fedb48878f4ae128efe52430932ef968aba9e_prof);

        
        $__internal_edee484527587f5b427658eaee7e94756c42f6016c8c74509ee8db901d3b4b4f->leave($__internal_edee484527587f5b427658eaee7e94756c42f6016c8c74509ee8db901d3b4b4f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a3b19d2d9402c35ba0496a3b8bbf01e8cb2e8860f71821d326392b4c00e0dd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a3b19d2d9402c35ba0496a3b8bbf01e8cb2e8860f71821d326392b4c00e0dd7->enter($__internal_8a3b19d2d9402c35ba0496a3b8bbf01e8cb2e8860f71821d326392b4c00e0dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_63ebfc415cf98dc7c34755cfe7903c86b5dc72ab4e01195bc0afa90f2d730ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ebfc415cf98dc7c34755cfe7903c86b5dc72ab4e01195bc0afa90f2d730ccc->enter($__internal_63ebfc415cf98dc7c34755cfe7903c86b5dc72ab4e01195bc0afa90f2d730ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_63ebfc415cf98dc7c34755cfe7903c86b5dc72ab4e01195bc0afa90f2d730ccc->leave($__internal_63ebfc415cf98dc7c34755cfe7903c86b5dc72ab4e01195bc0afa90f2d730ccc_prof);

        
        $__internal_8a3b19d2d9402c35ba0496a3b8bbf01e8cb2e8860f71821d326392b4c00e0dd7->leave($__internal_8a3b19d2d9402c35ba0496a3b8bbf01e8cb2e8860f71821d326392b4c00e0dd7_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
