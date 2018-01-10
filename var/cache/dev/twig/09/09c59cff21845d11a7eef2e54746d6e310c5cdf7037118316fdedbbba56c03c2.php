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
        $__internal_62a788393ee02dd788bbdd7a398c6bd0de20ecfe6eb691ea46f2c7600e7a0ea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62a788393ee02dd788bbdd7a398c6bd0de20ecfe6eb691ea46f2c7600e7a0ea8->enter($__internal_62a788393ee02dd788bbdd7a398c6bd0de20ecfe6eb691ea46f2c7600e7a0ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_92e210160d5c29e1de57798e8cad18c6d39b1280971d2df8f03d2f34192bbfa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e210160d5c29e1de57798e8cad18c6d39b1280971d2df8f03d2f34192bbfa5->enter($__internal_92e210160d5c29e1de57798e8cad18c6d39b1280971d2df8f03d2f34192bbfa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62a788393ee02dd788bbdd7a398c6bd0de20ecfe6eb691ea46f2c7600e7a0ea8->leave($__internal_62a788393ee02dd788bbdd7a398c6bd0de20ecfe6eb691ea46f2c7600e7a0ea8_prof);

        
        $__internal_92e210160d5c29e1de57798e8cad18c6d39b1280971d2df8f03d2f34192bbfa5->leave($__internal_92e210160d5c29e1de57798e8cad18c6d39b1280971d2df8f03d2f34192bbfa5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea45aa8818d7b3de149f98ca8f1454e9c72e7cf5a71416dd275123a90baf1725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea45aa8818d7b3de149f98ca8f1454e9c72e7cf5a71416dd275123a90baf1725->enter($__internal_ea45aa8818d7b3de149f98ca8f1454e9c72e7cf5a71416dd275123a90baf1725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_530e5c1b40aa29ae251984162d48c6eff7ed7ba31c49fdcf586c194bf380e513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530e5c1b40aa29ae251984162d48c6eff7ed7ba31c49fdcf586c194bf380e513->enter($__internal_530e5c1b40aa29ae251984162d48c6eff7ed7ba31c49fdcf586c194bf380e513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_530e5c1b40aa29ae251984162d48c6eff7ed7ba31c49fdcf586c194bf380e513->leave($__internal_530e5c1b40aa29ae251984162d48c6eff7ed7ba31c49fdcf586c194bf380e513_prof);

        
        $__internal_ea45aa8818d7b3de149f98ca8f1454e9c72e7cf5a71416dd275123a90baf1725->leave($__internal_ea45aa8818d7b3de149f98ca8f1454e9c72e7cf5a71416dd275123a90baf1725_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_314f47fd6f579c8b7539490494593df085986a7408bdf9c3b8b694615a9249b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314f47fd6f579c8b7539490494593df085986a7408bdf9c3b8b694615a9249b5->enter($__internal_314f47fd6f579c8b7539490494593df085986a7408bdf9c3b8b694615a9249b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_608f770a03274d298d69aff8be7c3bd7b1f44ef54aaa22ac4af3e82cdcdc13ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608f770a03274d298d69aff8be7c3bd7b1f44ef54aaa22ac4af3e82cdcdc13ab->enter($__internal_608f770a03274d298d69aff8be7c3bd7b1f44ef54aaa22ac4af3e82cdcdc13ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_608f770a03274d298d69aff8be7c3bd7b1f44ef54aaa22ac4af3e82cdcdc13ab->leave($__internal_608f770a03274d298d69aff8be7c3bd7b1f44ef54aaa22ac4af3e82cdcdc13ab_prof);

        
        $__internal_314f47fd6f579c8b7539490494593df085986a7408bdf9c3b8b694615a9249b5->leave($__internal_314f47fd6f579c8b7539490494593df085986a7408bdf9c3b8b694615a9249b5_prof);

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
