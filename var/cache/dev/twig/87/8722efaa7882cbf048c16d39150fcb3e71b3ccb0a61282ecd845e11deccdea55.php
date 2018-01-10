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
        $__internal_e79b2bfd87574afafd16b957f4d010917667488dd7a128a505bc73c66704758d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e79b2bfd87574afafd16b957f4d010917667488dd7a128a505bc73c66704758d->enter($__internal_e79b2bfd87574afafd16b957f4d010917667488dd7a128a505bc73c66704758d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $__internal_9bcf6561cf45e4bb959ff0a56a303d9bc92bdb2571aa66f789c782ddbf1a9eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bcf6561cf45e4bb959ff0a56a303d9bc92bdb2571aa66f789c782ddbf1a9eae->enter($__internal_9bcf6561cf45e4bb959ff0a56a303d9bc92bdb2571aa66f789c782ddbf1a9eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e79b2bfd87574afafd16b957f4d010917667488dd7a128a505bc73c66704758d->leave($__internal_e79b2bfd87574afafd16b957f4d010917667488dd7a128a505bc73c66704758d_prof);

        
        $__internal_9bcf6561cf45e4bb959ff0a56a303d9bc92bdb2571aa66f789c782ddbf1a9eae->leave($__internal_9bcf6561cf45e4bb959ff0a56a303d9bc92bdb2571aa66f789c782ddbf1a9eae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6162733286fa13a122d86ec0dbac466cee6bcc4134ebba655a96ab66681e8263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6162733286fa13a122d86ec0dbac466cee6bcc4134ebba655a96ab66681e8263->enter($__internal_6162733286fa13a122d86ec0dbac466cee6bcc4134ebba655a96ab66681e8263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a1f5d0155acb3f95e0e08aae6bd53b4ba67c3569141709d840002c19f845241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1f5d0155acb3f95e0e08aae6bd53b4ba67c3569141709d840002c19f845241->enter($__internal_1a1f5d0155acb3f95e0e08aae6bd53b4ba67c3569141709d840002c19f845241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste";
        
        $__internal_1a1f5d0155acb3f95e0e08aae6bd53b4ba67c3569141709d840002c19f845241->leave($__internal_1a1f5d0155acb3f95e0e08aae6bd53b4ba67c3569141709d840002c19f845241_prof);

        
        $__internal_6162733286fa13a122d86ec0dbac466cee6bcc4134ebba655a96ab66681e8263->leave($__internal_6162733286fa13a122d86ec0dbac466cee6bcc4134ebba655a96ab66681e8263_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e3e69785e6ce1ec71173e24cfcb2e7bd395d6743be8a6c7065778f36978529e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3e69785e6ce1ec71173e24cfcb2e7bd395d6743be8a6c7065778f36978529e->enter($__internal_3e3e69785e6ce1ec71173e24cfcb2e7bd395d6743be8a6c7065778f36978529e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_114f1cff0d4f5efa0bb3608b9e90636f5e6a146059ee5c3a92af1a12726ffa1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114f1cff0d4f5efa0bb3608b9e90636f5e6a146059ee5c3a92af1a12726ffa1a->enter($__internal_114f1cff0d4f5efa0bb3608b9e90636f5e6a146059ee5c3a92af1a12726ffa1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<h2>Blog</h2>

\t<p>
\t\t";
        // line 10
        echo twig_var_dump($this->env, $context, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new Twig_Error_Runtime('Variable "reponse" does not exist.', 10, $this->getSourceContext()); })()));
        echo "

\t</p>

\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 14, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 15
            echo "
\t\t<div style=\"width: 200px; height: 200px; background: #f0f0f0; margin: 20px;\">
\t\t\t<h3>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "title", array()), "html", null, true);
            echo "</h3>
\t\t\t<p>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "content", array()), "html", null, true);
            echo "</p>
\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_single", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\"><button>Lire la suite</button></a>
\t\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t

";
        
        $__internal_114f1cff0d4f5efa0bb3608b9e90636f5e6a146059ee5c3a92af1a12726ffa1a->leave($__internal_114f1cff0d4f5efa0bb3608b9e90636f5e6a146059ee5c3a92af1a12726ffa1a_prof);

        
        $__internal_3e3e69785e6ce1ec71173e24cfcb2e7bd395d6743be8a6c7065778f36978529e->leave($__internal_3e3e69785e6ce1ec71173e24cfcb2e7bd395d6743be8a6c7065778f36978529e_prof);

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
        return array (  107 => 22,  97 => 19,  93 => 18,  89 => 17,  85 => 15,  81 => 14,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Liste{% endblock %}

{% block body %}

\t<h2>Blog</h2>

\t<p>
\t\t{{ dump(reponse) }}

\t</p>

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
