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
        $__internal_6491fdb02bb05028529b45350b719a2ba0e4ce0acd46b46312bf3464b6ea2357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6491fdb02bb05028529b45350b719a2ba0e4ce0acd46b46312bf3464b6ea2357->enter($__internal_6491fdb02bb05028529b45350b719a2ba0e4ce0acd46b46312bf3464b6ea2357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $__internal_4dad688dc1b9a613ff65cf023a0ddb1b1e4fe6bb093a1a65b6bba63653800df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dad688dc1b9a613ff65cf023a0ddb1b1e4fe6bb093a1a65b6bba63653800df3->enter($__internal_4dad688dc1b9a613ff65cf023a0ddb1b1e4fe6bb093a1a65b6bba63653800df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6491fdb02bb05028529b45350b719a2ba0e4ce0acd46b46312bf3464b6ea2357->leave($__internal_6491fdb02bb05028529b45350b719a2ba0e4ce0acd46b46312bf3464b6ea2357_prof);

        
        $__internal_4dad688dc1b9a613ff65cf023a0ddb1b1e4fe6bb093a1a65b6bba63653800df3->leave($__internal_4dad688dc1b9a613ff65cf023a0ddb1b1e4fe6bb093a1a65b6bba63653800df3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0cf57f13c96c91de7cf8cc37fc43a0c3dbc7f57ce166675f035e4a7fb25fd7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0cf57f13c96c91de7cf8cc37fc43a0c3dbc7f57ce166675f035e4a7fb25fd7d->enter($__internal_a0cf57f13c96c91de7cf8cc37fc43a0c3dbc7f57ce166675f035e4a7fb25fd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2bb76bbe48c1e909098218632c6caed93a5d38a3458a8e68c6d437da6f43355f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb76bbe48c1e909098218632c6caed93a5d38a3458a8e68c6d437da6f43355f->enter($__internal_2bb76bbe48c1e909098218632c6caed93a5d38a3458a8e68c6d437da6f43355f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_2bb76bbe48c1e909098218632c6caed93a5d38a3458a8e68c6d437da6f43355f->leave($__internal_2bb76bbe48c1e909098218632c6caed93a5d38a3458a8e68c6d437da6f43355f_prof);

        
        $__internal_a0cf57f13c96c91de7cf8cc37fc43a0c3dbc7f57ce166675f035e4a7fb25fd7d->leave($__internal_a0cf57f13c96c91de7cf8cc37fc43a0c3dbc7f57ce166675f035e4a7fb25fd7d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2646e19f18428852b2c23d9c85569964878357f6613e1b0bcf3bcf71f611bf16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2646e19f18428852b2c23d9c85569964878357f6613e1b0bcf3bcf71f611bf16->enter($__internal_2646e19f18428852b2c23d9c85569964878357f6613e1b0bcf3bcf71f611bf16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b522cd76aa00924bbeaf94dd6ae71e21ae8a7a3fbfc386fb775b1bf8e51380f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b522cd76aa00924bbeaf94dd6ae71e21ae8a7a3fbfc386fb775b1bf8e51380f5->enter($__internal_b522cd76aa00924bbeaf94dd6ae71e21ae8a7a3fbfc386fb775b1bf8e51380f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b522cd76aa00924bbeaf94dd6ae71e21ae8a7a3fbfc386fb775b1bf8e51380f5->leave($__internal_b522cd76aa00924bbeaf94dd6ae71e21ae8a7a3fbfc386fb775b1bf8e51380f5_prof);

        
        $__internal_2646e19f18428852b2c23d9c85569964878357f6613e1b0bcf3bcf71f611bf16->leave($__internal_2646e19f18428852b2c23d9c85569964878357f6613e1b0bcf3bcf71f611bf16_prof);

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

{% endblock %}\t", "blog/list.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\blog\\list.html.twig");
    }
}
