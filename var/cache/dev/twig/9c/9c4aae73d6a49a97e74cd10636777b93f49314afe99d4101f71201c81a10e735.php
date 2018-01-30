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
        $__internal_c578cd800812896883dcc5bccc96c5013053b05d24e8061a8edce04b1aee7df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c578cd800812896883dcc5bccc96c5013053b05d24e8061a8edce04b1aee7df4->enter($__internal_c578cd800812896883dcc5bccc96c5013053b05d24e8061a8edce04b1aee7df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0cbd1c5f06623d9530bca4ea2f1464cf236f86e46ba9833844509192f9118605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cbd1c5f06623d9530bca4ea2f1464cf236f86e46ba9833844509192f9118605->enter($__internal_0cbd1c5f06623d9530bca4ea2f1464cf236f86e46ba9833844509192f9118605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c578cd800812896883dcc5bccc96c5013053b05d24e8061a8edce04b1aee7df4->leave($__internal_c578cd800812896883dcc5bccc96c5013053b05d24e8061a8edce04b1aee7df4_prof);

        
        $__internal_0cbd1c5f06623d9530bca4ea2f1464cf236f86e46ba9833844509192f9118605->leave($__internal_0cbd1c5f06623d9530bca4ea2f1464cf236f86e46ba9833844509192f9118605_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ae4c533444151422a50a28f08d23f284a3a46ba22f27d7c1f0bbdd77348a47d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ae4c533444151422a50a28f08d23f284a3a46ba22f27d7c1f0bbdd77348a47d->enter($__internal_0ae4c533444151422a50a28f08d23f284a3a46ba22f27d7c1f0bbdd77348a47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f52e24737b86054becbda9d53bdb6b300ddfb174d484fdb4c8f40da52a96744f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52e24737b86054becbda9d53bdb6b300ddfb174d484fdb4c8f40da52a96744f->enter($__internal_f52e24737b86054becbda9d53bdb6b300ddfb174d484fdb4c8f40da52a96744f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f52e24737b86054becbda9d53bdb6b300ddfb174d484fdb4c8f40da52a96744f->leave($__internal_f52e24737b86054becbda9d53bdb6b300ddfb174d484fdb4c8f40da52a96744f_prof);

        
        $__internal_0ae4c533444151422a50a28f08d23f284a3a46ba22f27d7c1f0bbdd77348a47d->leave($__internal_0ae4c533444151422a50a28f08d23f284a3a46ba22f27d7c1f0bbdd77348a47d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_58d5070eee184cc73d940031f590c2a9f7b6d85cbc989d4d5dba797fc35f2cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58d5070eee184cc73d940031f590c2a9f7b6d85cbc989d4d5dba797fc35f2cbd->enter($__internal_58d5070eee184cc73d940031f590c2a9f7b6d85cbc989d4d5dba797fc35f2cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1e0c0607d4a5d008d7a6442e1056d0254928e4c750d2e0c183b9954325cb10e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0c0607d4a5d008d7a6442e1056d0254928e4c750d2e0c183b9954325cb10e8->enter($__internal_1e0c0607d4a5d008d7a6442e1056d0254928e4c750d2e0c183b9954325cb10e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1e0c0607d4a5d008d7a6442e1056d0254928e4c750d2e0c183b9954325cb10e8->leave($__internal_1e0c0607d4a5d008d7a6442e1056d0254928e4c750d2e0c183b9954325cb10e8_prof);

        
        $__internal_58d5070eee184cc73d940031f590c2a9f7b6d85cbc989d4d5dba797fc35f2cbd->leave($__internal_58d5070eee184cc73d940031f590c2a9f7b6d85cbc989d4d5dba797fc35f2cbd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d20e96d34b3013c7cde4e411618759115f031310594fafc642dbf2be0bd6f360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d20e96d34b3013c7cde4e411618759115f031310594fafc642dbf2be0bd6f360->enter($__internal_d20e96d34b3013c7cde4e411618759115f031310594fafc642dbf2be0bd6f360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_159daf0e2a077c08ce32c6278ebff446dad8f67e57b5ff3abac24cf9c686c3c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159daf0e2a077c08ce32c6278ebff446dad8f67e57b5ff3abac24cf9c686c3c6->enter($__internal_159daf0e2a077c08ce32c6278ebff446dad8f67e57b5ff3abac24cf9c686c3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_159daf0e2a077c08ce32c6278ebff446dad8f67e57b5ff3abac24cf9c686c3c6->leave($__internal_159daf0e2a077c08ce32c6278ebff446dad8f67e57b5ff3abac24cf9c686c3c6_prof);

        
        $__internal_d20e96d34b3013c7cde4e411618759115f031310594fafc642dbf2be0bd6f360->leave($__internal_d20e96d34b3013c7cde4e411618759115f031310594fafc642dbf2be0bd6f360_prof);

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
