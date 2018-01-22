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
        $__internal_9e4747fae6cc6bddd98dd10a58a189f3db1c33d36bdd3fb5c2b53f490db4f7dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e4747fae6cc6bddd98dd10a58a189f3db1c33d36bdd3fb5c2b53f490db4f7dc->enter($__internal_9e4747fae6cc6bddd98dd10a58a189f3db1c33d36bdd3fb5c2b53f490db4f7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/singleanonymous.html.twig"));

        $__internal_4ad48e16dd15395ac5ad80b59fe8a08b08a37596e88892ba34409d519bdf8873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad48e16dd15395ac5ad80b59fe8a08b08a37596e88892ba34409d519bdf8873->enter($__internal_4ad48e16dd15395ac5ad80b59fe8a08b08a37596e88892ba34409d519bdf8873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/singleanonymous.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e4747fae6cc6bddd98dd10a58a189f3db1c33d36bdd3fb5c2b53f490db4f7dc->leave($__internal_9e4747fae6cc6bddd98dd10a58a189f3db1c33d36bdd3fb5c2b53f490db4f7dc_prof);

        
        $__internal_4ad48e16dd15395ac5ad80b59fe8a08b08a37596e88892ba34409d519bdf8873->leave($__internal_4ad48e16dd15395ac5ad80b59fe8a08b08a37596e88892ba34409d519bdf8873_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_459f9164f0bbdf0b43d2c2c157f4ada3419ada5ff5e3611e0c1478be8353e730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459f9164f0bbdf0b43d2c2c157f4ada3419ada5ff5e3611e0c1478be8353e730->enter($__internal_459f9164f0bbdf0b43d2c2c157f4ada3419ada5ff5e3611e0c1478be8353e730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6715f374490845aa9326d43ac2635b689cd898f9df7b2800e5c499c9ffc8cab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6715f374490845aa9326d43ac2635b689cd898f9df7b2800e5c499c9ffc8cab1->enter($__internal_6715f374490845aa9326d43ac2635b689cd898f9df7b2800e5c499c9ffc8cab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("build/img/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 8, $this->getSourceContext()); })()), "image", array()))), "html", null, true);
        echo "\">
\t<h2>Titre : ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 9, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h2>

\t<div>
\t\t";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 12, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "
\t</div>

\t<hr>

\t<br>

\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 19, $this->getSourceContext()); })()), "comments", array()));
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
            <h2>Ecrire un commentaire</h2>
            <input type=\"submit\" onclick=\"window.location ='";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "';\" value='Se connecter'/>
            <input type=\"submit\" onclick=\"window.location='";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("subscribe");
        echo "';\" value=\"S'inscrire\"/>
\t</div>


";
        
        $__internal_6715f374490845aa9326d43ac2635b689cd898f9df7b2800e5c499c9ffc8cab1->leave($__internal_6715f374490845aa9326d43ac2635b689cd898f9df7b2800e5c499c9ffc8cab1_prof);

        
        $__internal_459f9164f0bbdf0b43d2c2c157f4ada3419ada5ff5e3611e0c1478be8353e730->leave($__internal_459f9164f0bbdf0b43d2c2c157f4ada3419ada5ff5e3611e0c1478be8353e730_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_76e4790f679cd2afa290b5e8280c2b49a5be9c132cce8aa868e4be751d43006f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e4790f679cd2afa290b5e8280c2b49a5be9c132cce8aa868e4be751d43006f->enter($__internal_76e4790f679cd2afa290b5e8280c2b49a5be9c132cce8aa868e4be751d43006f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dd837dea7cb08ad257522da298c9883225717799d0c4853e01ba05aa277fedcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd837dea7cb08ad257522da298c9883225717799d0c4853e01ba05aa277fedcd->enter($__internal_dd837dea7cb08ad257522da298c9883225717799d0c4853e01ba05aa277fedcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/singlepage.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_dd837dea7cb08ad257522da298c9883225717799d0c4853e01ba05aa277fedcd->leave($__internal_dd837dea7cb08ad257522da298c9883225717799d0c4853e01ba05aa277fedcd_prof);

        
        $__internal_76e4790f679cd2afa290b5e8280c2b49a5be9c132cce8aa868e4be751d43006f->leave($__internal_76e4790f679cd2afa290b5e8280c2b49a5be9c132cce8aa868e4be751d43006f_prof);

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
        return array (  143 => 40,  134 => 39,  119 => 34,  115 => 33,  108 => 28,  101 => 26,  91 => 23,  87 => 22,  79 => 21,  76 => 20,  71 => 19,  61 => 12,  55 => 9,  50 => 8,  41 => 7,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

    



{% block body %}
    <img src=\"{{asset('build/img/'~data.image)}}\">
\t<h2>Titre : {{ data.title }}</h2>

\t<div>
\t\t{{ data.content }}
\t</div>

\t<hr>

\t<br>

\t{% for comment in data.comments %}
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
            <h2>Ecrire un commentaire</h2>
            <input type=\"submit\" onclick=\"window.location ='{{path('login')}}';\" value='Se connecter'/>
            <input type=\"submit\" onclick=\"window.location='{{path('subscribe')}}';\" value=\"S'inscrire\"/>
\t</div>


{% endblock %}\t
{% block javascripts %}
        <script type=\"text/javascript\" src=\"{{asset('build/js/singlepage.js')}}\"></script>
{% endblock %}
", "blog/singleanonymous.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\blog\\singleanonymous.html.twig");
    }
}
