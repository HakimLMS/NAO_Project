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
        $__internal_3dddc41a450d05d8011ca8330b0e7692e094b9b8e105aeb39b7e66249ed1961a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dddc41a450d05d8011ca8330b0e7692e094b9b8e105aeb39b7e66249ed1961a->enter($__internal_3dddc41a450d05d8011ca8330b0e7692e094b9b8e105aeb39b7e66249ed1961a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_811a46b66ed211071acc4dbdec761fd134a305fa6ac108a1be3dc3c1abc5a4b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811a46b66ed211071acc4dbdec761fd134a305fa6ac108a1be3dc3c1abc5a4b5->enter($__internal_811a46b66ed211071acc4dbdec761fd134a305fa6ac108a1be3dc3c1abc5a4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dddc41a450d05d8011ca8330b0e7692e094b9b8e105aeb39b7e66249ed1961a->leave($__internal_3dddc41a450d05d8011ca8330b0e7692e094b9b8e105aeb39b7e66249ed1961a_prof);

        
        $__internal_811a46b66ed211071acc4dbdec761fd134a305fa6ac108a1be3dc3c1abc5a4b5->leave($__internal_811a46b66ed211071acc4dbdec761fd134a305fa6ac108a1be3dc3c1abc5a4b5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_40c7367a8efbc928c08f8ff75d946890b295b88ab03f32642df46a9fb9be6e21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40c7367a8efbc928c08f8ff75d946890b295b88ab03f32642df46a9fb9be6e21->enter($__internal_40c7367a8efbc928c08f8ff75d946890b295b88ab03f32642df46a9fb9be6e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2c6cc738eaca2db234d3e5a308b676dcbfffbd942dd1f186c38ec8323a40d11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6cc738eaca2db234d3e5a308b676dcbfffbd942dd1f186c38ec8323a40d11a->enter($__internal_2c6cc738eaca2db234d3e5a308b676dcbfffbd942dd1f186c38ec8323a40d11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2c6cc738eaca2db234d3e5a308b676dcbfffbd942dd1f186c38ec8323a40d11a->leave($__internal_2c6cc738eaca2db234d3e5a308b676dcbfffbd942dd1f186c38ec8323a40d11a_prof);

        
        $__internal_40c7367a8efbc928c08f8ff75d946890b295b88ab03f32642df46a9fb9be6e21->leave($__internal_40c7367a8efbc928c08f8ff75d946890b295b88ab03f32642df46a9fb9be6e21_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1ad82c1d5df2af34f36699bd3784b13b80e9ca9304792080eacc952ebab8a5ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad82c1d5df2af34f36699bd3784b13b80e9ca9304792080eacc952ebab8a5ea->enter($__internal_1ad82c1d5df2af34f36699bd3784b13b80e9ca9304792080eacc952ebab8a5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8174d01cd479502edcc270f9cfbeb0675d4486fbd2f1ae8de8747f310f622151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8174d01cd479502edcc270f9cfbeb0675d4486fbd2f1ae8de8747f310f622151->enter($__internal_8174d01cd479502edcc270f9cfbeb0675d4486fbd2f1ae8de8747f310f622151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8174d01cd479502edcc270f9cfbeb0675d4486fbd2f1ae8de8747f310f622151->leave($__internal_8174d01cd479502edcc270f9cfbeb0675d4486fbd2f1ae8de8747f310f622151_prof);

        
        $__internal_1ad82c1d5df2af34f36699bd3784b13b80e9ca9304792080eacc952ebab8a5ea->leave($__internal_1ad82c1d5df2af34f36699bd3784b13b80e9ca9304792080eacc952ebab8a5ea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e167d0fa1af6a5db52bf948a892d4d0929c10da5540b040ffa8201c5d2b364b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e167d0fa1af6a5db52bf948a892d4d0929c10da5540b040ffa8201c5d2b364b8->enter($__internal_e167d0fa1af6a5db52bf948a892d4d0929c10da5540b040ffa8201c5d2b364b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f975e6845425c1f596d088e65d48e7bf7df171af4582842efa5596d6460838d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f975e6845425c1f596d088e65d48e7bf7df171af4582842efa5596d6460838d7->enter($__internal_f975e6845425c1f596d088e65d48e7bf7df171af4582842efa5596d6460838d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_f975e6845425c1f596d088e65d48e7bf7df171af4582842efa5596d6460838d7->leave($__internal_f975e6845425c1f596d088e65d48e7bf7df171af4582842efa5596d6460838d7_prof);

        
        $__internal_e167d0fa1af6a5db52bf948a892d4d0929c10da5540b040ffa8201c5d2b364b8->leave($__internal_e167d0fa1af6a5db52bf948a892d4d0929c10da5540b040ffa8201c5d2b364b8_prof);

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
", "@WebProfiler/Collector/router.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
