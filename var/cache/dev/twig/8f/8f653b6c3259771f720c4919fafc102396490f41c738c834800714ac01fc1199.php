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
        $__internal_d0f97df728abc5f52fd4e13b2706366009c7ca698328a29f2cb2a3a777a28229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f97df728abc5f52fd4e13b2706366009c7ca698328a29f2cb2a3a777a28229->enter($__internal_d0f97df728abc5f52fd4e13b2706366009c7ca698328a29f2cb2a3a777a28229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5e1de1fe70f57d63ff39a295a0cee4e3db061c4b91c560a1e0182b596eed1677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1de1fe70f57d63ff39a295a0cee4e3db061c4b91c560a1e0182b596eed1677->enter($__internal_5e1de1fe70f57d63ff39a295a0cee4e3db061c4b91c560a1e0182b596eed1677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0f97df728abc5f52fd4e13b2706366009c7ca698328a29f2cb2a3a777a28229->leave($__internal_d0f97df728abc5f52fd4e13b2706366009c7ca698328a29f2cb2a3a777a28229_prof);

        
        $__internal_5e1de1fe70f57d63ff39a295a0cee4e3db061c4b91c560a1e0182b596eed1677->leave($__internal_5e1de1fe70f57d63ff39a295a0cee4e3db061c4b91c560a1e0182b596eed1677_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6d6f55486c0b34fbc577cfcc0810fbe3cfe9058af1ee1dd440735b3187488623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d6f55486c0b34fbc577cfcc0810fbe3cfe9058af1ee1dd440735b3187488623->enter($__internal_6d6f55486c0b34fbc577cfcc0810fbe3cfe9058af1ee1dd440735b3187488623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9a9b5193033bb54a21a308fcedc0e136aea698cdcd32b2874648440866b1ff89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9b5193033bb54a21a308fcedc0e136aea698cdcd32b2874648440866b1ff89->enter($__internal_9a9b5193033bb54a21a308fcedc0e136aea698cdcd32b2874648440866b1ff89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9a9b5193033bb54a21a308fcedc0e136aea698cdcd32b2874648440866b1ff89->leave($__internal_9a9b5193033bb54a21a308fcedc0e136aea698cdcd32b2874648440866b1ff89_prof);

        
        $__internal_6d6f55486c0b34fbc577cfcc0810fbe3cfe9058af1ee1dd440735b3187488623->leave($__internal_6d6f55486c0b34fbc577cfcc0810fbe3cfe9058af1ee1dd440735b3187488623_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a7ef0416838dcf2c0de402795d142fa4fc7d5914331537f58f5788abb7d5f19c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ef0416838dcf2c0de402795d142fa4fc7d5914331537f58f5788abb7d5f19c->enter($__internal_a7ef0416838dcf2c0de402795d142fa4fc7d5914331537f58f5788abb7d5f19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_377612b149d0e5595d30039c6e767f31ca61d520043f5d5a694026f48a953803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377612b149d0e5595d30039c6e767f31ca61d520043f5d5a694026f48a953803->enter($__internal_377612b149d0e5595d30039c6e767f31ca61d520043f5d5a694026f48a953803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_377612b149d0e5595d30039c6e767f31ca61d520043f5d5a694026f48a953803->leave($__internal_377612b149d0e5595d30039c6e767f31ca61d520043f5d5a694026f48a953803_prof);

        
        $__internal_a7ef0416838dcf2c0de402795d142fa4fc7d5914331537f58f5788abb7d5f19c->leave($__internal_a7ef0416838dcf2c0de402795d142fa4fc7d5914331537f58f5788abb7d5f19c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6bfc462685ddd63dcd82bd2b63c7e80965fc3c31bd022a9eaacdc12536d30373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bfc462685ddd63dcd82bd2b63c7e80965fc3c31bd022a9eaacdc12536d30373->enter($__internal_6bfc462685ddd63dcd82bd2b63c7e80965fc3c31bd022a9eaacdc12536d30373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aa26f4e0e2db01f5abf2abd8c4ec21f2671b2166012a93c65a49971fda2fd840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa26f4e0e2db01f5abf2abd8c4ec21f2671b2166012a93c65a49971fda2fd840->enter($__internal_aa26f4e0e2db01f5abf2abd8c4ec21f2671b2166012a93c65a49971fda2fd840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_aa26f4e0e2db01f5abf2abd8c4ec21f2671b2166012a93c65a49971fda2fd840->leave($__internal_aa26f4e0e2db01f5abf2abd8c4ec21f2671b2166012a93c65a49971fda2fd840_prof);

        
        $__internal_6bfc462685ddd63dcd82bd2b63c7e80965fc3c31bd022a9eaacdc12536d30373->leave($__internal_6bfc462685ddd63dcd82bd2b63c7e80965fc3c31bd022a9eaacdc12536d30373_prof);

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
