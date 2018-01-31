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
        $__internal_7850496b188df9b4e33f00514e69f71e54e31ac9b9c1acae460d746f49edf997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7850496b188df9b4e33f00514e69f71e54e31ac9b9c1acae460d746f49edf997->enter($__internal_7850496b188df9b4e33f00514e69f71e54e31ac9b9c1acae460d746f49edf997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $__internal_c705aaadc8703e80122b0e02670136828139b78b9f24a881e28ef91bbcb50d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c705aaadc8703e80122b0e02670136828139b78b9f24a881e28ef91bbcb50d5b->enter($__internal_c705aaadc8703e80122b0e02670136828139b78b9f24a881e28ef91bbcb50d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7850496b188df9b4e33f00514e69f71e54e31ac9b9c1acae460d746f49edf997->leave($__internal_7850496b188df9b4e33f00514e69f71e54e31ac9b9c1acae460d746f49edf997_prof);

        
        $__internal_c705aaadc8703e80122b0e02670136828139b78b9f24a881e28ef91bbcb50d5b->leave($__internal_c705aaadc8703e80122b0e02670136828139b78b9f24a881e28ef91bbcb50d5b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b42de3db7d54e42d1d7a14f00a2e0e488b71cbf0d1a5d9968edcd3b13ca3dd64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b42de3db7d54e42d1d7a14f00a2e0e488b71cbf0d1a5d9968edcd3b13ca3dd64->enter($__internal_b42de3db7d54e42d1d7a14f00a2e0e488b71cbf0d1a5d9968edcd3b13ca3dd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e6b38ecadb0c9abfc0cb6dc2d46220010d4015d383ad5ac125e1f9a97916bc13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b38ecadb0c9abfc0cb6dc2d46220010d4015d383ad5ac125e1f9a97916bc13->enter($__internal_e6b38ecadb0c9abfc0cb6dc2d46220010d4015d383ad5ac125e1f9a97916bc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_e6b38ecadb0c9abfc0cb6dc2d46220010d4015d383ad5ac125e1f9a97916bc13->leave($__internal_e6b38ecadb0c9abfc0cb6dc2d46220010d4015d383ad5ac125e1f9a97916bc13_prof);

        
        $__internal_b42de3db7d54e42d1d7a14f00a2e0e488b71cbf0d1a5d9968edcd3b13ca3dd64->leave($__internal_b42de3db7d54e42d1d7a14f00a2e0e488b71cbf0d1a5d9968edcd3b13ca3dd64_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fec0029e18ab14c9847768ec43785f63d918a6365f935436e6ddf8f48f51546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fec0029e18ab14c9847768ec43785f63d918a6365f935436e6ddf8f48f51546->enter($__internal_2fec0029e18ab14c9847768ec43785f63d918a6365f935436e6ddf8f48f51546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63a1a0ad9b0336ef98cd293d9d4a6a65af2a62d70479984499171c0e5270d3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a1a0ad9b0336ef98cd293d9d4a6a65af2a62d70479984499171c0e5270d3ff->enter($__internal_63a1a0ad9b0336ef98cd293d9d4a6a65af2a62d70479984499171c0e5270d3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_63a1a0ad9b0336ef98cd293d9d4a6a65af2a62d70479984499171c0e5270d3ff->leave($__internal_63a1a0ad9b0336ef98cd293d9d4a6a65af2a62d70479984499171c0e5270d3ff_prof);

        
        $__internal_2fec0029e18ab14c9847768ec43785f63d918a6365f935436e6ddf8f48f51546->leave($__internal_2fec0029e18ab14c9847768ec43785f63d918a6365f935436e6ddf8f48f51546_prof);

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
