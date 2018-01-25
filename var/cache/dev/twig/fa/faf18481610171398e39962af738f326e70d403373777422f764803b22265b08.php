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
        $__internal_d8a72332128f20035e0f3cd877c6b3deb9ccbe93ec19bf55fb7c8187b6341dd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a72332128f20035e0f3cd877c6b3deb9ccbe93ec19bf55fb7c8187b6341dd7->enter($__internal_d8a72332128f20035e0f3cd877c6b3deb9ccbe93ec19bf55fb7c8187b6341dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/new.html.twig"));

        $__internal_1b0b178e85495d27c5019d605c661990a71922e275e4e872ba0e07e7d4417ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0b178e85495d27c5019d605c661990a71922e275e4e872ba0e07e7d4417ad0->enter($__internal_1b0b178e85495d27c5019d605c661990a71922e275e4e872ba0e07e7d4417ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8a72332128f20035e0f3cd877c6b3deb9ccbe93ec19bf55fb7c8187b6341dd7->leave($__internal_d8a72332128f20035e0f3cd877c6b3deb9ccbe93ec19bf55fb7c8187b6341dd7_prof);

        
        $__internal_1b0b178e85495d27c5019d605c661990a71922e275e4e872ba0e07e7d4417ad0->leave($__internal_1b0b178e85495d27c5019d605c661990a71922e275e4e872ba0e07e7d4417ad0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf994527af5208149bce49e09f563a983b63cad34fae24c442fe4c28fbcc1cf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf994527af5208149bce49e09f563a983b63cad34fae24c442fe4c28fbcc1cf7->enter($__internal_bf994527af5208149bce49e09f563a983b63cad34fae24c442fe4c28fbcc1cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ddfb4ef61e214cd822793628ea36ea82d2accb2bc8f5260e19680ae6df10249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ddfb4ef61e214cd822793628ea36ea82d2accb2bc8f5260e19680ae6df10249->enter($__internal_0ddfb4ef61e214cd822793628ea36ea82d2accb2bc8f5260e19680ae6df10249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0ddfb4ef61e214cd822793628ea36ea82d2accb2bc8f5260e19680ae6df10249->leave($__internal_0ddfb4ef61e214cd822793628ea36ea82d2accb2bc8f5260e19680ae6df10249_prof);

        
        $__internal_bf994527af5208149bce49e09f563a983b63cad34fae24c442fe4c28fbcc1cf7->leave($__internal_bf994527af5208149bce49e09f563a983b63cad34fae24c442fe4c28fbcc1cf7_prof);

    }

    // line 5
    public function block_script($context, array $blocks = array())
    {
        $__internal_8cd7fcfe6586e2af294669d8dc20034d82a650563001e76f2e139c6d721b6a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd7fcfe6586e2af294669d8dc20034d82a650563001e76f2e139c6d721b6a88->enter($__internal_8cd7fcfe6586e2af294669d8dc20034d82a650563001e76f2e139c6d721b6a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_522fee12bd5cfb19133e3393913f559b364ecfce396dafbc945ab51642ea5364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_522fee12bd5cfb19133e3393913f559b364ecfce396dafbc945ab51642ea5364->enter($__internal_522fee12bd5cfb19133e3393913f559b364ecfce396dafbc945ab51642ea5364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 6
        echo "    <head>
        ";
        // line 9
        echo "    </head>
    ";
        
        $__internal_522fee12bd5cfb19133e3393913f559b364ecfce396dafbc945ab51642ea5364->leave($__internal_522fee12bd5cfb19133e3393913f559b364ecfce396dafbc945ab51642ea5364_prof);

        
        $__internal_8cd7fcfe6586e2af294669d8dc20034d82a650563001e76f2e139c6d721b6a88->leave($__internal_8cd7fcfe6586e2af294669d8dc20034d82a650563001e76f2e139c6d721b6a88_prof);

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
