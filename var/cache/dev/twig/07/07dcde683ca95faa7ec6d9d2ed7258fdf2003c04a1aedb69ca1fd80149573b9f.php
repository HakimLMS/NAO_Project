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
        $__internal_de47387d287127ccdeb8ab472b4ff66d1661b9aae48b814aa39140083aee1ef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de47387d287127ccdeb8ab472b4ff66d1661b9aae48b814aa39140083aee1ef1->enter($__internal_de47387d287127ccdeb8ab472b4ff66d1661b9aae48b814aa39140083aee1ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $__internal_22fca480ca26d5540500df591ef25a20a6af9e24cdddd0e434c1023ebf1f21ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22fca480ca26d5540500df591ef25a20a6af9e24cdddd0e434c1023ebf1f21ca->enter($__internal_22fca480ca26d5540500df591ef25a20a6af9e24cdddd0e434c1023ebf1f21ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de47387d287127ccdeb8ab472b4ff66d1661b9aae48b814aa39140083aee1ef1->leave($__internal_de47387d287127ccdeb8ab472b4ff66d1661b9aae48b814aa39140083aee1ef1_prof);

        
        $__internal_22fca480ca26d5540500df591ef25a20a6af9e24cdddd0e434c1023ebf1f21ca->leave($__internal_22fca480ca26d5540500df591ef25a20a6af9e24cdddd0e434c1023ebf1f21ca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d643ada5d2554d48c83641269677bf73576b4760ef598ee3d006155020ea3618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d643ada5d2554d48c83641269677bf73576b4760ef598ee3d006155020ea3618->enter($__internal_d643ada5d2554d48c83641269677bf73576b4760ef598ee3d006155020ea3618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_85bc7fa938a687ac36e33e7db17c860982c2c43246402c87c6f114870992725c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85bc7fa938a687ac36e33e7db17c860982c2c43246402c87c6f114870992725c->enter($__internal_85bc7fa938a687ac36e33e7db17c860982c2c43246402c87c6f114870992725c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste";
        
        $__internal_85bc7fa938a687ac36e33e7db17c860982c2c43246402c87c6f114870992725c->leave($__internal_85bc7fa938a687ac36e33e7db17c860982c2c43246402c87c6f114870992725c_prof);

        
        $__internal_d643ada5d2554d48c83641269677bf73576b4760ef598ee3d006155020ea3618->leave($__internal_d643ada5d2554d48c83641269677bf73576b4760ef598ee3d006155020ea3618_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4a94d161d8523b6775bb85f705598b32d99819bc98131ce1f52f15061a7b3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a94d161d8523b6775bb85f705598b32d99819bc98131ce1f52f15061a7b3e5->enter($__internal_d4a94d161d8523b6775bb85f705598b32d99819bc98131ce1f52f15061a7b3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58c7caf7c2940a49b0f5b9dcdd8d801958c6afee0de5244e5968ff2456819fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c7caf7c2940a49b0f5b9dcdd8d801958c6afee0de5244e5968ff2456819fb0->enter($__internal_58c7caf7c2940a49b0f5b9dcdd8d801958c6afee0de5244e5968ff2456819fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<h2>Blog</h2>

\t<p>
\t\t";
        // line 10
        echo twig_var_dump($this->env, $context, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new Twig_Error_Runtime('Variable "reponse" does not exist.', 10, $this->getSourceContext()); })()));
        echo "

\t</p>

\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 14, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 15
            echo "
\t\t<div style=\"width: 200px; height: 200px; background: #f0f0f0; margin: 20px;\">
\t\t\t<h3>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "title", array()), "html", null, true);
            echo "</h3>
\t\t\t<p>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "content", array()), "html", null, true);
            echo "</p>
\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_single", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\"><button>Lire la suite</button></a>
\t\t</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t

";
        
        $__internal_58c7caf7c2940a49b0f5b9dcdd8d801958c6afee0de5244e5968ff2456819fb0->leave($__internal_58c7caf7c2940a49b0f5b9dcdd8d801958c6afee0de5244e5968ff2456819fb0_prof);

        
        $__internal_d4a94d161d8523b6775bb85f705598b32d99819bc98131ce1f52f15061a7b3e5->leave($__internal_d4a94d161d8523b6775bb85f705598b32d99819bc98131ce1f52f15061a7b3e5_prof);

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
        return array (  107 => 22,  97 => 19,  93 => 18,  89 => 17,  85 => 15,  81 => 14,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Liste{% endblock %}

{% block body %}

\t<h2>Blog</h2>

\t<p>
\t\t{{ dump(reponse) }}

\t</p>

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
