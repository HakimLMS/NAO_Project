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
        $__internal_0f9d6614fc2e3c3cd783867f70d82a44ce4c39e9fcba807d66a8d5205cdafa50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f9d6614fc2e3c3cd783867f70d82a44ce4c39e9fcba807d66a8d5205cdafa50->enter($__internal_0f9d6614fc2e3c3cd783867f70d82a44ce4c39e9fcba807d66a8d5205cdafa50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/new.html.twig"));

        $__internal_d51360dfcf2c55ceb3288ae915fba462d1a4fa4ec3fb575b05987f36a51fba12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51360dfcf2c55ceb3288ae915fba462d1a4fa4ec3fb575b05987f36a51fba12->enter($__internal_d51360dfcf2c55ceb3288ae915fba462d1a4fa4ec3fb575b05987f36a51fba12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f9d6614fc2e3c3cd783867f70d82a44ce4c39e9fcba807d66a8d5205cdafa50->leave($__internal_0f9d6614fc2e3c3cd783867f70d82a44ce4c39e9fcba807d66a8d5205cdafa50_prof);

        
        $__internal_d51360dfcf2c55ceb3288ae915fba462d1a4fa4ec3fb575b05987f36a51fba12->leave($__internal_d51360dfcf2c55ceb3288ae915fba462d1a4fa4ec3fb575b05987f36a51fba12_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac20ddfbda40f0bb8589581387af374b6a43086f39b9227ccea566d534bd2c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac20ddfbda40f0bb8589581387af374b6a43086f39b9227ccea566d534bd2c51->enter($__internal_ac20ddfbda40f0bb8589581387af374b6a43086f39b9227ccea566d534bd2c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c5a1755a734fd68c1b6698f75d313bb44cae20fcc21d963826ed7e1d9758550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5a1755a734fd68c1b6698f75d313bb44cae20fcc21d963826ed7e1d9758550->enter($__internal_5c5a1755a734fd68c1b6698f75d313bb44cae20fcc21d963826ed7e1d9758550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5c5a1755a734fd68c1b6698f75d313bb44cae20fcc21d963826ed7e1d9758550->leave($__internal_5c5a1755a734fd68c1b6698f75d313bb44cae20fcc21d963826ed7e1d9758550_prof);

        
        $__internal_ac20ddfbda40f0bb8589581387af374b6a43086f39b9227ccea566d534bd2c51->leave($__internal_ac20ddfbda40f0bb8589581387af374b6a43086f39b9227ccea566d534bd2c51_prof);

    }

    // line 5
    public function block_script($context, array $blocks = array())
    {
        $__internal_e1c9405614becf53ac5974db1c21efec18c403cd33c4166df897de8f5c4728da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c9405614becf53ac5974db1c21efec18c403cd33c4166df897de8f5c4728da->enter($__internal_e1c9405614becf53ac5974db1c21efec18c403cd33c4166df897de8f5c4728da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        $__internal_b4e66b0b54501b10a16584ae0f7b327f4902b1cf6a1f8f296361b931369eb160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e66b0b54501b10a16584ae0f7b327f4902b1cf6a1f8f296361b931369eb160->enter($__internal_b4e66b0b54501b10a16584ae0f7b327f4902b1cf6a1f8f296361b931369eb160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 6
        echo "    <head>
        ";
        // line 9
        echo "    </head>
    ";
        
        $__internal_b4e66b0b54501b10a16584ae0f7b327f4902b1cf6a1f8f296361b931369eb160->leave($__internal_b4e66b0b54501b10a16584ae0f7b327f4902b1cf6a1f8f296361b931369eb160_prof);

        
        $__internal_e1c9405614becf53ac5974db1c21efec18c403cd33c4166df897de8f5c4728da->leave($__internal_e1c9405614becf53ac5974db1c21efec18c403cd33c4166df897de8f5c4728da_prof);

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
", "blog/new.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\blog\\new.html.twig");
    }
}
