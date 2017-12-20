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
        $__internal_ab349f176ad804449bb5496cb4453010ba102af0e715ad2b876383408e8a6052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab349f176ad804449bb5496cb4453010ba102af0e715ad2b876383408e8a6052->enter($__internal_ab349f176ad804449bb5496cb4453010ba102af0e715ad2b876383408e8a6052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_16b173b0e9db1e8daa79ddd450b4c4462237e98562a129d41c34c9547437996d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b173b0e9db1e8daa79ddd450b4c4462237e98562a129d41c34c9547437996d->enter($__internal_16b173b0e9db1e8daa79ddd450b4c4462237e98562a129d41c34c9547437996d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab349f176ad804449bb5496cb4453010ba102af0e715ad2b876383408e8a6052->leave($__internal_ab349f176ad804449bb5496cb4453010ba102af0e715ad2b876383408e8a6052_prof);

        
        $__internal_16b173b0e9db1e8daa79ddd450b4c4462237e98562a129d41c34c9547437996d->leave($__internal_16b173b0e9db1e8daa79ddd450b4c4462237e98562a129d41c34c9547437996d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fde5c628a89b585972c5dfe39f3020a08aae19ecae83fd7a58ba6d838aadd9a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fde5c628a89b585972c5dfe39f3020a08aae19ecae83fd7a58ba6d838aadd9a3->enter($__internal_fde5c628a89b585972c5dfe39f3020a08aae19ecae83fd7a58ba6d838aadd9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_17c93d7f612c3397e77a5f6323c09d5da92608fd050f8fb21730cc70fc49dabe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c93d7f612c3397e77a5f6323c09d5da92608fd050f8fb21730cc70fc49dabe->enter($__internal_17c93d7f612c3397e77a5f6323c09d5da92608fd050f8fb21730cc70fc49dabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_17c93d7f612c3397e77a5f6323c09d5da92608fd050f8fb21730cc70fc49dabe->leave($__internal_17c93d7f612c3397e77a5f6323c09d5da92608fd050f8fb21730cc70fc49dabe_prof);

        
        $__internal_fde5c628a89b585972c5dfe39f3020a08aae19ecae83fd7a58ba6d838aadd9a3->leave($__internal_fde5c628a89b585972c5dfe39f3020a08aae19ecae83fd7a58ba6d838aadd9a3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_087db79355fc50c0c575b3f8b2921f7e6e8c9960615e12f6b09b487db449fb57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_087db79355fc50c0c575b3f8b2921f7e6e8c9960615e12f6b09b487db449fb57->enter($__internal_087db79355fc50c0c575b3f8b2921f7e6e8c9960615e12f6b09b487db449fb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ed8027db40a2326830cb4ca5d8902e6259a1fd787b093bc61ac0e61a2ed12cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8027db40a2326830cb4ca5d8902e6259a1fd787b093bc61ac0e61a2ed12cd9->enter($__internal_ed8027db40a2326830cb4ca5d8902e6259a1fd787b093bc61ac0e61a2ed12cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ed8027db40a2326830cb4ca5d8902e6259a1fd787b093bc61ac0e61a2ed12cd9->leave($__internal_ed8027db40a2326830cb4ca5d8902e6259a1fd787b093bc61ac0e61a2ed12cd9_prof);

        
        $__internal_087db79355fc50c0c575b3f8b2921f7e6e8c9960615e12f6b09b487db449fb57->leave($__internal_087db79355fc50c0c575b3f8b2921f7e6e8c9960615e12f6b09b487db449fb57_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f51df9a4673846e0acc70f93d38bf8a8656a5c3881ad7883c459d7665295903f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f51df9a4673846e0acc70f93d38bf8a8656a5c3881ad7883c459d7665295903f->enter($__internal_f51df9a4673846e0acc70f93d38bf8a8656a5c3881ad7883c459d7665295903f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fa34d9bc5c7d1c31c558264396774d7c5585a451b3c6fbb148361fe6fa58eef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa34d9bc5c7d1c31c558264396774d7c5585a451b3c6fbb148361fe6fa58eef6->enter($__internal_fa34d9bc5c7d1c31c558264396774d7c5585a451b3c6fbb148361fe6fa58eef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fa34d9bc5c7d1c31c558264396774d7c5585a451b3c6fbb148361fe6fa58eef6->leave($__internal_fa34d9bc5c7d1c31c558264396774d7c5585a451b3c6fbb148361fe6fa58eef6_prof);

        
        $__internal_f51df9a4673846e0acc70f93d38bf8a8656a5c3881ad7883c459d7665295903f->leave($__internal_f51df9a4673846e0acc70f93d38bf8a8656a5c3881ad7883c459d7665295903f_prof);

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
