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
        $__internal_b63333296f006b0905717831931b79eb5887762b2d74acb1b32e0b3d5c29fb9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b63333296f006b0905717831931b79eb5887762b2d74acb1b32e0b3d5c29fb9e->enter($__internal_b63333296f006b0905717831931b79eb5887762b2d74acb1b32e0b3d5c29fb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_869de996f4da9326cae3fbb74eec96d16f36addce732d6a1cc6aae68e6d9df1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869de996f4da9326cae3fbb74eec96d16f36addce732d6a1cc6aae68e6d9df1f->enter($__internal_869de996f4da9326cae3fbb74eec96d16f36addce732d6a1cc6aae68e6d9df1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b63333296f006b0905717831931b79eb5887762b2d74acb1b32e0b3d5c29fb9e->leave($__internal_b63333296f006b0905717831931b79eb5887762b2d74acb1b32e0b3d5c29fb9e_prof);

        
        $__internal_869de996f4da9326cae3fbb74eec96d16f36addce732d6a1cc6aae68e6d9df1f->leave($__internal_869de996f4da9326cae3fbb74eec96d16f36addce732d6a1cc6aae68e6d9df1f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_36fca43f295101c567b104bab6d2d2f3fbc024e2844bb4a3b3282ef4546b6bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36fca43f295101c567b104bab6d2d2f3fbc024e2844bb4a3b3282ef4546b6bfd->enter($__internal_36fca43f295101c567b104bab6d2d2f3fbc024e2844bb4a3b3282ef4546b6bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_56f6e72832828220e32f6412da5e7aaab1b7233f4716e92f5d10182d3a6fe8c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f6e72832828220e32f6412da5e7aaab1b7233f4716e92f5d10182d3a6fe8c5->enter($__internal_56f6e72832828220e32f6412da5e7aaab1b7233f4716e92f5d10182d3a6fe8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_56f6e72832828220e32f6412da5e7aaab1b7233f4716e92f5d10182d3a6fe8c5->leave($__internal_56f6e72832828220e32f6412da5e7aaab1b7233f4716e92f5d10182d3a6fe8c5_prof);

        
        $__internal_36fca43f295101c567b104bab6d2d2f3fbc024e2844bb4a3b3282ef4546b6bfd->leave($__internal_36fca43f295101c567b104bab6d2d2f3fbc024e2844bb4a3b3282ef4546b6bfd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a64d1be2f0ff99603e6f42a8600c97d9a242de8d7ab3679066973ddc15755248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a64d1be2f0ff99603e6f42a8600c97d9a242de8d7ab3679066973ddc15755248->enter($__internal_a64d1be2f0ff99603e6f42a8600c97d9a242de8d7ab3679066973ddc15755248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cb19da1836375887ede4554db491ba99ce41230202e2f26c8b564232911dbb13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb19da1836375887ede4554db491ba99ce41230202e2f26c8b564232911dbb13->enter($__internal_cb19da1836375887ede4554db491ba99ce41230202e2f26c8b564232911dbb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_cb19da1836375887ede4554db491ba99ce41230202e2f26c8b564232911dbb13->leave($__internal_cb19da1836375887ede4554db491ba99ce41230202e2f26c8b564232911dbb13_prof);

        
        $__internal_a64d1be2f0ff99603e6f42a8600c97d9a242de8d7ab3679066973ddc15755248->leave($__internal_a64d1be2f0ff99603e6f42a8600c97d9a242de8d7ab3679066973ddc15755248_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a91bcd09fa0aff00973beada32bede3342b3a88f905ae4170a09cc4adaf4d8b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a91bcd09fa0aff00973beada32bede3342b3a88f905ae4170a09cc4adaf4d8b6->enter($__internal_a91bcd09fa0aff00973beada32bede3342b3a88f905ae4170a09cc4adaf4d8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_43ef5931361f7eb0bf6e98bdef03520d61287fb67acb6d5daf07769c7f857cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ef5931361f7eb0bf6e98bdef03520d61287fb67acb6d5daf07769c7f857cfb->enter($__internal_43ef5931361f7eb0bf6e98bdef03520d61287fb67acb6d5daf07769c7f857cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_43ef5931361f7eb0bf6e98bdef03520d61287fb67acb6d5daf07769c7f857cfb->leave($__internal_43ef5931361f7eb0bf6e98bdef03520d61287fb67acb6d5daf07769c7f857cfb_prof);

        
        $__internal_a91bcd09fa0aff00973beada32bede3342b3a88f905ae4170a09cc4adaf4d8b6->leave($__internal_a91bcd09fa0aff00973beada32bede3342b3a88f905ae4170a09cc4adaf4d8b6_prof);

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
