<?php

/* blog/single.html.twig */
class __TwigTemplate_e66364d32e261f3deea631a85658e186174cd48c6f278f668a431eb7bb819259 extends Twig_Template
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
        $__internal_72a159e4ecc876dca850278457f1ab65ac9ab3b871523ca2edf5555b3ba65cbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72a159e4ecc876dca850278457f1ab65ac9ab3b871523ca2edf5555b3ba65cbb->enter($__internal_72a159e4ecc876dca850278457f1ab65ac9ab3b871523ca2edf5555b3ba65cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/single.html.twig"));

        $__internal_e9740d9fa861ac8667cbc8a7f4293e7607f8a5f6cb9d9bb691779b8936d90403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9740d9fa861ac8667cbc8a7f4293e7607f8a5f6cb9d9bb691779b8936d90403->enter($__internal_e9740d9fa861ac8667cbc8a7f4293e7607f8a5f6cb9d9bb691779b8936d90403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/single.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72a159e4ecc876dca850278457f1ab65ac9ab3b871523ca2edf5555b3ba65cbb->leave($__internal_72a159e4ecc876dca850278457f1ab65ac9ab3b871523ca2edf5555b3ba65cbb_prof);

        
        $__internal_e9740d9fa861ac8667cbc8a7f4293e7607f8a5f6cb9d9bb691779b8936d90403->leave($__internal_e9740d9fa861ac8667cbc8a7f4293e7607f8a5f6cb9d9bb691779b8936d90403_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ffbea451f3bc088e13591d8537d3f4471cccea160fb484b6128d272c6443093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ffbea451f3bc088e13591d8537d3f4471cccea160fb484b6128d272c6443093->enter($__internal_0ffbea451f3bc088e13591d8537d3f4471cccea160fb484b6128d272c6443093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2a3972001a5ac41e760028847f8003f66c2da9d42948d66ff457178d57adb1f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3972001a5ac41e760028847f8003f66c2da9d42948d66ff457178d57adb1f5->enter($__internal_2a3972001a5ac41e760028847f8003f66c2da9d42948d66ff457178d57adb1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 3, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        
        $__internal_2a3972001a5ac41e760028847f8003f66c2da9d42948d66ff457178d57adb1f5->leave($__internal_2a3972001a5ac41e760028847f8003f66c2da9d42948d66ff457178d57adb1f5_prof);

        
        $__internal_0ffbea451f3bc088e13591d8537d3f4471cccea160fb484b6128d272c6443093->leave($__internal_0ffbea451f3bc088e13591d8537d3f4471cccea160fb484b6128d272c6443093_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8009c13cdc7a0a6114f5dfb9fcc24e85cc3cfd106fbe402ec866da720c402e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8009c13cdc7a0a6114f5dfb9fcc24e85cc3cfd106fbe402ec866da720c402e9->enter($__internal_e8009c13cdc7a0a6114f5dfb9fcc24e85cc3cfd106fbe402ec866da720c402e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_326f33ba933815989712015d1d0d47ab0abe2f9d173de2f67ad4f6e77109266f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326f33ba933815989712015d1d0d47ab0abe2f9d173de2f67ad4f6e77109266f->enter($__internal_326f33ba933815989712015d1d0d47ab0abe2f9d173de2f67ad4f6e77109266f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <img src='/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 6, $this->getSourceContext()); })()), "image", array()), "html", null, true);
        echo "'>
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

\t<br>

\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 17, $this->getSourceContext()); })()), "comments", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 18
            echo "\t\t<div style=\"border: 1px solid black;\">
\t\t\t<p>Par <em>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "author", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "author", array()), "lastname", array()))), "html", null, true);
            echo ". </em>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "author", array()), "type", array()), "html", null, true);
            echo "</p>
\t\t\t<p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "content", array()), "html", null, true);
            echo "</p>
\t\t\t<p>Posté le ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "dateComment", array()), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "dateComment", array()), "H:i"), "html", null, true);
            echo "</p>
\t\t</div>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "\t\t<p>Aucun commentaire.</p>\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
\t<br>

\t<div style=\"background-color: grey; display: inline-block;\">
\t\t<h2>Ecrire un commentaire</h2>

\t\t";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'form_start');
        echo "

\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'errors');
        echo "

\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "content", array()), 'row');
        echo "

\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "Publier", array()), 'row');
        echo "

\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'rest');
        echo "

\t\t";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'form_end');
        echo "
\t</div>


";
        
        $__internal_326f33ba933815989712015d1d0d47ab0abe2f9d173de2f67ad4f6e77109266f->leave($__internal_326f33ba933815989712015d1d0d47ab0abe2f9d173de2f67ad4f6e77109266f_prof);

        
        $__internal_e8009c13cdc7a0a6114f5dfb9fcc24e85cc3cfd106fbe402ec866da720c402e9->leave($__internal_e8009c13cdc7a0a6114f5dfb9fcc24e85cc3cfd106fbe402ec866da720c402e9_prof);

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
        return array (  159 => 42,  154 => 40,  149 => 38,  144 => 36,  139 => 34,  134 => 32,  126 => 26,  119 => 24,  109 => 21,  105 => 20,  97 => 19,  94 => 18,  89 => 17,  79 => 10,  73 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}{{ article.title }}{% endblock %} 

{% block body %}
    <img src='/{{article.image }}'>
\t<h2>Titre : {{ article.title }}</h2>

\t<div>
\t\t{{ article.content }}
\t</div>

\t<hr>

\t<br>

\t{% for comment in article.comments %}
\t\t<div style=\"border: 1px solid black;\">
\t\t\t<p>Par <em>{{ comment.author.firstname }} {{ comment.author.lastname|upper|first }}. </em>{{ comment.author.type }}</p>
\t\t\t<p>{{ comment.content }}</p>
\t\t\t<p>Posté le {{ comment.dateComment|date('d/m/Y') }} à {{ comment.dateComment|date('H:i') }}</p>
\t\t</div>
\t{% else %}
\t\t<p>Aucun commentaire.</p>\t
\t{% endfor %}

\t<br>

\t<div style=\"background-color: grey; display: inline-block;\">
\t\t<h2>Ecrire un commentaire</h2>

\t\t{{ form_start(form) }}

\t\t{{ form_errors(form) }}

\t\t{{ form_row(form.content) }}

\t\t{{ form_row(form.Publier) }}

\t\t{{ form_rest(form) }}

\t\t{{ form_end(form) }}
\t</div>


{% endblock %}\t", "blog/single.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\blog\\single.html.twig");
    }
}
