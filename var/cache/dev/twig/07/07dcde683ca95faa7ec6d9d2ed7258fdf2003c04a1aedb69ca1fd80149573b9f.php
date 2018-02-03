<?php

/* blog/list.html.twig */
class __TwigTemplate_110c9d9656dd6f0ca65494b82d84adce292e626c0f1b615c6b51c394e29de9c4 extends Twig_Template
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
        $__internal_bb318f70994daa861ef2ba264f4b6b2a00172f4f32729c9f3f3a84a41f885bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb318f70994daa861ef2ba264f4b6b2a00172f4f32729c9f3f3a84a41f885bee->enter($__internal_bb318f70994daa861ef2ba264f4b6b2a00172f4f32729c9f3f3a84a41f885bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $__internal_fba900fc67c9f0e1fad6c790c3a62158765dcda0e2d8f2d453027faa6e310984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba900fc67c9f0e1fad6c790c3a62158765dcda0e2d8f2d453027faa6e310984->enter($__internal_fba900fc67c9f0e1fad6c790c3a62158765dcda0e2d8f2d453027faa6e310984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb318f70994daa861ef2ba264f4b6b2a00172f4f32729c9f3f3a84a41f885bee->leave($__internal_bb318f70994daa861ef2ba264f4b6b2a00172f4f32729c9f3f3a84a41f885bee_prof);

        
        $__internal_fba900fc67c9f0e1fad6c790c3a62158765dcda0e2d8f2d453027faa6e310984->leave($__internal_fba900fc67c9f0e1fad6c790c3a62158765dcda0e2d8f2d453027faa6e310984_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_56e7defdfdc940f20df21babf041d3a1deadbe29eb7c0108747da8c5e3ddb255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e7defdfdc940f20df21babf041d3a1deadbe29eb7c0108747da8c5e3ddb255->enter($__internal_56e7defdfdc940f20df21babf041d3a1deadbe29eb7c0108747da8c5e3ddb255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2ed8687ce36d39648ea65e122797630e5d1193a007cff5b0e0aaeeed86b4ecbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed8687ce36d39648ea65e122797630e5d1193a007cff5b0e0aaeeed86b4ecbf->enter($__internal_2ed8687ce36d39648ea65e122797630e5d1193a007cff5b0e0aaeeed86b4ecbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_2ed8687ce36d39648ea65e122797630e5d1193a007cff5b0e0aaeeed86b4ecbf->leave($__internal_2ed8687ce36d39648ea65e122797630e5d1193a007cff5b0e0aaeeed86b4ecbf_prof);

        
        $__internal_56e7defdfdc940f20df21babf041d3a1deadbe29eb7c0108747da8c5e3ddb255->leave($__internal_56e7defdfdc940f20df21babf041d3a1deadbe29eb7c0108747da8c5e3ddb255_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbc4d83a5c8f94d08db129bb343c7e601cea2fb80edf04524fe02abdf7d7459c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc4d83a5c8f94d08db129bb343c7e601cea2fb80edf04524fe02abdf7d7459c->enter($__internal_bbc4d83a5c8f94d08db129bb343c7e601cea2fb80edf04524fe02abdf7d7459c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7ab210325a2680f8c9d50c9089bde0e10967ab06106b532fe80e5fb1138305b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ab210325a2680f8c9d50c9089bde0e10967ab06106b532fe80e5fb1138305b->enter($__internal_a7ab210325a2680f8c9d50c9089bde0e10967ab06106b532fe80e5fb1138305b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<div class=\"container-fluid\" id=\"blog-list\">

\t\t<div class=\"row\">\t

\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 11, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 12
            echo "
\t\t\t\t\t<div class=\"col-12 col-md-4 container-article\">
\t\t\t\t\t\t<div class=\"block-article\" style=\"background-image: url(";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("build/img/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "image", array()))), "html", null, true);
            echo ");\">
\t\t\t\t\t\t\t<div class=\"block-short-article\">
\t\t\t\t\t\t\t\t<h3>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "title", array()), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t<p>";
            // line 17
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "content", array()), 0, 100), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_single", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn\">Lire la suite</button></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t</div>
\t</div>\t

";
        
        $__internal_a7ab210325a2680f8c9d50c9089bde0e10967ab06106b532fe80e5fb1138305b->leave($__internal_a7ab210325a2680f8c9d50c9089bde0e10967ab06106b532fe80e5fb1138305b_prof);

        
        $__internal_bbc4d83a5c8f94d08db129bb343c7e601cea2fb80edf04524fe02abdf7d7459c->leave($__internal_bbc4d83a5c8f94d08db129bb343c7e601cea2fb80edf04524fe02abdf7d7459c_prof);

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
        return array (  108 => 24,  96 => 18,  92 => 17,  88 => 16,  83 => 14,  79 => 12,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Blog{% endblock %}

{% block body %}

\t<div class=\"container-fluid\" id=\"blog-list\">

\t\t<div class=\"row\">\t

\t\t\t{% for article in articles %}

\t\t\t\t\t<div class=\"col-12 col-md-4 container-article\">
\t\t\t\t\t\t<div class=\"block-article\" style=\"background-image: url({{ asset('build/img/'~article.image|raw) }});\">
\t\t\t\t\t\t\t<div class=\"block-short-article\">
\t\t\t\t\t\t\t\t<h3>{{ article.title }}</h3>
\t\t\t\t\t\t\t\t<p>{{ article.content|slice(0, 100) }}</p>
\t\t\t\t\t\t\t\t<a href=\"{{ path('article_single', {'id': article.id}) }}\"><button class=\"btn\">Lire la suite</button></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t{% endfor %}
\t\t</div>
\t</div>\t

{% endblock %}\t", "blog/list.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\blog\\list.html.twig");
    }
}
