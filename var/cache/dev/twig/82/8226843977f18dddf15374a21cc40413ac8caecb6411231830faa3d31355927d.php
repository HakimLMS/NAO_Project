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
        $__internal_dc4b0b433766371b47a10d418ebed8a00165a74f2d7296a678e95691f7b09e83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc4b0b433766371b47a10d418ebed8a00165a74f2d7296a678e95691f7b09e83->enter($__internal_dc4b0b433766371b47a10d418ebed8a00165a74f2d7296a678e95691f7b09e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/single.html.twig"));

        $__internal_2b6bb7a5e27e382adb616584cc8dfaf7bab828845eabdda97c1299030fe3818d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6bb7a5e27e382adb616584cc8dfaf7bab828845eabdda97c1299030fe3818d->enter($__internal_2b6bb7a5e27e382adb616584cc8dfaf7bab828845eabdda97c1299030fe3818d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/single.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc4b0b433766371b47a10d418ebed8a00165a74f2d7296a678e95691f7b09e83->leave($__internal_dc4b0b433766371b47a10d418ebed8a00165a74f2d7296a678e95691f7b09e83_prof);

        
        $__internal_2b6bb7a5e27e382adb616584cc8dfaf7bab828845eabdda97c1299030fe3818d->leave($__internal_2b6bb7a5e27e382adb616584cc8dfaf7bab828845eabdda97c1299030fe3818d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_705b403c62b0a39671945ca2c13b38a040e8f26f61d0b00bb3ec4ef6c1d0953e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_705b403c62b0a39671945ca2c13b38a040e8f26f61d0b00bb3ec4ef6c1d0953e->enter($__internal_705b403c62b0a39671945ca2c13b38a040e8f26f61d0b00bb3ec4ef6c1d0953e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_78b64ee13e0becdd61417650dacd8832976cf07732c51b11d1e1f7732d90606a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78b64ee13e0becdd61417650dacd8832976cf07732c51b11d1e1f7732d90606a->enter($__internal_78b64ee13e0becdd61417650dacd8832976cf07732c51b11d1e1f7732d90606a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 3, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        
        $__internal_78b64ee13e0becdd61417650dacd8832976cf07732c51b11d1e1f7732d90606a->leave($__internal_78b64ee13e0becdd61417650dacd8832976cf07732c51b11d1e1f7732d90606a_prof);

        
        $__internal_705b403c62b0a39671945ca2c13b38a040e8f26f61d0b00bb3ec4ef6c1d0953e->leave($__internal_705b403c62b0a39671945ca2c13b38a040e8f26f61d0b00bb3ec4ef6c1d0953e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7dd4bc894b147e03505af8ad2c1b4d3ea19d6057148d320db94f02efbe1fa56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7dd4bc894b147e03505af8ad2c1b4d3ea19d6057148d320db94f02efbe1fa56->enter($__internal_d7dd4bc894b147e03505af8ad2c1b4d3ea19d6057148d320db94f02efbe1fa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a8443908470555df2d7de873e2752b0174b0048ad222bcd67f3e6d3fefa0a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8443908470555df2d7de873e2752b0174b0048ad222bcd67f3e6d3fefa0a41->enter($__internal_1a8443908470555df2d7de873e2752b0174b0048ad222bcd67f3e6d3fefa0a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1a8443908470555df2d7de873e2752b0174b0048ad222bcd67f3e6d3fefa0a41->leave($__internal_1a8443908470555df2d7de873e2752b0174b0048ad222bcd67f3e6d3fefa0a41_prof);

        
        $__internal_d7dd4bc894b147e03505af8ad2c1b4d3ea19d6057148d320db94f02efbe1fa56->leave($__internal_d7dd4bc894b147e03505af8ad2c1b4d3ea19d6057148d320db94f02efbe1fa56_prof);

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
        return array (  157 => 42,  152 => 40,  147 => 38,  142 => 36,  137 => 34,  132 => 32,  124 => 26,  117 => 24,  107 => 21,  103 => 20,  95 => 19,  92 => 18,  87 => 17,  77 => 10,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}{{ article.title }}{% endblock %} 

{% block body %}

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


{% endblock %}\t", "blog/single.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\blog\\single.html.twig");
    }
}
