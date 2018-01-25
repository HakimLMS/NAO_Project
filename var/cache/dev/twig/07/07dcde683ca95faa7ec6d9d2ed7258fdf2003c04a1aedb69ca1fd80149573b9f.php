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
        $__internal_70cfa9eccff5239882be9a634d46d93e88b92d2792cf30cbac9835852a7d808a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70cfa9eccff5239882be9a634d46d93e88b92d2792cf30cbac9835852a7d808a->enter($__internal_70cfa9eccff5239882be9a634d46d93e88b92d2792cf30cbac9835852a7d808a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $__internal_57b00758c8173b9ad2dba908e223ac523479dd5024399d6b3e40b9afbbfdb94a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b00758c8173b9ad2dba908e223ac523479dd5024399d6b3e40b9afbbfdb94a->enter($__internal_57b00758c8173b9ad2dba908e223ac523479dd5024399d6b3e40b9afbbfdb94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70cfa9eccff5239882be9a634d46d93e88b92d2792cf30cbac9835852a7d808a->leave($__internal_70cfa9eccff5239882be9a634d46d93e88b92d2792cf30cbac9835852a7d808a_prof);

        
        $__internal_57b00758c8173b9ad2dba908e223ac523479dd5024399d6b3e40b9afbbfdb94a->leave($__internal_57b00758c8173b9ad2dba908e223ac523479dd5024399d6b3e40b9afbbfdb94a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2c94983880a5f3a6ee1354958b63c3ca06119b20a6a3d0974f9ccbefa5c7ca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c94983880a5f3a6ee1354958b63c3ca06119b20a6a3d0974f9ccbefa5c7ca4->enter($__internal_a2c94983880a5f3a6ee1354958b63c3ca06119b20a6a3d0974f9ccbefa5c7ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6624099795f94a9729999157a1a783fd8f08ccdd3361ad3533a6753feb4239ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6624099795f94a9729999157a1a783fd8f08ccdd3361ad3533a6753feb4239ed->enter($__internal_6624099795f94a9729999157a1a783fd8f08ccdd3361ad3533a6753feb4239ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_6624099795f94a9729999157a1a783fd8f08ccdd3361ad3533a6753feb4239ed->leave($__internal_6624099795f94a9729999157a1a783fd8f08ccdd3361ad3533a6753feb4239ed_prof);

        
        $__internal_a2c94983880a5f3a6ee1354958b63c3ca06119b20a6a3d0974f9ccbefa5c7ca4->leave($__internal_a2c94983880a5f3a6ee1354958b63c3ca06119b20a6a3d0974f9ccbefa5c7ca4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bf27cdd9a962eb950578890d4dbcaa5e15814571f16ce36bb90abd2d2071326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf27cdd9a962eb950578890d4dbcaa5e15814571f16ce36bb90abd2d2071326->enter($__internal_0bf27cdd9a962eb950578890d4dbcaa5e15814571f16ce36bb90abd2d2071326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68b4357a6cab6f0a97f4fe09d93df2d1d0241013b3e12b49abf5db672523d276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b4357a6cab6f0a97f4fe09d93df2d1d0241013b3e12b49abf5db672523d276->enter($__internal_68b4357a6cab6f0a97f4fe09d93df2d1d0241013b3e12b49abf5db672523d276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t\t\t\t\t\t<div class=\"block-article\">
\t\t\t\t\t\t\t<!--<img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("build/img/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "image", array()))), "html", null, true);
            echo "\" id=\"article-image\">-->

\t\t\t\t\t\t\t<div class=\"block-short-article\">
\t\t\t\t\t\t\t\t<h3>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "title", array()), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t<p>";
            // line 19
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "content", array()), 0, 100), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 20
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
        // line 26
        echo "\t\t</div>
\t</div>\t

";
        
        $__internal_68b4357a6cab6f0a97f4fe09d93df2d1d0241013b3e12b49abf5db672523d276->leave($__internal_68b4357a6cab6f0a97f4fe09d93df2d1d0241013b3e12b49abf5db672523d276_prof);

        
        $__internal_0bf27cdd9a962eb950578890d4dbcaa5e15814571f16ce36bb90abd2d2071326->leave($__internal_0bf27cdd9a962eb950578890d4dbcaa5e15814571f16ce36bb90abd2d2071326_prof);

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
        return array (  110 => 26,  98 => 20,  94 => 19,  90 => 18,  84 => 15,  79 => 12,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
\t\t\t\t\t\t<div class=\"block-article\">
\t\t\t\t\t\t\t<!--<img src=\"{{ asset('build/img/'~article.image) }}\" id=\"article-image\">-->

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

{% endblock %}\t", "blog/list.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\blog\\list.html.twig");
    }
}
