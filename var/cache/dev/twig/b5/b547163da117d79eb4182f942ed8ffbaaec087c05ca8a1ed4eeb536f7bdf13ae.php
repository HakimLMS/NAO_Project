<?php

/* blog/home.html.twig */
class __TwigTemplate_546f3b79b66afb7ea3417d5e828facf7ea672aa8a8b9d6887e18ecf481387a67 extends Twig_Template
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
        $__internal_a6ac8a3cadd8f9b3b99aef252644b166821dbed1f7463a695c704a4e43c4c03b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6ac8a3cadd8f9b3b99aef252644b166821dbed1f7463a695c704a4e43c4c03b->enter($__internal_a6ac8a3cadd8f9b3b99aef252644b166821dbed1f7463a695c704a4e43c4c03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $__internal_c337906e02724e3f53263823ea299ea6979f1cd8063981a60af9f2f256fdf049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c337906e02724e3f53263823ea299ea6979f1cd8063981a60af9f2f256fdf049->enter($__internal_c337906e02724e3f53263823ea299ea6979f1cd8063981a60af9f2f256fdf049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6ac8a3cadd8f9b3b99aef252644b166821dbed1f7463a695c704a4e43c4c03b->leave($__internal_a6ac8a3cadd8f9b3b99aef252644b166821dbed1f7463a695c704a4e43c4c03b_prof);

        
        $__internal_c337906e02724e3f53263823ea299ea6979f1cd8063981a60af9f2f256fdf049->leave($__internal_c337906e02724e3f53263823ea299ea6979f1cd8063981a60af9f2f256fdf049_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_82d782633762aebf5223ea4b1c8eb73b28d9c1d065d5340a13249a689f73ec7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d782633762aebf5223ea4b1c8eb73b28d9c1d065d5340a13249a689f73ec7d->enter($__internal_82d782633762aebf5223ea4b1c8eb73b28d9c1d065d5340a13249a689f73ec7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d727205155cff590c828adefee2fd0b9675a21df0d0759eb9d62971858be875a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d727205155cff590c828adefee2fd0b9675a21df0d0759eb9d62971858be875a->enter($__internal_d727205155cff590c828adefee2fd0b9675a21df0d0759eb9d62971858be875a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<h2>TEST Blog</h2>

\t<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_list");
        echo "\">Page blog</a>


";
        
        $__internal_d727205155cff590c828adefee2fd0b9675a21df0d0759eb9d62971858be875a->leave($__internal_d727205155cff590c828adefee2fd0b9675a21df0d0759eb9d62971858be875a_prof);

        
        $__internal_82d782633762aebf5223ea4b1c8eb73b28d9c1d065d5340a13249a689f73ec7d->leave($__internal_82d782633762aebf5223ea4b1c8eb73b28d9c1d065d5340a13249a689f73ec7d_prof);

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
