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
        $__internal_e80db6de2a81aa1f4198bb6b5ef4ff0511dce583dc096ff5ebfa0592f1f16802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e80db6de2a81aa1f4198bb6b5ef4ff0511dce583dc096ff5ebfa0592f1f16802->enter($__internal_e80db6de2a81aa1f4198bb6b5ef4ff0511dce583dc096ff5ebfa0592f1f16802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8e4e66720aeb8f02d56ec02e702b6ed841bc1ad12cfbabf619ecd597403526be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4e66720aeb8f02d56ec02e702b6ed841bc1ad12cfbabf619ecd597403526be->enter($__internal_8e4e66720aeb8f02d56ec02e702b6ed841bc1ad12cfbabf619ecd597403526be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e80db6de2a81aa1f4198bb6b5ef4ff0511dce583dc096ff5ebfa0592f1f16802->leave($__internal_e80db6de2a81aa1f4198bb6b5ef4ff0511dce583dc096ff5ebfa0592f1f16802_prof);

        
        $__internal_8e4e66720aeb8f02d56ec02e702b6ed841bc1ad12cfbabf619ecd597403526be->leave($__internal_8e4e66720aeb8f02d56ec02e702b6ed841bc1ad12cfbabf619ecd597403526be_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0c2dfa90a1a550a77a757ea7eff5f45e5a8d1b58f1eb2298b34715f75566604d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c2dfa90a1a550a77a757ea7eff5f45e5a8d1b58f1eb2298b34715f75566604d->enter($__internal_0c2dfa90a1a550a77a757ea7eff5f45e5a8d1b58f1eb2298b34715f75566604d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e2105004d53df466d51618d926dda883b1d91d8e128d1c259ce4c5c81182d11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2105004d53df466d51618d926dda883b1d91d8e128d1c259ce4c5c81182d11d->enter($__internal_e2105004d53df466d51618d926dda883b1d91d8e128d1c259ce4c5c81182d11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e2105004d53df466d51618d926dda883b1d91d8e128d1c259ce4c5c81182d11d->leave($__internal_e2105004d53df466d51618d926dda883b1d91d8e128d1c259ce4c5c81182d11d_prof);

        
        $__internal_0c2dfa90a1a550a77a757ea7eff5f45e5a8d1b58f1eb2298b34715f75566604d->leave($__internal_0c2dfa90a1a550a77a757ea7eff5f45e5a8d1b58f1eb2298b34715f75566604d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a958e779cac41761106560449510289ecc389c6a507116b115f27a06cd73ea8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a958e779cac41761106560449510289ecc389c6a507116b115f27a06cd73ea8a->enter($__internal_a958e779cac41761106560449510289ecc389c6a507116b115f27a06cd73ea8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7ecca34ca0e6aa3dd31f15a44734096109b009b50685c73dcc3ce44d602cfe18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ecca34ca0e6aa3dd31f15a44734096109b009b50685c73dcc3ce44d602cfe18->enter($__internal_7ecca34ca0e6aa3dd31f15a44734096109b009b50685c73dcc3ce44d602cfe18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7ecca34ca0e6aa3dd31f15a44734096109b009b50685c73dcc3ce44d602cfe18->leave($__internal_7ecca34ca0e6aa3dd31f15a44734096109b009b50685c73dcc3ce44d602cfe18_prof);

        
        $__internal_a958e779cac41761106560449510289ecc389c6a507116b115f27a06cd73ea8a->leave($__internal_a958e779cac41761106560449510289ecc389c6a507116b115f27a06cd73ea8a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7247f6bdf652f9f23ca675d57b31a1f67c7890fa29c40cd28c69b56289272f18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7247f6bdf652f9f23ca675d57b31a1f67c7890fa29c40cd28c69b56289272f18->enter($__internal_7247f6bdf652f9f23ca675d57b31a1f67c7890fa29c40cd28c69b56289272f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2c5cf187ecf8630f5cffb8edc6af32b869d72b507cb023beb8e25741836fc558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c5cf187ecf8630f5cffb8edc6af32b869d72b507cb023beb8e25741836fc558->enter($__internal_2c5cf187ecf8630f5cffb8edc6af32b869d72b507cb023beb8e25741836fc558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2c5cf187ecf8630f5cffb8edc6af32b869d72b507cb023beb8e25741836fc558->leave($__internal_2c5cf187ecf8630f5cffb8edc6af32b869d72b507cb023beb8e25741836fc558_prof);

        
        $__internal_7247f6bdf652f9f23ca675d57b31a1f67c7890fa29c40cd28c69b56289272f18->leave($__internal_7247f6bdf652f9f23ca675d57b31a1f67c7890fa29c40cd28c69b56289272f18_prof);

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
