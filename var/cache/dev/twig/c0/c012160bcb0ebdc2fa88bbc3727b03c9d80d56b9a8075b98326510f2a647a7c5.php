<?php

/* blog/singleanonymous.html.twig */
class __TwigTemplate_e565915566b66a65d0c780d54b0b8987cd872ab6ad740bf0c94648e745bb14a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/singleanonymous.html.twig", 1);
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
        $__internal_2d6971bde577813639ad4dca791c1e97fcb89ba0beaaef1cb5bb4c97d5e70795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d6971bde577813639ad4dca791c1e97fcb89ba0beaaef1cb5bb4c97d5e70795->enter($__internal_2d6971bde577813639ad4dca791c1e97fcb89ba0beaaef1cb5bb4c97d5e70795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/singleanonymous.html.twig"));

        $__internal_91e9c59ade2de8e68d44ea869cb9b4784d5d9596b9695541ff3defbb4e4d1b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e9c59ade2de8e68d44ea869cb9b4784d5d9596b9695541ff3defbb4e4d1b56->enter($__internal_91e9c59ade2de8e68d44ea869cb9b4784d5d9596b9695541ff3defbb4e4d1b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/singleanonymous.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d6971bde577813639ad4dca791c1e97fcb89ba0beaaef1cb5bb4c97d5e70795->leave($__internal_2d6971bde577813639ad4dca791c1e97fcb89ba0beaaef1cb5bb4c97d5e70795_prof);

        
        $__internal_91e9c59ade2de8e68d44ea869cb9b4784d5d9596b9695541ff3defbb4e4d1b56->leave($__internal_91e9c59ade2de8e68d44ea869cb9b4784d5d9596b9695541ff3defbb4e4d1b56_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b56dfe28b080046432cc92f83c112fdb04d4522e9a347593980324b020d5d8bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b56dfe28b080046432cc92f83c112fdb04d4522e9a347593980324b020d5d8bf->enter($__internal_b56dfe28b080046432cc92f83c112fdb04d4522e9a347593980324b020d5d8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_33771ca74b5fab6339b628e77dd4554a111141c1704b6da026a1b5068ec8c583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33771ca74b5fab6339b628e77dd4554a111141c1704b6da026a1b5068ec8c583->enter($__internal_33771ca74b5fab6339b628e77dd4554a111141c1704b6da026a1b5068ec8c583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        
        $__internal_33771ca74b5fab6339b628e77dd4554a111141c1704b6da026a1b5068ec8c583->leave($__internal_33771ca74b5fab6339b628e77dd4554a111141c1704b6da026a1b5068ec8c583_prof);

        
        $__internal_b56dfe28b080046432cc92f83c112fdb04d4522e9a347593980324b020d5d8bf->leave($__internal_b56dfe28b080046432cc92f83c112fdb04d4522e9a347593980324b020d5d8bf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_32526f0e1a9db9e5da3a3525f3f71c3a8af2cff3b025d4b5d6862b25b78d3b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32526f0e1a9db9e5da3a3525f3f71c3a8af2cff3b025d4b5d6862b25b78d3b59->enter($__internal_32526f0e1a9db9e5da3a3525f3f71c3a8af2cff3b025d4b5d6862b25b78d3b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3fa18a0fdf854a29da25aba9cb017d73bb08e47e85c726926e9dbe806c0404b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3fa18a0fdf854a29da25aba9cb017d73bb08e47e85c726926e9dbe806c0404b->enter($__internal_a3fa18a0fdf854a29da25aba9cb017d73bb08e47e85c726926e9dbe806c0404b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container-fluid\" id=\"blog-single\">
\t\t
\t\t<div class=\"article-img\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("build/img/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 8, $this->getSourceContext()); })()), "image", array()))), "html", null, true);
        echo "\"></div>

\t\t<div class=\"container\" id=\"block-article\">
\t\t\t<h2>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 11, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h2>

\t\t\t<br>

\t\t\t<div class=\"article-content\">
\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 16, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "
\t\t\t</div>

\t\t\t<br>

\t\t\t<div id=\"block-date\">
\t\t\t\tEcrit le ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 22, $this->getSourceContext()); })()), "dateArticle", array()), "d/m/Y"), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>\t

\t\t<div id=\"purple-bar\"></div>

\t\t<br>

\t\t<div class=\"container\" id=\"block-comments\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 offset-md-2 col-md-8\">
\t\t\t\t\t<img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/bubbles-comment.svg"), "html", null, true);
        echo "\" width=\"35px\" height=\"26px\">
\t\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 34, $this->getSourceContext()); })()), "comments", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 35
            echo "\t\t\t\t\t\t<div class=\"block-comment\">
