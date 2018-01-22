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
        $__internal_d0e6fe0902368d807dbe278b130618b48023ca9be6fdde4a3b2cf1e85cd1721a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e6fe0902368d807dbe278b130618b48023ca9be6fdde4a3b2cf1e85cd1721a->enter($__internal_d0e6fe0902368d807dbe278b130618b48023ca9be6fdde4a3b2cf1e85cd1721a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $__internal_3e4f846be40d3f93ce53752c8dfcf646f420118812319a956280e3be18c6421b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e4f846be40d3f93ce53752c8dfcf646f420118812319a956280e3be18c6421b->enter($__internal_3e4f846be40d3f93ce53752c8dfcf646f420118812319a956280e3be18c6421b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0e6fe0902368d807dbe278b130618b48023ca9be6fdde4a3b2cf1e85cd1721a->leave($__internal_d0e6fe0902368d807dbe278b130618b48023ca9be6fdde4a3b2cf1e85cd1721a_prof);

        
        $__internal_3e4f846be40d3f93ce53752c8dfcf646f420118812319a956280e3be18c6421b->leave($__internal_3e4f846be40d3f93ce53752c8dfcf646f420118812319a956280e3be18c6421b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c3d57d15df4fbd17c4cbe5df3b6aabff8a3f77fbc37df2f3e6ef56ba2960d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c3d57d15df4fbd17c4cbe5df3b6aabff8a3f77fbc37df2f3e6ef56ba2960d37->enter($__internal_2c3d57d15df4fbd17c4cbe5df3b6aabff8a3f77fbc37df2f3e6ef56ba2960d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_257f77844b6f8c886b6ea389328ea880568f01024e2f94770c1609f7598e2760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257f77844b6f8c886b6ea389328ea880568f01024e2f94770c1609f7598e2760->enter($__internal_257f77844b6f8c886b6ea389328ea880568f01024e2f94770c1609f7598e2760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste";
        
        $__internal_257f77844b6f8c886b6ea389328ea880568f01024e2f94770c1609f7598e2760->leave($__internal_257f77844b6f8c886b6ea389328ea880568f01024e2f94770c1609f7598e2760_prof);

        
        $__internal_2c3d57d15df4fbd17c4cbe5df3b6aabff8a3f77fbc37df2f3e6ef56ba2960d37->leave($__internal_2c3d57d15df4fbd17c4cbe5df3b6aabff8a3f77fbc37df2f3e6ef56ba2960d37_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_34a56d94bdbde349665e6af1c2384a6837a32d2bed65dfa92ea1293fd60ddcf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34a56d94bdbde349665e6af1c2384a6837a32d2bed65dfa92ea1293fd60ddcf5->enter($__internal_34a56d94bdbde349665e6af1c2384a6837a32d2bed65dfa92ea1293fd60ddcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa503ff2ad34dbeb451c6ffd8fc293ef706bc88513bf1ad113359518402de4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa503ff2ad34dbeb451c6ffd8fc293ef706bc88513bf1ad113359518402de4bc->enter($__internal_aa503ff2ad34dbeb451c6ffd8fc293ef706bc88513bf1ad113359518402de4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<h2>Blog</h2>

\t

\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 11, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 12
            echo "
\t\t<div style=\"width: 200px; height: 200px; background: #f0f0f0; margin: 20px;\">
\t\t\t<h3>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "title", array()), "html", null, true);
            echo "</h3>
\t\t\t<p>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "content", array()), "html", null, true);
            echo "</p>
\t\t\t<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_single", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\"><button>Lire la suite</button></a>
\t\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t

";
        
        $__internal_aa503ff2ad34dbeb451c6ffd8fc293ef706bc88513bf1ad113359518402de4bc->leave($__internal_aa503ff2ad34dbeb451c6ffd8fc293ef706bc88513bf1ad113359518402de4bc_prof);

        
        $__internal_34a56d94bdbde349665e6af1c2384a6837a32d2bed65dfa92ea1293fd60ddcf5->leave($__internal_34a56d94bdbde349665e6af1c2384a6837a32d2bed65dfa92ea1293fd60ddcf5_prof);

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
        return array (  101 => 19,  91 => 16,  87 => 15,  83 => 14,  79 => 12,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Liste{% endblock %}

{% block body %}

\t<h2>Blog</h2>

\t

\t{% for article in articles %}

\t\t<div style=\"width: 200px; height: 200px; background: #f0f0f0; margin: 20px;\">
\t\t\t<h3>{{ article.title }}</h3>
\t\t\t<p>{{ article.content }}</p>
\t\t\t<a href=\"{{ path('article_single', {'id': article.id}) }}\"><button>Lire la suite</button></a>
\t\t</div>

\t{% endfor %}\t

{% endblock %}\t", "blog/list.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\blog\\list.html.twig");
    }
}
