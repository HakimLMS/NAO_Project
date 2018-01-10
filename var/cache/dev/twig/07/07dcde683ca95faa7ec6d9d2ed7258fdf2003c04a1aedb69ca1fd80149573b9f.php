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
        $__internal_3233365f6e4eeacb1aa6e2ee63a0ece8f865b9d9af151896d6d64a326cf21973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3233365f6e4eeacb1aa6e2ee63a0ece8f865b9d9af151896d6d64a326cf21973->enter($__internal_3233365f6e4eeacb1aa6e2ee63a0ece8f865b9d9af151896d6d64a326cf21973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $__internal_91724db06ddc470651bbdc4dcb8b84c856117d5ce1f87386bac40f0849c7cdf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91724db06ddc470651bbdc4dcb8b84c856117d5ce1f87386bac40f0849c7cdf1->enter($__internal_91724db06ddc470651bbdc4dcb8b84c856117d5ce1f87386bac40f0849c7cdf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3233365f6e4eeacb1aa6e2ee63a0ece8f865b9d9af151896d6d64a326cf21973->leave($__internal_3233365f6e4eeacb1aa6e2ee63a0ece8f865b9d9af151896d6d64a326cf21973_prof);

        
        $__internal_91724db06ddc470651bbdc4dcb8b84c856117d5ce1f87386bac40f0849c7cdf1->leave($__internal_91724db06ddc470651bbdc4dcb8b84c856117d5ce1f87386bac40f0849c7cdf1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8a341f7d3a8e11c7e5942dbdc6e88bd9213f6d87afca1afa9540fa192d7d5fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a341f7d3a8e11c7e5942dbdc6e88bd9213f6d87afca1afa9540fa192d7d5fe->enter($__internal_e8a341f7d3a8e11c7e5942dbdc6e88bd9213f6d87afca1afa9540fa192d7d5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_47693435c0505c9940a3ac5b35e49b45d4fdc98a4a00cae1369e2b1abefec215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47693435c0505c9940a3ac5b35e49b45d4fdc98a4a00cae1369e2b1abefec215->enter($__internal_47693435c0505c9940a3ac5b35e49b45d4fdc98a4a00cae1369e2b1abefec215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste";
        
        $__internal_47693435c0505c9940a3ac5b35e49b45d4fdc98a4a00cae1369e2b1abefec215->leave($__internal_47693435c0505c9940a3ac5b35e49b45d4fdc98a4a00cae1369e2b1abefec215_prof);

        
        $__internal_e8a341f7d3a8e11c7e5942dbdc6e88bd9213f6d87afca1afa9540fa192d7d5fe->leave($__internal_e8a341f7d3a8e11c7e5942dbdc6e88bd9213f6d87afca1afa9540fa192d7d5fe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2b24da61f8fb094a238e0f08725a0145529038e219506964999ed97e9c6cc20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b24da61f8fb094a238e0f08725a0145529038e219506964999ed97e9c6cc20->enter($__internal_f2b24da61f8fb094a238e0f08725a0145529038e219506964999ed97e9c6cc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88838133f172017b2d4f5737fc6f673c924f6a40685c4a50db86f2e26c87fc9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88838133f172017b2d4f5737fc6f673c924f6a40685c4a50db86f2e26c87fc9d->enter($__internal_88838133f172017b2d4f5737fc6f673c924f6a40685c4a50db86f2e26c87fc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<h2>Blog</h2>

\t<p>
\t\t";
        // line 10
        echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new Twig_Error_Runtime('Variable "reponse" does not exist.', 10, $this->getSourceContext()); })())), "html", null, true);
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
        
        $__internal_88838133f172017b2d4f5737fc6f673c924f6a40685c4a50db86f2e26c87fc9d->leave($__internal_88838133f172017b2d4f5737fc6f673c924f6a40685c4a50db86f2e26c87fc9d_prof);

        
        $__internal_f2b24da61f8fb094a238e0f08725a0145529038e219506964999ed97e9c6cc20->leave($__internal_f2b24da61f8fb094a238e0f08725a0145529038e219506964999ed97e9c6cc20_prof);

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
