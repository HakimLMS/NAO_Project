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
        $__internal_f094e31317c5719e9b76461521ad885f394e251a7f23f79d4439c59994bf8286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f094e31317c5719e9b76461521ad885f394e251a7f23f79d4439c59994bf8286->enter($__internal_f094e31317c5719e9b76461521ad885f394e251a7f23f79d4439c59994bf8286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_db0f96cbbeb6ed7de258096edaa894399e75b3f2a3ab6721588d6a47a45b5d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db0f96cbbeb6ed7de258096edaa894399e75b3f2a3ab6721588d6a47a45b5d46->enter($__internal_db0f96cbbeb6ed7de258096edaa894399e75b3f2a3ab6721588d6a47a45b5d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f094e31317c5719e9b76461521ad885f394e251a7f23f79d4439c59994bf8286->leave($__internal_f094e31317c5719e9b76461521ad885f394e251a7f23f79d4439c59994bf8286_prof);

        
        $__internal_db0f96cbbeb6ed7de258096edaa894399e75b3f2a3ab6721588d6a47a45b5d46->leave($__internal_db0f96cbbeb6ed7de258096edaa894399e75b3f2a3ab6721588d6a47a45b5d46_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_97b501eb5cadaba71b8947263bb8b72c1bc004fe9126635c53ffbefede1da97c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b501eb5cadaba71b8947263bb8b72c1bc004fe9126635c53ffbefede1da97c->enter($__internal_97b501eb5cadaba71b8947263bb8b72c1bc004fe9126635c53ffbefede1da97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0cad076064239836e279c56fc520bd527ee70a5da73badcb3d45aa9fef661287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cad076064239836e279c56fc520bd527ee70a5da73badcb3d45aa9fef661287->enter($__internal_0cad076064239836e279c56fc520bd527ee70a5da73badcb3d45aa9fef661287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0cad076064239836e279c56fc520bd527ee70a5da73badcb3d45aa9fef661287->leave($__internal_0cad076064239836e279c56fc520bd527ee70a5da73badcb3d45aa9fef661287_prof);

        
        $__internal_97b501eb5cadaba71b8947263bb8b72c1bc004fe9126635c53ffbefede1da97c->leave($__internal_97b501eb5cadaba71b8947263bb8b72c1bc004fe9126635c53ffbefede1da97c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_24e8d1ffb9f2a0188be699deb3c59cfcc92f6d294e2db041cae16f7d49a3fef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24e8d1ffb9f2a0188be699deb3c59cfcc92f6d294e2db041cae16f7d49a3fef4->enter($__internal_24e8d1ffb9f2a0188be699deb3c59cfcc92f6d294e2db041cae16f7d49a3fef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe6802375af892dc798677ff48b57ede27b3467a4da0a33d3bd5bd27c3e86198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6802375af892dc798677ff48b57ede27b3467a4da0a33d3bd5bd27c3e86198->enter($__internal_fe6802375af892dc798677ff48b57ede27b3467a4da0a33d3bd5bd27c3e86198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fe6802375af892dc798677ff48b57ede27b3467a4da0a33d3bd5bd27c3e86198->leave($__internal_fe6802375af892dc798677ff48b57ede27b3467a4da0a33d3bd5bd27c3e86198_prof);

        
        $__internal_24e8d1ffb9f2a0188be699deb3c59cfcc92f6d294e2db041cae16f7d49a3fef4->leave($__internal_24e8d1ffb9f2a0188be699deb3c59cfcc92f6d294e2db041cae16f7d49a3fef4_prof);

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
