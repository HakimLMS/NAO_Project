<?php

/* blog/list.html.twig */
class __TwigTemplate_110c9d9656dd6f0ca65494b82d84adce292e626c0f1b615c6b51c394e29de9c4 extends Twig_Template
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
        $__internal_c43a8c3ecdeab12ee3576d6635df9d1475d09721e1e4d8444435d97ae94c41b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c43a8c3ecdeab12ee3576d6635df9d1475d09721e1e4d8444435d97ae94c41b7->enter($__internal_c43a8c3ecdeab12ee3576d6635df9d1475d09721e1e4d8444435d97ae94c41b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $__internal_ba80f472733d2aa66cade79c3c2b0b6351624e57b33e1fc775c2ff7abcf3404f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba80f472733d2aa66cade79c3c2b0b6351624e57b33e1fc775c2ff7abcf3404f->enter($__internal_ba80f472733d2aa66cade79c3c2b0b6351624e57b33e1fc775c2ff7abcf3404f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c43a8c3ecdeab12ee3576d6635df9d1475d09721e1e4d8444435d97ae94c41b7->leave($__internal_c43a8c3ecdeab12ee3576d6635df9d1475d09721e1e4d8444435d97ae94c41b7_prof);

        
        $__internal_ba80f472733d2aa66cade79c3c2b0b6351624e57b33e1fc775c2ff7abcf3404f->leave($__internal_ba80f472733d2aa66cade79c3c2b0b6351624e57b33e1fc775c2ff7abcf3404f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_54e3e29d4467f1fb89d27afc5fba39fc3f6092cf4093b4643dde0c47035c1ea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54e3e29d4467f1fb89d27afc5fba39fc3f6092cf4093b4643dde0c47035c1ea8->enter($__internal_54e3e29d4467f1fb89d27afc5fba39fc3f6092cf4093b4643dde0c47035c1ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2c6d087886c04ff122419dcc53be11811106a87bd2415d71e420d56244055fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6d087886c04ff122419dcc53be11811106a87bd2415d71e420d56244055fbd->enter($__internal_2c6d087886c04ff122419dcc53be11811106a87bd2415d71e420d56244055fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_2c6d087886c04ff122419dcc53be11811106a87bd2415d71e420d56244055fbd->leave($__internal_2c6d087886c04ff122419dcc53be11811106a87bd2415d71e420d56244055fbd_prof);

        
        $__internal_54e3e29d4467f1fb89d27afc5fba39fc3f6092cf4093b4643dde0c47035c1ea8->leave($__internal_54e3e29d4467f1fb89d27afc5fba39fc3f6092cf4093b4643dde0c47035c1ea8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da634b9306380fcc4ac6bfee8a27c41cafa19ef18ab4e72dade2cef18623cae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da634b9306380fcc4ac6bfee8a27c41cafa19ef18ab4e72dade2cef18623cae1->enter($__internal_da634b9306380fcc4ac6bfee8a27c41cafa19ef18ab4e72dade2cef18623cae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b9ef36289fc52de728144a4f25efb3a0891755d370e2290908db4835e5d38f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9ef36289fc52de728144a4f25efb3a0891755d370e2290908db4835e5d38f4->enter($__internal_5b9ef36289fc52de728144a4f25efb3a0891755d370e2290908db4835e5d38f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<h2>Blog</h2>


\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 10, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 11
            echo "
\t\t<div style=\"width: 200px; height: 200px; background: #f0f0f0; margin: 20px;\">
\t\t\t<h3>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "title", array()), "html", null, true);
            echo "</h3>
\t\t\t<p>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "content", array()), "html", null, true);
            echo "</p>
\t\t\t<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_single", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\"><button>Lire la suite</button></a>
\t\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t

";
        
        $__internal_5b9ef36289fc52de728144a4f25efb3a0891755d370e2290908db4835e5d38f4->leave($__internal_5b9ef36289fc52de728144a4f25efb3a0891755d370e2290908db4835e5d38f4_prof);

        
        $__internal_da634b9306380fcc4ac6bfee8a27c41cafa19ef18ab4e72dade2cef18623cae1->leave($__internal_da634b9306380fcc4ac6bfee8a27c41cafa19ef18ab4e72dade2cef18623cae1_prof);

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
        return array (  100 => 18,  90 => 15,  86 => 14,  82 => 13,  78 => 11,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Blog{% endblock %}

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
