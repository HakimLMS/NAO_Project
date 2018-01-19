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
        $__internal_5b302410ba7d2bed6ea632ecc03d0b0e2ba6e08809a41369caac4203fdb5b269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b302410ba7d2bed6ea632ecc03d0b0e2ba6e08809a41369caac4203fdb5b269->enter($__internal_5b302410ba7d2bed6ea632ecc03d0b0e2ba6e08809a41369caac4203fdb5b269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_44e916e94a12b22c71f571c4a221ba3fe8e99d6709311350e1a749bfa183ec94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e916e94a12b22c71f571c4a221ba3fe8e99d6709311350e1a749bfa183ec94->enter($__internal_44e916e94a12b22c71f571c4a221ba3fe8e99d6709311350e1a749bfa183ec94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b302410ba7d2bed6ea632ecc03d0b0e2ba6e08809a41369caac4203fdb5b269->leave($__internal_5b302410ba7d2bed6ea632ecc03d0b0e2ba6e08809a41369caac4203fdb5b269_prof);

        
        $__internal_44e916e94a12b22c71f571c4a221ba3fe8e99d6709311350e1a749bfa183ec94->leave($__internal_44e916e94a12b22c71f571c4a221ba3fe8e99d6709311350e1a749bfa183ec94_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_103e0be8fd2ed02a9e8609c84f3257d66bd5f84c93f9391acb3c3e896a6082ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_103e0be8fd2ed02a9e8609c84f3257d66bd5f84c93f9391acb3c3e896a6082ff->enter($__internal_103e0be8fd2ed02a9e8609c84f3257d66bd5f84c93f9391acb3c3e896a6082ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2e27b1f73ab3afec0033d34097f8e3dd5faeffcc5cb6bf88262c3a8422284e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e27b1f73ab3afec0033d34097f8e3dd5faeffcc5cb6bf88262c3a8422284e8f->enter($__internal_2e27b1f73ab3afec0033d34097f8e3dd5faeffcc5cb6bf88262c3a8422284e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2e27b1f73ab3afec0033d34097f8e3dd5faeffcc5cb6bf88262c3a8422284e8f->leave($__internal_2e27b1f73ab3afec0033d34097f8e3dd5faeffcc5cb6bf88262c3a8422284e8f_prof);

        
        $__internal_103e0be8fd2ed02a9e8609c84f3257d66bd5f84c93f9391acb3c3e896a6082ff->leave($__internal_103e0be8fd2ed02a9e8609c84f3257d66bd5f84c93f9391acb3c3e896a6082ff_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e99e821ca54c0fb4c5bbd02f044b8f3b14886d662a6977914740d5957287cd96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e99e821ca54c0fb4c5bbd02f044b8f3b14886d662a6977914740d5957287cd96->enter($__internal_e99e821ca54c0fb4c5bbd02f044b8f3b14886d662a6977914740d5957287cd96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_83a0f4983b47fead8adba8b14c011198abfdb62a6ac2d40b50ba082be12d7e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a0f4983b47fead8adba8b14c011198abfdb62a6ac2d40b50ba082be12d7e80->enter($__internal_83a0f4983b47fead8adba8b14c011198abfdb62a6ac2d40b50ba082be12d7e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_83a0f4983b47fead8adba8b14c011198abfdb62a6ac2d40b50ba082be12d7e80->leave($__internal_83a0f4983b47fead8adba8b14c011198abfdb62a6ac2d40b50ba082be12d7e80_prof);

        
        $__internal_e99e821ca54c0fb4c5bbd02f044b8f3b14886d662a6977914740d5957287cd96->leave($__internal_e99e821ca54c0fb4c5bbd02f044b8f3b14886d662a6977914740d5957287cd96_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4dc50fc6181e4fff325f5a7826ab807277c9fed285d8e634f02183b20e6be299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc50fc6181e4fff325f5a7826ab807277c9fed285d8e634f02183b20e6be299->enter($__internal_4dc50fc6181e4fff325f5a7826ab807277c9fed285d8e634f02183b20e6be299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ba966da2ff6492de180f7223936f061920ea9b00ed30b913a0b817a99456ab5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba966da2ff6492de180f7223936f061920ea9b00ed30b913a0b817a99456ab5c->enter($__internal_ba966da2ff6492de180f7223936f061920ea9b00ed30b913a0b817a99456ab5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ba966da2ff6492de180f7223936f061920ea9b00ed30b913a0b817a99456ab5c->leave($__internal_ba966da2ff6492de180f7223936f061920ea9b00ed30b913a0b817a99456ab5c_prof);

        
        $__internal_4dc50fc6181e4fff325f5a7826ab807277c9fed285d8e634f02183b20e6be299->leave($__internal_4dc50fc6181e4fff325f5a7826ab807277c9fed285d8e634f02183b20e6be299_prof);

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
