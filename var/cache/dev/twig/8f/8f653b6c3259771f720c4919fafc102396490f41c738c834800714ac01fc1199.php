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
        $__internal_f7a9de91553387f7c10e9d89f161f60efefe62154d739b58d77bea7fc2b67359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a9de91553387f7c10e9d89f161f60efefe62154d739b58d77bea7fc2b67359->enter($__internal_f7a9de91553387f7c10e9d89f161f60efefe62154d739b58d77bea7fc2b67359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0377e3199d906f143ce3579567af27908da45df34594c51aa307db38522a577a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0377e3199d906f143ce3579567af27908da45df34594c51aa307db38522a577a->enter($__internal_0377e3199d906f143ce3579567af27908da45df34594c51aa307db38522a577a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7a9de91553387f7c10e9d89f161f60efefe62154d739b58d77bea7fc2b67359->leave($__internal_f7a9de91553387f7c10e9d89f161f60efefe62154d739b58d77bea7fc2b67359_prof);

        
        $__internal_0377e3199d906f143ce3579567af27908da45df34594c51aa307db38522a577a->leave($__internal_0377e3199d906f143ce3579567af27908da45df34594c51aa307db38522a577a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5dbf6e5da859751b8cfee33f3d09b42f353b1436adab23ecbba861dda76fedd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dbf6e5da859751b8cfee33f3d09b42f353b1436adab23ecbba861dda76fedd9->enter($__internal_5dbf6e5da859751b8cfee33f3d09b42f353b1436adab23ecbba861dda76fedd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fc65b0a7d401407a140c1faf8fc05bed014fa0ef4d40cce996c5605ef629d24b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc65b0a7d401407a140c1faf8fc05bed014fa0ef4d40cce996c5605ef629d24b->enter($__internal_fc65b0a7d401407a140c1faf8fc05bed014fa0ef4d40cce996c5605ef629d24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fc65b0a7d401407a140c1faf8fc05bed014fa0ef4d40cce996c5605ef629d24b->leave($__internal_fc65b0a7d401407a140c1faf8fc05bed014fa0ef4d40cce996c5605ef629d24b_prof);

        
        $__internal_5dbf6e5da859751b8cfee33f3d09b42f353b1436adab23ecbba861dda76fedd9->leave($__internal_5dbf6e5da859751b8cfee33f3d09b42f353b1436adab23ecbba861dda76fedd9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6307be8fa4e264617e5b93ee98ee67b082e12e0e04eb067af6c4387c80e9813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6307be8fa4e264617e5b93ee98ee67b082e12e0e04eb067af6c4387c80e9813->enter($__internal_c6307be8fa4e264617e5b93ee98ee67b082e12e0e04eb067af6c4387c80e9813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_993458a808b3d505e1725b477c9fb13b4f114533c054365911554f076ba32733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993458a808b3d505e1725b477c9fb13b4f114533c054365911554f076ba32733->enter($__internal_993458a808b3d505e1725b477c9fb13b4f114533c054365911554f076ba32733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_993458a808b3d505e1725b477c9fb13b4f114533c054365911554f076ba32733->leave($__internal_993458a808b3d505e1725b477c9fb13b4f114533c054365911554f076ba32733_prof);

        
        $__internal_c6307be8fa4e264617e5b93ee98ee67b082e12e0e04eb067af6c4387c80e9813->leave($__internal_c6307be8fa4e264617e5b93ee98ee67b082e12e0e04eb067af6c4387c80e9813_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eaf85aeb9a9776c282f8bcea6ab29f0e5241662bafd5dd2c97de871bc7ec9f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf85aeb9a9776c282f8bcea6ab29f0e5241662bafd5dd2c97de871bc7ec9f11->enter($__internal_eaf85aeb9a9776c282f8bcea6ab29f0e5241662bafd5dd2c97de871bc7ec9f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5427a0b25285fbf6dbe43fffb70dc1a8a170155a11b303c90394ff9130cc1fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5427a0b25285fbf6dbe43fffb70dc1a8a170155a11b303c90394ff9130cc1fdb->enter($__internal_5427a0b25285fbf6dbe43fffb70dc1a8a170155a11b303c90394ff9130cc1fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_5427a0b25285fbf6dbe43fffb70dc1a8a170155a11b303c90394ff9130cc1fdb->leave($__internal_5427a0b25285fbf6dbe43fffb70dc1a8a170155a11b303c90394ff9130cc1fdb_prof);

        
        $__internal_eaf85aeb9a9776c282f8bcea6ab29f0e5241662bafd5dd2c97de871bc7ec9f11->leave($__internal_eaf85aeb9a9776c282f8bcea6ab29f0e5241662bafd5dd2c97de871bc7ec9f11_prof);

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