\t\t\t\t\t\t\t<p class=\"comment-author\">Par ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "author", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "author", array()), "lastname", array()))), "html", null, true);
            echo ". <span class=\"author-type\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "author", array()), "type", array()))), "html", null, true);
            echo "</span></p>
\t\t\t\t\t\t\t<p>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "content", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p class=\"comment-date\">Posté le ";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "dateComment", array()), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "dateComment", array()), "H:i"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "\t\t\t\t\t\t<p>Aucun commentaire.</p>\t
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
\t\t\t\t\t<br>

\t\t\t\t\t<div id=\"block-comment-anonymous\">
\t\t\t\t            <h3>Ecrire un commentaire</h3>
\t\t\t\t            <div class=\"container\">
\t\t\t\t            \t<div class=\"row\">
\t\t\t\t            \t\t<a class=\"col-12 col-md-6\" href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\"><button class=\"btn\">Se connecter</button></a>
\t\t\t\t           \t\t\t<a class=\"col-12 col-md-6\" href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subscribe");
        echo "\"><button class=\"btn\">S'inscrire</button></a>
\t\t\t\t            \t</div>
\t\t\t\t            </div>
\t\t\t\t            
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>\t\t\t\t


";
        
        $__internal_a3fa18a0fdf854a29da25aba9cb017d73bb08e47e85c726926e9dbe806c0404b->leave($__internal_a3fa18a0fdf854a29da25aba9cb017d73bb08e47e85c726926e9dbe806c0404b_prof);

        
        $__internal_32526f0e1a9db9e5da3a3525f3f71c3a8af2cff3b025d4b5d6862b25b78d3b59->leave($__internal_32526f0e1a9db9e5da3a3525f3f71c3a8af2cff3b025d4b5d6862b25b78d3b59_prof);

    }

    public function getTemplateName()
    {
        return "blog/singleanonymous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 51,  159 => 50,  150 => 43,  143 => 41,  133 => 38,  129 => 37,  121 => 36,  118 => 35,  113 => 34,  109 => 33,  95 => 22,  86 => 16,  78 => 11,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}{{ data.title }}{% endblock %}

{% block body %}
    <div class=\"container-fluid\" id=\"blog-single\">
\t\t
\t\t<div class=\"article-img\"><img src=\"{{ asset('build/img/'~data.image) }}\"></div>

\t\t<div class=\"container\" id=\"block-article\">
\t\t\t<h2>{{ data.title }}</h2>

\t\t\t<br>

\t\t\t<div class=\"article-content\">
\t\t\t\t{{ data.content }}
\t\t\t</div>

\t\t\t<br>

\t\t\t<div id=\"block-date\">
\t\t\t\tEcrit le {{ data.dateArticle|date(\"d/m/Y\") }}
\t\t\t</div>
\t\t</div>\t

\t\t<div id=\"purple-bar\"></div>

\t\t<br>

\t\t<div class=\"container\" id=\"block-comments\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 offset-md-2 col-md-8\">
\t\t\t\t\t<img src=\"{{ asset('build/img/bubbles-comment.svg') }}\" width=\"35px\" height=\"26px\">
\t\t\t\t\t{% for comment in data.comments %}
\t\t\t\t\t\t<div class=\"block-comment\">
\t\t\t\t\t\t\t<p class=\"comment-author\">Par {{ comment.author.firstname }} {{ comment.author.lastname|upper|first }}. <span class=\"author-type\">{{ comment.author.type|upper|first }}</span></p>
\t\t\t\t\t\t\t<p>{{ comment.content }}</p>
\t\t\t\t\t\t\t<p class=\"comment-date\">Posté le {{ comment.dateComment|date('d/m/Y') }} à {{ comment.dateComment|date('H:i') }}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<p>Aucun commentaire.</p>\t
\t\t\t\t\t{% endfor %}

\t\t\t\t\t<br>

\t\t\t\t\t<div id=\"block-comment-anonymous\">
\t\t\t\t            <h3>Ecrire un commentaire</h3>
\t\t\t\t            <div class=\"container\">
\t\t\t\t            \t<div class=\"row\">
\t\t\t\t            \t\t<a class=\"col-12 col-md-6\" href=\"{{ path('login') }}\"><button class=\"btn\">Se connecter</button></a>
\t\t\t\t           \t\t\t<a class=\"col-12 col-md-6\" href=\"{{ path('subscribe') }}\"><button class=\"btn\">S'inscrire</button></a>
\t\t\t\t            \t</div>
\t\t\t\t            </div>
\t\t\t\t            
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>\t\t\t\t


{% endblock %}\t

", "blog/singleanonymous.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\blog\\singleanonymous.html.twig");
    }
}
