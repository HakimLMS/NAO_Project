<?php

/* blog/new.html.twig */
class __TwigTemplate_630c9c3673f6ad28c9d7ae9262b18c5c88ef424fdb841902da24555d44b7de89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "blog/new.html.twig", 2);
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
        $__internal_e4c7a15ab59dadb3f7af577ecd4ba120c50cb782bea2a0611382f07443d03215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4c7a15ab59dadb3f7af577ecd4ba120c50cb782bea2a0611382f07443d03215->enter($__internal_e4c7a15ab59dadb3f7af577ecd4ba120c50cb782bea2a0611382f07443d03215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/new.html.twig"));

        $__internal_2d065679f0c9d15a9d6249f9a2dea63cdd63d4f4e29c43194d843fcd963590a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d065679f0c9d15a9d6249f9a2dea63cdd63d4f4e29c43194d843fcd963590a6->enter($__internal_2d065679f0c9d15a9d6249f9a2dea63cdd63d4f4e29c43194d843fcd963590a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4c7a15ab59dadb3f7af577ecd4ba120c50cb782bea2a0611382f07443d03215->leave($__internal_e4c7a15ab59dadb3f7af577ecd4ba120c50cb782bea2a0611382f07443d03215_prof);

        
        $__internal_2d065679f0c9d15a9d6249f9a2dea63cdd63d4f4e29c43194d843fcd963590a6->leave($__internal_2d065679f0c9d15a9d6249f9a2dea63cdd63d4f4e29c43194d843fcd963590a6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c3fb63c5dae4606f84067348db01fdc26abada9be7820c3e063bcae8d85c125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c3fb63c5dae4606f84067348db01fdc26abada9be7820c3e063bcae8d85c125->enter($__internal_1c3fb63c5dae4606f84067348db01fdc26abada9be7820c3e063bcae8d85c125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f832d616f9393bbc9a3960ed35fad76877505221110eebb91787fc6012a6e723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f832d616f9393bbc9a3960ed35fad76877505221110eebb91787fc6012a6e723->enter($__internal_f832d616f9393bbc9a3960ed35fad76877505221110eebb91787fc6012a6e723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f832d616f9393bbc9a3960ed35fad76877505221110eebb91787fc6012a6e723->leave($__internal_f832d616f9393bbc9a3960ed35fad76877505221110eebb91787fc6012a6e723_prof);

        
        $__internal_1c3fb63c5dae4606f84067348db01fdc26abada9be7820c3e063bcae8d85c125->leave($__internal_1c3fb63c5dae4606f84067348db01fdc26abada9be7820c3e063bcae8d85c125_prof);

    }

    // line 5
    public function block_script($context, array $blocks = array())
    {
        $__internal_a98a560f6fe2cf727cc4dfc7495360d93b0395468d91b329ae3ed6da80f8743a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a98a560f6fe2cf727cc4dfc7495360d93b0395468d91b329ae3ed6da80f8743a->enter($__internal_a98a560f6fe2cf727cc4dfc7495360d93b0395468d91b329ae3ed6da80f8743a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_7097ddecab6073099831011b84825480b30ca4632b88d2d7f2de7d9aab397334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7097ddecab6073099831011b84825480b30ca4632b88d2d7f2de7d9aab397334->enter($__internal_7097ddecab6073099831011b84825480b30ca4632b88d2d7f2de7d9aab397334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 6
        echo "    <head>
        ";
        // line 9
        echo "    </head>
    ";
        
        $__internal_7097ddecab6073099831011b84825480b30ca4632b88d2d7f2de7d9aab397334->leave($__internal_7097ddecab6073099831011b84825480b30ca4632b88d2d7f2de7d9aab397334_prof);

        
        $__internal_a98a560f6fe2cf727cc4dfc7495360d93b0395468d91b329ae3ed6da80f8743a->leave($__internal_a98a560f6fe2cf727cc4dfc7495360d93b0395468d91b329ae3ed6da80f8743a_prof);

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
        return array (  81 => 9,  78 => 6,  69 => 5,  57 => 12,  53 => 11,  50 => 5,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

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
