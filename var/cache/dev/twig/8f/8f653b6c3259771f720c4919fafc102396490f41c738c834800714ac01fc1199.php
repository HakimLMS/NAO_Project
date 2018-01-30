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
        $__internal_935dacb8a561b6aac2a1164e4e54b27457943cd3cf0867dc1800965d2151a8c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_935dacb8a561b6aac2a1164e4e54b27457943cd3cf0867dc1800965d2151a8c1->enter($__internal_935dacb8a561b6aac2a1164e4e54b27457943cd3cf0867dc1800965d2151a8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3dea98d6d2466272b299a119e69650d88e37b36b1da2b989c1c3a9690134fa79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dea98d6d2466272b299a119e69650d88e37b36b1da2b989c1c3a9690134fa79->enter($__internal_3dea98d6d2466272b299a119e69650d88e37b36b1da2b989c1c3a9690134fa79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_935dacb8a561b6aac2a1164e4e54b27457943cd3cf0867dc1800965d2151a8c1->leave($__internal_935dacb8a561b6aac2a1164e4e54b27457943cd3cf0867dc1800965d2151a8c1_prof);

        
        $__internal_3dea98d6d2466272b299a119e69650d88e37b36b1da2b989c1c3a9690134fa79->leave($__internal_3dea98d6d2466272b299a119e69650d88e37b36b1da2b989c1c3a9690134fa79_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aceeaa3cb158080fdc019c4134eb071b9fcb3b146348524fb678bf5e67e05ec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aceeaa3cb158080fdc019c4134eb071b9fcb3b146348524fb678bf5e67e05ec2->enter($__internal_aceeaa3cb158080fdc019c4134eb071b9fcb3b146348524fb678bf5e67e05ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9ed960ed8ea28f7f316789090d4fa69ea5d9b42984925528b8fd6bcf9745e981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed960ed8ea28f7f316789090d4fa69ea5d9b42984925528b8fd6bcf9745e981->enter($__internal_9ed960ed8ea28f7f316789090d4fa69ea5d9b42984925528b8fd6bcf9745e981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9ed960ed8ea28f7f316789090d4fa69ea5d9b42984925528b8fd6bcf9745e981->leave($__internal_9ed960ed8ea28f7f316789090d4fa69ea5d9b42984925528b8fd6bcf9745e981_prof);

        
        $__internal_aceeaa3cb158080fdc019c4134eb071b9fcb3b146348524fb678bf5e67e05ec2->leave($__internal_aceeaa3cb158080fdc019c4134eb071b9fcb3b146348524fb678bf5e67e05ec2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cff09d4e1ef6a4cfe31afda0fc9d896266b13f3605f939a84cbb90012c2348f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff09d4e1ef6a4cfe31afda0fc9d896266b13f3605f939a84cbb90012c2348f3->enter($__internal_cff09d4e1ef6a4cfe31afda0fc9d896266b13f3605f939a84cbb90012c2348f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0727a55d1b58bb6478386d8429696c520d77c602ab63456273e661d4a5eef9a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0727a55d1b58bb6478386d8429696c520d77c602ab63456273e661d4a5eef9a0->enter($__internal_0727a55d1b58bb6478386d8429696c520d77c602ab63456273e661d4a5eef9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0727a55d1b58bb6478386d8429696c520d77c602ab63456273e661d4a5eef9a0->leave($__internal_0727a55d1b58bb6478386d8429696c520d77c602ab63456273e661d4a5eef9a0_prof);

        
        $__internal_cff09d4e1ef6a4cfe31afda0fc9d896266b13f3605f939a84cbb90012c2348f3->leave($__internal_cff09d4e1ef6a4cfe31afda0fc9d896266b13f3605f939a84cbb90012c2348f3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_428fc8639441ac74667e7473a6eae323771bf5cd09934944bbde3b05ebb45520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428fc8639441ac74667e7473a6eae323771bf5cd09934944bbde3b05ebb45520->enter($__internal_428fc8639441ac74667e7473a6eae323771bf5cd09934944bbde3b05ebb45520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2061c76b351c08d5aa739e566518c4547d8d671d7bbcf0792b2a4f46ed6732ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2061c76b351c08d5aa739e566518c4547d8d671d7bbcf0792b2a4f46ed6732ac->enter($__internal_2061c76b351c08d5aa739e566518c4547d8d671d7bbcf0792b2a4f46ed6732ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2061c76b351c08d5aa739e566518c4547d8d671d7bbcf0792b2a4f46ed6732ac->leave($__internal_2061c76b351c08d5aa739e566518c4547d8d671d7bbcf0792b2a4f46ed6732ac_prof);

        
        $__internal_428fc8639441ac74667e7473a6eae323771bf5cd09934944bbde3b05ebb45520->leave($__internal_428fc8639441ac74667e7473a6eae323771bf5cd09934944bbde3b05ebb45520_prof);

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
