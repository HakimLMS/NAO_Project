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
        $__internal_3da5b0dd294eab2e291a43e27b884201b6e64c45ff1334ad6bed0688a3c5323c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3da5b0dd294eab2e291a43e27b884201b6e64c45ff1334ad6bed0688a3c5323c->enter($__internal_3da5b0dd294eab2e291a43e27b884201b6e64c45ff1334ad6bed0688a3c5323c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_839a8d2da165d4d1c37dc5b32d1b93aa1c56253958612b8f5037e8a12ae62cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_839a8d2da165d4d1c37dc5b32d1b93aa1c56253958612b8f5037e8a12ae62cd9->enter($__internal_839a8d2da165d4d1c37dc5b32d1b93aa1c56253958612b8f5037e8a12ae62cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3da5b0dd294eab2e291a43e27b884201b6e64c45ff1334ad6bed0688a3c5323c->leave($__internal_3da5b0dd294eab2e291a43e27b884201b6e64c45ff1334ad6bed0688a3c5323c_prof);

        
        $__internal_839a8d2da165d4d1c37dc5b32d1b93aa1c56253958612b8f5037e8a12ae62cd9->leave($__internal_839a8d2da165d4d1c37dc5b32d1b93aa1c56253958612b8f5037e8a12ae62cd9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed19da5dda22cc723d8c8146ec83e18d09dd1bcaae12e74f54574e04cd31c2eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed19da5dda22cc723d8c8146ec83e18d09dd1bcaae12e74f54574e04cd31c2eb->enter($__internal_ed19da5dda22cc723d8c8146ec83e18d09dd1bcaae12e74f54574e04cd31c2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c0198c478bb3dbfd07c48cd3a5b682c4e8ac68cc81758f210ec7fd1c74283cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0198c478bb3dbfd07c48cd3a5b682c4e8ac68cc81758f210ec7fd1c74283cd0->enter($__internal_c0198c478bb3dbfd07c48cd3a5b682c4e8ac68cc81758f210ec7fd1c74283cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c0198c478bb3dbfd07c48cd3a5b682c4e8ac68cc81758f210ec7fd1c74283cd0->leave($__internal_c0198c478bb3dbfd07c48cd3a5b682c4e8ac68cc81758f210ec7fd1c74283cd0_prof);

        
        $__internal_ed19da5dda22cc723d8c8146ec83e18d09dd1bcaae12e74f54574e04cd31c2eb->leave($__internal_ed19da5dda22cc723d8c8146ec83e18d09dd1bcaae12e74f54574e04cd31c2eb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_be59f74cb9f9eff34e77fad154debe16813d2e0ad49526b513e0fb6ec4389412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be59f74cb9f9eff34e77fad154debe16813d2e0ad49526b513e0fb6ec4389412->enter($__internal_be59f74cb9f9eff34e77fad154debe16813d2e0ad49526b513e0fb6ec4389412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cfe959e40adda3180389246f0941a344829d5de0c622544e7c84d0fae5245664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe959e40adda3180389246f0941a344829d5de0c622544e7c84d0fae5245664->enter($__internal_cfe959e40adda3180389246f0941a344829d5de0c622544e7c84d0fae5245664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_cfe959e40adda3180389246f0941a344829d5de0c622544e7c84d0fae5245664->leave($__internal_cfe959e40adda3180389246f0941a344829d5de0c622544e7c84d0fae5245664_prof);

        
        $__internal_be59f74cb9f9eff34e77fad154debe16813d2e0ad49526b513e0fb6ec4389412->leave($__internal_be59f74cb9f9eff34e77fad154debe16813d2e0ad49526b513e0fb6ec4389412_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2afed73176439213e4c053141282a58593ad1fb4575ee36ee4639f7e8ab3c70c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2afed73176439213e4c053141282a58593ad1fb4575ee36ee4639f7e8ab3c70c->enter($__internal_2afed73176439213e4c053141282a58593ad1fb4575ee36ee4639f7e8ab3c70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6cccb247748b491bd638f559756735ad38ce5045e536ad5103da0e6db6529f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cccb247748b491bd638f559756735ad38ce5045e536ad5103da0e6db6529f0c->enter($__internal_6cccb247748b491bd638f559756735ad38ce5045e536ad5103da0e6db6529f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6cccb247748b491bd638f559756735ad38ce5045e536ad5103da0e6db6529f0c->leave($__internal_6cccb247748b491bd638f559756735ad38ce5045e536ad5103da0e6db6529f0c_prof);

        
        $__internal_2afed73176439213e4c053141282a58593ad1fb4575ee36ee4639f7e8ab3c70c->leave($__internal_2afed73176439213e4c053141282a58593ad1fb4575ee36ee4639f7e8ab3c70c_prof);

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
