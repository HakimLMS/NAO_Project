<?php

/* blog/single.html.twig */
class __TwigTemplate_9d18516bd5686b4aa84c4eb8f591b9ba6b67dbd482d6fc388247890c29659404 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/single.html.twig", 1);
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
        $__internal_936c4f8ce235c64c956520b87bfff6182f2f0c15bb2fa41c5ac31b0459ca6983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936c4f8ce235c64c956520b87bfff6182f2f0c15bb2fa41c5ac31b0459ca6983->enter($__internal_936c4f8ce235c64c956520b87bfff6182f2f0c15bb2fa41c5ac31b0459ca6983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/single.html.twig"));

        $__internal_258737d6535dacd0e441ccc314fc7f8c21f7121324a59d61efa9f4376f5944b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_258737d6535dacd0e441ccc314fc7f8c21f7121324a59d61efa9f4376f5944b5->enter($__internal_258737d6535dacd0e441ccc314fc7f8c21f7121324a59d61efa9f4376f5944b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/single.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_936c4f8ce235c64c956520b87bfff6182f2f0c15bb2fa41c5ac31b0459ca6983->leave($__internal_936c4f8ce235c64c956520b87bfff6182f2f0c15bb2fa41c5ac31b0459ca6983_prof);

        
        $__internal_258737d6535dacd0e441ccc314fc7f8c21f7121324a59d61efa9f4376f5944b5->leave($__internal_258737d6535dacd0e441ccc314fc7f8c21f7121324a59d61efa9f4376f5944b5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_78586a3b308e84a6ae67dee29799a6242013c3d7be40053ab016b0b908179969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78586a3b308e84a6ae67dee29799a6242013c3d7be40053ab016b0b908179969->enter($__internal_78586a3b308e84a6ae67dee29799a6242013c3d7be40053ab016b0b908179969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_60fa8ee0f94c40e125b697ab61f119202c159d8223d7b766268673051ce45b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60fa8ee0f94c40e125b697ab61f119202c159d8223d7b766268673051ce45b4d->enter($__internal_60fa8ee0f94c40e125b697ab61f119202c159d8223d7b766268673051ce45b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Blog - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 3, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo " ";
        
        $__internal_60fa8ee0f94c40e125b697ab61f119202c159d8223d7b766268673051ce45b4d->leave($__internal_60fa8ee0f94c40e125b697ab61f119202c159d8223d7b766268673051ce45b4d_prof);

        
        $__internal_78586a3b308e84a6ae67dee29799a6242013c3d7be40053ab016b0b908179969->leave($__internal_78586a3b308e84a6ae67dee29799a6242013c3d7be40053ab016b0b908179969_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0d17d115b0fcb9b95803833617899a667e02300f09050aa0f23315988faf80e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d17d115b0fcb9b95803833617899a667e02300f09050aa0f23315988faf80e->enter($__internal_e0d17d115b0fcb9b95803833617899a667e02300f09050aa0f23315988faf80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29c145d547bd2d817cb5d5e5cf67fa0dd1ddee8f65bb37fbf6e206f4c61b84b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c145d547bd2d817cb5d5e5cf67fa0dd1ddee8f65bb37fbf6e206f4c61b84b2->enter($__internal_29c145d547bd2d817cb5d5e5cf67fa0dd1ddee8f65bb37fbf6e206f4c61b84b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<h2>Titre : ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 7, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h2>

\t<div>
\t\t";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 10, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "
\t</div>

\t<hr>

\t<h2>Espace commentaire</h2>

\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 17, $this->getSourceContext()); })()), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 18
            echo "\t\t<div style=\"border: 1px solid black;\">
\t\t\t<p><em>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "author", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "author", array()), "lastname", array()))), "html", null, true);
            echo ". - <span style=\"color: grey;\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "dateComment", array()), "d/m/Y"), "html", null, true);
            echo "</span></em></p>
\t\t\t<p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "content", array()), "html", null, true);
            echo "</p>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
\t<h2>Poster votre commentaire</h2>

\t";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), 'form_start');
        echo "

\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'errors');
        echo "

\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "content", array()), 'row');
        echo "

\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "Publier", array()), 'row');
        echo "

\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'rest');
        echo "

\t";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), 'form_end');
        echo "

";
        
        $__internal_29c145d547bd2d817cb5d5e5cf67fa0dd1ddee8f65bb37fbf6e206f4c61b84b2->leave($__internal_29c145d547bd2d817cb5d5e5cf67fa0dd1ddee8f65bb37fbf6e206f4c61b84b2_prof);

        
        $__internal_e0d17d115b0fcb9b95803833617899a667e02300f09050aa0f23315988faf80e->leave($__internal_e0d17d115b0fcb9b95803833617899a667e02300f09050aa0f23315988faf80e_prof);

    }

    public function getTemplateName()
    {
        return "blog/single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 36,  138 => 34,  133 => 32,  128 => 30,  123 => 28,  118 => 26,  113 => 23,  104 => 20,  96 => 19,  93 => 18,  89 => 17,  79 => 10,  73 => 7,  70 => 6,  61 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %} Blog - {{ article.title }} {% endblock %} 

{% block body %}

\t<h2>Titre : {{ article.title }}</h2>

\t<div>
\t\t{{ article.content }}
\t</div>

\t<hr>

\t<h2>Espace commentaire</h2>

\t{% for comment in article.comments %}
\t\t<div style=\"border: 1px solid black;\">
\t\t\t<p><em>{{ comment.author.firstname }} {{ comment.author.lastname|upper|first }}. - <span style=\"color: grey;\">{{ comment.dateComment|date('d/m/Y') }}</span></em></p>
\t\t\t<p>{{ comment.content }}</p>
\t\t</div>
\t{% endfor %}

\t<h2>Poster votre commentaire</h2>

\t{{ form_start(form) }}

\t{{ form_errors(form) }}

\t{{ form_row(form.content) }}

\t{{ form_row(form.Publier) }}

\t{{ form_rest(form) }}

\t{{ form_end(form) }}

{% endblock %}\t", "blog/single.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\blog\\single.html.twig");
    }
}
