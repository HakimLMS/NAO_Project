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
        $__internal_a46da37c5ad9747407cbaf5ccaa1927b6659b6bef905d856c2aeaa605759690a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a46da37c5ad9747407cbaf5ccaa1927b6659b6bef905d856c2aeaa605759690a->enter($__internal_a46da37c5ad9747407cbaf5ccaa1927b6659b6bef905d856c2aeaa605759690a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f56f63fdcb52722f79bc874fb571424c369460a354d1c114a0206d04b554d061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56f63fdcb52722f79bc874fb571424c369460a354d1c114a0206d04b554d061->enter($__internal_f56f63fdcb52722f79bc874fb571424c369460a354d1c114a0206d04b554d061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a46da37c5ad9747407cbaf5ccaa1927b6659b6bef905d856c2aeaa605759690a->leave($__internal_a46da37c5ad9747407cbaf5ccaa1927b6659b6bef905d856c2aeaa605759690a_prof);

        
        $__internal_f56f63fdcb52722f79bc874fb571424c369460a354d1c114a0206d04b554d061->leave($__internal_f56f63fdcb52722f79bc874fb571424c369460a354d1c114a0206d04b554d061_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd0250cae92c06d344d0dca99a67c11fedf7d3c38156853118efef38e4745afa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0250cae92c06d344d0dca99a67c11fedf7d3c38156853118efef38e4745afa->enter($__internal_bd0250cae92c06d344d0dca99a67c11fedf7d3c38156853118efef38e4745afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_291a26bed7ece180cbc33d5295b756f1b45c519122091d5ad7f1d4973276e0de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291a26bed7ece180cbc33d5295b756f1b45c519122091d5ad7f1d4973276e0de->enter($__internal_291a26bed7ece180cbc33d5295b756f1b45c519122091d5ad7f1d4973276e0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_291a26bed7ece180cbc33d5295b756f1b45c519122091d5ad7f1d4973276e0de->leave($__internal_291a26bed7ece180cbc33d5295b756f1b45c519122091d5ad7f1d4973276e0de_prof);

        
        $__internal_bd0250cae92c06d344d0dca99a67c11fedf7d3c38156853118efef38e4745afa->leave($__internal_bd0250cae92c06d344d0dca99a67c11fedf7d3c38156853118efef38e4745afa_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_10ccccabb7683d34cbd16e9bb9041b073cd2588a9e1a4ccfc27d934297aad9eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ccccabb7683d34cbd16e9bb9041b073cd2588a9e1a4ccfc27d934297aad9eb->enter($__internal_10ccccabb7683d34cbd16e9bb9041b073cd2588a9e1a4ccfc27d934297aad9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d76cf505e9018a3d5dc8a7d2ea5901fb1db7e0cddbbd4c69cad73bd8a293bc21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d76cf505e9018a3d5dc8a7d2ea5901fb1db7e0cddbbd4c69cad73bd8a293bc21->enter($__internal_d76cf505e9018a3d5dc8a7d2ea5901fb1db7e0cddbbd4c69cad73bd8a293bc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d76cf505e9018a3d5dc8a7d2ea5901fb1db7e0cddbbd4c69cad73bd8a293bc21->leave($__internal_d76cf505e9018a3d5dc8a7d2ea5901fb1db7e0cddbbd4c69cad73bd8a293bc21_prof);

        
        $__internal_10ccccabb7683d34cbd16e9bb9041b073cd2588a9e1a4ccfc27d934297aad9eb->leave($__internal_10ccccabb7683d34cbd16e9bb9041b073cd2588a9e1a4ccfc27d934297aad9eb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9cd35d88cccdff3f394581a83e49129cea6dd163096d5d636f64f947dad84e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd35d88cccdff3f394581a83e49129cea6dd163096d5d636f64f947dad84e02->enter($__internal_9cd35d88cccdff3f394581a83e49129cea6dd163096d5d636f64f947dad84e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e925488efb2a6959c24c42a3bd3fac9bd70fe05fc4a707350b9fd6a161d9cdd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e925488efb2a6959c24c42a3bd3fac9bd70fe05fc4a707350b9fd6a161d9cdd3->enter($__internal_e925488efb2a6959c24c42a3bd3fac9bd70fe05fc4a707350b9fd6a161d9cdd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e925488efb2a6959c24c42a3bd3fac9bd70fe05fc4a707350b9fd6a161d9cdd3->leave($__internal_e925488efb2a6959c24c42a3bd3fac9bd70fe05fc4a707350b9fd6a161d9cdd3_prof);

        
        $__internal_9cd35d88cccdff3f394581a83e49129cea6dd163096d5d636f64f947dad84e02->leave($__internal_9cd35d88cccdff3f394581a83e49129cea6dd163096d5d636f64f947dad84e02_prof);

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
