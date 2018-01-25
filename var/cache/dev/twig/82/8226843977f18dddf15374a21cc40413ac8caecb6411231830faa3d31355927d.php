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
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63e2b8acc07a97fbaf124778952b00102dc93987a86476b1f1d500c4424e7260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e2b8acc07a97fbaf124778952b00102dc93987a86476b1f1d500c4424e7260->enter($__internal_63e2b8acc07a97fbaf124778952b00102dc93987a86476b1f1d500c4424e7260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/single.html.twig"));

        $__internal_f04626d045759f7bc9aa23bf82a7d3a805650c343c2bdffeb1bd8f0c2b434f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04626d045759f7bc9aa23bf82a7d3a805650c343c2bdffeb1bd8f0c2b434f94->enter($__internal_f04626d045759f7bc9aa23bf82a7d3a805650c343c2bdffeb1bd8f0c2b434f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/single.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63e2b8acc07a97fbaf124778952b00102dc93987a86476b1f1d500c4424e7260->leave($__internal_63e2b8acc07a97fbaf124778952b00102dc93987a86476b1f1d500c4424e7260_prof);

        
        $__internal_f04626d045759f7bc9aa23bf82a7d3a805650c343c2bdffeb1bd8f0c2b434f94->leave($__internal_f04626d045759f7bc9aa23bf82a7d3a805650c343c2bdffeb1bd8f0c2b434f94_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a755ae236a14b945f48b0be523e1afe74b3b1664b411371c2caa7fe3cd3a7e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a755ae236a14b945f48b0be523e1afe74b3b1664b411371c2caa7fe3cd3a7e7b->enter($__internal_a755ae236a14b945f48b0be523e1afe74b3b1664b411371c2caa7fe3cd3a7e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_511f9f99ece5094156916099442f0cc140bda73fae720c7c44bc6117c421407e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511f9f99ece5094156916099442f0cc140bda73fae720c7c44bc6117c421407e->enter($__internal_511f9f99ece5094156916099442f0cc140bda73fae720c7c44bc6117c421407e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t
\t<div class=\"container-fluid\" id=\"blog-single\">
\t\t
\t\t<div class=\"article-img\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("build/img/" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 11, $this->getSourceContext()); })()), "article", array()), "image", array()))), "html", null, true);
        echo "\"></div>

\t\t<div class=\"container\" id=\"block-article\">
\t\t\t<h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 14, $this->getSourceContext()); })()), "article", array()), "title", array()), "html", null, true);
        echo "</h2>

\t\t\t<br>

\t\t\t<div class=\"article-content\">
\t\t\t\t";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 19, $this->getSourceContext()); })()), "article", array()), "content", array()), "html", null, true);
        echo "
\t\t\t</div>

\t\t\t<br>

\t\t\t<div id=\"block-date\">
\t\t\t\tEcrit le ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 25, $this->getSourceContext()); })()), "article", array()), "dateArticle", array()), "m/d/Y"), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>\t

\t\t<div id=\"purple-bar\"></div>

\t\t<br>

\t\t<div class=\"container\" id=\"block-comments\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 offset-md-2 col-md-8\">
\t\t\t\t\t<img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/bubbles-comment.svg"), "html", null, true);
        echo "\" width=\"35px\" height=\"26px\">
\t\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 37, $this->getSourceContext()); })()), "article", array()), "comments", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 38
            echo "\t\t\t\t\t\t<div class=\"block-comment\">
\t\t\t\t\t\t\t<p class=\"comment-author\">Par ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "author", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "author", array()), "lastname", array()))), "html", null, true);
            echo ". <span class=\"author-type\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "author", array()), "type", array()))), "html", null, true);
            echo "</span></p>
\t\t\t\t\t\t\t<p>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "content", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p class=\"comment-date\">Posté le ";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "dateComment", array()), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "dateComment", array()), "H:i"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "\t\t\t\t\t\t<p>Aucun commentaire.</p>\t
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
\t\t\t\t\t<br>

\t\t\t\t\t<div id=\"block-form-comment\">
\t\t\t\t\t\t<h3>Ecrire un commentaire</h3>
\t\t\t\t\t\t<p><!-- Nom personne connecté + rang--></p>

\t\t\t\t\t\t";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 53, $this->getSourceContext()); })()), "form", array()), 'form_start');
        echo "

