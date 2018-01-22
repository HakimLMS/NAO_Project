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
        $__internal_84e620204395bbbae00fad039e2ee2e587acbd339ee8c0974090cb14777349d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84e620204395bbbae00fad039e2ee2e587acbd339ee8c0974090cb14777349d2->enter($__internal_84e620204395bbbae00fad039e2ee2e587acbd339ee8c0974090cb14777349d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_77620dc5171e5f38069ceb215e53e2c2a606d4af53d4f0f90e8ff96a2a316004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77620dc5171e5f38069ceb215e53e2c2a606d4af53d4f0f90e8ff96a2a316004->enter($__internal_77620dc5171e5f38069ceb215e53e2c2a606d4af53d4f0f90e8ff96a2a316004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84e620204395bbbae00fad039e2ee2e587acbd339ee8c0974090cb14777349d2->leave($__internal_84e620204395bbbae00fad039e2ee2e587acbd339ee8c0974090cb14777349d2_prof);

        
        $__internal_77620dc5171e5f38069ceb215e53e2c2a606d4af53d4f0f90e8ff96a2a316004->leave($__internal_77620dc5171e5f38069ceb215e53e2c2a606d4af53d4f0f90e8ff96a2a316004_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e2ffaec8eda539e99c892b74f7db4606df91c16d81e74a4ef03cfb5953f3d74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e2ffaec8eda539e99c892b74f7db4606df91c16d81e74a4ef03cfb5953f3d74->enter($__internal_4e2ffaec8eda539e99c892b74f7db4606df91c16d81e74a4ef03cfb5953f3d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_55978037610c5dbd6b44fffcf1db2adc380b786b06f95f8401bedf5c5814ce7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55978037610c5dbd6b44fffcf1db2adc380b786b06f95f8401bedf5c5814ce7e->enter($__internal_55978037610c5dbd6b44fffcf1db2adc380b786b06f95f8401bedf5c5814ce7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_55978037610c5dbd6b44fffcf1db2adc380b786b06f95f8401bedf5c5814ce7e->leave($__internal_55978037610c5dbd6b44fffcf1db2adc380b786b06f95f8401bedf5c5814ce7e_prof);

        
        $__internal_4e2ffaec8eda539e99c892b74f7db4606df91c16d81e74a4ef03cfb5953f3d74->leave($__internal_4e2ffaec8eda539e99c892b74f7db4606df91c16d81e74a4ef03cfb5953f3d74_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a31d614d8f68aec1ea0c082c4d8acd2f4a233e87878dd1e5b9d6599c54641ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a31d614d8f68aec1ea0c082c4d8acd2f4a233e87878dd1e5b9d6599c54641ed->enter($__internal_3a31d614d8f68aec1ea0c082c4d8acd2f4a233e87878dd1e5b9d6599c54641ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_439982ed1e744d87be12506e60be7851271b0ff5bf7a643b31f38767f00595d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439982ed1e744d87be12506e60be7851271b0ff5bf7a643b31f38767f00595d9->enter($__internal_439982ed1e744d87be12506e60be7851271b0ff5bf7a643b31f38767f00595d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_439982ed1e744d87be12506e60be7851271b0ff5bf7a643b31f38767f00595d9->leave($__internal_439982ed1e744d87be12506e60be7851271b0ff5bf7a643b31f38767f00595d9_prof);

        
        $__internal_3a31d614d8f68aec1ea0c082c4d8acd2f4a233e87878dd1e5b9d6599c54641ed->leave($__internal_3a31d614d8f68aec1ea0c082c4d8acd2f4a233e87878dd1e5b9d6599c54641ed_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_811f09b1ac372eae3128d5cb89d7ae2fde8dbb9c2ba7384557dbc597f0c7d42d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_811f09b1ac372eae3128d5cb89d7ae2fde8dbb9c2ba7384557dbc597f0c7d42d->enter($__internal_811f09b1ac372eae3128d5cb89d7ae2fde8dbb9c2ba7384557dbc597f0c7d42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a56452e50988f11827bb99a3df863f5f95d67433e3e305668011f20b76af73de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56452e50988f11827bb99a3df863f5f95d67433e3e305668011f20b76af73de->enter($__internal_a56452e50988f11827bb99a3df863f5f95d67433e3e305668011f20b76af73de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a56452e50988f11827bb99a3df863f5f95d67433e3e305668011f20b76af73de->leave($__internal_a56452e50988f11827bb99a3df863f5f95d67433e3e305668011f20b76af73de_prof);

        
        $__internal_811f09b1ac372eae3128d5cb89d7ae2fde8dbb9c2ba7384557dbc597f0c7d42d->leave($__internal_811f09b1ac372eae3128d5cb89d7ae2fde8dbb9c2ba7384557dbc597f0c7d42d_prof);

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
