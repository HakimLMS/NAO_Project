<?php

/* blog/list.html.twig */
class __TwigTemplate_23ea548fb64ecb8a3896d6bfabc4cb769f6184d8ee9113dc95d8051aa342d823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba5f1b447dce170c97c489a4637a6dbf7c535eb854926d7a5b238ee7761bc91d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba5f1b447dce170c97c489a4637a6dbf7c535eb854926d7a5b238ee7761bc91d->enter($__internal_ba5f1b447dce170c97c489a4637a6dbf7c535eb854926d7a5b238ee7761bc91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $__internal_7c43d95873696d548ceb5d307f9783648fe0367dd997e81ad3491f9ae1125198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c43d95873696d548ceb5d307f9783648fe0367dd997e81ad3491f9ae1125198->enter($__internal_7c43d95873696d548ceb5d307f9783648fe0367dd997e81ad3491f9ae1125198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba5f1b447dce170c97c489a4637a6dbf7c535eb854926d7a5b238ee7761bc91d->leave($__internal_ba5f1b447dce170c97c489a4637a6dbf7c535eb854926d7a5b238ee7761bc91d_prof);

        
        $__internal_7c43d95873696d548ceb5d307f9783648fe0367dd997e81ad3491f9ae1125198->leave($__internal_7c43d95873696d548ceb5d307f9783648fe0367dd997e81ad3491f9ae1125198_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4246b5cae39e048df875b72d5cc0317dbcf428c0231b8124c4894fda71ef78d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4246b5cae39e048df875b72d5cc0317dbcf428c0231b8124c4894fda71ef78d->enter($__internal_c4246b5cae39e048df875b72d5cc0317dbcf428c0231b8124c4894fda71ef78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cc9e3b3726594815e8775dfc2081f6ff775a0700bee181170bfcd650812b374f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9e3b3726594815e8775dfc2081f6ff775a0700bee181170bfcd650812b374f->enter($__internal_cc9e3b3726594815e8775dfc2081f6ff775a0700bee181170bfcd650812b374f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog - Liste";
        
        $__internal_cc9e3b3726594815e8775dfc2081f6ff775a0700bee181170bfcd650812b374f->leave($__internal_cc9e3b3726594815e8775dfc2081f6ff775a0700bee181170bfcd650812b374f_prof);

        
        $__internal_c4246b5cae39e048df875b72d5cc0317dbcf428c0231b8124c4894fda71ef78d->leave($__internal_c4246b5cae39e048df875b72d5cc0317dbcf428c0231b8124c4894fda71ef78d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9f7b98abc23c28ee7bb88b9a3d321f2a00d83ae05d0379246141a11f315e0c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f7b98abc23c28ee7bb88b9a3d321f2a00d83ae05d0379246141a11f315e0c7->enter($__internal_c9f7b98abc23c28ee7bb88b9a3d321f2a00d83ae05d0379246141a11f315e0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_021abc22c4eddf22517e3ba56a4a59edcdea07795e47c406c26d29e677cb881e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021abc22c4eddf22517e3ba56a4a59edcdea07795e47c406c26d29e677cb881e->enter($__internal_021abc22c4eddf22517e3ba56a4a59edcdea07795e47c406c26d29e677cb881e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<h2>Blog</h2>

\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 9, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 10
            echo "
\t\t<div style=\"width: 200px; height: 200px; background: #f0f0f0; margin: 20px;\">
\t\t\t<h3>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "title", array()), "html", null, true);
            echo "</h3>
\t\t\t<p>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "content", array()), "html", null, true);
            echo "</p>
\t\t\t<a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_single", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\"><button>Lire la suite</button></a>
\t\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t

";
        
        $__internal_021abc22c4eddf22517e3ba56a4a59edcdea07795e47c406c26d29e677cb881e->leave($__internal_021abc22c4eddf22517e3ba56a4a59edcdea07795e47c406c26d29e677cb881e_prof);

        
        $__internal_c9f7b98abc23c28ee7bb88b9a3d321f2a00d83ae05d0379246141a11f315e0c7->leave($__internal_c9f7b98abc23c28ee7bb88b9a3d321f2a00d83ae05d0379246141a11f315e0c7_prof);

    }

    public function getTemplateName()
    {
        return "blog/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  89 => 14,  85 => 13,  81 => 12,  77 => 10,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Blog - Liste{% endblock %}

{% block body %}

\t<h2>Blog</h2>

\t{% for article in articles %}

\t\t<div style=\"width: 200px; height: 200px; background: #f0f0f0; margin: 20px;\">
\t\t\t<h3>{{ article.title }}</h3>
\t\t\t<p>{{ article.content }}</p>
\t\t\t<a href=\"{{ path('article_single', {'id': article.id}) }}\"><button>Lire la suite</button></a>
\t\t</div>

\t{% endfor %}\t

{% endblock %}\t", "blog/list.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\blog\\list.html.twig");
    }
}
