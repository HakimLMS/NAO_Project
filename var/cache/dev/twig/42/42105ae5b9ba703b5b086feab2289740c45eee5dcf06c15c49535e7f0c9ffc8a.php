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
        $__internal_f6d0ecc59507c0220f7e6123403dfa47ecc12781d217d1952381c053869d56bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d0ecc59507c0220f7e6123403dfa47ecc12781d217d1952381c053869d56bf->enter($__internal_f6d0ecc59507c0220f7e6123403dfa47ecc12781d217d1952381c053869d56bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6df17e0efa09e41aee8513a647755a050ddbe2ab62ffc6e04c71eec0cf1879b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df17e0efa09e41aee8513a647755a050ddbe2ab62ffc6e04c71eec0cf1879b6->enter($__internal_6df17e0efa09e41aee8513a647755a050ddbe2ab62ffc6e04c71eec0cf1879b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6d0ecc59507c0220f7e6123403dfa47ecc12781d217d1952381c053869d56bf->leave($__internal_f6d0ecc59507c0220f7e6123403dfa47ecc12781d217d1952381c053869d56bf_prof);

        
        $__internal_6df17e0efa09e41aee8513a647755a050ddbe2ab62ffc6e04c71eec0cf1879b6->leave($__internal_6df17e0efa09e41aee8513a647755a050ddbe2ab62ffc6e04c71eec0cf1879b6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_20e6e703d768c664e2db91bfb565faff4171e5d9f4901b9b476549883778684f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e6e703d768c664e2db91bfb565faff4171e5d9f4901b9b476549883778684f->enter($__internal_20e6e703d768c664e2db91bfb565faff4171e5d9f4901b9b476549883778684f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_40632c8811e6e3b8615f3fe7e7fb05a5ed1ed301a7c53b8873f0a182c9d90833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40632c8811e6e3b8615f3fe7e7fb05a5ed1ed301a7c53b8873f0a182c9d90833->enter($__internal_40632c8811e6e3b8615f3fe7e7fb05a5ed1ed301a7c53b8873f0a182c9d90833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_40632c8811e6e3b8615f3fe7e7fb05a5ed1ed301a7c53b8873f0a182c9d90833->leave($__internal_40632c8811e6e3b8615f3fe7e7fb05a5ed1ed301a7c53b8873f0a182c9d90833_prof);

        
        $__internal_20e6e703d768c664e2db91bfb565faff4171e5d9f4901b9b476549883778684f->leave($__internal_20e6e703d768c664e2db91bfb565faff4171e5d9f4901b9b476549883778684f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3f87664abdc5a3d35949d7eb490ab6f8bfe94af5f04697e762d4abc92f881996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f87664abdc5a3d35949d7eb490ab6f8bfe94af5f04697e762d4abc92f881996->enter($__internal_3f87664abdc5a3d35949d7eb490ab6f8bfe94af5f04697e762d4abc92f881996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9cb796a03968ec60c6dc43f9db70e77cdcd24c0bfa5aa6c4c2514f2859d1867c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb796a03968ec60c6dc43f9db70e77cdcd24c0bfa5aa6c4c2514f2859d1867c->enter($__internal_9cb796a03968ec60c6dc43f9db70e77cdcd24c0bfa5aa6c4c2514f2859d1867c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9cb796a03968ec60c6dc43f9db70e77cdcd24c0bfa5aa6c4c2514f2859d1867c->leave($__internal_9cb796a03968ec60c6dc43f9db70e77cdcd24c0bfa5aa6c4c2514f2859d1867c_prof);

        
        $__internal_3f87664abdc5a3d35949d7eb490ab6f8bfe94af5f04697e762d4abc92f881996->leave($__internal_3f87664abdc5a3d35949d7eb490ab6f8bfe94af5f04697e762d4abc92f881996_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ba65d71a4438b142d1c631337e755bc998d4a8abe80d51abeac0f537d0ebba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ba65d71a4438b142d1c631337e755bc998d4a8abe80d51abeac0f537d0ebba2->enter($__internal_5ba65d71a4438b142d1c631337e755bc998d4a8abe80d51abeac0f537d0ebba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5c978d7a37b733c01bddc7ce6fa4301058928a96664d91378aaca9ccc77a7e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c978d7a37b733c01bddc7ce6fa4301058928a96664d91378aaca9ccc77a7e3b->enter($__internal_5c978d7a37b733c01bddc7ce6fa4301058928a96664d91378aaca9ccc77a7e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_5c978d7a37b733c01bddc7ce6fa4301058928a96664d91378aaca9ccc77a7e3b->leave($__internal_5c978d7a37b733c01bddc7ce6fa4301058928a96664d91378aaca9ccc77a7e3b_prof);

        
        $__internal_5ba65d71a4438b142d1c631337e755bc998d4a8abe80d51abeac0f537d0ebba2->leave($__internal_5ba65d71a4438b142d1c631337e755bc998d4a8abe80d51abeac0f537d0ebba2_prof);

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
