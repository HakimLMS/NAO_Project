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
        $__internal_9f9b630640e3ece126c78ead003dde6e6e35a6e5bae9336bdd5e35a7ead7dd2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9b630640e3ece126c78ead003dde6e6e35a6e5bae9336bdd5e35a7ead7dd2d->enter($__internal_9f9b630640e3ece126c78ead003dde6e6e35a6e5bae9336bdd5e35a7ead7dd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/new.html.twig"));

        $__internal_613c263e26ec42f501d74b8cacca1231e94f08705e50199549534cd9866ab198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613c263e26ec42f501d74b8cacca1231e94f08705e50199549534cd9866ab198->enter($__internal_613c263e26ec42f501d74b8cacca1231e94f08705e50199549534cd9866ab198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f9b630640e3ece126c78ead003dde6e6e35a6e5bae9336bdd5e35a7ead7dd2d->leave($__internal_9f9b630640e3ece126c78ead003dde6e6e35a6e5bae9336bdd5e35a7ead7dd2d_prof);

        
        $__internal_613c263e26ec42f501d74b8cacca1231e94f08705e50199549534cd9866ab198->leave($__internal_613c263e26ec42f501d74b8cacca1231e94f08705e50199549534cd9866ab198_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_71d024f376bf3a74afbd46fcf52f4996bdb059dbf968144407971cbf1abf0079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71d024f376bf3a74afbd46fcf52f4996bdb059dbf968144407971cbf1abf0079->enter($__internal_71d024f376bf3a74afbd46fcf52f4996bdb059dbf968144407971cbf1abf0079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3fc6e628f836beeb2e0d5a295e2c37d278bbdc7547fe4db3535d0b93add507a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc6e628f836beeb2e0d5a295e2c37d278bbdc7547fe4db3535d0b93add507a3->enter($__internal_3fc6e628f836beeb2e0d5a295e2c37d278bbdc7547fe4db3535d0b93add507a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3fc6e628f836beeb2e0d5a295e2c37d278bbdc7547fe4db3535d0b93add507a3->leave($__internal_3fc6e628f836beeb2e0d5a295e2c37d278bbdc7547fe4db3535d0b93add507a3_prof);

        
        $__internal_71d024f376bf3a74afbd46fcf52f4996bdb059dbf968144407971cbf1abf0079->leave($__internal_71d024f376bf3a74afbd46fcf52f4996bdb059dbf968144407971cbf1abf0079_prof);

    }

    // line 4
    public function block_script($context, array $blocks = array())
    {
        $__internal_41e30f0b2eab4618df4daa4f1b13fd264388e5bafbca62a51d3e580523f4fc64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41e30f0b2eab4618df4daa4f1b13fd264388e5bafbca62a51d3e580523f4fc64->enter($__internal_41e30f0b2eab4618df4daa4f1b13fd264388e5bafbca62a51d3e580523f4fc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_81f1490ddd179416168dd464c69cb2536c7663170685bc3c0438acf06f38aeeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f1490ddd179416168dd464c69cb2536c7663170685bc3c0438acf06f38aeeb->enter($__internal_81f1490ddd179416168dd464c69cb2536c7663170685bc3c0438acf06f38aeeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 5
        echo "    <head>
        <script src=\"https://cloud.tinymce.com/stable/tinymce.min.js\"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
    </head>
    ";
        
        $__internal_81f1490ddd179416168dd464c69cb2536c7663170685bc3c0438acf06f38aeeb->leave($__internal_81f1490ddd179416168dd464c69cb2536c7663170685bc3c0438acf06f38aeeb_prof);

        
        $__internal_41e30f0b2eab4618df4daa4f1b13fd264388e5bafbca62a51d3e580523f4fc64->leave($__internal_41e30f0b2eab4618df4daa4f1b13fd264388e5bafbca62a51d3e580523f4fc64_prof);

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
        return array (  78 => 5,  69 => 4,  57 => 11,  53 => 10,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

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
", "blog/new.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\blog\\new.html.twig");
    }
}
