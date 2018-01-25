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
        $__internal_ac813ac6709724ce9939e7d1f807fa48dec62aee31525299779518ebd009716c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac813ac6709724ce9939e7d1f807fa48dec62aee31525299779518ebd009716c->enter($__internal_ac813ac6709724ce9939e7d1f807fa48dec62aee31525299779518ebd009716c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $__internal_ca61096e63d20fd7d0de7fdffbb529c2bdd79780b7509e3ded7a47e6cf633c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca61096e63d20fd7d0de7fdffbb529c2bdd79780b7509e3ded7a47e6cf633c8e->enter($__internal_ca61096e63d20fd7d0de7fdffbb529c2bdd79780b7509e3ded7a47e6cf633c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac813ac6709724ce9939e7d1f807fa48dec62aee31525299779518ebd009716c->leave($__internal_ac813ac6709724ce9939e7d1f807fa48dec62aee31525299779518ebd009716c_prof);

        
        $__internal_ca61096e63d20fd7d0de7fdffbb529c2bdd79780b7509e3ded7a47e6cf633c8e->leave($__internal_ca61096e63d20fd7d0de7fdffbb529c2bdd79780b7509e3ded7a47e6cf633c8e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_daa2eba9bc945728bcf6807d50cab8645d6b7fdd89996d9f416bd58ef0e9fc68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daa2eba9bc945728bcf6807d50cab8645d6b7fdd89996d9f416bd58ef0e9fc68->enter($__internal_daa2eba9bc945728bcf6807d50cab8645d6b7fdd89996d9f416bd58ef0e9fc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ffccf192421f4357e7772c8d95bbce99433e73560e23e51d00abf5205ee9a705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffccf192421f4357e7772c8d95bbce99433e73560e23e51d00abf5205ee9a705->enter($__internal_ffccf192421f4357e7772c8d95bbce99433e73560e23e51d00abf5205ee9a705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_ffccf192421f4357e7772c8d95bbce99433e73560e23e51d00abf5205ee9a705->leave($__internal_ffccf192421f4357e7772c8d95bbce99433e73560e23e51d00abf5205ee9a705_prof);

        
        $__internal_daa2eba9bc945728bcf6807d50cab8645d6b7fdd89996d9f416bd58ef0e9fc68->leave($__internal_daa2eba9bc945728bcf6807d50cab8645d6b7fdd89996d9f416bd58ef0e9fc68_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecc796ef7df28ff18b59961805262767388813d93705cf7e207781cb9cfe6e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc796ef7df28ff18b59961805262767388813d93705cf7e207781cb9cfe6e77->enter($__internal_ecc796ef7df28ff18b59961805262767388813d93705cf7e207781cb9cfe6e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_921224d1fdd3b4d28872c9f071453c9ea60f33802a351a96beae3ce94ed36f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921224d1fdd3b4d28872c9f071453c9ea60f33802a351a96beae3ce94ed36f52->enter($__internal_921224d1fdd3b4d28872c9f071453c9ea60f33802a351a96beae3ce94ed36f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/oies.jpg"), "html", null, true);
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
        
        $__internal_921224d1fdd3b4d28872c9f071453c9ea60f33802a351a96beae3ce94ed36f52->leave($__internal_921224d1fdd3b4d28872c9f071453c9ea60f33802a351a96beae3ce94ed36f52_prof);

        
        $__internal_ecc796ef7df28ff18b59961805262767388813d93705cf7e207781cb9cfe6e77->leave($__internal_ecc796ef7df28ff18b59961805262767388813d93705cf7e207781cb9cfe6e77_prof);

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
\t\t\t\t\t\t\t<!--<img src=\"{{ asset('build/img/oies.jpg') }}\" id=\"article-image\">-->

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
