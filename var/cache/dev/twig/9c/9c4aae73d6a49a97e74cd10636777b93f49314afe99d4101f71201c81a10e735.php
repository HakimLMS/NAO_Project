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
        $__internal_b3fbe9d16d380b54017d43abcf593063461e021c2d289e9fe787554ee46a4bdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3fbe9d16d380b54017d43abcf593063461e021c2d289e9fe787554ee46a4bdd->enter($__internal_b3fbe9d16d380b54017d43abcf593063461e021c2d289e9fe787554ee46a4bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d8ac2d01b96b7bf111950660d03883562f97674874d491b60bbf1fe7bd878eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ac2d01b96b7bf111950660d03883562f97674874d491b60bbf1fe7bd878eb0->enter($__internal_d8ac2d01b96b7bf111950660d03883562f97674874d491b60bbf1fe7bd878eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3fbe9d16d380b54017d43abcf593063461e021c2d289e9fe787554ee46a4bdd->leave($__internal_b3fbe9d16d380b54017d43abcf593063461e021c2d289e9fe787554ee46a4bdd_prof);

        
        $__internal_d8ac2d01b96b7bf111950660d03883562f97674874d491b60bbf1fe7bd878eb0->leave($__internal_d8ac2d01b96b7bf111950660d03883562f97674874d491b60bbf1fe7bd878eb0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_220c205b56eec1adaf76650bc3d360a52ee54d1f25d741a5620b1b9bd8c4d9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_220c205b56eec1adaf76650bc3d360a52ee54d1f25d741a5620b1b9bd8c4d9d2->enter($__internal_220c205b56eec1adaf76650bc3d360a52ee54d1f25d741a5620b1b9bd8c4d9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e75a46a7363e2090eaec97bfb7608a85c421d9df2c4e396bc64a90fef41d5002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75a46a7363e2090eaec97bfb7608a85c421d9df2c4e396bc64a90fef41d5002->enter($__internal_e75a46a7363e2090eaec97bfb7608a85c421d9df2c4e396bc64a90fef41d5002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e75a46a7363e2090eaec97bfb7608a85c421d9df2c4e396bc64a90fef41d5002->leave($__internal_e75a46a7363e2090eaec97bfb7608a85c421d9df2c4e396bc64a90fef41d5002_prof);

        
        $__internal_220c205b56eec1adaf76650bc3d360a52ee54d1f25d741a5620b1b9bd8c4d9d2->leave($__internal_220c205b56eec1adaf76650bc3d360a52ee54d1f25d741a5620b1b9bd8c4d9d2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aba9404e38c34dcb6a94b871184d3bd7f6f007fed4e27cc8764cc9b938c6a8cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aba9404e38c34dcb6a94b871184d3bd7f6f007fed4e27cc8764cc9b938c6a8cb->enter($__internal_aba9404e38c34dcb6a94b871184d3bd7f6f007fed4e27cc8764cc9b938c6a8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9b00949d820e9c7f148ccedfa7916b68a2344e141b8738b2d06de1b22d359492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b00949d820e9c7f148ccedfa7916b68a2344e141b8738b2d06de1b22d359492->enter($__internal_9b00949d820e9c7f148ccedfa7916b68a2344e141b8738b2d06de1b22d359492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9b00949d820e9c7f148ccedfa7916b68a2344e141b8738b2d06de1b22d359492->leave($__internal_9b00949d820e9c7f148ccedfa7916b68a2344e141b8738b2d06de1b22d359492_prof);

        
        $__internal_aba9404e38c34dcb6a94b871184d3bd7f6f007fed4e27cc8764cc9b938c6a8cb->leave($__internal_aba9404e38c34dcb6a94b871184d3bd7f6f007fed4e27cc8764cc9b938c6a8cb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f8c01c2bc33b31d09da40ce981fdd797ec5d7ae06ff26e71144268f217c0989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8c01c2bc33b31d09da40ce981fdd797ec5d7ae06ff26e71144268f217c0989->enter($__internal_5f8c01c2bc33b31d09da40ce981fdd797ec5d7ae06ff26e71144268f217c0989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_60dcd7a9828369658e7cbd70fdfca24eedf7bc70b879d2de7edd9cedd4d5af25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60dcd7a9828369658e7cbd70fdfca24eedf7bc70b879d2de7edd9cedd4d5af25->enter($__internal_60dcd7a9828369658e7cbd70fdfca24eedf7bc70b879d2de7edd9cedd4d5af25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_60dcd7a9828369658e7cbd70fdfca24eedf7bc70b879d2de7edd9cedd4d5af25->leave($__internal_60dcd7a9828369658e7cbd70fdfca24eedf7bc70b879d2de7edd9cedd4d5af25_prof);

        
        $__internal_5f8c01c2bc33b31d09da40ce981fdd797ec5d7ae06ff26e71144268f217c0989->leave($__internal_5f8c01c2bc33b31d09da40ce981fdd797ec5d7ae06ff26e71144268f217c0989_prof);

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
