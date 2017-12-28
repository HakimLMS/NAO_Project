<?php

/* blog/home.html.twig */
class __TwigTemplate_e07a0de03eba18ff29bffeaa15fce88229c45996a6cb2b7a0ca9e677ce319022 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/home.html.twig", 1);
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
        $__internal_01ebefc52b3ef5943a6ba07bc8172007740bc8619a9ce427897e9b167bcf3333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ebefc52b3ef5943a6ba07bc8172007740bc8619a9ce427897e9b167bcf3333->enter($__internal_01ebefc52b3ef5943a6ba07bc8172007740bc8619a9ce427897e9b167bcf3333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $__internal_1cf0d95417c413163b7637f7d8eadfe1c38fd867db7753a2110dfa725c2a41d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf0d95417c413163b7637f7d8eadfe1c38fd867db7753a2110dfa725c2a41d1->enter($__internal_1cf0d95417c413163b7637f7d8eadfe1c38fd867db7753a2110dfa725c2a41d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01ebefc52b3ef5943a6ba07bc8172007740bc8619a9ce427897e9b167bcf3333->leave($__internal_01ebefc52b3ef5943a6ba07bc8172007740bc8619a9ce427897e9b167bcf3333_prof);

        
        $__internal_1cf0d95417c413163b7637f7d8eadfe1c38fd867db7753a2110dfa725c2a41d1->leave($__internal_1cf0d95417c413163b7637f7d8eadfe1c38fd867db7753a2110dfa725c2a41d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_31665d5c4fc2575ad15cbeb46d9021fa6dfda6c8202a68079acbe4d29697037b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31665d5c4fc2575ad15cbeb46d9021fa6dfda6c8202a68079acbe4d29697037b->enter($__internal_31665d5c4fc2575ad15cbeb46d9021fa6dfda6c8202a68079acbe4d29697037b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ceeb65f3988e50aa873a81174c4386d3596c6fc43c0fdeb3415d096c6f615b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ceeb65f3988e50aa873a81174c4386d3596c6fc43c0fdeb3415d096c6f615b8->enter($__internal_1ceeb65f3988e50aa873a81174c4386d3596c6fc43c0fdeb3415d096c6f615b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<h2>TEST Blog</h2>

\t<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_list");
        echo "\">Page blog</a>


";
        
        $__internal_1ceeb65f3988e50aa873a81174c4386d3596c6fc43c0fdeb3415d096c6f615b8->leave($__internal_1ceeb65f3988e50aa873a81174c4386d3596c6fc43c0fdeb3415d096c6f615b8_prof);

        
        $__internal_31665d5c4fc2575ad15cbeb46d9021fa6dfda6c8202a68079acbe4d29697037b->leave($__internal_31665d5c4fc2575ad15cbeb46d9021fa6dfda6c8202a68079acbe4d29697037b_prof);

    }

    public function getTemplateName()
    {
        return "blog/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}

\t<h2>TEST Blog</h2>

\t<a href=\"{{ path('blog_list') }}\">Page blog</a>


{% endblock %}\t", "blog/home.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\blog\\home.html.twig");
    }
}
