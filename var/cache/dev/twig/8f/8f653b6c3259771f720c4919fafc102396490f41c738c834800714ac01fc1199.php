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
        $__internal_893c3ed00cb3e86ce9d115da6d18a60fd0914543df2c023b958816af658e2127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_893c3ed00cb3e86ce9d115da6d18a60fd0914543df2c023b958816af658e2127->enter($__internal_893c3ed00cb3e86ce9d115da6d18a60fd0914543df2c023b958816af658e2127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_15139009b6b97788e1fc10acb3a0afd8fcd30d012f902dcce5f41c2195c6ca6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15139009b6b97788e1fc10acb3a0afd8fcd30d012f902dcce5f41c2195c6ca6c->enter($__internal_15139009b6b97788e1fc10acb3a0afd8fcd30d012f902dcce5f41c2195c6ca6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_893c3ed00cb3e86ce9d115da6d18a60fd0914543df2c023b958816af658e2127->leave($__internal_893c3ed00cb3e86ce9d115da6d18a60fd0914543df2c023b958816af658e2127_prof);

        
        $__internal_15139009b6b97788e1fc10acb3a0afd8fcd30d012f902dcce5f41c2195c6ca6c->leave($__internal_15139009b6b97788e1fc10acb3a0afd8fcd30d012f902dcce5f41c2195c6ca6c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d338ea98ac876759c72ed8dacb167df9b0a16c50b9ffd3cc7f6a96225b4e1a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d338ea98ac876759c72ed8dacb167df9b0a16c50b9ffd3cc7f6a96225b4e1a39->enter($__internal_d338ea98ac876759c72ed8dacb167df9b0a16c50b9ffd3cc7f6a96225b4e1a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_37a6c964bb06c0c21aa731a4ba2251e8bd1878712b24fb269dcf31ab856301c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a6c964bb06c0c21aa731a4ba2251e8bd1878712b24fb269dcf31ab856301c3->enter($__internal_37a6c964bb06c0c21aa731a4ba2251e8bd1878712b24fb269dcf31ab856301c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_37a6c964bb06c0c21aa731a4ba2251e8bd1878712b24fb269dcf31ab856301c3->leave($__internal_37a6c964bb06c0c21aa731a4ba2251e8bd1878712b24fb269dcf31ab856301c3_prof);

        
        $__internal_d338ea98ac876759c72ed8dacb167df9b0a16c50b9ffd3cc7f6a96225b4e1a39->leave($__internal_d338ea98ac876759c72ed8dacb167df9b0a16c50b9ffd3cc7f6a96225b4e1a39_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_77f699c88f4cac66bd977ec8306dc9beefccf56331ba9b29ae78d0c1ee15f1d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f699c88f4cac66bd977ec8306dc9beefccf56331ba9b29ae78d0c1ee15f1d6->enter($__internal_77f699c88f4cac66bd977ec8306dc9beefccf56331ba9b29ae78d0c1ee15f1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a40b2e50550cb598fa939938af33286f7e24e3e8336e57245003bf8b19054ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a40b2e50550cb598fa939938af33286f7e24e3e8336e57245003bf8b19054ff7->enter($__internal_a40b2e50550cb598fa939938af33286f7e24e3e8336e57245003bf8b19054ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a40b2e50550cb598fa939938af33286f7e24e3e8336e57245003bf8b19054ff7->leave($__internal_a40b2e50550cb598fa939938af33286f7e24e3e8336e57245003bf8b19054ff7_prof);

        
        $__internal_77f699c88f4cac66bd977ec8306dc9beefccf56331ba9b29ae78d0c1ee15f1d6->leave($__internal_77f699c88f4cac66bd977ec8306dc9beefccf56331ba9b29ae78d0c1ee15f1d6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ffcf023a7147e0845eca602bd5b6a33d5b0739a3c6f0c476e71288f1051e1eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffcf023a7147e0845eca602bd5b6a33d5b0739a3c6f0c476e71288f1051e1eeb->enter($__internal_ffcf023a7147e0845eca602bd5b6a33d5b0739a3c6f0c476e71288f1051e1eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c64c16bf93d5967d8ec74e0e11a3734f9f5b540006030a2b27ec19977adb8a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64c16bf93d5967d8ec74e0e11a3734f9f5b540006030a2b27ec19977adb8a88->enter($__internal_c64c16bf93d5967d8ec74e0e11a3734f9f5b540006030a2b27ec19977adb8a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_c64c16bf93d5967d8ec74e0e11a3734f9f5b540006030a2b27ec19977adb8a88->leave($__internal_c64c16bf93d5967d8ec74e0e11a3734f9f5b540006030a2b27ec19977adb8a88_prof);

        
        $__internal_ffcf023a7147e0845eca602bd5b6a33d5b0739a3c6f0c476e71288f1051e1eeb->leave($__internal_ffcf023a7147e0845eca602bd5b6a33d5b0739a3c6f0c476e71288f1051e1eeb_prof);

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
