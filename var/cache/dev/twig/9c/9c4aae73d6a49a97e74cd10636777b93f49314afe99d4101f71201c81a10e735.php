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
        $__internal_a3d8192a17d75d21bc878f40cd426183ad6fe21d626925e734fe945cd1533ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3d8192a17d75d21bc878f40cd426183ad6fe21d626925e734fe945cd1533ca5->enter($__internal_a3d8192a17d75d21bc878f40cd426183ad6fe21d626925e734fe945cd1533ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b6651fac8b93daf95ecc1619f4b1e39134495c078585d41be67d967872cd2139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6651fac8b93daf95ecc1619f4b1e39134495c078585d41be67d967872cd2139->enter($__internal_b6651fac8b93daf95ecc1619f4b1e39134495c078585d41be67d967872cd2139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3d8192a17d75d21bc878f40cd426183ad6fe21d626925e734fe945cd1533ca5->leave($__internal_a3d8192a17d75d21bc878f40cd426183ad6fe21d626925e734fe945cd1533ca5_prof);

        
        $__internal_b6651fac8b93daf95ecc1619f4b1e39134495c078585d41be67d967872cd2139->leave($__internal_b6651fac8b93daf95ecc1619f4b1e39134495c078585d41be67d967872cd2139_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2dab8c78f8bafcf931536ceafb14965ece68b9b2b54a8fbfaf720c43db24e4d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dab8c78f8bafcf931536ceafb14965ece68b9b2b54a8fbfaf720c43db24e4d8->enter($__internal_2dab8c78f8bafcf931536ceafb14965ece68b9b2b54a8fbfaf720c43db24e4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fb13c018c024986fc63ca3b6db0811ee01ccd8d81ceeea456114d5668efe209c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb13c018c024986fc63ca3b6db0811ee01ccd8d81ceeea456114d5668efe209c->enter($__internal_fb13c018c024986fc63ca3b6db0811ee01ccd8d81ceeea456114d5668efe209c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fb13c018c024986fc63ca3b6db0811ee01ccd8d81ceeea456114d5668efe209c->leave($__internal_fb13c018c024986fc63ca3b6db0811ee01ccd8d81ceeea456114d5668efe209c_prof);

        
        $__internal_2dab8c78f8bafcf931536ceafb14965ece68b9b2b54a8fbfaf720c43db24e4d8->leave($__internal_2dab8c78f8bafcf931536ceafb14965ece68b9b2b54a8fbfaf720c43db24e4d8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9740087c162c9cbb283d2dde72a39872736d5652a2215dec9a1bd7d0712feec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9740087c162c9cbb283d2dde72a39872736d5652a2215dec9a1bd7d0712feec->enter($__internal_d9740087c162c9cbb283d2dde72a39872736d5652a2215dec9a1bd7d0712feec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4d9a03632b6beec9eef8d6499fb20148acd5682f0fa19ca4993c51959c796340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9a03632b6beec9eef8d6499fb20148acd5682f0fa19ca4993c51959c796340->enter($__internal_4d9a03632b6beec9eef8d6499fb20148acd5682f0fa19ca4993c51959c796340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4d9a03632b6beec9eef8d6499fb20148acd5682f0fa19ca4993c51959c796340->leave($__internal_4d9a03632b6beec9eef8d6499fb20148acd5682f0fa19ca4993c51959c796340_prof);

        
        $__internal_d9740087c162c9cbb283d2dde72a39872736d5652a2215dec9a1bd7d0712feec->leave($__internal_d9740087c162c9cbb283d2dde72a39872736d5652a2215dec9a1bd7d0712feec_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_821932064ac23f1d36881b67cb7cbd419b584e16d32a11073a4861904bb0a27a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_821932064ac23f1d36881b67cb7cbd419b584e16d32a11073a4861904bb0a27a->enter($__internal_821932064ac23f1d36881b67cb7cbd419b584e16d32a11073a4861904bb0a27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4d557f35dee7ed38c34954b7b08a36a43968a5c843ca7481d697d94e1efd51e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d557f35dee7ed38c34954b7b08a36a43968a5c843ca7481d697d94e1efd51e2->enter($__internal_4d557f35dee7ed38c34954b7b08a36a43968a5c843ca7481d697d94e1efd51e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4d557f35dee7ed38c34954b7b08a36a43968a5c843ca7481d697d94e1efd51e2->leave($__internal_4d557f35dee7ed38c34954b7b08a36a43968a5c843ca7481d697d94e1efd51e2_prof);

        
        $__internal_821932064ac23f1d36881b67cb7cbd419b584e16d32a11073a4861904bb0a27a->leave($__internal_821932064ac23f1d36881b67cb7cbd419b584e16d32a11073a4861904bb0a27a_prof);

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
