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
        $__internal_17d808baf1356524c85c9c103c8851848e94fee4733229b220deca9dd200102b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d808baf1356524c85c9c103c8851848e94fee4733229b220deca9dd200102b->enter($__internal_17d808baf1356524c85c9c103c8851848e94fee4733229b220deca9dd200102b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1c4173aca2156de46bddf2c16c0bc7bd562253019e82e6bbbf5f164e166197f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4173aca2156de46bddf2c16c0bc7bd562253019e82e6bbbf5f164e166197f4->enter($__internal_1c4173aca2156de46bddf2c16c0bc7bd562253019e82e6bbbf5f164e166197f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17d808baf1356524c85c9c103c8851848e94fee4733229b220deca9dd200102b->leave($__internal_17d808baf1356524c85c9c103c8851848e94fee4733229b220deca9dd200102b_prof);

        
        $__internal_1c4173aca2156de46bddf2c16c0bc7bd562253019e82e6bbbf5f164e166197f4->leave($__internal_1c4173aca2156de46bddf2c16c0bc7bd562253019e82e6bbbf5f164e166197f4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_559df74039e1d925646c3504377471aed5bbf35582b58f067f619ddb2b43b194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_559df74039e1d925646c3504377471aed5bbf35582b58f067f619ddb2b43b194->enter($__internal_559df74039e1d925646c3504377471aed5bbf35582b58f067f619ddb2b43b194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f909fbfe50e829517af8b97be6a567e296a0399ceee88c2f3fb3f4ed8ea06fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f909fbfe50e829517af8b97be6a567e296a0399ceee88c2f3fb3f4ed8ea06fca->enter($__internal_f909fbfe50e829517af8b97be6a567e296a0399ceee88c2f3fb3f4ed8ea06fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f909fbfe50e829517af8b97be6a567e296a0399ceee88c2f3fb3f4ed8ea06fca->leave($__internal_f909fbfe50e829517af8b97be6a567e296a0399ceee88c2f3fb3f4ed8ea06fca_prof);

        
        $__internal_559df74039e1d925646c3504377471aed5bbf35582b58f067f619ddb2b43b194->leave($__internal_559df74039e1d925646c3504377471aed5bbf35582b58f067f619ddb2b43b194_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e172c193a4d0141853755f35447bddc2cbe2b98a74f02da3b2236627adbf41ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e172c193a4d0141853755f35447bddc2cbe2b98a74f02da3b2236627adbf41ff->enter($__internal_e172c193a4d0141853755f35447bddc2cbe2b98a74f02da3b2236627adbf41ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2421e743529d768b8ef70445226b4ac3b360e6cc0705fc79142ea171c25732f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2421e743529d768b8ef70445226b4ac3b360e6cc0705fc79142ea171c25732f5->enter($__internal_2421e743529d768b8ef70445226b4ac3b360e6cc0705fc79142ea171c25732f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2421e743529d768b8ef70445226b4ac3b360e6cc0705fc79142ea171c25732f5->leave($__internal_2421e743529d768b8ef70445226b4ac3b360e6cc0705fc79142ea171c25732f5_prof);

        
        $__internal_e172c193a4d0141853755f35447bddc2cbe2b98a74f02da3b2236627adbf41ff->leave($__internal_e172c193a4d0141853755f35447bddc2cbe2b98a74f02da3b2236627adbf41ff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_20baae912c898e5b2c5a4427a0f8a1c64ff21d1465ffcc7fed010c8d9e307894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20baae912c898e5b2c5a4427a0f8a1c64ff21d1465ffcc7fed010c8d9e307894->enter($__internal_20baae912c898e5b2c5a4427a0f8a1c64ff21d1465ffcc7fed010c8d9e307894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b08234ed4e96662bd83a60b02478f60e9a33440e0c32fe3addc02c08cefdf1c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b08234ed4e96662bd83a60b02478f60e9a33440e0c32fe3addc02c08cefdf1c0->enter($__internal_b08234ed4e96662bd83a60b02478f60e9a33440e0c32fe3addc02c08cefdf1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_b08234ed4e96662bd83a60b02478f60e9a33440e0c32fe3addc02c08cefdf1c0->leave($__internal_b08234ed4e96662bd83a60b02478f60e9a33440e0c32fe3addc02c08cefdf1c0_prof);

        
        $__internal_20baae912c898e5b2c5a4427a0f8a1c64ff21d1465ffcc7fed010c8d9e307894->leave($__internal_20baae912c898e5b2c5a4427a0f8a1c64ff21d1465ffcc7fed010c8d9e307894_prof);

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
