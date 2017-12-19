<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_86c58f2b87a4b63da49ab7b5c2f08fe5e59b7f568ef3799b9212131d9c7f018a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_cf86f22836296ddb4898fd0f817ad0f747d94bcd946e2f0034837ee95acdac78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf86f22836296ddb4898fd0f817ad0f747d94bcd946e2f0034837ee95acdac78->enter($__internal_cf86f22836296ddb4898fd0f817ad0f747d94bcd946e2f0034837ee95acdac78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_fd1d2b5a7f1180b27c4175471d0da849daadf27e7cb4391bffe1b2e3c7bf1c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1d2b5a7f1180b27c4175471d0da849daadf27e7cb4391bffe1b2e3c7bf1c18->enter($__internal_fd1d2b5a7f1180b27c4175471d0da849daadf27e7cb4391bffe1b2e3c7bf1c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf86f22836296ddb4898fd0f817ad0f747d94bcd946e2f0034837ee95acdac78->leave($__internal_cf86f22836296ddb4898fd0f817ad0f747d94bcd946e2f0034837ee95acdac78_prof);

        
        $__internal_fd1d2b5a7f1180b27c4175471d0da849daadf27e7cb4391bffe1b2e3c7bf1c18->leave($__internal_fd1d2b5a7f1180b27c4175471d0da849daadf27e7cb4391bffe1b2e3c7bf1c18_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3cd3dd69274771bb9d73ef11967c6bf577b91d78e21d956b3f34ea928cc99ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cd3dd69274771bb9d73ef11967c6bf577b91d78e21d956b3f34ea928cc99ab6->enter($__internal_3cd3dd69274771bb9d73ef11967c6bf577b91d78e21d956b3f34ea928cc99ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e6ee2260a4f89b8527d96498a596340e25c87d105290d491c7dadd4624b7f889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ee2260a4f89b8527d96498a596340e25c87d105290d491c7dadd4624b7f889->enter($__internal_e6ee2260a4f89b8527d96498a596340e25c87d105290d491c7dadd4624b7f889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e6ee2260a4f89b8527d96498a596340e25c87d105290d491c7dadd4624b7f889->leave($__internal_e6ee2260a4f89b8527d96498a596340e25c87d105290d491c7dadd4624b7f889_prof);

        
        $__internal_3cd3dd69274771bb9d73ef11967c6bf577b91d78e21d956b3f34ea928cc99ab6->leave($__internal_3cd3dd69274771bb9d73ef11967c6bf577b91d78e21d956b3f34ea928cc99ab6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a68ddb7390be540cf04bec8b8dd4300597a0c2d403518bb2aee922f556de9c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a68ddb7390be540cf04bec8b8dd4300597a0c2d403518bb2aee922f556de9c83->enter($__internal_a68ddb7390be540cf04bec8b8dd4300597a0c2d403518bb2aee922f556de9c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c8777d7ce8c657ae3efb99c27c4d5a3578fc9b16ed25b3dce7075904cb98284c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8777d7ce8c657ae3efb99c27c4d5a3578fc9b16ed25b3dce7075904cb98284c->enter($__internal_c8777d7ce8c657ae3efb99c27c4d5a3578fc9b16ed25b3dce7075904cb98284c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c8777d7ce8c657ae3efb99c27c4d5a3578fc9b16ed25b3dce7075904cb98284c->leave($__internal_c8777d7ce8c657ae3efb99c27c4d5a3578fc9b16ed25b3dce7075904cb98284c_prof);

        
        $__internal_a68ddb7390be540cf04bec8b8dd4300597a0c2d403518bb2aee922f556de9c83->leave($__internal_a68ddb7390be540cf04bec8b8dd4300597a0c2d403518bb2aee922f556de9c83_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e177ad5813e75c3a63b690a90c071e99efdd81c6f377a60979f76ee21b35ddae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e177ad5813e75c3a63b690a90c071e99efdd81c6f377a60979f76ee21b35ddae->enter($__internal_e177ad5813e75c3a63b690a90c071e99efdd81c6f377a60979f76ee21b35ddae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e6b045f6db887b79d6a769880897c67491ab4c8410afb5038cc4ed9a4691155f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b045f6db887b79d6a769880897c67491ab4c8410afb5038cc4ed9a4691155f->enter($__internal_e6b045f6db887b79d6a769880897c67491ab4c8410afb5038cc4ed9a4691155f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_e6b045f6db887b79d6a769880897c67491ab4c8410afb5038cc4ed9a4691155f->leave($__internal_e6b045f6db887b79d6a769880897c67491ab4c8410afb5038cc4ed9a4691155f_prof);

        
        $__internal_e177ad5813e75c3a63b690a90c071e99efdd81c6f377a60979f76ee21b35ddae->leave($__internal_e177ad5813e75c3a63b690a90c071e99efdd81c6f377a60979f76ee21b35ddae_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
