<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_acb880fc3b94667c83acd66c2e3183b687cc9751184bcac3aa7ddf178b40dc11 extends Twig_Template
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
        $__internal_59662e842d92631c4049743f575e06f2be3a071c243f9c9dcf8e1d3b15e78687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59662e842d92631c4049743f575e06f2be3a071c243f9c9dcf8e1d3b15e78687->enter($__internal_59662e842d92631c4049743f575e06f2be3a071c243f9c9dcf8e1d3b15e78687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e398aa35010a682ee8fe1bfef2cfe50da9af9f608d0bb13d98c7a75197a3f286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e398aa35010a682ee8fe1bfef2cfe50da9af9f608d0bb13d98c7a75197a3f286->enter($__internal_e398aa35010a682ee8fe1bfef2cfe50da9af9f608d0bb13d98c7a75197a3f286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59662e842d92631c4049743f575e06f2be3a071c243f9c9dcf8e1d3b15e78687->leave($__internal_59662e842d92631c4049743f575e06f2be3a071c243f9c9dcf8e1d3b15e78687_prof);

        
        $__internal_e398aa35010a682ee8fe1bfef2cfe50da9af9f608d0bb13d98c7a75197a3f286->leave($__internal_e398aa35010a682ee8fe1bfef2cfe50da9af9f608d0bb13d98c7a75197a3f286_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_07046218e7833603ba1f2079ebbc277c15371492b7aa3e918cd8f86e79ac9c41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07046218e7833603ba1f2079ebbc277c15371492b7aa3e918cd8f86e79ac9c41->enter($__internal_07046218e7833603ba1f2079ebbc277c15371492b7aa3e918cd8f86e79ac9c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0602430c7fd6c1b849435796b82e0b6015d7ea917e3a24b60ff82fffc681dbeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0602430c7fd6c1b849435796b82e0b6015d7ea917e3a24b60ff82fffc681dbeb->enter($__internal_0602430c7fd6c1b849435796b82e0b6015d7ea917e3a24b60ff82fffc681dbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0602430c7fd6c1b849435796b82e0b6015d7ea917e3a24b60ff82fffc681dbeb->leave($__internal_0602430c7fd6c1b849435796b82e0b6015d7ea917e3a24b60ff82fffc681dbeb_prof);

        
        $__internal_07046218e7833603ba1f2079ebbc277c15371492b7aa3e918cd8f86e79ac9c41->leave($__internal_07046218e7833603ba1f2079ebbc277c15371492b7aa3e918cd8f86e79ac9c41_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_03333e912eaab4146b2b5b96ff5f6a2fe0c0a210866679dcd2070cd3cc053c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03333e912eaab4146b2b5b96ff5f6a2fe0c0a210866679dcd2070cd3cc053c64->enter($__internal_03333e912eaab4146b2b5b96ff5f6a2fe0c0a210866679dcd2070cd3cc053c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_da80bfb1851cb544bc7a3579eafc0361ed4333c442e5081aeb2d90251f839918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da80bfb1851cb544bc7a3579eafc0361ed4333c442e5081aeb2d90251f839918->enter($__internal_da80bfb1851cb544bc7a3579eafc0361ed4333c442e5081aeb2d90251f839918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_da80bfb1851cb544bc7a3579eafc0361ed4333c442e5081aeb2d90251f839918->leave($__internal_da80bfb1851cb544bc7a3579eafc0361ed4333c442e5081aeb2d90251f839918_prof);

        
        $__internal_03333e912eaab4146b2b5b96ff5f6a2fe0c0a210866679dcd2070cd3cc053c64->leave($__internal_03333e912eaab4146b2b5b96ff5f6a2fe0c0a210866679dcd2070cd3cc053c64_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0c57a1cd605b2d031c53be23d0bbf7885180cc01518b87b1f96abda790c9ffd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c57a1cd605b2d031c53be23d0bbf7885180cc01518b87b1f96abda790c9ffd7->enter($__internal_0c57a1cd605b2d031c53be23d0bbf7885180cc01518b87b1f96abda790c9ffd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_439cc269f5ef9bc22f87a97647b9810f02c42915efd22e6953047caf5c83b794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439cc269f5ef9bc22f87a97647b9810f02c42915efd22e6953047caf5c83b794->enter($__internal_439cc269f5ef9bc22f87a97647b9810f02c42915efd22e6953047caf5c83b794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_439cc269f5ef9bc22f87a97647b9810f02c42915efd22e6953047caf5c83b794->leave($__internal_439cc269f5ef9bc22f87a97647b9810f02c42915efd22e6953047caf5c83b794_prof);

        
        $__internal_0c57a1cd605b2d031c53be23d0bbf7885180cc01518b87b1f96abda790c9ffd7->leave($__internal_0c57a1cd605b2d031c53be23d0bbf7885180cc01518b87b1f96abda790c9ffd7_prof);

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
