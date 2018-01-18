<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_76a0247dec4b42e277b54b1e85c86f53751432c864d6926126790d4959c436f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_f9eddf2e7ae643e220948e93df381d218e5b26f1494a5e60b1fde4b370c39b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9eddf2e7ae643e220948e93df381d218e5b26f1494a5e60b1fde4b370c39b0c->enter($__internal_f9eddf2e7ae643e220948e93df381d218e5b26f1494a5e60b1fde4b370c39b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cbc057a3c06ee36269f3197e903057c9e9d046e488f6ce65734498594e8bf8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc057a3c06ee36269f3197e903057c9e9d046e488f6ce65734498594e8bf8ad->enter($__internal_cbc057a3c06ee36269f3197e903057c9e9d046e488f6ce65734498594e8bf8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9eddf2e7ae643e220948e93df381d218e5b26f1494a5e60b1fde4b370c39b0c->leave($__internal_f9eddf2e7ae643e220948e93df381d218e5b26f1494a5e60b1fde4b370c39b0c_prof);

        
        $__internal_cbc057a3c06ee36269f3197e903057c9e9d046e488f6ce65734498594e8bf8ad->leave($__internal_cbc057a3c06ee36269f3197e903057c9e9d046e488f6ce65734498594e8bf8ad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_149ea77d56a2ee502165fc1a3b0602d1fc9c36079cbf0242427540adc4e73915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_149ea77d56a2ee502165fc1a3b0602d1fc9c36079cbf0242427540adc4e73915->enter($__internal_149ea77d56a2ee502165fc1a3b0602d1fc9c36079cbf0242427540adc4e73915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7b8b4b452e100acd60b1fb96df5c6858e5b9cc7c7e322ac61722ca526aa482b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8b4b452e100acd60b1fb96df5c6858e5b9cc7c7e322ac61722ca526aa482b5->enter($__internal_7b8b4b452e100acd60b1fb96df5c6858e5b9cc7c7e322ac61722ca526aa482b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7b8b4b452e100acd60b1fb96df5c6858e5b9cc7c7e322ac61722ca526aa482b5->leave($__internal_7b8b4b452e100acd60b1fb96df5c6858e5b9cc7c7e322ac61722ca526aa482b5_prof);

        
        $__internal_149ea77d56a2ee502165fc1a3b0602d1fc9c36079cbf0242427540adc4e73915->leave($__internal_149ea77d56a2ee502165fc1a3b0602d1fc9c36079cbf0242427540adc4e73915_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e17428ea613c28a8ab2ecd2ecc049f1ff1a0a415faf70955a707a3c2f374acd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e17428ea613c28a8ab2ecd2ecc049f1ff1a0a415faf70955a707a3c2f374acd7->enter($__internal_e17428ea613c28a8ab2ecd2ecc049f1ff1a0a415faf70955a707a3c2f374acd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f53a2d328e588fc61323abfc67c4b48695c4eb35dbbf95ace0f9c410f383e0ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53a2d328e588fc61323abfc67c4b48695c4eb35dbbf95ace0f9c410f383e0ea->enter($__internal_f53a2d328e588fc61323abfc67c4b48695c4eb35dbbf95ace0f9c410f383e0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f53a2d328e588fc61323abfc67c4b48695c4eb35dbbf95ace0f9c410f383e0ea->leave($__internal_f53a2d328e588fc61323abfc67c4b48695c4eb35dbbf95ace0f9c410f383e0ea_prof);

        
        $__internal_e17428ea613c28a8ab2ecd2ecc049f1ff1a0a415faf70955a707a3c2f374acd7->leave($__internal_e17428ea613c28a8ab2ecd2ecc049f1ff1a0a415faf70955a707a3c2f374acd7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d505f10a736b13cc8e37149ab9270424648fb9853e62dedc30b5873dfdc937e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d505f10a736b13cc8e37149ab9270424648fb9853e62dedc30b5873dfdc937e->enter($__internal_4d505f10a736b13cc8e37149ab9270424648fb9853e62dedc30b5873dfdc937e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_05aaa3ca78bedcaebc368f4adb0e917632a6999bb97c69e3ecc1a2d3489e6e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05aaa3ca78bedcaebc368f4adb0e917632a6999bb97c69e3ecc1a2d3489e6e05->enter($__internal_05aaa3ca78bedcaebc368f4adb0e917632a6999bb97c69e3ecc1a2d3489e6e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_05aaa3ca78bedcaebc368f4adb0e917632a6999bb97c69e3ecc1a2d3489e6e05->leave($__internal_05aaa3ca78bedcaebc368f4adb0e917632a6999bb97c69e3ecc1a2d3489e6e05_prof);

        
        $__internal_4d505f10a736b13cc8e37149ab9270424648fb9853e62dedc30b5873dfdc937e->leave($__internal_4d505f10a736b13cc8e37149ab9270424648fb9853e62dedc30b5873dfdc937e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
