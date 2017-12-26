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
        $__internal_4ea2ae6a66d021e34cfa52f874773d595e4d5dbd06685a296a26866cfaa38ecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ea2ae6a66d021e34cfa52f874773d595e4d5dbd06685a296a26866cfaa38ecf->enter($__internal_4ea2ae6a66d021e34cfa52f874773d595e4d5dbd06685a296a26866cfaa38ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e5add5315b97491b92147eccbfa9a0ded1df7aa9e47abcb1bfd3ebfe9cb42652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5add5315b97491b92147eccbfa9a0ded1df7aa9e47abcb1bfd3ebfe9cb42652->enter($__internal_e5add5315b97491b92147eccbfa9a0ded1df7aa9e47abcb1bfd3ebfe9cb42652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ea2ae6a66d021e34cfa52f874773d595e4d5dbd06685a296a26866cfaa38ecf->leave($__internal_4ea2ae6a66d021e34cfa52f874773d595e4d5dbd06685a296a26866cfaa38ecf_prof);

        
        $__internal_e5add5315b97491b92147eccbfa9a0ded1df7aa9e47abcb1bfd3ebfe9cb42652->leave($__internal_e5add5315b97491b92147eccbfa9a0ded1df7aa9e47abcb1bfd3ebfe9cb42652_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1f091bb15b15f673d57b0f653969bb47b4d017a9d0d1b9221c862d3f3b106896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f091bb15b15f673d57b0f653969bb47b4d017a9d0d1b9221c862d3f3b106896->enter($__internal_1f091bb15b15f673d57b0f653969bb47b4d017a9d0d1b9221c862d3f3b106896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3b93d9d6b6b1f57a724810853e852e434d143f2ffb2756f273335d22ee21d120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b93d9d6b6b1f57a724810853e852e434d143f2ffb2756f273335d22ee21d120->enter($__internal_3b93d9d6b6b1f57a724810853e852e434d143f2ffb2756f273335d22ee21d120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b93d9d6b6b1f57a724810853e852e434d143f2ffb2756f273335d22ee21d120->leave($__internal_3b93d9d6b6b1f57a724810853e852e434d143f2ffb2756f273335d22ee21d120_prof);

        
        $__internal_1f091bb15b15f673d57b0f653969bb47b4d017a9d0d1b9221c862d3f3b106896->leave($__internal_1f091bb15b15f673d57b0f653969bb47b4d017a9d0d1b9221c862d3f3b106896_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_032526758425485e62b6feac7805db8679e29995c1efadae08ffe19597cbf674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032526758425485e62b6feac7805db8679e29995c1efadae08ffe19597cbf674->enter($__internal_032526758425485e62b6feac7805db8679e29995c1efadae08ffe19597cbf674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_81d31653a8d3aee6c47db7cf5a951693409b384ce51a1f1b57f2ec3ddd9991ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d31653a8d3aee6c47db7cf5a951693409b384ce51a1f1b57f2ec3ddd9991ee->enter($__internal_81d31653a8d3aee6c47db7cf5a951693409b384ce51a1f1b57f2ec3ddd9991ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_81d31653a8d3aee6c47db7cf5a951693409b384ce51a1f1b57f2ec3ddd9991ee->leave($__internal_81d31653a8d3aee6c47db7cf5a951693409b384ce51a1f1b57f2ec3ddd9991ee_prof);

        
        $__internal_032526758425485e62b6feac7805db8679e29995c1efadae08ffe19597cbf674->leave($__internal_032526758425485e62b6feac7805db8679e29995c1efadae08ffe19597cbf674_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e1445d1d4c4e733584cf5c6392eee3f9c116f430a373a9c56ded1e2425d8a160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1445d1d4c4e733584cf5c6392eee3f9c116f430a373a9c56ded1e2425d8a160->enter($__internal_e1445d1d4c4e733584cf5c6392eee3f9c116f430a373a9c56ded1e2425d8a160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ca20b8b7e463fece9932a9d9555bc203fc19294df2968739746780bb8593dfe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca20b8b7e463fece9932a9d9555bc203fc19294df2968739746780bb8593dfe7->enter($__internal_ca20b8b7e463fece9932a9d9555bc203fc19294df2968739746780bb8593dfe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ca20b8b7e463fece9932a9d9555bc203fc19294df2968739746780bb8593dfe7->leave($__internal_ca20b8b7e463fece9932a9d9555bc203fc19294df2968739746780bb8593dfe7_prof);

        
        $__internal_e1445d1d4c4e733584cf5c6392eee3f9c116f430a373a9c56ded1e2425d8a160->leave($__internal_e1445d1d4c4e733584cf5c6392eee3f9c116f430a373a9c56ded1e2425d8a160_prof);

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
