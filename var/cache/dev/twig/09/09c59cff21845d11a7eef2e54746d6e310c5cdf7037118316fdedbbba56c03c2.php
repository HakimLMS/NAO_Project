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
        $__internal_57745cd79c4937efd3ab2255a4ec0081a3343152829a0716d434956030f69d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57745cd79c4937efd3ab2255a4ec0081a3343152829a0716d434956030f69d32->enter($__internal_57745cd79c4937efd3ab2255a4ec0081a3343152829a0716d434956030f69d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_a450683fa6abe55c662713e75abc6ef3f8638f37efe80fe4dc6b19ef5b1d391f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a450683fa6abe55c662713e75abc6ef3f8638f37efe80fe4dc6b19ef5b1d391f->enter($__internal_a450683fa6abe55c662713e75abc6ef3f8638f37efe80fe4dc6b19ef5b1d391f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57745cd79c4937efd3ab2255a4ec0081a3343152829a0716d434956030f69d32->leave($__internal_57745cd79c4937efd3ab2255a4ec0081a3343152829a0716d434956030f69d32_prof);

        
        $__internal_a450683fa6abe55c662713e75abc6ef3f8638f37efe80fe4dc6b19ef5b1d391f->leave($__internal_a450683fa6abe55c662713e75abc6ef3f8638f37efe80fe4dc6b19ef5b1d391f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7acedc1b0810da2e94e10b47f24c4b6576eab9ce62d1e29edb71a36635b6fd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7acedc1b0810da2e94e10b47f24c4b6576eab9ce62d1e29edb71a36635b6fd5->enter($__internal_f7acedc1b0810da2e94e10b47f24c4b6576eab9ce62d1e29edb71a36635b6fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e3b8bea2e9f78344c59681237323d25c5708db4fa36f3b5071a802849e6e8243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b8bea2e9f78344c59681237323d25c5708db4fa36f3b5071a802849e6e8243->enter($__internal_e3b8bea2e9f78344c59681237323d25c5708db4fa36f3b5071a802849e6e8243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e3b8bea2e9f78344c59681237323d25c5708db4fa36f3b5071a802849e6e8243->leave($__internal_e3b8bea2e9f78344c59681237323d25c5708db4fa36f3b5071a802849e6e8243_prof);

        
        $__internal_f7acedc1b0810da2e94e10b47f24c4b6576eab9ce62d1e29edb71a36635b6fd5->leave($__internal_f7acedc1b0810da2e94e10b47f24c4b6576eab9ce62d1e29edb71a36635b6fd5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c87b8db8d7d5e6e886e1c61feafd351c811b2ea51bc1a058f913d5357705e7ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c87b8db8d7d5e6e886e1c61feafd351c811b2ea51bc1a058f913d5357705e7ac->enter($__internal_c87b8db8d7d5e6e886e1c61feafd351c811b2ea51bc1a058f913d5357705e7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_17107dcb8cf4fc6a1c2d87c841a5f46c5ceb9bc9fb8a3c7b393c281cdedf4e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17107dcb8cf4fc6a1c2d87c841a5f46c5ceb9bc9fb8a3c7b393c281cdedf4e77->enter($__internal_17107dcb8cf4fc6a1c2d87c841a5f46c5ceb9bc9fb8a3c7b393c281cdedf4e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_17107dcb8cf4fc6a1c2d87c841a5f46c5ceb9bc9fb8a3c7b393c281cdedf4e77->leave($__internal_17107dcb8cf4fc6a1c2d87c841a5f46c5ceb9bc9fb8a3c7b393c281cdedf4e77_prof);

        
        $__internal_c87b8db8d7d5e6e886e1c61feafd351c811b2ea51bc1a058f913d5357705e7ac->leave($__internal_c87b8db8d7d5e6e886e1c61feafd351c811b2ea51bc1a058f913d5357705e7ac_prof);

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
