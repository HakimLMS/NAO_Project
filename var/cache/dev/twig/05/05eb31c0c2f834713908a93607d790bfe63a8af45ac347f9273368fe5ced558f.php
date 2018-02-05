<?php

/* Administration/subvalidationerror.html.twig */
class __TwigTemplate_7f96954917e9acfc97e5ab6e3c5599145bb9ef509b3df58f27ba10caa653ba3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("subscription.html.twig", "Administration/subvalidationerror.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "subscription.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_569e82bea6f1f92e5b076185c233377864073af7a5264f3b31149496fca603b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_569e82bea6f1f92e5b076185c233377864073af7a5264f3b31149496fca603b0->enter($__internal_569e82bea6f1f92e5b076185c233377864073af7a5264f3b31149496fca603b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subvalidationerror.html.twig"));

        $__internal_ad255f7f187f2e1c4bfae8aab9ae6882c79e33263167de07e5779c1066611207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad255f7f187f2e1c4bfae8aab9ae6882c79e33263167de07e5779c1066611207->enter($__internal_ad255f7f187f2e1c4bfae8aab9ae6882c79e33263167de07e5779c1066611207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subvalidationerror.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_569e82bea6f1f92e5b076185c233377864073af7a5264f3b31149496fca603b0->leave($__internal_569e82bea6f1f92e5b076185c233377864073af7a5264f3b31149496fca603b0_prof);

        
        $__internal_ad255f7f187f2e1c4bfae8aab9ae6882c79e33263167de07e5779c1066611207->leave($__internal_ad255f7f187f2e1c4bfae8aab9ae6882c79e33263167de07e5779c1066611207_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9849c3ba82ee7ac32a8b4c55a6c7ad0c9de3d87882b4f5c9be4e5427e280ca7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9849c3ba82ee7ac32a8b4c55a6c7ad0c9de3d87882b4f5c9be4e5427e280ca7b->enter($__internal_9849c3ba82ee7ac32a8b4c55a6c7ad0c9de3d87882b4f5c9be4e5427e280ca7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0178e119960b27312f9d75914a59e6ccd8b7385791def7d546bd24076069bf90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0178e119960b27312f9d75914a59e6ccd8b7385791def7d546bd24076069bf90->enter($__internal_0178e119960b27312f9d75914a59e6ccd8b7385791def7d546bd24076069bf90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 4, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 5
            echo "        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0178e119960b27312f9d75914a59e6ccd8b7385791def7d546bd24076069bf90->leave($__internal_0178e119960b27312f9d75914a59e6ccd8b7385791def7d546bd24076069bf90_prof);

        
        $__internal_9849c3ba82ee7ac32a8b4c55a6c7ad0c9de3d87882b4f5c9be4e5427e280ca7b->leave($__internal_9849c3ba82ee7ac32a8b4c55a6c7ad0c9de3d87882b4f5c9be4e5427e280ca7b_prof);

    }

    public function getTemplateName()
    {
        return "Administration/subvalidationerror.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'subscription.html.twig' %}

{% block body %}
    {% for error in errors %}
        <li>{{ error.message }}</li>
    {% endfor %}
{% endblock %}
", "Administration/subvalidationerror.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Administration\\subvalidationerror.html.twig");
    }
}
