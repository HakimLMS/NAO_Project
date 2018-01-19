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
        $__internal_660a8f27c11e4db1867f3447d2e978b8639df6116ee1b5f3b0d3b3dc7b438647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_660a8f27c11e4db1867f3447d2e978b8639df6116ee1b5f3b0d3b3dc7b438647->enter($__internal_660a8f27c11e4db1867f3447d2e978b8639df6116ee1b5f3b0d3b3dc7b438647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/new.html.twig"));

        $__internal_56cb55a01d0570aad629f5652ea64eebf4416d6d34939e03c751edd6dd7caa9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56cb55a01d0570aad629f5652ea64eebf4416d6d34939e03c751edd6dd7caa9a->enter($__internal_56cb55a01d0570aad629f5652ea64eebf4416d6d34939e03c751edd6dd7caa9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_660a8f27c11e4db1867f3447d2e978b8639df6116ee1b5f3b0d3b3dc7b438647->leave($__internal_660a8f27c11e4db1867f3447d2e978b8639df6116ee1b5f3b0d3b3dc7b438647_prof);

        
        $__internal_56cb55a01d0570aad629f5652ea64eebf4416d6d34939e03c751edd6dd7caa9a->leave($__internal_56cb55a01d0570aad629f5652ea64eebf4416d6d34939e03c751edd6dd7caa9a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe60cfbd8faf7f719373289e13213bf97d6cb64ebb3c49a9f58f9e269c0412a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe60cfbd8faf7f719373289e13213bf97d6cb64ebb3c49a9f58f9e269c0412a1->enter($__internal_fe60cfbd8faf7f719373289e13213bf97d6cb64ebb3c49a9f58f9e269c0412a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_906edd283295cb5606aabc87521dc0d8d0bc9540f20a58bd1cc70bda4824569d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906edd283295cb5606aabc87521dc0d8d0bc9540f20a58bd1cc70bda4824569d->enter($__internal_906edd283295cb5606aabc87521dc0d8d0bc9540f20a58bd1cc70bda4824569d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_906edd283295cb5606aabc87521dc0d8d0bc9540f20a58bd1cc70bda4824569d->leave($__internal_906edd283295cb5606aabc87521dc0d8d0bc9540f20a58bd1cc70bda4824569d_prof);

        
        $__internal_fe60cfbd8faf7f719373289e13213bf97d6cb64ebb3c49a9f58f9e269c0412a1->leave($__internal_fe60cfbd8faf7f719373289e13213bf97d6cb64ebb3c49a9f58f9e269c0412a1_prof);

    }

    // line 5
    public function block_script($context, array $blocks = array())
    {
        $__internal_b97c1dc123c194b8cd03230fdf988dc2201b7b285ca21190cb3fd0621a14c9ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b97c1dc123c194b8cd03230fdf988dc2201b7b285ca21190cb3fd0621a14c9ab->enter($__internal_b97c1dc123c194b8cd03230fdf988dc2201b7b285ca21190cb3fd0621a14c9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_c6242d13e55c591be9fe72e5aa275a993c5b64bf46161aba1b1004d6309edd18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6242d13e55c591be9fe72e5aa275a993c5b64bf46161aba1b1004d6309edd18->enter($__internal_c6242d13e55c591be9fe72e5aa275a993c5b64bf46161aba1b1004d6309edd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 6
        echo "    <head>
        <script src=\"https://cloud.tinymce.com/stable/tinymce.min.js\"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
    </head>
    ";
        
        $__internal_c6242d13e55c591be9fe72e5aa275a993c5b64bf46161aba1b1004d6309edd18->leave($__internal_c6242d13e55c591be9fe72e5aa275a993c5b64bf46161aba1b1004d6309edd18_prof);

        
        $__internal_b97c1dc123c194b8cd03230fdf988dc2201b7b285ca21190cb3fd0621a14c9ab->leave($__internal_b97c1dc123c194b8cd03230fdf988dc2201b7b285ca21190cb3fd0621a14c9ab_prof);

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
", "blog/new.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\blog\\new.html.twig");
    }
}
