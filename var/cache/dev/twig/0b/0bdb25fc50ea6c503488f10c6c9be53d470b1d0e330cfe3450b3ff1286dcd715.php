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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bf8beeae747999d0bbe8ff910e6bba8233ab0251379aee2402cd9c0ee63e922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bf8beeae747999d0bbe8ff910e6bba8233ab0251379aee2402cd9c0ee63e922->enter($__internal_5bf8beeae747999d0bbe8ff910e6bba8233ab0251379aee2402cd9c0ee63e922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/single.html.twig"));

        $__internal_94cce4fed0323acfac041d3c27f07594653a305cf5cc152f26fd6c1cc269b211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94cce4fed0323acfac041d3c27f07594653a305cf5cc152f26fd6c1cc269b211->enter($__internal_94cce4fed0323acfac041d3c27f07594653a305cf5cc152f26fd6c1cc269b211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/single.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bf8beeae747999d0bbe8ff910e6bba8233ab0251379aee2402cd9c0ee63e922->leave($__internal_5bf8beeae747999d0bbe8ff910e6bba8233ab0251379aee2402cd9c0ee63e922_prof);

        
        $__internal_94cce4fed0323acfac041d3c27f07594653a305cf5cc152f26fd6c1cc269b211->leave($__internal_94cce4fed0323acfac041d3c27f07594653a305cf5cc152f26fd6c1cc269b211_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_766a417a1a106702dfacdff059d3455149ed76744a5a94b31f189955758a05ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_766a417a1a106702dfacdff059d3455149ed76744a5a94b31f189955758a05ca->enter($__internal_766a417a1a106702dfacdff059d3455149ed76744a5a94b31f189955758a05ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6631b77799cb7c351cc5324a73866592518b11c217b3bc63b2b920a12970577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6631b77799cb7c351cc5324a73866592518b11c217b3bc63b2b920a12970577->enter($__internal_d6631b77799cb7c351cc5324a73866592518b11c217b3bc63b2b920a12970577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<h2>Titre : ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 5, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h2>

\t<div>
\t\t";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 8, $this->getSourceContext()); })()), "content", array()), "html", null, true);
        echo "
\t</div>

\t<hr>

\t<h2>Espace commentaire</h2>

\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 15, $this->getSourceContext()); })()), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 16
            echo "\t\t<div>
\t\t\t<p><em>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "author", array()), "html", null, true);
            echo "</em></p>
\t\t\t<p>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "content", array()), "html", null, true);
            echo "</p>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
";
        
        $__internal_d6631b77799cb7c351cc5324a73866592518b11c217b3bc63b2b920a12970577->leave($__internal_d6631b77799cb7c351cc5324a73866592518b11c217b3bc63b2b920a12970577_prof);

        
        $__internal_766a417a1a106702dfacdff059d3455149ed76744a5a94b31f189955758a05ca->leave($__internal_766a417a1a106702dfacdff059d3455149ed76744a5a94b31f189955758a05ca_prof);

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
        return array (  88 => 21,  79 => 18,  75 => 17,  72 => 16,  68 => 15,  58 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}

\t<h2>Titre : {{ article.title }}</h2>

\t<div>
\t\t{{ article.content }}
\t</div>

\t<hr>

\t<h2>Espace commentaire</h2>

\t{% for comment in article.comments %}
\t\t<div>
\t\t\t<p><em>{{ comment.author }}</em></p>
\t\t\t<p>{{ comment.content }}</p>
\t\t</div>
\t{% endfor %}

{% endblock %}\t", "blog/single.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\blog\\single.html.twig");
    }
}
