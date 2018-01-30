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
        $__internal_a6923a14b2ad90f5a45d2fb97b8370acd3a1f55c7e59a6dcf81c8bd0e3a1dbd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6923a14b2ad90f5a45d2fb97b8370acd3a1f55c7e59a6dcf81c8bd0e3a1dbd9->enter($__internal_a6923a14b2ad90f5a45d2fb97b8370acd3a1f55c7e59a6dcf81c8bd0e3a1dbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $__internal_a727f57efa4a12d30d6b80a36fdb6f4fc8127f25d9a147597f6a4ed1ceec3ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a727f57efa4a12d30d6b80a36fdb6f4fc8127f25d9a147597f6a4ed1ceec3ccc->enter($__internal_a727f57efa4a12d30d6b80a36fdb6f4fc8127f25d9a147597f6a4ed1ceec3ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6923a14b2ad90f5a45d2fb97b8370acd3a1f55c7e59a6dcf81c8bd0e3a1dbd9->leave($__internal_a6923a14b2ad90f5a45d2fb97b8370acd3a1f55c7e59a6dcf81c8bd0e3a1dbd9_prof);

        
        $__internal_a727f57efa4a12d30d6b80a36fdb6f4fc8127f25d9a147597f6a4ed1ceec3ccc->leave($__internal_a727f57efa4a12d30d6b80a36fdb6f4fc8127f25d9a147597f6a4ed1ceec3ccc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d09ac39dbfacec1a51d5578c6a68f8481f1f9b678b0babdc1b1065aa69602552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d09ac39dbfacec1a51d5578c6a68f8481f1f9b678b0babdc1b1065aa69602552->enter($__internal_d09ac39dbfacec1a51d5578c6a68f8481f1f9b678b0babdc1b1065aa69602552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7fbe489392ba7bc35d6ae31d19697929277726c426860fb67bdd3c06a4247f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fbe489392ba7bc35d6ae31d19697929277726c426860fb67bdd3c06a4247f8b->enter($__internal_7fbe489392ba7bc35d6ae31d19697929277726c426860fb67bdd3c06a4247f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_7fbe489392ba7bc35d6ae31d19697929277726c426860fb67bdd3c06a4247f8b->leave($__internal_7fbe489392ba7bc35d6ae31d19697929277726c426860fb67bdd3c06a4247f8b_prof);

        
        $__internal_d09ac39dbfacec1a51d5578c6a68f8481f1f9b678b0babdc1b1065aa69602552->leave($__internal_d09ac39dbfacec1a51d5578c6a68f8481f1f9b678b0babdc1b1065aa69602552_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6abcd482d7291cc31233fcf169babd9d113b210821e13f1486f8a10a79fa966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6abcd482d7291cc31233fcf169babd9d113b210821e13f1486f8a10a79fa966->enter($__internal_e6abcd482d7291cc31233fcf169babd9d113b210821e13f1486f8a10a79fa966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3c72bcb4eb99f7d352fe29ae9475d19a4fe6734f66e4d655526677e5a9332f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c72bcb4eb99f7d352fe29ae9475d19a4fe6734f66e4d655526677e5a9332f6->enter($__internal_c3c72bcb4eb99f7d352fe29ae9475d19a4fe6734f66e4d655526677e5a9332f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c3c72bcb4eb99f7d352fe29ae9475d19a4fe6734f66e4d655526677e5a9332f6->leave($__internal_c3c72bcb4eb99f7d352fe29ae9475d19a4fe6734f66e4d655526677e5a9332f6_prof);

        
        $__internal_e6abcd482d7291cc31233fcf169babd9d113b210821e13f1486f8a10a79fa966->leave($__internal_e6abcd482d7291cc31233fcf169babd9d113b210821e13f1486f8a10a79fa966_prof);

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
