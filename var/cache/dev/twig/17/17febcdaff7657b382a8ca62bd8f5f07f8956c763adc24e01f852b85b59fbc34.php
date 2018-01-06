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
        $__internal_d4e6fd0f1e57b2de9b4d26e5fcb94caf42ed8d146f14e6a1927eeea4670f4b24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e6fd0f1e57b2de9b4d26e5fcb94caf42ed8d146f14e6a1927eeea4670f4b24->enter($__internal_d4e6fd0f1e57b2de9b4d26e5fcb94caf42ed8d146f14e6a1927eeea4670f4b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_3632450ab41ac8c12d1d00256e653fb141dea9d37b6c1d90392aa3b18d09a8c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3632450ab41ac8c12d1d00256e653fb141dea9d37b6c1d90392aa3b18d09a8c0->enter($__internal_3632450ab41ac8c12d1d00256e653fb141dea9d37b6c1d90392aa3b18d09a8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4e6fd0f1e57b2de9b4d26e5fcb94caf42ed8d146f14e6a1927eeea4670f4b24->leave($__internal_d4e6fd0f1e57b2de9b4d26e5fcb94caf42ed8d146f14e6a1927eeea4670f4b24_prof);

        
        $__internal_3632450ab41ac8c12d1d00256e653fb141dea9d37b6c1d90392aa3b18d09a8c0->leave($__internal_3632450ab41ac8c12d1d00256e653fb141dea9d37b6c1d90392aa3b18d09a8c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e08ac2b7ddc0f78353d07f53a1cd743a1bc9762bf6500c6584e2eb119fec722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e08ac2b7ddc0f78353d07f53a1cd743a1bc9762bf6500c6584e2eb119fec722->enter($__internal_4e08ac2b7ddc0f78353d07f53a1cd743a1bc9762bf6500c6584e2eb119fec722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_948a2e012732fbad0d328ff60e2cc43530ebf5bb31894b5da9a67695b90d8fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948a2e012732fbad0d328ff60e2cc43530ebf5bb31894b5da9a67695b90d8fa1->enter($__internal_948a2e012732fbad0d328ff60e2cc43530ebf5bb31894b5da9a67695b90d8fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_948a2e012732fbad0d328ff60e2cc43530ebf5bb31894b5da9a67695b90d8fa1->leave($__internal_948a2e012732fbad0d328ff60e2cc43530ebf5bb31894b5da9a67695b90d8fa1_prof);

        
        $__internal_4e08ac2b7ddc0f78353d07f53a1cd743a1bc9762bf6500c6584e2eb119fec722->leave($__internal_4e08ac2b7ddc0f78353d07f53a1cd743a1bc9762bf6500c6584e2eb119fec722_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0201760da87144dda8c55b8a121bf7cb5813919a08b79976315242cfc19ab2a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0201760da87144dda8c55b8a121bf7cb5813919a08b79976315242cfc19ab2a1->enter($__internal_0201760da87144dda8c55b8a121bf7cb5813919a08b79976315242cfc19ab2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f92429044806641c825df7d27019c0d541a0c63912d934a5454304b832f02c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f92429044806641c825df7d27019c0d541a0c63912d934a5454304b832f02c0->enter($__internal_2f92429044806641c825df7d27019c0d541a0c63912d934a5454304b832f02c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2f92429044806641c825df7d27019c0d541a0c63912d934a5454304b832f02c0->leave($__internal_2f92429044806641c825df7d27019c0d541a0c63912d934a5454304b832f02c0_prof);

        
        $__internal_0201760da87144dda8c55b8a121bf7cb5813919a08b79976315242cfc19ab2a1->leave($__internal_0201760da87144dda8c55b8a121bf7cb5813919a08b79976315242cfc19ab2a1_prof);

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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
