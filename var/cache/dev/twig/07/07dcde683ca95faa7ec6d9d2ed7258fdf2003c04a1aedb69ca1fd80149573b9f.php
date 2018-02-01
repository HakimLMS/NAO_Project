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
        $__internal_19c207787cb9397c82aa1dedf64a5f68916600e5f9c2d7dab9d008ede3bc519d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c207787cb9397c82aa1dedf64a5f68916600e5f9c2d7dab9d008ede3bc519d->enter($__internal_19c207787cb9397c82aa1dedf64a5f68916600e5f9c2d7dab9d008ede3bc519d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $__internal_d55249f0f489b97aa3d9f0cbce5ffbd2ee18ef17300ce4bb947842524dd92751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55249f0f489b97aa3d9f0cbce5ffbd2ee18ef17300ce4bb947842524dd92751->enter($__internal_d55249f0f489b97aa3d9f0cbce5ffbd2ee18ef17300ce4bb947842524dd92751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19c207787cb9397c82aa1dedf64a5f68916600e5f9c2d7dab9d008ede3bc519d->leave($__internal_19c207787cb9397c82aa1dedf64a5f68916600e5f9c2d7dab9d008ede3bc519d_prof);

        
        $__internal_d55249f0f489b97aa3d9f0cbce5ffbd2ee18ef17300ce4bb947842524dd92751->leave($__internal_d55249f0f489b97aa3d9f0cbce5ffbd2ee18ef17300ce4bb947842524dd92751_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1eea42dbdaf1b3c30ab63422c3e5e1a53fadf7c215d810923db06f352c3c3ab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eea42dbdaf1b3c30ab63422c3e5e1a53fadf7c215d810923db06f352c3c3ab0->enter($__internal_1eea42dbdaf1b3c30ab63422c3e5e1a53fadf7c215d810923db06f352c3c3ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_983ed9f6b367b77003fe328502cb9c48d9ab1df92b891dbee45acbe539969da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983ed9f6b367b77003fe328502cb9c48d9ab1df92b891dbee45acbe539969da9->enter($__internal_983ed9f6b367b77003fe328502cb9c48d9ab1df92b891dbee45acbe539969da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_983ed9f6b367b77003fe328502cb9c48d9ab1df92b891dbee45acbe539969da9->leave($__internal_983ed9f6b367b77003fe328502cb9c48d9ab1df92b891dbee45acbe539969da9_prof);

        
        $__internal_1eea42dbdaf1b3c30ab63422c3e5e1a53fadf7c215d810923db06f352c3c3ab0->leave($__internal_1eea42dbdaf1b3c30ab63422c3e5e1a53fadf7c215d810923db06f352c3c3ab0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_25a5b729227a936e280d3b967adf090072e4ea93d44f7d5c647e74fad3ad0189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a5b729227a936e280d3b967adf090072e4ea93d44f7d5c647e74fad3ad0189->enter($__internal_25a5b729227a936e280d3b967adf090072e4ea93d44f7d5c647e74fad3ad0189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e02f7502fc27bb111740cf434e74f33f52d4e826624434b0ade756d655c76eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e02f7502fc27bb111740cf434e74f33f52d4e826624434b0ade756d655c76eaf->enter($__internal_e02f7502fc27bb111740cf434e74f33f52d4e826624434b0ade756d655c76eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "title", array()), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t<p>";
            // line 18
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "content", array()), 0, 100), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 19
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
        // line 25
        echo "\t\t</div>
\t</div>\t

";
        
        $__internal_e02f7502fc27bb111740cf434e74f33f52d4e826624434b0ade756d655c76eaf->leave($__internal_e02f7502fc27bb111740cf434e74f33f52d4e826624434b0ade756d655c76eaf_prof);

        
        $__internal_25a5b729227a936e280d3b967adf090072e4ea93d44f7d5c647e74fad3ad0189->leave($__internal_25a5b729227a936e280d3b967adf090072e4ea93d44f7d5c647e74fad3ad0189_prof);

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
        return array (  109 => 25,  97 => 19,  93 => 18,  89 => 17,  84 => 15,  79 => 12,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
