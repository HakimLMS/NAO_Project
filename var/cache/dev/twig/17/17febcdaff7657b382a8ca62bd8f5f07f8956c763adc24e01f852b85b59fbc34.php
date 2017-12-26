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
        $__internal_3b2eb7d25d03f7580e0f5a91d1344fa959efe2141992d65bdad0334a6b81eb63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b2eb7d25d03f7580e0f5a91d1344fa959efe2141992d65bdad0334a6b81eb63->enter($__internal_3b2eb7d25d03f7580e0f5a91d1344fa959efe2141992d65bdad0334a6b81eb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_167f2bc3c6deca3da8f57941acd5ddf011f357845045d85f0d9259876045037f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167f2bc3c6deca3da8f57941acd5ddf011f357845045d85f0d9259876045037f->enter($__internal_167f2bc3c6deca3da8f57941acd5ddf011f357845045d85f0d9259876045037f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b2eb7d25d03f7580e0f5a91d1344fa959efe2141992d65bdad0334a6b81eb63->leave($__internal_3b2eb7d25d03f7580e0f5a91d1344fa959efe2141992d65bdad0334a6b81eb63_prof);

        
        $__internal_167f2bc3c6deca3da8f57941acd5ddf011f357845045d85f0d9259876045037f->leave($__internal_167f2bc3c6deca3da8f57941acd5ddf011f357845045d85f0d9259876045037f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_121520026551bbae3ed1a5ac0ff8fb03c066beb80d35e35f5f53d543fae35ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121520026551bbae3ed1a5ac0ff8fb03c066beb80d35e35f5f53d543fae35ac8->enter($__internal_121520026551bbae3ed1a5ac0ff8fb03c066beb80d35e35f5f53d543fae35ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d0c90fce592c5e3eb714f53a01e5a85594276a2885939baee1e611b8b9dad033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c90fce592c5e3eb714f53a01e5a85594276a2885939baee1e611b8b9dad033->enter($__internal_d0c90fce592c5e3eb714f53a01e5a85594276a2885939baee1e611b8b9dad033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d0c90fce592c5e3eb714f53a01e5a85594276a2885939baee1e611b8b9dad033->leave($__internal_d0c90fce592c5e3eb714f53a01e5a85594276a2885939baee1e611b8b9dad033_prof);

        
        $__internal_121520026551bbae3ed1a5ac0ff8fb03c066beb80d35e35f5f53d543fae35ac8->leave($__internal_121520026551bbae3ed1a5ac0ff8fb03c066beb80d35e35f5f53d543fae35ac8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_35796358f8b8e969d381876fe475140c11071a55cdc1e8908861fb02af568550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35796358f8b8e969d381876fe475140c11071a55cdc1e8908861fb02af568550->enter($__internal_35796358f8b8e969d381876fe475140c11071a55cdc1e8908861fb02af568550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06d2c61cd9afcd282aec18fa430e1ce9fa840bbd3319136e03c43a8f52ecdf73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d2c61cd9afcd282aec18fa430e1ce9fa840bbd3319136e03c43a8f52ecdf73->enter($__internal_06d2c61cd9afcd282aec18fa430e1ce9fa840bbd3319136e03c43a8f52ecdf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_06d2c61cd9afcd282aec18fa430e1ce9fa840bbd3319136e03c43a8f52ecdf73->leave($__internal_06d2c61cd9afcd282aec18fa430e1ce9fa840bbd3319136e03c43a8f52ecdf73_prof);

        
        $__internal_35796358f8b8e969d381876fe475140c11071a55cdc1e8908861fb02af568550->leave($__internal_35796358f8b8e969d381876fe475140c11071a55cdc1e8908861fb02af568550_prof);

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
