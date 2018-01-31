<?php

/* blog/modify.html.twig */
class __TwigTemplate_103d54cea413bf376ccbc8742700eeb35ced9969fc269686fff412e500ba2872 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "blog/modify.html.twig", 2);
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
        $__internal_3d537ebcafd8dd2c56608ef9a49e93433fc6c30d409f4fddca96a8cf62178735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d537ebcafd8dd2c56608ef9a49e93433fc6c30d409f4fddca96a8cf62178735->enter($__internal_3d537ebcafd8dd2c56608ef9a49e93433fc6c30d409f4fddca96a8cf62178735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modify.html.twig"));

        $__internal_1eeb7abd0d931f8b87ab61836a5106027720b8d18a1426c17ab0f29b6a72be57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eeb7abd0d931f8b87ab61836a5106027720b8d18a1426c17ab0f29b6a72be57->enter($__internal_1eeb7abd0d931f8b87ab61836a5106027720b8d18a1426c17ab0f29b6a72be57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/modify.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d537ebcafd8dd2c56608ef9a49e93433fc6c30d409f4fddca96a8cf62178735->leave($__internal_3d537ebcafd8dd2c56608ef9a49e93433fc6c30d409f4fddca96a8cf62178735_prof);

        
        $__internal_1eeb7abd0d931f8b87ab61836a5106027720b8d18a1426c17ab0f29b6a72be57->leave($__internal_1eeb7abd0d931f8b87ab61836a5106027720b8d18a1426c17ab0f29b6a72be57_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_be31f227f3dc5f639415053eef98cd8d0eaa783f18ca695c376b2cd9f9fc45fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be31f227f3dc5f639415053eef98cd8d0eaa783f18ca695c376b2cd9f9fc45fe->enter($__internal_be31f227f3dc5f639415053eef98cd8d0eaa783f18ca695c376b2cd9f9fc45fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e90d03e0326f36df41a844e0ecc68ef727175f53f0163a9503fc65e587f164d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90d03e0326f36df41a844e0ecc68ef727175f53f0163a9503fc65e587f164d2->enter($__internal_e90d03e0326f36df41a844e0ecc68ef727175f53f0163a9503fc65e587f164d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $this->displayBlock('script', $context, $blocks);
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_e90d03e0326f36df41a844e0ecc68ef727175f53f0163a9503fc65e587f164d2->leave($__internal_e90d03e0326f36df41a844e0ecc68ef727175f53f0163a9503fc65e587f164d2_prof);

        
        $__internal_be31f227f3dc5f639415053eef98cd8d0eaa783f18ca695c376b2cd9f9fc45fe->leave($__internal_be31f227f3dc5f639415053eef98cd8d0eaa783f18ca695c376b2cd9f9fc45fe_prof);

    }

    // line 5
    public function block_script($context, array $blocks = array())
    {
        $__internal_fd5c7fb0782089d3e5b08d25102d0af6a8020cb8ed298e5855b55d63f937f565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd5c7fb0782089d3e5b08d25102d0af6a8020cb8ed298e5855b55d63f937f565->enter($__internal_fd5c7fb0782089d3e5b08d25102d0af6a8020cb8ed298e5855b55d63f937f565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_2a5227e76827a5c80d8f6867bca38774674b5190d6e5dcdcfa4106dcfebe26ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5227e76827a5c80d8f6867bca38774674b5190d6e5dcdcfa4106dcfebe26ac->enter($__internal_2a5227e76827a5c80d8f6867bca38774674b5190d6e5dcdcfa4106dcfebe26ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 6
        echo "    <head>
        <script src=\"https://cloud.tinymce.com/stable/tinymce.min.js\"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
    </head>
    ";
        
        $__internal_2a5227e76827a5c80d8f6867bca38774674b5190d6e5dcdcfa4106dcfebe26ac->leave($__internal_2a5227e76827a5c80d8f6867bca38774674b5190d6e5dcdcfa4106dcfebe26ac_prof);

        
        $__internal_fd5c7fb0782089d3e5b08d25102d0af6a8020cb8ed298e5855b55d63f937f565->leave($__internal_fd5c7fb0782089d3e5b08d25102d0af6a8020cb8ed298e5855b55d63f937f565_prof);

    }

    public function getTemplateName()
    {
        return "blog/modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 6,  69 => 5,  57 => 12,  53 => 11,  50 => 5,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}
    {% block script %}
    <head>
        <script src=\"https://cloud.tinymce.com/stable/tinymce.min.js\"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
    </head>
    {% endblock %}
{{ form_start(form) }}
{{ form_end(form) }}
{% endblock %}
", "blog/modify.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\blog\\modify.html.twig");
    }
}
