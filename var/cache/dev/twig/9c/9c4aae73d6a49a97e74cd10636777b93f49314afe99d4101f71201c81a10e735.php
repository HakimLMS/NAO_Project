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
        $__internal_7951c4ebc69cfbbedd420e55aa289087751c3dadd1893822054b84f3b99a6a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7951c4ebc69cfbbedd420e55aa289087751c3dadd1893822054b84f3b99a6a28->enter($__internal_7951c4ebc69cfbbedd420e55aa289087751c3dadd1893822054b84f3b99a6a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e27a527f6c801463d53c85a45775b85b9d4f47d7f53c2726c5b44a528d7c5630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27a527f6c801463d53c85a45775b85b9d4f47d7f53c2726c5b44a528d7c5630->enter($__internal_e27a527f6c801463d53c85a45775b85b9d4f47d7f53c2726c5b44a528d7c5630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7951c4ebc69cfbbedd420e55aa289087751c3dadd1893822054b84f3b99a6a28->leave($__internal_7951c4ebc69cfbbedd420e55aa289087751c3dadd1893822054b84f3b99a6a28_prof);

        
        $__internal_e27a527f6c801463d53c85a45775b85b9d4f47d7f53c2726c5b44a528d7c5630->leave($__internal_e27a527f6c801463d53c85a45775b85b9d4f47d7f53c2726c5b44a528d7c5630_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b66ee0ae16dea4e53218b5faaac0ff367839df26665667722d73cb447b483f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b66ee0ae16dea4e53218b5faaac0ff367839df26665667722d73cb447b483f9->enter($__internal_9b66ee0ae16dea4e53218b5faaac0ff367839df26665667722d73cb447b483f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2d3d91b59cdfceb495e113bf0da462dd90d545d0afdcd03d43c9f7338541786c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3d91b59cdfceb495e113bf0da462dd90d545d0afdcd03d43c9f7338541786c->enter($__internal_2d3d91b59cdfceb495e113bf0da462dd90d545d0afdcd03d43c9f7338541786c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2d3d91b59cdfceb495e113bf0da462dd90d545d0afdcd03d43c9f7338541786c->leave($__internal_2d3d91b59cdfceb495e113bf0da462dd90d545d0afdcd03d43c9f7338541786c_prof);

        
        $__internal_9b66ee0ae16dea4e53218b5faaac0ff367839df26665667722d73cb447b483f9->leave($__internal_9b66ee0ae16dea4e53218b5faaac0ff367839df26665667722d73cb447b483f9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_553e92d33b3170d8cbeb9c6d50ae3839e0ef8b2498292d79a38da2438aa95ce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_553e92d33b3170d8cbeb9c6d50ae3839e0ef8b2498292d79a38da2438aa95ce5->enter($__internal_553e92d33b3170d8cbeb9c6d50ae3839e0ef8b2498292d79a38da2438aa95ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b91a29f218e32264e315c99e57742a12ea3645bbad0da1d51f24bc95403d57e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91a29f218e32264e315c99e57742a12ea3645bbad0da1d51f24bc95403d57e0->enter($__internal_b91a29f218e32264e315c99e57742a12ea3645bbad0da1d51f24bc95403d57e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b91a29f218e32264e315c99e57742a12ea3645bbad0da1d51f24bc95403d57e0->leave($__internal_b91a29f218e32264e315c99e57742a12ea3645bbad0da1d51f24bc95403d57e0_prof);

        
        $__internal_553e92d33b3170d8cbeb9c6d50ae3839e0ef8b2498292d79a38da2438aa95ce5->leave($__internal_553e92d33b3170d8cbeb9c6d50ae3839e0ef8b2498292d79a38da2438aa95ce5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_696349c06cd959c3b0c2c9920bcfe5c6c1ec308262e879f4f907f630433d3d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_696349c06cd959c3b0c2c9920bcfe5c6c1ec308262e879f4f907f630433d3d4a->enter($__internal_696349c06cd959c3b0c2c9920bcfe5c6c1ec308262e879f4f907f630433d3d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d37f79416c76aa9650f1968f2325ec5e7980142f896e10a94dc8a85dcb845362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37f79416c76aa9650f1968f2325ec5e7980142f896e10a94dc8a85dcb845362->enter($__internal_d37f79416c76aa9650f1968f2325ec5e7980142f896e10a94dc8a85dcb845362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d37f79416c76aa9650f1968f2325ec5e7980142f896e10a94dc8a85dcb845362->leave($__internal_d37f79416c76aa9650f1968f2325ec5e7980142f896e10a94dc8a85dcb845362_prof);

        
        $__internal_696349c06cd959c3b0c2c9920bcfe5c6c1ec308262e879f4f907f630433d3d4a->leave($__internal_696349c06cd959c3b0c2c9920bcfe5c6c1ec308262e879f4f907f630433d3d4a_prof);

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