\t\t\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 55, $this->getSourceContext()); })()), "form", array()), 'errors');
        echo "

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 58, $this->getSourceContext()); })()), "form", array()), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => 5)));
        // line 60
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 63, $this->getSourceContext()); })()), "form", array()), "Poster", array()), 'row', array("attr" => array("class" => "btn")));
        echo "

\t\t\t\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 65, $this->getSourceContext()); })()), "form", array()), 'rest');
        echo "

\t\t\t\t\t\t";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 67, $this->getSourceContext()); })()), "form", array()), 'form_end');
        echo "
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>

";
        
        $__internal_511f9f99ece5094156916099442f0cc140bda73fae720c7c44bc6117c421407e->leave($__internal_511f9f99ece5094156916099442f0cc140bda73fae720c7c44bc6117c421407e_prof);

        
        $__internal_a755ae236a14b945f48b0be523e1afe74b3b1664b411371c2caa7fe3cd3a7e7b->leave($__internal_a755ae236a14b945f48b0be523e1afe74b3b1664b411371c2caa7fe3cd3a7e7b_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ddda3685cb511d99e0226be2c0c689ddcd5c1784eb2e9e3e5d46727ad6a8d564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddda3685cb511d99e0226be2c0c689ddcd5c1784eb2e9e3e5d46727ad6a8d564->enter($__internal_ddda3685cb511d99e0226be2c0c689ddcd5c1784eb2e9e3e5d46727ad6a8d564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_13bdfec1ad0bc47ed13069c5760d669297cea953284abbb3fc05d57c5972a62c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13bdfec1ad0bc47ed13069c5760d669297cea953284abbb3fc05d57c5972a62c->enter($__internal_13bdfec1ad0bc47ed13069c5760d669297cea953284abbb3fc05d57c5972a62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/singlepage.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_13bdfec1ad0bc47ed13069c5760d669297cea953284abbb3fc05d57c5972a62c->leave($__internal_13bdfec1ad0bc47ed13069c5760d669297cea953284abbb3fc05d57c5972a62c_prof);

        
        $__internal_ddda3685cb511d99e0226be2c0c689ddcd5c1784eb2e9e3e5d46727ad6a8d564->leave($__internal_ddda3685cb511d99e0226be2c0c689ddcd5c1784eb2e9e3e5d46727ad6a8d564_prof);

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
        return array (  199 => 78,  190 => 77,  170 => 67,  165 => 65,  160 => 63,  155 => 60,  153 => 58,  147 => 55,  142 => 53,  133 => 46,  126 => 44,  116 => 41,  112 => 40,  104 => 39,  101 => 38,  96 => 37,  92 => 36,  78 => 25,  69 => 19,  61 => 14,  55 => 11,  50 => 8,  41 => 7,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

    



{% block body %}
\t
\t<div class=\"container-fluid\" id=\"blog-single\">
\t\t
\t\t<div class=\"article-img\"><img src=\"{{ asset('build/img/'~data.article.image) }}\"></div>

\t\t<div class=\"container\" id=\"block-article\">
\t\t\t<h2>{{ data.article.title }}</h2>

\t\t\t<br>

\t\t\t<div class=\"article-content\">
\t\t\t\t{{ data.article.content }}
\t\t\t</div>

\t\t\t<br>

\t\t\t<div id=\"block-date\">
\t\t\t\tEcrit le {{ data.article.dateArticle|date(\"m/d/Y\") }}
\t\t\t</div>
\t\t</div>\t

\t\t<div id=\"purple-bar\"></div>

\t\t<br>

\t\t<div class=\"container\" id=\"block-comments\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 offset-md-2 col-md-8\">
\t\t\t\t\t<img src=\"{{ asset('build/img/bubbles-comment.svg') }}\" width=\"35px\" height=\"26px\">
\t\t\t\t\t{% for comment in data.article.comments %}
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

\t\t\t\t\t\t{{ form_start(data.form) }}

\t\t\t\t\t\t{{ form_errors(data.form) }}

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{{ form_widget(data.form.content, {'attr': {
\t\t\t\t\t\t\t'class': 'form-control',
\t\t\t\t\t\t\t'rows': 5}}) }}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t{{ form_row(data.form.Poster, {'attr': {'class': 'btn'}}) }}

\t\t\t\t\t\t{{ form_rest(data.form) }}

\t\t\t\t\t\t{{ form_end(data.form) }}
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>

{% endblock %}\t
{% block javascripts %}
        <script type=\"text/javascript\" src=\"{{asset('build/js/singlepage.js')}}\"></script>
{% endblock %}", "blog/single.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\blog\\single.html.twig");
    }
}
