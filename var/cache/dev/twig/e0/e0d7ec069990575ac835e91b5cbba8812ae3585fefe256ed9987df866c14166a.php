<?php

/* research/research.html.twig */
class __TwigTemplate_9b3bf040c3be46edf0979c44b36f3e55b837a52fbe064e6b9e876489eb738e98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "research/research.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b346a40e4e2007feeccb66faf6902a65f71b684d9ffc559c5dc0f9c4460317f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b346a40e4e2007feeccb66faf6902a65f71b684d9ffc559c5dc0f9c4460317f9->enter($__internal_b346a40e4e2007feeccb66faf6902a65f71b684d9ffc559c5dc0f9c4460317f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/research.html.twig"));

        $__internal_bf2f65540180b055051437751cefc12ded3cfcb73c58cce191f832601a659dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2f65540180b055051437751cefc12ded3cfcb73c58cce191f832601a659dc1->enter($__internal_bf2f65540180b055051437751cefc12ded3cfcb73c58cce191f832601a659dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/research.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b346a40e4e2007feeccb66faf6902a65f71b684d9ffc559c5dc0f9c4460317f9->leave($__internal_b346a40e4e2007feeccb66faf6902a65f71b684d9ffc559c5dc0f9c4460317f9_prof);

        
        $__internal_bf2f65540180b055051437751cefc12ded3cfcb73c58cce191f832601a659dc1->leave($__internal_bf2f65540180b055051437751cefc12ded3cfcb73c58cce191f832601a659dc1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bddcab821deb53eef59e99ac4050bb4cad076123d926a01e1c8c26aea1114d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bddcab821deb53eef59e99ac4050bb4cad076123d926a01e1c8c26aea1114d4b->enter($__internal_bddcab821deb53eef59e99ac4050bb4cad076123d926a01e1c8c26aea1114d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68ebd8499361166f4b482713056540c59dcdd34c3e3f22a114a6ed5a90b86400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ebd8499361166f4b482713056540c59dcdd34c3e3f22a114a6ed5a90b86400->enter($__internal_68ebd8499361166f4b482713056540c59dcdd34c3e3f22a114a6ed5a90b86400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Recherche";
        
        $__internal_68ebd8499361166f4b482713056540c59dcdd34c3e3f22a114a6ed5a90b86400->leave($__internal_68ebd8499361166f4b482713056540c59dcdd34c3e3f22a114a6ed5a90b86400_prof);

        
        $__internal_bddcab821deb53eef59e99ac4050bb4cad076123d926a01e1c8c26aea1114d4b->leave($__internal_bddcab821deb53eef59e99ac4050bb4cad076123d926a01e1c8c26aea1114d4b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_947d9487a9f0a1c97fc8e94ee04c601eece528aa52a563c6c3858b508c55e793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_947d9487a9f0a1c97fc8e94ee04c601eece528aa52a563c6c3858b508c55e793->enter($__internal_947d9487a9f0a1c97fc8e94ee04c601eece528aa52a563c6c3858b508c55e793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0eb6bbc183e94850d6c443e76af6a48f348f444457442d91703b2031794b7b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb6bbc183e94850d6c443e76af6a48f348f444457442d91703b2031794b7b36->enter($__internal_0eb6bbc183e94850d6c443e76af6a48f348f444457442d91703b2031794b7b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start');
        echo "

\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        echo "

\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "vern_name", array()), 'row');
        echo "

\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "Rechercher", array()), 'row');
        echo "

\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'rest');
        echo "

\t";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), 'form_end');
        echo "

\t<div id=\"resultats-recherche\">
\t\t
\t</div>

";
        
        $__internal_0eb6bbc183e94850d6c443e76af6a48f348f444457442d91703b2031794b7b36->leave($__internal_0eb6bbc183e94850d6c443e76af6a48f348f444457442d91703b2031794b7b36_prof);

        
        $__internal_947d9487a9f0a1c97fc8e94ee04c601eece528aa52a563c6c3858b508c55e793->leave($__internal_947d9487a9f0a1c97fc8e94ee04c601eece528aa52a563c6c3858b508c55e793_prof);

    }

    public function getTemplateName()
    {
        return "research/research.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 17,  91 => 15,  86 => 13,  81 => 11,  76 => 9,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Recherche{% endblock %} 

{% block body %}

\t{{ form_start(form) }}

\t{{ form_errors(form) }}

\t{{ form_row(form.vern_name) }}

\t{{ form_row(form.Rechercher) }}

\t{{ form_rest(form) }}

\t{{ form_end(form) }}

\t<div id=\"resultats-recherche\">
\t\t
\t</div>

{% endblock %}", "research/research.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\research\\research.html.twig");
    }
}
