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
        $__internal_d17d8baea65e6d9badd49a412a4bf1941d58c631e0ff85eca1560900b9b66bc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d17d8baea65e6d9badd49a412a4bf1941d58c631e0ff85eca1560900b9b66bc3->enter($__internal_d17d8baea65e6d9badd49a412a4bf1941d58c631e0ff85eca1560900b9b66bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $__internal_fe7bf95c27ace915d9169d145ef9b5bc840f80e71b438ab7e52d2fc5ae08e130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7bf95c27ace915d9169d145ef9b5bc840f80e71b438ab7e52d2fc5ae08e130->enter($__internal_fe7bf95c27ace915d9169d145ef9b5bc840f80e71b438ab7e52d2fc5ae08e130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d17d8baea65e6d9badd49a412a4bf1941d58c631e0ff85eca1560900b9b66bc3->leave($__internal_d17d8baea65e6d9badd49a412a4bf1941d58c631e0ff85eca1560900b9b66bc3_prof);

        
        $__internal_fe7bf95c27ace915d9169d145ef9b5bc840f80e71b438ab7e52d2fc5ae08e130->leave($__internal_fe7bf95c27ace915d9169d145ef9b5bc840f80e71b438ab7e52d2fc5ae08e130_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3d7927179f2cb4ee8de750a9d1c6833f01453bafa356296a3817050bf0645bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d7927179f2cb4ee8de750a9d1c6833f01453bafa356296a3817050bf0645bf->enter($__internal_d3d7927179f2cb4ee8de750a9d1c6833f01453bafa356296a3817050bf0645bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_be6ed2d3ad4485195c6b1326caa5d35ddfbb5c5acebfc5c269a2fdc3c120b032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6ed2d3ad4485195c6b1326caa5d35ddfbb5c5acebfc5c269a2fdc3c120b032->enter($__internal_be6ed2d3ad4485195c6b1326caa5d35ddfbb5c5acebfc5c269a2fdc3c120b032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog - Liste";
        
        $__internal_be6ed2d3ad4485195c6b1326caa5d35ddfbb5c5acebfc5c269a2fdc3c120b032->leave($__internal_be6ed2d3ad4485195c6b1326caa5d35ddfbb5c5acebfc5c269a2fdc3c120b032_prof);

        
        $__internal_d3d7927179f2cb4ee8de750a9d1c6833f01453bafa356296a3817050bf0645bf->leave($__internal_d3d7927179f2cb4ee8de750a9d1c6833f01453bafa356296a3817050bf0645bf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1003b7311434c972f1093d78659c40d1078d1d0676e8a4f196b6793cb458875a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1003b7311434c972f1093d78659c40d1078d1d0676e8a4f196b6793cb458875a->enter($__internal_1003b7311434c972f1093d78659c40d1078d1d0676e8a4f196b6793cb458875a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78f484f37c727e509164334d4d4f1a36436fc2273da2526701f1abf04bb3e1c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f484f37c727e509164334d4d4f1a36436fc2273da2526701f1abf04bb3e1c7->enter($__internal_78f484f37c727e509164334d4d4f1a36436fc2273da2526701f1abf04bb3e1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_78f484f37c727e509164334d4d4f1a36436fc2273da2526701f1abf04bb3e1c7->leave($__internal_78f484f37c727e509164334d4d4f1a36436fc2273da2526701f1abf04bb3e1c7_prof);

        
        $__internal_1003b7311434c972f1093d78659c40d1078d1d0676e8a4f196b6793cb458875a->leave($__internal_1003b7311434c972f1093d78659c40d1078d1d0676e8a4f196b6793cb458875a_prof);

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
