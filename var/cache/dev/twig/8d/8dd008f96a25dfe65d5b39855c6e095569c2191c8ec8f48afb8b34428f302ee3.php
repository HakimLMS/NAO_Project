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
        $__internal_1484284375d5f0c7dc9352640cc5cdba136f470c4e84cff42d757bbacacaaff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1484284375d5f0c7dc9352640cc5cdba136f470c4e84cff42d757bbacacaaff7->enter($__internal_1484284375d5f0c7dc9352640cc5cdba136f470c4e84cff42d757bbacacaaff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_29b38c291967a513b667d413ba3b44f610d2dfc282a248271992a093cecada32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b38c291967a513b667d413ba3b44f610d2dfc282a248271992a093cecada32->enter($__internal_29b38c291967a513b667d413ba3b44f610d2dfc282a248271992a093cecada32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1484284375d5f0c7dc9352640cc5cdba136f470c4e84cff42d757bbacacaaff7->leave($__internal_1484284375d5f0c7dc9352640cc5cdba136f470c4e84cff42d757bbacacaaff7_prof);

        
        $__internal_29b38c291967a513b667d413ba3b44f610d2dfc282a248271992a093cecada32->leave($__internal_29b38c291967a513b667d413ba3b44f610d2dfc282a248271992a093cecada32_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9441fd8b3c4aa9335409b5f26b38cec6e889ce9bd584305ad6986b6ee53a237d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9441fd8b3c4aa9335409b5f26b38cec6e889ce9bd584305ad6986b6ee53a237d->enter($__internal_9441fd8b3c4aa9335409b5f26b38cec6e889ce9bd584305ad6986b6ee53a237d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cc6d6d5e14902a86dea629afc8b6b5eb7320bbd188346093b179854376e6a304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6d6d5e14902a86dea629afc8b6b5eb7320bbd188346093b179854376e6a304->enter($__internal_cc6d6d5e14902a86dea629afc8b6b5eb7320bbd188346093b179854376e6a304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_cc6d6d5e14902a86dea629afc8b6b5eb7320bbd188346093b179854376e6a304->leave($__internal_cc6d6d5e14902a86dea629afc8b6b5eb7320bbd188346093b179854376e6a304_prof);

        
        $__internal_9441fd8b3c4aa9335409b5f26b38cec6e889ce9bd584305ad6986b6ee53a237d->leave($__internal_9441fd8b3c4aa9335409b5f26b38cec6e889ce9bd584305ad6986b6ee53a237d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a7bde2d62477589c324005024d4447223ff37ae3649910ec53c85fe70535160d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7bde2d62477589c324005024d4447223ff37ae3649910ec53c85fe70535160d->enter($__internal_a7bde2d62477589c324005024d4447223ff37ae3649910ec53c85fe70535160d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2ee08907fa056abfa6bbf0daf0e73e65a1472ccfde370c7f00381cd6034a6a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee08907fa056abfa6bbf0daf0e73e65a1472ccfde370c7f00381cd6034a6a9c->enter($__internal_2ee08907fa056abfa6bbf0daf0e73e65a1472ccfde370c7f00381cd6034a6a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2ee08907fa056abfa6bbf0daf0e73e65a1472ccfde370c7f00381cd6034a6a9c->leave($__internal_2ee08907fa056abfa6bbf0daf0e73e65a1472ccfde370c7f00381cd6034a6a9c_prof);

        
        $__internal_a7bde2d62477589c324005024d4447223ff37ae3649910ec53c85fe70535160d->leave($__internal_a7bde2d62477589c324005024d4447223ff37ae3649910ec53c85fe70535160d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe1ab758ff5f8b92f10264fb6a536d23b2c7bef53368d67382db33ec6c93cdc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe1ab758ff5f8b92f10264fb6a536d23b2c7bef53368d67382db33ec6c93cdc3->enter($__internal_fe1ab758ff5f8b92f10264fb6a536d23b2c7bef53368d67382db33ec6c93cdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3d8a16813ed90aef69a919a5779505a76e445feb566b96fe5621cec04c9db7b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d8a16813ed90aef69a919a5779505a76e445feb566b96fe5621cec04c9db7b5->enter($__internal_3d8a16813ed90aef69a919a5779505a76e445feb566b96fe5621cec04c9db7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3d8a16813ed90aef69a919a5779505a76e445feb566b96fe5621cec04c9db7b5->leave($__internal_3d8a16813ed90aef69a919a5779505a76e445feb566b96fe5621cec04c9db7b5_prof);

        
        $__internal_fe1ab758ff5f8b92f10264fb6a536d23b2c7bef53368d67382db33ec6c93cdc3->leave($__internal_fe1ab758ff5f8b92f10264fb6a536d23b2c7bef53368d67382db33ec6c93cdc3_prof);

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
