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
        $__internal_003a92bc569b2144d36f5ee1d6b0167e97d4d28836e1c3f8b8891ea931c5420b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_003a92bc569b2144d36f5ee1d6b0167e97d4d28836e1c3f8b8891ea931c5420b->enter($__internal_003a92bc569b2144d36f5ee1d6b0167e97d4d28836e1c3f8b8891ea931c5420b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f9b3475f2cc3ef5c7ab4017bf652fa165a5d1ecd91824cba936224995e9ee36c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b3475f2cc3ef5c7ab4017bf652fa165a5d1ecd91824cba936224995e9ee36c->enter($__internal_f9b3475f2cc3ef5c7ab4017bf652fa165a5d1ecd91824cba936224995e9ee36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_003a92bc569b2144d36f5ee1d6b0167e97d4d28836e1c3f8b8891ea931c5420b->leave($__internal_003a92bc569b2144d36f5ee1d6b0167e97d4d28836e1c3f8b8891ea931c5420b_prof);

        
        $__internal_f9b3475f2cc3ef5c7ab4017bf652fa165a5d1ecd91824cba936224995e9ee36c->leave($__internal_f9b3475f2cc3ef5c7ab4017bf652fa165a5d1ecd91824cba936224995e9ee36c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_32c854510cf1cf4a2eb9c2521111aae8ac38a9caf37428191897f7664dcca8ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c854510cf1cf4a2eb9c2521111aae8ac38a9caf37428191897f7664dcca8ce->enter($__internal_32c854510cf1cf4a2eb9c2521111aae8ac38a9caf37428191897f7664dcca8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3925f0bf598a6b4d3b63a2fe432faf404c71f2b49b8217bcc4ca442304f0dc2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3925f0bf598a6b4d3b63a2fe432faf404c71f2b49b8217bcc4ca442304f0dc2e->enter($__internal_3925f0bf598a6b4d3b63a2fe432faf404c71f2b49b8217bcc4ca442304f0dc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3925f0bf598a6b4d3b63a2fe432faf404c71f2b49b8217bcc4ca442304f0dc2e->leave($__internal_3925f0bf598a6b4d3b63a2fe432faf404c71f2b49b8217bcc4ca442304f0dc2e_prof);

        
        $__internal_32c854510cf1cf4a2eb9c2521111aae8ac38a9caf37428191897f7664dcca8ce->leave($__internal_32c854510cf1cf4a2eb9c2521111aae8ac38a9caf37428191897f7664dcca8ce_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_35c28d62d1b46aa2590c17e57ef3e45f7adf0c28896f28de7ed927790fb64ac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c28d62d1b46aa2590c17e57ef3e45f7adf0c28896f28de7ed927790fb64ac7->enter($__internal_35c28d62d1b46aa2590c17e57ef3e45f7adf0c28896f28de7ed927790fb64ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c0116fe7dc4c789747ef1c8bd926db2259d5a20b4076e578617079b4b5c0977b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0116fe7dc4c789747ef1c8bd926db2259d5a20b4076e578617079b4b5c0977b->enter($__internal_c0116fe7dc4c789747ef1c8bd926db2259d5a20b4076e578617079b4b5c0977b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c0116fe7dc4c789747ef1c8bd926db2259d5a20b4076e578617079b4b5c0977b->leave($__internal_c0116fe7dc4c789747ef1c8bd926db2259d5a20b4076e578617079b4b5c0977b_prof);

        
        $__internal_35c28d62d1b46aa2590c17e57ef3e45f7adf0c28896f28de7ed927790fb64ac7->leave($__internal_35c28d62d1b46aa2590c17e57ef3e45f7adf0c28896f28de7ed927790fb64ac7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0e632030e5bde2667626c52ecbb9d0a0c004648d5e85de235f437cf8483cb45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e632030e5bde2667626c52ecbb9d0a0c004648d5e85de235f437cf8483cb45->enter($__internal_b0e632030e5bde2667626c52ecbb9d0a0c004648d5e85de235f437cf8483cb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_faf20905a7c95c5d732f92a11b4bc80999eb5c90c29e85488dc313919b33d9d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf20905a7c95c5d732f92a11b4bc80999eb5c90c29e85488dc313919b33d9d2->enter($__internal_faf20905a7c95c5d732f92a11b4bc80999eb5c90c29e85488dc313919b33d9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_faf20905a7c95c5d732f92a11b4bc80999eb5c90c29e85488dc313919b33d9d2->leave($__internal_faf20905a7c95c5d732f92a11b4bc80999eb5c90c29e85488dc313919b33d9d2_prof);

        
        $__internal_b0e632030e5bde2667626c52ecbb9d0a0c004648d5e85de235f437cf8483cb45->leave($__internal_b0e632030e5bde2667626c52ecbb9d0a0c004648d5e85de235f437cf8483cb45_prof);

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
