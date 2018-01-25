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
        $__internal_debe1b2092a6c60fc4f5cff5c162103e6e30d1887331b73299a42619ca3dd861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_debe1b2092a6c60fc4f5cff5c162103e6e30d1887331b73299a42619ca3dd861->enter($__internal_debe1b2092a6c60fc4f5cff5c162103e6e30d1887331b73299a42619ca3dd861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/single.html.twig"));

        $__internal_68599950fb5f4cc715861d1402b875a9c3a831934b0c5467f870d75ef782837d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68599950fb5f4cc715861d1402b875a9c3a831934b0c5467f870d75ef782837d->enter($__internal_68599950fb5f4cc715861d1402b875a9c3a831934b0c5467f870d75ef782837d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/single.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_debe1b2092a6c60fc4f5cff5c162103e6e30d1887331b73299a42619ca3dd861->leave($__internal_debe1b2092a6c60fc4f5cff5c162103e6e30d1887331b73299a42619ca3dd861_prof);

        
        $__internal_68599950fb5f4cc715861d1402b875a9c3a831934b0c5467f870d75ef782837d->leave($__internal_68599950fb5f4cc715861d1402b875a9c3a831934b0c5467f870d75ef782837d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3c199270b6339e8c52a843e449c6de59c4b5d8c5d54b0d03400516074724c2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c199270b6339e8c52a843e449c6de59c4b5d8c5d54b0d03400516074724c2e->enter($__internal_f3c199270b6339e8c52a843e449c6de59c4b5d8c5d54b0d03400516074724c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae8c58f7deb584d6432211d68b5a104a01cac1bec5f3d227e3c034f03202b790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae8c58f7deb584d6432211d68b5a104a01cac1bec5f3d227e3c034f03202b790->enter($__internal_ae8c58f7deb584d6432211d68b5a104a01cac1bec5f3d227e3c034f03202b790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("build/img/" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 8, $this->getSourceContext()); })()), "article", array()), "image", array()))), "html", null, true);
        echo "\">
\t<h2>Titre : ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 9, $this->getSourceContext()); })()), "article", array()), "title", array()), "html", null, true);
        echo "</h2>

\t<div>
\t\t";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 12, $this->getSourceContext()); })()), "article", array()), "content", array()), "html", null, true);
        echo "
\t</div>

\t<hr>

\t<br>

\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 19, $this->getSourceContext()); })()), "article", array()), "comments", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 20
            echo "\t\t<div style=\"border: 1px solid black;\">
\t\t\t<p>Par <em>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "author", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "author", array()), "lastname", array()))), "html", null, true);
            echo ". </em>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "author", array()), "type", array()), "html", null, true);
            echo "</p>
\t\t\t<p>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "content", array()), "html", null, true);
            echo "</p>
\t\t\t<p>Posté le ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "dateComment", array()), "d/m/Y"), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "dateComment", array()), "H:i"), "html", null, true);
            echo "</p>
\t\t</div>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "\t\t<p>Aucun commentaire.</p>\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
\t<br>

\t<div style=\"background-color: grey; display: inline-block;\">
\t\t<h2>Ecrire un commentaire</h2>

\t\t";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 34, $this->getSourceContext()); })()), "form", array()), 'form_start');
        echo "

\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 36, $this->getSourceContext()); })()), "form", array()), 'errors');
        echo "

\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 38, $this->getSourceContext()); })()), "form", array()), "content", array()), 'row');
        echo "

\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 40, $this->getSourceContext()); })()), "form", array()), "Publier", array()), 'row');
        echo "

\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 42, $this->getSourceContext()); })()), "form", array()), 'rest');
        echo "

\t\t";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 44, $this->getSourceContext()); })()), "form", array()), 'form_end');
        echo "
\t</div>


";
        
        $__internal_ae8c58f7deb584d6432211d68b5a104a01cac1bec5f3d227e3c034f03202b790->leave($__internal_ae8c58f7deb584d6432211d68b5a104a01cac1bec5f3d227e3c034f03202b790_prof);

        
        $__internal_f3c199270b6339e8c52a843e449c6de59c4b5d8c5d54b0d03400516074724c2e->leave($__internal_f3c199270b6339e8c52a843e449c6de59c4b5d8c5d54b0d03400516074724c2e_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_acf2e6a2bf8e31ec5d3e790784d7808b011b77abae92aae08c1ec4f62f0378eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf2e6a2bf8e31ec5d3e790784d7808b011b77abae92aae08c1ec4f62f0378eb->enter($__internal_acf2e6a2bf8e31ec5d3e790784d7808b011b77abae92aae08c1ec4f62f0378eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c0d15433f53b0446645f94574c7906d646dac821945fb4410b6c7f8674deec0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d15433f53b0446645f94574c7906d646dac821945fb4410b6c7f8674deec0c->enter($__internal_c0d15433f53b0446645f94574c7906d646dac821945fb4410b6c7f8674deec0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/singlepage.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c0d15433f53b0446645f94574c7906d646dac821945fb4410b6c7f8674deec0c->leave($__internal_c0d15433f53b0446645f94574c7906d646dac821945fb4410b6c7f8674deec0c_prof);

        
        $__internal_acf2e6a2bf8e31ec5d3e790784d7808b011b77abae92aae08c1ec4f62f0378eb->leave($__internal_acf2e6a2bf8e31ec5d3e790784d7808b011b77abae92aae08c1ec4f62f0378eb_prof);

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
        return array (  165 => 50,  156 => 49,  141 => 44,  136 => 42,  131 => 40,  126 => 38,  121 => 36,  116 => 34,  108 => 28,  101 => 26,  91 => 23,  87 => 22,  79 => 21,  76 => 20,  71 => 19,  61 => 12,  55 => 9,  50 => 8,  41 => 7,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

    



{% block body %}
    <img src=\"{{asset('build/img/'~data.article.image)}}\">
\t<h2>Titre : {{ data.article.title }}</h2>

\t<div>
\t\t{{ data.article.content }}
\t</div>

\t<hr>

\t<br>

\t{% for comment in data.article.comments %}
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

\t\t{{ form_start(data.form) }}

\t\t{{ form_errors(data.form) }}

\t\t{{ form_row(data.form.content) }}

\t\t{{ form_row(data.form.Publier) }}

\t\t{{ form_rest(data.form) }}

\t\t{{ form_end(data.form) }}
\t</div>


{% endblock %}\t
{% block javascripts %}
        <script type=\"text/javascript\" src=\"{{asset('build/js/singlepage.js')}}\"></script>
{% endblock %}", "blog/single.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\blog\\single.html.twig");
    }
}
