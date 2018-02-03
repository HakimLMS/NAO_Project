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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45dffd2ea2d292617b89f114288bfda705dcd26d771387a4e7f9dd46d219a202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45dffd2ea2d292617b89f114288bfda705dcd26d771387a4e7f9dd46d219a202->enter($__internal_45dffd2ea2d292617b89f114288bfda705dcd26d771387a4e7f9dd46d219a202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/single.html.twig"));

        $__internal_d94f75367dc8a0f4445b5fc751387a38276a1948ad8818298716bad5ce7597a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d94f75367dc8a0f4445b5fc751387a38276a1948ad8818298716bad5ce7597a6->enter($__internal_d94f75367dc8a0f4445b5fc751387a38276a1948ad8818298716bad5ce7597a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/single.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45dffd2ea2d292617b89f114288bfda705dcd26d771387a4e7f9dd46d219a202->leave($__internal_45dffd2ea2d292617b89f114288bfda705dcd26d771387a4e7f9dd46d219a202_prof);

        
        $__internal_d94f75367dc8a0f4445b5fc751387a38276a1948ad8818298716bad5ce7597a6->leave($__internal_d94f75367dc8a0f4445b5fc751387a38276a1948ad8818298716bad5ce7597a6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2db31e6b011789db7dae550ca5d3a4c77c10e4bd64cfe93d430d1f1d9d926201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db31e6b011789db7dae550ca5d3a4c77c10e4bd64cfe93d430d1f1d9d926201->enter($__internal_2db31e6b011789db7dae550ca5d3a4c77c10e4bd64cfe93d430d1f1d9d926201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3f482536cc609e999bca5c4c51ac22bc5437d943d95f33f6b7f7f26a182e7864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f482536cc609e999bca5c4c51ac22bc5437d943d95f33f6b7f7f26a182e7864->enter($__internal_3f482536cc609e999bca5c4c51ac22bc5437d943d95f33f6b7f7f26a182e7864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->getSourceContext()); })()), "article", array()), "title", array()), "html", null, true);
        
        $__internal_3f482536cc609e999bca5c4c51ac22bc5437d943d95f33f6b7f7f26a182e7864->leave($__internal_3f482536cc609e999bca5c4c51ac22bc5437d943d95f33f6b7f7f26a182e7864_prof);

        
        $__internal_2db31e6b011789db7dae550ca5d3a4c77c10e4bd64cfe93d430d1f1d9d926201->leave($__internal_2db31e6b011789db7dae550ca5d3a4c77c10e4bd64cfe93d430d1f1d9d926201_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9933b85a50cc52b6a700eb99e817bc5d43c19f1487fa21e05a43183d473f9048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9933b85a50cc52b6a700eb99e817bc5d43c19f1487fa21e05a43183d473f9048->enter($__internal_9933b85a50cc52b6a700eb99e817bc5d43c19f1487fa21e05a43183d473f9048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8bcebed3c125494eed9ec44d5fd16ac910a3ef8057b11137526d5e5d7af46f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bcebed3c125494eed9ec44d5fd16ac910a3ef8057b11137526d5e5d7af46f85->enter($__internal_8bcebed3c125494eed9ec44d5fd16ac910a3ef8057b11137526d5e5d7af46f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t
\t<div class=\"container-fluid\" id=\"blog-single\">
\t\t
\t\t<div class=\"article-img\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("build/img/" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 9, $this->getSourceContext()); })()), "article", array()), "image", array()))), "html", null, true);
        echo "\"></div>

\t\t<div class=\"container\" id=\"block-article\">
\t\t\t<h2>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 12, $this->getSourceContext()); })()), "article", array()), "title", array()), "html", null, true);
        echo "</h2>

\t\t\t<br>

\t\t\t<div class=\"article-content\">
\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 17, $this->getSourceContext()); })()), "article", array()), "content", array()), "html", null, true);
        echo "
\t\t\t</div>

\t\t\t<br>

\t\t\t<div id=\"block-date\">
\t\t\t\tEcrit le ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 23, $this->getSourceContext()); })()), "article", array()), "dateArticle", array()), "d/m/Y"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 35, $this->getSourceContext()); })()), "article", array()), "comments", array()));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 51, $this->getSourceContext()); })()), "form", array()), 'form_start');
        echo "

\t\t\t\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 53, $this->getSourceContext()); })()), "form", array()), 'errors');
        echo "

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 56, $this->getSourceContext()); })()), "form", array()), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => 5)));
        // line 58
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 61, $this->getSourceContext()); })()), "form", array()), "Poster", array()), 'row', array("attr" => array("class" => "btn")));
        echo "

\t\t\t\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 63, $this->getSourceContext()); })()), "form", array()), 'rest');
        echo "

\t\t\t\t\t\t";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 65, $this->getSourceContext()); })()), "form", array()), 'form_end');
        echo "
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>

";
        
        $__internal_8bcebed3c125494eed9ec44d5fd16ac910a3ef8057b11137526d5e5d7af46f85->leave($__internal_8bcebed3c125494eed9ec44d5fd16ac910a3ef8057b11137526d5e5d7af46f85_prof);

        
        $__internal_9933b85a50cc52b6a700eb99e817bc5d43c19f1487fa21e05a43183d473f9048->leave($__internal_9933b85a50cc52b6a700eb99e817bc5d43c19f1487fa21e05a43183d473f9048_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_59d881ff1b3549f4e1d72299f4f57c0f1554f5fbbbb4032aa9fec51efdd9d1d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d881ff1b3549f4e1d72299f4f57c0f1554f5fbbbb4032aa9fec51efdd9d1d0->enter($__internal_59d881ff1b3549f4e1d72299f4f57c0f1554f5fbbbb4032aa9fec51efdd9d1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7d6a51548e915ebd35d568ba613e9805c5f5274f4e2c3797be3373427ca2b4f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6a51548e915ebd35d568ba613e9805c5f5274f4e2c3797be3373427ca2b4f9->enter($__internal_7d6a51548e915ebd35d568ba613e9805c5f5274f4e2c3797be3373427ca2b4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/singlepage.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7d6a51548e915ebd35d568ba613e9805c5f5274f4e2c3797be3373427ca2b4f9->leave($__internal_7d6a51548e915ebd35d568ba613e9805c5f5274f4e2c3797be3373427ca2b4f9_prof);

        
        $__internal_59d881ff1b3549f4e1d72299f4f57c0f1554f5fbbbb4032aa9fec51efdd9d1d0->leave($__internal_59d881ff1b3549f4e1d72299f4f57c0f1554f5fbbbb4032aa9fec51efdd9d1d0_prof);

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
        return array (  218 => 76,  209 => 75,  189 => 65,  184 => 63,  179 => 61,  174 => 58,  172 => 56,  166 => 53,  161 => 51,  152 => 44,  145 => 42,  135 => 39,  131 => 38,  123 => 37,  120 => 36,  115 => 35,  111 => 34,  97 => 23,  88 => 17,  80 => 12,  74 => 9,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}{{ data.article.title }}{% endblock %}    

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
\t\t\t\tEcrit le {{ data.article.dateArticle|date(\"d/m/Y\") }}
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
{% endblock %}", "blog/single.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\blog\\single.html.twig");
    }
}
