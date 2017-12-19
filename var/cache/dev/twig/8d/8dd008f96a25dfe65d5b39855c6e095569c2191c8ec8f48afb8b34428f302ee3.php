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
        $__internal_1c600692c8445ff8c7612eb658265bc16083dc3f42fb706c962b1cb05e7192c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c600692c8445ff8c7612eb658265bc16083dc3f42fb706c962b1cb05e7192c7->enter($__internal_1c600692c8445ff8c7612eb658265bc16083dc3f42fb706c962b1cb05e7192c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2c55e6ccd2d21cd0947228cf07bfc6abd6a9fe6722345f45911369d02c88dcde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c55e6ccd2d21cd0947228cf07bfc6abd6a9fe6722345f45911369d02c88dcde->enter($__internal_2c55e6ccd2d21cd0947228cf07bfc6abd6a9fe6722345f45911369d02c88dcde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c600692c8445ff8c7612eb658265bc16083dc3f42fb706c962b1cb05e7192c7->leave($__internal_1c600692c8445ff8c7612eb658265bc16083dc3f42fb706c962b1cb05e7192c7_prof);

        
        $__internal_2c55e6ccd2d21cd0947228cf07bfc6abd6a9fe6722345f45911369d02c88dcde->leave($__internal_2c55e6ccd2d21cd0947228cf07bfc6abd6a9fe6722345f45911369d02c88dcde_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_430d5d0a68ec4fe5978839a5a77ab087bc43ea35ba7b56495a3820e3dd0c2e73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_430d5d0a68ec4fe5978839a5a77ab087bc43ea35ba7b56495a3820e3dd0c2e73->enter($__internal_430d5d0a68ec4fe5978839a5a77ab087bc43ea35ba7b56495a3820e3dd0c2e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_89d02b0c0329e3aad8d986ec5f801209121401fb7164c397e5199b2eb096550f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d02b0c0329e3aad8d986ec5f801209121401fb7164c397e5199b2eb096550f->enter($__internal_89d02b0c0329e3aad8d986ec5f801209121401fb7164c397e5199b2eb096550f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_89d02b0c0329e3aad8d986ec5f801209121401fb7164c397e5199b2eb096550f->leave($__internal_89d02b0c0329e3aad8d986ec5f801209121401fb7164c397e5199b2eb096550f_prof);

        
        $__internal_430d5d0a68ec4fe5978839a5a77ab087bc43ea35ba7b56495a3820e3dd0c2e73->leave($__internal_430d5d0a68ec4fe5978839a5a77ab087bc43ea35ba7b56495a3820e3dd0c2e73_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cc622f98cc7ae603aacbefaa4d9aa29dfa320e71236698a9ba8ec2763090a46c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc622f98cc7ae603aacbefaa4d9aa29dfa320e71236698a9ba8ec2763090a46c->enter($__internal_cc622f98cc7ae603aacbefaa4d9aa29dfa320e71236698a9ba8ec2763090a46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_33a9908c0825a8c0b4500489172806f834857df3030de2a0475f9bc56aeb9fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a9908c0825a8c0b4500489172806f834857df3030de2a0475f9bc56aeb9fdb->enter($__internal_33a9908c0825a8c0b4500489172806f834857df3030de2a0475f9bc56aeb9fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_33a9908c0825a8c0b4500489172806f834857df3030de2a0475f9bc56aeb9fdb->leave($__internal_33a9908c0825a8c0b4500489172806f834857df3030de2a0475f9bc56aeb9fdb_prof);

        
        $__internal_cc622f98cc7ae603aacbefaa4d9aa29dfa320e71236698a9ba8ec2763090a46c->leave($__internal_cc622f98cc7ae603aacbefaa4d9aa29dfa320e71236698a9ba8ec2763090a46c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d604872a52fd05b4f70171dce445a59ec6d3797d975ee2337419f42c356f3e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d604872a52fd05b4f70171dce445a59ec6d3797d975ee2337419f42c356f3e2->enter($__internal_2d604872a52fd05b4f70171dce445a59ec6d3797d975ee2337419f42c356f3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c90f00e77616d66bf8df147117477c0b282a06ecd47f586c0e0cc4232450f7ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90f00e77616d66bf8df147117477c0b282a06ecd47f586c0e0cc4232450f7ad->enter($__internal_c90f00e77616d66bf8df147117477c0b282a06ecd47f586c0e0cc4232450f7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c90f00e77616d66bf8df147117477c0b282a06ecd47f586c0e0cc4232450f7ad->leave($__internal_c90f00e77616d66bf8df147117477c0b282a06ecd47f586c0e0cc4232450f7ad_prof);

        
        $__internal_2d604872a52fd05b4f70171dce445a59ec6d3797d975ee2337419f42c356f3e2->leave($__internal_2d604872a52fd05b4f70171dce445a59ec6d3797d975ee2337419f42c356f3e2_prof);

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
