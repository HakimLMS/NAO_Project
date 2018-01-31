<?php

/* Administration/modifyUser.html.twig */
class __TwigTemplate_8a33966796aac74b38105bccb9d1fad348643fac5e5ca66f7d23fe5a94f3396d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "Administration/modifyUser.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_946cd49245a482c9b384daff414d4df07923eaf6d368a5640feb7ede5bb7232e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_946cd49245a482c9b384daff414d4df07923eaf6d368a5640feb7ede5bb7232e->enter($__internal_946cd49245a482c9b384daff414d4df07923eaf6d368a5640feb7ede5bb7232e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/modifyUser.html.twig"));

        $__internal_764d08c6ef23a9a00e5ac91dbb6c7be88c9059efde80bd988a74e4d7470c3488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764d08c6ef23a9a00e5ac91dbb6c7be88c9059efde80bd988a74e4d7470c3488->enter($__internal_764d08c6ef23a9a00e5ac91dbb6c7be88c9059efde80bd988a74e4d7470c3488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/modifyUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_946cd49245a482c9b384daff414d4df07923eaf6d368a5640feb7ede5bb7232e->leave($__internal_946cd49245a482c9b384daff414d4df07923eaf6d368a5640feb7ede5bb7232e_prof);

        
        $__internal_764d08c6ef23a9a00e5ac91dbb6c7be88c9059efde80bd988a74e4d7470c3488->leave($__internal_764d08c6ef23a9a00e5ac91dbb6c7be88c9059efde80bd988a74e4d7470c3488_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7aaff46c2d84a0fc745068b8628ed6f01dd5f517ad47be06d965e4ff00fb2518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aaff46c2d84a0fc745068b8628ed6f01dd5f517ad47be06d965e4ff00fb2518->enter($__internal_7aaff46c2d84a0fc745068b8628ed6f01dd5f517ad47be06d965e4ff00fb2518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b107f64a0904aa22260a5330e9024d66b61c5b95f232964137360003da99eaaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b107f64a0904aa22260a5330e9024d66b61c5b95f232964137360003da99eaaa->enter($__internal_b107f64a0904aa22260a5330e9024d66b61c5b95f232964137360003da99eaaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_b107f64a0904aa22260a5330e9024d66b61c5b95f232964137360003da99eaaa->leave($__internal_b107f64a0904aa22260a5330e9024d66b61c5b95f232964137360003da99eaaa_prof);

        
        $__internal_7aaff46c2d84a0fc745068b8628ed6f01dd5f517ad47be06d965e4ff00fb2518->leave($__internal_7aaff46c2d84a0fc745068b8628ed6f01dd5f517ad47be06d965e4ff00fb2518_prof);

    }

    public function getTemplateName()
    {
        return "Administration/modifyUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}
{{ form_start(form) }}
{{ form_end(form) }}
{% endblock %}
", "Administration/modifyUser.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Administration\\modifyUser.html.twig");
    }
}
