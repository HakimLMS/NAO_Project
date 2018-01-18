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
        $__internal_d5db50a7766b48059160f0abd9cb87465b0d7451eef55b8aa70f3b3144433356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5db50a7766b48059160f0abd9cb87465b0d7451eef55b8aa70f3b3144433356->enter($__internal_d5db50a7766b48059160f0abd9cb87465b0d7451eef55b8aa70f3b3144433356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dfd1096817f76e78d53d2f9abe7497badb16810d3a8aad84216954bbf23478f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd1096817f76e78d53d2f9abe7497badb16810d3a8aad84216954bbf23478f3->enter($__internal_dfd1096817f76e78d53d2f9abe7497badb16810d3a8aad84216954bbf23478f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5db50a7766b48059160f0abd9cb87465b0d7451eef55b8aa70f3b3144433356->leave($__internal_d5db50a7766b48059160f0abd9cb87465b0d7451eef55b8aa70f3b3144433356_prof);

        
        $__internal_dfd1096817f76e78d53d2f9abe7497badb16810d3a8aad84216954bbf23478f3->leave($__internal_dfd1096817f76e78d53d2f9abe7497badb16810d3a8aad84216954bbf23478f3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d8aee9dc3745e0e30b08ca1e0d029365d460add3ade4fa993fbb25ee4dce99d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8aee9dc3745e0e30b08ca1e0d029365d460add3ade4fa993fbb25ee4dce99d7->enter($__internal_d8aee9dc3745e0e30b08ca1e0d029365d460add3ade4fa993fbb25ee4dce99d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dbbfea0dc616bfecfa711bc84a9266ca51d7b072ccfac6d45107fb6130330e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbbfea0dc616bfecfa711bc84a9266ca51d7b072ccfac6d45107fb6130330e6d->enter($__internal_dbbfea0dc616bfecfa711bc84a9266ca51d7b072ccfac6d45107fb6130330e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dbbfea0dc616bfecfa711bc84a9266ca51d7b072ccfac6d45107fb6130330e6d->leave($__internal_dbbfea0dc616bfecfa711bc84a9266ca51d7b072ccfac6d45107fb6130330e6d_prof);

        
        $__internal_d8aee9dc3745e0e30b08ca1e0d029365d460add3ade4fa993fbb25ee4dce99d7->leave($__internal_d8aee9dc3745e0e30b08ca1e0d029365d460add3ade4fa993fbb25ee4dce99d7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_87a57a7eac8027dd40196437405df4cfbe5795efea78b9085ab899c8c6f2ac2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a57a7eac8027dd40196437405df4cfbe5795efea78b9085ab899c8c6f2ac2f->enter($__internal_87a57a7eac8027dd40196437405df4cfbe5795efea78b9085ab899c8c6f2ac2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7754583c48d5451bbda451f8a40e3d17988555b5c08af488ef4a7158952d339d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7754583c48d5451bbda451f8a40e3d17988555b5c08af488ef4a7158952d339d->enter($__internal_7754583c48d5451bbda451f8a40e3d17988555b5c08af488ef4a7158952d339d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7754583c48d5451bbda451f8a40e3d17988555b5c08af488ef4a7158952d339d->leave($__internal_7754583c48d5451bbda451f8a40e3d17988555b5c08af488ef4a7158952d339d_prof);

        
        $__internal_87a57a7eac8027dd40196437405df4cfbe5795efea78b9085ab899c8c6f2ac2f->leave($__internal_87a57a7eac8027dd40196437405df4cfbe5795efea78b9085ab899c8c6f2ac2f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c2c17fc6fa969276e73f6853fa4743b8bd334eeb2403d078aef33f483afca4c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2c17fc6fa969276e73f6853fa4743b8bd334eeb2403d078aef33f483afca4c8->enter($__internal_c2c17fc6fa969276e73f6853fa4743b8bd334eeb2403d078aef33f483afca4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dfdde39136566e20f1fe9756a3a6615efe6d1d5355ee35ac51da351c12965d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfdde39136566e20f1fe9756a3a6615efe6d1d5355ee35ac51da351c12965d6c->enter($__internal_dfdde39136566e20f1fe9756a3a6615efe6d1d5355ee35ac51da351c12965d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_dfdde39136566e20f1fe9756a3a6615efe6d1d5355ee35ac51da351c12965d6c->leave($__internal_dfdde39136566e20f1fe9756a3a6615efe6d1d5355ee35ac51da351c12965d6c_prof);

        
        $__internal_c2c17fc6fa969276e73f6853fa4743b8bd334eeb2403d078aef33f483afca4c8->leave($__internal_c2c17fc6fa969276e73f6853fa4743b8bd334eeb2403d078aef33f483afca4c8_prof);

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
