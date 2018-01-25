<?php

/* blog/new.html.twig */
class __TwigTemplate_630c9c3673f6ad28c9d7ae9262b18c5c88ef424fdb841902da24555d44b7de89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dc958a44996b51ab7e341aae645fdc50cf0d81ff25aa97ef7c2b4b9896eaee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc958a44996b51ab7e341aae645fdc50cf0d81ff25aa97ef7c2b4b9896eaee9->enter($__internal_8dc958a44996b51ab7e341aae645fdc50cf0d81ff25aa97ef7c2b4b9896eaee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/new.html.twig"));

        $__internal_66251e00907a124b84e03607507c131a2e43053fc7fd1e3611fdc852758d7950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66251e00907a124b84e03607507c131a2e43053fc7fd1e3611fdc852758d7950->enter($__internal_66251e00907a124b84e03607507c131a2e43053fc7fd1e3611fdc852758d7950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dc958a44996b51ab7e341aae645fdc50cf0d81ff25aa97ef7c2b4b9896eaee9->leave($__internal_8dc958a44996b51ab7e341aae645fdc50cf0d81ff25aa97ef7c2b4b9896eaee9_prof);

        
        $__internal_66251e00907a124b84e03607507c131a2e43053fc7fd1e3611fdc852758d7950->leave($__internal_66251e00907a124b84e03607507c131a2e43053fc7fd1e3611fdc852758d7950_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f61432fedb4b458dc60f008b51637d00ba78560f65d1bf34eabce784bec5e698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f61432fedb4b458dc60f008b51637d00ba78560f65d1bf34eabce784bec5e698->enter($__internal_f61432fedb4b458dc60f008b51637d00ba78560f65d1bf34eabce784bec5e698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5637a2ed36a3d6ccdbf3d1ecfb08b7270bca8f3659ed4ceaddbc8f7ae15308fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5637a2ed36a3d6ccdbf3d1ecfb08b7270bca8f3659ed4ceaddbc8f7ae15308fe->enter($__internal_5637a2ed36a3d6ccdbf3d1ecfb08b7270bca8f3659ed4ceaddbc8f7ae15308fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('script', $context, $blocks);
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_5637a2ed36a3d6ccdbf3d1ecfb08b7270bca8f3659ed4ceaddbc8f7ae15308fe->leave($__internal_5637a2ed36a3d6ccdbf3d1ecfb08b7270bca8f3659ed4ceaddbc8f7ae15308fe_prof);

        
        $__internal_f61432fedb4b458dc60f008b51637d00ba78560f65d1bf34eabce784bec5e698->leave($__internal_f61432fedb4b458dc60f008b51637d00ba78560f65d1bf34eabce784bec5e698_prof);

    }

    // line 4
    public function block_script($context, array $blocks = array())
    {
        $__internal_ca735866d9400329eda549c27d17fa6a06db2a11c4ca7f601131b5a07d36f7d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca735866d9400329eda549c27d17fa6a06db2a11c4ca7f601131b5a07d36f7d8->enter($__internal_ca735866d9400329eda549c27d17fa6a06db2a11c4ca7f601131b5a07d36f7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_203dbc1f90a242aa57ce6872dd11c847f89c17935a7a18681485a9e0191b2645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203dbc1f90a242aa57ce6872dd11c847f89c17935a7a18681485a9e0191b2645->enter($__internal_203dbc1f90a242aa57ce6872dd11c847f89c17935a7a18681485a9e0191b2645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 5
        echo "    <head>
        ";
        // line 8
        echo "    </head>
    ";
        
        $__internal_203dbc1f90a242aa57ce6872dd11c847f89c17935a7a18681485a9e0191b2645->leave($__internal_203dbc1f90a242aa57ce6872dd11c847f89c17935a7a18681485a9e0191b2645_prof);

        
        $__internal_ca735866d9400329eda549c27d17fa6a06db2a11c4ca7f601131b5a07d36f7d8->leave($__internal_ca735866d9400329eda549c27d17fa6a06db2a11c4ca7f601131b5a07d36f7d8_prof);

    }

    public function getTemplateName()
    {
        return "blog/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 8,  78 => 5,  69 => 4,  57 => 11,  53 => 10,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {% block script %}
    <head>
        {#<script src=\"https://cloud.tinymce.com/stable/tinymce.min.js\"></script>
        <script>tinymce.init({ selector:'textarea' });</script>#}
    </head>
    {% endblock %}
{{ form_start(form) }}
{{ form_end(form) }}
{% endblock %}
", "blog/new.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\blog\\new.html.twig");
    }
}
