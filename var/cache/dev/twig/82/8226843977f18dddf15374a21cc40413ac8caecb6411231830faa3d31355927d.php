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
        $__internal_d0d00893f77840315ac484a0f3b7de134cd4464f0aee617d28ccf0e3beabc532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d00893f77840315ac484a0f3b7de134cd4464f0aee617d28ccf0e3beabc532->enter($__internal_d0d00893f77840315ac484a0f3b7de134cd4464f0aee617d28ccf0e3beabc532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/single.html.twig"));

        $__internal_3c3eeaac9c9771bededb5a236d72c83351e44443e5f60c1bef92d5697babec80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c3eeaac9c9771bededb5a236d72c83351e44443e5f60c1bef92d5697babec80->enter($__internal_3c3eeaac9c9771bededb5a236d72c83351e44443e5f60c1bef92d5697babec80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/single.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0d00893f77840315ac484a0f3b7de134cd4464f0aee617d28ccf0e3beabc532->leave($__internal_d0d00893f77840315ac484a0f3b7de134cd4464f0aee617d28ccf0e3beabc532_prof);

        
        $__internal_3c3eeaac9c9771bededb5a236d72c83351e44443e5f60c1bef92d5697babec80->leave($__internal_3c3eeaac9c9771bededb5a236d72c83351e44443e5f60c1bef92d5697babec80_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_64c8083bab94f9815d13d8143ec0b65a69ac369762ca4aa03869b3cbbc0c9e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64c8083bab94f9815d13d8143ec0b65a69ac369762ca4aa03869b3cbbc0c9e8d->enter($__internal_64c8083bab94f9815d13d8143ec0b65a69ac369762ca4aa03869b3cbbc0c9e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_18e2d1753811383fecc25589fc25a672caef55c9603d3868f491d0ebab89c5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e2d1753811383fecc25589fc25a672caef55c9603d3868f491d0ebab89c5a9->enter($__internal_18e2d1753811383fecc25589fc25a672caef55c9603d3868f491d0ebab89c5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 3, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        
        $__internal_18e2d1753811383fecc25589fc25a672caef55c9603d3868f491d0ebab89c5a9->leave($__internal_18e2d1753811383fecc25589fc25a672caef55c9603d3868f491d0ebab89c5a9_prof);

        
        $__internal_64c8083bab94f9815d13d8143ec0b65a69ac369762ca4aa03869b3cbbc0c9e8d->leave($__internal_64c8083bab94f9815d13d8143ec0b65a69ac369762ca4aa03869b3cbbc0c9e8d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f08247802cf6d9a0fdc1a22c330bd45f398fdd66b545342cd15fe9c997eaa2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f08247802cf6d9a0fdc1a22c330bd45f398fdd66b545342cd15fe9c997eaa2a->enter($__internal_5f08247802cf6d9a0fdc1a22c330bd45f398fdd66b545342cd15fe9c997eaa2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9bc47e38308d5e507ac561bb449beb5b6e1bb9b55e0a15b639c465aeaefc121c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc47e38308d5e507ac561bb449beb5b6e1bb9b55e0a15b639c465aeaefc121c->enter($__internal_9bc47e38308d5e507ac561bb449beb5b6e1bb9b55e0a15b639c465aeaefc121c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t
\t<div class=\"container-fluid\" id=\"blog-single\">
\t\t<!--<img src='/";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 8, $this->getSourceContext()); })()), "image", array()), "html", null, true);
        echo "'>-->
\t\t<div class=\"article-img\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/oies.jpg"), "html", null, true);
        echo "\"></div>

\t\t<div class=\"container\" id=\"block-article\">
\t\t\t<h2>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 12, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h2>

\t\t\t<br>

\t\t\t<div class=\"article-content\">
\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 17, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "
\t\t\t</div>

\t\t\t<br>

\t\t\t<div id=\"block-date\">
\t\t\t\tEcrit le ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 23, $this->getSourceContext()); })()), "dateArticle", array()), "m/d/Y"), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>\t

\t\t<div id=\"purple-bar\"></div>

\t\t<br>

\t\t<div class=\"container\" id=\"block-comments\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 offset-md-2 col-md-8\">
\t\t\t\t\t<img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/bubbles-comment.svg"), "html", null, true);
        echo "\" width=\"35px\" height=\"26px\">
\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 35, $this->getSourceContext()); })()), "comments", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 36
            echo "\t\t\t\t\t\t<div class=\"block-comment\">
\t\t\t\t\t\t\t<p class=\"comment-author\">Par ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "author", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "author", array()), "lastname", array()))), "html", null, true);
            echo ". <span class=\"author-type\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "author", array()), "type", array()))), "html", null, true);
            echo "</span></p>
