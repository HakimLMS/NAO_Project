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
        $__internal_e11bb871622c21c9ab8d1788bee60bc8c4ec2588a110f2183e2e87ab5c914437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e11bb871622c21c9ab8d1788bee60bc8c4ec2588a110f2183e2e87ab5c914437->enter($__internal_e11bb871622c21c9ab8d1788bee60bc8c4ec2588a110f2183e2e87ab5c914437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_e1c996f18f097b10c1bbf6f672e8f4466356ba602158600f32e9fc3181181fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c996f18f097b10c1bbf6f672e8f4466356ba602158600f32e9fc3181181fa7->enter($__internal_e1c996f18f097b10c1bbf6f672e8f4466356ba602158600f32e9fc3181181fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e11bb871622c21c9ab8d1788bee60bc8c4ec2588a110f2183e2e87ab5c914437->leave($__internal_e11bb871622c21c9ab8d1788bee60bc8c4ec2588a110f2183e2e87ab5c914437_prof);

        
        $__internal_e1c996f18f097b10c1bbf6f672e8f4466356ba602158600f32e9fc3181181fa7->leave($__internal_e1c996f18f097b10c1bbf6f672e8f4466356ba602158600f32e9fc3181181fa7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_22207afa87a5835865c91042bdb353eefbe4985db8e3a9ad324eaa90af23a53b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22207afa87a5835865c91042bdb353eefbe4985db8e3a9ad324eaa90af23a53b->enter($__internal_22207afa87a5835865c91042bdb353eefbe4985db8e3a9ad324eaa90af23a53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_247a7898f35d568693e440e044781827f2064fc5c46ccd9c761e7b4c06d3ec96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_247a7898f35d568693e440e044781827f2064fc5c46ccd9c761e7b4c06d3ec96->enter($__internal_247a7898f35d568693e440e044781827f2064fc5c46ccd9c761e7b4c06d3ec96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_247a7898f35d568693e440e044781827f2064fc5c46ccd9c761e7b4c06d3ec96->leave($__internal_247a7898f35d568693e440e044781827f2064fc5c46ccd9c761e7b4c06d3ec96_prof);

        
        $__internal_22207afa87a5835865c91042bdb353eefbe4985db8e3a9ad324eaa90af23a53b->leave($__internal_22207afa87a5835865c91042bdb353eefbe4985db8e3a9ad324eaa90af23a53b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab765ca4e6f4cb2ebe13f36feb95403f47adb1688394d9391b586d2b798c6fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab765ca4e6f4cb2ebe13f36feb95403f47adb1688394d9391b586d2b798c6fc9->enter($__internal_ab765ca4e6f4cb2ebe13f36feb95403f47adb1688394d9391b586d2b798c6fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e16bafcc16737249ee7d9a23393e6f7bd45751e7acc24a474ddbe7d2b5dee1b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e16bafcc16737249ee7d9a23393e6f7bd45751e7acc24a474ddbe7d2b5dee1b9->enter($__internal_e16bafcc16737249ee7d9a23393e6f7bd45751e7acc24a474ddbe7d2b5dee1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e16bafcc16737249ee7d9a23393e6f7bd45751e7acc24a474ddbe7d2b5dee1b9->leave($__internal_e16bafcc16737249ee7d9a23393e6f7bd45751e7acc24a474ddbe7d2b5dee1b9_prof);

        
        $__internal_ab765ca4e6f4cb2ebe13f36feb95403f47adb1688394d9391b586d2b798c6fc9->leave($__internal_ab765ca4e6f4cb2ebe13f36feb95403f47adb1688394d9391b586d2b798c6fc9_prof);

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
