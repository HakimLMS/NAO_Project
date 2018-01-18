<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_c7c5d7f4de059fb7823d4e1739d8e672d33df3617e8c3891e873173a9633452f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7b787820760cf6130cb62ddcfe5a8add866e7f3ae5ef58ef1855c276ec70224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7b787820760cf6130cb62ddcfe5a8add866e7f3ae5ef58ef1855c276ec70224->enter($__internal_a7b787820760cf6130cb62ddcfe5a8add866e7f3ae5ef58ef1855c276ec70224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_e16603e230da27692bbd1cd8324e60025bc31270e605b3c7ce249a2542e5378c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e16603e230da27692bbd1cd8324e60025bc31270e605b3c7ce249a2542e5378c->enter($__internal_e16603e230da27692bbd1cd8324e60025bc31270e605b3c7ce249a2542e5378c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7b787820760cf6130cb62ddcfe5a8add866e7f3ae5ef58ef1855c276ec70224->leave($__internal_a7b787820760cf6130cb62ddcfe5a8add866e7f3ae5ef58ef1855c276ec70224_prof);

        
        $__internal_e16603e230da27692bbd1cd8324e60025bc31270e605b3c7ce249a2542e5378c->leave($__internal_e16603e230da27692bbd1cd8324e60025bc31270e605b3c7ce249a2542e5378c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_13ac86a87da1f53d6cc399fd13616aa68050f06772140329ac5e82491a9826b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13ac86a87da1f53d6cc399fd13616aa68050f06772140329ac5e82491a9826b5->enter($__internal_13ac86a87da1f53d6cc399fd13616aa68050f06772140329ac5e82491a9826b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ebbb6186d9ba42de9d691a0e4e2493b2d261392c3a60a4fc76eb4bc0f8f2d00b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebbb6186d9ba42de9d691a0e4e2493b2d261392c3a60a4fc76eb4bc0f8f2d00b->enter($__internal_ebbb6186d9ba42de9d691a0e4e2493b2d261392c3a60a4fc76eb4bc0f8f2d00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ebbb6186d9ba42de9d691a0e4e2493b2d261392c3a60a4fc76eb4bc0f8f2d00b->leave($__internal_ebbb6186d9ba42de9d691a0e4e2493b2d261392c3a60a4fc76eb4bc0f8f2d00b_prof);

        
        $__internal_13ac86a87da1f53d6cc399fd13616aa68050f06772140329ac5e82491a9826b5->leave($__internal_13ac86a87da1f53d6cc399fd13616aa68050f06772140329ac5e82491a9826b5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a1a2673995094ea964d35ed414a1a0f86a0fd60f6ebb60e4de349b9025ad5a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a1a2673995094ea964d35ed414a1a0f86a0fd60f6ebb60e4de349b9025ad5a6->enter($__internal_7a1a2673995094ea964d35ed414a1a0f86a0fd60f6ebb60e4de349b9025ad5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2071ce6a7a0cf1bb5218a6438302144b27592054858d177f6866c97588b72ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2071ce6a7a0cf1bb5218a6438302144b27592054858d177f6866c97588b72ae->enter($__internal_b2071ce6a7a0cf1bb5218a6438302144b27592054858d177f6866c97588b72ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b2071ce6a7a0cf1bb5218a6438302144b27592054858d177f6866c97588b72ae->leave($__internal_b2071ce6a7a0cf1bb5218a6438302144b27592054858d177f6866c97588b72ae_prof);

        
        $__internal_7a1a2673995094ea964d35ed414a1a0f86a0fd60f6ebb60e4de349b9025ad5a6->leave($__internal_7a1a2673995094ea964d35ed414a1a0f86a0fd60f6ebb60e4de349b9025ad5a6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
