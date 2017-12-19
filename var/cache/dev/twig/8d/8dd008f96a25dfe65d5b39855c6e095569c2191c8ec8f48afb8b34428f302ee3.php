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
        $__internal_928cee542dc62aa5aeed6fad9007337f4cdc85a8b9890f28886780225f35627d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_928cee542dc62aa5aeed6fad9007337f4cdc85a8b9890f28886780225f35627d->enter($__internal_928cee542dc62aa5aeed6fad9007337f4cdc85a8b9890f28886780225f35627d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b4977a12839ef1b1ac286338ad0ece3d2dc75ba075fe035bd0e9d367a839107e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4977a12839ef1b1ac286338ad0ece3d2dc75ba075fe035bd0e9d367a839107e->enter($__internal_b4977a12839ef1b1ac286338ad0ece3d2dc75ba075fe035bd0e9d367a839107e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_928cee542dc62aa5aeed6fad9007337f4cdc85a8b9890f28886780225f35627d->leave($__internal_928cee542dc62aa5aeed6fad9007337f4cdc85a8b9890f28886780225f35627d_prof);

        
        $__internal_b4977a12839ef1b1ac286338ad0ece3d2dc75ba075fe035bd0e9d367a839107e->leave($__internal_b4977a12839ef1b1ac286338ad0ece3d2dc75ba075fe035bd0e9d367a839107e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eab5fa86b74fec3c507912ebd40b3949723ff2b0c093dc23093deaae613bb212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eab5fa86b74fec3c507912ebd40b3949723ff2b0c093dc23093deaae613bb212->enter($__internal_eab5fa86b74fec3c507912ebd40b3949723ff2b0c093dc23093deaae613bb212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ab0ba281bcdd933aab3a86d5e91e82499f3d016e5707aea1676f963347b48744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0ba281bcdd933aab3a86d5e91e82499f3d016e5707aea1676f963347b48744->enter($__internal_ab0ba281bcdd933aab3a86d5e91e82499f3d016e5707aea1676f963347b48744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ab0ba281bcdd933aab3a86d5e91e82499f3d016e5707aea1676f963347b48744->leave($__internal_ab0ba281bcdd933aab3a86d5e91e82499f3d016e5707aea1676f963347b48744_prof);

        
        $__internal_eab5fa86b74fec3c507912ebd40b3949723ff2b0c093dc23093deaae613bb212->leave($__internal_eab5fa86b74fec3c507912ebd40b3949723ff2b0c093dc23093deaae613bb212_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a8f057e6c44c0ecc4d443d75273d9e56ed99a6300537084910ea8e06d68f2fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a8f057e6c44c0ecc4d443d75273d9e56ed99a6300537084910ea8e06d68f2fc->enter($__internal_8a8f057e6c44c0ecc4d443d75273d9e56ed99a6300537084910ea8e06d68f2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9cdfe11ad614b20ab4f9ec1b425ac3c8f62f3a985af22867c2ee9b53db2b7320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cdfe11ad614b20ab4f9ec1b425ac3c8f62f3a985af22867c2ee9b53db2b7320->enter($__internal_9cdfe11ad614b20ab4f9ec1b425ac3c8f62f3a985af22867c2ee9b53db2b7320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9cdfe11ad614b20ab4f9ec1b425ac3c8f62f3a985af22867c2ee9b53db2b7320->leave($__internal_9cdfe11ad614b20ab4f9ec1b425ac3c8f62f3a985af22867c2ee9b53db2b7320_prof);

        
        $__internal_8a8f057e6c44c0ecc4d443d75273d9e56ed99a6300537084910ea8e06d68f2fc->leave($__internal_8a8f057e6c44c0ecc4d443d75273d9e56ed99a6300537084910ea8e06d68f2fc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_96a1411199edd0ec8929f4c3adf7f263455a2c54a139fc0762490d9fdc4dfe30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a1411199edd0ec8929f4c3adf7f263455a2c54a139fc0762490d9fdc4dfe30->enter($__internal_96a1411199edd0ec8929f4c3adf7f263455a2c54a139fc0762490d9fdc4dfe30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_54184a2f6264c7164a7247287cc0467535278e21287bc15049e4e69e7d3e5a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54184a2f6264c7164a7247287cc0467535278e21287bc15049e4e69e7d3e5a76->enter($__internal_54184a2f6264c7164a7247287cc0467535278e21287bc15049e4e69e7d3e5a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_54184a2f6264c7164a7247287cc0467535278e21287bc15049e4e69e7d3e5a76->leave($__internal_54184a2f6264c7164a7247287cc0467535278e21287bc15049e4e69e7d3e5a76_prof);

        
        $__internal_96a1411199edd0ec8929f4c3adf7f263455a2c54a139fc0762490d9fdc4dfe30->leave($__internal_96a1411199edd0ec8929f4c3adf7f263455a2c54a139fc0762490d9fdc4dfe30_prof);

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
