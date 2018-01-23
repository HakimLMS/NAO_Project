<?php

/* Administration/subscription.html.twig */
class __TwigTemplate_6e183341ffb202b843e0fd7d7584ec561e2eea4e208810f8cd5f91b69294ede7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "Administration/subscription.html.twig", 2);
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
        $__internal_2e550a69c3ffb1cffda32da94d610482953a3acb2df61c506c4f899e8abc670e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e550a69c3ffb1cffda32da94d610482953a3acb2df61c506c4f899e8abc670e->enter($__internal_2e550a69c3ffb1cffda32da94d610482953a3acb2df61c506c4f899e8abc670e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $__internal_d3df30ce1ddc7660595de24cd147b1150785c4fdc3f678b86410f853f37f3dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3df30ce1ddc7660595de24cd147b1150785c4fdc3f678b86410f853f37f3dd7->enter($__internal_d3df30ce1ddc7660595de24cd147b1150785c4fdc3f678b86410f853f37f3dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/subscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e550a69c3ffb1cffda32da94d610482953a3acb2df61c506c4f899e8abc670e->leave($__internal_2e550a69c3ffb1cffda32da94d610482953a3acb2df61c506c4f899e8abc670e_prof);

        
        $__internal_d3df30ce1ddc7660595de24cd147b1150785c4fdc3f678b86410f853f37f3dd7->leave($__internal_d3df30ce1ddc7660595de24cd147b1150785c4fdc3f678b86410f853f37f3dd7_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_108f2f68b94e8f283170541bfbed5a42674aa6ab5dc39e84b0a3ac62a98d393c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108f2f68b94e8f283170541bfbed5a42674aa6ab5dc39e84b0a3ac62a98d393c->enter($__internal_108f2f68b94e8f283170541bfbed5a42674aa6ab5dc39e84b0a3ac62a98d393c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28bf1da025e89c47b0c3daf56389c33a26aeae1ef9892d24e51376a6009394f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28bf1da025e89c47b0c3daf56389c33a26aeae1ef9892d24e51376a6009394f3->enter($__internal_28bf1da025e89c47b0c3daf56389c33a26aeae1ef9892d24e51376a6009394f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 5, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 6
            echo "        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_28bf1da025e89c47b0c3daf56389c33a26aeae1ef9892d24e51376a6009394f3->leave($__internal_28bf1da025e89c47b0c3daf56389c33a26aeae1ef9892d24e51376a6009394f3_prof);

        
        $__internal_108f2f68b94e8f283170541bfbed5a42674aa6ab5dc39e84b0a3ac62a98d393c->leave($__internal_108f2f68b94e8f283170541bfbed5a42674aa6ab5dc39e84b0a3ac62a98d393c_prof);

    }

    public function getTemplateName()
    {
        return "Administration/subscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 9,  63 => 8,  54 => 6,  49 => 5,  40 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}
    {% for error in errors %}
        <li>{{ error.message }}</li>
    {% endfor %}
{{ form_start(form) }}
{{ form_end(form) }}
{% endblock %}", "Administration/subscription.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Administration\\subscription.html.twig");
    }
}
