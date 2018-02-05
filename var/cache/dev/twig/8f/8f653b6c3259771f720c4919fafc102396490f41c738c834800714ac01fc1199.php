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
        $__internal_46919b8ae89b24035df82a1c863ff5f19e3a021a7df1d0c6b638550449eb8b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46919b8ae89b24035df82a1c863ff5f19e3a021a7df1d0c6b638550449eb8b04->enter($__internal_46919b8ae89b24035df82a1c863ff5f19e3a021a7df1d0c6b638550449eb8b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2a1af2e4a10a8e1daafb287b9c6a4d7b6c626d544f12e1648ab6feb1bc67b943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1af2e4a10a8e1daafb287b9c6a4d7b6c626d544f12e1648ab6feb1bc67b943->enter($__internal_2a1af2e4a10a8e1daafb287b9c6a4d7b6c626d544f12e1648ab6feb1bc67b943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46919b8ae89b24035df82a1c863ff5f19e3a021a7df1d0c6b638550449eb8b04->leave($__internal_46919b8ae89b24035df82a1c863ff5f19e3a021a7df1d0c6b638550449eb8b04_prof);

        
        $__internal_2a1af2e4a10a8e1daafb287b9c6a4d7b6c626d544f12e1648ab6feb1bc67b943->leave($__internal_2a1af2e4a10a8e1daafb287b9c6a4d7b6c626d544f12e1648ab6feb1bc67b943_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ec4b766a121d39c03d88354cd60472fbc7295311e2960ba5d0fcf34ed977000d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec4b766a121d39c03d88354cd60472fbc7295311e2960ba5d0fcf34ed977000d->enter($__internal_ec4b766a121d39c03d88354cd60472fbc7295311e2960ba5d0fcf34ed977000d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_41e59fa9aaa9126ab71c485d18bad19b891c3d74e8b36e466fd2ee0bc1c885d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e59fa9aaa9126ab71c485d18bad19b891c3d74e8b36e466fd2ee0bc1c885d2->enter($__internal_41e59fa9aaa9126ab71c485d18bad19b891c3d74e8b36e466fd2ee0bc1c885d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_41e59fa9aaa9126ab71c485d18bad19b891c3d74e8b36e466fd2ee0bc1c885d2->leave($__internal_41e59fa9aaa9126ab71c485d18bad19b891c3d74e8b36e466fd2ee0bc1c885d2_prof);

        
        $__internal_ec4b766a121d39c03d88354cd60472fbc7295311e2960ba5d0fcf34ed977000d->leave($__internal_ec4b766a121d39c03d88354cd60472fbc7295311e2960ba5d0fcf34ed977000d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d022a3bd254eb66028b077696ac943e27d5d8ce4d6d1179d557781d790456748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d022a3bd254eb66028b077696ac943e27d5d8ce4d6d1179d557781d790456748->enter($__internal_d022a3bd254eb66028b077696ac943e27d5d8ce4d6d1179d557781d790456748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a77e07515074d67003d2790f9b07469b0efbefbeaddf5d69ab9433ac455066bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a77e07515074d67003d2790f9b07469b0efbefbeaddf5d69ab9433ac455066bf->enter($__internal_a77e07515074d67003d2790f9b07469b0efbefbeaddf5d69ab9433ac455066bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a77e07515074d67003d2790f9b07469b0efbefbeaddf5d69ab9433ac455066bf->leave($__internal_a77e07515074d67003d2790f9b07469b0efbefbeaddf5d69ab9433ac455066bf_prof);

        
        $__internal_d022a3bd254eb66028b077696ac943e27d5d8ce4d6d1179d557781d790456748->leave($__internal_d022a3bd254eb66028b077696ac943e27d5d8ce4d6d1179d557781d790456748_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_55c62b2c61cece57b05c612929912657df5af7d7283b51ffc91e9bd41c4a1529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55c62b2c61cece57b05c612929912657df5af7d7283b51ffc91e9bd41c4a1529->enter($__internal_55c62b2c61cece57b05c612929912657df5af7d7283b51ffc91e9bd41c4a1529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_008d79b6e3a31cd5271088ca2305ef82cf345f539e0c638d07c77fdd561d1f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008d79b6e3a31cd5271088ca2305ef82cf345f539e0c638d07c77fdd561d1f8c->enter($__internal_008d79b6e3a31cd5271088ca2305ef82cf345f539e0c638d07c77fdd561d1f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_008d79b6e3a31cd5271088ca2305ef82cf345f539e0c638d07c77fdd561d1f8c->leave($__internal_008d79b6e3a31cd5271088ca2305ef82cf345f539e0c638d07c77fdd561d1f8c_prof);

        
        $__internal_55c62b2c61cece57b05c612929912657df5af7d7283b51ffc91e9bd41c4a1529->leave($__internal_55c62b2c61cece57b05c612929912657df5af7d7283b51ffc91e9bd41c4a1529_prof);

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
