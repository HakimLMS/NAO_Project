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
        $__internal_f74c2eade8ea6c03a30d6e761769318d33e638dda85cc59361bdf8db32cc0452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74c2eade8ea6c03a30d6e761769318d33e638dda85cc59361bdf8db32cc0452->enter($__internal_f74c2eade8ea6c03a30d6e761769318d33e638dda85cc59361bdf8db32cc0452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ccb2674a0a9389c794d05f18a805ff9069271b76b5d4a112e17c0c170eefeecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb2674a0a9389c794d05f18a805ff9069271b76b5d4a112e17c0c170eefeecf->enter($__internal_ccb2674a0a9389c794d05f18a805ff9069271b76b5d4a112e17c0c170eefeecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f74c2eade8ea6c03a30d6e761769318d33e638dda85cc59361bdf8db32cc0452->leave($__internal_f74c2eade8ea6c03a30d6e761769318d33e638dda85cc59361bdf8db32cc0452_prof);

        
        $__internal_ccb2674a0a9389c794d05f18a805ff9069271b76b5d4a112e17c0c170eefeecf->leave($__internal_ccb2674a0a9389c794d05f18a805ff9069271b76b5d4a112e17c0c170eefeecf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_48b2b7d365d6198ccf2c3a54f05ce1455b5e6c6dd2c4ead4f32f75589163709b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b2b7d365d6198ccf2c3a54f05ce1455b5e6c6dd2c4ead4f32f75589163709b->enter($__internal_48b2b7d365d6198ccf2c3a54f05ce1455b5e6c6dd2c4ead4f32f75589163709b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_db3aff93427cbffc20117a4246f5818d9a09018bc8a2e21fba75e9e5d4e6cb2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db3aff93427cbffc20117a4246f5818d9a09018bc8a2e21fba75e9e5d4e6cb2e->enter($__internal_db3aff93427cbffc20117a4246f5818d9a09018bc8a2e21fba75e9e5d4e6cb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_db3aff93427cbffc20117a4246f5818d9a09018bc8a2e21fba75e9e5d4e6cb2e->leave($__internal_db3aff93427cbffc20117a4246f5818d9a09018bc8a2e21fba75e9e5d4e6cb2e_prof);

        
        $__internal_48b2b7d365d6198ccf2c3a54f05ce1455b5e6c6dd2c4ead4f32f75589163709b->leave($__internal_48b2b7d365d6198ccf2c3a54f05ce1455b5e6c6dd2c4ead4f32f75589163709b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c0eb2a496a0506cc1754dfa28c8b900ec0ddd730d68972e6cce9dc65ef8271f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0eb2a496a0506cc1754dfa28c8b900ec0ddd730d68972e6cce9dc65ef8271f5->enter($__internal_c0eb2a496a0506cc1754dfa28c8b900ec0ddd730d68972e6cce9dc65ef8271f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_497c98bac384b48abba0ae65c5e4fa0a4c1bc7f4ade8343df2cd743740a68dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497c98bac384b48abba0ae65c5e4fa0a4c1bc7f4ade8343df2cd743740a68dea->enter($__internal_497c98bac384b48abba0ae65c5e4fa0a4c1bc7f4ade8343df2cd743740a68dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_497c98bac384b48abba0ae65c5e4fa0a4c1bc7f4ade8343df2cd743740a68dea->leave($__internal_497c98bac384b48abba0ae65c5e4fa0a4c1bc7f4ade8343df2cd743740a68dea_prof);

        
        $__internal_c0eb2a496a0506cc1754dfa28c8b900ec0ddd730d68972e6cce9dc65ef8271f5->leave($__internal_c0eb2a496a0506cc1754dfa28c8b900ec0ddd730d68972e6cce9dc65ef8271f5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0261d3448b6a0439c0e618099d89b07c70eeb0cd2090a5d11fc552b1ae42a0ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0261d3448b6a0439c0e618099d89b07c70eeb0cd2090a5d11fc552b1ae42a0ae->enter($__internal_0261d3448b6a0439c0e618099d89b07c70eeb0cd2090a5d11fc552b1ae42a0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b879565fc515d20fbb4dfd2a09e44d30f266f2ff8262f37f19ad971b4bb8b7f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b879565fc515d20fbb4dfd2a09e44d30f266f2ff8262f37f19ad971b4bb8b7f4->enter($__internal_b879565fc515d20fbb4dfd2a09e44d30f266f2ff8262f37f19ad971b4bb8b7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b879565fc515d20fbb4dfd2a09e44d30f266f2ff8262f37f19ad971b4bb8b7f4->leave($__internal_b879565fc515d20fbb4dfd2a09e44d30f266f2ff8262f37f19ad971b4bb8b7f4_prof);

        
        $__internal_0261d3448b6a0439c0e618099d89b07c70eeb0cd2090a5d11fc552b1ae42a0ae->leave($__internal_0261d3448b6a0439c0e618099d89b07c70eeb0cd2090a5d11fc552b1ae42a0ae_prof);

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
