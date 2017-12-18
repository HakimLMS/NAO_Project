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
        $__internal_85509c70c5198664ab5c0a6f5dba37daceb71fad566857d14bda57d6b88e29af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85509c70c5198664ab5c0a6f5dba37daceb71fad566857d14bda57d6b88e29af->enter($__internal_85509c70c5198664ab5c0a6f5dba37daceb71fad566857d14bda57d6b88e29af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_846167926a087874b9a93d72ead4828f8cb352d24947ed4c3fb97dab0957c946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_846167926a087874b9a93d72ead4828f8cb352d24947ed4c3fb97dab0957c946->enter($__internal_846167926a087874b9a93d72ead4828f8cb352d24947ed4c3fb97dab0957c946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85509c70c5198664ab5c0a6f5dba37daceb71fad566857d14bda57d6b88e29af->leave($__internal_85509c70c5198664ab5c0a6f5dba37daceb71fad566857d14bda57d6b88e29af_prof);

        
        $__internal_846167926a087874b9a93d72ead4828f8cb352d24947ed4c3fb97dab0957c946->leave($__internal_846167926a087874b9a93d72ead4828f8cb352d24947ed4c3fb97dab0957c946_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_211fe91e458ec1eb7e9ca38dd5034aeadfcdda238f481d625b40189e27997bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_211fe91e458ec1eb7e9ca38dd5034aeadfcdda238f481d625b40189e27997bb8->enter($__internal_211fe91e458ec1eb7e9ca38dd5034aeadfcdda238f481d625b40189e27997bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eacf84039cd845c14a013fbcedf472d96568311ce202223ec67065a20c8ddaeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eacf84039cd845c14a013fbcedf472d96568311ce202223ec67065a20c8ddaeb->enter($__internal_eacf84039cd845c14a013fbcedf472d96568311ce202223ec67065a20c8ddaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_eacf84039cd845c14a013fbcedf472d96568311ce202223ec67065a20c8ddaeb->leave($__internal_eacf84039cd845c14a013fbcedf472d96568311ce202223ec67065a20c8ddaeb_prof);

        
        $__internal_211fe91e458ec1eb7e9ca38dd5034aeadfcdda238f481d625b40189e27997bb8->leave($__internal_211fe91e458ec1eb7e9ca38dd5034aeadfcdda238f481d625b40189e27997bb8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dd293a997a2497d6acaf93e8f2980fc9e47af29c8cdb55a1d8d0fc9e4b64a511 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd293a997a2497d6acaf93e8f2980fc9e47af29c8cdb55a1d8d0fc9e4b64a511->enter($__internal_dd293a997a2497d6acaf93e8f2980fc9e47af29c8cdb55a1d8d0fc9e4b64a511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_703e1911da572590893e00eecd64f959042dabe781806b327c0b9373cf2ae493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_703e1911da572590893e00eecd64f959042dabe781806b327c0b9373cf2ae493->enter($__internal_703e1911da572590893e00eecd64f959042dabe781806b327c0b9373cf2ae493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_703e1911da572590893e00eecd64f959042dabe781806b327c0b9373cf2ae493->leave($__internal_703e1911da572590893e00eecd64f959042dabe781806b327c0b9373cf2ae493_prof);

        
        $__internal_dd293a997a2497d6acaf93e8f2980fc9e47af29c8cdb55a1d8d0fc9e4b64a511->leave($__internal_dd293a997a2497d6acaf93e8f2980fc9e47af29c8cdb55a1d8d0fc9e4b64a511_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_868e75f8f598560fb36ce59a90e0d0942212f7f7d61454b25b0a4b25389a8002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_868e75f8f598560fb36ce59a90e0d0942212f7f7d61454b25b0a4b25389a8002->enter($__internal_868e75f8f598560fb36ce59a90e0d0942212f7f7d61454b25b0a4b25389a8002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fd391e8d610ccf0f74054b8be2169a933208540ddbe6e38fffd1899c2db5b558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd391e8d610ccf0f74054b8be2169a933208540ddbe6e38fffd1899c2db5b558->enter($__internal_fd391e8d610ccf0f74054b8be2169a933208540ddbe6e38fffd1899c2db5b558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fd391e8d610ccf0f74054b8be2169a933208540ddbe6e38fffd1899c2db5b558->leave($__internal_fd391e8d610ccf0f74054b8be2169a933208540ddbe6e38fffd1899c2db5b558_prof);

        
        $__internal_868e75f8f598560fb36ce59a90e0d0942212f7f7d61454b25b0a4b25389a8002->leave($__internal_868e75f8f598560fb36ce59a90e0d0942212f7f7d61454b25b0a4b25389a8002_prof);

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
