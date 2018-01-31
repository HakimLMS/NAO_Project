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
        $__internal_8f13e1d65bef4d1fd41a56ca8d99d28cddd2e3b0eb751a07d2739d796950722d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f13e1d65bef4d1fd41a56ca8d99d28cddd2e3b0eb751a07d2739d796950722d->enter($__internal_8f13e1d65bef4d1fd41a56ca8d99d28cddd2e3b0eb751a07d2739d796950722d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_a565be527b103517dd644f1446c67a52b9f1856657a0f120b505ff8312f4a933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a565be527b103517dd644f1446c67a52b9f1856657a0f120b505ff8312f4a933->enter($__internal_a565be527b103517dd644f1446c67a52b9f1856657a0f120b505ff8312f4a933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f13e1d65bef4d1fd41a56ca8d99d28cddd2e3b0eb751a07d2739d796950722d->leave($__internal_8f13e1d65bef4d1fd41a56ca8d99d28cddd2e3b0eb751a07d2739d796950722d_prof);

        
        $__internal_a565be527b103517dd644f1446c67a52b9f1856657a0f120b505ff8312f4a933->leave($__internal_a565be527b103517dd644f1446c67a52b9f1856657a0f120b505ff8312f4a933_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05285ead92d5fe61e2d1f824c28f6b3e3a4c99a353286449760a2ae9bad5412f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05285ead92d5fe61e2d1f824c28f6b3e3a4c99a353286449760a2ae9bad5412f->enter($__internal_05285ead92d5fe61e2d1f824c28f6b3e3a4c99a353286449760a2ae9bad5412f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e5569cf0ebdd5d244b520138242a42dc6d89b1e61295a5dbe6d87b65cca3ffa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5569cf0ebdd5d244b520138242a42dc6d89b1e61295a5dbe6d87b65cca3ffa7->enter($__internal_e5569cf0ebdd5d244b520138242a42dc6d89b1e61295a5dbe6d87b65cca3ffa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e5569cf0ebdd5d244b520138242a42dc6d89b1e61295a5dbe6d87b65cca3ffa7->leave($__internal_e5569cf0ebdd5d244b520138242a42dc6d89b1e61295a5dbe6d87b65cca3ffa7_prof);

        
        $__internal_05285ead92d5fe61e2d1f824c28f6b3e3a4c99a353286449760a2ae9bad5412f->leave($__internal_05285ead92d5fe61e2d1f824c28f6b3e3a4c99a353286449760a2ae9bad5412f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0976790610757b990f409c6f5ce300e477b7989b2316b2aac882eb3b3d280a19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0976790610757b990f409c6f5ce300e477b7989b2316b2aac882eb3b3d280a19->enter($__internal_0976790610757b990f409c6f5ce300e477b7989b2316b2aac882eb3b3d280a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d3c524b11d3baec65fcb7101f28e42c2970968959a42a51cc5fa910d21f554a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3c524b11d3baec65fcb7101f28e42c2970968959a42a51cc5fa910d21f554a->enter($__internal_2d3c524b11d3baec65fcb7101f28e42c2970968959a42a51cc5fa910d21f554a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2d3c524b11d3baec65fcb7101f28e42c2970968959a42a51cc5fa910d21f554a->leave($__internal_2d3c524b11d3baec65fcb7101f28e42c2970968959a42a51cc5fa910d21f554a_prof);

        
        $__internal_0976790610757b990f409c6f5ce300e477b7989b2316b2aac882eb3b3d280a19->leave($__internal_0976790610757b990f409c6f5ce300e477b7989b2316b2aac882eb3b3d280a19_prof);

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
