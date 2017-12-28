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
        $__internal_42fe9a26d34c1fd25cb3fa4143d858d9ca0bac090c16908de2c4908cf4edc159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42fe9a26d34c1fd25cb3fa4143d858d9ca0bac090c16908de2c4908cf4edc159->enter($__internal_42fe9a26d34c1fd25cb3fa4143d858d9ca0bac090c16908de2c4908cf4edc159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $__internal_331a31941fe11c13ce3f6bf68b4920293c676e79e736410b2106c356e0802394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331a31941fe11c13ce3f6bf68b4920293c676e79e736410b2106c356e0802394->enter($__internal_331a31941fe11c13ce3f6bf68b4920293c676e79e736410b2106c356e0802394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42fe9a26d34c1fd25cb3fa4143d858d9ca0bac090c16908de2c4908cf4edc159->leave($__internal_42fe9a26d34c1fd25cb3fa4143d858d9ca0bac090c16908de2c4908cf4edc159_prof);

        
        $__internal_331a31941fe11c13ce3f6bf68b4920293c676e79e736410b2106c356e0802394->leave($__internal_331a31941fe11c13ce3f6bf68b4920293c676e79e736410b2106c356e0802394_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0017c09366bab18b6ccd5650c631f428da0eaf9699b8ec010a5c1a5460311f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0017c09366bab18b6ccd5650c631f428da0eaf9699b8ec010a5c1a5460311f03->enter($__internal_0017c09366bab18b6ccd5650c631f428da0eaf9699b8ec010a5c1a5460311f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ca8b35856bfc112746472933ac47806407bff91e49c64cdad7d6b3f60bc0f346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8b35856bfc112746472933ac47806407bff91e49c64cdad7d6b3f60bc0f346->enter($__internal_ca8b35856bfc112746472933ac47806407bff91e49c64cdad7d6b3f60bc0f346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog - Liste";
        
        $__internal_ca8b35856bfc112746472933ac47806407bff91e49c64cdad7d6b3f60bc0f346->leave($__internal_ca8b35856bfc112746472933ac47806407bff91e49c64cdad7d6b3f60bc0f346_prof);

        
        $__internal_0017c09366bab18b6ccd5650c631f428da0eaf9699b8ec010a5c1a5460311f03->leave($__internal_0017c09366bab18b6ccd5650c631f428da0eaf9699b8ec010a5c1a5460311f03_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_59eaa79fd492a8f888447310c009cf2b669242671d7d486ee098e7d4ac01b09b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59eaa79fd492a8f888447310c009cf2b669242671d7d486ee098e7d4ac01b09b->enter($__internal_59eaa79fd492a8f888447310c009cf2b669242671d7d486ee098e7d4ac01b09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60f2e1eafce4d0ff367ab0add14dfb7486b0c049216bebeef959cac84e6b1100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f2e1eafce4d0ff367ab0add14dfb7486b0c049216bebeef959cac84e6b1100->enter($__internal_60f2e1eafce4d0ff367ab0add14dfb7486b0c049216bebeef959cac84e6b1100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_60f2e1eafce4d0ff367ab0add14dfb7486b0c049216bebeef959cac84e6b1100->leave($__internal_60f2e1eafce4d0ff367ab0add14dfb7486b0c049216bebeef959cac84e6b1100_prof);

        
        $__internal_59eaa79fd492a8f888447310c009cf2b669242671d7d486ee098e7d4ac01b09b->leave($__internal_59eaa79fd492a8f888447310c009cf2b669242671d7d486ee098e7d4ac01b09b_prof);

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
