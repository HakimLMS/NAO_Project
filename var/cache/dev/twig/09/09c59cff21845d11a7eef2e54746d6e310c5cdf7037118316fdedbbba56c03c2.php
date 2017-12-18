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
        $__internal_d5b045466f8cdbd9f579ab779713fdf887992d0f715efae7a59cc6170ef95044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b045466f8cdbd9f579ab779713fdf887992d0f715efae7a59cc6170ef95044->enter($__internal_d5b045466f8cdbd9f579ab779713fdf887992d0f715efae7a59cc6170ef95044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_3145c6eff0618bcc0874c3451e1151cfb1aa6efa2a2695012423635fb590322a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3145c6eff0618bcc0874c3451e1151cfb1aa6efa2a2695012423635fb590322a->enter($__internal_3145c6eff0618bcc0874c3451e1151cfb1aa6efa2a2695012423635fb590322a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5b045466f8cdbd9f579ab779713fdf887992d0f715efae7a59cc6170ef95044->leave($__internal_d5b045466f8cdbd9f579ab779713fdf887992d0f715efae7a59cc6170ef95044_prof);

        
        $__internal_3145c6eff0618bcc0874c3451e1151cfb1aa6efa2a2695012423635fb590322a->leave($__internal_3145c6eff0618bcc0874c3451e1151cfb1aa6efa2a2695012423635fb590322a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_49064891c5581217d3a152009942392ca3d17997e1047ac8efe686e150037519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49064891c5581217d3a152009942392ca3d17997e1047ac8efe686e150037519->enter($__internal_49064891c5581217d3a152009942392ca3d17997e1047ac8efe686e150037519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f2136e5f4d81a95c0c8748186cb0760c925dd63b7990df41f7f72a7eab2a1752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2136e5f4d81a95c0c8748186cb0760c925dd63b7990df41f7f72a7eab2a1752->enter($__internal_f2136e5f4d81a95c0c8748186cb0760c925dd63b7990df41f7f72a7eab2a1752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f2136e5f4d81a95c0c8748186cb0760c925dd63b7990df41f7f72a7eab2a1752->leave($__internal_f2136e5f4d81a95c0c8748186cb0760c925dd63b7990df41f7f72a7eab2a1752_prof);

        
        $__internal_49064891c5581217d3a152009942392ca3d17997e1047ac8efe686e150037519->leave($__internal_49064891c5581217d3a152009942392ca3d17997e1047ac8efe686e150037519_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3a448f088d815c6d6709a31d52456b16c7e21e76ed196bbf9dbb717efc86470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3a448f088d815c6d6709a31d52456b16c7e21e76ed196bbf9dbb717efc86470->enter($__internal_c3a448f088d815c6d6709a31d52456b16c7e21e76ed196bbf9dbb717efc86470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91292044d9ce8ebef50a369160892f777059ad540168a56f7f4991959014b9c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91292044d9ce8ebef50a369160892f777059ad540168a56f7f4991959014b9c0->enter($__internal_91292044d9ce8ebef50a369160892f777059ad540168a56f7f4991959014b9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_91292044d9ce8ebef50a369160892f777059ad540168a56f7f4991959014b9c0->leave($__internal_91292044d9ce8ebef50a369160892f777059ad540168a56f7f4991959014b9c0_prof);

        
        $__internal_c3a448f088d815c6d6709a31d52456b16c7e21e76ed196bbf9dbb717efc86470->leave($__internal_c3a448f088d815c6d6709a31d52456b16c7e21e76ed196bbf9dbb717efc86470_prof);

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
