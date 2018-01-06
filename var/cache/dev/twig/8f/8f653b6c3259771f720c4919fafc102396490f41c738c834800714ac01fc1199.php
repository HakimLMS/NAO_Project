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
        $__internal_b64c1dea2b91ba46592f09a38b95ddc4f8622a858b3ee13778a23cdeb133725a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b64c1dea2b91ba46592f09a38b95ddc4f8622a858b3ee13778a23cdeb133725a->enter($__internal_b64c1dea2b91ba46592f09a38b95ddc4f8622a858b3ee13778a23cdeb133725a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e9ab7ee148643db4b010f2a6998828277414ec318b608f5a78579017460cbd58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ab7ee148643db4b010f2a6998828277414ec318b608f5a78579017460cbd58->enter($__internal_e9ab7ee148643db4b010f2a6998828277414ec318b608f5a78579017460cbd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b64c1dea2b91ba46592f09a38b95ddc4f8622a858b3ee13778a23cdeb133725a->leave($__internal_b64c1dea2b91ba46592f09a38b95ddc4f8622a858b3ee13778a23cdeb133725a_prof);

        
        $__internal_e9ab7ee148643db4b010f2a6998828277414ec318b608f5a78579017460cbd58->leave($__internal_e9ab7ee148643db4b010f2a6998828277414ec318b608f5a78579017460cbd58_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d956f19e7fba4c497eaff40e6bcd6ac4cc84e006bbb43339205a5e8e3270e44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d956f19e7fba4c497eaff40e6bcd6ac4cc84e006bbb43339205a5e8e3270e44->enter($__internal_8d956f19e7fba4c497eaff40e6bcd6ac4cc84e006bbb43339205a5e8e3270e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c3a8e0fbce4ac88616664441dd2f2ff0e6b806b846739843171c281fc61a073b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a8e0fbce4ac88616664441dd2f2ff0e6b806b846739843171c281fc61a073b->enter($__internal_c3a8e0fbce4ac88616664441dd2f2ff0e6b806b846739843171c281fc61a073b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c3a8e0fbce4ac88616664441dd2f2ff0e6b806b846739843171c281fc61a073b->leave($__internal_c3a8e0fbce4ac88616664441dd2f2ff0e6b806b846739843171c281fc61a073b_prof);

        
        $__internal_8d956f19e7fba4c497eaff40e6bcd6ac4cc84e006bbb43339205a5e8e3270e44->leave($__internal_8d956f19e7fba4c497eaff40e6bcd6ac4cc84e006bbb43339205a5e8e3270e44_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_999db32e8a971122a0c57b8c81e985ca77118fe12c6b908375832b2c5acf776a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_999db32e8a971122a0c57b8c81e985ca77118fe12c6b908375832b2c5acf776a->enter($__internal_999db32e8a971122a0c57b8c81e985ca77118fe12c6b908375832b2c5acf776a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_890f2a933ea12cfd589ee83e6a8e83ca06581255a0efd2a61334a9a1ea1478b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890f2a933ea12cfd589ee83e6a8e83ca06581255a0efd2a61334a9a1ea1478b2->enter($__internal_890f2a933ea12cfd589ee83e6a8e83ca06581255a0efd2a61334a9a1ea1478b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_890f2a933ea12cfd589ee83e6a8e83ca06581255a0efd2a61334a9a1ea1478b2->leave($__internal_890f2a933ea12cfd589ee83e6a8e83ca06581255a0efd2a61334a9a1ea1478b2_prof);

        
        $__internal_999db32e8a971122a0c57b8c81e985ca77118fe12c6b908375832b2c5acf776a->leave($__internal_999db32e8a971122a0c57b8c81e985ca77118fe12c6b908375832b2c5acf776a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f5e1f1979527770871ee17c95c7d2c5d2167592ddff3f86b22b25c1534669b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f5e1f1979527770871ee17c95c7d2c5d2167592ddff3f86b22b25c1534669b4->enter($__internal_2f5e1f1979527770871ee17c95c7d2c5d2167592ddff3f86b22b25c1534669b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a0db4a1493b8545880120497a59f38a6ee7fe974a5916a2951deeb6a32e65456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0db4a1493b8545880120497a59f38a6ee7fe974a5916a2951deeb6a32e65456->enter($__internal_a0db4a1493b8545880120497a59f38a6ee7fe974a5916a2951deeb6a32e65456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_a0db4a1493b8545880120497a59f38a6ee7fe974a5916a2951deeb6a32e65456->leave($__internal_a0db4a1493b8545880120497a59f38a6ee7fe974a5916a2951deeb6a32e65456_prof);

        
        $__internal_2f5e1f1979527770871ee17c95c7d2c5d2167592ddff3f86b22b25c1534669b4->leave($__internal_2f5e1f1979527770871ee17c95c7d2c5d2167592ddff3f86b22b25c1534669b4_prof);

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
