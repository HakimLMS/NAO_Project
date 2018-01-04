<?php

/* blog/list.html.twig */
class __TwigTemplate_23ea548fb64ecb8a3896d6bfabc4cb769f6184d8ee9113dc95d8051aa342d823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/list.html.twig", 1);
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
        $__internal_d6e4d2a7211413d75a63e855c1d291e4562f68bc0c996db322936fb0f73a3a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6e4d2a7211413d75a63e855c1d291e4562f68bc0c996db322936fb0f73a3a20->enter($__internal_d6e4d2a7211413d75a63e855c1d291e4562f68bc0c996db322936fb0f73a3a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $__internal_34b026dc253caae76fd5d8728aefb721def5b28b836ee58bbfc9d839b9d8d6be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b026dc253caae76fd5d8728aefb721def5b28b836ee58bbfc9d839b9d8d6be->enter($__internal_34b026dc253caae76fd5d8728aefb721def5b28b836ee58bbfc9d839b9d8d6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6e4d2a7211413d75a63e855c1d291e4562f68bc0c996db322936fb0f73a3a20->leave($__internal_d6e4d2a7211413d75a63e855c1d291e4562f68bc0c996db322936fb0f73a3a20_prof);

        
        $__internal_34b026dc253caae76fd5d8728aefb721def5b28b836ee58bbfc9d839b9d8d6be->leave($__internal_34b026dc253caae76fd5d8728aefb721def5b28b836ee58bbfc9d839b9d8d6be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_07ae38935b253394c04472f361f2b7f6719a694ba1fe7e072a8d1b7bef3a35d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07ae38935b253394c04472f361f2b7f6719a694ba1fe7e072a8d1b7bef3a35d2->enter($__internal_07ae38935b253394c04472f361f2b7f6719a694ba1fe7e072a8d1b7bef3a35d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af5febff25a27ea2732c90ad02fffd8794ee5ed6ccb3abd82a97b10f9046109b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5febff25a27ea2732c90ad02fffd8794ee5ed6ccb3abd82a97b10f9046109b->enter($__internal_af5febff25a27ea2732c90ad02fffd8794ee5ed6ccb3abd82a97b10f9046109b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste";
        
        $__internal_af5febff25a27ea2732c90ad02fffd8794ee5ed6ccb3abd82a97b10f9046109b->leave($__internal_af5febff25a27ea2732c90ad02fffd8794ee5ed6ccb3abd82a97b10f9046109b_prof);

        
        $__internal_07ae38935b253394c04472f361f2b7f6719a694ba1fe7e072a8d1b7bef3a35d2->leave($__internal_07ae38935b253394c04472f361f2b7f6719a694ba1fe7e072a8d1b7bef3a35d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c6c1c1a89f07ea7f7748b502212c63090e7579f771b83a1edc68c17feaa7254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6c1c1a89f07ea7f7748b502212c63090e7579f771b83a1edc68c17feaa7254->enter($__internal_2c6c1c1a89f07ea7f7748b502212c63090e7579f771b83a1edc68c17feaa7254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25fce45318b8c3a737536969cb60822ed437a3759645b9ab89e4cd10ea86d890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25fce45318b8c3a737536969cb60822ed437a3759645b9ab89e4cd10ea86d890->enter($__internal_25fce45318b8c3a737536969cb60822ed437a3759645b9ab89e4cd10ea86d890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<h2>Blog</h2>

\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 9, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 10
            echo "
\t\t<div style=\"width: 200px; height: 200px; background: #f0f0f0; margin: 20px;\">
\t\t\t<h3>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "title", array()), "html", null, true);
            echo "</h3>
\t\t\t<p>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "content", array()), "html", null, true);
            echo "</p>
\t\t\t<a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_single", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\"><button>Lire la suite</button></a>
\t\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t

";
        
        $__internal_25fce45318b8c3a737536969cb60822ed437a3759645b9ab89e4cd10ea86d890->leave($__internal_25fce45318b8c3a737536969cb60822ed437a3759645b9ab89e4cd10ea86d890_prof);

        
        $__internal_2c6c1c1a89f07ea7f7748b502212c63090e7579f771b83a1edc68c17feaa7254->leave($__internal_2c6c1c1a89f07ea7f7748b502212c63090e7579f771b83a1edc68c17feaa7254_prof);

    }

    public function getTemplateName()
    {
        return "blog/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  89 => 14,  85 => 13,  81 => 12,  77 => 10,  73 => 9,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Liste{% endblock %}

{% block body %}

\t<h2>Blog</h2>

\t{% for article in articles %}

\t\t<div style=\"width: 200px; height: 200px; background: #f0f0f0; margin: 20px;\">
\t\t\t<h3>{{ article.title }}</h3>
\t\t\t<p>{{ article.content }}</p>
\t\t\t<a href=\"{{ path('article_single', {'id': article.id}) }}\"><button>Lire la suite</button></a>
\t\t</div>

\t{% endfor %}\t

{% endblock %}\t", "blog/list.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\blog\\list.html.twig");
    }
}
