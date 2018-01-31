<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_aa51162854aea0157d9154daa17624b1f8e492959880e0993ad7712f034b30ac extends Twig_Template
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
        $__internal_d302255b3aac857327da40a814731ecb3aecb08c3099c54568a19e1777b5e7cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d302255b3aac857327da40a814731ecb3aecb08c3099c54568a19e1777b5e7cc->enter($__internal_d302255b3aac857327da40a814731ecb3aecb08c3099c54568a19e1777b5e7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b09863ba513c6a62fa1c7c26af771c1422276f9a706f4473c0448e7eee169794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b09863ba513c6a62fa1c7c26af771c1422276f9a706f4473c0448e7eee169794->enter($__internal_b09863ba513c6a62fa1c7c26af771c1422276f9a706f4473c0448e7eee169794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d302255b3aac857327da40a814731ecb3aecb08c3099c54568a19e1777b5e7cc->leave($__internal_d302255b3aac857327da40a814731ecb3aecb08c3099c54568a19e1777b5e7cc_prof);

        
        $__internal_b09863ba513c6a62fa1c7c26af771c1422276f9a706f4473c0448e7eee169794->leave($__internal_b09863ba513c6a62fa1c7c26af771c1422276f9a706f4473c0448e7eee169794_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e54ef9bac624af48eb838592e6eea0e1b07575d62577dc8359edb0c980f1dfb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e54ef9bac624af48eb838592e6eea0e1b07575d62577dc8359edb0c980f1dfb8->enter($__internal_e54ef9bac624af48eb838592e6eea0e1b07575d62577dc8359edb0c980f1dfb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_590715d9d721fd3cc8890cc6583438766259c8088ff1d4e7d318b8af0b6e7260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_590715d9d721fd3cc8890cc6583438766259c8088ff1d4e7d318b8af0b6e7260->enter($__internal_590715d9d721fd3cc8890cc6583438766259c8088ff1d4e7d318b8af0b6e7260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_590715d9d721fd3cc8890cc6583438766259c8088ff1d4e7d318b8af0b6e7260->leave($__internal_590715d9d721fd3cc8890cc6583438766259c8088ff1d4e7d318b8af0b6e7260_prof);

        
        $__internal_e54ef9bac624af48eb838592e6eea0e1b07575d62577dc8359edb0c980f1dfb8->leave($__internal_e54ef9bac624af48eb838592e6eea0e1b07575d62577dc8359edb0c980f1dfb8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1f25498bfaf0085b9066c397270c2f9d7a7b34c032527ddf7a6c78bbac82d7ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f25498bfaf0085b9066c397270c2f9d7a7b34c032527ddf7a6c78bbac82d7ab->enter($__internal_1f25498bfaf0085b9066c397270c2f9d7a7b34c032527ddf7a6c78bbac82d7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f5c9e3cb26e664f23743256ac7387962e90467a3ab5c40e6f7d63cdc7c57245a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c9e3cb26e664f23743256ac7387962e90467a3ab5c40e6f7d63cdc7c57245a->enter($__internal_f5c9e3cb26e664f23743256ac7387962e90467a3ab5c40e6f7d63cdc7c57245a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f5c9e3cb26e664f23743256ac7387962e90467a3ab5c40e6f7d63cdc7c57245a->leave($__internal_f5c9e3cb26e664f23743256ac7387962e90467a3ab5c40e6f7d63cdc7c57245a_prof);

        
        $__internal_1f25498bfaf0085b9066c397270c2f9d7a7b34c032527ddf7a6c78bbac82d7ab->leave($__internal_1f25498bfaf0085b9066c397270c2f9d7a7b34c032527ddf7a6c78bbac82d7ab_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3eab5b835d945e78e5f31a7529c0b95e408f3e6b5236c4c3e1ba428954d46315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eab5b835d945e78e5f31a7529c0b95e408f3e6b5236c4c3e1ba428954d46315->enter($__internal_3eab5b835d945e78e5f31a7529c0b95e408f3e6b5236c4c3e1ba428954d46315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a04bcb2394ae1948c4b09c407d0a1af5b7b4475826e18a42946bb01d1c7ac2b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04bcb2394ae1948c4b09c407d0a1af5b7b4475826e18a42946bb01d1c7ac2b6->enter($__internal_a04bcb2394ae1948c4b09c407d0a1af5b7b4475826e18a42946bb01d1c7ac2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a04bcb2394ae1948c4b09c407d0a1af5b7b4475826e18a42946bb01d1c7ac2b6->leave($__internal_a04bcb2394ae1948c4b09c407d0a1af5b7b4475826e18a42946bb01d1c7ac2b6_prof);

        
        $__internal_3eab5b835d945e78e5f31a7529c0b95e408f3e6b5236c4c3e1ba428954d46315->leave($__internal_3eab5b835d945e78e5f31a7529c0b95e408f3e6b5236c4c3e1ba428954d46315_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
