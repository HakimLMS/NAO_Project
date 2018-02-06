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
        $__internal_ada1455e78262d88c3d538edfefd1751ab454d3ece954beb2170eb7512f4fe4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada1455e78262d88c3d538edfefd1751ab454d3ece954beb2170eb7512f4fe4e->enter($__internal_ada1455e78262d88c3d538edfefd1751ab454d3ece954beb2170eb7512f4fe4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/new.html.twig"));

        $__internal_19ff6fadc3201b232e8323dbb48745e042cc29b67658b626d95e14acb562fae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ff6fadc3201b232e8323dbb48745e042cc29b67658b626d95e14acb562fae4->enter($__internal_19ff6fadc3201b232e8323dbb48745e042cc29b67658b626d95e14acb562fae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ada1455e78262d88c3d538edfefd1751ab454d3ece954beb2170eb7512f4fe4e->leave($__internal_ada1455e78262d88c3d538edfefd1751ab454d3ece954beb2170eb7512f4fe4e_prof);

        
        $__internal_19ff6fadc3201b232e8323dbb48745e042cc29b67658b626d95e14acb562fae4->leave($__internal_19ff6fadc3201b232e8323dbb48745e042cc29b67658b626d95e14acb562fae4_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5372b25c5e9426ededec4ea3dd539033f2266babcc6c0b8a7ec237780814329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5372b25c5e9426ededec4ea3dd539033f2266babcc6c0b8a7ec237780814329->enter($__internal_d5372b25c5e9426ededec4ea3dd539033f2266babcc6c0b8a7ec237780814329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b98a4eea9e1501dff5f9f981741965912d06be6ce84bce9c339a57eab7b7423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b98a4eea9e1501dff5f9f981741965912d06be6ce84bce9c339a57eab7b7423->enter($__internal_0b98a4eea9e1501dff5f9f981741965912d06be6ce84bce9c339a57eab7b7423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0b98a4eea9e1501dff5f9f981741965912d06be6ce84bce9c339a57eab7b7423->leave($__internal_0b98a4eea9e1501dff5f9f981741965912d06be6ce84bce9c339a57eab7b7423_prof);

        
        $__internal_d5372b25c5e9426ededec4ea3dd539033f2266babcc6c0b8a7ec237780814329->leave($__internal_d5372b25c5e9426ededec4ea3dd539033f2266babcc6c0b8a7ec237780814329_prof);

    }

    // line 5
    public function block_script($context, array $blocks = array())
    {
        $__internal_e3d8f40e54b330697ee20b5298451be94054c8534df1c83fc82df9594f22873c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3d8f40e54b330697ee20b5298451be94054c8534df1c83fc82df9594f22873c->enter($__internal_e3d8f40e54b330697ee20b5298451be94054c8534df1c83fc82df9594f22873c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_05eb3d7f19c48e7c6d6250dc03d69f4b6a6cafc25e1a56490be09c3ac92942b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05eb3d7f19c48e7c6d6250dc03d69f4b6a6cafc25e1a56490be09c3ac92942b0->enter($__internal_05eb3d7f19c48e7c6d6250dc03d69f4b6a6cafc25e1a56490be09c3ac92942b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 6
        echo "    <head>
        ";
        // line 9
        echo "    </head>
    ";
        
        $__internal_05eb3d7f19c48e7c6d6250dc03d69f4b6a6cafc25e1a56490be09c3ac92942b0->leave($__internal_05eb3d7f19c48e7c6d6250dc03d69f4b6a6cafc25e1a56490be09c3ac92942b0_prof);

        
        $__internal_e3d8f40e54b330697ee20b5298451be94054c8534df1c83fc82df9594f22873c->leave($__internal_e3d8f40e54b330697ee20b5298451be94054c8534df1c83fc82df9594f22873c_prof);

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
