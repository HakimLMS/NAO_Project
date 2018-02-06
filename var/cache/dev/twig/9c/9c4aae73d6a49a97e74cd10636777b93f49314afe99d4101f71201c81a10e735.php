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
        $__internal_87398639cc3ca197d12dd91494d884876fd612066483d25f68ebb70e386292dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87398639cc3ca197d12dd91494d884876fd612066483d25f68ebb70e386292dd->enter($__internal_87398639cc3ca197d12dd91494d884876fd612066483d25f68ebb70e386292dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_826d823a11671d9aabbf29404577f3ad260d0d14760426b406d8455b5dbe961c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_826d823a11671d9aabbf29404577f3ad260d0d14760426b406d8455b5dbe961c->enter($__internal_826d823a11671d9aabbf29404577f3ad260d0d14760426b406d8455b5dbe961c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87398639cc3ca197d12dd91494d884876fd612066483d25f68ebb70e386292dd->leave($__internal_87398639cc3ca197d12dd91494d884876fd612066483d25f68ebb70e386292dd_prof);

        
        $__internal_826d823a11671d9aabbf29404577f3ad260d0d14760426b406d8455b5dbe961c->leave($__internal_826d823a11671d9aabbf29404577f3ad260d0d14760426b406d8455b5dbe961c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bff672d9fbfa6ff66f7b5bc5ae9b147ab2d0aacbf2d193e7f21bcbc065bd7744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bff672d9fbfa6ff66f7b5bc5ae9b147ab2d0aacbf2d193e7f21bcbc065bd7744->enter($__internal_bff672d9fbfa6ff66f7b5bc5ae9b147ab2d0aacbf2d193e7f21bcbc065bd7744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_21994a6b945011007945edf6986fffd0350082c5ff095d007c84944a6292b9fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21994a6b945011007945edf6986fffd0350082c5ff095d007c84944a6292b9fa->enter($__internal_21994a6b945011007945edf6986fffd0350082c5ff095d007c84944a6292b9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_21994a6b945011007945edf6986fffd0350082c5ff095d007c84944a6292b9fa->leave($__internal_21994a6b945011007945edf6986fffd0350082c5ff095d007c84944a6292b9fa_prof);

        
        $__internal_bff672d9fbfa6ff66f7b5bc5ae9b147ab2d0aacbf2d193e7f21bcbc065bd7744->leave($__internal_bff672d9fbfa6ff66f7b5bc5ae9b147ab2d0aacbf2d193e7f21bcbc065bd7744_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ecca9c19b923cdf9ae88424c6cd67c6a533c0c8255aa7998cb840a7cbdece1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ecca9c19b923cdf9ae88424c6cd67c6a533c0c8255aa7998cb840a7cbdece1d->enter($__internal_8ecca9c19b923cdf9ae88424c6cd67c6a533c0c8255aa7998cb840a7cbdece1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f51e655a6db36edad3830597ca81252e3cde99a2106ff3ed8c6aacae4ffa2777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51e655a6db36edad3830597ca81252e3cde99a2106ff3ed8c6aacae4ffa2777->enter($__internal_f51e655a6db36edad3830597ca81252e3cde99a2106ff3ed8c6aacae4ffa2777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f51e655a6db36edad3830597ca81252e3cde99a2106ff3ed8c6aacae4ffa2777->leave($__internal_f51e655a6db36edad3830597ca81252e3cde99a2106ff3ed8c6aacae4ffa2777_prof);

        
        $__internal_8ecca9c19b923cdf9ae88424c6cd67c6a533c0c8255aa7998cb840a7cbdece1d->leave($__internal_8ecca9c19b923cdf9ae88424c6cd67c6a533c0c8255aa7998cb840a7cbdece1d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00d7afc2c97da86e494c3542f94c27817d6c24d7a206a6492aa16e9ebcf98ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d7afc2c97da86e494c3542f94c27817d6c24d7a206a6492aa16e9ebcf98ce0->enter($__internal_00d7afc2c97da86e494c3542f94c27817d6c24d7a206a6492aa16e9ebcf98ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d983edc501e9393271599e941ecabf94e21a492ce9ce45c49f7af5b69ee3aaa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d983edc501e9393271599e941ecabf94e21a492ce9ce45c49f7af5b69ee3aaa6->enter($__internal_d983edc501e9393271599e941ecabf94e21a492ce9ce45c49f7af5b69ee3aaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d983edc501e9393271599e941ecabf94e21a492ce9ce45c49f7af5b69ee3aaa6->leave($__internal_d983edc501e9393271599e941ecabf94e21a492ce9ce45c49f7af5b69ee3aaa6_prof);

        
        $__internal_00d7afc2c97da86e494c3542f94c27817d6c24d7a206a6492aa16e9ebcf98ce0->leave($__internal_00d7afc2c97da86e494c3542f94c27817d6c24d7a206a6492aa16e9ebcf98ce0_prof);

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
