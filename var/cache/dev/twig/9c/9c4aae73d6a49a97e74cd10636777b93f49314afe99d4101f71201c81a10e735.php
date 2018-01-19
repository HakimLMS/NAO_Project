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
        $__internal_814b5a8dcfd873c33cf99a5072b41d8deda139f31e04809a870fb94afbf8fb93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_814b5a8dcfd873c33cf99a5072b41d8deda139f31e04809a870fb94afbf8fb93->enter($__internal_814b5a8dcfd873c33cf99a5072b41d8deda139f31e04809a870fb94afbf8fb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_54407b2a1ea72fe1f2b0b57f8383137602c1d92e84050060c97535f6301b3853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54407b2a1ea72fe1f2b0b57f8383137602c1d92e84050060c97535f6301b3853->enter($__internal_54407b2a1ea72fe1f2b0b57f8383137602c1d92e84050060c97535f6301b3853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_814b5a8dcfd873c33cf99a5072b41d8deda139f31e04809a870fb94afbf8fb93->leave($__internal_814b5a8dcfd873c33cf99a5072b41d8deda139f31e04809a870fb94afbf8fb93_prof);

        
        $__internal_54407b2a1ea72fe1f2b0b57f8383137602c1d92e84050060c97535f6301b3853->leave($__internal_54407b2a1ea72fe1f2b0b57f8383137602c1d92e84050060c97535f6301b3853_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8427fde6260e025e823983e5ba47ae3f5ff12376ebbc465e4fcfaa0c5457eaa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8427fde6260e025e823983e5ba47ae3f5ff12376ebbc465e4fcfaa0c5457eaa9->enter($__internal_8427fde6260e025e823983e5ba47ae3f5ff12376ebbc465e4fcfaa0c5457eaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bf7c65b3143c7e84fe210432bb1ec1ebff147083f271a3c308888e3d0e083f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7c65b3143c7e84fe210432bb1ec1ebff147083f271a3c308888e3d0e083f21->enter($__internal_bf7c65b3143c7e84fe210432bb1ec1ebff147083f271a3c308888e3d0e083f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bf7c65b3143c7e84fe210432bb1ec1ebff147083f271a3c308888e3d0e083f21->leave($__internal_bf7c65b3143c7e84fe210432bb1ec1ebff147083f271a3c308888e3d0e083f21_prof);

        
        $__internal_8427fde6260e025e823983e5ba47ae3f5ff12376ebbc465e4fcfaa0c5457eaa9->leave($__internal_8427fde6260e025e823983e5ba47ae3f5ff12376ebbc465e4fcfaa0c5457eaa9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c8efc3b4a23b0d2a292f8eb4e9f001f8c7adf0d5fe2d2e33361607810dd08008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8efc3b4a23b0d2a292f8eb4e9f001f8c7adf0d5fe2d2e33361607810dd08008->enter($__internal_c8efc3b4a23b0d2a292f8eb4e9f001f8c7adf0d5fe2d2e33361607810dd08008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_97434384eb5c1b850d1364ca2943390a4e7df39121a3e6f3264472d2083c5e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97434384eb5c1b850d1364ca2943390a4e7df39121a3e6f3264472d2083c5e18->enter($__internal_97434384eb5c1b850d1364ca2943390a4e7df39121a3e6f3264472d2083c5e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_97434384eb5c1b850d1364ca2943390a4e7df39121a3e6f3264472d2083c5e18->leave($__internal_97434384eb5c1b850d1364ca2943390a4e7df39121a3e6f3264472d2083c5e18_prof);

        
        $__internal_c8efc3b4a23b0d2a292f8eb4e9f001f8c7adf0d5fe2d2e33361607810dd08008->leave($__internal_c8efc3b4a23b0d2a292f8eb4e9f001f8c7adf0d5fe2d2e33361607810dd08008_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b1196f29cd2047145762ed1eeb510913b06de30fd14a69e0027564df5459b0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1196f29cd2047145762ed1eeb510913b06de30fd14a69e0027564df5459b0db->enter($__internal_b1196f29cd2047145762ed1eeb510913b06de30fd14a69e0027564df5459b0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5e67e347d87921d2eae06fe704a831dd99dc66fe06b1c6092a8459cd72420927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e67e347d87921d2eae06fe704a831dd99dc66fe06b1c6092a8459cd72420927->enter($__internal_5e67e347d87921d2eae06fe704a831dd99dc66fe06b1c6092a8459cd72420927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5e67e347d87921d2eae06fe704a831dd99dc66fe06b1c6092a8459cd72420927->leave($__internal_5e67e347d87921d2eae06fe704a831dd99dc66fe06b1c6092a8459cd72420927_prof);

        
        $__internal_b1196f29cd2047145762ed1eeb510913b06de30fd14a69e0027564df5459b0db->leave($__internal_b1196f29cd2047145762ed1eeb510913b06de30fd14a69e0027564df5459b0db_prof);

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
