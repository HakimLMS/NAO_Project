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
        $__internal_c48e8f20fe8f8012af0f1e7b2a931cb6bae67a3f56c6697e61664123cfe5909b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c48e8f20fe8f8012af0f1e7b2a931cb6bae67a3f56c6697e61664123cfe5909b->enter($__internal_c48e8f20fe8f8012af0f1e7b2a931cb6bae67a3f56c6697e61664123cfe5909b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_325bf884604d39e4a7508d9c191dadbd77efbd1eab8c57c7b6b41133a51d798b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_325bf884604d39e4a7508d9c191dadbd77efbd1eab8c57c7b6b41133a51d798b->enter($__internal_325bf884604d39e4a7508d9c191dadbd77efbd1eab8c57c7b6b41133a51d798b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c48e8f20fe8f8012af0f1e7b2a931cb6bae67a3f56c6697e61664123cfe5909b->leave($__internal_c48e8f20fe8f8012af0f1e7b2a931cb6bae67a3f56c6697e61664123cfe5909b_prof);

        
        $__internal_325bf884604d39e4a7508d9c191dadbd77efbd1eab8c57c7b6b41133a51d798b->leave($__internal_325bf884604d39e4a7508d9c191dadbd77efbd1eab8c57c7b6b41133a51d798b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dafd61c16170393497324fa7537dd101b1e91f6afc112280c60cdd8cf8834639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dafd61c16170393497324fa7537dd101b1e91f6afc112280c60cdd8cf8834639->enter($__internal_dafd61c16170393497324fa7537dd101b1e91f6afc112280c60cdd8cf8834639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_db66acb5dad52218b733a9b6b3b5432cfc96ce8ba7219e069bb6397f1e7fdb47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db66acb5dad52218b733a9b6b3b5432cfc96ce8ba7219e069bb6397f1e7fdb47->enter($__internal_db66acb5dad52218b733a9b6b3b5432cfc96ce8ba7219e069bb6397f1e7fdb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_db66acb5dad52218b733a9b6b3b5432cfc96ce8ba7219e069bb6397f1e7fdb47->leave($__internal_db66acb5dad52218b733a9b6b3b5432cfc96ce8ba7219e069bb6397f1e7fdb47_prof);

        
        $__internal_dafd61c16170393497324fa7537dd101b1e91f6afc112280c60cdd8cf8834639->leave($__internal_dafd61c16170393497324fa7537dd101b1e91f6afc112280c60cdd8cf8834639_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c7f5399eba22b3c7094cc727807a4c2ea45f03cca8e53984aa21115272fe28b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f5399eba22b3c7094cc727807a4c2ea45f03cca8e53984aa21115272fe28b0->enter($__internal_c7f5399eba22b3c7094cc727807a4c2ea45f03cca8e53984aa21115272fe28b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cd9b8216f6fc9fb467279a13aebdb2ea2eab9ceb1dd90a66828004f0d84b664d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9b8216f6fc9fb467279a13aebdb2ea2eab9ceb1dd90a66828004f0d84b664d->enter($__internal_cd9b8216f6fc9fb467279a13aebdb2ea2eab9ceb1dd90a66828004f0d84b664d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cd9b8216f6fc9fb467279a13aebdb2ea2eab9ceb1dd90a66828004f0d84b664d->leave($__internal_cd9b8216f6fc9fb467279a13aebdb2ea2eab9ceb1dd90a66828004f0d84b664d_prof);

        
        $__internal_c7f5399eba22b3c7094cc727807a4c2ea45f03cca8e53984aa21115272fe28b0->leave($__internal_c7f5399eba22b3c7094cc727807a4c2ea45f03cca8e53984aa21115272fe28b0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ef0edc811623855e4c91b7698321cbbad8601d85826a1836fe087e720ea1642b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef0edc811623855e4c91b7698321cbbad8601d85826a1836fe087e720ea1642b->enter($__internal_ef0edc811623855e4c91b7698321cbbad8601d85826a1836fe087e720ea1642b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5dfddd18447c851fa3c728056106457f4ef5ece33c97f949a0a03b9be9870dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dfddd18447c851fa3c728056106457f4ef5ece33c97f949a0a03b9be9870dad->enter($__internal_5dfddd18447c851fa3c728056106457f4ef5ece33c97f949a0a03b9be9870dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_5dfddd18447c851fa3c728056106457f4ef5ece33c97f949a0a03b9be9870dad->leave($__internal_5dfddd18447c851fa3c728056106457f4ef5ece33c97f949a0a03b9be9870dad_prof);

        
        $__internal_ef0edc811623855e4c91b7698321cbbad8601d85826a1836fe087e720ea1642b->leave($__internal_ef0edc811623855e4c91b7698321cbbad8601d85826a1836fe087e720ea1642b_prof);

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
