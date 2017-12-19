<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_2ff7df758c387967a9e2c91ab63f86e8701320996d0af33cd0ef9328e90964ab extends Twig_Template
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
        $__internal_6053421f7c11e5b214bf2f7bd70dd9eb6a05e543ce75d33672e4d1877cc49bea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6053421f7c11e5b214bf2f7bd70dd9eb6a05e543ce75d33672e4d1877cc49bea->enter($__internal_6053421f7c11e5b214bf2f7bd70dd9eb6a05e543ce75d33672e4d1877cc49bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_3ce07030634b4fc02173c1405fdfdb5fb762accf008c19a9ca432ddcb06ce37b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce07030634b4fc02173c1405fdfdb5fb762accf008c19a9ca432ddcb06ce37b->enter($__internal_3ce07030634b4fc02173c1405fdfdb5fb762accf008c19a9ca432ddcb06ce37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6053421f7c11e5b214bf2f7bd70dd9eb6a05e543ce75d33672e4d1877cc49bea->leave($__internal_6053421f7c11e5b214bf2f7bd70dd9eb6a05e543ce75d33672e4d1877cc49bea_prof);

        
        $__internal_3ce07030634b4fc02173c1405fdfdb5fb762accf008c19a9ca432ddcb06ce37b->leave($__internal_3ce07030634b4fc02173c1405fdfdb5fb762accf008c19a9ca432ddcb06ce37b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a5536547d137c1a09f5c361706a47edca46b99c7e0b9367c71ee2970fd1a5f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a5536547d137c1a09f5c361706a47edca46b99c7e0b9367c71ee2970fd1a5f1->enter($__internal_4a5536547d137c1a09f5c361706a47edca46b99c7e0b9367c71ee2970fd1a5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a622821fb9f010226afc30263c85e43baa9278817eb42136c352db825003ee99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a622821fb9f010226afc30263c85e43baa9278817eb42136c352db825003ee99->enter($__internal_a622821fb9f010226afc30263c85e43baa9278817eb42136c352db825003ee99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a622821fb9f010226afc30263c85e43baa9278817eb42136c352db825003ee99->leave($__internal_a622821fb9f010226afc30263c85e43baa9278817eb42136c352db825003ee99_prof);

        
        $__internal_4a5536547d137c1a09f5c361706a47edca46b99c7e0b9367c71ee2970fd1a5f1->leave($__internal_4a5536547d137c1a09f5c361706a47edca46b99c7e0b9367c71ee2970fd1a5f1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_85d43d6fcb92ca1a5366e40bb29b379ef94ab30d8c1fb8e9895251b6f521763a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85d43d6fcb92ca1a5366e40bb29b379ef94ab30d8c1fb8e9895251b6f521763a->enter($__internal_85d43d6fcb92ca1a5366e40bb29b379ef94ab30d8c1fb8e9895251b6f521763a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec23ed806f1e6cad7e08670bde922be36e51ed0644a941b9768edbce0f8e24e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec23ed806f1e6cad7e08670bde922be36e51ed0644a941b9768edbce0f8e24e4->enter($__internal_ec23ed806f1e6cad7e08670bde922be36e51ed0644a941b9768edbce0f8e24e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ec23ed806f1e6cad7e08670bde922be36e51ed0644a941b9768edbce0f8e24e4->leave($__internal_ec23ed806f1e6cad7e08670bde922be36e51ed0644a941b9768edbce0f8e24e4_prof);

        
        $__internal_85d43d6fcb92ca1a5366e40bb29b379ef94ab30d8c1fb8e9895251b6f521763a->leave($__internal_85d43d6fcb92ca1a5366e40bb29b379ef94ab30d8c1fb8e9895251b6f521763a_prof);

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