\t\t\t\t\t\t\t<p>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "content", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p class=\"comment-date\">Posté le ";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "dateComment", array()), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "dateComment", array()), "H:i"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "\t\t\t\t\t\t<p>Aucun commentaire.</p>\t
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
\t\t\t\t\t<br>

\t\t\t\t\t<div id=\"block-form-comment\">
\t\t\t\t\t\t<h3>Ecrire un commentaire</h3>
\t\t\t\t\t\t<p><!-- Nom personne connecté + rang--></p>

\t\t\t\t\t\t";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), 'form_start');
        echo "

\t\t\t\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'errors');
        echo "

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->getSourceContext()); })()), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => 5)));
        // line 58
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), "Poster", array()), 'row', array("attr" => array("class" => "btn")));
        echo "

\t\t\t\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->getSourceContext()); })()), 'rest');
        echo "

\t\t\t\t\t\t";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->getSourceContext()); })()), 'form_end');
        echo "
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>

";
        
        $__internal_9bc47e38308d5e507ac561bb449beb5b6e1bb9b55e0a15b639c465aeaefc121c->leave($__internal_9bc47e38308d5e507ac561bb449beb5b6e1bb9b55e0a15b639c465aeaefc121c_prof);

        
        $__internal_5f08247802cf6d9a0fdc1a22c330bd45f398fdd66b545342cd15fe9c997eaa2a->leave($__internal_5f08247802cf6d9a0fdc1a22c330bd45f398fdd66b545342cd15fe9c997eaa2a_prof);

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
        return array (  191 => 65,  186 => 63,  181 => 61,  176 => 58,  174 => 56,  168 => 53,  163 => 51,  154 => 44,  147 => 42,  137 => 39,  133 => 38,  125 => 37,  122 => 36,  117 => 35,  113 => 34,  99 => 23,  90 => 17,  82 => 12,  76 => 9,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}{{ article.title }}{% endblock %} 

{% block body %}
\t
\t<div class=\"container-fluid\" id=\"blog-single\">
\t\t<!--<img src='/{{article.image }}'>-->
\t\t<div class=\"article-img\"><img src=\"{{ asset('build/img/oies.jpg') }}\"></div>

\t\t<div class=\"container\" id=\"block-article\">
\t\t\t<h2>{{ article.title }}</h2>

\t\t\t<br>

\t\t\t<div class=\"article-content\">
\t\t\t\t{{ article.content }}
\t\t\t</div>

\t\t\t<br>

\t\t\t<div id=\"block-date\">
\t\t\t\tEcrit le {{ article.dateArticle|date(\"m/d/Y\") }}
\t\t\t</div>
\t\t</div>\t

\t\t<div id=\"purple-bar\"></div>

\t\t<br>

\t\t<div class=\"container\" id=\"block-comments\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 offset-md-2 col-md-8\">
\t\t\t\t\t<img src=\"{{ asset('build/img/bubbles-comment.svg') }}\" width=\"35px\" height=\"26px\">
\t\t\t\t\t{% for comment in article.comments %}
\t\t\t\t\t\t<div class=\"block-comment\">
\t\t\t\t\t\t\t<p class=\"comment-author\">Par {{ comment.author.firstname }} {{ comment.author.lastname|upper|first }}. <span class=\"author-type\">{{ comment.author.type|upper|first }}</span></p>
\t\t\t\t\t\t\t<p>{{ comment.content }}</p>
\t\t\t\t\t\t\t<p class=\"comment-date\">Posté le {{ comment.dateComment|date('d/m/Y') }} à {{ comment.dateComment|date('H:i') }}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p>Aucun commentaire.</p>\t
\t\t\t\t\t{% endfor %}

\t\t\t\t\t<br>

\t\t\t\t\t<div id=\"block-form-comment\">
\t\t\t\t\t\t<h3>Ecrire un commentaire</h3>
\t\t\t\t\t\t<p><!-- Nom personne connecté + rang--></p>

\t\t\t\t\t\t{{ form_start(form) }}

\t\t\t\t\t\t{{ form_errors(form) }}

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_widget(form.content, {'attr': {
\t\t\t\t\t\t\t'class': 'form-control',
\t\t\t\t\t\t\t'rows': 5}}) }}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t{{ form_row(form.Poster, {'attr': {'class': 'btn'}}) }}

\t\t\t\t\t\t{{ form_rest(form) }}

\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>

{% endblock %}\t", "blog/single.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\blog\\single.html.twig");
    }
}
