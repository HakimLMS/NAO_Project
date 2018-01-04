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
        $__internal_366faa35a7d33b88f6b75af2fd47c9df8571be61b1ee52c617ac22334194dd16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_366faa35a7d33b88f6b75af2fd47c9df8571be61b1ee52c617ac22334194dd16->enter($__internal_366faa35a7d33b88f6b75af2fd47c9df8571be61b1ee52c617ac22334194dd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_82f595519440943837c32120ea482dce417766615b994e95639fe7156d357123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f595519440943837c32120ea482dce417766615b994e95639fe7156d357123->enter($__internal_82f595519440943837c32120ea482dce417766615b994e95639fe7156d357123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_366faa35a7d33b88f6b75af2fd47c9df8571be61b1ee52c617ac22334194dd16->leave($__internal_366faa35a7d33b88f6b75af2fd47c9df8571be61b1ee52c617ac22334194dd16_prof);

        
        $__internal_82f595519440943837c32120ea482dce417766615b994e95639fe7156d357123->leave($__internal_82f595519440943837c32120ea482dce417766615b994e95639fe7156d357123_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c87a9d5e1a7e159fa596586b8d7776eeb3cf938ef2da5f2c9a51208e84466017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c87a9d5e1a7e159fa596586b8d7776eeb3cf938ef2da5f2c9a51208e84466017->enter($__internal_c87a9d5e1a7e159fa596586b8d7776eeb3cf938ef2da5f2c9a51208e84466017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bcb254ee05f0478aa05b3db7314cc21eae31dd16a2f21fa7160dba1bbb8db287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb254ee05f0478aa05b3db7314cc21eae31dd16a2f21fa7160dba1bbb8db287->enter($__internal_bcb254ee05f0478aa05b3db7314cc21eae31dd16a2f21fa7160dba1bbb8db287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bcb254ee05f0478aa05b3db7314cc21eae31dd16a2f21fa7160dba1bbb8db287->leave($__internal_bcb254ee05f0478aa05b3db7314cc21eae31dd16a2f21fa7160dba1bbb8db287_prof);

        
        $__internal_c87a9d5e1a7e159fa596586b8d7776eeb3cf938ef2da5f2c9a51208e84466017->leave($__internal_c87a9d5e1a7e159fa596586b8d7776eeb3cf938ef2da5f2c9a51208e84466017_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b40d7278caf4c47e159a3ea1ddc96505c70bbde50f0f2fb0f68e73f99ee9d2d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b40d7278caf4c47e159a3ea1ddc96505c70bbde50f0f2fb0f68e73f99ee9d2d4->enter($__internal_b40d7278caf4c47e159a3ea1ddc96505c70bbde50f0f2fb0f68e73f99ee9d2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_16ea6658f43e766e1dcc5fbe75844323d1d8b27d1c088a9ff25935685b747798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ea6658f43e766e1dcc5fbe75844323d1d8b27d1c088a9ff25935685b747798->enter($__internal_16ea6658f43e766e1dcc5fbe75844323d1d8b27d1c088a9ff25935685b747798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_16ea6658f43e766e1dcc5fbe75844323d1d8b27d1c088a9ff25935685b747798->leave($__internal_16ea6658f43e766e1dcc5fbe75844323d1d8b27d1c088a9ff25935685b747798_prof);

        
        $__internal_b40d7278caf4c47e159a3ea1ddc96505c70bbde50f0f2fb0f68e73f99ee9d2d4->leave($__internal_b40d7278caf4c47e159a3ea1ddc96505c70bbde50f0f2fb0f68e73f99ee9d2d4_prof);

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
