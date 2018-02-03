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
        $__internal_84cc994136381e482d0ecae4765e89f90486b11857693ecb1d9bc8acbb79adb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84cc994136381e482d0ecae4765e89f90486b11857693ecb1d9bc8acbb79adb5->enter($__internal_84cc994136381e482d0ecae4765e89f90486b11857693ecb1d9bc8acbb79adb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $__internal_a551dc435a42316c8a3749ddc25b49a5badf18dde68ed53a84de862bdcd4030b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a551dc435a42316c8a3749ddc25b49a5badf18dde68ed53a84de862bdcd4030b->enter($__internal_a551dc435a42316c8a3749ddc25b49a5badf18dde68ed53a84de862bdcd4030b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84cc994136381e482d0ecae4765e89f90486b11857693ecb1d9bc8acbb79adb5->leave($__internal_84cc994136381e482d0ecae4765e89f90486b11857693ecb1d9bc8acbb79adb5_prof);

        
        $__internal_a551dc435a42316c8a3749ddc25b49a5badf18dde68ed53a84de862bdcd4030b->leave($__internal_a551dc435a42316c8a3749ddc25b49a5badf18dde68ed53a84de862bdcd4030b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_312bd4058138af9b1f689389d0003d33293568bd853a940042422ab28b10587a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_312bd4058138af9b1f689389d0003d33293568bd853a940042422ab28b10587a->enter($__internal_312bd4058138af9b1f689389d0003d33293568bd853a940042422ab28b10587a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d690f7506688844bde94f8ea11003f1ec1a40e441baee1b65316d71cab6777f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d690f7506688844bde94f8ea11003f1ec1a40e441baee1b65316d71cab6777f->enter($__internal_1d690f7506688844bde94f8ea11003f1ec1a40e441baee1b65316d71cab6777f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<h2>TEST Blog</h2>

\t<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_list");
        echo "\">Page blog</a>


";
        
        $__internal_1d690f7506688844bde94f8ea11003f1ec1a40e441baee1b65316d71cab6777f->leave($__internal_1d690f7506688844bde94f8ea11003f1ec1a40e441baee1b65316d71cab6777f_prof);

        
        $__internal_312bd4058138af9b1f689389d0003d33293568bd853a940042422ab28b10587a->leave($__internal_312bd4058138af9b1f689389d0003d33293568bd853a940042422ab28b10587a_prof);

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
