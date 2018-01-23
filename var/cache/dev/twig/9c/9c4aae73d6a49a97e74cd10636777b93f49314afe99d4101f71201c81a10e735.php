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
        $__internal_f0729ea1bfe8eda820a3fc69ce937042959d91b5274c6e20ea28e20494eee936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0729ea1bfe8eda820a3fc69ce937042959d91b5274c6e20ea28e20494eee936->enter($__internal_f0729ea1bfe8eda820a3fc69ce937042959d91b5274c6e20ea28e20494eee936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_fb5a8438a221b3d9e1cb484bab8245e516ad7b21ce852d68ecd8855580bd3237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb5a8438a221b3d9e1cb484bab8245e516ad7b21ce852d68ecd8855580bd3237->enter($__internal_fb5a8438a221b3d9e1cb484bab8245e516ad7b21ce852d68ecd8855580bd3237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0729ea1bfe8eda820a3fc69ce937042959d91b5274c6e20ea28e20494eee936->leave($__internal_f0729ea1bfe8eda820a3fc69ce937042959d91b5274c6e20ea28e20494eee936_prof);

        
        $__internal_fb5a8438a221b3d9e1cb484bab8245e516ad7b21ce852d68ecd8855580bd3237->leave($__internal_fb5a8438a221b3d9e1cb484bab8245e516ad7b21ce852d68ecd8855580bd3237_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7345f25189ac6cbfff4344ed2f151b11851c299d05fbebc043f0b6d01de2282a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7345f25189ac6cbfff4344ed2f151b11851c299d05fbebc043f0b6d01de2282a->enter($__internal_7345f25189ac6cbfff4344ed2f151b11851c299d05fbebc043f0b6d01de2282a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_15097d5dcef842f77ed7a2eeb0ee6cfbd73d10bc662d8e0a61e085c1983de4df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15097d5dcef842f77ed7a2eeb0ee6cfbd73d10bc662d8e0a61e085c1983de4df->enter($__internal_15097d5dcef842f77ed7a2eeb0ee6cfbd73d10bc662d8e0a61e085c1983de4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_15097d5dcef842f77ed7a2eeb0ee6cfbd73d10bc662d8e0a61e085c1983de4df->leave($__internal_15097d5dcef842f77ed7a2eeb0ee6cfbd73d10bc662d8e0a61e085c1983de4df_prof);

        
        $__internal_7345f25189ac6cbfff4344ed2f151b11851c299d05fbebc043f0b6d01de2282a->leave($__internal_7345f25189ac6cbfff4344ed2f151b11851c299d05fbebc043f0b6d01de2282a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fc39a136bae587d8025309afb187686551a92aafe1fa17116675adb42bdaaf8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc39a136bae587d8025309afb187686551a92aafe1fa17116675adb42bdaaf8f->enter($__internal_fc39a136bae587d8025309afb187686551a92aafe1fa17116675adb42bdaaf8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_65d67248afe2883b8c32b3c8890baaf7aabd3b2123c73b57e0e6794dceac5192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d67248afe2883b8c32b3c8890baaf7aabd3b2123c73b57e0e6794dceac5192->enter($__internal_65d67248afe2883b8c32b3c8890baaf7aabd3b2123c73b57e0e6794dceac5192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_65d67248afe2883b8c32b3c8890baaf7aabd3b2123c73b57e0e6794dceac5192->leave($__internal_65d67248afe2883b8c32b3c8890baaf7aabd3b2123c73b57e0e6794dceac5192_prof);

        
        $__internal_fc39a136bae587d8025309afb187686551a92aafe1fa17116675adb42bdaaf8f->leave($__internal_fc39a136bae587d8025309afb187686551a92aafe1fa17116675adb42bdaaf8f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a178311455702e5f61d99867b762001100d1bcf48d4da70a93083001bf5951bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a178311455702e5f61d99867b762001100d1bcf48d4da70a93083001bf5951bf->enter($__internal_a178311455702e5f61d99867b762001100d1bcf48d4da70a93083001bf5951bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b8660956c0827f052a0ec2839408e7b32ae75b4c0b4f4b790208cbbad7b4b133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8660956c0827f052a0ec2839408e7b32ae75b4c0b4f4b790208cbbad7b4b133->enter($__internal_b8660956c0827f052a0ec2839408e7b32ae75b4c0b4f4b790208cbbad7b4b133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b8660956c0827f052a0ec2839408e7b32ae75b4c0b4f4b790208cbbad7b4b133->leave($__internal_b8660956c0827f052a0ec2839408e7b32ae75b4c0b4f4b790208cbbad7b4b133_prof);

        
        $__internal_a178311455702e5f61d99867b762001100d1bcf48d4da70a93083001bf5951bf->leave($__internal_a178311455702e5f61d99867b762001100d1bcf48d4da70a93083001bf5951bf_prof);

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
