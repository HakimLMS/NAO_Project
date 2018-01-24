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
        $__internal_1a58d07e5e13f6e95ed252432b83b7d7e84d0c86d0e9aea4ee0337783e97318e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a58d07e5e13f6e95ed252432b83b7d7e84d0c86d0e9aea4ee0337783e97318e->enter($__internal_1a58d07e5e13f6e95ed252432b83b7d7e84d0c86d0e9aea4ee0337783e97318e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $__internal_53cec7af6c94203fe634812460dc872a912a54c4aa80acf531dfe70b2b59d08a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53cec7af6c94203fe634812460dc872a912a54c4aa80acf531dfe70b2b59d08a->enter($__internal_53cec7af6c94203fe634812460dc872a912a54c4aa80acf531dfe70b2b59d08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a58d07e5e13f6e95ed252432b83b7d7e84d0c86d0e9aea4ee0337783e97318e->leave($__internal_1a58d07e5e13f6e95ed252432b83b7d7e84d0c86d0e9aea4ee0337783e97318e_prof);

        
        $__internal_53cec7af6c94203fe634812460dc872a912a54c4aa80acf531dfe70b2b59d08a->leave($__internal_53cec7af6c94203fe634812460dc872a912a54c4aa80acf531dfe70b2b59d08a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ea1b117ad7bb94dbb05417264b5e54599bad1aaba9d2bef41d1c153409c22e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea1b117ad7bb94dbb05417264b5e54599bad1aaba9d2bef41d1c153409c22e3->enter($__internal_8ea1b117ad7bb94dbb05417264b5e54599bad1aaba9d2bef41d1c153409c22e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_647b917998bc3c0db6aabfb5495fff68848fbbd880fe074050dfe996419b6f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_647b917998bc3c0db6aabfb5495fff68848fbbd880fe074050dfe996419b6f9b->enter($__internal_647b917998bc3c0db6aabfb5495fff68848fbbd880fe074050dfe996419b6f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<h2>TEST Blog</h2>

\t<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_list");
        echo "\">Page blog</a>


";
        
        $__internal_647b917998bc3c0db6aabfb5495fff68848fbbd880fe074050dfe996419b6f9b->leave($__internal_647b917998bc3c0db6aabfb5495fff68848fbbd880fe074050dfe996419b6f9b_prof);

        
        $__internal_8ea1b117ad7bb94dbb05417264b5e54599bad1aaba9d2bef41d1c153409c22e3->leave($__internal_8ea1b117ad7bb94dbb05417264b5e54599bad1aaba9d2bef41d1c153409c22e3_prof);

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
