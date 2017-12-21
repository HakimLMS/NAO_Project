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
        $__internal_d458f1b724dec1e7e6aee6e97d9e0a9ae30838f25d0788a485a0afd1ebd542ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d458f1b724dec1e7e6aee6e97d9e0a9ae30838f25d0788a485a0afd1ebd542ed->enter($__internal_d458f1b724dec1e7e6aee6e97d9e0a9ae30838f25d0788a485a0afd1ebd542ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b07ed7f2cdea0b1eef5e478aabd52217d99f66362b950cceb503e00b8354ed08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07ed7f2cdea0b1eef5e478aabd52217d99f66362b950cceb503e00b8354ed08->enter($__internal_b07ed7f2cdea0b1eef5e478aabd52217d99f66362b950cceb503e00b8354ed08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d458f1b724dec1e7e6aee6e97d9e0a9ae30838f25d0788a485a0afd1ebd542ed->leave($__internal_d458f1b724dec1e7e6aee6e97d9e0a9ae30838f25d0788a485a0afd1ebd542ed_prof);

        
        $__internal_b07ed7f2cdea0b1eef5e478aabd52217d99f66362b950cceb503e00b8354ed08->leave($__internal_b07ed7f2cdea0b1eef5e478aabd52217d99f66362b950cceb503e00b8354ed08_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9049a14c4fe2dd45b4efa0a7a4899733073f75a25714561f300c6d1f74548bba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9049a14c4fe2dd45b4efa0a7a4899733073f75a25714561f300c6d1f74548bba->enter($__internal_9049a14c4fe2dd45b4efa0a7a4899733073f75a25714561f300c6d1f74548bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e63b9d48e4eb7ae15605135cc4e325674fd7aeca9dc50a64b7df2a544c6c7f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e63b9d48e4eb7ae15605135cc4e325674fd7aeca9dc50a64b7df2a544c6c7f70->enter($__internal_e63b9d48e4eb7ae15605135cc4e325674fd7aeca9dc50a64b7df2a544c6c7f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e63b9d48e4eb7ae15605135cc4e325674fd7aeca9dc50a64b7df2a544c6c7f70->leave($__internal_e63b9d48e4eb7ae15605135cc4e325674fd7aeca9dc50a64b7df2a544c6c7f70_prof);

        
        $__internal_9049a14c4fe2dd45b4efa0a7a4899733073f75a25714561f300c6d1f74548bba->leave($__internal_9049a14c4fe2dd45b4efa0a7a4899733073f75a25714561f300c6d1f74548bba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_24530ca758314216ef480657d420efaf50459d07d4f5fd721afda133b0e096f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24530ca758314216ef480657d420efaf50459d07d4f5fd721afda133b0e096f6->enter($__internal_24530ca758314216ef480657d420efaf50459d07d4f5fd721afda133b0e096f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_34127d5b56e4a8b728050733c119e3fb2508219cc42a39e26224c6ac635a4727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34127d5b56e4a8b728050733c119e3fb2508219cc42a39e26224c6ac635a4727->enter($__internal_34127d5b56e4a8b728050733c119e3fb2508219cc42a39e26224c6ac635a4727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_34127d5b56e4a8b728050733c119e3fb2508219cc42a39e26224c6ac635a4727->leave($__internal_34127d5b56e4a8b728050733c119e3fb2508219cc42a39e26224c6ac635a4727_prof);

        
        $__internal_24530ca758314216ef480657d420efaf50459d07d4f5fd721afda133b0e096f6->leave($__internal_24530ca758314216ef480657d420efaf50459d07d4f5fd721afda133b0e096f6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_10841d684e461feb012cfa437560fae7dede831c773b31b0dbab198ecf360d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10841d684e461feb012cfa437560fae7dede831c773b31b0dbab198ecf360d47->enter($__internal_10841d684e461feb012cfa437560fae7dede831c773b31b0dbab198ecf360d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9b85817e8b0b09024a86d512522cd6e5119c18e8d0942e78d4384d8e5fd5aef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b85817e8b0b09024a86d512522cd6e5119c18e8d0942e78d4384d8e5fd5aef4->enter($__internal_9b85817e8b0b09024a86d512522cd6e5119c18e8d0942e78d4384d8e5fd5aef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_9b85817e8b0b09024a86d512522cd6e5119c18e8d0942e78d4384d8e5fd5aef4->leave($__internal_9b85817e8b0b09024a86d512522cd6e5119c18e8d0942e78d4384d8e5fd5aef4_prof);

        
        $__internal_10841d684e461feb012cfa437560fae7dede831c773b31b0dbab198ecf360d47->leave($__internal_10841d684e461feb012cfa437560fae7dede831c773b31b0dbab198ecf360d47_prof);

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
