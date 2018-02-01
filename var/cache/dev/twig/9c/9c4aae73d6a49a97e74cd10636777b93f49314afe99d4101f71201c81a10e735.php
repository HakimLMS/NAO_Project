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
        $__internal_2bfbe29f028895d4d442bb7f803498ee0e92772e79c2174c862f02b7a0507dc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bfbe29f028895d4d442bb7f803498ee0e92772e79c2174c862f02b7a0507dc2->enter($__internal_2bfbe29f028895d4d442bb7f803498ee0e92772e79c2174c862f02b7a0507dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b46d302598cd8e1730d58014631d7b581b24be4b01363078da7dcfbeab7068e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b46d302598cd8e1730d58014631d7b581b24be4b01363078da7dcfbeab7068e6->enter($__internal_b46d302598cd8e1730d58014631d7b581b24be4b01363078da7dcfbeab7068e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bfbe29f028895d4d442bb7f803498ee0e92772e79c2174c862f02b7a0507dc2->leave($__internal_2bfbe29f028895d4d442bb7f803498ee0e92772e79c2174c862f02b7a0507dc2_prof);

        
        $__internal_b46d302598cd8e1730d58014631d7b581b24be4b01363078da7dcfbeab7068e6->leave($__internal_b46d302598cd8e1730d58014631d7b581b24be4b01363078da7dcfbeab7068e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75210000ddd4940358dc1a66cfc74a0f6a9f019de40cf55384da4d1ac22482ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75210000ddd4940358dc1a66cfc74a0f6a9f019de40cf55384da4d1ac22482ba->enter($__internal_75210000ddd4940358dc1a66cfc74a0f6a9f019de40cf55384da4d1ac22482ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d30c6a4c2796ce918cf57ff2f2c6c77b86ff2e20b414c19d26c3b32d947496f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30c6a4c2796ce918cf57ff2f2c6c77b86ff2e20b414c19d26c3b32d947496f5->enter($__internal_d30c6a4c2796ce918cf57ff2f2c6c77b86ff2e20b414c19d26c3b32d947496f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d30c6a4c2796ce918cf57ff2f2c6c77b86ff2e20b414c19d26c3b32d947496f5->leave($__internal_d30c6a4c2796ce918cf57ff2f2c6c77b86ff2e20b414c19d26c3b32d947496f5_prof);

        
        $__internal_75210000ddd4940358dc1a66cfc74a0f6a9f019de40cf55384da4d1ac22482ba->leave($__internal_75210000ddd4940358dc1a66cfc74a0f6a9f019de40cf55384da4d1ac22482ba_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a5e9de6d84799bfcb9f63bf119f5e97f326b50746e153972fad2cca898ffb956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5e9de6d84799bfcb9f63bf119f5e97f326b50746e153972fad2cca898ffb956->enter($__internal_a5e9de6d84799bfcb9f63bf119f5e97f326b50746e153972fad2cca898ffb956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_24609b7033bc8dc28abb09f7f2c7ef2f755d0b550f1edede784bd7872f3a5ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24609b7033bc8dc28abb09f7f2c7ef2f755d0b550f1edede784bd7872f3a5ebd->enter($__internal_24609b7033bc8dc28abb09f7f2c7ef2f755d0b550f1edede784bd7872f3a5ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_24609b7033bc8dc28abb09f7f2c7ef2f755d0b550f1edede784bd7872f3a5ebd->leave($__internal_24609b7033bc8dc28abb09f7f2c7ef2f755d0b550f1edede784bd7872f3a5ebd_prof);

        
        $__internal_a5e9de6d84799bfcb9f63bf119f5e97f326b50746e153972fad2cca898ffb956->leave($__internal_a5e9de6d84799bfcb9f63bf119f5e97f326b50746e153972fad2cca898ffb956_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_158d993606a4d658bca673953755d583ab44b25f10cf73f73f4373f33d082fe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158d993606a4d658bca673953755d583ab44b25f10cf73f73f4373f33d082fe0->enter($__internal_158d993606a4d658bca673953755d583ab44b25f10cf73f73f4373f33d082fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a91368c7b8647afd0bea4e9cde78edaa0c1c1e2e4616bfe23ad326a6c214ccaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91368c7b8647afd0bea4e9cde78edaa0c1c1e2e4616bfe23ad326a6c214ccaa->enter($__internal_a91368c7b8647afd0bea4e9cde78edaa0c1c1e2e4616bfe23ad326a6c214ccaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a91368c7b8647afd0bea4e9cde78edaa0c1c1e2e4616bfe23ad326a6c214ccaa->leave($__internal_a91368c7b8647afd0bea4e9cde78edaa0c1c1e2e4616bfe23ad326a6c214ccaa_prof);

        
        $__internal_158d993606a4d658bca673953755d583ab44b25f10cf73f73f4373f33d082fe0->leave($__internal_158d993606a4d658bca673953755d583ab44b25f10cf73f73f4373f33d082fe0_prof);

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
