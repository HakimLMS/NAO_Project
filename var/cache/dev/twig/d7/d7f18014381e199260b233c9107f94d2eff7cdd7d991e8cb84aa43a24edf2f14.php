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
        $__internal_1b668e2dad5cc56507a0ccf4c523742a2778139fddb18dafc04c64248b280717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b668e2dad5cc56507a0ccf4c523742a2778139fddb18dafc04c64248b280717->enter($__internal_1b668e2dad5cc56507a0ccf4c523742a2778139fddb18dafc04c64248b280717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/modifyUser.html.twig"));

        $__internal_9df48f95bfe7291af6730b670589a82033271ffaf639d73f50464e0c5affb55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df48f95bfe7291af6730b670589a82033271ffaf639d73f50464e0c5affb55f->enter($__internal_9df48f95bfe7291af6730b670589a82033271ffaf639d73f50464e0c5affb55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/modifyUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b668e2dad5cc56507a0ccf4c523742a2778139fddb18dafc04c64248b280717->leave($__internal_1b668e2dad5cc56507a0ccf4c523742a2778139fddb18dafc04c64248b280717_prof);

        
        $__internal_9df48f95bfe7291af6730b670589a82033271ffaf639d73f50464e0c5affb55f->leave($__internal_9df48f95bfe7291af6730b670589a82033271ffaf639d73f50464e0c5affb55f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d96e3fa803d6c77e8750c1a16ad39a6a71d0ea29c4e0a6f0555903cbe3ca3e17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d96e3fa803d6c77e8750c1a16ad39a6a71d0ea29c4e0a6f0555903cbe3ca3e17->enter($__internal_d96e3fa803d6c77e8750c1a16ad39a6a71d0ea29c4e0a6f0555903cbe3ca3e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ab8fe7858c39cb226d77e1ef934c65c9e8c50738c10529fc701617dcda8224d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab8fe7858c39cb226d77e1ef934c65c9e8c50738c10529fc701617dcda8224d->enter($__internal_2ab8fe7858c39cb226d77e1ef934c65c9e8c50738c10529fc701617dcda8224d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_2ab8fe7858c39cb226d77e1ef934c65c9e8c50738c10529fc701617dcda8224d->leave($__internal_2ab8fe7858c39cb226d77e1ef934c65c9e8c50738c10529fc701617dcda8224d_prof);

        
        $__internal_d96e3fa803d6c77e8750c1a16ad39a6a71d0ea29c4e0a6f0555903cbe3ca3e17->leave($__internal_d96e3fa803d6c77e8750c1a16ad39a6a71d0ea29c4e0a6f0555903cbe3ca3e17_prof);

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
