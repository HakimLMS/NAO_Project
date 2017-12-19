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
        $__internal_2b942b590ed33e0540f64d6861f7ad7775b08da0f1d4410c39a78d5711a1e3ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b942b590ed33e0540f64d6861f7ad7775b08da0f1d4410c39a78d5711a1e3ef->enter($__internal_2b942b590ed33e0540f64d6861f7ad7775b08da0f1d4410c39a78d5711a1e3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_23c310beb981acd36f1e6d68d9fce21ba76bce2457ba7957a5724c0487e5118b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c310beb981acd36f1e6d68d9fce21ba76bce2457ba7957a5724c0487e5118b->enter($__internal_23c310beb981acd36f1e6d68d9fce21ba76bce2457ba7957a5724c0487e5118b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b942b590ed33e0540f64d6861f7ad7775b08da0f1d4410c39a78d5711a1e3ef->leave($__internal_2b942b590ed33e0540f64d6861f7ad7775b08da0f1d4410c39a78d5711a1e3ef_prof);

        
        $__internal_23c310beb981acd36f1e6d68d9fce21ba76bce2457ba7957a5724c0487e5118b->leave($__internal_23c310beb981acd36f1e6d68d9fce21ba76bce2457ba7957a5724c0487e5118b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1d0eedb7cdeb6b9889f11e74e03f05f94ddeaecc63de087e355b7da2f16de0b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0eedb7cdeb6b9889f11e74e03f05f94ddeaecc63de087e355b7da2f16de0b6->enter($__internal_1d0eedb7cdeb6b9889f11e74e03f05f94ddeaecc63de087e355b7da2f16de0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b39e0037857c4f7586a6e60e690096317902e5469391b4f2db65d52a8c0ca852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39e0037857c4f7586a6e60e690096317902e5469391b4f2db65d52a8c0ca852->enter($__internal_b39e0037857c4f7586a6e60e690096317902e5469391b4f2db65d52a8c0ca852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b39e0037857c4f7586a6e60e690096317902e5469391b4f2db65d52a8c0ca852->leave($__internal_b39e0037857c4f7586a6e60e690096317902e5469391b4f2db65d52a8c0ca852_prof);

        
        $__internal_1d0eedb7cdeb6b9889f11e74e03f05f94ddeaecc63de087e355b7da2f16de0b6->leave($__internal_1d0eedb7cdeb6b9889f11e74e03f05f94ddeaecc63de087e355b7da2f16de0b6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5d432e6c02c8eaf15f4a4f3ff0ccf6b246639af12e511776ed71ae2919b564d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d432e6c02c8eaf15f4a4f3ff0ccf6b246639af12e511776ed71ae2919b564d4->enter($__internal_5d432e6c02c8eaf15f4a4f3ff0ccf6b246639af12e511776ed71ae2919b564d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2ad0085ea24629286a1fc6b91274e0e6246dc5be4c285fe8a09a63788c66cb2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad0085ea24629286a1fc6b91274e0e6246dc5be4c285fe8a09a63788c66cb2e->enter($__internal_2ad0085ea24629286a1fc6b91274e0e6246dc5be4c285fe8a09a63788c66cb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2ad0085ea24629286a1fc6b91274e0e6246dc5be4c285fe8a09a63788c66cb2e->leave($__internal_2ad0085ea24629286a1fc6b91274e0e6246dc5be4c285fe8a09a63788c66cb2e_prof);

        
        $__internal_5d432e6c02c8eaf15f4a4f3ff0ccf6b246639af12e511776ed71ae2919b564d4->leave($__internal_5d432e6c02c8eaf15f4a4f3ff0ccf6b246639af12e511776ed71ae2919b564d4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_168181c51645530700ce346c0e05f0176cc4465562188697ac0f7b3275976c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_168181c51645530700ce346c0e05f0176cc4465562188697ac0f7b3275976c4c->enter($__internal_168181c51645530700ce346c0e05f0176cc4465562188697ac0f7b3275976c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a6988a2d41fb3903f3514fda3e1a7793f980157aa24cf2084dac960cd6ac029e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6988a2d41fb3903f3514fda3e1a7793f980157aa24cf2084dac960cd6ac029e->enter($__internal_a6988a2d41fb3903f3514fda3e1a7793f980157aa24cf2084dac960cd6ac029e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_a6988a2d41fb3903f3514fda3e1a7793f980157aa24cf2084dac960cd6ac029e->leave($__internal_a6988a2d41fb3903f3514fda3e1a7793f980157aa24cf2084dac960cd6ac029e_prof);

        
        $__internal_168181c51645530700ce346c0e05f0176cc4465562188697ac0f7b3275976c4c->leave($__internal_168181c51645530700ce346c0e05f0176cc4465562188697ac0f7b3275976c4c_prof);

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
