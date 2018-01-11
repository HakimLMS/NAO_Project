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
        $__internal_0fccb3c84dbd62b349763f3889300b42f40d291ba46b6d6b0ddaf0b6c20a2a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fccb3c84dbd62b349763f3889300b42f40d291ba46b6d6b0ddaf0b6c20a2a25->enter($__internal_0fccb3c84dbd62b349763f3889300b42f40d291ba46b6d6b0ddaf0b6c20a2a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/research.html.twig"));

        $__internal_fa6e2b56bdad57a17c1a8a91559b8ffad5183b14eec0ae375ffe4927941ee1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6e2b56bdad57a17c1a8a91559b8ffad5183b14eec0ae375ffe4927941ee1e6->enter($__internal_fa6e2b56bdad57a17c1a8a91559b8ffad5183b14eec0ae375ffe4927941ee1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "research/research.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fccb3c84dbd62b349763f3889300b42f40d291ba46b6d6b0ddaf0b6c20a2a25->leave($__internal_0fccb3c84dbd62b349763f3889300b42f40d291ba46b6d6b0ddaf0b6c20a2a25_prof);

        
        $__internal_fa6e2b56bdad57a17c1a8a91559b8ffad5183b14eec0ae375ffe4927941ee1e6->leave($__internal_fa6e2b56bdad57a17c1a8a91559b8ffad5183b14eec0ae375ffe4927941ee1e6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a46a62f2e24c220df5bbe994d2f8087b0773dbd5550b418d60e1d4765c74ed9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a46a62f2e24c220df5bbe994d2f8087b0773dbd5550b418d60e1d4765c74ed9b->enter($__internal_a46a62f2e24c220df5bbe994d2f8087b0773dbd5550b418d60e1d4765c74ed9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6403eee9c8489ac8705a7626ba31866e9565818df9e98b98dcc604b2106f0577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6403eee9c8489ac8705a7626ba31866e9565818df9e98b98dcc604b2106f0577->enter($__internal_6403eee9c8489ac8705a7626ba31866e9565818df9e98b98dcc604b2106f0577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Recherche";
        
        $__internal_6403eee9c8489ac8705a7626ba31866e9565818df9e98b98dcc604b2106f0577->leave($__internal_6403eee9c8489ac8705a7626ba31866e9565818df9e98b98dcc604b2106f0577_prof);

        
        $__internal_a46a62f2e24c220df5bbe994d2f8087b0773dbd5550b418d60e1d4765c74ed9b->leave($__internal_a46a62f2e24c220df5bbe994d2f8087b0773dbd5550b418d60e1d4765c74ed9b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c73939b92637da98f6b21727f315433b97bc2e0ee364bc1d2d73398c66704c32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c73939b92637da98f6b21727f315433b97bc2e0ee364bc1d2d73398c66704c32->enter($__internal_c73939b92637da98f6b21727f315433b97bc2e0ee364bc1d2d73398c66704c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89c9af1bd505770c5dd320fffc4e748be80466a2ab2ebb400c3a3bedf5b446b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c9af1bd505770c5dd320fffc4e748be80466a2ab2ebb400c3a3bedf5b446b6->enter($__internal_89c9af1bd505770c5dd320fffc4e748be80466a2ab2ebb400c3a3bedf5b446b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_89c9af1bd505770c5dd320fffc4e748be80466a2ab2ebb400c3a3bedf5b446b6->leave($__internal_89c9af1bd505770c5dd320fffc4e748be80466a2ab2ebb400c3a3bedf5b446b6_prof);

        
        $__internal_c73939b92637da98f6b21727f315433b97bc2e0ee364bc1d2d73398c66704c32->leave($__internal_c73939b92637da98f6b21727f315433b97bc2e0ee364bc1d2d73398c66704c32_prof);

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

{% endblock %}", "research/research.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\research\\research.html.twig");
    }
}
